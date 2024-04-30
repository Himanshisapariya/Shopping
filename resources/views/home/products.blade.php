@extends('home.layouts.app')



@section('section')


  <!-- Page Header Start -->
  <div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Our Shop</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="{{ url('/') }}">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Shop</p>
        </div>
    </div>
</div>
<!-- Page Header End -->

@if ($product->isNotEmpty())
<!-- Shop Start -->
<div class="container-fluid pt-5" >
    <div class="row px-xl-5" align="center">
       


        <!-- Shop Product Start -->
        <div class="col-lg-12 col-md-12" >
            <div class="row pb-3">
      @foreach ($product as $product)
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4">
  <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            
                            <a href="{{ route('home.viewdetail',$product->id) }}"><img class="img-fluid w-60" height="400px" width="400pxs" src="/images/{{ $product->image }}" height="500px" width="500px" alt="">
                            </a>
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">{{ $product->name }}</h6>
                            <div class="d-flex justify-content-center">
                                <h6>{{ $product->price }}</h6><h6 class="text-muted ml-2"><del>{{ $product->compareprice }}</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="{{ route('home.viewdetail',$product->id) }}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="{{ route('cart',$product->id,$product->price )}}" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>


 
                    </div>
                </div>
                @endforeach


@else
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold mb-3 text-primary">No Products Found</h1>
        
    </div>.
</div>
                @endif
            </div>
        </div>
        <!-- Shop Product End -->
    </div>
</div>
<!-- Shop End -->






 
@endsection