@extends('layouts.app')
@section('title')
Users
@stop

@section('title-right')
<a href="{{ url('admin/users/create') }}" class="btn btn-primary pull-right btn-sm" title="Add"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New User</a>
@stop

@section('content')

<div class="x_panel">
  <div class="x_title">
    <h2><i class="fa fa-list-alt" aria-hidden="true"></i> Users List </h2>
    <ul class="nav navbar-right panel_toolbox">
      <li><a href="{{ url('users') }}" title="Refresh"><i class="fa fa-refresh" aria-hidden="true"></i></span></a> </li>
      <li><a class="collapse-link" title="Hidden"><i class="fa fa-chevron-up"></i></a> </li>
      <li> <a class="close-link" title="Close"><i class="fa fa-close" ></i></a></li>
    </ul>
    <div class="clearfix"></div>
  </div>
  <!--/.x_title -->
  <div class="x_content">
      <div class="table table-responsive">
          <table class="table table-bordered table-striped table-hover datatable" id="tbladmin/users">
              <thead>
                  <tr>
                      <th>Actions</th><th>Name</th><th>Username</th><th>Email</th>
                  </tr>
              </thead>
              <tbody>
              @foreach($users as $item)
                  <tr>
                      <td>
                      <a href="{{ url('admin/users/' . $item->id . '/show') }}" class="btn btn-info btn-sm" title="View">  <i class="fa fa-eye" aria-hidden="true"></i></a>
                      <a href="{{ url('admin/users/' . $item->id . '/edit') }}" class="btn btn-success btn-sm" title="Edit">  <i class="fa fa-pencil" aria-hidden="true"></i></a>
                      <a href="{{ url('admin/users/' . $item->id . '/destroy') }}" class="btn btn-danger btn-sm icon-del" title="Del">  <i class="fa fa-trash-o" aria-hidden="true"></i></a>
                      </td>
                      <td><a href="{{ url('admin/users', $item->id) }}">{{ $item->name }}</a></td><td>{{ $item->username }}</td><td>{{ $item->email }}</td>
                  </tr>
              @endforeach
              </tbody>
          </table>
      </div>
  </div>
  <!--/.x_content -->
</div>
<!--/.x_panel -->

@endsection


@section('scripts')
<link href="{{asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
<script src="{{asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

<script>
  $('.datatable').dataTable({
    columnDefs: [{ targets: 'no-sort', orderable: false }],
    order: []
  });
</script>
@endsection
