@extends('frontend.master')
@section('title','Album Ảnh '."{$album->album_name}")

@section('main')

    <section class="gallery-detail">
        <div class="images-detail">
            @foreach($photos as $photo)
            <a href="{{asset('../storage/app/Photos/'.$photo->photo_file)}}" data-lightbox="gallery" data-title="{{$photo->title}}"><img src="{{asset('../storage/app/Photos/'.$photo->photo_file)}}" alt=""></a>
           @endforeach
        </div>
    </section>
@stop