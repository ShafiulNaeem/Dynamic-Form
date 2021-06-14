<?php

namespace App\Http\Controllers;

use App\Models\FormValue;
use Illuminate\Http\Request;

class FormValueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formValue = FormValue::with('formData')->get();
        return response()->json($formValue,200);
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
            'name' => 'sometimes',
            'phone' => 'sometimes',
            'email' => 'sometimes',
            'address' => 'sometimes',
//            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ));

        $formData = new FormValue();
        $formData->form_data_id = $request->form_data_id;
        $formData->name = $request->name;
        $formData->phone = $request->phone;
        $formData->email = $request->email;
        $formData->address = $request->address;

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
        //
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
