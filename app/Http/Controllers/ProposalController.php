<?php

namespace App\Http\Controllers;

use App\Proposal;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProposalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }

    public function index()
    {
        $proposals = Proposal::all();
        return view('proposalPage.index',['proposals'=>$proposals,'layout'=>'index']);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proposals = Proposal::all();
        return view('proposalPage.create',['proposals'=>$proposals,'layout'=>'create']);
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

            'title'=>'required',
            'actPlace'=>'required',
            'approvel'=>'required',
            'remark'=>'required',
            'name'=>'required',
            'status'=>'required'
            // 'status'=>'required'


        ]);

        $proposal = new Proposal();
        $proposal->title = $request->input('title');
        $proposal->actPlace = $request->input('actPlace');
        $proposal->approvel = $request->input('approvel');
        $proposal->remark = $request->input('remark');
        $proposal->name = $request->input('name');
        $proposal->status = $request->input('status');
        $proposal->user_id =auth()->user()->id;
        $proposal->save();
        // return redirect('/proposalPage')->with('success', 'Proposal Created');
        //return redirect('/home')->with('success', 'Proposal Created');
        return view('proposal2Page.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $proposal = Proposal::find($id);
        // $proposals = Proposal::all();
        // return view('proposalPage.show',['proposals'=>$proposals,'proposal'=>$proposal, 'layout'=>'show']);
       $test = DB::table('users')
                ->join('proposals', 'proposals.user_id', '=', 'users.id')
                ->join('proposals2','proposals2.user_id','=', 'proposals.user_id')
                ->select('users.*','proposals.*','proposals2.*')
                ->get();
        return view('proposalPage.show',['test'=>$test, 'layout'=>'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proposal = Proposal::find($id);
        $proposals = Proposal::all();

        //check correct user
        if(auth()->user()->id !== $proposal->user_id){
            return redirect('/proposalPage')->with('error','Unauthorized Page');
        }
        return view('proposalPage.edit',['proposals'=>$proposals,'proposal'=>$proposal, 'layout'=>'edit']);
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

            'title'=>'required',
            'actPlace'=>'required',
            'approvel'=>'required',
            'remark'=>'required',
            'name'=>'required',
            // 'status'=>'required'

        ]);

        $proposal=Proposal::find($id);
        $proposal->title = $request->input('title');
        $proposal->actPlace = $request->input('actPlace');
        $proposal->approvel = $request->input('approvel');
        $proposal->remark = $request->input('remark');
        $proposal->name = $request->input('name');
        $proposal->status = $request->input('status');
        $proposal->save();
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
        $proposal = Proposal::find($id);
        $proposal->delete();
        return redirect('/home')->with('success', 'Proposal Deleted');
    }
}