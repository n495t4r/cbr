@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Beneficiaries</h1>
@stop

@section('content')



{{--modal for create.blade.php  --}}
<div class="modal fade" id="addben" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Beneficiary</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('admin.beneficiaries.store') }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="modal-body">
              <div class="form-group">
                <label> Name </label>
                <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
                <input type="text" name="middle_name" class="form-control" placeholder="Middle Name">
                <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
                <label> Phone</label>
                <input type="phone" name="phone" class="form-control" required>
                <label> Gender </label>
                    <select name="gender" class="form-control" required>
                        <option value="select" selected disabled>select an option</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                <label> Date of Birth </label>
                <input type="date" name="dob" class="form-control"  required>
                <label> Address </label>
                <input type="text" name="address" class="form-control" required>
                <label> State </label>
                <input type="text" name="state" class="form-control" required>
                <label> LGA </label>
                <input type="text" name="lga" class="form-control" required>
                <label> Marital Status </label>
                <select name="marital_status" class="form-control" required>
                    <option value="select" selected disabled>select an option</option>
                    <option value="Married">Married</option>
                    <option value="Single">Single</option>
                </select>
                <label> Programme</label>
                <select name="progID" class="form-control">
                    <option value="0" selected>default</option>
                    @foreach ($data2 ?? '' as $prog)
                        <option value="{{$prog->progCode}}">{{$prog->name}}</option>
                    @endforeach
                </select>
                <label> Location Code </label>
                <input type="text" name="locCode" class="form-control" required>
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addben">
                            Add new Beneficiary
                        </button>
                        {{-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#advSearch">
                            Filter
                        </button> --}}
                    </p>
                    <div id="accordion">
                          <div id="headingOne">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Filter
                                </button>
                          </div>
                          <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="input-field" id="table_filter"></div>
                                </div>
                            </div>
                          </div>
                    </div>
                    
                    <table class="table table-hover table-striped " id="data_table" >
                       <thead>
                            <tr><th>ID</th><th>First Name</th><th>Middle Name</th><th>Last Name</th><th>Phone</th><th>Email</th><th>Gender</th><th>State</th><th>LGA</th><th>Programme</th><th>Created At</th><th>Action</th> </tr>
                       </thead>
                       <tbody> 
                       @foreach ($data as $ben)
                            <tr>
                                <td>{{ $ben->id }}</td> 
                                <td>{{ $ben->first_name }}</td> 
                                <td>{{ $ben->middle_name }}</td> 
                                <td>{{ $ben->last_name }}</td> 
                                <td>{{ $ben->phone }}</td> 
                                <td>{{ $ben->address }}</td> 
                                <td>{{ $ben->gender }}</td> 
                                <td>{{ $ben->state }}</td> 
                                <td>{{ $ben->lga }}</td> 
                                <td>{{ $ben['getProgrammeRelation']->name }}</td> 
                                <td>{{ $ben->created_at }}</td> 
                                <td style="padding-left: 0px; padding-right: 0px; ">
                                    <form action="{{ route('admin.beneficiaries.destroy', $ben->id) }}" method="post" id="delForm{{$ben->id}}">
                                        @csrf @method('DELETE')
                                    </form>
                                    <a class="btn btn-primary btn-info btn-xs" href="{{ route('admin.beneficiaries.show', $ben->id) }}" ><i class="fa fa-eye" data-toggle="tooltip" title="View"></i></a>
                                    <a class="btn btn-primary btn-warning btn-xs" href="{{ route('admin.beneficiaries.edit', $ben->id) }}"><i class="fa fa-edit" data-toggle="tooltip" title="Edit"></i></a>
                                    <a class="btn btn-primary btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#modalConfirmDelete" href="javascript:void(0)" ><i class="fa fa-times" title="Delete"></i></a>
                                </td>
                            </tr>
                        @endforeach
                       </tbody>
                    </table>
                   
                </div>
            </div>
        </div>
    </div>
    @include('partials.advancedsearch')
    @include('partials.confirmdel')
@stop
@section('js')
    <script>

$(document).ready(function() {
    var table = $('#data_table').DataTable({
       // stateSave: true,
        // dom: 'Bfrtip',
        sDom: 'C<"clear">Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                exportOptions: {
                columns: ':visible'
                }
            },
            {
                extend: 'csvHtml5',
                exportOptions: {
                columns: ':visible'
                }
            },
            {
                extend: 'pdfHtml5',
                exportOptions: {
                columns: ':visible'
                }
            },
            {
                extend: 'print',
                
                exportOptions: {
                columns: ':visible'
                },
                customize: function ( win ) {
                    $(win.document.body)
                        .css( 'font-size', '10pt' );
                    $(win.document.body).find( 'table' )
                        .addClass( 'compact' )
                        .css( 'font-size', 'inherit' );
                }
            }
            ,
            {
                extend: 'colvis',
                // restore: 'true'
                postfixButtons: [ 'colvisRestore' ],
                collectionLayout: 'fixed two-column'
            }
        ],
        columnDefs: [ {
            targets: [5,8,-2],
            visible: false
        } ],
        initComplete: function () 
        {
            this.api().columns([2,3,4,5]).every( function ()    //columns to show on filter
            {
                var column = this;
                var select = $(
                    '<select class="form-control"><option value="">All</option></select>'
                    )
                    //.appendTo( $(column.footer()).empty() )
                    // .appendTo( $(column.header()) )
                    .appendTo( '#table_filter' )
                    .on( 'change', function () 
                    {
                        var val = $.fn.dataTable.util.escapeRegex($(this).val());
                        column.search( val ? '^'+val+'$' : '', true, false ).draw();
                    } );

                    $( select ).click( function(e) {
                        e.stopPropagation();
                    });

                column.data().unique().sort().each( function ( d, j ) {
                    if(column.search() === '^'+d+'$'){
                        select.append( '<option value="'+d+'" selected="selected">'+d+'</option>' )
                    } else {
                        select.append( '<option value="'+d+'">'+d.substr(0,20)+'</option>' )
                    }
                } );
            });
        }
    });
} );
    
    </script>
@Stop