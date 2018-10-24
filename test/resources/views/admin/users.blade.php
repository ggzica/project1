
@extends('admin.nav')
@section('content')


        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
       
       <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
       
         <h1 class="h2">Users</h1>
    
         <div class="btn-toolbar mb-2 mb-md-0">
         <a href="{{ route('admin.adduser') }}" class="btn btn-primary">Add A New User</a>

         </div>
       </div>




       <!-- Users
        -->
       <div class="row">
		
        
        <div class="col-md-12">
        @if (session()->has('message'))
    <div class="alert alert-info">
        {{ session('message') }}
    </div>
@endif
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                
                   <th>Name</th>
                     <th>Email</th>
                     <th>User Type</th>
                      <th>Edit</th>
                       <th>Delete</th>
                   </thead>
    <tbody>
    @foreach ($user as $row)
    <tr>
    <td>{{$row['name']}}</td>
    <td>{{ $row['email'] }}</td>
    <td>{{ strtoupper($row['user_type']) }}</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" disabled ><span class="far fa-edit fa-xs"></span></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" disabled><span class="far fa-trash-alt fa-xs"></span></button></p></td>
    </tr>
    @endforeach
 <tr>

    
 </tbody>
        
        </table>
        
</div>

@endsection