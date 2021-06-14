<?php

namespace App\Http\Controllers;

use App\Models\FormData;
use App\Models\FormValue;
use Illuminate\Http\Request;

class FormDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formData = FormData::all();
        return response()->json($formData,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'form_name' => 'required',
            'name' => 'sometimes',
            'phone' => 'sometimes',
            'email' => 'sometimes',
            'address' => 'sometimes',
            'input_name' => 'sometimes',
            'input_phone' => 'sometimes',
            'input_email' => 'sometimes',
            'input_address' => 'sometimes',
//            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ));

        $formData = new FormData();
        $formData->form_name = $request->form_name;
        $formData->name = $request->name;
        $formData->phone = $request->phone;
        $formData->email = $request->email;
        $formData->address = $request->address;
        $formData->input_name = $request->input_name;
        $formData->input_phone = $request->input_phone;
        $formData->input_email = $request->input_email;
        $formData->input_address = $request->input_address;

        $formData->save();
        return response()->json('Successfully Data inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $formData = FormData::where('id',$id)->get();
        //dd($formData);
        return response()->json($formData,200);
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
        $this->validate($request, array(

            'name' => 'sometimes',
            'phone' => 'sometimes',
            'email' => 'sometimes',
            'address' => 'sometimes',
//            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ));

        $formData = new FormValue();
        $formData->form_data_id = $id;
        $formData->name = $request->name;
        $formData->phone = $request->phone;
        $formData->email = $request->email;
        $formData->address = $request->address;

        $formData->save();
        return response()->json('Successfully Data inserted');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
