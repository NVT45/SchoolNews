@extends('frontend.master')
@section('title','Thư viện ảnh')
@section('main')
       <section class="gallery">
          <div class="about-picture">
              <img class="picture-1" src="{{URL::asset('images/thpttt2.jpg')}}" alt="">
          </div>
         <div class="about-picture">
             @foreach($albums as $album)
                <div class="responsive">
                        <div class="picture-detail">
                          <a target="_blank" href="{{asset('gallerydetail/'.$album->album_id)}}">
                            <img src="{{asset('../storage/app/AlbumsCoverImage/'.$album->album_cover_image)}}" alt="Cinque Terre" width="600" height="400">
                          </a>
                          <div class="desc">{{$album->album_name}}</div>
                        </div>
                      </div>
                 @endforeach
                      <div class="clearfix"></div>
         </div>
         
       </section>
 @stop