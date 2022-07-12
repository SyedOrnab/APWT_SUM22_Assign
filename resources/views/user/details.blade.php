@extends('layouts.loggedin')
@section('content')
    <h1>Details</h1>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        @foreach($customers as $c)
        <tr>
            <td>{{$c->id}}</td>
            <td> <a href="{{route('user.details'),['id'=>$c->id]}}">{{$c->name}}</a> </td>
            <td> {{$c->email}}</td>
            
        </tr>
    </table>

@endsection