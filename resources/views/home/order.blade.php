@extends('home.layouts.app')

@include('admin.message')

@section('section')



<style>
    .center{
        margin:auto;
        width:70%;
        padding: 30px;
        text-align: center;
    }
    table,th,td{
       
    }
    th{
        padding: 25px; 
        font-size: 20px;
        font-weight: bold;
    }
</style>




<div class="center">

    @if ($order->isNotEmpty())

    <table class="table table-striped bg-secondary">
        <tr class="bg-danger text-secondary">
            <th>Product Title</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Payment Status</th>
            <th>Delivery Status</th>
            <th>Image</th>
            <th>Cancel Order</th>
        </tr>

        
 

        @foreach($order as $order)

        <tr>
            <td><a href="{{ route('home.viewdetail',$order->product_id) }}"><button class="btn btn-primary">{{$order->product_title}}</button></a></td>
            <td>{{$order->quantity}}</td>
            <td>{{$order->price}}</td>
            <td>{{$order->payment_status}}</td>
            <td>{{$order->delivery_status}}</td>
            <td><a href="{{ route('home.viewdetail',$order->product_id) }}"><img src="images/{{$order->image}}" alt="" height="100px" width="100px"></a></td>
            <td>
                @if($order->delivery_status == 'processing')
                
                
                <a href="{{url('cancel_order',$order->id)}}" class="btn btn-danger">Cancel Order</a>

                @elseif($order->delivery_status == 'Delivered')

                <p class="text-success">Product Is Already Delivered.</p>

                @else

                <p class="bg-primary text-secondary">You Canceled Order</p>

                @endif

            </td>
        </tr>

        @endforeach
    </table>

    @else

    <div class="container bg-secondary p-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold mb-3 text-primary">You Have Not Ordered Anything.</h1>
            
        </div>.
    </div>


    @endif

   </div>





 
@endsection