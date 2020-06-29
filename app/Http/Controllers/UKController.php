<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Event;
use App\User;

class UKController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:UK');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        $event=[];
        
        foreach($events as $row){
            $enddate=$row->end_date."24:00:00";
            $event[]=\Calendar::event(
                $row->title,
                
                //tanpa time
                //true,
                //ada time
                false,
                new \DateTime($row->start_date),
                new \DateTime($row->end_date),
                $row->id,
                [
                    'color'=>$row->color,
                    
                    
                    // 'url' => 'http://full-calendar.io',
                    //any other full-calendar supported parameters
                    
                ]
                );

                // $calendar = \Calendar::addEvents($event)
                

        }
        $calendar =\Calendar::addEvents($event)
        ->setOptions([
            'firstDay' => 1,
            'editable'    => true,
            'selectable'  => true,
            'defaultView' => 'month',
            'minTime' => '05:00:00',
            'maxTime' => '22:00:00',
        ])
        ->setCallbacks([
            'eventClick' => 'function(event) { alert(event.title)}',
        ]);
        return view('UK',compact('events','calendar'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $events = Event::all();
        return view('uk.display')->with('events', $events);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $events = Event::find($id);
      
        return view('uk.edit', compact('events','id'));
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
        $this ->validate($request,[
            'title'=>'required',
            'color'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
            'driver'=>'required',
        ]);

        $events = Event::find($id);
        $events->title = $request->input('title');
        $events->color = $request->input('color');
        $events->start_date = $request->input('start_date');
        $events->end_date = $request->input('end_date');
        $events->driver = $request->input('driver');

        $events->save();

        return redirect('UK')->with('success', 'The date has been approved!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $events= Event::find($id);
        $events->delete();

        return redirect('UK')->with('success','Data Deleted');
    }
}










    

