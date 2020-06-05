<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Proposal;
use App\Proposal2;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('admin');
        $proposals = Proposal::all();
        return view('admin',['proposals'=>$proposals,'layout'=>'index']);
    }

    public function show($id)
    {
        // $proposal = Proposal::find($id);
        // $proposals = Proposal::all();
        // return view('adminUpdate.show',['proposals'=>$proposals,'proposal'=>$proposal, 'layout'=>'show']);
      
       $proposal1 = DB::table('proposals')->get();
       $proposal2 = DB::table('proposals2')->get();

       return view('adminUpdate.show',['proposal1'=>$proposal1, 'proposal2'=>$proposal2]);

    }

    public function edit($id)
    {
        $proposal = Proposal::find($id);
        $proposals = Proposal::all();

        
        return view('adminUpdate.edit',['proposals'=>$proposals,'proposal'=>$proposal, 'layout'=>'edit']);
    }

    public function edit2($id)
    {
        $test = Proposal2::find($id);
        $proposals2 = Proposal2::all();

        return view('adminUpdate.edit2',['test'=>$test,'proposals2'=>$proposals2, 'layout'=>'edit']);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [

            'title'=>'required',
            'actPlace'=>'required',
            'approvel'=>'required',
            'remark'=>'required',
            'name'=>'required',
            'status'=>'required'

        ]);

        $proposal=Proposal::find($id);
        $proposal->title = $request->input('title');
        $proposal->actPlace = $request->input('actPlace');
        $proposal->approvel = $request->input('approvel');
        $proposal->remark = $request->input('remark');
        $proposal->name = $request->input('name');
        $proposal->status = $request->input('status');
        $proposal->save();
        return redirect('admin')->with('success', 'Proposal Updated');
    }

    public function update2(Request $request, $id)
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
        return redirect('/admin')->with('success', 'Proposal Updated');
    }
}
