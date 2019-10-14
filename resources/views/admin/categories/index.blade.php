@extends('layouts.admin')
@section('content')
@section('pagehead','Categories')
<div class="row">
    <div class="col-sm-6">

            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Created Date</th>
                    <th>Delete</th>

                </tr>
                </thead>
                <tbody>
                @foreach($catelist as $category)
                    <tr>
                        <td>{{$category -> cate_id}}</td>
                        <td><a href="{{asset('admin/category/edit/'.$category->cate_id)}}">{{$category -> cate_name}}</a></td>
                        <td>{{$category->created_at ?  $category->created_at->diffForHumans() : 'No date'}}</td>
                        <td><a href="{{asset('admin/category/delete/'.$category->cate_id)}}" class="btn btn-warning"></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>

    </div>
    <div class="col-sm-6">
        {!! Form::open(['method'=>'POST','files'=>true]) !!}
        {{ csrf_field() }}
        <div class="form-group">
            {!! Form::label('name','Name:') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create Category',['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
        @include('errors.note')
    </div>


</div>
@stop