@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">You are logged in!</p>
                    <p class="mb-0">
                    <table class="table table-bordered table-striped">
                        {{-- @foreach ($result ?? '' ?? '' as $user)
                        <tr>
                            <td>{{$user->name}}</td>     
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at}}</td>
                        </tr>
                        @endforeach --}}
                        @dump($result ?? '');
                    </table>
                    </p>
                </div>
            </div>
        </div>
    </div>
@stop
