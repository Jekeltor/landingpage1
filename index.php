<?php include 'config.php';?>
<!DOCTYPE html>
<html>
<head>
	<!-- This website was developed, designed, and distributed by Jake Hamblin. This website is copyrighted by Jake Hamblin, which is allowed under the U.S. Copyright Act. This act protects individual devlopers or creators of certain softwares, including code. Created in Dayton, OH. To find more information about me, visit my website: jakehamblin.com -->
	<title>Home - <?php echo $name ?></title>
	<link rel="icon" type="image/png" href="<?php echo $logo ?>" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-0c38nfCMzF8w8DBI+9nTWzApOpr1z0WuyswL4y6x/2ZTtmj/Ki5TedKeUcFusC/k" crossorigin="anonymous">
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="@<?php echo $twitter ?>" />
	<meta name="twitter:creator" content="@jekeltor" />
	<meta property="og:url" content="<?php echo $domain ?>" />
	<meta property="og:title" content="<?php echo $name ?>" />
	<meta property="og:description" content="<?php echo $embed ?>" />
	<meta property="og:image" content="<?php echo $logo ?>" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
	<script src="js/jquery.nicescroll.min.js"></script>
	<script>
		if (matchMedia('screen and (max-width: 600px), (orientation : portrait)').matches) {
		}
		else {
			$(document).ready(function() {
	  
			var nice = $("html").niceScroll();  // The document page (body)
	    
	  		});
		}
	</script>
	<style>
		@font-face {
  			font-family: bears;
  			src: url(fonts/font.ttf);
		}

		body {
			margin: 0;
			font-family: 'PT Sans', sans-serif;
			background-color: rgb(<?php echo $maincolor ?>);
		}

		.dropdown-content {
			display: none;
			position: fixed;
			background-color: rgb(<?php echo $maincolor ?>);
			width: 100%;
			z-index: 10;
			height: 100vh;
			align-items: center;
			justify-content: center;
			text-align: center;
		}

		.dropdown-content a {
			display: block;
			text-decoration: none;
			color: rgb(<?php echo $secondcolor ?>);
			font-size: 4vh;
			margin: 0 1%;
		}

		.dropdown-content .close {
			position: absolute;
			top: 2.5vh;
			right: 1.5vh;
		}

		.dropbtn {
			display: none;
			color: rgb(<?php echo $secondcolor ?>);
			font-size: 3vh;
			background-color: transparent;
			border: none;
		}

		.show {
			display: flex;
		}

		.hide {
			display: none;
		}

		.navbar {
			display: flex;
			height: 10vh;
			width: 100%;
			position: fixed;
			z-index: 5;
			transition: .5s ease;
			background-color: rgba(<?php echo $maincolor ?>, .75);
			align-items: center;
			justify-content: center;
			border-bottom: 2px solid rgb(<?php echo $secondcolor ?>);
		}

		.navbarscrolled {
			background-color: rgba(<?php echo $maincolor ?>, 1);
			transition: .5s ease;
		}

		.navbar .left {
			display: inline-flex;
			width: 50%;
			align-items: center;
			justify-content: flex-start;
			font-family: bears;
			color: #fff;
			padding-left: 3%;
		}

		.navbar .left .logo {
			height: 9vh;
			width: auto;
		}

		.navbar .right {
			display: inline-block;
			width: 50%;
			text-align: right;
			padding-right: 3%;
		}

		.navbar .right .links a {
			font-size: 3vh;
			text-decoration: none;
			color: rgb(<?php echo $secondcolor ?>);
			margin: 0 2%;
			background-image: linear-gradient(rgb(<?php echo $secondcolor ?>), rgb(<?php echo $secondcolor ?>));
			background-size: 0 5px, auto;
			background-repeat: no-repeat;
			background-position: center bottom;
			transition: all .2s ease-out;
		}

		.navbar .right .links a:hover, .navbar .right .links .active {
			background-size: 100% 5px, auto;
		}

		.navbar .right .btnmargin {
			margin-right: 7%;
		}

		.top {
			height: 85vh;
			width: 100%;
			position: relative;
			overflow: hidden;
		}

		.top .background {
			height: 85vh;
			width: 100vw;
			background-image: url(<?php echo $backgroundimg ?>);
			background-size: cover;
			background-position-x: center;
			background-repeat: no-repeat;
			position: absolute;
			z-index: 2;
			<?php 
			$yes = "yes";
			if ($blur == $yes) {
				echo 'filter: blur(4px);
			transform: scale(1.1);';
			}
			else {
			}
			?>
		}

		.top .overlay {
			height: 100%;
			width: 100%;
			background-color: rgba(0, 0, 0, .5);
			position: absolute;
			z-index: 3;
		}

		.divider {
			padding: 4vh 5%;
			background-color: rgb(<?php echo $maincolor ?>);
			border-top: 6px solid rgb(<?php echo $secondcolor ?>);
			border-bottom: 6px solid rgb(<?php echo $secondcolor ?>);
			font-size: 2vh;
			color: rgb(<?php echo $secondcolor ?>);
			font-family: bears;
			text-align: center;
		}

		.divider img {
			height: 15vh;
			width: auto;
		}

		@media screen and (max-width: 600px), (orientation : portrait) {
			.navbar .right {
				padding: 0;
			}

			.navbar .right .links {
				display: none;
			}

			.navbar .right a {
				font-size: 2vh;
				padding-right: 5%;
			}

			.navbar .right a:hover {
				background-size: 0%;
			}

			.dropbtn {
				display: block;
				margin: 0;
			}
		}
	</style>
</head>
<body>
	<section id="myDropdown" class="dropdown-content">
		<div class="spacer">
			<?php
				if (empty($link1)) {
				}
				else {
					echo "<a href='$link1'>$link1name</a>";
				}

				if (empty($link2)) {
				}
				else {
					echo "<a href='$link2'>$link2name</a>";
				}

				if (empty($link3)) {
				}
				else {
					echo "<a href='$link3'>$link3name</a>";
				}

				if (empty($link4)) {
				}
				else {
					echo "<a href='$link4'>$link4name</a>";
				}

				if (empty($link5)) {
				}
				else {
					echo "<a href='$link5'>$link5name</a>";
				}

				if (empty($link6)) {
				}
				else {
					echo "<a href='$link6'>$link6name</a>";
				}
			?>
			<a onclick="myFunction()" class="dropbtn close"><i class="far fa-times-circle"></i></a>
		</div>
	</section>
	<section class="navbar" id="navbar">
		<div class="left">
			<img class="logo" src="<?php echo $logo ?>" />
		</div>
		<div class="right">
			<div class="links">
			<?php
				if (empty($link1)) {
				}
				else {
					echo "<a href='$link1'>$link1name</a>";
				}

				if (empty($link2)) {
				}
				else {
					echo "<a href='$link2'>$link2name</a>";
				}

				if (empty($link3)) {
				}
				else {
					echo "<a href='$link3'>$link3name</a>";
				}

				if (empty($link4)) {
				}
				else {
					echo "<a href='$link4'>$link4name</a>";
				}

				if (empty($link5)) {
				}
				else {
					echo "<a href='$link5'>$link5name</a>";
				}

				if (empty($link6)) {
				}
				else {
					echo "<a href='$link6'>$link6name</a>";
				}
			?>
			</div>
			<a onclick="myFunction()" class="dropbtn btnmargin"><i class="fas fa-bars dropbtn"></i></a>
		</div>
	</section>
	<section class="top">
		<div class="overlay">
		</div>
		<div class="background">
		</div>
	</section>
	<section class="divider">
		<p><img src="<?php echo $logo ?>" /></p>
		<?php echo $message ?>
	</section>
	<script src="js/dropdown.js"></script>
	<script src="js/navbar.js"></script>
	<script src="js/parallax.js"></script>
</body>
</html>