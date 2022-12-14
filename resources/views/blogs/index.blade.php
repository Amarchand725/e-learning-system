@extends('layouts.admin.app')
@section('title', $page_title)
@section('content')
<input type="hidden" id="page_url" value="{{ route('blog.index') }}">
<section class="content-header">
    <div class="content-header-left">
        <h1>{{ $page_title }}</h1>
    </div>
    @can('blog-create')
    <div class="content-header-right">
        <a href="{{ route('blog.create') }}" data-toggle="tooltip" data-placement="left" title="Add New Blog" class="btn btn-primary btn-sm">Add New Blog</a>
    </div>
    @endcan
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            @if (session('success'))
                <div class="callout callout-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="box box-info">
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-1">Search:</div>
                        <div class="d-flex col-sm-11">
                            <input type="text" id="search" class="form-control" placeholder="Search" style="margin-bottom:5px">
                            <input type="hidden" id="status" value="All" class="form-control">
                        </div>
                    </div>
                    <table id="" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>ATTACHMENT</th>
                                <th>EXTENSION</th>
                                <th>TITLE</th>
                                <th>DESCRIPTION</th>
                                <th>STATUS</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="body">
                            @foreach($models as $key=>$model)
                            <tr id="id-{{ $model->id }}">
                                    <td>{{  $models->firstItem()+$key }}.</td>
                                    <td>
                                        @if($model->extension=='jpg' || $model->extension=='png' || $model->extension=='jpeg')
                                            <img style="border-radius: 50%;" src="{{ asset('public/admin/images/blogs') }}/{{ $model->attachment }}" width="50px" height="50px" alt="">
                                        @else
                                            <img style="border-radius: 50%;" src="{{ asset('public/default.png') }}" width="50  px" height="50px" alt="">
                                        @endif
                                    </td>
                                    <td>.{{ $model->extension }}</td>
                                    <td>{{ Str::limit($model->title, 20) }}</td>
                                    <td>{!! Str::limit($model->description, 50) !!}</td>
                                    <td>
                                        @if($model->status)
                                            <span class="label label-success">Active</span>
                                        @else
                                            <span class="label label-danger">In-Active</span>
                                        @endif
                                    </td>
                                    <td width="250px">
                                        <a href="{{ route("blog.show", $model->id) }}" data-toggle="tooltip" data-placement="top" title="Show Blog" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> Show</a>
                                        @can('blog-edit')
                                        <a href="{{ route("blog.edit", $model->id) }}" data-toggle="tooltip" data-placement="top" title="Edit Blog" class="btn btn-primary btn-xs" style="margin-left: 3px;"><i class="fa fa-edit"></i> Edit</a>
                                        @endcan
                                        @can('blog-delete')
                                        <button data-toggle="tooltip" data-placement="top" title="Delete Blog" class="btn btn-danger btn-xs delete" data-slug="{{ $model->id }}" data-del-url="{{ route("blog.destroy", $model->id) }}" style="margin-left: 3px;"><i class="fa fa-trash"></i> Delete</button>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="10">
                                    Displying {{$models->firstItem()}} to {{$models->lastItem()}} of {{$models->total()}} records
                                    <div class="d-flex justify-content-center">
                                        {!! $models->links('pagination::bootstrap-4') !!}
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</section>
@endsection
@push('js')
@endpush
