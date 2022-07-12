@extends('layouts.loggedin')
@section('content')
    <form action="{{route('user.login')}}" method="post">
        @csrf
        Email:<input type="text" placeholder="Enter Email" name="email"><br>
        @error('email')
          <span class="text-danger">{{$message}}</span><br>
        @enderror
        Password:<input type="password" placeholder="Enter Password" name="password"><br>
        @error('password')
          <span class="text-danger">{{$message}}</span><br>
        @enderror
        <input type="submit" value="Login">
    </form>
@endsection