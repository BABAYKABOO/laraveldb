@extends('layout.app')
@section('title', 'Register')
@section('content')
    <form action="{{route('register_process')}}" method="GET">
        <h2>Register</h2>
        @csrf

        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter email">
            @error('name')
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

        <div class="form-group">
            <label for="exampleInputPassword1">Confirm password</label>
            <input name="password_confirmation" type="password" class="form-control" id="password" placeholder="Password">
            @error('password_confirmation')
                <p style="color: red">{{$message}}</p>
            @enderror
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
            <br/><br/>
        <a href="{{route('login')}}">
            <input type="button" class="btn btn-secondary" value="Login">
        </a>
    </form>
@endsection
