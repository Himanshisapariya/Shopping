
 
 @extends('admin.layouts.app')


@section('content')


<!-- Content Header (Page header) -->
<section class="content-header">					
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Orders</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{ route('admin.order') }}" class="btn btn-primary">Back</a>
            </div>
            <div class="col-sm-6 text-right">
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="card-tools">
                    <form action="{{ route('admin.order') }}" method="get">
                    <div class="input-group input-group" style="width: 250px;">
                        <input type="text" name="keyword" value="" class="form-control float-right" placeholder="Search">
    
                        <div class="input-group-append">
                          <button type="submit" class="btn btn-default">
                        </form>
                            <i class="fas fa-search"></i>
                          </button>
                        </div>
                      </div>
                </div>
            </div>
            <div class="card-body table-responsive p-0">								
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>Orders #</th>											
                            <th>Customer</th>
                            <th>Product Name</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Total</th>
                            <th>Date Purchased</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order as $order)
                                                    <tr>
                            <td class="text-primary"><a href="{{ route('admin.orderdetail',$order->id) }}">{{ $order->id }}</a></td>
                            <td>{{ $order->user_name }}</td>
                            <td>{{ $order->product_title }}</td>
                            <td>{{ $order->phone }}</td>
                          @if ($order->delivery_status == 'processing')
                              
                         
                            <td>
                                <a href="{{ route('changestatus',$order->id) }}">
                                <span class="badge bg-success">Deliver Now</span>
                            </a>
                            </td>
                            @else
                            <td>

<span class="badge bg-primary">Delivered</span>
</td>

                            @endif
                         
                            <td>{{ $order->price }}</td>
                            <td>{{ $order->date }}</td>	
                                                    </tr>
                        @endforeach

                       
                    </tbody>
                </table>										
            </div>
            {{-- <div class="card-footer clearfix">
                <span>{{ $order->links() }}</span>
            </div> --}}
        </div>
    </div>
    <!-- /.card -->
</section>
<!-- /.content -->


@endsection

@section('custom-js')

<script>
    
</script>

@endsection

