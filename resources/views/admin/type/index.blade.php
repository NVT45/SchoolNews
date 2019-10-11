@extends('layouts.admin')
@section('content')
@section('pagehead','Type News')
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
            @foreach($types as $type)
                <tr>
                    <td>{{$type -> type_id}}</td>
                    <td><a href="{{asset('admin/type/edit/'.$type->type_id)}}">{{$type ->type_name}}</a></td>
                    <td>{{$type->created_at ?  $type->created_at->diffForHumans() : 'No date'}}</td>
                    <td><a href="{{asset('admin/type/delete/'.$type->type_id)}}" class="btn btn-warning"></a></td>

                </tr>
            @endforeach

            </tbody>
        </table>
        {!! $types->links() !!}
    </div>
    <div class="col-sm-6">
        {!! Form::open(['method'=>'POST','files'=>true]) !!}
        {{ csrf_field() }}
        <div class="form-group">
            {!! Form::label('category_id','Category:') !!}
            {!! Form::select('category_id',[''=>'Choose Categories'] + $categories,null,['class'=>'form-control']) !!}
        </div>
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