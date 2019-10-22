@extends('frontend.master')
@section('title','Trường THPT Trần Phú')
@section('main')
    <section class="description-section">

        <div class="row">
            <div class="col span-1-of-4 des-left">
                <h3>{{$catename->cate_name}}</h3>
                <div class="des-left-top">
                    <ul>
                        @foreach($gettypes as $type)
                            <li><i class="fas fa-arrow-right"></i></i><a href="{{asset('type/'.$type->type_id.'/'.$type->category->cate_id.'/'.$type->type_slug.'.html')}}">{{$type->type_name}}</a></li>
                        @endforeach
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

                <img class="index-news-img" src="{{asset('../storage/app/images/'.$news->news_image)}}" alt="">
                <h1>{{$news->title}}</h1>
                <span>Ngày đăng:{{$news->created_at}}</span>
                <div class="p-long">
                    {!! $news->news_description !!}
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