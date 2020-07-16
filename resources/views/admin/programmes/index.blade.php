@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Programmes</h1>
@stop

@section('content')

{{--modal for create.blade.php  --}}
<div class="modal fade" id="addprog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Programmes</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('admin.programmes.store') }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="modal-body">
              <div class="form-group">
                  <label> Name </label>
                  <input type="text" name="name" class="form-control" placeholder="Name of Programme">
                  <label> Code </label>
                  <input type="text" name="progCode" class="form-control" placeholder="Programme's Code">
                  <label> Description </label>
                  <input type="text" name="description" class="form-control" placeholder="Description">
                  <label> Organisation </label>
                  <select name="orgID" class="form-control">
                    <option value="0" selected>default</option>
                    @foreach ($data2 as $org)
                        <option value="{{$org->orgCode}}">{{$org->name}}</option>
                    @endforeach
                  </select>
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
 
{{-- index.blade.php --}}
<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addprog">
                            Add new Programme
                        </button>
                    </p>
                    <table class="table table-bordered table-striped data-table">
                        <thead>
                            <tr><th>ID</th><th>Name</th><th>Description</th><th>Organisation</th><th>Created At</th><th>Action</th> </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $prog)
                                <tr>
                                    <td>{{ $prog->id }}</td> 
                                    <td>{{ $prog->name }}</td> 
                                    <td>{{ $prog->description }}</td> 
                                    <td>{{ $prog['getOrganisationRelation']->name ?? '' }}</td> 
                                    <td>{{ $prog->created_at }}</td> 
                                    <td>
                                        <form action="{{ route('admin.programmes.destroy', $prog->id) }}" method="post" id="delForm{{$prog->id}}">
                                            @csrf @method('DELETE')
                                        </form>
                                        <a class="btn btn-primary btn-info btn-xs" href="{{ route('admin.programmes.show', $prog->id) }}" ><i class="fa fa-eye" data-toggle="tooltip" title="View"></i></a>
                                        <a class="btn btn-primary btn-warning btn-xs" href="{{ route('admin.programmes.edit', $prog->id) }}"><i class="fa fa-edit" data-toggle="tooltip" title="Edit"></i></a>
                                        <a class="btn btn-primary btn-danger btn-xs" data-title="Delete" href="javascript:void(0)" onclick=" document.getElementById('delForm{{$prog->id}}').submit() "><i class="fa fa-times" data-toggle="tooltip" title="Delete"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
            
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')

    <script>
        $(document).ready(function() {
            $('.data-table').DataTable({
                stateSave: true,
                initComplete: function () 
                {
                    this.api().columns().every( function () 
                    {
                        var column = this;
                        var select = $('<select><option value=""></option></select>')
                            .appendTo( '#table_filter' )
                            .on( 'change', function () 
                            {
                                var val = $.fn.dataTable.util.escapeRegex($(this).val());
                                column.search( val ? '^'+val+'$' : '', true, false ).draw();
                            } );
    
                        column.data().unique().sort().each( function ( d, j ) 
                        {
                            select.append( '<option value="'+d+'">'+d+'</option>' )
                        });
                    });
                }
                
            });
        });
    </script>
@Stop