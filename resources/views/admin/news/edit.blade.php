@extends('layouts.admin')
@section('content')
@section('pagehead','Sửa tin tức')

<form method="POST" enctype="multipart/form-data">
    <div class="col-sm-8">
        <div class="form-group" >
            <label>Tiêu đề</label>
            <input value="{{$news->news_title}}" required type="text" name="title" class="form-control">
        </div>
        <div class="form-group" >
            <label>Ảnh bài viết</label>
            <input  type="file" name="image" class="form-control hidden" onchange="changeImg(this)">
            <img id="avatar" class="thumbnail" width="300px" src="{{asset('../storage/app/images/'.$news->news_image)}}" alt="Vui lòng chọn ảnh ">
        </div>
        <div class="form-group" >
            <label>Bài viết nổi bật</label><br>
            Có: <input type="radio" name="featured" value="1" @if($news->news_featured == 1) checked @endif >
            Không: <input type="radio" name="featured" value="0" @if($news->news_featured == 0) checked @endif>
        </div>
        <div class="form-group" >
            <label>Loại tin</label>
            <select required name="type" class="form-control">
                @foreach($types as $type)
                    <option value="{{$type->type_id}}" @if($news->news_type == $type->type_id )selected @endif> {{$type->type_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label >Miêu tả</label>
            <textarea class="form-control" rows="5"  name="short_des">{{$news->news_short_des}}</textarea>
        </div>
        <div class="form-group" >
            <label>Nội dung</label>
            <textarea id="editor1" class="ckeditor" required name="description"> {{$news->news_description}}</textarea>
            <script> CKEDITOR.replace( 'editor1', {
                    filebrowserBrowseUrl: '{{ asset('editor/ckfinder/ckfinder.html') }}',
                    filebrowserImageBrowseUrl: '{{ asset('editor/ckfinder/ckfinder.html?type=Images') }}',
                    filebrowserFlashBrowseUrl: '{{ asset('editor/ckfinder/ckfinder.html?type=Flash') }}',
                    filebrowserUploadUrl: '{{ asset('editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
                    filebrowserImageUploadUrl: '{{ asset('editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
                    filebrowserFlashUploadUrl: '{{ asset('editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
                } );
            </script>
        </div>
        <input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">


        @include('errors.note')


    </div>
    {{csrf_field()}}
</form>


@stop