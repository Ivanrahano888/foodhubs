<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="robots" content="noindex, nofollow">
        <title>Siram | Registration</title>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/bowl-rice-solid-24.png">		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/select2.min.css">
    </head>
    <body class="account-page">
		<!-- Loader -->
			<div id="loader-wrapper">
				<div id="loader">
					<div class="loader-ellips">
					  <span class="loader-ellips__dot"></span>
					  <span class="loader-ellips__dot"></span>
					  <span class="loader-ellips__dot"></span>
					  <span class="loader-ellips__dot"></span>
					</div>
				</div>
			</div>
		<!-- /Loader -->
        <div class="main-wrapper">
					<!-- Account Logo -->
					<div class="account-logo">
						<a href="index.html">
					</div>
					<!-- /Account Logo -->
					<div class="account-box">
						<div class="account-wrapper">
                            <a href="home"><i class='bx bxs-lemon'></i></a>
							<h3 class="account-title">Register</h3>
							<p class="account-subtitle">Access to our dashboard</p>
							
							<!-- Account Form -->
							<form action="{{route('register-user')}}" method="post">
                                @if(Session::has('success'))
                                <div class="alert alert-success">{{Session::get('success')}}</div>
                                @endif
                                @if(Session::has('fail'))
                                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                                @endif
                                @csrf
								<div class="form-group">
									<label>Full Name</label>
									<input class="form-control" placeholder="Enter FullName" type="text" name="name" value="{{old('name')}}">
                                    <span class="text-danger">@error('name') {{$message}} @enderror</span> 
								</div>
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" placeholder="Enter Email" type="text" name="email" value="{{old('email')}}">
                                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
								</div>
								<div class="form-group">
									<label>Password</label>
									<input class="form-control" placeholder="Enter Password" name="password" type="password" value="{{old('password')}}">
                                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
								</div>
								<div class="form-group text-center">
									<button class="btn btn-primary account-btn" type="submit">Register</button>
								</div>
								<div class="account-footer">
									<p>Already have an account? <a href="login">Login</a></p>
								</div>
							</form>
							<!-- /Account Form -->
						</div>
					</div>
				</div>
			</div>
        </div>
		<!-- /Main Wrapper -->
		<!-- jQuery -->
        <script src="assets/js/jquery-3.5.1.min.js"></script>
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>
