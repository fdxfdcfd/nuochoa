@extends('templates.master')
 
@section('content')
    <h1>Danh sách người dùng</h1>
    <ul>
        <li>
        @foreach ($userlist as $user)
            <p>Ten {{ $user['name'] }}</p>
        @endforeach
        </li>
    </ul>
@stop