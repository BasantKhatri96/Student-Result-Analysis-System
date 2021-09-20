<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFirstSemDiscreteMathematicsRequest;
use App\Models\FirstSemDiscreteMathamatic;
use Illuminate\Http\Request;

class FirstSemDiscretemathematicsController extends Controller
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
        $FirstSemDiscreteMathamatic = FirstSemDiscreteMathamatic::all();
       
        // $status = $firstsemenglish->U1 + $firstsemenglish->U2;
        return view('firstsemisterdiscretemathematics.index',['FirstSemDiscreteMathamatic' => $FirstSemDiscreteMathamatic]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('firstsemisterdiscretemathematics.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFirstSemDiscreteMathematicsRequest $request)
    {
        $validated = $request->validated();

        FirstSemDiscreteMathamatic::create($validated);
       

       $request->session()->flash('status','The Marks Entered successfully');

       return redirect()->route('FirstSemDiscreteMathematics.index');
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
        $FirstSemDiscreteMathamatic = FirstSemDiscreteMathamatic::findOrFail($id);

        return view('firstsemisterdiscretemathematics.edit',['firstsemenglish' => $FirstSemDiscreteMathamatic]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreFirstSemDiscreteMathematicsRequest $request, $id)
    {
        $firstsemenglish=FirstSemDiscreteMathamatic::findOrFail($id);
        $validated = $request->validated();
    

        $firstsemenglish->fill($validated);
        $firstsemenglish->save();
        
        $request->session()->flash('status','The Marks Updated successfully');
        return redirect()->route('FirstSemDiscreteMathematics.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $firstsemenglish = FirstSemDiscreteMathamatic::findOrFail($id);
        $firstsemenglish->delete();
        session()->flash('status','The Record Deleated successfully');
        return redirect()->route('FirstSemDiscreteMathematics.index');
    }

    public function deleteallrecords()
    {
        $firstsemenglish = FirstSemDiscreteMathamatic::all();
        $firstsemenglish->delete();
        dd($firstsemenglish);
        return redirect()->route('FirstSemDiscreteMathematics.index');
    }
}
