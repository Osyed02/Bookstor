<?php
   include("database/conn.php");
   session_start();
   
   if(isset($_POST["login_submit"])) {    
	  $myLoginUserName = $_POST['login_userName']; 
      $myLoginPassword = $_POST['login_password']; 

	  $query = "SELECT userId FROM users WHERE username = '$myLoginUserName' and password = '$myLoginPassword'";
	
	//   $result = mysqli_query($conn,$query);
    //   $row= mysqli_fetch_array($result);
    //   $users= $row['userName'];
		
    //   if($myLoginUserName == $users) {
    //      header("location: index.php");
    //   }else {
    //      $error = "Your Login Name or Password is invalid";
    //   };

   }elseif (isset($_POST["signup_submit"])) {
	$myFirstName = $_POST['fname'];
	$myLastName = $_POST['lname'];
	$myUserName = $_POST['uname'];
	$myEmail = $_POST['email']; 
	$myPassword = $_POST['password']; 

	echo $myEmail,$myPassword;

   }
?>


<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>My Account | Bookshop Responsive Bootstrap4 Template - SHARED ON THEMELOCK.COM</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/icon.png">

	<!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="style.css">

	<!-- Cusom css -->
	<link rel="stylesheet" href="css/custom.css">

	<!-- Modernizer js -->
	<script src="js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
		<!-- Header -->
		<?php include 'includes/header.php' ?>
		<!-- //Header -->
		<!-- Start Search Popup -->
		<?php include 'components/search.php' ?>
		<!-- End Search Popup -->
		<!-- Start Bradcaump area -->
		<div class="ht__bradcaump__area bg-image--6">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="bradcaump__inner text-center">
							<h2 class="bradcaump-title">My Account</h2>
							<nav class="bradcaump-content">
								<a class="breadcrumb_item" href="index.html">Home</a>
								<span class="brd-separetor">/</span>
								<span class="breadcrumb_item active">My Account</span>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Bradcaump area -->
		<!-- Start My Account Area -->
		<section class="my_account_area pt--80 pb--55 bg--white">
			<div class="container">
				<div class="row justify-content-around">
					<div class="col-lg-4 col-12">
						<div class="my__account__wrapper">
							<h3 class="account__title">Login</h3>
							<form action="account.php" method="post">
								<div class="account__form">
									<div class="input__box">
										<label>Username<span>*</span></label>
										<input required name="login_userName" type="text">
									</div>
									<div class="input__box">
										<label>Password<span>*</span></label>
										<input required name="login_password" type="password">
									</div>
									<div class="form__btn">
									<input required type="submit" name="login_submit">
										<label class="label-for-checkbox">
											<input id="rememberme" class="input-checkbox" name="rememberme"
												value="forever" type="checkbox">
											<span>Remember me</span>
										</label>
									</div>
									<a class="forget_pass" href="#">Lost your password?</a>
								</div>
							</form>
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="my__account__wrapper">
							<h3 class="account__title">Register</h3>
							<form action="account.php" method="post">
								<div class="account__form">
									<div class="input__box">
										<label>First Name<span>*</span></label>
										<input required name="fname" type="text">
									</div>
									<div class="input__box">
										<label>Last Name<span>*</span></label>
										<input required name="lname" type="text">
									</div>
									<div class="input__box">
										<label>User Name<span>*</span></label>
										<input required name="uname" type="text">
									</div>
									<div class="input__box">
										<label>Email address <span>*</span></label>
										<input required name="email" type="email">
									</div>
									<div class="input__box">
										<label>Password<span>*</span></label>
										<input required name="password" type="password">
									</div>
									<div class="form__btn">
										<input required type="submit" name="signup_submit">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End My Account Area -->
		<!-- Footer Area -->
		<?php include 'includes/footer.php' ?>
		<!-- //Footer Area -->

	</div>
	<!-- //Main wrapper -->

	<!-- JS Files -->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/active.js"></script>

</body>

</html>