@extends('frontend.master')
@section('title','Trường THPT Trần Phú')
@section('main')
    <section class="description-section">

        <div class="row">
            <div class="col span-1-of-4 des-left">
                <h3>{{$type->category->cate_name}}</h3>
                <div class="des-left-top">
                    <ul>
                        <li><i class="fas fa-arrow-right"></i></i><a href="{{asset('type/'.$type->type_id.'/'.$type->type_slug.'.html')}}">{{$type->type_name}}</a></li>

                    </ul>
                </div>

                <h3>VĂN BẢN</h3>
                <ul>
                    <li><i class="fas fa-file-word"></i><a href="">Đơn xin đăng kí dạy thêm trong nhà trường</a>
                    </li>
                    <li><i class="fas fa-file-word"></i><a href="">Các phiếu đánh giá cuối năm</a></li>
                    <li><i class="fas fa-file-word"></i><a href="">Hướng dẫn tuyển sinh</a></li>
                    <li><i class="fas fa-file-word"></i><a href="">Văn bản về thi đua khen thưởng</a></li>
                    <li><i class="fas fa-file-word"></i><a href="">Kế hoạch tổ chức</a></li>
                </ul>
            </div>
            <div class="col span-2-of-4 des-middle">
                <div class="index-news">

                    <img src="{{asset('../storage/app/images/'.$featured['news_image'])}}" alt="">
                    <a href="{{asset('news/'.$featured['news_id'].'/'.$featured['news_slug'].'.html')}}">{{$featured['news_title']}}</a>
                    <span>Ngày đăng:{{$featured['created_at']}}</span>
                    <p class="p-long">
                        {{$featured['news_short_des']}}
                    </p>
                </div>
                <div class="list-news">
                    <ul>
                        @foreach($listnews as $news)
                            <li>
                                <img src="{{asset('../storage/app/images/'.$news->news_image)}}" alt="">
                                <a href="{{asset('news/'.$news->news_id.'/'.$news->news_slug.'.html')}}">{{$news->news_title}}</a>
                                <p>{{$news->news_short_des}}</p>
                            </li>
                        @endforeach

                    </ul>
                </div>




            </div>
            <div class="col span-1-of-4 des-left">
                <div class="des-right">
                    <h3>TIỆN ÍCH</h3>
                    <div class="row des-right-border">
                        <div class="col span-1-of-4 des-right-img">
                            <img src="{{asset('images/iphone.jpg')}}" alt="">

                        </div>
                        <div class="col span-3-of-4 des-right-title">
                            <a href="">SỔ LIÊN LẠC ĐIỆN TỬ</a>
                            <p> Kết nối nhà trường và phụ huynh</p>
                        </div>

                    </div>
                    <div class="row des-right-border">
                        <div class="col span-1-of-4 des-right-img">
                            <img src="{{asset('images/teacher.jpg')}}" alt="">

                        </div>
                        <div class="col span-3-of-4 des-right-title">
                            <a href="">quản lý giáo viên</a>
                            <p>Tra cứu danh sách cán bộ</p>
                        </div>

                    </div>
                    <div class="row des-right-border">
                        <div class="col span-1-of-4 des-right-img">
                            <img src="{{asset('images/download.jpg')}}" alt="">

                        </div>
                        <div class="col span-3-of-4 des-right-title">
                            <a href="">download phần mềm </a>
                            <p>Hỗ trợ giảng dạy học tập</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </section>
    @stop