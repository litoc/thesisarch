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
                    <div class="box-header with-border pull-right">
                        <a href="{{ route('create-announcement') }}" class="btn btn-primary">
                            <i class="fa fa-plus"></i> Create
                        </a>
                        <!--<div class="input-group input-group-sm pull-right" style="width: 250px;">
                            <input type="text" name="table_search" 
                                class="form-control pull-right" 
                                placeholder="Search"
                            />
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>-->
                    </div>
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Posted by</th>
                                <th>Action</th>
                            </tr>
                            @if (empty($announcements))
                            <tr>
                                <td colspan="5" class="text-center text-danger"> No announcement(s) found. </td>
                            </tr>
                            @else
                                @foreach($announcements as $announcement)
                                <tr>
                                    <td>{{ $announcement->id }}</td>
                                    <td>{{ $announcement->title }}</td>
                                    <td>{{ $announcement->description }}</td>
                                    <td>{{ $announcement->created_by }} at {{ $announcement->created_at }}</td>
                                    <td>
                                        <a href="{{ route('update-announcement', ['id' => $announcement->id]) }}">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
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