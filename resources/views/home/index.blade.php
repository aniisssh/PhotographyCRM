@extends('layouts.master')
@section('title','Home Page')

@section('content')

<h1> Hello {{$name}} </h1>

@foreach($colors as $c)
    <li>{{$c}}</li>
@endforeach

@endsection