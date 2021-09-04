<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\TaskModel;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = TaskModel::orderBy('id','asc')->get();
        return view('backend.pages.orders.manage',compact('orders'));
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
        $order = TaskModel::find($id);
        if(!is_null($order)){
            return view('backend.pages.orders.edit',compact('order'));
        }
        else{
            return route('order.manage');
        }
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
        $task = TaskModel::find($id);
        $task->name = $request->name;
        $task->phone = $request->phone;
        $task->email = $request->email;
        $task->dateorder = $request->dateorder;
        $task->checkinTime = $request->checkinTime;
        $task->price = $request->price;
        $task->payment_status = $request->payment_status;
        $task->Trip_status = $request->Trip_status;
        // dd($task);
        // exit();
        $task->save();
        return redirect()->route('order.manage');
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
