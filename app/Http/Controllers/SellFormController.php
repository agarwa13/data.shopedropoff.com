<?php

namespace App\Http\Controllers;

use App\SellForm;
use Illuminate\Http\Request;

class SellFormController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entries = SellForm::all();
        return view('sell-form.index')
            ->with('entries',$entries);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sell-form.test-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $entry = SellForm::firstOrNew(['data_id' => $request->data_id]);

        if($request->has('name')){
            $entry->name = $request->name;
        }

        if($request->has('email')){
            $entry->email = $request->email;
        }

        if($request->has('phone')){
            $entry->phone = $request->phone;
        }

        if($request->has('address1')){
            $entry->address1 = $request->address1;
        }

        if($request->has('address2')){
            $entry->address2 = $request->address2;
        }

        if($request->has('city')){
            $entry->city = $request->city;
        }

        if($request->has('state')){
            $entry->state = $request->state;
        }

        if($request->has('zip')){
            $entry->zip = $request->zip;
        }

        if($request->has('items')){
            $entry->items = $request->items;
        }

        $entry->save();

        return response()->download(public_path('data.png'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $entry = SellForm::findOrFail($id);

        if($request->has('name')){
            $entry->name = $request->name;
        }

        if($request->has('email')){
            $entry->email = $request->email;
        }

        if($request->has('phone')){
            $entry->phone = $request->phone;
        }

        if($request->has('address1')){
            $entry->address1 = $request->address1;
        }

        if($request->has('address2')){
            $entry->address2 = $request->address2;
        }

        if($request->has('city')){
            $entry->city = $request->city;
        }

        if($request->has('state')){
            $entry->state = $request->state;
        }

        if($request->has('zip')){
            $entry->zip = $request->zip;
        }

        if($request->has('items')){
            $entry->items = $request->items;
        }

        $entry->save();

        return response([
            'success' => true,
            'id' => $entry->id
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entry = SellForm::findOrFail($id);
        $entry->delete();
        return response()->json(['success' => true]);
    }
}
