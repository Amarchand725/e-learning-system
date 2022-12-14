@extends('layouts.admin.app')
@section('title', $page_title)
@section('content')
<input type="hidden" id="page_url" value="{{ route('country.index') }}">
<section class="content-header">
    <div class="content-header-left">
        <h1>{{ $page_title }}</h1>
    </div>
    <div class="content-header-right">
        <a href="{{ route('country.create') }}" data-toggle="tooltip" data-placement="left" title="Add New Country" class="btn btn-primary btn-sm">Add New Country</a>
    </div>
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
                                <th>NAME</th>
                                <th>PHONE CODE</th>
                                <th>CURRENCY</th>
                                <th>CURRENCY_SYMBOL</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="body">
                            @foreach($models as $key=>$model)
                                <tr id="id-{{ $model->id }}">
                                    <td>{{  $models->firstItem()+$key }}.</td>
                                    <td>{{ $model->name }}</td>
                                    <td>{{ $model->phonecode }}</td>
                                    <td>{{ $model->currency }}</td>
                                    <td>{{ $model->currency_symbol }}</td>
                                    <td width="250px">
                                        <a href="{{ route("country.show", $model->id) }}" data-toggle="tooltip" data-placement="top" title="Show Country" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> Show</a>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="11">
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
