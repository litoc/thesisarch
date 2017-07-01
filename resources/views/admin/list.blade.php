@extends('admin.layouts.main')
@push('stylesheets')
    <!-- Example -->
    <!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush
@section('container')
    <div class="col-md-12">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#list" data-toggle="tab" aria-expanded="true">List</a></li>
              <li class=""><a href="#bulk-upload" data-toggle="tab" aria-expanded="false">Bulk Upload</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="list">
                </div>
                <!-- /.tab-pane -->

                <div class="tab-pane" id="bulk-upload">
                </div>
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>
        <!-- /.nav-tabs-custom -->
    </div>
@endsection