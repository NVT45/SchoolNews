@extends('frontend.master')
@section('title','Lịch công tác')
@section('main')
        <section class="description-section">
            <div class="row">
                <div class="col span-1-of-4 des-left">
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
                    @foreach( $schedules as $schedule)
                    <div class="schedule">
                        <h1>{{$schedule ->schedule_title}}</h1>
                        <span>Ngày đăng: {{$schedule ->created_at}} </span>
                        <a href="{{asset('../storage/app/document/'.$schedule ->schedule_file)}}" download>{{$schedule ->schedule_file}}</a>
                    </div>
                  @endforeach
                            <div style="text-align: center;">
                                {{ $schedules->links('vendor.pagination.custom') }}
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