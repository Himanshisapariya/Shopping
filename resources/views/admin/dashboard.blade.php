@extends('admin.layouts.app')


@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">					
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Dashboard</h1>
            </div>
            <div class="col-sm-6">
                
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-6">							
                <div class="small-box card">
                    <div class="inner">
                        <h3>{{ $order }}</h3>
                        <p>Total Orders</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{ route('admin.order') }}" class="small-box-footer text-dark">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            
            <div class="col-lg-4 col-6">							
                <div class="small-box card">
                    <div class="inner">
                        <h3>{{ $user }}</h3>
                        <p>Total Customers</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{ route('user.list') }}" class="small-box-footer text-dark">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-6">							
                <div class="small-box card">
                    <div class="inner">
                        <h3>{{ $category }}</h3>
                        <p>Total Category</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{ route('category.list') }}" class="small-box-footer text-dark">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-6">							
                <div class="small-box card">
                    <div class="inner">
                        <h3>{{ $product }}</h3>
                        <p>Total Products</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{ route('product.list') }}" class="small-box-footer text-dark">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-6">							
                <div class="small-box card">
                    <div class="inner">
                        <h3>{{ $brand }}</h3>
                        <p>Total Brands</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{ route('brand.list') }}" class="small-box-footer text-dark">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-6">							
                <div class="small-box card">
                    <div class="inner">
                        <h3>{{ $feedback }}</h3>
                        <p>Total Feedbacks</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{ route('admin.feedback') }}" class="small-box-footer text-dark">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            
            <div class="col-lg-4 col-6">							
                <div class="small-box card">
                    <div class="inner">
                        <h3>Rs.{{ $sale }}0</h3>
                        <p>Total Sale</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="javascript:void(0);" class="small-box-footer">&nbsp;</a>
                </div>
            </div>
        </div>
    </div>					
    <!-- /.card -->



    {{-- <div class="container-fluid">
        <div class="row">
          <div class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <!-- sidebar content goes in here -->
          </div>
          <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
            
            <div class="row">
              <div class="col-md-4">
                <div class="card text-white bg-primary">
                  <div class="card-header">Users</div>
                  <div class="card-body">
                    <h5 class="card-title">{{ $user }}</h5>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card text-white bg-success">
                  <div class="card-header">Products</div>
                  <div class="card-body">
                    <h5 class="card-title">{{ $product }}</h5>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card text-white bg-danger">
                  <div class="card-header">Categories</div>
                  <div class="card-body">
                    <h5 class="card-title">{{ $category }}</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="card text-white bg-warning">
                  <div class="card-header">Orders</div>
                  <div class="card-body">
                    <h5 class="card-title">{{ $order }}</h5>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card text-white bg-info">
                  <div class="card-header">Feedbacks</div>
                  <div class="card-body">
                    <h5 class="card-title">{{ $feedback }}</h5>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card text-white bg-secondary">
                  <div class="card-header">Brands</div>
                  <div class="card-body">
                    <h5 class="card-title">{{ $brand }}</h5>
                  </div>
                </div>
              </div>
            </div>
          </main>
        </div>
      </div> --}}



</section>
<!-- /.content -->
@endsection

@section('custom-js')

<script>
    
</script>

@endsection

