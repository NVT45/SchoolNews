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
                        <div class="pagination">
                            {!! $schedules->links() !!}
                        </div>
                    </div>





                </div>
                <div class="col span-1-of-4 des-left">
                    <div class="des-right">
                        <h3>TIỆN ÍCH</h3>
                        <ul>
                            <li><img src="{{URL::asset('images/iphone.jpg')}}" alt=""><a href=""><strong>SỔ LIÊN LẠC ĐIỆN
                                        TỬ</strong> </a></li>
                            <li><img src="{{URL::asset('images/teacher.jpg')}}" alt=""><a href=""><strong>QUẢN LÝ GIÁO
                                        VIÊN</strong> </a></li>
                            <li><img src="{{URL::asset('images/download.jpg')}}" alt=""><a href=""><strong>DOWNLOAD
                                        PHẦN
                                        MỀM</strong> </a></li>
                        </ul>
                    </div>

                </div>
            </div>

        </section>
    @stop