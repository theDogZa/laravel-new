@extends('layouts.app')
@section('title')
Create new User
@stop

@section('content')

    <div class="x_panel">
      <div class="x_title">
        <h2><i class="fa fa-pencil" aria-hidden="true"></i> Create New User </h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a href="{{ url('users') }}" title="Refresh"><i class="fa fa-refresh" aria-hidden="true"></i></span></a> </li>
          <li><a class="collapse-link" title="Hidden"><i class="fa fa-chevron-up"></i></a> </li>
          <li> <a class="close-link" title="Close"><i class="fa fa-close" ></i></a></li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <!--/.x_title -->
      <div class="x_content">
        <fieldset>
    {!! Form::open(['url' => 'admin/users', 'class' => 'form-horizontal form-label-left']) !!}

                <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                {!! Form::label('name', 'Name: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-md-6 col-sm-9 col-xs-12">
                    {!! Form::text('name', null, ['class' => 'form-control','required'=>'required']) !!}
                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('username') ? 'has-error' : ''}}">
                {!! Form::label('username', 'Username: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                <div class="col-md-6 col-sm-9 col-xs-12">
                    {!! Form::text('username', null, ['class' => 'form-control','required'=>'required']) !!}
                    {!! $errors->first('username', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                {!! Form::label('email', 'Email: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                <div class="col-md-6 col-sm-9 col-xs-12">
                    {!! Form::email('email', null, ['class' => 'form-control','required'=>'required']) !!}
                    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
                {!! Form::label('status', 'Status: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                <div class="col-md-6 col-sm-9 col-xs-12">
                <div class="checkbox">
                    <label>{!! Form::radio('status', '1', true , ['class' => 'flat', 'id'=>'statusY']) !!} Yes</label>
                    <label>{!! Form::radio('status', '0', false, ['class' => 'flat', 'id'=>'statusN']) !!} No</label>

                   {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

      <div style="clear:both;"></div>
      <div class="ln_solid"></div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">


          {{ Form::button('<i class="fa fa-floppy-o"></i> Save', ['type' => 'submit', 'class' => 'btn btn-primary'] )  }}
          {{ Form::button('<i class="fa fa-eraser"></i> Reset', ['type' => 'reset', 'class' => 'btn btn-warning'] )  }}

        </div>
      </div>
     </fieldset>
    {!! Form::close() !!}
  </div>
  <!--/.x_content -->
</div>
<!--/.x_panel -->
    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection

@section('scripts')
<link href="{{asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
<!-- iCheck -->
<script src="{{asset('vendors/iCheck/icheck.min.js')}}"></script>

@endsection
