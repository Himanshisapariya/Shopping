@extends('admin.layouts.app')


@section('content')

	<!-- Content Header (Page header) -->
    <section class="content-header">					
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ $order[0]->id }}</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('admin.order') }}" class="btn btn-primary">Back</a>
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
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header pt-3">
                            <div class="row invoice-info">
                                <div class="col-sm-4 invoice-col">
                                <h1 class="h5 mb-3">Shipping Address</h1>
                                <address>
                                    <strong>{{ $order[0]->user_name }}</strong><br>
                                    {{ $order[0]->address }}<br>
                                    Phone: {{ $order[0]->phone }}<br>
                                    Email: {{ $order[0]->email }}
                                </address>
                                </div>
                                
                                
                                
                                <div class="col-sm-4 invoice-col">
                                    <b>{{ $order[0]->date }}</b><br>
                                    <br>
                                    <b>Order ID:</b> {{ $order[0]->id }}<br>
                                    <b>Total:</b> {{ $order[0]->price }}<br>
                                    <b>Status:</b> <span class="text-success">{{ $order[0]->delivery_status }}</span>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-3">								
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th width="100">Price</th>
                                        <th width="100">Qty</th>                                        
                                        <th width="100">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $order[0]->product_title }}</td>
                                        <td>{{ $order[0]->price }}</td>                                        
                                        <td>{{ $order[0]->quantity }}</td>
                                        <td>{{ $order[0]->price * $order[0]->quantity }}</td>
                                    </tr>
                                  
                                        <th colspan="3" class="text-right">Subtotal:</th>
                                        <td>{{ $order[0]->price * $order[0]->quantity }}</td>
                                    </tr>
                                    
                                    <tr>
                                        <th colspan="3" class="text-right">Shipping:</th>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <th colspan="3" class="text-right">Grand Total:</th>
                                        <td>{{ $order[0]->price * $order[0]->quantity }}</td>
                                    </tr>
                                </tbody>
                            </table>								
                        </div>                            
                    </div>
                </div>
                
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

