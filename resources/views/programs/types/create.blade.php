@extends('layouts.master')
@section('title','Program Types')

@section('content')
    <div class="page-header">
        <h1>Add Program Types</h1>
        
    </div>
    <!--@if($errors->any())
        <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </div>
    @endif
    -->
    {!! Form::open(['url' => 'admin/programtypes','method'=>'post']) !!}
        <div class="form-group">
            {{Form::Label('Program Type Name')}}
            {{Form::text('name','',['class'=>'form-control'])}}
            @if($errors->first('name'))
            <div class="label label-danger">
                {{$errors->first('name')}}
            </div>
            @endif
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{url('admin/programtypes')}}" class="btn btn-danger">Back</a>
    {!!Form::close()!!}
@endsection