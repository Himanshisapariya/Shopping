@extends('admin.layouts.app')


@section('content')
@include('admin.message')

<!-- Content Header (Page header) -->
<section class="content-header">					
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Create Product</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{ route('product.list') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-3">
                    <div class="card-body">								
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="title">Name</label>
                                    <input type="text" name="name" id="title" class="form-control @error('name') is-invalid @enderror "  placeholder="Title">	
                                </div>
                            </div>

                            <p class="col-md-12">
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </p>
            

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" cols="30" rows="10" class="summernote" placeholder="Description"></textarea>
                                </div>
                            <div>                                            
                        </div>
                    <div>	                                                                      
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <h2 class="h4 mb-3">Media</h2>								
                        <div class="dropzone dz-clickable">
                            <div class="dz-message needsclick">    
                                <br>Drop files here or click to upload.<br><br> 
                <input type="file" name="image">                                           
                            </div>
                        </div>
                        <p class="col-md-12">
                            @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </p>
                    </div>	                                                                      
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <h2 class="h4 mb-3">Pricing</h2>								
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                <label for="price">Price</label>
                                    <input type="text" name="price" id="price" class="form-control" placeholder="Price">	
                                </div>

                                <p class="col-md-12">
                                    @error('price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </p>

                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="compare_price">Compare at Price</label>
                                    <input type="text" name="compareprice" id="compare_price" class="form-control" placeholder="Compare Price">
                                    <p class="text-muted mt-3">
                                        To show a reduced price, move the product’s original price into Compare at price. Enter a lower value into Price.
                                    </p>	
                                </div>
                            <div>                                            
                        </div>
                    <div>	                                                                      
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <h2 class="h4 mb-3">Inventory</h2>								
                        <div class="row">
                            
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <div class="custom-control custom-checkbox">
                                        {{-- <input class="custom-control-input" type="checkbox" id="track_qty" readonly name="track_qty" checked> --}}
                                        <label for="track_qty" class="custom-control-label">Track Quantity</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <input type="number" min="0" name="quantity" id="qty" class="form-control" placeholder="Qty">	
                                </div>

                                <p class="col-md-12">
                                    @error('quantity')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </p>

                            <div>                                         
                        </div>
                    <div>	                                                                      
                </div>
            </div>
            <div class="col-md-12">
                <div class="card mb-3">
                    <div class="card-body">	
                        <h2 class="h4 mb-3">Product status</h2>
                        <div class="mb-3">
                            <select name="status" id="status" class="form-control">
                                <option value="1">Active</option>
                                <option value="0">Block</option>
                            </select>
                        </div>
                    </div>
                </div> 
                <div class="card">
                    <div class="card-body">	
                        <h2 class="h4  mb-3">Product category</h2>
                        <div class="mb-3">
                            <label for="category">Category</label>
                            <select name="category" id="category" class="form-control">
                                <option value="">--Select Category--</option>
                                @foreach ($category as $category)
                               
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="card mb-3">
                            <div class="card-body">	
                                <h2 class="h4 mb-3">Trendy product</h2>
                                <div class="mb-3">
                                    <select name="trendy" id="status" class="form-control">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>                                                
                                    </select>
                                </div>
                            </div>
                        </div>      



                    </div>
                </div> 
                <div class="card mb-3">
                    <div class="card-body">	
                        <h2 class="h4 mb-3">Product brand</h2>
                        <div class="mb-3">
                            <select name="brand" id="status" class="form-control"> <option value="">--Select Brand--</option>
                                @foreach ($brand as $brand)
                               
                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @endforeach
                               
                                
                            </select>
                        </div>
                    </div>
                </div> 
                <div class="card mb-3">
                    <div class="card-body">	
                        <h2 class="h4 mb-3">Featured product</h2>
                        <div class="mb-3">
  <select name="featured" id="status" class="form-control">
                                <option value="0">No</option>
                                <option value="1">Yes</option>                                                
                            </select>
                        </div>
                    </div>
                </div>                                 
            </div>
        </div>
        
        <div class="pb-5 pt-3">
            <button class="btn btn-primary text-dark">Create</button>
            <a href="{{ route('product.list') }}" class="btn btn-outline-dark ml-3">Cancel</a>
        </div>
    </div>
</form>
    <!-- /.card -->
</section>
<!-- /.content -->


@endsection

@section('custom-js')

<script>
    
</script>

@endsection

