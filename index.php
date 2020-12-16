
<?php 
  
  include("includes/db_conn.php");
  include("includes/functions.php");

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
		<!-- all meta -->
		<meta charset="UTF-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Page Title -->
		<title>Aben Dada | Let's Enjoy Together </title>
		<!-- Favicon -->
        <!-- apple icon -->
        <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicon/apple_57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicon/apple_72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicon/apple_114.png">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicon/apple_144.png">
        <link rel="apple-touch-icon-precomposed" sizes="192x192" href="assets/images/apple_precomposed.html">
        <!-- android icon -->
        <link rel="icon" type="image/png" sizes="192x192"  href="assets/images/favicon/android_192.png">
        <!-- web browser icon -->
        <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon_16.png">
        <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicon/favicon_32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon_96.png">
	  	<!-- All css here -->
	  	<!-- Bootstrap css -->
	  	<link rel="stylesheet" href="assets/plugin/bootstrap/css/bootstrap.min.css">
	  	<!-- fontaweosme css -->
	  	<link rel="stylesheet" href="assets/fonts/fontawesome/css/all.css">
	  	<!-- flaticon css -->
	  	<link rel="stylesheet" href="assets/fonts/flaticon/flaticon.css">
	  	<!-- slick slider css -->
	  	<link rel="stylesheet" href="assets/plugin/slick/slick.css">
	  	<link rel="stylesheet" href="assets/plugin/slick/slick-theme.css">
	  	<!-- magnific css -->
	  	<link rel="stylesheet" href="assets/plugin/magnific/magnific-popup.css">
	  	<!-- sidebar css -->
	  	<link rel="stylesheet" href="assets/plugin/sidebar/sidebar-menu.css">
	  	<!-- jquery_ui css -->
	  	<link rel="stylesheet" href="assets/plugin/jquery_ui/jquery-ui.min.css">
	  	<!-- nices elect css -->
	  	<link rel="stylesheet" href="assets/plugin/niceselect/nice-select.css">
	  	<!-- animate css -->
	  	<link rel="stylesheet" href="assets/css/animate.css">
	  	<!-- Style css -->
	  	<link rel="stylesheet" href="assets/css/style.css">
	  	<!-- Responsive css -->
	  	<link rel="stylesheet" href="assets/css/responsive.css">
	</head>
	<body>
		<!-- Start preloader  
		<div class="preloader_area">
			<div class="spinner">
			  <div class="double-bounce1"></div>
			  <div class="double-bounce2"></div>
			</div>
		</div> End preloader  -->

		<!-- Start header_area -->
		<header class="header_area header_v1 transparent_header">
			<div class="container">
				<!-- site_menu -->
				<div class="site_menu">
					<div class="row align-items-center">
						<div class="col-lg-3">
							<div class="listghor_logo">
								<a href="home_1.html"><img src="assets/images/logo.png" class="img-fluid" alt=""></a>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="listghor_menu">
								<nav class="main_menu">
									<ul>
										<li class="menu-item"><a href="index.php">Home</a>
										</li>
										<li class="menu-item"><a href="listing_grid_sidebar.php">Properties</a>
										</li>
										<li class="menu-item"><a href="#">My Account</a>
											<ul class="sub-menu">
												<li class="menu-item"><a href="login.php">login</a></li>
												<li class="menu-item"><a href="registration.php">registration</a></li>
											</ul>
										</li>
										<li class="menu-item"><a href="contact.php">Contact</a></li>
									</ul>
								</nav>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="menu_button">
								<a href="add_listing.php" class="listghor_btn">Create Listing</a>
							</div>
						</div>
					</div>
				</div><!-- site_menu -->
				<!-- mobile menu -->
				<div class="mobile_menu">
					<div class="row align-items-center">
						<div class="col-md-4 col-6">
							<div class="mobile_menu_logo">
								<a href="home_1.html" class="logo"><img src="assets/images/logo.png" class="img-fluid" alt=""></a>
							</div>
						</div>
						<div class="col-md-8 col-6">
							<div class="mobile_menu_icon">
								<a href="#" class="menu_icon"><i class="fas fa-bars"></i></a>
							</div>
						</div>
					</div>
					<div class="sidenav_menu">
						<div class="times_icon">
							<a href="#" class="menu_icon"><i class="fas fa-times"></i></a>
						</div>
						<div class="brand_logo text-center">
							<a href="home_1.html" class="logo"><img src="assets/images/logo.png" class="img-fluid" alt=""></a>
						</div>
						<div class="sidebar_search">
							<input type="text" placeholder="search here">
						</div>
						<ul class="sidebar-menu">
							<li><a href="index.php">home<i class="fas fa-angle-down float-right"></i></a>
							</li>
							<li><a href="listing_grid_sidebar.php">Properties<i class="fas fa-angle-down float-right"></i></a>
							</li>
						   <li><a href="#">My Account<i class="fas fa-angle-down float-right"></i></a>
								<ul class="sidebar-submenu">
									<li><a href="login.php">login</a></li>
									<li><a href="registration.php">registration</a></li>
								</ul>
						   </li>
							<li><a href="contact.php">contact</a></li>
						</ul>
					</div>
				</div>
				<!-- mobile menu -->
			</div>
		</header><!-- End header_area -->
		<!-- Start header_bg section -->
		<section class="hero_bg hero_v1 bg_image" style="background-image: url(assets/images/head_bg_1.jpg);">
			<div class="listghor_overlay"></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 col-md-8">
						<div class="welcome_text text-center wow fadeInUp" data-wow-delay=".1s">
							<h1>Find Out Great Place<br>In Your City</h1>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has beeever since the simply</p>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-10">
						<div class="hero_search hero_search_v1 text-center wow fadeInUp" data-wow-delay=".15s">
							<form>
								<div class="row">
									<div class="col-lg-4">
										<div class="form_group">
											<input type="text" class="form_control fi_width_1" placeholder="What are you looking?" required>
											<i class="fas fa-city"></i>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="form_group">
											<select class="search_select">
												<option disabled selected>Select Location</option>
												<?php
												
													getLocation();

												?>
											</select>
											<i class="fas fa-location-arrow"></i>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="form_group">
											<select class="search_select">
												<option disabled selected>Select Category</option>
												<?php 

												  getProductCat(); 

												?>
											</select>
											<i class="fas fa-list"></i>
										</div>
									</div>
									<div class="col-lg-2">
										<div class="filter_button">
											<button class="search_btn"><i class="fas fa-search"></i>Search</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section><!-- Start header_bg section -->


		<!-- Start listghor_top_category section -->
		<section class="category_v1 section_padding dark_bg">
			<div class="container">
				<div class="row">
					<?php

						getProdCatIcon();

					?>
				</div>
			</div>
		</section><!-- End category section -->
		


		<!-- Start explore_food section -->
		<section class="explore_place listing_style_v1 section_padding">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 col-md-8 col-sm-12">
						<div class="listghor_title text-center">
							<h2>EXPLORE OUR AMAZING DISHES</h2>
						</div>
					</div>
				</div>
				<div class="row">

					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="listing_item_box wow fadeInUp">
							<div class="listghor_img">
								<img src="assets/images/place_7.jpg" alt="">
								<a href="listing_details.php"><div class="overlay_img"></div></a>
								<div class="overlay_content">
									<ul>
										<li class="icon"><a href="#"><i class="fas fa-cocktail"></i></a></li>
										<li><a href="listing_details.php" class="overlay_btn">205 listing</a></li>
									</ul>
								</div>
							</div>
							<div class="listing_info">
								<div class="post_info">
								<h3><a href="listing_details.php">Copenhagen Admiral Hotel</a></h3>
									<h4 class="price">30.00</h4>
									<p class="location">Al Mankhool Road, Dubai</p>
								</div>
								
								<div class="post_meta">
									<ul>
										<li class="star"><a href="#"><i class="fas fa-star"></i>4.5</a></li>
										<li class="icon"><a href="#"><i class="far fa-comment-alt"></i></a></li>
										<li class="icon"><a href="#"><i class="fas fa-phone"></i></a></li>
										<li class="icon"><a href="#"><i class="far fa-envelope"></i></a></li>
										<li class="icon"><a href="#"><i class="far fa-heart"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="listing_item_box wow fadeInUp">
							<div class="listghor_img">
								<img src="assets/images/place_8.jpg" alt="">
								<a href="listing_details.html"><div class="overlay_img"></div></a>
								<div class="overlay_content">
									<ul>
										<li class="icon"><a href="#"><i class="fas fa-shopping-bag"></i></a></li>
										<li><a href="listing_details.html" class="overlay_btn">205 listing</a></li>
									</ul>
								</div>
							</div>
							<div class="listing_info">
								<div class="post_info">
									<h3><a href="listing_details.html">Park Hotel Farrer Park</a></h3>
									<h4 class="price">40.00</h4>
									<p class="location">Al Mankhool Road, Dubai</p>
								</div>
								<div class="post_meta">
									<ul>
										<li class="star"><a href="#"><i class="fas fa-star"></i>4.5</a></li>
										<li class="icon"><a href="#"><i class="far fa-comment-alt"></i></a></li>
										<li class="icon"><a href="#"><i class="fas fa-phone"></i></a></li>
										<li class="icon"><a href="#"><i class="far fa-envelope"></i></a></li>
										<li class="icon"><a href="#"><i class="far fa-heart"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="listing_item_box wow fadeInUp">
							<div class="listghor_img">
								<img src="assets/images/place_9.jpg" alt="">
								<a href="listing_details.html"><div class="overlay_img"></div></a>
								<div class="overlay_content">
									<ul>
										<li class="icon"><a href="#"><i class="fas fa-glass-cheers"></i></a></li>
										<li><a href="listing_details.html" class="overlay_btn">205 listing</a></li>
									</ul>
								</div>
							</div>
							<div class="listing_info">
								<div class="post_info">
									<h3><a href="listing_details.html">Venue Hotel The Lily, Singapore</a></h3>
									<h4 class="price">50.00</h4>
									<p class="location">Al Mankhool Road, Dubai</p>
								</div>
								<div class="post_meta">
									<ul>
										<li class="star"><a href="#"><i class="fas fa-star"></i>4.5</a></li>
										<li class="icon"><a href="#"><i class="far fa-comment-alt"></i></a></li>
										<li class="icon"><a href="#"><i class="fas fa-phone"></i></a></li>
										<li class="icon"><a href="#"><i class="far fa-envelope"></i></a></li>
										<li class="icon"><a href="#"><i class="far fa-heart"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="listing_item_box wow fadeInUp">
							<div class="listghor_img">
								<img src="assets/images/place_10.jpg" alt="">
								<a href="listing_details.html"><div class="overlay_img"></div></a>
								<div class="overlay_content">
									<ul>
										<li class="icon"><a href="#"><i class="fas fa-spa"></i></a></li>
										<li><a href="listing_details.html" class="overlay_btn">205 listing</a></li>
									</ul>
								</div>
							</div>
							<div class="listing_info">
								<div class="post_info">
									<h3><a href="listing_details.html">Hotel Skt Petri</a></h3>
									<h4 class="price">30.00</h4>
									<p class="location">Al Mankhool Road, Dubai</p>
								</div>
								<div class="post_meta">
									<ul>
										<li class="star"><a href="#"><i class="fas fa-star"></i>4.5</a></li>
										<li class="icon"><a href="#"><i class="far fa-comment-alt"></i></a></li>
										<li class="icon"><a href="#"><i class="fas fa-phone"></i></a></li>
										<li class="icon"><a href="#"><i class="far fa-envelope"></i></a></li>
										<li class="icon"><a href="#"><i class="far fa-heart"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="listing_item_box wow fadeInUp">
							<div class="listghor_img">
								<img src="assets/images/place_11.jpg" alt="">
								<a href="listing_details.html"><div class="overlay_img"></div></a>
								<div class="overlay_content">
									<ul>
										<li class="icon"><a href="#"><i class="fas fa-luggage-cart"></i></a></li>
										<li><a href="listing_details.html" class="overlay_btn">205 listing</a></li>
									</ul>
								</div>
							</div>
							<div class="listing_info">
								<div class="post_info">
									<h3><a href="listing_details.html">Park Regis Kris Kin Hotel</a></h3>
									<h4 class="price">70.00</h4>
									<p class="location">Al Mankhool Road, Dubai</p>
								</div>
								<div class="post_meta">
									<ul>
										<li class="star"><a href="#"><i class="fas fa-star"></i>4.5</a></li>
										<li class="icon"><a href="#"><i class="far fa-comment-alt"></i></a></li>
										<li class="icon"><a href="#"><i class="fas fa-phone"></i></a></li>
										<li class="icon"><a href="#"><i class="far fa-envelope"></i></a></li>
										<li class="icon"><a href="#"><i class="far fa-heart"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="listing_item_box wow fadeInUp">
							<div class="listghor_img">
								<img src="assets/images/place_12.jpg" alt="">
								<a href="listing_details.html"><div class="overlay_img"></div></a>
								<div class="overlay_content">
									<ul>
										<li class="icon"><a href="#"><i class="fas fa-shopping-bag"></i></a></li>
										<li><a href="listing_details.html" class="overlay_btn">205 listing</a></li>
									</ul>
								</div>
							</div>
							<div class="listing_info">
								<div class="post_info">
									<h3><a href="listing_details.html">Golden Sands Hotel Apartments</a></h3>
									<h4 class="price">20.00</h4>
									<p class="location">Al Mankhool Road, Dubai</p>
								</div>
								<div class="post_meta">
									<ul>
										<li class="star"><a href="#"><i class="fas fa-star"></i>4.5</a></li>
										<li class="icon"><a href="#"><i class="far fa-comment-alt"></i></a></li>
										<li class="icon"><a href="#"><i class="fas fa-phone"></i></a></li>
										<li class="icon"><a href="#"><i class="far fa-envelope"></i></a></li>
										<li class="icon"><a href="#"><i class="far fa-heart"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End explore_city section -->

		<!-- Start explore_city section -->
		<section class="explore_place listing_style_v2 section_padding">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 col-md-8 col-sm-12">
						<div class="listghor_title text-center">
							<h2>LOOKING FOR A SHOP?</h2>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
						</div>
					</div>
				</div>
				<div class="place_slider">
					<div class="listing_item_box">
						<div class="listghor_img">
							<img src="assets/images/place_13.jpg" alt="">
							<a href="listing_details.html" class="overlay_img"></a>
							<div class="overlay_content">
								<ul>
									<li class="icon"><a href="#"><i class="far fa-building"></i></a></li>
									<li><a href="#" class="overlay_btn">173 Listing</a></li>
								</ul>
							</div>
						</div>
						<div class="listing_info">
							<div class="post_info">
								<h3><a href="listing_details.html">Caravela Beach Resort</a></h3>
								<h4 class="price">10.00</h4>
								<p class="location">Al Mankhool Road, Dubai</p>
								<p class="phone"><a href="tel:+123456789">+123 456 789</a>0</p>
							</div>
							<div class="post_meta">
								<ul>
									<li><a href="#"><i class="fas fa-home"></i>Real Estate</a></li>
									<li><a href="#" class="open_btn">open now</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="listing_item_box">
						<div class="listghor_img">
							<img src="assets/images/place_14.jpg" alt="">
							<a href="listing_details.html" class="overlay_img"></a>
							<div class="overlay_content">
								<ul>
									<li class="icon"><a href="#"><i class="fas fa-luggage-cart"></i></a></li>
									<li><a href="#" class="overlay_btn">173 Listing</a></li>
								</ul>
							</div>
						</div>
						<div class="listing_info">
							<div class="post_info">
								<h3><a href="listing_details.html">Quality Inn Ocean Palms</a></h3>
								<h4 class="price">20.00</h4>
								<p class="location">Al Mankhool Road, Dubai</p>
								<p class="phone"><a href="tel:+123456789">+123 456 789</a></p>
							</div>
							<div class="post_meta">
								<ul>
									<li><a href="#"><i class="fas fa-home"></i>Real Estate</a></li>
									<li><a href="#" class="close_btn">Close now</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="listing_item_box">
						<div class="listghor_img">
							<img src="assets/images/place_15.jpg" alt="">
							<a href="listing_details.html" class="overlay_img"></a>
							<div class="overlay_content">
								<ul>
									<li class="icon"><a href="#"><i class="fas fa-spa"></i></a></li>
									<li><a href="#" class="overlay_btn">173 Listing</a></li>
								</ul>
							</div>
						</div>
						<div class="listing_info">
							<div class="post_info">
								<h3><a href="listing_details.html">Royal Orchid Beach Resort</a></h3>
								<h4 class="price">30.00</h4>
								<p class="location">Al Mankhool Road, Dubai</p>
								<p class="phone"><a href="tel:+123456789">+123 456 789</a></p>
							</div>
							<div class="post_meta">
								<ul>
									<li><a href="#"><i class="fas fa-home"></i>Real Estate</a></li>
									<li><a href="#" class="open_btn">open now</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="listing_item_box">
						<div class="listghor_img">
							<img src="assets/images/place_14.jpg" alt="">
							<a href="listing_details.html" class="overlay_img"></a>
							<div class="overlay_content">
								<ul>
									<li class="icon"><a href="#"><i class="fas fa-glass-cheers"></i></a></li>
									<li><a href="#" class="overlay_btn">173 Listing</a></li>
								</ul>
							</div>
						</div>
						<div class="listing_info">
							<div class="post_info">
								<h3><a href="listing_details.html">WelcomHeritage Panjim Pousada</a></h3>
								<h4 class="price">40.00</h4>
								<p class="location">Al Mankhool Road, Dubai</p>
								<p class="phone"><a href="tel:+123456789">+123 456 789</a></p>
							</div>
							<div class="post_meta">
								<ul>
									<li><a href="#"><i class="fas fa-home"></i>Real Estate</a></li>
									<li><a href="#" class="open_btn">open now</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="listing_item_box">
						<div class="listghor_img">
							<img src="assets/images/place_13.jpg" alt="">
							<a href="listing_details.html" class="overlay_img"></a>
							<div class="overlay_content">
								<ul>
									<li class="icon"><a href="#"><i class="fas fa-shopping-bag"></i></a></li>
									<li><a href="#" class="overlay_btn">173 Listing</a></li>
								</ul>
							</div>
						</div>
						<div class="listing_info">
							<div class="post_info">
								<h3><a href="listing_details.html">Bogmallo Beach Resor</a></h3>
								<h4 class="price">50.00</h4>
								<p class="location">Al Mankhool Road, Dubai</p>
								<p class="phone"><a href="tel:+123456789">+123 456 789</a></p>
							</div>
							<div class="post_meta">
								<ul>
									<li><a href="#"><i class="fas fa-home"></i>Real Estate</a></li>
									<li><a href="#" class="open_btn">open now</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End explore_city section -->

	<!-- Start how_it_work section -->
		<section class="working_process_v1 section_padding bg_image" style="background-image: url(assets/images/work_bg.jpg);">
			<div class="listghor_overlay"></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 col-md-8 col-sm-12">
						<div class="listghor_title overlay_title text-center">
							<h2>SEE HOW IT WORKS?</h2>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="work_box">
							<div class="listghor_icon">
								<i class="fas fa-users"></i>
							</div>
							<div class="listghor_info">
								<h4>Choose what to do</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="work_box">
							<div class="listghor_icon">
								<i class="fas fa-map-marked-alt"></i>
							</div>
							<div class="listghor_info">
								<h4>Find what you want</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="work_box">
							<div class="listghor_icon">
								<i class="fas fa-compass"></i>
							</div>
							<div class="listghor_info">
								<h4>Explore amazing place</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End how_it_work section -->
	

		<!-- Start listghor_client section 
		<section class="listghor_testimonial_v1 section_padding gray_bg">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 col-md-8 col-sm-12">
						<div class="listghor_title text-center">
							<h2>WHAT OUR CLIENT SAY</h2>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="client_slider_1">
							<div class="client_review_box text-center">
								<div class="client_text">
									<h4>Outstanding Services</h4>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
								</div>
								<div class="client_admin">
									<div class="avatar_thumb">
										<img src="assets/images/admin_1.jpg" alt="">
									</div>
									<div class="avatar_text">
										<h4>JOHN DOE</h4>
										<p>Co Founder & CEO</p>
									</div>
								</div>
							</div>
							<div class="client_review_box text-center">
								<div class="client_text">
									<h4>Outstanding Services</h4>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
								</div>
								<div class="client_admin">
									<div class="avatar_thumb">
										<img src="assets/images/admin_2.jpg" alt="">
									</div>
									<div class="avatar_text">
										<h4>JOHN DOE</h4>
										<p>Co Founder & CEO</p>
									</div>
								</div>
							</div>
							<div class="client_review_box text-center">
								<div class="client_text">
									<h4>Outstanding Services</h4>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
								</div>
								<div class="client_admin">
									<div class="avatar_thumb">
										<img src="assets/images/admin_3.jpg" alt="">
									</div>
									<div class="avatar_text">
										<h4>JOHN DOE</h4>
										<p>Co Founder & CEO</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		End listghor_client section -->


		<!-- Start listghor_blog section 
		<section class="listghor_blog_v1 section_padding">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 col-md-8 col-sm-12">
						<div class="listghor_title text-center">
							<h2>PEOPLE BLOG POST</h2>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-5">
						<div class="blog_box wow fadeInLeft">
							<div class="listghor_img">
								<img src="assets/images/blog_1.jpg" class="img-fluid" alt="">
								<a href="blog_details.html"><div class="overlay_img"></div></a>
								<div class="overlay_content">
									<h2><a href="blog_details.html">New York in City</a></h2>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="blog_list_wrapper">
							<div class="blog_box wow fadeInUp">
								<div class="listghor_img">
									<a href="blog_details.html"><img src="assets/images/blog_2.jpg" alt=""></a>
								</div>
								<div class="blog_info">
									<h2><a href="blog_details.html">Best Resturant In Bangladesh</a></h2>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text.</p>
									<h6><i class="fas fa-calendar-alt"></i>Aug 20,2019</h6>
								</div>
							</div>
							<div class="blog_box wow fadeInUp">
								<div class="listghor_img">
									<a href="blog_details.html"><img src="assets/images/blog_3.jpg" alt=""></a>
								</div>
								<div class="blog_info">
									<h2><a href="blog_details.html">Spent your holiday with best places</a></h2>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text.</p>
									<h6><i class="fas fa-calendar-alt"></i>Aug 20,2019</h6>
								</div>
							</div>
							<div class="blog_box wow fadeInUp">
								<div class="listghor_img">
									<a href="blog_details-2.html"><img src="assets/images/blog_4.jpg" alt=""></a>
								</div>
								<div class="blog_info">
									<h2><a href="blog_details.html">Best Resturant In Bangladesh</a></h2>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text.</p>
									<h6><i class="fas fa-calendar-alt"></i>Aug 20,2019</h6>
								</div>
							</div>
							<div class="blog_box wow fadeInUp">
								<div class="listghor_img">
									<a href="blog_details.html"><img src="assets/images/blog_5.jpg" alt=""></a>
								</div>
								<div class="blog_info">
									<h2><a href="blog_details.html">Spent your holiday with best places</a></h2>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text.</p>
									<h6><i class="fas fa-calendar-alt"></i>Aug 20,2019</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<End listghor_blog section -->

		<!-- Start listghor_contact section -->
		<section class="listing_contact_v1 section_padding gray_bg">
			<div class="container">
				<div class="row  align-items-center">
					<div class="col-lg-6">
						<div class="listghor_img_box contact_img_box">
							<div class="contact_img listghor_img">
								<img src="assets/images/contact_1.png" class="contact_img_1 img-fluid" alt="">
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="listghor_content_box contact_content_box">
							<div class="contact_title">
								<h2>GET IN TOUCH</h2>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
							</div>
							<div class="contact_form">
								<form>
									<div class="form_gorup">
										<input type="text" class="form_control" placeholder="Your name" required>
									</div>
									<div class="form_gorup">
										<input type="email" class="form_control" placeholder="Your email" required>
									</div>
									<div class="form_gorup">
										<textarea name="message" class="form_control" placeholder="Your message" required></textarea>
									</div>
									<div class="form_button">
										<button type="submit" class="listghor_btn form_btn">submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End listghor_contact section -->

		<!-- Start listghor_sponser section 
		<section class="listghor_sponser_v1 section_padding">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="sponser_slider">
							<div class="single_sponser">
								<a href="#"><img src="assets/images/sponser_1.png" alt=""></a>
							</div>
							<div class="single_sponser">
								<a href="#"><img src="assets/images/sponser_1.png" alt=""></a>
							</div>
							<div class="single_sponser">
								<a href="#"><img src="assets/images/sponser_1.png" alt=""></a>
							</div>
							<div class="single_sponser">
								<a href="#"><img src="assets/images/sponser_1.png" alt=""></a>
							</div>
							<div class="single_sponser">
								<a href="#"><img src="assets/images/sponser_1.png" alt=""></a>
							</div>
							<div class="single_sponser">
								<a href="#"><img src="assets/images/sponser_1.png" alt=""></a>
							</div>
							<div class="single_sponser">
								<a href="#"><img src="assets/images/sponser_1.png" alt=""></a>
							</div>
							<div class="single_sponser">
								<a href="#"><img src="assets/images/sponser_1.png" alt=""></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		End listghor_sponser section -->


		<!-- Start listghor_foooter -->
		<footer class="listghor_foooter foooter_v1 dark_bg">
			<div class="container">
				<div class="footer_widget_wrapper">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-12">
							<div class="widget_box about_widget wow fadeInUp">
								<div class="widget_title">
									<img src="assets/images/logo.png" class="img-fluid" alt="">
								</div>
								<div class="widget_content">
									<p>Lorem Ipsum is simply duammy text of the printing aadnd type an setting industry. </p>
									<ul class="social_link">
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
										<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-3 offset-lg-1 col-md-6 col-sm-12">
							<div class="widget_box widget_link wow fadeInUp">
								<div class="widget_title">
									<h4>Useful Links</h4>
								</div>
								<ul class="widget_list">
									<li><a href="#">Categories</a></li>
									<li><a href="#">Listing</a></li>
									<li><a href="#">Testmonial</a></li>
									<li><a href="#">Appointment</a></li>
									<li><a href="#">Blog Post</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-12">
							<div class="widget_box widget_link wow fadeInUp">
								<div class="widget_title">
									<h4>About us</h4>
								</div>
								<ul class="widget_list">
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Expert Team</a></li>
									<li><a href="#">Review</a></li>
									<li><a href="#">Faq Question</a></li>
									<li><a href="#">Blog Post</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-12">
							<div class="widget_box contact_widget wow fadeInUp">
								<div class="widget_title">
									<h4>Contact Us</h4>
								</div>
								<div class="contact_list">
									<div class="list_icon">
										<i class="fas fa-map-marker-alt"></i>
									</div>
									<div class="list_info">
										<p> 360 Harvest ST,North subtract <br>LondonUnited States of America</p>
									</div>
								</div>
								<div class="contact_list">
									<div class="list_icon">
										<i class="far fa-envelope"></i>
									</div>
									<div class="list_info">
										<p><a href="mailto:listghortemplete@gmail.com">listghortemplete@gmail.com</a></p>
									</div>
								</div>
								<div class="contact_list">
									<div class="list_icon">
										<i class="fas fa-phone"></i>
									</div>
									<div class="list_info">
										<p><a href="tel:3837389227717">3837 3892 27717</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer_copyright">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="copyright_text">
								<p>Copyright ©2019 Designed by listghor</p>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="copyright_link">
								<ul>
									<li><a href="#">Privace & Policy</a></li>
									<li><a href="#">Faq</a></li>
									<li><a href="#">Terms</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- End listghor_foooter -->



		<!-- scroll_top -->
		<a id="scroll_top"><i class="fas fa-angle-up"></i></a>
		<!-- jquery  -->
        <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
        <!--modernizr js-->
        <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
	    <!-- bootstrap js -->
	    <script src="assets/plugin/bootstrap/js/bootstrap.min.js"></script>
	    <!-- popper js -->
	    <script src="assets/plugin/bootstrap/js/popper.min.js"></script>
	    <!-- slick slider js -->
	    <script src="assets/plugin/slick/slick.min.js"></script>
	    <!-- magnific popup js -->
	    <script src="assets/plugin/magnific/jquery.magnific-popup.min.js"></script>
	    <!-- isotope js -->
	    <script src="assets/plugin/isotope/isotope.min.js"></script>
	    <!-- imagesloaded js -->
	    <script src="assets/plugin/imagesloaded/imagesloaded.min.js"></script>
	    <!-- couterup js -->
	    <script src="assets/plugin/counterup/jquery.waypoints.min.js"></script>
	    <script src="assets/plugin/counterup/jquery.counterup.min.js"></script>
	    <!-- jquery_ui js -->
	    <script src="assets/plugin/jquery_ui/jquery-ui.min.js"></script>
	    <!-- sidebar js -->
	    <script src="assets/plugin/sidebar/sidebar-menu.js"></script>
	    <!-- nice select js -->
	    <script src="assets/plugin/niceselect/jquery.nice-select.min.js"></script>
	    <!-- wow js -->
	    <script src="assets/js/wow.min.js"></script>
	    <!-- main js -->
	    <script src="assets/js/main.js"></script>
	</body>

<!-- Mirrored from theme.codeastrology.com/listghor/home_1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 May 2020 09:16:23 GMT -->
</html>