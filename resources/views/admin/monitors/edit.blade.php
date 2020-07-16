@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Monitors</h1>
@stop

@section('content')

    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Monitors Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="{{ route('admin.monitors.update', $monitor->id) }}" >
            @method('PUT')
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="modal-body">
              <div class="form-group">
                  <label> Name </label>
              <input type="text" name="first_name" class="form-control" value="{{$monitor->first_name}}">
                  <input type="text" name="middle_name" class="form-control" value="{{$monitor->middle_name}}">
                  <input type="text" name="last_name" class="form-control" value="{{$monitor->last_name}}">
              </div>
              <div class="form-group">
                <label>Phone</label>
                <input type="tel" name="phone" class="form-control" value="{{$monitor->phone}}">
              </div>
              <div class="form-group">
                <label>Gender</label>
                    
                    <select name="gender">
                        <option value="Male"
                            @if($monitor->gender == "Male")
                                Selected
                            @endif
                        >Male</option>
                        <option value="Female"
                            @if($monitor->gender == "Female")
                                Selected
                            @endif
                        >Female</option>
                    </select>
              </div>
              <div class="form-group">
                <label>Date of Birth</label>
                <input type="date" name="dob" class="form-control" value="{{$monitor->dob}}">
            </div>
              <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control" value="{{$monitor->email}}">
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="submit"  class="btn btn-primary">Update</button>
          </div>
        </form>
      </div>
    </div>
    
@stop
