<!DOCTYPE html>
<html lang="en">
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Porto - Multipurpose Website Template</title>	

		<meta name="keywords" content="WebSite Template" />
		<meta name="description" content="Porto - Multipurpose Website Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri() ?>/assets/img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendor/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendor/animate/animate.compat.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/theme.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/theme-elements.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/theme-blog.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/theme-shop.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendor/circle-flip-slideshow/css/component.css">

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/skins/default.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/custom.css">

	</head>

	<body data-plugin-page-transition>		
		<div class="body">

			<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 45, 'stickySetTop': '-45px', 'stickyChangeLogo': true}">
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="<?php echo get_template_directory_uri() ?>/assets/index.html">
											<img alt="Porto" width="100" height="48" data-sticky-width="82" data-sticky-height="40" data-sticky-top="25" src="<?php echo get_template_directory_uri() ?>/assets/img/logo-default-slim.png">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row pt-3">
									<nav class="header-nav-top">
										<ul class="nav nav-pills">
											<li class="nav-item nav-item-anim-icon d-none d-md-block">
												<a class="nav-link ps-0" href="<?php echo get_template_directory_uri() ?>/assets/about-us.html"><i class="fas fa-angle-right"></i> About Us</a>
											</li>
											<li class="nav-item nav-item-anim-icon d-none d-md-block">
												<a class="nav-link" href="<?php echo get_template_directory_uri() ?>/assets/contact-us.html"><i class="fas fa-angle-right"></i> Contact Us</a>
											</li>
											<li class="nav-item nav-item-left-border nav-item-left-border-remove nav-item-left-border-md-show">
												<span class="ws-nowrap"><i class="fas fa-phone"></i> (123) 456-789</span>
											</li>
										</ul>
									</nav>
									<div class="header-nav-features">
										<div class="header-nav-feature header-nav-features-search d-inline-flex">
											<a href="<?php echo get_template_directory_uri() ?>/assets/#" class="header-nav-features-toggle text-decoration-none" data-focus="headerSearch" aria-label="Search"><i class="fas fa-search header-nav-top-icon"></i></a>
											<div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
												<form role="search" action="page-search-results.html" method="get">
													<div class="simple-search input-group">
														<input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
														<button class="btn" type="submit" aria-label="Search">
															<i class="fas fa-search header-nav-top-icon"></i>
														</button>
													</div>
												</form>
											</div>
										</div>
										<div class="header-nav-feature header-nav-features-cart d-inline-flex ms-2">
											<a href="<?php echo get_template_directory_uri() ?>/assets/#" class="header-nav-features-toggle" aria-label="">
												<img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/icon-cart.svg" width="14" alt="" class="header-nav-top-icon-img">
												<span class="cart-info d-none">
													<span class="cart-qty">1</span>
												</span>
											</a>
											<div class="header-nav-features-dropdown" id="headerTopCartDropdown">
												<ol class="mini-products-list">
													<li class="item">
														<a href="<?php echo get_template_directory_uri() ?>/assets/#" title="Camera X1000" class="product-image"><img src="<?php echo get_template_directory_uri() ?>/assets/img/products/product-1.jpg" alt="Camera X1000"></a>
														<div class="product-details">
															<p class="product-name">
																<a href="<?php echo get_template_directory_uri() ?>/assets/#">Camera X1000 </a>
															</p>
															<p class="qty-price">
																 1X <span class="price">$890</span>
															</p>
															<a href="<?php echo get_template_directory_uri() ?>/assets/#" title="Remove This Item" class="btn-remove"><i class="fas fa-times"></i></a>
														</div>
													</li>
												</ol>
												<div class="totals">
													<span class="label">Total:</span>
													<span class="price-total"><span class="price">$890</span></span>
												</div>
												<div class="actions">
													<a class="btn btn-dark" href="<?php echo get_template_directory_uri() ?>/assets/#">View Cart</a>
													<a class="btn btn-primary" href="<?php echo get_template_directory_uri() ?>/assets/#">Checkout</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="header-row">
									<div class="header-nav pt-1">
										<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle active" href="<?php echo get_template_directory_uri() ?>/assets/index.html">
															Home
														</a>
														<ul class="dropdown-menu">
															<li>
																<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/index.html">
																	Landing Page
																</a>
															</li>
															<li>
																<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/index.html#demos">
																	Demos <span class="tip tip-dark">hot</span>
																</a>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Classic</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/index-classic.html">Classic - Original</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/index-classic-color.html">Classic - Color</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/index-classic-light.html">Classic - Light</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/index-classic-video.html">Classic - Video</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/index-classic-video-light.html">Classic - Video - Light</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Corporate</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/index-corporate.html">Corporate - Version 1</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/index-corporate-2.html">Corporate - Version 2</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/index-corporate-3.html">Corporate - Version 3</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/index-corporate-4.html">Corporate - Version 4</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/index-corporate-5.html">Corporate - Version 5</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/index-corporate-6.html">Corporate - Version 6</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/index-corporate-7.html">Corporate - Version 7</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/index-corporate-8.html">Corporate - Version 8</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/index-corporate-9.html">Corporate - Version 9</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/index-corporate-10.html"->Corporate - Version 10</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/index.html#demos"->More...</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Portfolio</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/index-portfolio.html">Portfolio - Version 1</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/index-portfolio-2.html">Portfolio - Version 2</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/index-portfolio-3.html">Portfolio - Version 3</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/index-portfolio-4.html">Portfolio - Version 4</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/index-portfolio-5.html">Portfolio - Version 5</a></li>
																</ul>
															</li>		
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Blog</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/index-blog.html">Blog - Version 1</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/index-blog-2.html">Blog - Version 2</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/index-blog-3.html">Blog - Version 3</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/index-blog-4.html">Blog - Version 4</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/index-blog-5.html">Blog - Version 5</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">One Page</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/index-one-page.html">One Page Original</a></li>
																</ul>
															</li>
														</ul>
													</li>
													<li class="dropdown dropdown-mega">
														<a class="dropdown-item dropdown-toggle" href="<?php echo get_template_directory_uri() ?>/assets/elements.html">
															Elements
														</a>
														<ul class="dropdown-menu">
															<li>
																<div class="dropdown-mega-content">
																	<div class="row">
																		<div class="col-lg-3">
																			<span class="dropdown-mega-sub-title">Elements 1</span>
																			<ul class="dropdown-mega-sub-nav">
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-accordions.html">Accordions</a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-alerts.html">Alerts</a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-animations.html">Animations  <span class="tip tip-dark p-relative bottom-2">hot</span></a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-arrows.html">Arrows</a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-badges.html">Badges</a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-before-after.html">Before / After</a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-blockquotes.html">Blockquotes</a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-buttons.html">Buttons</a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-call-to-action.html">Call to Action</a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-cards.html">Cards</a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-carousels.html">Carousels</a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-cascading-images.html">Cascading Images</a></li>
																			</ul>
																		</div>
																		<div class="col-lg-3">
																			<span class="dropdown-mega-sub-title">Elements 2</span>
																			<ul class="dropdown-mega-sub-nav">
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-content-rotate.html">Content Rotate</a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-countdowns.html">Countdowns</a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-counters.html">Counters</a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-dividers.html">Dividers</a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-forms.html">Forms</a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-headings.html">Headings</a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-icons.html">Icons</a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-icon-boxes.html">Icon Boxes</a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-image-frames.html">Image Frames  <span class="tip tip-dark p-relative bottom-2">hot</span></a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-image-gallery.html">Image Gallery</a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-image-hotspots.html">Image Hotspots</a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-lightboxes.html">Lightboxes</a></li>
																			</ul>
																		</div>
																		<div class="col-lg-3">
																			<span class="dropdown-mega-sub-title">Elements 3</span>
																			<ul class="dropdown-mega-sub-nav">
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-lists.html">Lists</a></li>						
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-maps.html">Maps</a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-medias.html">Medias</a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-modals.html">Modals</a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-parallax.html">Parallax</a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-particles.html">Particles</a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-posts.html">Posts</a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-pricing-tables.html">Pricing Tables</a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-process.html">Process</a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-progressbars.html">Progress Bars</a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-random-images.html">Random Images</a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-read-more.html">Read More</a></li>
																			</ul>
																		</div>
																		<div class="col-lg-3">
																			<span class="dropdown-mega-sub-title">Elements 4</span>
																			<ul class="dropdown-mega-sub-nav">
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-sections.html">Sections</a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-shape-dividers.html">Shape Dividers</a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-star-ratings.html">Star Ratings</a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-sticky-elements.html">Sticky Elements</a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-tables.html">Tables</a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-tabs.html">Tabs</a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-testimonials.html">Testimonials</a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-toggles.html">Toggles</a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-tooltips-popovers.html">Tooltips & Popovers</a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-typography.html">Typography</a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-word-rotator.html">Word Rotator</a></li>
																				<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/elements-360-image-viewer.html">360º Image Viewer</a></li>
																			</ul>
																		</div>
																	</div>
																</div>
															</li>
														</ul>
													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="<?php echo get_template_directory_uri() ?>/assets/#">
															Features
														</a>
														<ul class="dropdown-menu">
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Headers</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-overview.html">Overview</a></li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Classic</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-classic.html">Classic</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-classic-language-dropdown.html">Classic + Language Dropdown</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-classic-big-logo.html">Classic + Big Logo</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Flat</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-flat.html">Flat</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-flat-top-bar.html">Flat + Top Bar</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-flat-top-bar-top-borders.html">Flat + Top Bar + Top Border</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-flat-colored-top-bar.html">Flat + Colored Top Bar</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-flat-borders.html">Flat + Borders</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Center</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-center.html">Center</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-center-double-navs.html">Center + Double Navs</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-center-nav-buttons.html">Center + Nav + Buttons</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-center-below-slider.html">Center Below Slider</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Floating</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-floating-bar.html">Floating Bar</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-floating-icons.html">Floating Icons</a></li>
																		</ul>
																	</li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-below-slider.html">Below Slider</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-full-video.html">Full Video</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-narrow.html">Narrow</a></li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Sticky</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-sticky-shrink.html">Sticky Shrink</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-sticky-scroll-up.html">Sticky Scroll Up</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-sticky-static.html">Sticky Static</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-sticky-change-logo.html">Sticky Change Logo</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-sticky-reveal.html">Sticky Reveal</a></li>
																		</ul>
																	</li>				
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Transparent</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-transparent-light.html">Transparent Light</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-transparent-dark.html">Transparent Dark</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-transparent-light-bottom-border.html">Transparent Light + Bottom Border</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-transparent-dark-bottom-border.html">Transparent Dark + Bottom Border</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-transparent-bottom-slider.html">Transparent Bottom Slider</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-transparent-top-bar-extra-buttons.html">Transparent Top Bar Extra Buttons</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-semi-transparent-light.html">Semi Transparent Light</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-semi-transparent-dark.html">Semi Transparent Dark</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-semi-transparent-bottom-slider.html">Semi Transparent Bottom Slider</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-semi-transparent-top-bar-borders.html">Semi Transparent + Top Bar + Borders</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Full Width</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-full-width.html">Full Width</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-full-width-borders.html">Full Width + Borders</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-full-width-transparent-light.html">Full Width Transparent Light</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-full-width-transparent-dark.html">Full Width Transparent Dark</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-full-width-semi-transparent-light.html">Full Width Semi Transparent Light</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-full-width-semi-transparent-dark.html">Full Width Semi Transparent Dark</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-full-width-2-rows-extra-buttons.html">Full Width 2 Rows + Extra Buttons</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Navbar</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-navbar.html">Navbar</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-navbar-full.html">Navbar Full</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-navbar-pills.html">Navbar Pills</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-navbar-divisors.html">Navbar Divisors</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-navbar-icons-search.html">Nav Bar + Icons + Search</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Side Header</a>
																		<ul class="dropdown-menu">
																			<li class="dropdown-submenu">
																				<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Side Header Left</a>
																				<ul class="dropdown-menu">
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-side-header-left-dropdown.html">Dropdown</a></li>
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-side-header-left-expand.html">Expand</a></li>
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-side-header-left-columns.html">Columns</a></li>
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-side-header-left-slide.html">Slide</a></li>
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-side-header-left-semi-transparent.html">Semi Transparent</a></li>
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-side-header-left-dark.html">Dark</a></li>
																				</ul>
																			</li>
																			<li class="dropdown-submenu">
																				<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Side Header Right</a>
																				<ul class="dropdown-menu">
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-side-header-right-dropdown.html">Dropdown</a></li>
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-side-header-right-expand.html">Expand</a></li>
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-side-header-right-columns.html">Columns</a></li>
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-side-header-right-slide.html">Slide</a></li>
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-side-header-right-semi-transparent.html">Semi Transparent</a></li>
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-side-header-right-dark.html">Dark</a></li>
																				</ul>
																			</li>
																			<li class="dropdown-submenu">
																				<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Side Header Offcanvas</a>
																				<ul class="dropdown-menu">
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-side-header-offcanvas-push.html">Push</a></li>
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-side-header-offcanvas-slide.html">Slide</a></li>
																				</ul>
																			</li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-side-header-narrow-bar.html">Side Header Narrow Bar</a></li>
																		</ul>
																	</li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-sign-in-sign-up.html">Sign In / Sign Up</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-logged.html">Logged</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-mini-cart.html">Mini Cart</a></li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Search Styles</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-search-simple-input.html">Simple Input</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-search-simple-input-reveal.html">Simple Input Reveal</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-search-dropdown.html">Dropdown</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-search-big-input-hidden.html">Big Input Hidden</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-search-full-screen.html">Full Screen</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Extra</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-extra-big-icon.html">Big Icon</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-extra-big-icons-top.html">Big Icons Top</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-extra-button.html">Button</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-headers-extra-background-color.html">Background Color</a></li>
																		</ul>
																	</li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Navigations</a>
																<ul class="dropdown-menu">
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Pills</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-pills.html">Pills</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-pills-arrows.html">Pills + Arrows</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-pills-dark-text.html">Pills Dark Text</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-pills-color-dropdown.html">Pills Color Dropdown</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-pills-square.html">Pills Square</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-pills-rounded.html">Pills Rounded</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Stripes</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-stripe.html">Stripe</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-stripe-dark-text.html">Stripe Dark Text</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-stripe-color-dropdown.html">Stripe Color Dropdown</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Hover Effects</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-hover-top-line.html">Top Line</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-hover-top-line-animated.html">Top Line Animated</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-hover-top-line-color-dropdown.html">Top Line Color Dropdown</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-hover-bottom-line.html">Bottom Line</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-hover-bottom-line-animated.html">Bottom Line Animated</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-hover-slide.html">Slide</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-hover-sub-title.html">Sub Title</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-hover-line-under-text.html">Line Under Text</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Vertical</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-vertical-dropdown.html">Dropdown</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-vertical-expand.html">Expand</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-vertical-columns.html">Columns</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-vertical-slide.html">Slide</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Hamburguer</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-hamburguer-sidebar.html">Sidebar</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-hamburguer-overlay.html">Overlay</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Dropdown Styles</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-dropdowns-dark.html">Dark</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-dropdowns-light.html">Light</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-dropdowns-colors.html">Colors</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-dropdowns-top-line.html">Top Line</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-dropdowns-square.html">Square</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-dropdowns-arrow.html">Arrow Dropdown</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-dropdowns-arrow-center.html">Arrow Center Dropdown</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-dropdowns-modern-light.html">Modern Light</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-dropdowns-modern-dark.html">Modern Dark</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Dropdown Effects</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-dropdowns-effect-no-effect.html">No Effect</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-dropdowns-effect-opacity.html">Opacity</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-dropdowns-effect-move-to-top.html">Move To Top</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-dropdowns-effect-move-to-bottom.html">Move To Bottom</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-dropdowns-effect-move-to-right.html">Move To Right</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-dropdowns-effect-move-to-left.html">Move To Left</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Font Styles</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-font-small.html">Small</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-font-medium.html">Medium</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-font-large.html">Large</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-font-alternative.html">Alternative</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Icons</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-icons.html">Icons</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-icons-float-icons.html">Float Icons</a></li>
																		</ul>
																	</li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-sub-title.html">Sub Title</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-divisors.html">Divisors</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-logo-between.html">Logo Between</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-one-page.html">One Page Nav</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-navigations-click-to-open.html">Click To Open</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Page Headers</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-page-headers-overview.html">Overview</a></li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Classic</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-page-headers-classic-small.html">Small</a></li>				
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-page-headers-classic-medium.html">Medium</a></li>				
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-page-headers-classic-large.html">Large</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Modern</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-page-headers-modern-small.html">Small</a></li>				
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-page-headers-modern-medium.html">Medium</a></li>				
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-page-headers-modern-large.html">Large</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Colors</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-page-headers-colors-primary.html">Primary</a></li>				
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-page-headers-colors-secondary.html">Secondary</a></li>				
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-page-headers-colors-tertiary.html">Tertiary</a></li>				
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-page-headers-colors-quaternary.html">Quaternary</a></li>				
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-page-headers-colors-light.html">Light</a></li>				
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-page-headers-colors-dark.html">Dark</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Title Position</a>
																		<ul class="dropdown-menu">
																			<li class="dropdown-submenu">
																				<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Left</a>
																				<ul class="dropdown-menu">
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-page-headers-title-position-left-small.html">Small</a></li>				
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-page-headers-title-position-left-medium.html">Medium</a></li>				
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-page-headers-title-position-left-large.html">Large</a></li>
																				</ul>
																			</li>
																			<li class="dropdown-submenu">
																				<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Right</a>
																				<ul class="dropdown-menu">
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-page-headers-title-position-right-small.html">Small</a></li>				
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-page-headers-title-position-right-medium.html">Medium</a></li>				
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-page-headers-title-position-right-large.html">Large</a></li>
																				</ul>
																			</li>
																			<li class="dropdown-submenu">
																				<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Center</a>
																				<ul class="dropdown-menu">
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-page-headers-title-position-center-small.html">Small</a></li>				
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-page-headers-title-position-center-medium.html">Medium</a></li>				
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-page-headers-title-position-center-large.html">Large</a></li>
																				</ul>
																			</li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Background</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-page-headers-background-fixed.html">Fixed</a></li>		
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-page-headers-background-parallax.html">Parallax</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-page-headers-background-video.html">Video</a></li>			
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-page-headers-background-transparent-header.html">Transparent Header</a></li>			
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-page-headers-background-pattern.html">Pattern</a></li>			
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-page-headers-background-overlay.html">Overlay</a></li>			
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-page-headers-background-clean.html">Clean (No Background)</a></li>	
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Extra</a>
																		<ul class="dropdown-menu">
																			<li class="dropdown-submenu">
																				<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Breadcrumb</a>
																				<ul class="dropdown-menu">
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-page-headers-extra-breadcrumb-outside.html">Outside</a></li>				
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-page-headers-extra-breadcrumb-dark.html">Dark</a></li>			
																				</ul>
																			</li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-page-headers-extra-scroll-to-content.html">Scroll to Content</a></li>			
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-page-headers-extra-full-width.html">Full Width</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-page-headers-extra-product.html">Product</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-page-headers-extra-mouse-hover-split.html">Mouse Hover Split</a></li>
																		</ul>
																	</li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Footers</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-footers-overview.html">Overview</a></li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Classic</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-footers-classic.html#footer">Classic</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-footers-classic-advanced.html#footer">Advanced</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-footers-classic-compact.html#footer">Compact</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-footers-classic-simple.html#footer">Simple</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-footers-classic-locations.html#footer">Locations</a></li>
																			<li class="dropdown-submenu">
																				<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Copyright</a>
																				<ul class="dropdown-menu">
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-footers-classic-copyright-light.html#footer">Light</a></li>
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-footers-classic-copyright-dark.html#footer">Dark</a></li>
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-footers-classic-copyright-social-icons.html#footer">Social Icons</a></li>
																				</ul>
																			</li>
																			<li class="dropdown-submenu">
																				<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Colors</a>
																				<ul class="dropdown-menu">
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-footers-classic-colors-primary.html#footer">Primary</a></li>
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-footers-classic-colors-secondary.html#footer">Secondary</a></li>
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-footers-classic-colors-tertiary.html#footer">Tertiary</a></li>
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-footers-classic-colors-quaternary.html#footer			">Quaternary</a></li>
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-footers-classic-colors-light.html#footer">Light</a></li>
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-footers-classic-colors-light-simple.html#footer">Light Simple</a></li>
																				</ul>
																			</li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Modern</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-footers-modern.html#footer">Modern</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-footers-modern-font-style-alternative.html#footer">Font Style Alternative</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-footers-modern-clean.html#footer">Clean</a></li>	
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-footers-modern-useful-links.html#footer">Useful Links</a></li>
																			<li class="dropdown-submenu">
																				<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Background</a>
																				<ul class="dropdown-menu">
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-footers-modern-background-image-simple.html#footer">Image Simple</a></li>
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-footers-modern-background-image-advanced.html#footer">Image Advanced</a></li>
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-footers-modern-background-video-simple.html#footer">Video Simple</a></li>
																				</ul>
																			</li>
																			<li class="dropdown-submenu">
																				<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Call to Action</a>
																				<ul class="dropdown-menu">
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-footers-modern-call-to-action-button.html#footer">Button</a></li>
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-footers-modern-call-to-action-simple.html#footer">Simple</a></li>
																				</ul>
																			</li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Blog</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-footers-blog-classic.html#footer">Blog Classic</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">eCommerce</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-footers-ecommerce-classic.html#footer">eCommerce Classic</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Contact Form</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-footers-contact-form-classic.html#footer">Classic</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-footers-contact-form-above-the-map.html#footer">Above the Map</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-footers-contact-form-center.html#footer">Center</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-footers-contact-form-columns.html#footer">Columns</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Map</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-footers-map-hidden.html#footer">Hidden Map</a></li> 
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-footers-map-full-width.html#footer">Full Width</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Extra</a>
																		<ul class="dropdown-menu">
																			<li class="dropdown-submenu">
																				<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Simple</a>
																				<ul class="dropdown-menu">
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-footers-extra-top-social-icons.html#footer">Top Social Icons</a></li>
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-footers-extra-big-icons.html#footer">Big Icons</a></li>
																				</ul>
																			</li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-footers-extra-recent-work.html#footer">Recent Work</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-footers-extra-reveal.html#footeranchor">Reveal</a></li>
																			<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-footers-extra-instagram.html#footer">Instagram</a></li>
																			<li class="dropdown-submenu">
																				<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Full Width</a>
																				<ul class="dropdown-menu">
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-footers-extra-full-width-light.html#footer">Simple Light</a></li>
																					<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-footers-extra-full-width-dark.html#footer">Simple Dark</a></li>
																				</ul>
																			</li>
																		</ul>
																	</li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Sliders</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/index-slider-revolution.html">Revolution Slider</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/index-slider-owl.html">Owl Slider</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Layout Options</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-layout-boxed.html">Boxed</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-layout-dark.html">Dark</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-layout-rtl.html">RTL</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Extra</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-cursor-effect.html">Cursor Effect</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-grid-system.html">Grid System</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-reading-progress.html">Reading Progress</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-lazy-load.html">Lazy Load</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-page-loading.html">Page Loading</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-page-transition.html">Page Transition</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-side-panel.html">Side Panel</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-horizontal-scroll.html">Horizontal Scroll</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-locomotive-scroll.html">Locomotive Scroll</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-gdpr.html">GDPR</a></li>
																</ul>
															</li>
															<li>
																<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-style-switcher.html">Style Switcher <span class="tip tip-dark">hot</span></a>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Admin Extension<em class="not-included">(Not Included)</em></a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-admin-forms-basic.html">Forms Basic</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-admin-forms-advanced.html">Forms Advanced</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-admin-tables-advanced.html">Tables Advanced</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-admin-tables-responsive.html">Tables Responsive</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-admin-tables-editable.html">Tables Editable</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-admin-tables-ajax.html">Tables Ajax</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/feature-admin-charts.html">Charts</a></li>
																</ul>
															</li>
														</ul>
													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="<?php echo get_template_directory_uri() ?>/assets/#">
															Pages
														</a>
														<ul class="dropdown-menu">
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Contact Us</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/contact-us-advanced.php">Contact Us - Advanced</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/contact-us.html">Contact Us - Basic</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/contact-us-recaptcha.html">Contact Us - Recaptcha</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">About Us</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/about-us-advanced.html">About Us - Advanced</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/about-us.html">About Us - Basic</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/about-me.html">About Me</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Layouts</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/page-full-width.html">Full Width</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/page-left-sidebar.html">Left Sidebar</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/page-right-sidebar.html">Right Sidebar</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/page-left-and-right-sidebars.html">Left and Right Sidebars</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/page-sticky-sidebar.html">Sticky Sidebar</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/page-secondary-navbar.html">Secondary Navbar</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Extra</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/page-404.html">404 Error</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/page-500.html">500 Error</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/page-coming-soon.html">Coming Soon</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/page-maintenance-mode.html">Maintenance Mode</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/page-search-results.html">Search Results</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/sitemap.html">Sitemap</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Team</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/page-team-advanced.html">Team - Advanced</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/page-team.html">Team - Basic</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Services</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/page-services.html">Services - Version 1</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/page-services-2.html">Services - Version 2</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/page-services-3.html">Services - Version 3</a></li>
																</ul>
															</li>
															<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/page-careers.html">Careers</a></li>
															<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/page-faq.html">FAQ</a></li>
															<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/page-login.html">Login / Register</a></li>
															<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/page-user-profile.html">User Profile</a></li>
														</ul>
													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="<?php echo get_template_directory_uri() ?>/assets/#">
															Portfolio
														</a>
														<ul class="dropdown-menu">
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Single Project</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-single-wide-slider.html">Wide Slider</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-single-small-slider.html">Small Slider</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-single-full-width-slider.html">Full Width Slider</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-single-gallery.html">Gallery</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-single-carousel.html">Carousel</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-single-medias.html">Medias</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-single-full-width-video.html">Full Width Video</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-single-masonry-images.html">Masonry Images</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-single-left-sidebar.html">Left Sidebar</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-single-right-sidebar.html">Right Sidebar</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-single-left-and-right-sidebars.html">Left and Right Sidebars</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-single-sticky-sidebar.html">Sticky Sidebar</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-single-extended.html">Extended</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Grid Layouts</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-grid-1-column.html">1 Column</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-grid-2-columns.html">2 Columns</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-grid-3-columns.html">3 Columns</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-grid-4-columns.html">4 Columns</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-grid-5-columns.html">5 Columns</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-grid-6-columns.html">6 Columns</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-grid-no-margins.html">No Margins</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-grid-full-width.html">Full Width</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-grid-full-width-no-margins.html">Full Width No Margins</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-grid-1-column-title-and-description.html">Title and Description</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Masonry Layouts</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-masonry-2-columns.html">2 Columns</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-masonry-3-columns.html">3 Columns</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-masonry-4-columns.html">4 Columns</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-masonry-5-columns.html">5 Columns</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-masonry-6-columns.html">6 Columns</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-masonry-no-margins.html">No Margins</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-masonry-full-width.html">Full Width</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Sidebar Layouts</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-sidebar-left.html">Left Sidebar</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-sidebar-right.html">Right Sidebar</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-sidebar-left-and-right.html">Left and Right Sidebars</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-sidebar-sticky.html">Sticky Sidebar</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Ajax</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-ajax-page.html">Ajax on Page</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-ajax-modal.html">Ajax on Modal</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Extra</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-extra-timeline.html">Timeline</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-extra-lightbox.html">Lightbox</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-extra-load-more.html">Load More</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-extra-infinite-scroll.html">Infinite Scroll</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-extra-lazy-load-masonry.html">Lazy Load Masonry</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-extra-pagination.html">Pagination</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/portfolio-extra-combination-filters.html">Combination Filters</a></li>
																</ul>
															</li>
														</ul>
													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="<?php echo get_template_directory_uri() ?>/assets/#">
															Blog
														</a>
														<ul class="dropdown-menu">
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Large Image</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/blog-large-image-full-width.html">Full Width</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/blog-large-image-sidebar-left.html">Left Sidebar</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/blog-large-image-sidebar-right.html">Right Sidebar </a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/blog-large-image-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Medium Image</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/blog-medium-image-sidebar-left.html">Left Sidebar</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/blog-medium-image-sidebar-right.html">Right Sidebar </a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Grid</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/blog-grid-4-columns.html">4 Columns</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/blog-grid-3-columns.html">3 Columns</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/blog-grid-full-width.html">Full Width</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/blog-grid-no-margins.html">No Margins</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/blog-grid-no-margins-full-width.html">No Margins Full Width</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/blog-grid-sidebar-left.html">Left Sidebar</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/blog-grid-sidebar-right.html">Right Sidebar </a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/blog-grid-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Masonry</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/blog-masonry-4-columns.html">4 Columns</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/blog-masonry-3-columns.html">3 Columns</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/blog-masonry-full-width.html">Full Width</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/blog-masonry-no-margins.html">No Margins</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/blog-masonry-no-margins-full-width.html">No Margins Full Width</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/blog-masonry-sidebar-left.html">Left Sidebar</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/blog-masonry-sidebar-right.html">Right Sidebar </a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Timeline</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/blog-timeline.html">Full Width</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/blog-timeline-sidebar-left.html">Left Sidebar</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/blog-timeline-sidebar-right.html">Right Sidebar </a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Single Post</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/blog-post.html">Full Width</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/blog-post-slider-gallery.html">Slider Gallery</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/blog-post-image-gallery.html">Image Gallery</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/blog-post-embedded-video.html">Embedded Video</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/blog-post-html5-video.html">HTML5 Video</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/blog-post-blockquote.html">Blockquote</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/blog-post-link.html">Link</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/blog-post-embedded-audio.html">Embedded Audio</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/blog-post-small-image.html">Small Image</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/blog-post-sidebar-left.html">Left Sidebar</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/blog-post-sidebar-right.html">Right Sidebar </a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/blog-post-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Post Comments</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/blog-post.html#comments">Default</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/blog-post-comments-facebook.html#comments">Facebook Comments</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/blog-post-comments-disqus.html#comments">Disqus Comments</a></li>
																</ul>
															</li>
														</ul>
													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="<?php echo get_template_directory_uri() ?>/assets/#">
															Shop
														</a>
														<ul class="dropdown-menu">
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">Single Product</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/shop-product-full-width.html">Full Width</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/shop-product-sidebar-left.html">Left Sidebar</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/shop-product-sidebar-right.html">Right Sidebar</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/shop-product-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
																</ul>
															</li>
															<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/shop-4-columns.html">4 Columns</a></li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">3 Columns</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/shop-3-columns-full-width.html">Full Width</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/shop-3-columns-sidebar-left.html">Left Sidebar</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/shop-3-columns-sidebar-right.html">Right Sidebar </a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">2 Columns</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/shop-2-columns-full-width.html">Full Width</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/shop-2-columns-sidebar-left.html">Left Sidebar</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/shop-2-columns-sidebar-right.html">Right Sidebar </a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/shop-2-columns-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/#">1 Column</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/shop-1-column-full-width.html">Full Width</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/shop-1-column-sidebar-left.html">Left Sidebar</a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/shop-1-column-sidebar-right.html">Right Sidebar </a></li>
																	<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/shop-1-column-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
																</ul>
															</li>
															<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/shop-cart.html">Cart</a></li>
															<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/shop-login.html">Login</a></li>
															<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/shop-checkout.html">Checkout</a></li>
															<li><a class="dropdown-item" href="<?php echo get_template_directory_uri() ?>/assets/shop-order-complete.html">Order Complete</a></li>
														</ul>
													</li>
												</ul>
											</nav>
										</div>
										<ul class="header-social-icons social-icons d-none d-sm-block">
											<li class="social-icons-facebook"><a href="<?php echo get_template_directory_uri() ?>/assets/http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
											<li class="social-icons-twitter"><a href="<?php echo get_template_directory_uri() ?>/assets/http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
											<li class="social-icons-linkedin"><a href="<?php echo get_template_directory_uri() ?>/assets/http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
										</ul>
										<button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main">
				<div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover nav-inside nav-inside-plus nav-dark nav-md nav-font-size-md show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 7000}" data-dynamic-height="['670px','670px','670px','550px','500px']" style="height: 670px;">
					<div class="owl-stage-outer">
						<div class="owl-stage">

							<!-- Carousel Slide 1 -->
							<div class="owl-item position-relative" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/slides/slide-bg-performance.jpg'); background-color: #2E3136; background-size: cover; background-position: center;">
								<div class="container position-relative z-index-1 h-100">
									<div class="d-flex flex-column align-items-center justify-content-center h-100">
										<h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorter" data-plugin-options="{'minWindowWidth': 0}">
											<span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
												<img src="<?php echo get_template_directory_uri() ?>/assets/img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
											</span>
											DO YOU NEED A <span class="position-relative">NEW <span class="position-absolute left-50pct transform3dx-n50 top-0 mt-4"><img src="<?php echo get_template_directory_uri() ?>/assets/img/slides/slide-blue-line.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}" alt="" /></span></span>
											<span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
												<img src="<?php echo get_template_directory_uri() ?>/assets/img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
											</span>
										</h3>
										<h1 class="text-color-light font-weight-extra-bold text-12 mb-3 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">WEB DESIGN?</h1>
										<p class="text-4 text-color-light font-weight-light opacity-7 mb-0" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0}">Check out our options and features</p>
									</div>
								</div>
							</div>

							<!-- Carousel Slide 2 -->
							<div class="owl-item position-relative overlay overlay-show overlay-op-8 lazyload" data-bg-src="<?php echo get_template_directory_uri() ?>/assets/img/slides/slide-bg-2.jpg" style="background-size: cover; background-position: center;">
								<div class="container position-relative z-index-3 h-100">
									<div class="row justify-content-center align-items-center h-100">
										<div class="col-lg-6">
											<div class="d-flex flex-column align-items-center">
												<h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorter" data-plugin-options="{'minWindowWidth': 0}">
													<span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
														<img src="<?php echo get_template_directory_uri() ?>/assets/img/lazy.png" data-src="<?php echo get_template_directory_uri() ?>/assets/img/slides/slide-title-border.png" class="w-auto appear-animation lazyload" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'imgFluid': false, 'minWindowWidth': 0}" alt="" />
													</span>
													WE WORK HARD AND PORTO HAS
													<span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
														<img src="<?php echo get_template_directory_uri() ?>/assets/img/lazy.png" data-src="<?php echo get_template_directory_uri() ?>/assets/img/slides/slide-title-border.png" class="w-auto appear-animation lazyload" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'imgFluid': false, 'minWindowWidth': 0}" alt="" />
													</span>
												</h3>
												<h2 class="text-color-light font-weight-extra-bold text-12 mb-3 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">THE BEST DESIGN</h2>
												<p class="text-4 text-color-light font-weight-light opacity-7 text-center mb-0" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 30}">Trusted by over <strong class="text-color-light">40,000</strong> satisfied users, Porto is a huge success in the one of largest world's MarketPlace</p>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Carousel Slide 3 -->
							<div class="owl-item position-relative overlay overlay-color-primary overlay-show overlay-op-8 lazyload" data-bg-src="<?php echo get_template_directory_uri() ?>/assets/img/slides/slide-bg-6.jpg" style="background-size: cover; background-position: center;">
								<div class="container position-relative z-index-3 h-100">
									<div class="row justify-content-center align-items-center h-100">
										<div class="col-lg-6">
											<div class="d-flex flex-column align-items-center">
												<h3 class="position-relative text-color-light text-4 line-height-5 font-weight-medium px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorter" data-plugin-options="{'minWindowWidth': 0}">
													<span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
														<img src="<?php echo get_template_directory_uri() ?>/assets/img/lazy.png" data-src="<?php echo get_template_directory_uri() ?>/assets/img/slides/slide-title-border.png" class="w-auto appear-animation lazyload" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'imgFluid': false, 'minWindowWidth': 0}" alt="" />
													</span>
													WE CREATE DESIGNS, WE ARE
													<span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
														<img src="<?php echo get_template_directory_uri() ?>/assets/img/lazy.png" data-src="<?php echo get_template_directory_uri() ?>/assets/img/slides/slide-title-border.png" class="w-auto appear-animation lazyload" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'imgFluid': false, 'minWindowWidth': 0}" alt="" />
													</span>
												</h3>
												<h2 class="porto-big-title text-color-light font-weight-extra-bold mb-3" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 300, 'animationName': 'fadeInRightShorterOpacity', 'letterClass': 'd-inline-block'}">PORTO</h2>
												<p class="text-4 text-color-light font-weight-light text-center mb-0" data-plugin-animated-letters data-plugin-options="{'startDelay': 2000, 'minWindowWidth': 0}">The best choice for your new website</p>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="owl-nav">
						<button type="button" role="presentation" class="owl-prev" aria-label="Previous"></button>
						<button type="button" role="presentation" class="owl-next" aria-label="Next"></button>
					</div>
					<div class="owl-dots mb-5">
						<button role="button" class="owl-dot active"><span></span></button>
						<button role="button" class="owl-dot"><span></span></button>
						<button role="button" class="owl-dot"><span></span></button>
					</div>
				</div>

				<div class="home-intro bg-primary" id="home-intro">
					<div class="container">

						<div class="row align-items-center">
							<div class="col-lg-8">
								<p>
									The fastest way to grow your business with the leader in <span class="highlighted-word">Technology</span>
									<span>Check out our options and features included.</span>
								</p>
							</div>
							<div class="col-lg-4">
								<div class="get-started text-start text-lg-end">
									<a href="<?php echo get_template_directory_uri() ?>/assets/#" class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3">Get Started Now</a>
									<div class="learn-more">or <a href="<?php echo get_template_directory_uri() ?>/assets/index.html">learn more.</a></div>
								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="container">

					<div class="row text-center pt-3">
						<div class="col-md-10 mx-md-auto">
							<h1 class="word-rotator slide font-weight-bold text-8 mb-3 appear-animation" data-appear-animation="fadeInUpShorter">
								<span>Porto is </span>
								<span class="word-rotator-words bg-dark">
									<b class="is-visible">incredibly</b>
									<b>especially</b>
									<b>extremely</b>
								</span>
								<span> beautiful and fully responsive.</span>
							</h1>
							<p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo.
							</p>
						</div>
					</div>

				</div>

				<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
					<div class="home-concept mt-5">
						<div class="container">

							<div class="row text-center">
								<span class="sun"></span>
								<span class="cloud"></span>
								<div class="col-lg-2 ms-lg-auto">
									<div class="process-image">
										<img src="<?php echo get_template_directory_uri() ?>/assets/img/home/home-concept-item-1.png" alt="" />
										<strong>Strategy</strong>
									</div>
								</div>
								<div class="col-lg-2">
									<div class="process-image process-image-on-middle">
										<img src="<?php echo get_template_directory_uri() ?>/assets/img/home/home-concept-item-2.png" alt="" />
										<strong>Planning</strong>
									</div>
								</div>
								<div class="col-lg-2">
									<div class="process-image">
										<img src="<?php echo get_template_directory_uri() ?>/assets/img/home/home-concept-item-3.png" alt="" />
										<strong>Build</strong>
									</div>
								</div>
								<div class="col-lg-4 ms-lg-auto">
									<div class="project-image">
										<div id="fcSlideshow" class="fc-slideshow">
											<ul class="fc-slides">
												<li><a href="<?php echo get_template_directory_uri() ?>/assets/portfolio-single-wide-slider.html" aria-label=""><img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/projects/project-home-1.jpg" alt="" /></a></li>
												<li><a href="<?php echo get_template_directory_uri() ?>/assets/portfolio-single-wide-slider.html" aria-label=""><img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/projects/project-home-2.jpg" alt="" /></a></li>
												<li><a href="<?php echo get_template_directory_uri() ?>/assets/portfolio-single-wide-slider.html" aria-label=""><img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/projects/project-home-3.jpg" alt="" /></a></li>
											</ul>
										</div>
										<strong class="our-work">Our Work</strong>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="container mb-5 pb-4">

					<div class="row">
						<div class="col mb-4">
							<hr class="my-5">
						</div>
					</div>

					<div class="row pb-3">
						<div class="col-lg-8">
							<h2 class="font-weight-normal text-7">Our <strong class="font-weight-extra-bold">Features</strong></h2>
							<div class="row">
								<div class="col-sm-6">
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class="icons icon-support text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold text-4-5 mb-1">Customer Support</h4>
											<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
										</div>
									</div>
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class="icons icon-doc text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold text-4-5 mb-1">HTML5 / CSS3 / JS</h4>
											<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
										</div>
									</div>
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class="icons icon-social-google text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold text-4-5 mb-1">500+ Google Fonts</h4>
											<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
										</div>
									</div>
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class="icons icon-pencil text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold text-4-5 mb-1">Colors</h4>
											<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class="icons icon-layers text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold text-4-5 mb-1">Sliders</h4>
											<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
										</div>
									</div>
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class="icons icon-user text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold text-4-5 mb-1">Icons</h4>
											<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
										</div>
									</div>
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class="icons icon-menu text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold text-4-5 mb-1">Buttons</h4>
											<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
										</div>
									</div>
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class="icons icon-screen-desktop text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold text-4-5 mb-1">Lightbox</h4>
											<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<h2 class="font-weight-normal text-6">and more...</h2>

							<div class="accordion accordion-modern" id="accordion">
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold" data-bs-toggle="collapse" data-bs-parent="#accordion" href="<?php echo get_template_directory_uri() ?>/assets/#collapseOne">
												<i class="icons icon-diamond text-color-primary"></i>
												Creative Websites
											</a>
										</h4>
									</div>
									<div id="collapseOne" class="collapse show">
										<div class="card-body text-2">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blanorem ipsum dolor sit amet, consecte.</p>
											<p class="mb-0">Adipiscing elit phasellus blanit ma... <a href="<?php echo get_template_directory_uri() ?>/assets/#" class="d-block text-color-dark font-weight-semibold pt-4">read more <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a></p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold" data-bs-toggle="collapse" data-bs-parent="#accordion" href="<?php echo get_template_directory_uri() ?>/assets/#collapseTwo">
												<i class="icons icon-bubble text-color-primary"></i>
												Contact Forms
											</a>
										</h4>
									</div>
									<div id="collapseTwo" class="collapse">
										<div class="card-body text-2">
											<p class="mb-0">Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold" data-bs-toggle="collapse" data-bs-parent="#accordion" href="<?php echo get_template_directory_uri() ?>/assets/#collapseThree">
												<i class="icons icon-grid text-color-primary"></i>
												Portfolio Pages
											</a>
										</h4>
									</div>
									<div id="collapseThree" class="collapse">
										<div class="card-body text-2">
											<p class="mb-0">Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<hr class="solid my-5">

					<div class="row text-center pt-4">
						<div class="col">
							<h2 class="word-rotator slide font-weight-bold text-8 mb-2">
								<span>We're not the only ones </span>
								<span class="word-rotator-words bg-primary">
									<b class="is-visible">excited</b>
									<b>happy</b>
								</span>
								<span> about Porto Template...</span>
							</h2>
							<h4 class="text-primary lead tall text-4">45,000 CUSTOMERS IN 100 COUNTRIES USE PORTO TEMPLATE. MEET OUR CUSTOMERS.</h4>
						</div>
					</div>

					<div class="row text-center mt-5">
						<div class="owl-carousel owl-theme carousel-center-active-item" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
							<div>
								<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/logos/logo-1.png" alt="">
							</div>
							<div>
								<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/logos/logo-2.png" alt="">
							</div>
							<div>
								<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/logos/logo-3.png" alt="">
							</div>
							<div>
								<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/logos/logo-4.png" alt="">
							</div>
							<div>
								<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/logos/logo-5.png" alt="">
							</div>
							<div>
								<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/logos/logo-6.png" alt="">
							</div>
							<div>
								<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/logos/logo-4.png" alt="">
							</div>
							<div>
								<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/logos/logo-2.png" alt="">
							</div>
						</div>
					</div>

				</div>

				<section class="section section-custom-map appear-animation lazyload" data-appear-animation="fadeInUpShorter" data-src-bg="img/map.png" style="background-color: transparent; background-position: center 0; background-repeat: no-repeat;">
					<section class="section section-default section-footer">
						<div class="container">
							<div class="row mt-5 appear-animation" data-appear-animation="fadeInUpShorter">
								<div class="col-lg-6">
									<div class="recent-posts mb-5">
										<h2 class="font-weight-normal text-6 mb-4"><strong class="font-weight-extra-bold">Latest</strong> Posts</h2>
										<div class="owl-carousel owl-theme dots-title mb-0" data-plugin-options="{'items': 1, 'autoHeight': true, 'autoplay': true, 'autoplayTimeout': 8000}">
											<div class="row">
												<div class="col-lg-6 mb-4 mb-lg-0">
													<article>
														<div class="row">
															<div class="col-auto pe-0">
																<div class="date">
																	<span class="day font-weight-extra-bold">15</span>
																	<span class="month text-1">JAN</span>
																</div>
															</div>
															<div class="col ps-1">
																<h4 class="text-primary text-4"><a class="d-block" href="<?php echo get_template_directory_uri() ?>/assets/blog-post.html">Lorem ipsum dolor sit amet, consectetur</a></h4>
																<p class="pe-4 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
																<a href="<?php echo get_template_directory_uri() ?>/assets//" class="read-more text-color-dark font-weight-semibold text-2">read more <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
															</div>
														</div>
													</article>
												</div>
												<div class="col-lg-6">
													<article>
														<div class="row">
															<div class="col-auto pe-0">
																<div class="date">
																	<span class="day font-weight-extra-bold">14</span>
																	<span class="month text-1">JAN</span>
																</div>
															</div>
															<div class="col ps-1">
																<h4 class="text-primary text-4"><a class="d-block" href="<?php echo get_template_directory_uri() ?>/assets/blog-post.html">Lorem ipsum dolor sit amet, consectetur</a></h4>
																<p class="pe-4 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
																<a href="<?php echo get_template_directory_uri() ?>/assets//" class="read-more text-color-dark font-weight-semibold text-2">read more <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
															</div>
														</div>
													</article>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6 mb-4 mb-lg-0">
													<article>
														<div class="row">
															<div class="col-auto pe-0">
																<div class="date">
																	<span class="day font-weight-extra-bold">13</span>
																	<span class="month text-1">JAN</span>
																</div>
															</div>
															<div class="col ps-1">
																<h4 class="text-primary text-4"><a class="d-block" href="<?php echo get_template_directory_uri() ?>/assets/blog-post.html">Lorem ipsum dolor sit amet, consectetur</a></h4>
																<p class="pe-4 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
																<a href="<?php echo get_template_directory_uri() ?>/assets//" class="read-more text-color-dark font-weight-semibold text-2">read more <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
															</div>
														</div>
													</article>
												</div>
												<div class="col-lg-6">
													<article>
														<div class="row">
															<div class="col-auto pe-0">
																<div class="date">
																	<span class="day font-weight-extra-bold">12</span>
																	<span class="month text-1">JAN</span>
																</div>
															</div>
															<div class="col ps-1">
																<h4 class="text-primary text-4"><a class="d-block" href="<?php echo get_template_directory_uri() ?>/assets/blog-post.html">Lorem ipsum dolor sit amet, consectetur</a></h4>
																<p class="pe-4 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
																<a href="<?php echo get_template_directory_uri() ?>/assets//" class="read-more text-color-dark font-weight-semibold text-2">read more <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
															</div>
														</div>
													</article>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6 mb-4 mb-lg-0">
													<article>
														<div class="row">
															<div class="col-auto pe-0">
																<div class="date">
																	<span class="day font-weight-extra-bold">11</span>
																	<span class="month text-1">JAN</span>
																</div>
															</div>
															<div class="col ps-1">
																<h4 class="text-primary text-4"><a href="<?php echo get_template_directory_uri() ?>/assets/blog-post.html">Lorem ipsum dolor sit amet, consectetur</a></h4>
																<p class="pe-4 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
																<a href="<?php echo get_template_directory_uri() ?>/assets//" class="read-more text-color-dark font-weight-semibold text-2">read more <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
															</div>
														</div>
													</article>
												</div>
												<div class="col-lg-6">
													<article>
														<div class="row">
															<div class="col-auto pe-0">
																<div class="date">
																	<span class="day font-weight-extra-bold">10</span>
																	<span class="month text-1">JAN</span>
																</div>
															</div>
															<div class="col ps-1">
																<h4 class="text-primary text-4"><a href="<?php echo get_template_directory_uri() ?>/assets/blog-post.html">Lorem ipsum dolor sit amet, consectetur</a></h4>
																<p class="pe-4 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
																<a href="<?php echo get_template_directory_uri() ?>/assets//" class="read-more text-color-dark font-weight-semibold text-2">read more <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
															</div>
														</div>
													</article>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<h2 class="font-weight-normal text-6 mb-4"><strong class="font-weight-extra-bold">What</strong> Client’s Say</h2>
									<div class="row">
										<div class="owl-carousel owl-theme dots-title dots-title-pos-2 mb-0" data-plugin-options="{'items': 1, 'autoHeight': true}">
											<div>
												<div class="col">
													<div class="testimonial testimonial-primary">
														<blockquote>
															<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
														</blockquote>
														<div class="testimonial-arrow-down"></div>
														<div class="testimonial-author">
															<div class="testimonial-author-thumbnail">
																<img src="<?php echo get_template_directory_uri() ?>/assets/img/clients/client-1.jpg" class="rounded-circle" alt="" />
															</div>
															<p><strong>John Doe</strong><span>Okler</span></p>
														</div>
													</div>
												</div>
											</div>
											<div>
												<div class="col">
													<div class="testimonial testimonial-primary">
														<blockquote>
															<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
														</blockquote>
														<div class="testimonial-arrow-down"></div>
														<div class="testimonial-author">
															<div class="testimonial-author-thumbnail">
																<img src="<?php echo get_template_directory_uri() ?>/assets/img/clients/client-1.jpg" class="rounded-circle" alt="" />
															</div>
															<p><strong>John Doe</strong><span>Okler</span></p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</section>
			</div>

			<footer id="footer">
				<div class="container">
					<div class="footer-ribbon">
						<span>Get in Touch</span>
					</div>
					<div class="row py-5 my-4">
						<div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
							<h5 class="text-3 mb-3">NEWSLETTER</h5>
							<p class="pe-1">Keep up on our always evolving product features and technology. Enter your e-mail address and subscribe to our newsletter.</p>
							<div class="alert alert-success d-none" id="newsletterSuccess">
								<strong>Success!</strong> You've been added to our email list.
							</div>
							<div class="alert alert-danger d-none" id="newsletterError"></div>
							<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST" class="me-4 mb-3 mb-md-0">
								<div class="input-group input-group-rounded">
									<input class="form-control form-control-sm bg-light" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="email">
									<button class="btn btn-light text-color-dark" type="submit"><strong>GO!</strong></button>
								</div>
							</form>
						</div>
						<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
							<h5 class="text-3 mb-3">LATEST POSTS</h5>
							<ul class="list-unstyled mb-0">
								<li class="mb-2 pb-1">
									<a href="<?php echo get_template_directory_uri() ?>/assets/#">
										<p class="text-3 text-color-light opacity-8 mb-0"><i class="fas fa-angle-right text-color-primary"></i><strong class="ms-2 font-weight-semibold">Lorem ipsum dolor sit amet.</strong></p>
										<p class="text-2 mb-0">12:55 AM Dec 19th</p>
									</a>
								</li>
								<li class="mb-2 pb-1">
									<a href="<?php echo get_template_directory_uri() ?>/assets/#">
										<p class="text-3 text-color-light opacity-8 mb-0"><i class="fas fa-angle-right text-color-primary"></i><strong class="ms-2 font-weight-semibold">Ipsum dolor sit amet.</strong></p>
										<p class="text-2 mb-0">12:55 AM Dec 19th</p>
									</a>
								</li>
								<li>
									<a href="<?php echo get_template_directory_uri() ?>/assets/#">
										<p class="text-3 text-color-light opacity-8 mb-0"><i class="fas fa-angle-right text-color-primary"></i><strong class="ms-2 font-weight-semibold">Lorem ipsum dolor sit amet.</strong></p>
										<p class="text-2 mb-0">12:55 AM Dec 19th</p>
									</a>
								</li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
							<div class="contact-details">
								<h5 class="text-3 mb-3">CONTACT US</h5>
								<ul class="list list-icons list-icons-lg">
									<li class="mb-1"><i class="far fa-dot-circle text-color-primary"></i><p class="m-0">234 Street Name, City Name</p></li>
									<li class="mb-1"><i class="fab fa-whatsapp text-color-primary"></i><p class="m-0"><a href="<?php echo get_template_directory_uri() ?>/assets/tel:8001234567">(800) 123-4567</a></p></li>
									<li class="mb-1"><i class="far fa-envelope text-color-primary"></i><p class="m-0"><a href="<?php echo get_template_directory_uri() ?>/assets/mailto:mail@example.com">mail@example.com</a></p></li>
								</ul>
							</div>
						</div>
						<div class="col-md-6 col-lg-2">
							<h5 class="text-3 mb-3">FOLLOW US</h5>
							<ul class="social-icons">
								<li class="social-icons-facebook"><a href="<?php echo get_template_directory_uri() ?>/assets/http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter"><a href="<?php echo get_template_directory_uri() ?>/assets/http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="<?php echo get_template_directory_uri() ?>/assets/http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container py-2">
						<div class="row py-4">
							<div class="col-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
								<a href="<?php echo get_template_directory_uri() ?>/assets/index.html" class="logo pe-0 pe-lg-3">
									<img alt="Porto Website Template" src="<?php echo get_template_directory_uri() ?>/assets/img/logo-footer.png" class="opacity-5" width="49" height="22" data-plugin-options="{'appearEffect': 'fadeIn'}">
								</a>
							</div>
							<div class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
								<p>© Copyright 2023. All Rights Reserved.</p>
							</div>
							<div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end">
								<nav id="sub-menu">
									<ul>
										<li><i class="fas fa-angle-right"></i><a href="<?php echo get_template_directory_uri() ?>/assets/page-faq.html" class="ms-1 text-decoration-none"> FAQ's</a></li>
										<li><i class="fas fa-angle-right"></i><a href="<?php echo get_template_directory_uri() ?>/assets/sitemap.html" class="ms-1 text-decoration-none"> Sitemap</a></li>
										<li><i class="fas fa-angle-right"></i><a href="<?php echo get_template_directory_uri() ?>/assets/contact-us.html" class="ms-1 text-decoration-none"> Contact Us</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="<?php echo get_template_directory_uri() ?>/assets/vendor/plugins/js/plugins.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo get_template_directory_uri() ?>/assets/js/theme.js"></script>

		<!-- Circle Flip Slideshow Script -->
		<script src="<?php echo get_template_directory_uri() ?>/assets/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
		<!-- Current Page Views -->
		<script src="<?php echo get_template_directory_uri() ?>/assets/js/views/view.home.js"></script>

		<!-- Theme Custom -->
		<script src="<?php echo get_template_directory_uri() ?>/assets/js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="<?php echo get_template_directory_uri() ?>/assets/js/theme.init.js"></script>

	</body>
</html>