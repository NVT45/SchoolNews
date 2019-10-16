@extends('layouts.admin')
@section('content')
@section('pagehead','Schedules')
<div class="col-sm-6">
    {!! Form::model($schedule,['method'=>'POST','files'=>true]) !!}
    {{ csrf_field() }}
    <div class="form-group">
        {!! Form::label('title','Title:') !!}
        {!! Form::text('title',$schedule->schedule_title,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('sche_file','Choose file:') !!}
        {!! Form::file('sche_file',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update Schedule',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
    @include('errors.note')
</div>

@stop