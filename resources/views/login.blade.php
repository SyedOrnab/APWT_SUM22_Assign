@extends('layouts.loggedin')
@section('content')
    <form action="">
        Email:<input type="text" placeholder="Enter Email" name="email"><br>
        Password:<input type="password" placeholder="Enter Password" name="password"><br>
        <input type="submit" value="Login">
    </form>
@endsection