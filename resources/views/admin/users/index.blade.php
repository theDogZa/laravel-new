@extends('layouts.app')
@section('title')
User
@stop

@section('title-right')
<a href="{{ url('admin/users/create') }}" class="btn btn-primary pull-right btn-sm"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New User</a>
@stop

@section('content')


  <!-- <h1>Users <a href="{{ url('admin/users/create') }}" class="btn btn-primary pull-right btn-sm"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New User</a></h1> -->
  <div class="x_panel">
    <div class="x_title">
      <h2>Users List <!--<small>different form elements</small>--></h2>
      <div class="clearfix"></div>
    </div>
    <!--/.x_title -->
<div class="x_content">

    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover datatable" id="tbladmin/users">
            <thead>
                <tr>
                    <th class="no-sort">Actions</th>

                    <th>Title</th>
                    <th>Body</th>
                </tr>
            </thead>
            <tbody>
            @foreach($users as $item)
                <tr>
                  <td>
                      <a href="{{ url('admin/users/' . $item->id . '/show') }}" class="btn btn-info btn-xs">  <i class="fa fa-eye" aria-hidden="true"></i></a>
                      <a href="{{ url('admin/users/' . $item->id . '/edit') }}" class="btn btn-success btn-xs">  <i class="fa fa-pencil" aria-hidden="true"></i></a>
                      <a href="{{ url('admin/users/' . $item->id . '/del') }}" class="btn btn-danger btn-xs">  <i class="fa fa-trash-o" aria-hidden="true"></i></a>
                  </td>
                    <!-- <td>{{ $item->id }}</td> -->
                    <td><a href="{{ url('admin/users', $item->id) }}">{{ $item->name }}</a></td>
                    <td>{{ $item->email }}</td>

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
