$cart_id = $data->id;
$cart = cart::find($cart_id);
$cart->delete();<div id="header-carousel" class="carousel slide" data-ride="carousel">

        
  
<div class="carousel-inner">

    <div class="carousel-item active" style="height: 410px;">
        <img class="img-fluid" src="/images/1704133337.png
        " alt="Image">
        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <div class="p-3" style="max-width: 700px;">
                <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>
                <h3 class="display-4 text-white font-weight-semi-bold mb-4">Top Load Wasshing Machine</h3>
                <a href="{{ route('home.viewdetail','14') }}" class="btn btn-light py-2 px-3">Shop Now</a>
            </div>
        </div>
    </div>
   
    <div class="carousel-item active" style="height: 410px;">
        <img class="img-fluid" src="/images/1704132509.png
        " alt="Image">
        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <div class="p-3" style="max-width: 700px;">
                <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>
                <h3 class="display-4 text-white font-weight-semi-bold mb-4">iPhone</h3>
                <a href="{{ route('home.viewdetail','8') }}" class="btn btn-light py-2 px-3">Shop Now</a>
            </div>
        </div>
    </div>
   

</div>

<a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
    <div class="btn btn-dark" style="width: 45px; height: 45px;">
        <span class="carousel-control-prev-icon mb-n2"></span>
    </div>
</a>
<a class="carousel-control-next" href="#header-carousel" data-slide="next">
    <div class="btn btn-dark" style="width: 45px; height: 45px;">
        <span class="carousel-control-next-icon mb-n2"></span>
    </div>
</a>
</div>
</div>
</div>
</div>







navnar


<div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">


$order->name = $request->firstname;
            $order->email = $request->email;

            $order->phone = $request->phone;

            $order->address = $request->address;
            
                        <div class="navbar-nav mr-auto py-0">
                            <a href="" class="nav-item nav-link active">Home</a>

                            <a href="{{ route('home.productpage') }}" class="nav-item nav-link">Shop</a>


                            
                            <a href="detail.html" class="nav-item nav-link">Shop Detail</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="cart.html" class="dropdown-item">Shopping Cart</a>
                                    <a href="checkout.html" class="dropdown-item">Checkout</a>
                                </div>
                            </div>
                            <a href="contact.html" class="nav-item nav-link">Contact</a>
                        </div>
                       


                        <div class="navbar-nav ml-auto py-0">
                            <a href="{{ route('login') }}" class="nav-item nav-link">
                               Login</a>
                      
                            <a href="" class="nav-item nav-link">Register</a>
                        </div>

                    </div>



                    



                    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>