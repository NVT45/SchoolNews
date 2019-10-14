@extends('frontend.master')
@section('title','Trang chủ')
@section('main')
        <section class="home">
            <div class="home-responsive">
                <div class="home-img">
                    <img src="{{URL::asset('images/trang_chu.png')}}" alt="">
                </div>
                <div class="row">
                    <div class=" col span-3-of-5 border-home-news">
                        @foreach($news as $onews)
                        <div class="col span-1-of-3 fix-top">
                            <div class="home-news">
                                <div class="title-home-news">
                                    <h1>{{$onews->news_title}}</h1>
                                    <span>{{$onews->created_at}}</span>
                                </div>

                                <img src="{{asset('../storage/app/images/'.$onews->news_image)}}" alt="">
                                <p>

                                    {{str_limit($onews->news_short_des,200)}}
                                    <a href="{{asset('news/'.$onews->news_id.'/'.$onews->news_slug.'.html')}}">Đọc tiếp ></a>
                                </p>
                            </div>

                        </div>
                        @endforeach
                    </div>

                    <div class="col span-2-of-5">
                        <h2>THƯ VIỆN ẢNH</h2>
                        <div class="slideshow-container">

                            <!-- Full-width images with number and caption text -->
                            <div class="mySlides fade">
                                <div class="numbertext">1 / 3</div>
                                <img src="{{URL::asset('images/view.jpg')}}" style="width:100%">
                                <div class="text">Caption Text</div>
                            </div>

                            <div class="mySlides fade">
                                <div class="numbertext">2 / 3</div>
                                <img src="{{URL::asset('images/begiang2.jpg')}}" style="width:100%">
                                <div class="text">Caption Two</div>
                            </div>

                            <div class="mySlides fade">
                                <div class="numbertext">3 / 3</div>
                                <img src="{{URL::asset('images/phatbieu.jpg')}}" style="width:100%">
                                <div class="text">Caption Three</div>
                            </div>

                            <!-- Next and previous buttons -->
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                        <br>

                        <script>
                            var slideIndex = 1;
                            showSlides(slideIndex);

                            function plusSlides(n) {
                                showSlides(slideIndex += n);
                            }

                            function currentSlide(n) {
                                showSlides(slideIndex = n);
                            }

                            function showSlides(n) {
                                var i;
                                var slides = document.getElementsByClassName("mySlides");
                                var dots = document.getElementsByClassName("dot");
                                if (n > slides.length) {slideIndex = 1}
                                if (n < 1) {slideIndex = slides.length}
                                for (i = 0; i < slides.length; i++) {
                                    slides[i].style.display = "none";
                                }
                                for (i = 0; i < dots.length; i++) {
                                    dots[i].className = dots[i].className.replace(" active", "");
                                }
                                slides[slideIndex-1].style.display = "block";
                                dots[slideIndex-1].className += " active";
                            }
                        </script>
                        <div class="row home-list-image">
                            <ul>
                                <li>
                                    <img src="{{URL::asset('images/home-img2.jpg')}}" alt="">
                                </li>
                                <li>
                                    <img src="{{URL::asset('images/home-img3.jpg')}}" alt="">
                                </li>
                                <li>
                                    <img src="{{URL::asset('images/home-img2.jpg')}}" alt="">
                                </li>
                            </ul>
                            <a href="{{asset('gallery')}}">Xem thêm...</a>
                        </div>
                    </div>
                </div>
                <div class="home-focus">
                    <h3>TIN TIÊU ĐIỂM</h3>
                    <ul>
                        <li>
                            <a href="">Công đoàn trường THPT Trần Phú - Hoàn Kiếm đổi mới sáng tạo. Vì quyền lợi và lợi
                                ích cảu đoàn viên,vì sự phát triển bền vững
                                của nhà trường.
                            </a>
                            <span>Cập nhật ngày dd/mmm/yyyy</span>
                        </li>
                        <li>
                            <a href="">Lễ khai giảng 2018-2019
                            </a>
                            <span>Cập nhật ngày dd/mmm/yyyy</span>
                        </li>
                        <li>
                            <a href="">Xã luận trường học hạnh phúc
                            </a>
                            <span>Cập nhật ngày dd/mmm/yyyy</span>
                        </li>
                    </ul>
                </div>
            </div>


        </section>
  @stop