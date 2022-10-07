@extends('layouts.admin.app')
@section('title', 'Add New Follower')
@push('css')
    <style>
        select {
            font-family: 'Font Awesome', 'sans-serif';
        }
    </style>
@endpush
@section('content')
<section class="content-header">
	<div class="content-header-left">
		<h1>Add New Follower</h1>
	</div>
	<div class="content-header-right">
		<a href="{{ route("follower.index") }}" data-toggle="tooltip" data-placement="left" title="{{ $view_all_title }}" class="btn btn-primary btn-sm">{{ $view_all_title }}</a>
	</div>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<form action="{{ route("follower.store") }}" id="regform" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
				@csrf
				<div class="box box-info">
					<div class="box-body">
                        <div class="form-group">
<label for="user_id" class="col-sm-2 control-label">User_id <span style="color:red">*</span></label>
<div class="col-sm-8"><input type="number" class="form-control" name="user_id" value="{{ old("user_id") }}" placeholder="Enter user_id">
<span style="color: red">{{ $errors->first("user_id") }}</span></div></div><div class="form-group">
<label for="follower_id" class="col-sm-2 control-label">Follower_id</label>
<div class="col-sm-8"><input type="number" class="form-control" name="follower_id" value="{{ old("follower_id") }}" placeholder="Enter follower_id">
<span style="color: red">{{ $errors->first("follower_id") }}</span></div></div><div class="form-group">
<label for="following_id" class="col-sm-2 control-label">Following_id</label>
<div class="col-sm-8"><input type="number" class="form-control" name="following_id" value="{{ old("following_id") }}" placeholder="Enter following_id">
<span style="color: red">{{ $errors->first("following_id") }}</span></div></div><div class="form-group">
<label for="status" class="col-sm-2 control-label">Status <span style="color:red">*</span></label>
<div class="col-sm-8"><select class="form-control" name="status"><option value="1" {{ old("status")==1?"selected":"" }}>Active</option><option value="0" {{ old("status")==0?"selected":"" }}>In Active</option></select><span style="color: red">{{ $errors->first("status") }}</span></div></div><div class="form-group"><label for="status" class="col-sm-2 control-label"></label><div class="col-sm-8"><button type="submit" class="btn btn-success pull-left">Save</button></div></div>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>

@endsection
@push('js')
@endpush
