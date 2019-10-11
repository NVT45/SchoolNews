@extends('layouts.admin')
@section('content')
@section('pagehead','Edit Type News')
<div class="col-sm-6">
    {!! Form::model($type,['method'=>'POST']) !!}
    {{ csrf_field() }}
    <div class="form-group">
        {!! Form::label('category_id','Category:') !!}
        {!! Form::select('category_id',$categories,null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('name','Name:') !!}
        {!! Form::text('name',$type->type_name,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update Category',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
    @include('errors.note')
</div>

@stop