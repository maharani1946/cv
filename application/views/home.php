<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	<title>Maharani Aura Natasyah</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Mungo Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!--fonts-->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Berkshire+Swash' rel='stylesheet' type='text/css'>
	<!--/fonts-->
	<!-- js -->
	<script src="assets/js/jquery.min.js"> </script>
	<script src="assets/js/bootstrap.js"></script>
	<!-- //js -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="assets/js/move-top.js"></script>
	<script type="text/javascript" src="assets/js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
</head>
<body>
<div class="header">
	<div class="container">
		<div class="logo">
			<a href="#"><h1>Tasya</h1></a>
		</div>
		<div class="navigation">
			<nav class="navbar navbar-default">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"> </span>
						<span class="icon-bar"> </span>
						<span class="icon-bar"> </span>
					</button>
				</div>
		<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
			<nav class="cl-effect-7" id="cl-effect-7">
				<ul class="nav navbar-nav">
					<li class="active"><a class="scroll" href="#home">Home <span class="sr-only">(current)</span></a></li>
					<li><a class="scroll" href="#about">Resume</a></li>
					<li><a class="scroll" href="#skills">Skills</a></li>
					<li><a class="scroll" href="#portfolio">Portfolio</a></li>
				</ul>
			</nav>
		<div class="clearfix">
	</div> <!-- /.navbar-collapse -->
			</nav>
		</div>
			<div class="search-bar">
				<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
				<input type="submit" value="">
			</div>
		<div class="clearfix"> </div>
	</div>
</div>
<div class=<?php echo $info['foto']?>>
	<div class="container">
		<div class="banner-info">
			<div class="banner-text">
				<h1><?php echo $info ['nama']?></h1>
				<h2><?php echo $info ['info']?></h2>
				<a href="https://wa.me/6281233956393?text=Hallo Tasya, Saya tertarik dengan CV Kamu" class="btn btn-info js-scroll-trigger"> CHAT ME </a>
			</div>
		</div>
	</div>
</div>
<!--about-->
<div id="about" class="about">
			<div class="container">
				<!-- head-section -->
				<div class="head-section text-center">
					<h2>This is Me </h2>
					<span> </span>
				</div>
				<!-- head-section -->
				<!-- about-grids -->
				<div class="about-grids">
					<div class="col-md-4 about-left-grid">
						<p><?php echo $biodata ['resume']?> </p>
					</div>
					<div class="col-md-3 about-right-grid">
						<a class="popup-with-zoom-anim" href="#small-dialog"><img src=<?php echo $biodata ['foto']?> title="Designer_girl"></a>
					</div>
					<!-- <div class="col-md-5 about-right-grid"> -->
						<b><h3>Data Diri</h3></b> 
						<table> 
							<tr>
									<td>Nama </td>
									<td> : <?php echo $biodata ['nama']?></td> 
							</tr>
							<tr>
									<td>Jenis Kelamin </td>
									<td> : <?php echo $biodata ['jk']?></td> 
							</tr>
							<tr>
									<td>TTL </td>
									<td> : <?php echo $biodata ['ttl']?></td> 
							</tr>
							<tr>
									<td>Alamat </td>
									<td> : <?php echo $biodata ['alamat']?></td> 
							</tr>
							<tr>
									<td>Agama </td>
									<td> : <?php echo $biodata ['agama']?></td> 
							</tr>
							
							<tr>
									<td>Email </td>
									<td> : <?php echo $biodata ['email']?></td> 
							</tr>
							<tr>
									<td>No. Telp </td>
									<td> : <?php echo $biodata ['wa']?></td> 
							</tr>
						</table>
					</div>
				</div>
				<!-- about-grids -->
			</div>
			<div class="clearfix"> </div>
		</div>
		<!---pop-up-box---->  
				<link href="assets/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
				<script src="assets/js/jquery.magnific-popup.js" type="text/javascript"></script>
				<!---//pop-up-box---->
				<div id="small-dialog" class="mfp-hide">
					<iframe src="//player.vimeo.com/video/38584262"> </iframe>
				</div>
				 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
		  				    mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>								  
			<!----//fea-video---->
<!--/about-->
<div class="details">
		<div class="container">
			<div class="bottom-grid">
				<div class="col-md-14 bottom-grid-left">
				<div class="head-section text-center">
					<h2> Pendidikan </h2>
					<span> </span>
				</div>
					<?php
						  foreach ($pendidikan as $data) {
						?>
					<div class="grids">
					
						<p>
						<div class="year year2 text-center">
							<h5><?php echo $data->waktu_pen?></h5>
						</div>
						<div class="qualification">
							<h4><?php echo $data->ket_pen ?></h4>
							<p><?php echo $data->nama_pen ?></p>
						</div>
						<div class="clearfix"> </div>
						</p>
						
					</div>
					<?php
						}
						?>
				</div>
				<div>
				<div class="head-section text-center">
					<h2> Pengalaman </h2>
					<span> </span>
				</div>
					<?php
						  foreach ($pengalaman as $data) {
						?>	
					<div class="grids">

							<div class="year text-center">
								<h5><?php echo $data->waktu_peng?></h5>
							</div>	
							<div class="qualification">
								<h4><?php echo $data->nama_peng?></h4>
								<p><?php echo $data->ket_peng?></p>
							</div>
							<div class="clearfix"> </div>
						</div>
				</div>
				<?php 
				  }
				 ?>
			</div>
		</div>
	</div>
</div>
<!--skills-->
<div class="skills" id="skills">
	<div class="container">

		<div class="skills-info span">
		<div class="head-section text-center">
					<h2> Kemampuan </h2>
					<span> </span>
				</div>
				<div class="study2">
				<div class="skill">
					<?php
						  foreach ($skill as $data) {
						?>	
						<h4><?php echo $data->nama_skill?></h4>
							<div class="progress">
							  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $data->persen?>">
								<span class="sr-only"><?php echo $data->ket_skill?></span>
							  </div>
							</div>
							<?php 
						  }
						 ?>
		</div>
	</div>
</div>
<!--/skills-->
<!--portfolio-->
<!--light-box-js -->
				<script src="assets/js/jquery.chocolat.js"></script>
				<link rel="stylesheet" href="assets/css/chocolat.css" type="text/css" media="screen" charset="utf-8" />
				<!--light-box-files -->
				<script type="text/javascript" charset="utf-8">
				$(function() {
					$('.moments-bottom a').Chocolat();
				});
				</script> 
			<!--//end-gallery js-->
<div id="portfolio" class="portfolio">
		<div class="container">
			<h3>Portfolio</h3>
			<span> </span>
        <div class="gallery-info">
			<div class="col-md-4 galry-grids moments-bottom">
				<a class="b-link-stripe b-animate-go" href=<?php echo $portofolio ['foto']?>>
					<img src=<?php echo $portofolio ['foto']?> class="img-responsive" alt="">
						<div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive" src="images/e.png" alt=""/>
							</span>					
						</div>
				</a>				
			</div>
		<div class="clearfix"> </div>
		</div>
</div>
<div >
<!--/portfolio-->
<!--/contact-->
<div class="footer">
	<div class="copy">
		<div class="container">
		<p>Copyright © 2019 Natasyah. All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
   </div>
</div>
   <script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"><span id="toTopHover"></span><span id="toTopHover"></span> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- </div> -->
</body>
</html>