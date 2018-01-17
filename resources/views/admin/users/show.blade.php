@extends('backLayout.app')
@section('title')
User
@stop

@section('content')

    <h1>User</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Title</th><th>Body</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $user->id }}</td> <td> {{ $user->title }} </td><td> {{ $user->body }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection