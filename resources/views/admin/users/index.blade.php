@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Manage Users</h1>
@stop

@section('content')
  @include('partials.manage_users')
@stop
