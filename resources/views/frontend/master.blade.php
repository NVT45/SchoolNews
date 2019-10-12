<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a573142e63.js"></script>
    <link rel="stylesheet" href="{{URL::asset('vendors/css/grid.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/lightbox.min.css')}}">
    <script src="{{URL::asset('css/lightbox-plus-jquery.min.js')}}"></script>
</head>

<body>
<div class="container">
    <header>
        <!-- <div class="row ">
            <div class="heading-main-box">
                <h1>Trường Trung Học Phổ Thông <br> Thường Tín <br>
                </h1>
            </div>
        </div> -->
    </header>
    <div class="nav">
        <a href="{{asset('home')}}">Trang chủ</a>
        @foreach($categories as $cate)
        <a href="{{asset('category/'.$cate->cate_id.'/'.$cate->cate_slug.'.html')}}">{{$cate->cate_name}}</a>

            @endforeach
        <a href="{{asset('timetable')}}">Thời khóa biểu</a>
        <a href="{{asset('schedules')}}">Lịch công tác</a>
        <a href="{{asset('contact')}}">Liên hệ</a>
    </div>
    @yield('main')
    <footer>
        <div class="row">

            <div class="col span-1-of-2">
                <div class="row">
                    <h2>Hình ảnh tiêu biểu</h2>
                </div>
                <div class="row">
                    <ul class="sponsors-showcase">
                        <li>
                            <figure>
                                <img class="logo-sponsors" src="{{URL::asset('images/thpttt1.jpg')}}" alt="thuong_tin">

                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img class="logo-sponsors" src="{{URL::asset('images/thpttt1.jpg')}}" alt="thuong_tin">

                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img class="logo-sponsors" src="{{URL::asset('images/thpttt1.jpg')}}" alt="thuong_tin">

                            </figure>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="col span-1-of-2">
                <div class="row">
                    <h2>Trường THPT Trần Phú</h2>
                </div>
                <div class="row">
                    <ul class="information">
                        <li><i class="fas fa-map-marker-alt "></i> Địa chỉ: Số 8 Phố Hai Bà Trưng - Hoàn Kiếm - Hà
                            Nội
                        </li>
                        <li><i class="fas fa-envelope "></i> http://Email: c3tranphu@hanoi.edu.vn </li>
                        <li><i class="fas fa-phone "></i> Điện thoại: (+84.4) 3825 2544 - 39368395</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>

</html>