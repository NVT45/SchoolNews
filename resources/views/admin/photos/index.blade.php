@extends('layouts.admin')
@section('content')
@section('pagehead','Photos')

@include('errors.note')
<table class="table">
    @if($photos)
        <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Image</th>
            <th>Created_at</th>
            <th>Delete Image</th>
        </tr>
        </thead>
        <tbody>
        @foreach($photos as $photo)
            <tr>
                <td>{{$photo -> photo_id}}</td>
                <td><a href="{{asset('admin/photos/edit/'.$photo -> photo_id)}}">{{$photo -> title}}</a></td>
                <td><img height="50" src="{{asset('../storage/app/Photos/'.$photo->photo_file)}}" alt=""></td>
                <td>{{$photo -> created_at ?$photo -> created_at : 'No date' }}</td>
                <td><a href="{{asset('admin/photos/delete/'.$photo -> photo_id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a></td>
            </tr>
        @endforeach
        </tbody>
</table>
@endif
@stop