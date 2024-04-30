@extends('admin.layouts.app')


@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">					
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Users Feedback</h1>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>

<section class="content">


<table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th scope="col" class="text-center">Name</th>
        <th scope="col" class="text-center">Email</th>
        <th scope="col" class="text-center">Feedback Message</th>
        <th scope="col" class="text-center">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($feedback as $fd)
            
      <tr align="center">
        <td class="align-middle">{{ $fd->name }}</td>
        <td class="align-middle">{{ $fd->email }}</td>
        <td class="align-middle">{{ $fd->message }}</td>
        <td class="align-middle">
            <a href="{{ route('feedbackdelete',$fd->id) }}">
                <button class="btn btn-danger btn-lg">
                    Delete
                </button>
            </a>
        </td>
      </tr>
      <!-- Add more rows as needed -->

      @endforeach

    </tbody>
  </table>


</section>

@endsection