@extends('admin.layouts.main')
@push('stylesheets')
    <!-- Example -->
    <!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush
@section('container')
    <div class="col-md-12">
        <div class="box box-default">
            <div class="box-header with-border">
            	<div class="alert alert-success hide fade in" id="success-msg">
				    <a href="#" class="close" data-dismiss="alert">&times;</a>
				    <strong>Success!</strong> Your message has been sent successfully.
				</div>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="{{ route('save-announcement') }}">
            	<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="box-body">
					<div class="form-group">
						<label for="subject" class="col-sm-2 control-label">Subject</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="subject" id="title" placeholder="Enter subject">
						</div>
					</div>
					<div class="form-group">
						<label for="description" class="col-sm-2 control-label">Description</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="5" name="description" id="description" placeholder="Enter description"></textarea>
						</div>
					</div>
				</div>
				<!-- /.box-body -->
				<div class="box-footer">
					<button type="submit" class="btn btn-primary pull-right">
						<i class="fa fa-send"> </i> Save
					</button>
					<button type="reset" class="btn btn-default pull-right" style="margin-right: 5px;">
						Cancel
					</button>
				</div>
              <!-- /.box-footer -->
            </form>
      	</div>
    </div>
@endsection
