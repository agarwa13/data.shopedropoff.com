@extends('template.default')
{{--@extends('layouts.app')--}}
@section('body')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Consign Form Partial Submissions</h1>
                <p>
                    As a user fills out the consign form on shopedropoff.com, the data is stored in this database.
                </p>

                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Actions</th>
                        <th>Status</th>
                        <th>Days</th>
                        <th>Submitted On</th>

                    </tr>

                    <?php var_dump($entries); ?>

                    @foreach($entries as $entry)
                        <tr id="entry-{{$entry->id}}">
                            <td>{{$entry->id}}</td>
                            <td>{{$entry->name}}</td>
                            <td>{{$entry->email}}</td>
                            <td>{{$entry->phone}}</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#more-info-modal-{{$entry->id}}" data-backdrop="static">More Info</button>
                                <br>
                                <button type="button" class="btn btn-danger" onclick="deleteEntry({{$entry->id}})">Delete</button>
                                <br>
                                <button type="button" class="btn btn-default" id="contacted-{{$entry->id}}" onclick="updateContacted({{$entry->id}})">@if($entry->contacted) Contacted @else Not Contacted @endif</button>
                            </td>
                            <td>@if($entry->submitted) Submitted @else Pending @endif</td>
                            <td>

                                <div class="checkbox">
                                    <label><input id="seven-day-{{$entry->id}}" onclick="updateSevenDay({{$entry->id}})" type="checkbox" value="{{$entry->seven_day}}" @if($entry->seven_day) checked @endif >7 Day</label>
                                </div>

                                <div class="checkbox">
                                    <label><input id="fourteen-day-{{$entry->id}}" onclick="updateFourteenDay({{$entry->id}})" type="checkbox" value="{{$entry->fourteen_day}}" @if($entry->fourteen_day) checked @endif >14 Day</label>
                                </div>

                                <div class="checkbox">
                                    <label><input id="thirty-day-{{$entry->id}}" onclick="updateThirtyDay({{$entry->id}})" type="checkbox" value="{{$entry->thirty_day}}" @if($entry->thirty_day) checked @endif >30 Day</label>
                                </div>
                                
                            </td>

                            <td>
                                {{$entry->created_at->toDateString()}}
                            </td>

                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>

    @foreach($entries as $entry)
        <div class="modal" id="more-info-modal-{{$entry->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">More Info</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            <strong>Name:</strong> {{$entry->name or "Not Available"}}
                        </p>
                        <p>
                            <strong>Email:</strong> {{$entry->email or "Not Available"}}
                        </p>
                        <p>
                            <strong>Phone:</strong> {{$entry->phone or "Not Available"}}
                        </p>
                        <p>
                            <strong>Address:</strong>
                            <br>
                            @if(!empty($entry->address1)){{$entry->address1}},@endif
                            @if(!empty($entry->address2)){{$entry->address2}},@endif
                            @if(!empty($entry->city)){{$entry->city}},@endif @if(!empty($entry->state)){{$entry->state}} @endif @if(!empty($entry->zip)) - {{$entry->zip}}@endif
                        </p>
                        <p>
                            <strong>Created on:</strong> {{ date('F d, Y', strtotime($entry->created_at)) }}
                        </p>
                        <p>
                            <strong>Last modified:</strong> {{ date('F d, Y', strtotime($entry->updated_at)) }}<br />
                        </p>
                        <p>
                            <strong>Items:</strong>
                            <br>
                            @foreach($entry->items as $item)
                                @if(!empty($item))
                                    {{$item}} <br>
                                @endif
                            @endforeach
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <script>

        var deleteEntry;
        var updateContacted;
        var updateSevenDay;
        var updateFourteenDay;
        var updateThirtyDay;

        $(document).ready(function () {

            $('#loadingDiv')
                    .hide()  // Hide it initially

                    .ajaxStart(function() {
                        $(this).show();
                    })

                    .ajaxStop(function() {
                        $(this).hide();
                    }
            );

            deleteEntry = function (id){
                $.ajax({
                    url: '/sell-form/' + id,
                    type: 'DELETE',
                    success: function(result){
                        $('#entry-' + id).remove();
                    }
                });
            };

            updateContacted = function(id){

                $.ajax({
                    url: '/sell-form/' + id,
                    type: 'PUT',
                    data: {
                        field: 'contacted'
                    },
                    success: function(result){
                        console.log(result);
                        if(result.contacted){
                            $('#contacted-' + id).html('Contacted');
                        }else{
                            $('#contacted-' + id).html('Not Contacted');
                        }

                    }
                });
            };


            updateSevenDay = function(id){

                $.ajax({
                    url: '/sell-form/' + id,
                    type: 'PUT',
                    data: {
                        field: 'seven_day'
                    },
                    success: function(result){
                        console.log(result);
                        if(result.seven_day){
                            $('#seven-day-' + id).prop('checked', true);
                        }else{
                            $('#seven-day-' + id).prop('checked', false);
                        }

                    }
                });
            };


            updateFourteenDay = function(id) {

                $.ajax({
                    url: '/sell-form/' + id,
                    type: 'PUT',
                    data: {
                        field: 'fourteen_day'
                    },
                    success: function (result) {
                        console.log(result);
                        if (result.fourteen_day) {
                            $('#fourteen-day-' + id).prop('checked', true);
                        } else {
                            $('#fourteen-day-' + id).prop('checked', false);
                        }

                    }
                });

            };


            updateThirtyDay = function(id){

                $.ajax({
                    url: '/sell-form/' + id,
                    type: 'PUT',
                    data: {
                        field: 'thirty_day'
                    },
                    success: function(result){
                        console.log(result);
                        if(result.thirty_day){
                            $('#thirty-day-' + id).prop('checked', true);
                        }else{
                            $('#thirty-day-' + id).prop('checked', false);
                        }

                    }
                });
            };

        });





    </script>






@endsection