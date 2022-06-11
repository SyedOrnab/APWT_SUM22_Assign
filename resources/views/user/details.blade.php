@extends('layouts.loggedin')
@section('content')
    <h1>Details</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Reg. Date</th>
        </tr>
        @foreach($customers as $c)
        <tr>
            <td> <a href="{{route('user.details'),['name'=>$c->name]}}">{{$c->name}}</a> </td>
            <td> {{$c->email}}</td>
            <td> {{$c->created_at}}</td>
            
        </tr>
    </table>

@endsection