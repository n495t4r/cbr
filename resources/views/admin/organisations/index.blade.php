@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Organisations</h1>
@stop


@section('content')

{{--modal for create.blade.php  --}}
<div class="modal fade" id="addorg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Organisations</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('admin.organisations.store') }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="modal-body">
              <div class="form-group">
                  <label> Name </label>
                  <input type="text" name="name" class="form-control" placeholder="Name of Organisation">
                  <label> Code </label>
                  <input type="text" name="orgCode" class="form-control" placeholder="Organisation's Code">
                  <label> Description </label>
                  <input type="text" name="description" class="form-control" placeholder="Description">
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addorg">
                            Add new Organisation
                        </button>
                    </p>
                    <table class="table table-bordered table-striped data-table" style="width:100%">
                       <thead> <tr><th>ID</th><th>Name</th><th>Code</th><th>Created At</th><th>Action</th> </tr></thead>
                       <tbody>
                       @foreach ($data as $org)
                            <tr>
                                <td>{{ $org->id }}</td>     
                                <td>{{ $org->name }}</td> 
                                <td>{{ $org->orgCode }}</td> 
                                <td>{{ $org->created_at }}</td> 
                            <td>
                                <form action="{{ route('admin.organisations.destroy', $org->id) }}" method="post" id="delForm{{$org->id}}">
                                    @csrf @method('DELETE')
                                    {{-- <button class="btn btn-danger btn-xs" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button> --}}
                                </form>
                                <a class="btn btn-primary btn-info btn-xs" href="{{ route('admin.organisations.show', $org->id) }}" ><i class="fa fa-eye" data-toggle="tooltip" title="View"></i></a>
                                <a class="btn btn-primary btn-warning btn-xs" href="{{ route('admin.organisations.edit', $org->id) }}"><i class="fa fa-edit" data-toggle="tooltip" title="Edit"></i></a>
                            <a class="btn btn-danger btn-xs" data-title="Delete" href="javascript:void(0)" onclick=" document.getElementById('delForm{{$org->id}}').submit() "><i class="fa fa-times" data-toggle="tooltip" title="Delete"></i></a>
                            </td>
                            </tr>
                        @endforeach
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
                            //.appendTo( $(column.footer()).empty() )
                            //.appendTo( $(column.header()) )
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
