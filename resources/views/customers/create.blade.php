@extends('layouts.master')
@section('title','Customers')

@section('content')
    <div class="page-header">
        <h1>Add Customer</h1>
        
    </div>
    <!--@if($errors->any())
        <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </div>
    @endif
    -->
    {!! Form::open(['url' =>'admin/customers','method'=>'post','files'=>true]) !!}
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {{Form::Label('First Name')}}
                    {{Form::text('first_name','',['class'=>'form-control'])}}
                    @if($errors->first('first_name'))
                    <div class="label label-danger">
                        {{$errors->first('first_name')}}
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {{Form::Label('Last Name')}}
                    {{Form::text('last_name','',['class'=>'form-control'])}}
                    @if($errors->first('last_name'))
                    <div class="label label-danger">
                        {{$errors->first('last_name')}}
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {{Form::Label('Email')}}
                    {{Form::email('email','',['class'=>'form-control'])}}
                    @if($errors->first('email'))
                    <div class="label label-danger">
                        {{$errors->first('email')}}
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {{Form::Label('Contact No')}}
                    {{Form::text('contact_no','',['class'=>'form-control'])}}
                    @if($errors->first('contact_no'))
                    <div class="label label-danger">
                        {{$errors->first('contact_no')}}
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {{Form::Label('Photo')}}
                    {{Form::file('photo')}}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {{Form::Label('Bio')}}
                    {{Form::textarea('bio','',['class'=>'form-control'])}}
                    @if($errors->first('bio'))
                    <div class="label label-danger">
                        {{$errors->first('bio')}}
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{url('admin/customers')}}" class="btn btn-danger">Back</a>
    {!!Form::close()!!}
@endsection