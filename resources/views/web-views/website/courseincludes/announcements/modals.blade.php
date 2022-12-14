<!-- Add Course announcement Modal -->
<div class="modal fade" id="add-course-announcement-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background: #337ab7; color:white">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Course Include</h5>
                <button type="button" style="margin-top: -20px; color:white" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <form id="add-course-announcement-form" data-course-form="{{ route('courseannouncement.store') }}" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                        @csrf
                        <input type="hidden" name="course_id" id="course-id" value="{{ $model->id }}">
                        <div class="box box-info">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="announcement" class="col-sm-3 control-label">Announcement <span style="color:red">*</span></label>
                                    <div class="col-sm-8">
                                        <textarea id="announcement" class="form-control" name="announcement" placeholder="Enter announcement">{{ old('announcement') }}</textarea>
                                        <span style="color: red" id="error-announcement">{{ $errors->first("announcement") }}</span>
                                    </div>
                                </div>
        
                                <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">Status</label>
                                    <div class="col-sm-8">
                                        <div class="switch">
                                            <input id="c_announcement_status" class="cmn-toggle cmn-toggle-round-flat" value="1" @if(old('status')) checked @endif name="status" type="checkbox">
                                            <label for="c_announcement_status"></label>
                                        </div>
                                        <span style="color: red">{{ $errors->first("status") }}</span>
                                    </div>
                                </div>
        
                                <div class="form-group">
                                    <label for="status" class="col-sm-3 control-label"></label>
                                    <div class="col-sm-8">
                                        <button type="submit" class="btn btn-success pull-left">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

 <!-- Edit Course announcement Modal -->
 <div class="modal fade" id="edit-course-announcement-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background: #337ab7; color:white">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Course announcement</h5>
                <button type="button" style="margin-top: -20px; color:white" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <form id="update-course-announcement-form" class="form-horizontal" enctype="multipart/form-data" method="put" accept-charset="utf-8">
                        @csrf

                        {{ method_field('PATCH') }}
                        <input type="hidden" name="course_id" id="course-id" value="{{ $model->id }}">
                        <div class="box box-info">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="announcement" class="col-sm-3 control-label">announcement <span style="color:red">*</span></label>
                                    <div class="col-sm-8">
                                        <textarea id="announcement" class="form-control" name="announcement" placeholder="Enter announcement">{{ $model->announcement }}</textarea>
                                        <span style="color: red" id="error-announcement">{{ $errors->first("announcement") }}</span>
                                    </div>
                                </div>
        
                                <div class="form-group">
                                    <label for="status" class="col-sm-3 control-label"></label>
                                    <div class="col-sm-8">
                                        <button type="submit" class="btn btn-success pull-left">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>