@extends('home.layouts.app')

@include('admin.message')

@section('section')



    <div class="container-fluid heading py-4 pg-title text-black">
        <div class="row py-4">
            <div class="col-md-12  text-center">
                <h1>WISHLIST</h1>
                @if ($wlist->isNotEmpty())
                    
               
                <form action="{{ route('emptywishlist') }}" method="get">
                <button class="btn btn-primary" name="empty">Empty Wishlist</button>
                </form>
                @endif
               
            </div>
        </div>
    </div>

    



 @if ($wlist->isNotEmpty())
 <!-- Shop Start -->
 <div class="container-fluid pt-5" >
     <div class="row px-xl-5" align="center">
        



 <div class="col-lg-12 col-md-12" >
    <div class="row pb-3">
@foreach ($wlist as $wlist)
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    
                    <a href="{{ route('home.viewdetail',$wlist->product_id) }}"><img class="img-fluid w-60" height="400px" width="400pxs" src="/images/{{ $wlist->image }}" height="500px" width="500px" alt="">
                    </a>
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">{{ $wlist->name }}</h6>
                    <div class="d-flex justify-content-center">
                        <h6>{{ $wlist->price }}</h6><h6 class="text-muted ml-2"><del>{{ $wlist->compareprice }}</del></h6>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="{{ route('wishlist.delete',$wlist->id) }}" class="btn btn-sm text-dark p-0"><i class="fas fa-trash text-danger mr-1"></i>Remove</a>
                    <a href="{{ route('cart',$wlist->product_id,$wlist->price )}}" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
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



</div>
</div>



    @endsection