@extends('master')

@section('content')

<h2>Users</h2>

<ul>
    @foreach ($users as $user)
    <li>{{$user->fisrtName}} <a href="{{route('users.edit', ['user'->$user->id])}}">Edit</a> <br>
        <a href="">Delete</a>
    </li>
    @endforeach
</ul>

@endsection