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
                    </tr>

                    @foreach($entries as $entry)
                        <tr id="entry-{{$entry->id}}">
                            <td>{{$entry->id}}</td>
                            <td>{{$entry->name}}</td>
                            <td>{{$entry->email}}</td>
                            <td>{{$entry->phone}}</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#more-info-modal-{{$entry->id}}" data-backdrop="static">More Info</button>
                                <button type="button" class="btn btn-danger" onclick="deleteEntry({{$entry->id}})">Delete</button>
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
                            {{$entry->address1}},
                            @if(!empty($entry->address2)){{$entry->address2}},@endif
                            {{$entry->city}}, {{$entry->state}} - {{$entry->zip}}
                        </p>
                        <p>
                            <strong>Created on:</strong> {{ date('F d, Y', strtotime($entry->created_at)) }} <br />
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
        $(document).ready(function () {

            deleteEntry = function (id){
                $.ajax({
                    url: '/sell-form/' + id,
                    type: 'DELETE',
                    success: function(result){
                        $('#entry-' + id).remove();
                    }
                });
            }
        });

    </script>

@endsection