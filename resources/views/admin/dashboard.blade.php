@extends('admin.layouts.main')
@push('stylesheets')
    <!-- Example -->
    <!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush
@section('container')
    <!-- Page Content -->
    <div class="col-md-3 col-sm-6 col-xs-12">
        <!-- Info Boxes Style 2 -->
        <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="ion ion-earth"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Web Applications</span>
                <span class="info-box-number">100</span>
            </div>
            <!-- /.info-box-content -->
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-green">
            <span class="info-box-icon"><i class="ion ion-social-apple"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Mobile Applications</span>
                <span class="info-box-number">50</span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-red">
            <span class="info-box-icon"><i class="ion ion-social-android"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Robotics</span>
                <span class="info-box-number">20</span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="ion ion-podium"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Total</span>
                <span class="info-box-number">170</span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col-md-12">
        <!-- Recently Added thesis -->
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Recently Added Thesis</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <ul class="products-list product-list-in-box">
                    <li class="item">
                      <div class="product-img">
                        <img src="../img/50x50.png" alt="Product Image">
                      </div>
                      <div class="product-info">
                        <a href="javascript:void(0)" class="product-title">Samsung TV</a>
                            <span class="product-description">
                              Samsung 32" 1080p 60Hz LED Smart HDTV.
                            </span>
                      </div>
                    </li>
                    <!-- /.item -->
                    <li class="item">
                      <div class="product-img">
                        <img src="../img/50x50.png" alt="Product Image">
                      </div>
                      <div class="product-info">
                        <a href="javascript:void(0)" class="product-title">Bicycle</a>
                            <span class="product-description">
                              26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                            </span>
                      </div>
                    </li>
                    <!-- /.item -->
                    <li class="item">
                      <div class="product-img">
                        <img src="../img/50x50.png" alt="Product Image">
                      </div>
                      <div class="product-info">
                        <a href="javascript:void(0)" class="product-title">Xbox One </a>
                            <span class="product-description">
                              Xbox One Console Bundle with Halo Master Chief Collection.
                            </span>
                      </div>
                    </li>
                    <!-- /.item -->
                    <li class="item">
                      <div class="product-img">
                        <img src="../img/50x50.png" alt="Product Image">
                      </div>
                      <div class="product-info">
                        <a href="javascript:void(0)" class="product-title">PlayStation 4</a>
                            <span class="product-description">
                              PlayStation 4 500GB Console (PS4)
                            </span>
                      </div>
                    </li>
                    <!-- /.item -->
                </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
                <a href="javascript:void(0)" class="uppercase">View All Thesis</a>
            </div>
            <!-- /.box-footer -->
        </div>
    </div>
@endsection