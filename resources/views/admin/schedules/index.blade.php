@extends('layouts.admin')
@section('content')
@section('pagehead','Schedules')
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
                @foreach($schedules as $schedule)
                <tr>
                    <td>{{$schedule->schedule_id}}</td>
                    <td><a href="{{asset('admin/schedule/edit/'.$schedule->schedule_id)}}">{{$schedule -> schedule_title}}</a></td>
                    <td>{{$schedule->created_at ?  $schedule->created_at->diffForHumans() : 'No date'}}</td>
                    <td><a href="{{asset('admin/schedule/delete/'.$schedule->schedule_id)}}" class="btn btn-warning"></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <div class="col-sm-6">
        {!! Form::open(['method'=>'POST','files'=>true]) !!}
        {{ csrf_field() }}
        <div class="form-group">
            {!! Form::label('title','Title:') !!}
            {!! Form::text('title',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('sche_file','Choose file:') !!}
            {!! Form::file('sche_file',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create',['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
        @include('errors.note')
    </div>
</div>

@stop