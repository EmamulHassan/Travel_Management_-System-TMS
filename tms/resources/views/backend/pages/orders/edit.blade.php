@extends('backend.layout.template') @section('body')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
        <h4>Update The Order Information</h4>
        <p class="mg-b-0">Update Order Informations</p>
    </div>
</div>

<div class="br-pagebody">
    <div class="row">
        <div class="col-lg-12">
            {{-- page body content start --}}

            <div class="card bd-0 shadow-base">
                <div class="pd-25">

                        <form action="{{route('order.update',$order->id)}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control" required="required" autocomplete="off" value="{{$order->name}}" readonly>
                                    </div>
                                     <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" readonly name="phone" class="form-control" required="required" autocomplete="off" value="{{$order->phone}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Payment Status</label>
                                        <select class="form-control" name="payment_status">
                                            <option value="1">Please Select The Status</option>
                                            <option value="1" @if ($order->payment_status==1)
                                                selected
                                            @endif >Not Confirmed</option>
                                            <option value="2" @if ($order->payment_status==2)
                                                selected
                                            @endif >Confirmed</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">

                                    <div class="form-group">
                                         <label>Order Date</label>
                                         <input readonly type="text" name="dateorder" class="form-control" required="required" autocomplete="off" value="{{$order->dateorder}}">
                                       </div>

                                    <div class="form-group">
                                        <label>Price</label>
                                        <input readonly readonly type="text" name="price" class="form-control" required="required" value="{{$order->price}}" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Payment Status</label>
                                        <select class="form-control" name="Trip_status">
                                            <option value="1">Please Select The Status</option>
                                            <option value="1" @if ($order->Trip_status==1)
                                                selected
                                            @endif >Incomplete</option>
                                            <option value="2" @if ($order->Trip_status==2)
                                                selected
                                            @endif >Completed</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input readonly type="email" name="email" class="form-control" required="required" autocomplete="off" value="{{$order->email}}">
                                    </div>
                                     <div class="form-group">
                                        <label>Cheak In Time</label>
                                        <input readonly type="text" name="checkinTime" class="form-control" required="required" autocomplete="off" value="{{$order->checkinTime}}" >
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="addBranch" value="Edit Branch" style="margin-top: 25px;" class="btn btn-teal  mg-b-10">
                                    </div>

                                </div>
                            </div>

                        </form>
                    <!-- d-flex -->
                </div>
                <!-- d-flex -->
            </div>
            <!-- card -->

            {{-- page body content end --}}
        </div>
    </div>
</div>
@endsection
