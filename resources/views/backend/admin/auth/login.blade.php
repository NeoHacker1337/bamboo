
<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../">
		<meta charset="utf-8" />
		<title>Admin Login</title>
		<meta name="description" content="#" />
		<meta name="keywords" content="#" />
		<link rel="canonical" href="#" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="{{ asset('backend/media/logos/favicon.ico') }}" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{ asset('backend/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('backend/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
        <style>
			.h-45px {
    height: 130px!important;
}
</style>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="bg-white">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url({{ asset('backend/media/illustrations/progress-hd.png') }})">
				<!--begin::Content-->
				<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
					<!--begin::Logo-->
					<a href="{{ url('/') }}" class="mb-12">
						<img alt="Logo" src="{{ asset('frontend/logo.png') }}" class="h-45px" />
					</a>
					<!--end::Logo-->
					<!--begin::Wrapper-->
					<div class="w-lg-500px bg-white rounded shadow-sm p-10 p-lg-15 mx-auto">
						<!--begin::Form-->
						<form class="login-submit" method="POST" action="{{ route('admin.login_submit')}}">
							<!--begin::Heading-->
							<!--begin::Heading-->
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="form-label fs-6 fw-bolder text-dark">Email</label>
								<!--end::Label-->
								<!--begin::Input-->
								<input class="form-control form-control-lg form-control-solid" placeholder="john@example.com" type="text" name="email" autocomplete="off" />
								<!--end::Input-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Wrapper-->
								<div class="d-flex flex-stack mb-2">
									<!--begin::Label-->
									<label class="form-label fw-bolder text-dark fs-6 mb-0" >Password</label>
									<!--end::Label-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Input-->
								<input class="form-control form-control-lg form-control-solid" placeholder="**********" type="password" name="password" autocomplete="off" />
								<!--end::Input-->
							</div>
							<!--end::Input group-->
							<!--begin::Actions-->
							<div class="text-center">
								<!--begin::Submit button-->
								<button type="submit" class="btn btn-lg btn-primary w-100 mb-5">
                                    <i class="fa fa-spinner fa-spin" id="spin" ></i>
									<span class="indicator-label">Continue</span>
									<span class="indicator-progress">Please wait...
									    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
								</button>
								<!--end::Submit button-->
								 
							</div>
							<!--end::Actions-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
		<!--end::Main-->
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{ asset('backend/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('backend/js/scripts.bundle.js') }}"></script>
		<!--end::Global Javascript Bundle-->
	  
		<!--end::Page Custom Javascript-->		 
        <script>
            $(function (){
                $('#spin').hide();
                $('.login-button').prop('disabled', false)
                $('.login-submit').on('submit', function(e){
                e.preventDefault()
        
                let fd = new FormData(this)
                fd.append('_token',"{{ csrf_token() }}");
        
                $.ajax({
                    url: "{{ route('admin.login_submit') }}",
                    type:"POST",
                    data: fd,
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    beforeSend: function () {
                        $('#login-button').prop('disabled', true);
                        $('#spin').show();
                    },
                    success:function(result){
                        
                        if(result.status)
                        {
                            toastr.success(result.msg);                           
                            setTimeout(function(){
                                window.location.href = result.location;
                            }, 3000);
                        }
                        else
                        {
                            toastr.error(result.msg);
                        
                        }
                    },
                    complete: function () {
                        $("#spin").hide();
                        $('#login-button').prop('disabled', false);
                    },
                    error: function(jqXHR, exception) {
                        $("#spin").hide();
                        $('#login-button').prop('disabled', false);
                        console.log(jqXHR.responseText);
                    }
                });
            })
            
            })
        </script>
	</body>
	<!--end::Body-->
</html>