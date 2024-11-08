<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Studio | Register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- ================== BEGIN core-css ================== -->
	<link href="{{ url('assets/css/vendor.min.css') }}" rel="stylesheet">
	<link href="{{ url('assets/css/app.min.css') }}" rel="stylesheet">
	<!-- ================== END core-css ================== -->

</head>
<body>
	<!-- BEGIN #app -->
	<div id="app" class="app app-full-height app-without-header">
		<!-- BEGIN register -->
		<div class="register">
			<!-- BEGIN register-content -->
			<div class="register-content">
				<form action="index.html" method="POST" name="register_form">
					<h1 class="text-center">Sign Up</h1>
					<p class="text-muted text-center">One Admin ID is all you need to access all the Admin services.</p>
					<div class="mb-3">
						<label class="form-label">Name <span class="text-danger">*</span></label>
						<input type="text" class="form-control form-control-lg fs-15px" placeholder="e.g John Smith" value="">
					</div>
					<div class="mb-3">
						<label class="form-label">Email Address <span class="text-danger">*</span></label>
						<input type="text" class="form-control form-control-lg fs-15px" placeholder="username@address.com" value="">
					</div>
					<div class="mb-3">
						<label class="form-label">Password <span class="text-danger">*</span></label>
						<input type="password" class="form-control form-control-lg fs-15px" value="">
					</div>
					<div class="mb-3">
						<label class="form-label">Confirm Password <span class="text-danger">*</span></label>
						<input type="password" class="form-control form-control-lg fs-15px" value="">
					</div>
					<div class="mb-3">
						<label class="form-label">Country <span class="text-danger">*</span></label>
						<select class="form-control form-control-lg fs-15px">
							<option>United States</option>
						</select>
					</div>

					<div class="mb-3">
						<button type="submit" class="btn btn-theme btn-lg fs-15px fw-500 d-block w-100">Sign Up</button>
					</div>
					<div class="text-muted text-center">
						Already have an Admin ID? <a href="{{ route('login') }}">Sign In</a>
					</div>
				</form>
			</div>
			<!-- END register-content -->
		</div>
		<!-- END register -->
	<!-- END theme-panel -->
	</div>
	<!-- END #app -->

	<!-- ================== BEGIN core-js ================== -->
	<script src="{{ url("assets/js/vendor.min.js") }}"></script>
	<script src="{{ url("assets/js/app.min.js") }}"></script>
	<!-- ================== END core-js ================== -->


</body>
</html>
