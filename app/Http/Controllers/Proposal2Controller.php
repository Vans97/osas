<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Proposal2;


class Proposal2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proposals2= Proposal2::all();
        return view ('proposal2Page.create',['proposals2'=>$proposals2,'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'date_approved'=>'required',
            'act_level'=>'required',
            'act_category'=>'required',
            'organize'=>'required',
            'date'=>'required',
            'no_participant'=>'required',
            'cost'=>'required'


        ]);

        $proposal2 = new Proposal2();
        $proposal2->date_approved = $request->input('date_approved');
        $proposal2->act_level = $request->input('act_level');
        $proposal2->act_category = $request->input('act_category');
        $proposal2->organize = $request->input('organize');
        $proposal2->date = $request->input('date');
        $proposal2->no_participant = $request->input('no_participant');
        $proposal2->cost = $request->input('cost');
        $proposal2->user_id =auth()->user()->id;
        $proposal2->save();
        // return redirect('/proposalPage')->with('success', 'Proposal Created');
        return redirect('/home')->with('success', 'Proposal Created');
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
        $test = Proposal2::find($id);
    //     $test = Proposal::all();
    //     // $test = DB::table('proposals')
                    
    //     //             ->get();

    //    //check correct user
         if(auth()->user()->id !== $test->user_id){
            return redirect('/proposalPage')->with('error','Unauthorized Page');
        }
        return view('proposal2Page.edit')->with ('test',$test);
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
        $this->validate($request, [

            'date_approved'=>'required',
            'act_level'=>'required',
            'act_category'=>'required',
            'organize'=>'required',
            'date'=>'required',
            'no_participant'=>'required',
            'cost'=>'required'


        ]);

        $proposal2 = Proposal2::find($id);
        $proposal2->date_approved = $request->input('date_approved');
        $proposal2->act_level = $request->input('act_level');
        $proposal2->act_category = $request->input('act_category');
        $proposal2->organize = $request->input('organize');
        $proposal2->date = $request->input('date');
        $proposal2->no_participant = $request->input('no_participant');
        $proposal2->cost = $request->input('cost');
        $proposal2->save();
        // return redirect('/proposalPage')->with('success', 'Proposal Created');
        return redirect('/home')->with('success', 'Proposal Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proposal = Proposal2::find($id);
        $proposal->delete();
        return redirect('/home')->with('success', 'Proposal Deleted');
    }
}
