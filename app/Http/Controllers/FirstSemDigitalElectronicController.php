<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorefirstSemDigitalElectronicRequest;
use App\Models\FirstSemDigitalElectronics;
use Illuminate\Http\Request;

class FirstSemDigitalElectronicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $firstsemdigitalelectronic = FirstSemDigitalElectronics::all();
        return view('firstsemdigitalelectronics.index',['firstsemdigitalelectronic' => $firstsemdigitalelectronic]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('firstsemdigitalelectronics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorefirstSemDigitalElectronicRequest $request)
    {
        $validated = $request->validated();
        FirstSemDigitalElectronics::create($validated);

        $request->session()->flash('status','The Marks Entered successfully');
        return redirect()->route('FirstSemDigitalElectronic.index');
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
        $firstsemdigitalelectronic = FirstSemDigitalElectronics::FindOrFail($id);

        return view('firstsemdigitalelectronics.edit',['firstsemdigitalelectronic' => $firstsemdigitalelectronic]);

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
