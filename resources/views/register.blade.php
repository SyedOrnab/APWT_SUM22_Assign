@extends('layouts.loggedin')
@section('content')
<form method="post" action="{{route('userregistration')}}">
        
        {{@csrf_field()}}
        Name: <input type="text" name="name" value="{{old('name')}}" placeholder="Enter Name" ><br>
        @error('name')
          <span class="text-danger">{{$message}}</span><br>
        @enderror
        Email: <input type="text" name="email" value="{{old('email')}}" placeholder="Enter Email"><br>
        @error('email')
            <span class="text-danger">{{$message}}</span><br>
        @enderror
        Password: <input type="password" name="password" ><br>
        @error('password')
            <span class="text-danger">{{$message}}</span><br>
        @enderror
        Confirm Password: <input type="password" name="confirmpassword"><br>
        @error('confirmpassword')
            <span class="text-danger">{{$message}}</span><br>
        @enderror
        <input type="submit" value="Registration">
    </form>
@endsection