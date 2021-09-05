<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\TaskModel;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trackOrder()
    {
        $tasks = TaskModel::orderBy('id', 'desc')->get();
        return view('FrontEnd.trackOrder', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function booktrip()
    {
        return view('FrontEnd.booktrip');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = new TaskModel();
        $task->name = $request->name;
        $task->phone = $request->phone;
        $task->email = $request->email;
        $task->dateorder = $request->dateorder;
        $task->checkinTime = $request->checkinTime;
        $task->price = $request->trip;

        $task->save();

        $tasks = TaskModel::orderBy('id', 'desc')->paginate(1);
        return view('FrontEnd.orderConfirm', compact('tasks'));

        // return redirect()->route('orderinformation');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    public function search(Request $request)
    {
        if(isset($_GET['query']))
           {
             $search_text= $_GET['query'] ;
             $tasks=DB::table('task_models')->where('id',$search_text)->paginate(1);
            // return view('search')
            return view('FrontEnd.search', compact('tasks'));

           }

        else
            {
                return view('trackOrder');
            }





       // $tasks = TaskModel::orderBy('id', 'desc')->get();
      //  return view('FrontEnd.trackOrder', compact('tasks'));
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
