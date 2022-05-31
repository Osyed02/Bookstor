<header id="wn__header" class="oth-page header__area header__absolute sticky__header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<div class="logo">
							<a href="index.php">
								<img src="images/logo/logo.png" alt="logo images">
							</a>
						</div>
					</div>
					<div class="col-lg-8 d-none d-lg-block">
						<nav class="mainmenu__nav">
							<ul class="meninmenu d-flex justify-content-start">
								<li class="drop with--one--item"><a href="index.php">Home</a></li>
								<li class="drop"><a href="about.php">About</a>
									<div class="megamenu dropdown">
										<ul class="item item01">
											<li><a href="about.php">About us</a></li>
											<li><a href="authors.php">Authors</a></li>
											<li><a href="faq.php">FAQs</a></li>
											<li><a href="portfolio.php">Portfolio</a></li>
										</ul>
									</div>
								</li>
								<li class="drop"><a href="shop.php">Shop</a></li>
								<li class="drop"><a href="blog.php">Blog</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</nav>
					</div>
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<ul class="header__sidebar__right d-flex justify-content-end align-items-center">
							<li class="shop_search mr-4"><a class="search__active" href="#"></a></li>
							<li class="shopcart"><a href="cart.php"><span class="product_qun">3</span></a>
							</li>
							<?php if(isset($_SESSION['login_user'])){ ?>
								<li class="logout__bar__icon"><a href="db_func/logout.php"></a></li>
							<?php }else{ ?>
								<li class="setting__bar__icon"><a href="account.php"></a></li>
							<?php } ?>
						</ul>
					</div>
				</div>
				<!-- Start Mobile Menu -->
				<div class="row d-none">
					<div class="col-lg-12 d-none">
						<nav class="mobilemenu__nav">
							<ul class="meninmenu">
								<li><a href="index.php">Home</a></li>
								<li><a href="about.php">About</a>
									<ul class="item item01">
										<li><a href="about.php">About us</a></li>
										<li><a href="team.php">Authors</a></li>
										<li><a href="faq.php">FAQs</a></li>
										<li><a href="portfolio.php">Portfolio</a></li>
									</ul>
								</li>
								<li><a href="shop.php">Shop</a></li>
								<li><a href="blog.php">Blog</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<!-- End Mobile Menu -->
				<div class="mobile-menu d-block d-lg-none">
				</div>
				<!-- Mobile Menu -->
			</div>
		</header>