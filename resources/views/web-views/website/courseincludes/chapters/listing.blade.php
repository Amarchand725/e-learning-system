@foreach ($coursechapters as $key=>$coursechapter)
    <tr id="id-{{ $coursechapter->id }}">
        <td>{{  $coursechapters->firstItem()+$key }}.</td>
        <td>{!! $coursechapter->name !!}</td>
        <td>
            <div class="switch">
                <input id="inc_status-{{ $coursechapter->id }}" class="cmn-toggle cmn-toggle-round-flat course-chapter-status-btn" data-chapter-id="{{ $coursechapter->id }}" data-update-action="{{ route('coursechapter.update', $coursechapter->id) }}" @if($coursechapter->status) value="1" checked @endif name="status" type="checkbox">
                <label for="inc_status-{{ $coursechapter->id }}"></label>
            </div>
        </td>
        <td width="250px">  
            <button data-toggle="tooltip" data-update-action="{{ route('coursechapter.update', $coursechapter->id) }}" data-course-id="{{ $coursechapter->course_id }}" data-course-coursechapters="{{ $coursechapter }}" data-placement="top" title="Edit Course coursechapter" class="btn btn-primary btn-xs edit-course-chapter-btn" style="margin-left: 3px;"><i class="fa fa-edit"></i></button>
            <button data-toggle="tooltip" data-placement="top" title="Delete Course coursechapter" class="btn btn-danger btn-xs delete-course-chapter" data-slug="{{ $coursechapter->id }}" data-del-url="{{ route("coursechapter.destroy", $coursechapter->id) }}" style="margin-left: 3px;"><i class="fa fa-trash"></i></button>
        </td>
    </tr>
@endforeach
<tr>
    <td colspan="15">
        Displying {{$coursechapters->firstItem()}} to {{$coursechapters->lastItem()}} of {{$coursechapters->total()}} records
        <div class="d-flex justify-content-center">
            {!! $coursechapters->links('pagination::bootstrap-4') !!}
        </div>
    </td>
</tr>

<script>
    $('.course-chapter-status-btn').on('change', function(){
        var status_update_url = $(this).attr('data-update-action');
        var tr_id = $(this).attr('data-chapter-id');
        var change_status = $(this).val();
        Swal.fire({
            title: 'Are you sure?',
            text: "You want to change status!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, change it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url : status_update_url,
                    type : 'PUT',
                    data : {change_status:change_status},
                    success : function(response){
                        if(response){
                            Swal.fire(
                                'Changed!',
                                'You have changed course chapter status.',
                                'success'
                            )
                        }else{
                            Swal.fire(
                                'Not Changed!',
                                'Sorry! Something went wrong.',
                                'danger'
                            )
                        }
                    }
                });
            }else{
                if(change_status==1){
                    $('#id-'+tr_id).find('#inc_status-'+tr_id).prop('checked',true);
                }else{
                    $('#id-'+tr_id).find('#inc_status-'+tr_id).prop('checked',false);
                }
            }
        })
    });

    $('.delete-course-chapter').on('click', function(){
        var slug = $(this).attr('data-slug');
        var delete_url = $(this).attr('data-del-url');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url : delete_url,
                    type : 'DELETE',
                    success : function(response){
                        if(response){
                            $('#id-'+slug).remove();
                            Swal.fire(
                                'Deleted!',
                                'You have deleted course chapter.',
                                'success'
                            )
                        }else{
                            Swal.fire(
                                'Not Deleted!',
                                'Sorry! Something went wrong.',
                                'danger'
                            )
                        }
                    }
                });
            }
        })
    });
</script>