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
					<span>Login Page</span>
				</nav>
				<h1 class="section-header__title">Login Page</h1>
			</div>
			<div class="wrapper">
				<div class="grid">
					<div class="grid__item">
						<div class="grid">
							<div class="grid__item large--one-third push--large--one-third text-center">
								<div class="note form-success" id="ResetSuccess" style="display:none;">
									 We've sent you an email with a link to update your password.
								</div>
								<div id="CustomerLoginForm" class="form-vertical">
									<form method="post" action="#" id="customer_login" accept-charset="UTF-8">
										<input type="hidden" value="customer_login" name="form_type"><input type="hidden" name="utf8" value="✓">
										<h3>Login</h3>
										<label for="CustomerEmail" class="hidden-label">Email</label>
										<input type="email" name="customer[email]" id="CustomerEmail" class="input-full" placeholder="Email" autocorrect="off" autocapitalize="off" autofocus="">
										<label for="CustomerPassword" class="hidden-label">Password</label>
										<input type="password" value="" name="customer[password]" id="CustomerPassword" class="input-full" placeholder="Password">
										<p>
											<input type="submit" class="btn btn2 btn--full" value="Sign In">
										</p>
										<p>
											<a href="index.html">Return to Store</a>
										</p>
										<p>
											<a href="" id="RecoverPassword">Forgot your password?</a>
										</p>
									</form>
									<script>
									  $(document).ready(function(){
										  $("a#RecoverPassword").click(function(event){
											event.preventDefault();
											timber.cache.$recoverPasswordForm.show();
											timber.cache.$customerLoginForm.hide();
										  });
									  });
									</script>
								</div>
								<div id="RecoverPasswordForm" style="display: none;">
									<h3>Reset your password</h3>
									<p>
										We will send you an email to reset your password.
									</p>
									<div class="form-vertical">
										<form method="post" action="#" accept-charset="UTF-8">
											<input type="hidden" value="recover_customer_password" name="form_type"><input type="hidden" name="utf8" value="✓">
											<label for="RecoverEmail" class="hidden-label">Email</label>
											<input type="email" value="" name="email" id="RecoverEmail" class="input-full" placeholder="Email" autocorrect="off" autocapitalize="off">
											<input type="submit" class="btn btn2" value="Submit">
											<button type="button" id="HideRecoverPasswordLink" class="text-link btn">Back to Login</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
<?php include 'partial/footer.php'; ?>