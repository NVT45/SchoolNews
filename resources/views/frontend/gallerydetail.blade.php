@extends('frontend.master')
@section('title','Album Ảnh')

@section('main')

    <section class="gallery-detail">
        <div class="images-detail">
            <a href="{{URL::asset('images/car_pictures/images-10.jpg')}}" data-lightbox="gallery" data-title="car image"><img src="{{URL::asset('images/car_pictures/images-10.jpg')}}" alt=""></a>
            <a href="{{URL::asset('images/car_pictures/images-10.jpg')}}" data-lightbox="gallery" data-title="car image"><img src="{{URL::asset('images/car_pictures/images-10.jpg')}}" alt=""></a>
            <a href="{{URL::asset('images/car_pictures/images-11.jpg')}}" data-lightbox="gallery" data-title="car image"><img src="{{URL::asset('images/car_pictures/images-11.jpg')}}" alt=""></a>
            <a href="{{URL::asset('images/car_pictures/images-12.jpg')}}" data-lightbox="gallery" data-title="car image"><img src="{{URL::asset('images/car_pictures/images-12.jpg')}}" alt=""></a>
            <a href="{{URL::asset('images/car_pictures/images-13.jpg')}}" data-lightbox="gallery" data-title="car image"><img src="{{URL::asset('images/car_pictures/images-13.jpg')}}" alt=""></a>
            <a href="{{URL::asset('images/car_pictures/images-14.jpg')}}" data-lightbox="gallery" data-title="car image"><img src="{{URL::asset('images/car_pictures/images-14.jpg')}}" alt=""></a>
            <a href="{{URL::asset('images/car_pictures/images-15.jpg')}}" data-lightbox="gallery" data-title="car image"><img src="{{URL::asset('images/car_pictures/images-15.jpg')}}" alt=""></a>
            <a href="{{URL::asset('images/car_pictures/images-16.jpg')}}" data-lightbox="gallery" data-title="car image"><img src="{{URL::asset('images/car_pictures/images-16.jpg')}}" alt=""></a>
            <a href="{{URL::asset('images/car_pictures/images-17.jpg')}}" data-lightbox="gallery" data-title="car image"><img src="{{URL::asset('images/car_pictures/images-17.jpg')}}" alt=""></a>
            <a href="{{URL::asset('images/car_pictures/images-18.jpg')}}" data-lightbox="gallery" data-title="car image"><img src="{{URL::asset('images/car_pictures/images-18.jpg')}}" alt=""></a>
        </div>
    </section>
@stop