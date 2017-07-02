@extends('admin.layouts.main')
@push('stylesheets')
    <!-- Example -->
    <!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush
@section('container')
    @if($errors->any())
        <h4>{{$errors->first()}}</h4>
    @endif
    <div class="col-md-12">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#list" data-toggle="tab" aria-expanded="true">List</a></li>
              <li class=""><a href="#bulk-upload" data-toggle="tab" aria-expanded="false">Bulk Upload</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="list">
                    <div class="box-header with-border pull-right">
                        <a href="{{ route('create-thesis') }}" class="btn btn-primary">
                            <i class="fa fa-plus"></i> Create
                        </a>
                    </div>
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Tags</th>
                                <th>Year</th>
                                <th>Action</th>
                            </tr>
                            @if (empty($lists))
                            <tr>
                                <td colspan="5" class="text-center text-danger"> No record(s) found. </td>
                            </tr>
                            @else
                                @foreach($lists as $list)
                                <tr>
                                    <td>{{ $list->id }}</td>
                                    <td>{{ title_case($list->title) }}</td>
                                    <td>{{ ucfirst($list->description) }}</td>
                                    <td>{{ $list->type }}</td>
                                    <td>{{ $list->tags }}</td>
                                    <td><span class="label label-success">{{ $list->published_at }}</span></td>
                                    <td>
                                        <a href="{{ route('update-thesis', ['id' => $list->id]) }}">
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

                <div class="tab-pane" id="bulk-upload">
                    <div class="container">
                        <!--<a href="{{ route('download-sample-file', 'xls') }}">
                            <button class="btn btn-default">Download Excel xls</button>
                        </a>
                        <a href="{{ route('download-sample-file', 'xlsx') }}">
                            <button class="btn btn-default">Download Excel xlsx</button>
                        </a> -->
                        <a href="{{ route('download-sample-file', 'csv') }}">
                            <button class="btn btn-default">Download CSV</button>
                        </a>

                        <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;"
                            action="{{ route('import-new-thesis') }}"
                            class="form-horizontal" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="file" name="import_file" />
                            <button class="btn btn-primary">Import File</button>
                        </form>
                    </div>
                </div>
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>
        <!-- /.nav-tabs-custom -->
    </div>
@endsection