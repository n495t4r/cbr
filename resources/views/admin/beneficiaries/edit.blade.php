@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Edit Beneficiary</h1>
@stop

@section('content')

  @include('partials.edit_profile')
    
@stop

{{-- <form method="POST" action="{{ route('admin.beneficiaries.update', $data->id) }}" >
  @method('PUT')
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="modal-body">
    <div class="form-group">
      <label> Name </label>
      <input type="text" name="first_name" class="form-control" value="{{$data->first_name}}" required>
      <input type="text" name="middle_name" class="form-control" value="{{$data->middle_name}}">
      <input type="text" name="last_name" class="form-control" value="{{$data->last_name}}" required>
      <label> Phone</label>
      <input type="phone" name="phone" class="form-control" value="{{$data->phone}}">
      <label> Gender </label>
      <select name="gender" class="form-control">
        <option value="Male" @if ($data->gender == 'Male')
            selected
        @endif>Male</option>
        <option value="Female" @if ($data->gender == 'Female')
            selected
        @endif>Female</option>
      </select>
      <label> Date of Birth </label>
      <input type="date" name="dob" class="form-control" value="{{$data->dob}}">
      <label> Address </label>
      <input type="text" name="address" class="form-control" value="{{$data->address}}">
      <label> State </label>
      <input type="text" name="state" class="form-control" value="{{$data->state}}">
      <label> LGA </label>
      <input type="text" name="lga" class="form-control" value="{{$data->lga}}">
      <label> Marital Status </label>
      <select name="marital_status" class="form-control">
        <option value="Married" @if ($data->marital_status == 'Married')
            selected
        @endif>Married</option>
        <option value="Single" @if ($data->marital_status == 'Single')
            selected
        @endif>Single</option>
      </select>
      <label> Programme</label>
      <select name="progID" class="form-control">
        @foreach ($data2 ?? '' as $prog)
          <option value="{{$prog->progCode}}" 
            @if ($data->progID == $prog->progCode)
               selected
            @endif
          >{{$prog->name}}</option>
        @endforeach
      </select>
      <label> Location Code </label>
      <input type="text" name="locCode" class="form-control" value="{{$data->locCode}}">
    </div>
</div>
<div class="modal-footer">
    <a class="btn btn-secondary" href="javascript:history.back()" data-dismiss="modal">Cancel</a>
    <button type="submit"  class="btn btn-primary">Update</button>
</div>
</form> --}}
