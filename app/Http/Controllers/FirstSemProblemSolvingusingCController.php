<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProblemSolvingUsingCRequest;
use App\Models\FirstSemProblemSolvingUsingC;
use Illuminate\Http\Request;

class FirstSemProblemSolvingusingCController extends Controller
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
        $firstsemproblemsolvingusingc = FirstSemProblemSolvingUsingC::all();
        return view('firstsemisterproblemsolvingusingc.index',['firstsemproblemsolvingusingc' => $firstsemproblemsolvingusingc]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('firstsemisterproblemsolvingusingc.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProblemSolvingUsingCRequest $request)
    {
        $validated = $request->validated();

       FirstSemProblemSolvingusingC::create($validated);

       $request->session()->flash('status','The Marks Entered successfully');

       return redirect()->route('FirstSemProblemSolvingUsingC.index');
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
        $firstsemproblemsilvingusingc = FirstSemProblemSolvingUsingC::findOrFail($id);

        return view('firstsemisterproblemsolvingusingc.edit',['firstsemproblemsilvingusingc' => $firstsemproblemsilvingusingc]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProblemSolvingUsingCRequest $request, $id)
    {
        $firstsemproblemsolvingusingc =FirstSemProblemSolvingUsingC::findOrFail($id);
        $validated = $request->validated();
    

        $firstsemproblemsolvingusingc->fill($validated);
        $firstsemproblemsolvingusingc->save();
        
        $request->session()->flash('status','The Marks Updated successfully');
        return redirect()->route('FirstSemProblemSolvingUsingC.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $firstsemproblemsolvingusingc = FirstSemProblemSolvingUsingC::findOrFail($id);
        $firstsemproblemsolvingusingc->delete();
        session()->flash('status','The Record Deleated successfully');
        return redirect()->route('FirstSemProblemSolvingUsingC.index');
    }
}
