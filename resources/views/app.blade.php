<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Poppins:300,400,400i,600,700|Open+Sans:300,400,600,700,800,900" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/swiper.css')}}" type="text/css" />

	<!-- Business Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('demos/business/business.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('demos/business/css/fonts.css')}}" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="{{asset('css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('one-page/css/et-line.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('css/responsive.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- Theme Color
	============================================= -->
	<link rel="stylesheet" href="{{asset('demos/business/css/colors.css')}}" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>Amanah Propretindo</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header dark full-header" data-sticky-class="not-dark" data-responsive-class="not-dark" data-sticky-offset="full">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a class="standard-logo" data-dark-logo="{{$logo->path}}"><img src="{{$logo->path}}" alt="Canvas Logo"></a>
						<a class="retina-logo" data-dark-logo="{{$logo->path}}"><img src="{{$logo->path}}" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="not-dark">

						<ul>
							<li class="deactive"><a href="#" data-scrollto="#content" data-easing="easeInOutExpo" data-speed="1250" data-offset="60">
									<div>Home</div>
								</a></li>
							<!-- <li class="deactive"><a href="#" data-scrollto="#team" data-easing="easeInOutExpo" data-speed="1250" data-offset="60">
									<div>Team</div>
								</a></li> -->
							<li class="deactive"><a href="#" data-scrollto="#gallery" data-easing="easeInOutExpo" data-speed="1250" data-offset="60">
									<div>Gallery</div>
								</a></li>
							<li class="deactive"><a href="#" data-scrollto="#benefit" data-easing="easeInOutExpo" data-speed="1250" data-offset="60">
									<div>Benefit</div>
								</a></li>
							<li class="deactive"><a href="#" data-scrollto="#location" data-easing="easeInOutExpo" data-speed="1250" data-offset="60">
									<div>Location</div>
								</a></li>
							<li class="deactive"><a href="#" data-scrollto="#faq" data-easing="easeInOutExpo" data-speed="1250" data-offset="60">
									<div>FAQ</div>
								</a></li>
							<li class="deactive"><a href="#" data-scrollto="#contact-us" data-easing="easeInOutExpo" data-speed="1250" data-offset="60">
									<div>Contact Us</div>
								</a></li>
						</ul>

						<!-- Top Search
						============================================= -->
						<!-- <div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="search.html" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
							</form>
						</div> -->
						<!-- #top-search end -->

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element slider-parallax swiper_wrapper full-screen clearfix" data-loop="true">

			<div class="slider-parallax-inner">
				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide dark" style="background-image: url('{{asset('public/storage/home/homePhoto_1')}}'); background-size: cover">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 class="font-primary nott">{{$homeItems[0]->title}}</h2>
									<p class="t300 font-primary d-none d-sm-block">{{$homeItems[0]->description}}</p>
									<!-- <a href="#" class="button button-rounded button-large nott ls0 font-primary">Get Started</a> -->
								</div>
							</div>
						</div>
						<div class="swiper-slide dark" style="background-image: url('{{asset('public/storage/home/homePhoto_2')}}'); background-size: cover">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 class="font-primary">{{$homeItems[1]->title}}</h2>
									<p class="t300 font-primary d-none d-sm-block">{{$homeItems[1]->description}}</p>
									<!-- <a href="#" class="button button-rounded button-large nott ls0 font-primary">Get Started</a> -->
								</div>
							</div>
						</div>
						<div class="swiper-slide dark" style="background-image: url('{{asset('public/storage/home/homePhoto_3')}}'); background-size: cover">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 class="font-primary">{{$homeItems[2]->title}}</h2>
									<p class="t300 font-primary d-none d-sm-block">{{$homeItems[2]->description}}</p>
									<!-- <a href="#" class="button button-rounded button-large nott ls0 font-primary">Get Started</a> -->
								</div>
							</div>
						</div>
					</div>
					<!-- Slider Arrows
					============================================= -->
					<div class="slider-arrow-left" class="nobg"><i class="icon-line-arrow-left"></i></div>
					<div class="slider-arrow-right" class="nobg"><i class="icon-line-arrow-right"></i></div>
				</div>

				<!-- Slider Mouse Icon
				============================================= -->
				<a href="#" data-scrollto="#content" data-offset="0" class="dark one-page-arrow"><img class="infinite animated fadeInDown" src="{{asset('demos/business/images/mouse.svg')}}" alt=""></a>
			</div>

		</section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap nobottompadding" style="z-index: 1;">

				<!-- Team
				============================================= -->
				<!-- <section id="team">
					<div class="container clearfix">
						<div class="fancy-title title-border title-center">
							<h3>Team</h3>
						</div>
						<div id="oc-team" class="owl-carousel team-carousel bottommargin carousel-widget" data-margin="30" data-pagi="false" data-items-sm="2" data-items-md="2" data-items-xl="4">
	
							<div class="oc-item">
								<div class="team">
									<div class="team-image">
										<img src="{{asset('images/team/3.jpg')}}" alt="John Doe">
									</div>
									<div class="team-desc">
										<div class="team-title"><h4>John Doe</h4><span>CEO</span></div>
										<a href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
											<i class="icon-facebook"></i>
											<i class="icon-facebook"></i>
										</a>
										<a href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
											<i class="icon-twitter"></i>
											<i class="icon-twitter"></i>
										</a>
										<a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
											<i class="icon-gplus"></i>
											<i class="icon-gplus"></i>
										</a>
									</div>
								</div>
							</div>
							<div class="oc-item">
								<div class="team">
									<div class="team-image">
										<img src="{{asset('images/team/2.jpg')}}" alt="Josh Clark">
									</div>
									<div class="team-desc">
										<div class="team-title"><h4>Josh Clark</h4><span>Co-Founder</span></div>
										<a href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
											<i class="icon-facebook"></i>
											<i class="icon-facebook"></i>
										</a>
										<a href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
											<i class="icon-twitter"></i>
											<i class="icon-twitter"></i>
										</a>
										<a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
											<i class="icon-gplus"></i>
											<i class="icon-gplus"></i>
										</a>
									</div>
								</div>
							</div>
							<div class="oc-item">
								<div class="team">
									<div class="team-image">
										<img src="{{asset('images/team/8.jpg')}}" alt="Mary Jane">
									</div>
									<div class="team-desc">
										<div class="team-title"><h4>Mary Jane</h4><span>Sales</span></div>
										<a href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
											<i class="icon-facebook"></i>
											<i class="icon-facebook"></i>
										</a>
										<a href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
											<i class="icon-twitter"></i>
											<i class="icon-twitter"></i>
										</a>
										<a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
											<i class="icon-gplus"></i>
											<i class="icon-gplus"></i>
										</a>
									</div>
								</div>
							</div>
							<div class="oc-item">
								<div class="team">
									<div class="team-image">
										<img src="{{asset('images/team/4.jpg')}}" alt="Nix Maxwell">
									</div>
									<div class="team-desc">
										<div class="team-title"><h4>Nix Maxwell</h4><span>Support</span></div>
										<a href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
											<i class="icon-facebook"></i>
											<i class="icon-facebook"></i>
										</a>
										<a href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
											<i class="icon-twitter"></i>
											<i class="icon-twitter"></i>
										</a>
										<a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
											<i class="icon-gplus"></i>
											<i class="icon-gplus"></i>
										</a>
									</div>
								</div>
							</div>
	
						</div>
	
					</div>
				</section> -->

				<!-- Text Content
				============================================= -->
				<div class="container clearfix">
					<blockquote class="bottommargin">
						<p>{{$blockquotes[0]->value}}</p>
					</blockquote>

					<p>{{$megatexts[0]->value}}</p>

				</div>

				<!-- Promo Content
				============================================= -->
				<div class="container clearfix">

					<div class="promo promo-dark promo-uppercase bottommargin">
						<h3>Call us today at <span>{{$contacts->phone}}</span> or Email us at <span>{{$contacts->email}}</span></h3>
						<!-- <span>We strive to provide Our Customers with Top Notch Support to make their Theme Experience Wonderful</span> -->
						<a class="button button-xlarge button-rounded" data-scrollto="#contact-us" data-easing="easeInOutExpo" data-speed="1250" data-offset="60">Contact Us</a>
					</div>

				</div>

				<!-- Gallery
				============================================= -->
				<section id="gallery">
					<div class="section nobg nobottommargin clearfix">
						<div class="container clearfix">
							<div class="fancy-title title-border title-center">
								<h3>Gallery</h3>
							</div>
							<!-- Portfolio Filter
							============================================= -->
							<ul class="portfolio-filter style-2 center clearfix" data-container="#portfolio">

								<!-- <li class="activeFilter"><a href="#" data-filter="*">Show All</a></li> -->
								<!-- <li><a href="#" data-filter=".pf-icons">Icons</a></li>
								<li><a href="#" data-filter=".pf-illustrations">Illustrations</a></li>
								<li><a href="#" data-filter=".pf-uielements">UI Elements</a></li>
								<li><a href="#" data-filter=".pf-media">Media</a></li>
								<li><a href="#" data-filter=".pf-graphics">Graphics</a></li> -->

							</ul><!-- #portfolio-filter end -->
						</div>

						<!-- Portfolio Items
						============================================= -->
						<div id="portfolio" class="portfolio grid-container portfolio-nomargin clearfix">
							@foreach($galleries as $index => $row)
								<article class="portfolio-item">
									<div class="portfolio-image">
										<a>
											<img src="{{$row->path}}" alt="Open Imagination">
										</a>
										<div class="portfolio-overlay">
											<div class="portfolio-desc">
												<h3><a>{{$row->title}}</a></h3>
												<span><a>{{$row->category}}</a></span>
											</div>
										</div>
									</div>
								</article>
							@endforeach
							

						</div><!-- #portfolio end -->
					</div>
				</section>

				<!-- Video and Benefit Sections
				============================================= -->
				<section id="benefit">
					<div class="section nobg notopmargin clearfix">
						<div class="container clearfix">
	
							<div class="fancy-title title-border title-center">
								<h3>Benefit</h3>
							</div>
							
							@foreach($benefits as $index => $row)

								@switch($index)
									@case(2)
										<div class="col_one_third col_last">
											<div class="feature-box fbox-plain">
												<div class="fbox-icon">
													<i class="i-rounded i-small icon-thumbs-up2"></i>
												</div>
												<h3 class="nott t600 ls0">{{$row->title}}</h3>
												<p>{{$row->description}}</p>
											</div>
										</div>
										<div class="clear"></div>
										@break

									@case(5)
										<div class="col_one_third col_last">
											<div class="feature-box fbox-plain">
												<div class="fbox-icon">
													<i class="i-rounded i-small icon-thumbs-up2"></i>
												</div>
												<h3 class="nott t600 ls0">{{$row->title}}</h3>
												<p>{{$row->description}}</p>
											</div>
										</div>
										<div class="clear"></div>
										@break
									@case(8)
										<div class="col_one_third col_last">
											<div class="feature-box fbox-plain">
												<div class="fbox-icon">
													<i class="i-rounded i-small icon-thumbs-up2"></i>
												</div>
												<h3 class="nott t600 ls0">{{$row->title}}</h3>
												<p>{{$row->description}}</p>
											</div>
										</div>
										<div class="clear"></div>
										@break

									@default
										<div class="col_one_third">
											<div class="feature-box fbox-plain">
												<div class="fbox-icon">
													<i class="i-rounded i-small icon-thumbs-up2"></i>
												</div>
												<h3 class="nott t600 ls0">{{$row->title}}</h3>
												<p>{{$row->description}}</p>
											</div>
										</div>
								@endswitch
													
							@endforeach
	
							<div class="row topmargin-lg clearfix">
								<div class="col-lg-6 nopadding">
									<!-- Youtube Video Link
									============================================= -->
									<a href="{{$videos->link}}" data-lightbox="iframe">
										<img src="{{asset('storage/video/videoThumbnail_1')}}" alt="Youtube Video" class="image_fade" style="box-shadow: 0px 0px 25px 0px rgba(0,0,0,0.15); border-radius: 6px;">
										<i class="icon-play" style="position: absolute; top: 50%; left: 50%; font-size: 60px; color: #FFF; margin-top: -45px; margin-left: -23px"></i>
									</a>
								</div>
								<!-- Video Texts
								============================================= -->
								<div class="col-lg-6" style="padding-left: 60px;">
									<div class="heading-block topmargin-sm bottommargin-sm noborder">
										<h3 class="nott" style="font-size: 46px; font-weight: 700; letter-spacing: -2px; line-height: 58px">{{$videos->title}}</h3>
									</div>
									<p class="t400">{{$videos->description}}</p>
									<!-- <h5 class="nobottommargin t600">&middot; SemiColonWeb - Author, Themeforest Market. <a href="#"><img src="demos/business/images/tf-logo.png" height="18" alt="" style="margin-left: 4px"></a></h5> -->
									<!-- <a href="#" class="button-link bottommargin">Read More</a> -->
								</div>
							</div>
						</div>
					</div>
				</section>

				<!-- Location
				============================================= -->
				<section id="location">
					<div class="section nopadding notopmargin nobg clearfix" style="border-top: 1px solid #EEE; border-bottom: 1px solid #EEE;">
						<div class="row common-height clearfix">
							<div class="col-lg-6 center col-padding" style="background: url('{{asset('public/storage/map/mapPhoto_1')}}') center center no-repeat; background-size: fit;">
								<div>&nbsp;</div>
							</div>
	
							<div class="col-lg-6 col-padding">
								<div>
									<div style="position: relative;">
										<div class="heading-block noborder" data-heading="M">
											<h3 class="nott ls0">Map Location</h3>
										</div>
									</div>
	
									<!-- About Us Featured Boxes
									============================================= -->
									<div class="row clearfix">
										<div class="col-lg-10 col-md-8 bottommargin">
											<div class="feature-box fbox-plain">
												<div class="fbox-icon">
													<a href="#"><i class="icon-et-globe"></i></a>
												</div>
												<h3>{{$maps->title}}</h3>
												<p>{{$maps->description}}</p>
											</div>
										</div>
										
									</div>
								</div>
							</div>
	
						</div>
					</div>
				</section>

				<!-- BlockQuotef
				============================================= -->
				<div class="container clearfix">
					<div class="postcontent nobottommargin clearfix">
						<!-- <h3>Blockquotes</h3> -->
						<blockquote>
							<p>{{$blockquotes[1]->value}}</p>
						</blockquote>
						
					</div>
				</div>

				<section id="faq">
					<!-- FAQ
					============================================= -->
					<div class="container clearfix">
						<div class="fancy-title title-border title-center">
							<h3>FAQ</h3>
						</div>
						<div class="postcontent nobottommargin clearfix">
							<div id="faqs" class="faqs">
								@foreach($faqs as $index => $row)
									<div class="toggle faq faq-marketplace faq-authors">
										<div class="togglet"><i class="toggle-closed icon-question-sign"></i><i class="toggle-open icon-question-sign"></i>{{$row->question}}</div>
										<div class="togglec">{{$row->answer}}</div>
									</div>
								@endforeach
							</div>
						</div>
					</div><!-- .postcontent end -->
				</section>

				<!-- Contact Info
				============================================= -->
				<section id="contact-us">
					<div class="content-wrap">
							
						<div class="container clearfix">
							<div class="fancy-title title-border title-center">
								<h3>Contact Us</h3>
							</div>
							<div class="row clear-bottommargin">
	
								<div class="col-lg-3 col-md-6 bottommargin clearfix">
									<div class="feature-box fbox-center fbox-bg fbox-plain">
										<div class="fbox-icon">
											<a ><i class="icon-map-marker2"></i></a>
										</div>
										<h3>Our Headquarters<span class="subtitle">{{$contacts->address}}</span></h3>
									</div>
								</div>
	
								<div class="col-lg-3 col-md-6 bottommargin clearfix">
									<div class="feature-box fbox-center fbox-bg fbox-plain">
										<div class="fbox-icon">
											<a ><i class="icon-phone3"></i></a>
										</div>
										<h3>Call Us<span class="subtitle">{{$contacts->phone}}</span></h3>
									</div>
								</div>
	
								<div class="col-lg-3 col-md-6 bottommargin clearfix">
									<div class="feature-box fbox-center fbox-bg fbox-plain">
										<div class="fbox-icon">
											<a ><i class="icon-email"></i></a>
										</div>
										<h3>Email<span class="subtitle">{{$contacts->email}}</span></h3>
									</div>
								</div>

								<div class="col-lg-3 col-md-6 bottommargin clearfix">
									<div class="feature-box fbox-center fbox-bg fbox-plain">
										<div class="fbox-icon">
											<a><i class="icon-instagram"></i></a>
										</div>
										<h3>Instagram<span class="subtitle">{{$contacts->instagram}}</span></h3>
									</div>
								</div>
	
								
	
							</div><!-- Contact Info End -->
						</div>
					</div>
				</section>

				<!-- Brands Carousel
				============================================= -->
				<!-- <div class="section nomargin clearfix" style="padding: 80px 0">
					<div id="oc-clients-full" class="owl-carousel owl-carousel-full image-carousel carousel-widget" data-margin="0" data-nav="false" data-pagi="false" data-loop="true" data-autoplay="3000" data-items-xs="2" data-items-sm="3" data-items-md="5" data-items-lg="5" data-items-xl="5">

						<div class="oc-item"><a href="#"><img src="{{asset('demos/business/images/clients/linkedin.svg')}}" style="height: 24px" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{asset('demos/business/images/clients/nat-geo.svg')}}" style="height: 24px" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{asset('demos/business/images/clients/jetblue.svg')}}" style="height: 24px" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{asset('demos/business/images/clients/zillow.svg')}}" style="height: 24px" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{asset('demos/business/images/clients/amazon.svg')}}" style="height: 24px" alt="Brands"></a></div>

					</div>
				</div> -->

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="noborder" style="padding: 30px 0; background-color: #FFF">

			<div class="container clearfix">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">
					<div class="col_one_fourth">
						<img src="{{$logo->path}}" alt="" height="100" style="margin-top: -30px">
					</div>
					<div class="col_three_fourth col_last">
						
						<div class="clear"></div>
						<div class="line line-sm"></div>
						<div class="col_two_third">
							<small class="t300" style="color: #AAA">Copyrights &copy; 2019 All Rights Reserved by Amanah Propetindo.</small>
						</div>
						<div class="col_one_third col_last">
							<!-- <div class="fright clearfix">
								<a href="#" class="social-icon si-mini si-rounded si-colored si-facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon si-mini si-rounded si-colored si-twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>							

								<a href="#" class="social-icon si-mini si-rounded si-colored si-instagram">
									<i class="icon-instagram"></i>
									<i class="icon-instagram"></i>
								</a>
							</div> -->
						</div>
					</div>
				</div>

			</div>

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="{{asset('js/jquery.js')}}"></script>
	<script src="{{asset('js/plugins.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('js/functions.js')}}"></script>

	<script>
		// Owl Carousel Scripts
		$('#oc-features').owlCarousel({
			items: 1,
			margin: 60,
			nav: true,
			navText: ['<i class="icon-line-arrow-left"></i>', '<i class="icon-line-arrow-right"></i>'],
			dots: false,
			stagePadding: 30,
			responsive: {
				768: {
					items: 2
				},
				1200: {
					stagePadding: 200
				}
			},
		});
	</script>

</body>

</html>