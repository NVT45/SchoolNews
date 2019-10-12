@extends('layouts.admin')
@section('content')
@section('pagehead','Create Photos')
{!! Form::open(['method'=>'POST','files'=>true]) !!}
{{ csrf_field() }}
<div class="form-group">
    {!! Form::label('title','Title:') !!}
    {!! Form::text('title',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('album_id','Category:') !!}
    {!! Form::select('album_id',[''=>'Choose Albums'] + $albums,null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('photo_file','Choose Cover Image:') !!}
    {!! Form::file('photo_file',null,['class'=>'dropzone']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Create Photos',['class'=>'btn btn-primary']) !!}
</div>
@include('errors.note')
{!! Form::close() !!}
@stop