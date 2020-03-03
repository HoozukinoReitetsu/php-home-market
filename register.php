<!DOCTYPE html>
<html class="supports-js supports-no-touch supports-csstransforms supports-csstransforms3d supports-fontface">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>Home Market - Responsive HTML5 theme – Red version</title>
	<!-- Font ================================================== -->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700"> 
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,400,500,600,700">
	<!-- Font ================================================== -->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700"> 
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,400,500,600,700">
	<!-- Helpers ================================================== -->
	<meta property="og:type" content="website">
	<meta property="og:title" content="Home Market - Responsive HTML5 theme">
	<meta property="og:image" content="/assets/images/logo.png">
	<meta property="og:image:secure_url" content="/assets/images/logo.png">
	<meta property="og:url" content="#">
	<meta property="og:site_name" content="Home Market Red">
	<meta name="twitter:site" content="@">
	<meta name="twitter:card" content="summary">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<!-- CSS ================================================== -->
	<link href="assets\css\jquery.fancybox.css" rel="stylesheet" type="text/css" media="all">
	<link rel="stylesheet" href="assets\css\font-awesome.min.css">
	<link href="assets\css\animate.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets\css\swatch.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets\css\owl.carousel.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets\css\flexslider.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets\css\timber.scss.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets\css\home_market.global.scss.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets\css\home_market.style.scss.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets\css\tada.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets\css\spr.css" rel="stylesheet" type="text/css" media="all">
	<!-- JS ================================================== -->
	<script src="assets\js\jquery.min.js" type="text/javascript"></script>	
	<script src="assets\js\jquery.fancybox.min.js" type="text/javascript"></script>
	<script src="assets\js\owl.carousel.min.js" type="text/javascript"></script>
	<script src="assets\js\jquery.tweet.min.js" type="text/javascript"></script>
	<script src="assets\js\jquery.optionSelect.js" type="text/javascript"></script>
	<script src="assets\js\jquery.flexslider-min.js" type="text/javascript"></script>
</head>

<?php include 'partial/header.php'; ?>
<main class="main-content">
			<div class="breadcrumb-wrapper">
				<nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
					<a href="index.html" title="Back to the frontpage">Home</a>
					<span aria-hidden="true">&rsaquo;</span>
					<span>Create Account Page</span>
				</nav>
				<h1 class="section-header__title">Create Account Page</h1>
			</div>
			<div class="wrapper">
				<div class="grid">
					<div class="grid__item large--one-third push--large--one-third text-center">
						<h1>Create Account</h1>
						<div class="form-vertical">
							<form method="POST" action="controller/user.php?action=create" id="create_customer" accept-charset="UTF-8">
								<input type="hidden" value="create_customer" name="form_type"><input type="hidden" name="utf8" value="✓">
								<label for="FirstName" class="hidden-label">First Name</label>
								<input type="text" name="first_name" id="FirstName" class="input-full" placeholder="First Name" autocapitalize="words" autofocus="">
								<label for="LastName" class="hidden-label">Last Name</label>
								<input type="text" name="last_name" id="LastName" class="input-full" placeholder="Last Name" autocapitalize="words">
								<label for="Email" class="hidden-label">Email</label>
								<input type="email" name="email" id="Email" class="input-full" placeholder="Email" autocorrect="off" autocapitalize="off">
								<label for="CreatePassword" class="hidden-label">Password</label>
								<input type="password" name="password" id="CreatePassword" class="input-full" placeholder="Password">
								<!-- <label for="CreatePassword" class="hidden-label">RePassword</label>
								<input type="password" name="repassword" id="RePassword" class="input-full" placeholder="RePassword"> -->
								<p>
									<input type="submit" value="Create" class="btn btn--full" id="btn1">
								</p>
								<a href="index.html">Close</a>
							</form>
						</div>
					</div>
				</div>
			</div>
		</main>
<?php include 'partial/footer.php'; ?>
