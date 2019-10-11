@extends('layouts.admin')
@section('content')
@section('pagehead','Danh sách tin tức')
<div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12">

        <div class="panel panel-primary">
            <div class="panel-body">
                <div class="bootstrap-table">
                    <div class="table-responsive">
                        <a href="{{asset('admin/news/add')}}" class="btn btn-primary">Thêm tin</a>
                        <table class="table table-bordered" style="margin-top:20px;">
                            <thead>
                            <tr class="bg-success">
                                <th>ID</th>
                                <th >Tiêu đề</th>
                                <th width="30%">Mô tả ngắn</th>
                                <th width="20%">Ảnh tiêu đề</th>
                                <th>Loại tin</th>
                                <th>Tùy chọn</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($news as $onews)
                                <tr>
                                    <td>{{$onews->news_id}}</td>
                                    <td>{{$onews->news_title}}</td>
                                    <td>{{$onews->news_short_des}}</td>
                                    <td>
                                        <img width="100px" src="{{asset('../storage/app/images/'.$onews->news_image)}}" class="thumbnail">
                                    </td>
                                    <td>{{$onews -> type ->category->cate_name}}</td>
                                    <td>
                                        <a href={{asset('admin/news/edit/'.$onews->news_id)}}"" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
                                        <a href="{{asset('admin/news/delete/'.$onews->news_id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div><!--/.row-->


@stop