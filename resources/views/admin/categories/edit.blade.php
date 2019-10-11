@extends('layouts.admin')
@section('content')
@section('pagehead','Categories')
<div class="col-sm-6">
    {!! Form::model($cate,['method'=>'POST']) !!}
    {{ csrf_field() }}
    <div class="form-group">
        {!! Form::label('name','Name:') !!}
        {!! Form::text('name',$cate->cate_name,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update Category',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
    @include('errors.note')
</div>

@stop