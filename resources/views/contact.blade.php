<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>StyleBD</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="{{ asset('public/images/favicon.png') }}">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	
	<!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('public/css/bootstraps.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('public/css/font-awesome.css') }}">
    
    <!-- Eshop StyleSheet -->
    <link rel="stylesheet" href="{{ asset('public/css/resets.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/responsive.css') }}">	

</head>
<body class="js">
	
	<!-- Header -->
	<header class="header shop">
		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo">
							<a href="{{ route('home') }}"><img src="{{ asset('public/images/logo.png') }}" alt="logo"></a>
						</div>
						<!--/ End Logo -->
					</div>
				</div>
			</div>
		</div>
	</header>
	<!--/ End Header -->
  
	<!-- Start Contact -->
	<section id="contact-us" class="contact-us section">
		<div class="container">
			<div class="contact-head">
				<div class="row">
					<div class="col-lg-8 col-12">
						<div class="form-main">
							<div class="title">
								<h4>Get in touch</h4>
								<h3>Write us a message</h3>
							</div>
							<form class="form" method="post" action="mail/mail.php">
								<div class="row">
									<div class="col-lg-6 col-12">
										<div class="form-group">
											<label>Your Name<span>*</span></label>
											<input name="name" type="text" placeholder="">
										</div>
									</div>
									<div class="col-lg-6 col-12">
										<div class="form-group">
											<label>Your Subjects<span>*</span></label>
											<input name="subject" type="text" placeholder="">
										</div>
									</div>
									<div class="col-lg-6 col-12">
										<div class="form-group">
											<label>Your Email<span>*</span></label>
											<input name="email" type="email" placeholder="">
										</div>	
									</div>
									<div class="col-lg-6 col-12">
										<div class="form-group">
											<label>Your Phone<span>*</span></label>
											<input name="company_name" type="text" placeholder="">
										</div>	
									</div>
									<div class="col-12">
										<div class="form-group message">
											<label>your message<span>*</span></label>
											<textarea name="message" placeholder=""></textarea>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group button">
											<button type="submit" class="btn ">Send Message</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="single-head">
							<div class="single-info">
								<i class="fa fa-phone"></i>
								<h4 class="title">Call us Now:</h4>
								<ul>
									<li>+88029646852</li>
									<li>+88029646853</li>
								</ul>
							</div>
							<div class="single-info">
								<i class="fa fa-envelope-open"></i>
								<h4 class="title">Email:</h4>
								<ul>
									<li><a href="mailto:Admin@stylebd.com">Admin@stylebd.com</a></li>
									<li><a href="mailto:support@stylebd.com">support@stylebd.com</a></li>
								</ul>
							</div>
							<div class="single-info">
								<i class="fa fa-location-arrow"></i>
								<h4 class="title">Our Address:</h4>
								<ul>
									<li>258/A, Dream Tower, Dhaka-1200. </li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/ End Contact -->	
</body>
</html>