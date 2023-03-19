@extends('backend.admin.layouts.master') 
@section('content') 
 <!-- Main content -->
 <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
     src="{{ Auth::guard('admin')->user()->image ? url('/') . '/' . Auth::guard('admin')->user()->image : asset('backend/default_profile_image.jpg') }}"
     alt="User profile picture">

              </div>

              <h3 class="profile-username text-center">{{ Auth::guard('admin')->user()->name }}</h3>
 

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- About Me Box -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Profile Picture</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form id="imageUploadForm" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="file" name="image" class="form-control">
                    <button type="submit" id="submitBtn" class="form-control btn btn-primary mt-4">Upload Image</button>
                  </form>
              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card">
            <div class="card-header p-2">
              <h4 class="text-center">Update Profile</h4>
            </div><!-- /.card-header -->
            <div class="card-body">
                <form class="form-horizontal" id="myForm" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group row">
                      <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                      <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" readonly value="{{ Auth::guard('admin')->user()->name }}" id="inputName" placeholder="Arjun">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" name="email" readonly value="{{ Auth::guard('admin')->user()->email }}" class="form-control" id="inputEmail" placeholder="arjun@example.com">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputName2" class="col-sm-2 col-form-label">Contact Number</label>
                      <div class="col-sm-10">
                        <input type="text" name="calling_number" class="form-control" value="{{$profile->calling_number}}" id="inputName2" placeholder="9876543210">
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Whatsapp Number</label>
                        <div class="col-sm-10">
                          <input type="text" name="whatsapp_number" class="form-control" id="inputName2" value="{{$profile->whatsapp_number}}"placeholder="9876543210">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="address" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <textarea name="address" id="" cols="99" rows="10">{{$profile->address}}</textarea>                          
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">State</label>
                        <div class="col-sm-10">
                        <select name="state" id="" class="form-control">
                            <option value="andhra_pradesh" {{ $profile->state == 'andhra_pradesh' ? 'selected' : '' }}>Andhra Pradesh</option>
                            <option value="arunachal_pradesh" {{ $profile->state == 'arunachal_pradesh' ? 'selected' : '' }}>Arunachal Pradesh</option>
                            <option value="assam" {{ $profile->state == 'assam' ? 'selected' : '' }}>Assam</option>
                            <option value="bihar" {{ $profile->state == 'bihar' ? 'selected' : '' }}>Bihar</option>
                            <option value="chhattisgarh" {{ $profile->state == 'chhattisgarh' ? 'selected' : '' }}>Chhattisgarh</option>
                            <option value="goa" {{ $profile->state == 'goa' ? 'selected' : '' }}>Goa</option>
                            <option value="gujarat" {{ $profile->state == 'gujarat' ? 'selected' : '' }}>Gujarat</option>
                            <option value="haryana" {{ $profile->state == 'haryana' ? 'selected' : '' }}>Haryana</option>
                            <option value="himachal_pradesh" {{ $profile->state == 'himachal_pradesh' ? 'selected' : '' }}>Himachal Pradesh</option>
                            <option value="jammu_kashmir" {{ $profile->state == 'jammu_kashmir' ? 'selected' : '' }}>Jammu and Kashmir</option>
                            <option value="jharkhand" {{ $profile->state == 'jharkhand' ? 'selected' : '' }}>Jharkhand</option>
                            <option value="karnataka" {{ $profile->state == 'karnataka' ? 'selected' : '' }}>Karnataka</option>
                            <option value="kerala" {{ $profile->state == 'kerala' ? 'selected' : '' }}>Kerala</option>
                            <option value="madhya_pradesh" {{ $profile->state == 'madhya_pradesh' ? 'selected' : '' }}>Madhya Pradesh</option>
                            <option value="maharashtra" {{ $profile->state == 'maharashtra' ? 'selected' : '' }}>Maharashtra</option>
                            <option value="manipur" {{ $profile->state == 'manipur' ? 'selected' : '' }}>Manipur</option>
                            <option value="meghalaya" {{ $profile->state == 'meghalaya' ? 'selected' : '' }}>Meghalaya</option>
                            <option value="mizoram" {{ $profile->state == 'mizoram' ? 'selected' : '' }}>Mizoram</option>
                            <option value="nagaland" {{ $profile->state == 'nagaland' ? 'selected' : '' }}>Nagaland</option>
                            <option value="odisha" {{ $profile->state == 'odisha' ? 'selected' : '' }}>Odisha</option>
                            <option value="punjab" {{ $profile->state == 'punjab' ? 'selected' : '' }}>Punjab</option>                           
                            <option value="rajasthan" {{ $profile->state == 'rajasthan' ? 'selected' : '' }}>Rajasthan</option>
                            <option value="sikkim" {{ $profile->state == 'sikkim' ? 'selected' : '' }}>Sikkim</option>
                            <option value="tamil_nadu" {{ $profile->state == 'tamil_nadu' ? 'selected' : '' }}>Tamil Nadu</option>
                            <option value="telangana" {{ $profile->state == 'telangana' ? 'selected' : '' }}>Telangana</option>
                            <option value="tripura" {{ $profile->state == 'tripura' ? 'selected' : '' }}>Tripura</option>
                            <option value="uttar_pradesh" {{ $profile->state == 'uttar_pradesh' ? 'selected' : '' }}>Uttar Pradesh</option>
                            <option value="uttarakhand" {{ $profile->state == 'uttarakhand' ? 'selected' : '' }}>Uttarakhand</option>
                            <option value="west_bengal" {{ $profile->state == 'west_bengal' ? 'selected' : '' }}>West Bengal</option>
                            <option value="andaman_nicobar" {{ $profile->state == 'andaman_nicobar' ? 'selected' : '' }}>Andaman and Nicobar Islands</option>
                            <option value="chandigarh" {{ $profile->state == 'chandigarh' ? 'selected' : '' }}>Chandigarh</option>
                            <option value="dadra_nagar_haveli" {{ $profile->state == 'dadra_nagar_haveli' ? 'selected' : '' }}>Dadra and Nagar Haveli and Daman and Diu</option>
                            <option value="delhi" {{ $profile->state == 'delhi' ? 'selected' : '' }}>Delhi</option>
                            <option value="lakshadweep" {{ $profile->state == 'lakshadweep' ? 'selected' : '' }}>Lakshadweep</option>
                            <option value="puducherry" {{ $profile->state == 'puducherry' ? 'selected' : '' }}>Puducherry</option>
                            <!-- add more options here... -->
                            </select>
                               
                        </div>
                      </div>
                      
    
                      <div class="form-group row">
                        <label for="city" class="col-sm-2 col-form-label">City</label>
                        <div class="col-sm-10">
                          <input type="text" name="city" class="form-control" id="city" value="{{$profile->city}}" placeholder="Enter City Name">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="pin_code" class="col-sm-2 col-form-label">Pin Code</label>
                        <div class="col-sm-10">
                          <input type="number" name="pin_code" value="{{$profile->pin_code}}" class="form-control" id="pin_code" placeholder="110001">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="facebook" class="col-sm-2 col-form-label">Facebook</label>
                        <div class="col-sm-10">
                          <input type="text" name="facebook" class="form-control" value="{{$profile->facebook}}" id="facebook" placeholder="https://www.facebook.com/">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="twitter" class="col-sm-2 col-form-label">Twitter</label>
                        <div class="col-sm-10">
                          <input type="text" name="twitter" class="form-control" value="{{$profile->twitter}}" id="twitter" placeholder="https://twitter.com/home">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="youtube" class="col-sm-2 col-form-label">YouTube</label>
                        <div class="col-sm-10">
                          <input type="text" name="youtube" class="form-control" value="{{$profile->youtube}}" id="youtube" placeholder="https://www.youtube.com/">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="linkedin" class="col-sm-2 col-form-label">Linkedin</label>
                        <div class="col-sm-10">
                          <input type="text" name="linkedin" class="form-control" value="{{$profile->linkedin}}" id="linkedin" placeholder="https://www.linkedin.com/">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="instagram" class="col-sm-2 col-form-label">Instagram</label>
                        <div class="col-sm-10">
                          <input type="text" name="instagram" class="form-control" value="{{$profile->instagram}}" id="instagram" placeholder="https://www.instagram.com/">
                        </div>
                      </div>

                      
                     
                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-danger">Submit</button>
                      </div>
                    </div>
                  </form>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

@endsection
@section('javascript')
<script>
$(document).ready(function() {
    $('#myForm').submit(function(event) {
        event.preventDefault();
            $.ajax({
                url: '{{ route('admin.profile.store')}}',
                type: 'post',
                dataType: 'json',
                data: $('form').serialize(),
                success: function (response) {
                    toastr.success(response.msg);
                },
                error: function (xhr, status, error) {
                    var response = JSON.parse(xhr.responseText);
                    if (response.errors) {
                        toastr.error(Object.values(response.errors).join('<br>'));
                    } else {
                        toastr.error(response.msg);
                    }
                }
            });
    });

    $('#imageUploadForm').submit(function(event) {
      event.preventDefault(); // prevent default form submission
      var formData = new FormData($(this)[0]); // create a new FormData object with form data
      $.ajax({
        url: "{{ route('admin.profile.image') }}", // Laravel route to handle image upload
        type: 'POST',
        data: formData,
        async: false,
        cache: false,
        contentType: false,
        processData: false,
        success: function (response) {
                    toastr.success(response.msg);
                    setTimeout(function(){
                        location.reload();
                    }, 3000);
                },
                error: function (xhr, status, error) {
                    var response = JSON.parse(xhr.responseText);
                    if (response.errors) {
                        toastr.error(Object.values(response.errors).join('<br>'));
                    } else {
                        toastr.error(response.msg);
                    }
                }
      });
    });
});
 
    </script>
@endsection