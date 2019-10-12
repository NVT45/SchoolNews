@extends('layouts.admin')
@section('content')
@section('pagehead','Create Albums')
{!! Form::open(['method'=>'POST','files'=>true]) !!}
{{ csrf_field() }}
<div class="form-group">
    {!! Form::label('name','Name:') !!}
    {!! Form::text('name',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('description','Description:') !!}
    {!! Form::textarea('description',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('cover_image','Choose Cover Image:') !!}
    {!! Form::file('cover_image',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Create Album',['class'=>'btn btn-primary']) !!}
</div>
@include('errors.note')
{!! Form::close() !!}
@stop