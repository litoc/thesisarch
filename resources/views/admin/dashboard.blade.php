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
                <span class="info-box-number">{{ $countWebApp }}</span>
            </div>
            <!-- /.info-box-content -->
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-green">
            <span class="info-box-icon"><i class="ion ion-social-apple"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Mobile Applications</span>
                <span class="info-box-number">{{ $countMobileApp }}</span>
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
                <span class="info-box-number">{{ $countRobotics }}</span>
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
                <span class="info-box-number">{{ $totalCount }}</span>
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
                    @if(!empty($recentlyAdded))
                        @foreach($recentlyAdded as $key => $item)
                        <li class="item">
                          <div class="product-img">
                            <img src="../img/50x50.png" alt="Product Image">
                          </div>
                          <div class="product-info">
                            <a href="javascript:void(0)" class="product-title">{{ $item->title }}</a>
                                <span class="product-description">
                                  {{ $item->description }}
                                </span>
                          </div>
                        </li>
                        @endforeach
                    @endif
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