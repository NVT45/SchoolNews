@extends('frontend.master')
@section('title','Liên hệ')
@section('main')
        <section class="contact-section">
            <div class="row">
                    <div class="col span-1-of-2">

                            <strong>Gửi liên hệ:</strong>
                            <form method="post">
        
                                @csrf
                                <label for="fname">Tên của bạn (Bắt buộc)</label>
                                <input type="text" id="fname" name="name" placeholder="Your name..">
        
                                <label for="lname">Địa chỉ email (Bắt buộc)</label>
                                <input type="text" id="email" name="email" placeholder="Your email..">
        
        
                                <label for="lname">Tiêu đề</label>
                                <input type="text" id="subject" name="subject" placeholder="subject..">
        
                                <label for="subject">Nội dung</label>
                                <textarea id="des" name="description" placeholder="Write something.."
                                    style="height:200px"></textarea>

                                <input type="submit" value="Submit">
                            </form>
                        </div>
                <div class="col span-1-of-2 ">
                    <strong>Thông Tin Liên Hệ:</strong>
                    <ul class="contact-information">
                        <li><i class="fas fa-map-marker-alt small-icon"></i> Địa chỉ: Số 8 Phố Hai Bà Trưng - Hoàn Kiếm - Hà
                            Nội
                        </li>
                        <li><i class="fas fa-envelope small-icon"></i> http://Email: c3tranphu@hanoi.edu.vn  </li>
                        <li><i class="fas fa-phone small-icon"></i> Điện thoại: (+84.4) 3825 2544 - 39368395</li>
                    </ul>
                </div>
               
            </div>

        </section>
@stop