<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFirstSemEnglishRequest;
use App\Models\FirstSemEnglish;
use Illuminate\Http\Request;

class FirstSemEnglishController extends Controller
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
        $firstsemenglish = FirstSemEnglish::all();
       
        // $status = $firstsemenglish->U1 + $firstsemenglish->U2;
        return view('firstsemenglish.index',['firstsemenglish' => $firstsemenglish]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('firstsemenglish.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFirstSemEnglishRequest $request)
    {
        $validated = $request->validated();

       FirstSemEnglish::create($validated);
       

       $request->session()->flash('status','The Marks Entered successfully');

       return redirect()->route('FirstSemEnglish.index');
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
        $firstsemenglish = FirstSemEnglish::findOrFail($id);

        return view('firstsemenglish.edit',['firstsemenglish' => $firstsemenglish]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreFirstSemEnglishRequest $request, $id)
    {
        $firstsemenglish=FirstSemEnglish::findOrFail($id);
        $validated = $request->validated();
    

        $firstsemenglish->fill($validated);
        $firstsemenglish->save();
        
        $request->session()->flash('status','The Marks Updated successfully');
        return redirect()->route('FirstSemEnglish.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $firstsemenglish = FirstSemEnglish::findOrFail($id);
        $firstsemenglish->delete();
        session()->flash('status','The Record Deleated successfully');
        return redirect()->route('FirstSemEnglish.index');
    }

    public function deleteallrecords()
    {
        $firstsemenglish = FirstSemEnglish::all();
        $firstsemenglish->delete();
dd($firstsemenglish);
        return redirect()->route('FirstSemEnglish.index');
    }
}
