@extends('layout.app')
@section('title', 'Login')
@section('content')

<form method="GET" action="{{route('login_process')}}">
    <h2>Login</h2>
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input name="user_name" type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter email">
        @error('user_name')
        <p style="color: red">{{$message}}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input name="password" type="password" class="form-control" id="password" placeholder="Password">
        @error('password')
        <p style="color: red">{{$message}}</p>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
    <br/><br/>
    <a href="{{route('register')}}">
        <input type="button" class="btn btn-secondary" value="Register">
    </a>
</form>
@endsection
