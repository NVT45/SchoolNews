@extends('layouts.admin')
@section('content')
@section('pagehead','Update Photo')
<div class="row">
    <div class="col-md-4">
        <img width="300px" height="300px" src="{{asset('../storage/app/Photos/'.$photo->photo_file)}}" alt="" class="img-responsive img-rounded">

    </div>
    <div class="col-md-8">
        {!! Form::model($photo,['method'=>'POST','files'=>true]) !!}
        {{ csrf_field() }}
        <div class="form-group">
            {!! Form::label('title','Title:') !!}
            {!! Form::text('title',$photo->photo_name,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('album_id','Category:') !!}
            {!! Form::select('album_id',$albums,null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('photo_file','Choose Cover Image:') !!}
            {!! Form::file('photo_file',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Update Photo',['class'=>'btn btn-primary']) !!}
        </div>
        @include('errors.note')
        {!! Form::close() !!}
    </div>
</div>

@stop