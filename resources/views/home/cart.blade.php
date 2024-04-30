@extends('home.layouts.app')

@include('admin.message')

@section('section')


   <!-- Page Header Start -->
   <div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Shopping Cart</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="{{ url('/') }}">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Shopping Cart</p>
        </div>
    </div>
</div>
<!-- Page Header End -->


@if($cart->isNotEmpty())

<!-- Cart Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <div class="col-lg-8 table-responsive mb-5">
            <table class="table table-bordered text-center mb-0">
                <thead class="bg-secondary text-dark">
                    <tr>
                        <th>Products</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                   

                    <tr>
          <?php  $totalprice = 0; ?>

                        @foreach ($cart as $cart)
                            
                        <td class="align-middle"><img src="/images/{{ $cart->image }}" alt="" style="width: 50px;"> {{ $cart->name }}</td>
                        <td class="align-middle" id="pprice">{{ $cart->price }}</td>
                        <td class="align-middle">
                            <div class="input-group quantity mx-auto" style="width: 100px;">
                                {{-- <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary btn-minus" >
                                      
                                    <i class="fa fa-minus"></i>
                                    </button>
                                </div> --}}
                                <input type="text" class="form-control form-control-sm bg-primary text-center" id="pqty" value=" {{ $cart->quantity }}" readonly>
                                {{-- <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div> --}}
                            </div>
                        </td>
                        <td class="align-middle total" id="ptotal">{{ $cart->price*$cart->quantity }}</td>
                        
                        <td class="align-middle"><a href="{{ route('cart.delete',$cart->id) }}"><button class="btn btn-sm btn-primary"><i class="fa fa-times"></i></button> </a></td>
                   
                    </tr>
              
         <?php   $totalprice=$totalprice+$cart->price*$cart->quantity;  ?>

                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-lg-4">
           
            <div class="card border-secondary mb-5">
                <div class="card-header bg-secondary border-0">
                    <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3 pt-1">
                        <h6 class="font-weight-medium">Subtotal</h6>
                        <h6 class="font-weight-medium">{{ $totalprice }}</h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Shipping</h6>
                        <h6 class="font-weight-medium">0</h6>
                    </div>
                </div>
                <div class="card-footer border-secondary bg-transparent">
                    <div class="d-flex justify-content-between mt-2">
                        <h5 class="font-weight-bold">Total</h5>
                        <h5 class="font-weight-bold">Rs.{{ $totalprice }}</h5>
                    </div>
                    <a href="{{ route('order') }}">
                    <button class="btn btn-block btn-primary my-3 py-3" type="submit" >Proceed To Checkout</button>
                </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Cart End -->


@else


<div class="container bg-secondary p-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold mb-3 text-primary">Your Cart Is Empty.</h1>
        
    </div>.
</div>

@endif

 
@endsection
<script>

// $("document").ready(){
//     console.log("hello");
// }

</script>