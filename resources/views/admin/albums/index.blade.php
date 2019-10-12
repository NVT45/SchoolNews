@extends('layouts.admin')
@section('content')
@section('pagehead',' Albums')
<table class="table">
    @include('errors.note')
    <thead>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Description</th>
        <th>Cover Image </th>
        <th>Created_at</th>
        <th>Delete Album</th>
    </tr>
    </thead>
    <tbody>
    @if($albums)
        @foreach($albums as $album)
            <tr>
                <td>{{$album -> album_id}}</td>
                <td><a href="{{asset('admin/albums/edit/'.$album->album_id)}}">{{$album->album_name}}</a></td>
                <td>{{str_limit($album -> album_description,8)}}</td>
                <td><img height="50" src="{{asset('../storage/app/AlbumsCoverImage/'.$album->album_cover_image)}}"></td>
                <td>{{$album -> created_at->diffForhumans()}}</td>
                <td><a href="{{asset('admin/albums/delete/'.$album -> album_id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a></td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>
@stop