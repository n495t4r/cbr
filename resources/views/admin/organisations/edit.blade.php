@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Organisations</h1>
@stop

@section('content')

    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Organisation</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="{{ route('admin.organisations.update', $data->id) }}" >
            @method('PUT')
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="modal-body">
              <div class="form-group">
                <label> Name </label>
                <input type="text" name="name" class="form-control" value="{{$data->name}}">
                <label> Code </label>
                <input type="text" name="orgCode" class="form-control" value="{{$data->orgCode}}">
                <label> Description </label>
                <input cols="10" type="text" name="description" class="form-control" value="{{$data->description}}">
              </div>
          </div>
          <div class="modal-footer">
              <a class="btn btn-secondary" href="javascript:history.back()" data-dismiss="modal">Cancel</a>
              <button type="submit"  class="btn btn-primary">Update</button>
          </div>
        </form>
      </div>
    </div>
    
@stop
