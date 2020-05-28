<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proposal;

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
        $proposal = Proposal::find($id);
        $proposals = Proposal::all();
        return view('adminUpdate.show',['proposals'=>$proposals,'proposal'=>$proposal, 'layout'=>'show']);
       // return view('proposalPage.show',['proposal'=>$proposal, 'layout'=>'show']);
    }

    public function edit($id)
    {
        $proposal = Proposal::find($id);
        $proposals = Proposal::all();

        //check correct user
        // if(auth()->user()->id !== $proposal->user_id){
        //     return redirect('/proposalPage')->with('error','Unauthorized Page');
        // }
        return view('adminUpdate.edit',['proposals'=>$proposals,'proposal'=>$proposal, 'layout'=>'edit']);
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
}
