@extends('frontend.master')
@section('title','Thời khóa biểu')
@section('main')
        <section class="description-section">
            <div class="timetable">
                <div class="row timetable-img">
                    <img src="./resources/images/thoi_khoa_bieu (1).jpg" alt="">
                </div>

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
                        <div class="timetable-table">
                            <table>
                                <tr>
                                    <th>KHỐI 10</th>
                                    <th>KHỐI 11</th>
                                    <th>KHỐI 12</th>
                                </tr>
                                <tr>
                                    <td><a href="">LỚP 10A1 </a></td>
                                    <td><a href="">LỚP 11A1 </a></td>
                                    <td><a href="">LỚP 12A1 </a></td>
                                </tr>
                                <tr>
                                    <td><a href="">LỚP 10A2 </a></td>
                                    <td><a href="">LỚP 11A2 </a></td>
                                    <td><a href="">LỚP 12A2 </a></td>
                                </tr>
                                <tr>
                                    <td><a href="">LỚP 10A3 </a></td>
                                    <td><a href="">LỚP 11A3 </a></td>
                                    <td><a href="">LỚP 12A3 </a></td>
                                </tr>
                                <tr>
                                    <td><a href="">LỚP 10A4 </a></td>
                                    <td><a href="">LỚP 11A4 </a></td>
                                    <td><a href="">LỚP 12A4 </a></td>
                                </tr>
                                <tr>
                                    <td><a href="">LỚP 10A5 </a></td>
                                    <td><a href="">LỚP 11A5 </a></td>
                                    <td><a href="">LỚP 12A5 </a></td>
                                </tr>
                                <tr>
                                    <td><a href="">LỚP 10A6 </a></td>
                                    <td><a href="">LỚP 11A6 </a></td>
                                    <td><a href="">LỚP 12A6 </a></td>
                                </tr>
                                <tr>
                                    <td><a href="">LỚP 10A7 </a></td>
                                    <td><a href="">LỚP 11A7 </a></td>
                                    <td><a href="">LỚP 12A7 </a></td>
                                </tr>
                                <tr>
                                    <td><a href="">LỚP 10A8 </a></td>
                                    <td><a href="">LỚP 11A8 </a></td>
                                    <td><a href="">LỚP 12A8 </a></td>
                                </tr>
                                <tr>
                                    <td><a href="">LỚP 10A9 </a></td>
                                    <td><a href="">LỚP 11A9 </a></td>
                                    <td><a href="">LỚP 12A9 </a></td>
                                </tr>

                            </table>
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
            </div>


        </section>
   @stop