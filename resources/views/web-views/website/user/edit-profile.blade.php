@extends('web-views.layouts.app')

@push('css')
@endpush

@section('content')
    <section id="business-home" class="business-home-main-block">
        <div class="business-img">
            <img src="{{ asset('public/website/images/logo/wishlist-banner.jpg') }}" class="img-fluid" alt="">
        </div>
        <div class="overlay-bg"></div>
        <div class="container-xl">
            <div class="business-dtl">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="bredcrumb-dtl">
                            <h1 class="wishlist-home-heading">User Profile</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="profile-item" class="profile-item-block">
        <div class="container-xl">
            <form action="{{ route("userprofile.update", Auth::user()->id) }}" id="regform" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                @csrf
                {{ method_field('PATCH') }}

                <input type="hidden" name="user_profile" value="user-profile">
                <input type="hidden" name="role_id" value="{{ Auth::user()->roles[0]->name }}">
                <input type="hidden" name="status" value="{{ Auth::user()->status }}">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-4">
                        <div class="dashboard-author-block text-center">
                            <div class="author-image">
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input type="file" id="imageUpload" name="profile_image" accept=".png, .jpg, .jpeg">
                                        <label for="imageUpload"><i class="fa fa-pencil"></i></label>
                                    </div>
                                    <div class="avatar-preview">
                                        @if(Auth::user()->hasUserProfile->profile_image)
                                            <div class="avatar-preview-img" id="imagePreview" style="background-image: url( {{ asset('public/admin/images/profiles') }}/{{ Auth::user()->hasUserProfile->profile_image }});"></div>
                                        @else
                                            <div class="avatar-preview-img" id="imagePreview" style="background-image: url({{ asset('public/default.png') }});"></div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="author-name">{{ Auth::user()->roles[0]->name }}</div>
                        </div>
                        <div class="dashboard-items">
                            <ul>
                                <li>
                                    <i class="fa fa-bookmark"></i>
                                    <a href="{{ route('user.my_courses') }}" title="My Courses">My Courses</a>
                                </li>
                                <li>
                                    <i class="fa fa-heart"></i>
                                    <a href="{{ route('user.wishlist') }}" title="My wishlist">My Wishlist</a>
                                </li>
                                <li>
                                    <i class="fa fa-history"></i>
                                    <a href="{{ route('user.purchase_history') }}" title="Purchase History">Purchase History</a>
                                </li>
                                <li>
                                    <i class="fa fa-user"></i>
                                    <a href="{{ route('user.profile.edit') }}" title="User Profile">User Profile</a>
                                </li>
                                @if(Auth::user()->roles[0]=='Student')
                                    <li>
                                        <i class="fas fa-chalkboard-teacher"></i>
                                        <a href="#" data-toggle="modal" data-target="#myModalinstructor" title="Become An Instructor">Become An Instructor</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 col-md-8">
                        <div class="profile-info-block">
                            <div class="profile-heading">Personal Info</div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="name">First Name</label>
                                        <input type="text" id="name" name="first_name" class="form-control" placeholder="Enter First Name" value="{{ Auth::user()->hasUserProfile->first_name }}" required="">
                                        <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" name="email" readonly class="form-control" placeholder="info@example.com" required="" value="{{ Auth::user()->email }}">
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="Username">Last Name</label>
                                        <input type="text" id="lname" name="last_name" class="form-control" placeholder="Enter Last Name" value="{{ Auth::user()->hasUserProfile->last_name }}" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="mobile">Mobile</label>
                                        <input type="text" name="mobile" id="mobile" value="{{ Auth::user()->hasUserProfile->mobile }}" class="form-control numberonly" placeholder="Enter Mobile No">
                                        <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="bio">address</label>
                                <textarea id="address" name="address" class="form-control" placeholder="Enter your Address">{{ Auth::user()->hasUserProfile->address }}</textarea>
                                <span class="text-danger">{{ $errors->first('address') }}</span>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="country_id">Country:</label>
                                        <select name="country_id" id="country_id" class="form-control select2">
                                            <option value="" selected>Select Country</option>
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->id }}" {{ Auth::user()->hasUserProfile->country_id==$country->id?'selected':'' }}>{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger">{{ $errors->first('country_id') }}</span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="state_id">State:</label>
                                        <select name="state_id" id="state_id" class="form-control">
                                            <option value="" selected>Select State</option>
                                            @foreach ($states as $state)
                                                <option value="{{ $state->id }}" {{ Auth::user()->hasUserProfile->state_id==$state->id?'selected':'' }}>{{ $state->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger">{{ $errors->first('state_id') }}</span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="city_id">City:</label>
                                        <select name="city_id" id="city_id" class="form-control">
                                            <option value="" selected>Select City</option>
                                            @foreach ($cities as $city)
                                                <option value="{{ $city->id }}" {{ Auth::user()->hasUserProfile->city_id==$city->id?'selected':'' }}>{{ $city->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger">{{ $errors->first('city_id') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="details">Author Bio</label>
                                <textarea id="details" name="details" class="form-control ckeditor" placeholder="Enter your details" aria-hidden="true">{{ Auth::user()->hasUserProfile->details }}</textarea>
                                <span class="text-danger">{{ $errors->first('details') }}</span>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-lg-12">
                                <div class="update-password">
                                    <label for="box1">Update Password:</label>
                                    <input type="checkbox" name="update_pass" id="myCheck" onclick="myFunction()">
                                </div>
                                </div>
                            </div>
                            <div class="password display-none" id="update-password">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="confirmpassword">Password:</label>
                                            <input name="password" class="form-control" id="password" type="password" placeholder="Enter Password" onkeyup="check();">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Confirm Password:</label>
                                            <input type="password" name="confirmed" id="confirmed" class="form-control" placeholder="Confirm Password" onkeyup="check();">
                                            <span id="message" style="color: rgb(255, 0, 0);">Password Do Not Match</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                        <div class="social-profile-block">
                            <div class="social-profile-heading">Social Profile</div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="social-block">
                                        <div class="form-group">
                                            <label for="facebook">Facebook Url</label><br>
                                            <div class="row">
                                                <div class="col-lg-2 col-2">
                                                    <div class="profile-update-icon">
                                                        <div class="product-update-social-icons">
                                                            <a href="{{ Auth::user()->hasUserProfile->facebook_url }}" target="_blank" title="facebook"><i class="fa fa-facebook facebook"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-10 col-10">
                                                    <input type="text" name="facebook_url" value="{{ Auth::user()->hasUserProfile->facebook_url }}" id="facebook" class="form-control" placeholder="Facebook.com">
                                                    <span class="text-danger">{{ $errors->first('facebook_url') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="social-block">
                                        <div class="form-group">
                                            <label for="behance2">Youtube Url</label><br>
                                            <div class="row">
                                                <div class="col-lg-2 col-2">
                                                    <div class="profile-update-icon">
                                                        <div class="product-update-social-icons">
                                                            <a href="{{ Auth::user()->hasUserProfile->youtube_url }}" target="_blank" title="googleplus"><i class="fab fa-youtube youtube"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-10 col-10">
                                                    <input type="text" name="youtube_url" value="{{ Auth::user()->hasUserProfile->youtube_url }}" id="behance2" class="form-control" placeholder="youtube.com">
                                                    <span class="text-danger">{{ $errors->first('youtube_url') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="social-block">
                                        <div class="form-group">
                                            <label for="twitter">Twitter Url</label><br>
                                            <div class="row">
                                                <div class="col-lg-2 col-2">
                                                    <div class="profile-update-icon">
                                                        <div class="product-update-social-icons">
                                                            <a href="{{ Auth::user()->hasUserProfile->twitter_url }}" target="_blank" title="twitter"><i class="fab fa-twitter twitter"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-10 col-10">
                                                    <input type="text" name="twitter_url" value="{{ Auth::user()->hasUserProfile->twitter_url }}" id="twitter" class="form-control" placeholder="Twitter.com">
                                                    <span class="text-danger">{{ $errors->first('twitter_url') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="social-block">
                                        <div class="form-group">
                                            <label for="dribbble2">Linked In Url</label><br>
                                            <div class="row">
                                                <div class="col-lg-2 col-2">
                                                    <div class="profile-update-icon">
                                                        <div class="product-update-social-icons">
                                                            <a href="{{ Auth::user()->hasUserProfile->linked_in_url }}" target="_blank" title="linkedin"><i class="fab fa-linkedin-in linkedin"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-10 col-10">
                                                    <input type="text" name="linked_in_url" value="{{ Auth::user()->hasUserProfile->linked_in_url }}" id="dribbble2" class="form-control" placeholder="Linkedin.com/">
                                                    <span class="text-danger">{{ $errors->first('linked_in_url') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="upload-items text-right">
                            <button type="submit" class="btn btn-primary" title="upload items">Update Profile</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
@push('js')
<script>
    function myFunction() {
      var checkBox = document.getElementById("myCheck");
      var text = document.getElementById("update-password");
      if (checkBox.checked == true){
        text.style.display = "block";
      } else {
         text.style.display = "none";
      }
    }
  </script>
  <script>
	$(document).on('change', '#country_id', function(){
		var country_id = $(this).val();
		$.ajax({
			url : "{{ route('get_states') }}",
			data : {'country_id' : country_id},
			type : 'GET',
			success : function(response){
				var html = '';
				html += '<option value="" selected>Select state</option>';
				jQuery.each(response.states, function(index, state) {
					html += '<option value="'+state.id+'">'+state.name+'</option>';
				});

				$('#state_id').html(html);
			}
		});
	});

	$(document).on('change', '#state_id', function(){
		var state_id = $(this).val();
		$.ajax({
			url : "{{ route('get_cities') }}",
			data : {'state_id' : state_id},
			type : 'GET',
			success : function(response){
				var html = '';
				html += '<option value="" selected>Select city</option>';
				jQuery.each(response.states, function(index, state) {
					html += '<option value="'+state.id+'">'+state.name+'</option>';
				});

				$('#city_id').html(html);
			}
		});
	});
</script>
@endpush
