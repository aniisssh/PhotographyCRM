
@extends('layouts.master')
@section('title','Function customers')
@section('content')
    <div class='page-header'>
        <h1>Customers</h1>
    </div>

    <div class="pull-right">
        <p>
            <a href="{{url('admin/customers/create ')}}" class="btn btn-primary btn-xs" title="Add Program customers">
                <span class ="glyphicon glyphicon-plus"><span>
            </a>
        </p>
    </div>
    <table class="table table-hover table-striped">
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Contact No</th>
            <th>Created Date</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        @foreach($customers as $customer)
        <tr>
            <td>{{$customer->id}}</td>
            <td>
                <a href="{{Storage::url($customer->photo)}}" target="_blank">
                    <img src="{{Storage::url($customer->photo)}}"/></td>
                </a>
            <td>{{$customer->first_name}} {{$customer->last_name}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->contact_no}}</td>
            <td>{{$customer->created_date}}</td>
            <td>{{$customer->status}}</td>
            <td>
                @if($customer->status)
                    <label class="label label-success">Active</label>
                @else
                    <label class="label label-danger">Inactive</label>
                @endif
            </td>
            <td>
               <form method="post" action="{{url('customers/'.$customer->id)}}">
               <a href="{{url('admin/customers/'.$customer->id.'/edit')}}" class="btn btn-success btn-xs" title="Edit Program customers">
                    <span class ="glyphicon glyphicon-plus"><span>
               {{csrf_field()}}
               <input type="hidden" name="method" value="DELETE"/>
               <button type="submit" class="btn btn-danger btn-xs">
                    <span class="glyphicon glyphicon-trash"></span>
                </button> 
               </form>
            </td>
        </tr>  
        @endforeach
    </table>
@endsection