@extends('layout')
@section('content')
    <h1>Welcome user {{Auth::user()->name}}</h1>
    <hr>
    <br>
    <a href="/logout"><button>Logout</button></a>
@endsection