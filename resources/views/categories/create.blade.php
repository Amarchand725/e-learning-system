@extends('layouts.admin.app')
@section('title', 'Add New Category')
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
		<h1>Add New Category</h1>
	</div>
	<div class="content-header-right">
		<a href="{{ route("category.index") }}" data-toggle="tooltip" data-placement="left" title="{{ $view_all_title }}" class="btn btn-primary btn-sm">{{ $view_all_title }}</a>
	</div>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<form action="{{ route("category.store") }}" id="regform" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
				@csrf
				<div class="box box-info">
					<div class="box-body">
                        <div class="form-group">
                            <label for="parent_id" class="col-sm-2 control-label">Parent</label>
                            <div class="col-sm-8">
                                <select name="parent_id" id="parent_id" class="form-control">
                                    <option value="" selected>Select parent</option>
                                    @foreach (categories() as $category)
                                        <option value="{{ $category->id }}" {{ old('parent_id')==$category->id?"selected":'' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <span style="color: red">{{ $errors->first("parent_id") }}</span>
                            </div>
                        </div>
                        <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name <span style="color:red">*</span></label>
                        <div class="col-sm-8"><input type="text" class="form-control" name="name" value="{{ old("name") }}" placeholder="Enter name">
                        <span style="color: red">{{ $errors->first("name") }}</span></div></div>

                        <div class="form-group">
							<label for="" class="col-sm-2 control-label">Icon <span style="color:red">*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="icon" value="{{ old('icon') }}" placeholder="Copy font awesome tag from library and paste here e.g <i class='fa fa-user' aria-hidden='true'></i>" required>
                                <a href="https://fontawesome.com/v4/icons/" style="margin-top: 5px" target="_blank" class="btn btn-success">Choose Icon</a><br />
                                <span style="color: red">{{ $errors->first('icon') }}</span>
							</div>
						</div>

                        <div class="form-group">
                            <label for="description" class="col-sm-2 control-label">Description</label>
                            <div class="col-sm-8">
                                <textarea name="description" id="description" class="form-control" placeholder="Enter description"></textarea>
                                <span style="color: red">{{ $errors->first("description") }}</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="status" class="col-sm-2 control-label">Status </label>
                            <div class="col-sm-8">
                                <select class="form-control" name="status">
                                    <option value="1" {{ old("status")==1?"selected":"" }}>Active</option>
                                    <option value="0" {{ old("status")==0?"selected":"" }}>In Active</option>
                                </select>
                                <span style="color: red">{{ $errors->first("status") }}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="status" class="col-sm-2 control-label">Featured </label>
                            <div class="col-sm-8">
                                <select class="form-control" name="is_featured">
                                    <option value="1" {{ old("is_featured")==1?"selected":"" }}>Active</option>
                                    <option value="0" {{ old("is_featured")==0?"selected":"" }}>In Active</option>
                                </select>
                                <span style="color: red">{{ $errors->first("is_featured") }}</span>
                            </div>
                        </div>

                        <div class="form-group">
							<label for="status" class="col-sm-2 control-label"></label>
							<div class="col-sm-8"><button type="submit" class="btn btn-success pull-left">Save</button></div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>

@endsection
@push('js')
@endpush
