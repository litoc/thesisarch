@extends('admin.layouts.main')
@push('stylesheets')
    <!-- Example -->
    <!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush
@section('container')
    <div class="col-md-12">
        <div class="box box-default">
            <div class="box-header with-border"></div>
            <!-- /.box-header -->
            <!-- form start -->

			@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
    						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif

           <form class="form-horizontal"
					action="{{ url('/admin/thesis/updatesave', $thesis->id) }}"
					class="form-horizontal" method="post"
					enctype="multipart/form-data">
                {{ csrf_field() }}
				<div class="box-body">
					<div class="form-group">
						<label for="title" class="col-sm-2 control-label">Title</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="title" id="title" placeholder="Enter title" required value="{{ $thesis->title }}" />
						</div>
					</div>
					<div class="form-group">
						<label for="description" class="col-sm-2 control-label">Description</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="5" name="description" id="description" placeholder="Enter description" required>{{ $thesis->description }}</textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="published_at" class="col-sm-2 control-label">Published Year</label>
						<div class="col-sm-10">
							<select class="form-control" name="published_at" id="published_at">
								@foreach (range('2007', date('Y')) as $year)
									<option value="{{ $year }}" {{ $year == date('Y') ? 'selected' : '' }}>
										{{ $year }}
									</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="category" class="col-sm-2 control-label">Category</label>
						<div class="col-sm-10">
							<select class="form-control" name="category" id="category">
								<option value=""> Select category </option>
								@foreach ($categories as $key => $category)
									<option value="{{ $key }}">
										{{ $category }}
									</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="tags" class="col-sm-2 control-label">Tags</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="tags" id="tags"
								placeholder="php, android, objective-c, mysql, jquery, ..." value="{{ $thesis->tags }}"
							/>
						</div>
					</div>

					<div class="form-group">
						<label for="upload_pic" class="col-sm-2 control-label">Picture</label>
						<div class="col-sm-10">
							<input type="file" name="upload_pic" />
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
            <!--<form class="form-horizontal">
				<div class="box-body">
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
					</div>
					<div class="form-group">
						<label for="description">Description</label>
						<input type="text" class="form-control" name="description" id="description" placeholder="Enter description">
					</div>
					<div class="form-group">
						<label for="published_at">Published Year</label>
						<select class="form-control" name="published_at" id="published_at">
							<option>option 1</option>
							<option>option 2</option>
							<option>option 3</option>
							<option>option 4</option>
							<option>option 5</option>
						</select>
					</div>
				</div>
				<!-- /.box-body -->

				<!--<div class="box-footer">
					<button type="submit" class="btn btn-primary pull-right">
						<i class="fa fa-send"> </i> Save
					</button>
					<button type="reset" class="btn btn-default pull-right" style="margin-right: 5px;">
						Cancel
					</button>
				</div>
            </form>-->
      	</div>
    </div>
@endsection