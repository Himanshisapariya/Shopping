@extends('admin.layouts.app')


@section('content')

@include('admin.message')
<!-- Content Header (Page header) -->
<!-- Content Header (Page header) -->
<section class="content-header">					
    <div class="container-fluid my-2 ">
        <div class="row mb-2 ">
            <div class="col-sm-6">
                <h1>Create Category</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{ route('category.list') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">	
                @csrf							
                <div class="row d-flex center justify-content-center">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name">	
                        </div>
                       
                    </div>        								
             </div>

                <p class="d-flex center justify-content-center  col-md-6">
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </p>

                <div class="row d-flex center justify-content-center">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="1">Active</option>
                                <option value="0">Block</option>
                            </select>
                        </div>
                    </div>	
                    								
                </div>

                <div class="row  d-flex center justify-content-center">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name">Image</label>
                            <input type="file" name="image" id="image" class="form-control  @error('image') is-invalid @enderror" placeholder="Name">	
                        </div>
                    </div>
                    								
                </div>
                
                <p class="d-flex center justify-content-center  col-md-6">
                    @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </p>
            
            </div>							
        </div>
        <div class="row mb-2  d-flex center justify-content-center">
            <div class="pb-5 pt-3 ">
            <button class="btn-lg btn-primary text-dark" type="submit">Create</button>
            <a href="{{ route('category.list') }}" class="btn-lg btn-outline-dark ml-3">Cancel</a>
        </div>
    </div>
</form>
    <!-- /.card -->
</section>
<!-- /.content -->
<!-- /.content -->
@endsection

@section('custom-js')

<script>
    
</script>

@endsection

