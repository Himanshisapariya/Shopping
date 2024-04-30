<?php

use App\Models\product;
?>

@extends('home.layouts.app')

@section('navbar')


    <!-- Navbar Start -->
    <div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                       
                        @foreach ($category as $category)
                            
                      
                        <a href="{{ route('home.product',$category->id) }}" class="nav-item nav-link">{{ $category->name }}</a>
                        

                        @endforeach
                    </div>
                </nav>

            </div>


           
               
    <!-- Navbar End -->
    <div class="col-lg-9">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
           
           
           
        </nav>




@endsection


@section('topnavbar')

<div class="col-lg-12">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
        
        
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav mr-auto py-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>


                <a href="{{ route('home.productpage') }}" class="nav-item nav-link">Shop</a>

                <a href="{{ route('home.about') }}" class="nav-item nav-link">AboutUs</a>

                <a href="{{ route('showorder') }}" class="nav-item nav-link">Your Orders</a>

                <a href="{{ route('home.contact') }}" class="nav-item nav-link">Contact</a>
               
                <a href="{{ route('home.feedback') }}" class="nav-item nav-link">Feedback</a>
                

                 @if (Route::has('login'))
                   
                        @auth
                          <li>  
                
                            <x-app-layout>
                
                            </x-app-layout>
                
                          </li>
                        @else
                     
                         <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
                
                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                             
                            @endif
                  
                        @endauth
                   
                @endif
                

            </div>
            {{-- <div class="navbar-nav ml-auto py-0"> --}}
                {{-- <a href="{{ route('login') }}" class="nav-item nav-link">Login</a>
                <a href="{{ route('register') }}" class="nav-item nav-link">Register</a> --}}

            {{-- </div> --}}
        </div>
    </nav>
   
</div>


@endsection

@section('section')



                   
<div class="carousel-inner">
    <div class="carousel-item active" style="height: 410px;">
        <img class="img-fluid" src="/images/1704133337.png
        " alt="Image Does Not Load">
        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <div class="p-3" style="max-width: 700px;">
                <h4 class="text-light text-uppercase font-weight-medium mb-3">festival Sale</h4>
                <h3 class="display-4 text-white font-weight-semi-bold mb-4">Top Load Washing Machine</h3>
                <a href="{{ route('home.viewdetail','14') }}" class="btn btn-light py-2 px-3">Shop Now</a>
            </div>
        </div>
    </div>
    <div class="carousel-item" style="height: 410px;">
        <img class="img-fluid" src="img/carousel-2.jpg" alt="Image">
        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <div class="p-3" style="max-width: 700px;">
                <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>
                <h3 class="display-4 text-white font-weight-semi-bold mb-4">Reasonable Price</h3>
                <a href="" class="btn btn-light py-2 px-3">Shop Now</a>
            </div>
        </div>
    </div>
</div>


                </div>
<br><br><br>


    



<div class="col-md-12 mt-5">
    <div class="container">
        <div class="row brand-slider justify-content-center">
@foreach ($brand as $brand)
           
        <div class="col-lg-1 d-flex justify-content-center">
                <a href="{{ route('brand.product',$brand->id) }}"><img src="images/{{ $brand->image }}" alt="" class="img-fluid" width="150"></a>
            </div>
            @endforeach
          
        </div>
    </div>
</div>















 <!-- Featured Start -->
 <div class="container-fluid pt-5">
    <div class="row px-xl-5 pb-3">
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
            </div>
        </div>
    </div>
</div>
<!-- Featured End -->

   <!-- Categories Start -->
   <div class="container-fluid pt-5">
    <div class="row px-xl-5 pb-3">

@foreach ($cat as $cat)
    
<?php  $total = product::where('category_id','LIKE',$cat->id)->count();

  ?>

        <div class="col-lg-4 col-md-6 pb-1">
            <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                <p class="text-right text-primary">Total Products : {{ $total }}</p>
                <a href="{{ route('home.product',$cat->id) }}" class="cat-img position-relative overflow-hidden mb-3 img-thumbnail" height="5000vp" width="5000vp">
                    <img class="" height="400px" width="400px" src="/images/{{ $cat->image }}" alt="">
                </a>
                <h5 class="font-weight-semi-bold m-0">{{ $cat->name }}</h5>
            </div>
        </div>
       
        @endforeach

    </div>
</div>
<!-- Categories End -->




    <!-- Products Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Featured Products</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">
            @foreach ($featured as $featured)
                
          
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="" height="300px" width="300px" src="/images/{{ $featured->image }}" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3">{{ $featured->name }}</h6>
                        <div class="d-flex justify-content-center">
                            <h6>{{ $featured->price }}</h6><h6 class="text-muted ml-2"><del>{{ $featured->compareprice }}</del></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="{{ route('home.viewdetail',$featured->id) }}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                        <a href="{{ route('cart',$featured->id )}}" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                    </div>
                </div>
            </div> 
            @endforeach

        </div>
    </div>
    <!-- Products End -->




      <!-- Subscribe Start -->
      <div class="container-fluid bg-secondary my-5">
        <div class="row justify-content-md-center py-5 px-xl-5">
            <div class="col-md-6 col-12 py-5">
                <div class="text-center mb-2 pb-2">
                    <h2 class="section-title px-5 mb-3"><span class="bg-secondary px-2">Stay Updated</span></h2>
                    <p>Amet lorem at rebum amet dolores. Elitr lorem dolor sed amet diam labore at justo ipsum eirmod duo labore labore.</p>
                </div>
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control border-white p-4" placeholder="Email Goes Here">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-4">Subscribe</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Subscribe End -->



  <!-- Products Start -->
  <div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Trendy Products</span></h2>
    </div>
    <div class="row px-xl-5 pb-3">
        @foreach ($trendy as $trendy)
            
      
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="/images/{{ $trendy->image }}" alt="">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">{{ $trendy->name }}</h6>
                    <div class="d-flex justify-content-center">
                        <h6>{{ $trendy->price }}</h6><h6 class="text-muted ml-2"><del>{{ $trendy->compareprice }}</del></h6>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="{{ route('home.viewdetail',$trendy->id) }}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                    <a href="{{ route('cart',$trendy->id )}}" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                </div>
            </div>
        </div> 
        @endforeach

    </div>
</div>
<!-- Products End -->




@endsection