@extends('layouts.admin')
@section('content')
@section('pagehead','Update Albums')
<div class="row">
    <div class="col-md-4">
        <img width="300px" height="300px" src="{{asset('../storage/app/AlbumsCoverImage/'.$album->album_cover_image)}}" alt="" class="img-responsive img-rounded">

    </div>
    <div class="col-md-8">
        {!! Form::model($album,['method'=>'POST','files'=>true]) !!}
        {{ csrf_field() }}
        <div class="form-group">
            {!! Form::label('name','Name:') !!}
            {!! Form::text('name',$album->album_name,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description','Description:') !!}
            {!! Form::textarea('description',$album->album_description,['class'=>'form-control']) !!}
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
    </div>
</div>

@stop