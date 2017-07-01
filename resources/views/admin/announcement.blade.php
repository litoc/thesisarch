@extends('admin.layouts.main')
@push('stylesheets')
    <!-- Example -->
    <!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush
@section('container')
    <div class="col-md-12">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#post" data-toggle="tab" aria-expanded="true">Post</a></li>
              <li class=""><a href="#preview" data-toggle="tab" aria-expanded="false">Preview</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="post">
                </div>
                <!-- /.tab-pane -->
                
                <div class="tab-pane" id="preview">
                </div>
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>
        <!-- /.nav-tabs-custom -->
    </div>
@endsection