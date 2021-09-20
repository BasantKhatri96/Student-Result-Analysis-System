<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFirstSemisterIndianLanguageRequest;
use App\Models\FirstSemIndianLanguage;
use Illuminate\Http\Request;

class FirstSemisterindianlanguageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $firstsemindianlanguage = FirstSemIndianLanguage::all();
        
        return view('firstsemisterindianlanguage.index',['firstsemindianlanguage' => $firstsemindianlanguage]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('firstsemisterindianlanguage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFirstSemisterIndianLanguageRequest $request)
    {
        $validated = $request->validated();

       FirstSemIndianLanguage::create($validated);

       $request->session()->flash('status','The Marks Entered successfully');

       return redirect()->route('IndianLanguage.index');
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

        $firstsemindianlanguage = FirstSemIndianLanguage::findOrFail($id);

        return view('firstsemisterindianlanguage.edit',['firstsemindianlanguage' => $firstsemindianlanguage]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreFirstSemisterIndianLanguageRequest $request, $id)
    {
        $firstsemindianlanguage =FirstSemIndianLanguage::findOrFail($id);
        $validated = $request->validated();
    

        $firstsemindianlanguage->fill($validated);
        $firstsemindianlanguage->save();
        
        $request->session()->flash('status','The Marks Updated successfully');
        return redirect()->route('IndianLanguage.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $firstsemindianlanguage = FirstSemIndianLanguage::findOrFail($id);
        $firstsemindianlanguage->delete();
        session()->flash('status','The Record Deleated successfully');
        return redirect()->route('IndianLanguage.index');
    }

   
}
