@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Monitors</h1>
@stop

@section('content')

<div class="modal fade" id="addmonitors" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Monitors Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('admin.monitors.store') }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="modal-body">
              <div class="form-group">
                  <label> Name </label>
                  <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
                  <input type="text" name="middle_name" class="form-control" placeholder="Middle Name">
                  <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
              </div>
              <div class="form-group">
                <label>Phone</label>
                <input type="tel" name="phone" class="form-control" placeholder="Phone Number" required>
              </div>
              <div class="form-group">
                <label>Gender</label>
                    <select name="gender" required>
                        <option value="select" selected>Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
              </div>
              <div class="form-group">
                <label>Date of Birth</label>
                <input type="date" name="dob" class="form-control" placeholder="Date of Birth" required>
            </div>
              <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control" placeholder="Email Address">
              </div>
              <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control" placeholder="Password" required>
              </div>
              <div class="form-group">
                  <label>Confirm Password</label>
                  <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
    </div>
</div>
    
<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addmonitors">
                            Add new Monitor
                        </button>
                    </p>
                    <table class="table table-bordered table-striped">
                       <tr> <th>ID</th><th>Name</th><th>Gender</th><th>Email</th><th>Created At</th><th>Action</th> </tr>
                        @foreach ($monitors as $im)
                            <tr>
                                <td>{{ $im->id }}</td> 
                                <td>{{ $im->first_name }} {{ $im->last_name }}</td> 
                                <td>{{ $im->gender }}</td> 
                                <td>{{ $im->email }}</td> 
                                <td>{{ $im->created }}</td> 
                            <td><a class="btn" href="{{ route('admin.monitors.edit', $im->id) }}">Edit</a> <a class="btn"  href="#">Delete</a></td> 
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
