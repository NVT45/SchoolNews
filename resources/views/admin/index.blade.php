@extends('layouts.admin')
@section('content')
@section('pagehead','Trang chủ')
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Danh mục bài viết</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{count($categories)}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Số lượng bài viết</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{count($news)}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="far fa-newspaper fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Số Album ảnh</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{count($albums)}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-images fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Số lượng ảnh</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{count($photos)}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-image fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="donutchart" style="width: 900px; height: 500px;"></div>
@section('scripts')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Categories',{{count($categories)}}],
                ['Albums', {{count($albums)}}],
                ['Photos', {{count($photos)}}],
                ['News',{{count($news)}}],

            ]);

            var options = {
                title: 'Donut Chart',
                pieHole: 0.4,
            };

            var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
            chart.draw(data, options);
        }
    </script>
    @endsection
@stop
