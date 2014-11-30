<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"><!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<meta name="description" content="The online portfolio of web designer and developer, Jonathon Jacobs">
		<meta name="author" content="Jonathon Jacobs">
		<title>
			J.J. Design | Web Design Portfolio
		</title><!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
		<link rel="stylesheet" href="css/style.css" type="text/css">
		<link rel="stylesheet" href="css/blueimp-gallery.min.css" type="text/css">
		<link rel="stylesheet" href="css/bootstrap-image-gallery.css" type="text/css"><!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<link rel="stylesheet" href="css/animate.css" type="text/css">
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.viewportchecker.js?ver=1.7.1"></script>
		<script type="text/javascript">
			$( document ).ready( function() {

				$('.bounce-in-right').addClass('scroll-hidden').viewportChecker({
	                classToAdd: 'scroll-visible animated bounceInRight',
	                offset: 50,
	                repeat: true
	              });

				$('.bounce-in-left').addClass('scroll-hidden').viewportChecker({
	                classToAdd: 'scroll-visible animated bounceInLeft',
	                offset: 50,
	                repeat: true
	              });

				$('.fade').addClass('scroll-hidden').viewportChecker({
	                classToAdd: 'scroll-visible animated fadeIn',
	                offset: 200
          		 });

	            $('.fade-down').addClass('scroll-hidden').viewportChecker({
	                classToAdd: 'scroll-visible animated fadeInDown',
	                offset: 300
          		 });

	            $('.flip-in-x').addClass('scroll-hidden').viewportChecker({
	                classToAdd: 'scroll-visible animated flipInX',
	                offset: 100,
	                repeat: true
	              });

	            $('.flip-in-y').addClass('scroll-hidden').viewportChecker({
	                classToAdd: 'scroll-visible animated flipInY',
	                offset: 100,
	                repeat: true
	              });

	            $('.roll-in').addClass('scroll-hidden').viewportChecker({
	                classToAdd: 'scroll-visible animated rollIn',
	                offset: 100,
	                repeat: true
	              });

    		});
		</script>
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<nav class="navbar navbar-fixed-top shadow" role="navigation" data-target="#main-nav">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"></button>
				</div><!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse fade">
					<ul class="nav navbar-nav">
						<li>
							<a href="#" class="scroll-link" data-id="about">About</a>
						</li>
						<li>
							<a href="#" class="scroll-link" data-id="portfolio">Portfolio</a>
						</li>
						<li class="brand scroll-top active">
							<a id="homeLogo" href="#"><img src="img/simpleLogoShadow.png" class="img-responsive"></a>
						</li>
						<li>
							<a href="#" class="scroll-link" data-id="skills">Skills</a>
						</li>
						<li>
							<a href="#" class="scroll-link" data-id="contact">Contact</a>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>
		<div id="intro" class="page-section section">
			<div class="container">
				<div class="row fade-in one bounce-in-right" id="homepage">
					<div class="col-sm-4 col-md-4">
						<object data="img/topLeft.svg" type="image/svg+xml">
							</object>
					</div>
					<div class="col-sm-4 col-md-4 is-center">
						<object data="img/is_Center.svg" type="image/svg+xml">
							</object>
					</div>
					<div class="col-sm-4 col-md-4 remove">
						<object data="img/topRight.svg" type="image/svg+xml">
							</object>
					</div>
				</div>
				<div class="row fade-in two bounce-in-left">
					<div class="col-sm-4 col-md-4 remove">
						<object data="img/bottomLeft.svg" type="image/svg+xml">
							</object>
					</div>
					<div class="col-sm-4 col-md-4">
						<object data="img/bottomCenter.svg" type="image/svg+xml">
							</object>
					</div>
					<div class="col-sm-4 col-md-4">
						<object data="img/bottomRight.svg" type="image/svg+xml">
							</object>
					</div>
				</div>
			</div><!-- /.container -->
		</div><!--end intro-->
		<div id="about" class="page-section section">
			<div class="container">
				<div class="row">
					<div class="col-md-6" id="aboutLeft">
						<h1 class="fade">
							This Is Who I Am
						</h1>
						<div class="row flip-in-y" id="stickFigures">
							<div class="col-xs-3 col-md-3">
								<img src="img/husband.png" class="img-responsive">
							</div>
							<div class="col-xs-3 col-md-3">
								<img src="img/nerd.png" class="img-responsive">
							</div>
							<div class="col-xs-3 col-md-3">
								<img src="img/superhero.png" class="img-responsive">
							</div>
						</div><!--end row--><img src="img/divider.png" id="divider" class="img-responsive fade">
						<div class="fade">
							<p>
								I've always enjoyed working with computers, but at some point I fell in love with the internet and thus, web design. I quickly began teaching myself everything I could with what little free time I have. I have a background in computer programming, so I'm comfortable with backend work as well. My true love, however, is for designing clean, creative, and effective websites for people like you.
							</p>
							<p>
								I still have a hard time believing that I can make a living exploring my curiosity. I enjoy learning new things and expanding on what I already know. Aside from my creative endeavors, I'm a an ambitious comic book aficionado and zealous movie buff. I secretly hope that if I ever get bitten by a spider that I'll turn into Spider-Man.
							</p>
							<p>
								I also enjoy LEGOS, there you go.
							</p>
						</div>
					</div>
					<div class="col-md-6 fade-down" id="arrowImg">
						<img src="img/profileArrow_superman.png" class="img-responsive">
					</div>
				</div>
			</div><!--end container-->
		</div><!--end aboutPage-->
		<!--PORTFOLIO-->
		<div id="portfolio" class="page-section section">
			<div class="container fade">
				<h1>
					Some Stuff I've Done
				</h1><!--Accordion-->
				<div class="panel-group" id="accordion">
					<!--WEBSITES PANEL-->
					<div class="panel panel-default">
						<div class="panel-heading">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><img src="img/websites_label.png" class="img-responsive"></a>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" style="height: auto;">
							<div class="panel-body">
								<div class="row">
									<img src="img/JJD_logo.png" class="img-responsive logo-center" id="JJD_logo">
									<ul class="ch-grid">
										<li>
											<div class="ch-item ch-img-1">
												<div class="ch-info">
													<h3>
														<a href="http://www.soundwavecomics.com" target="_blank">Soundwave Comics</a>
													</h3>
													<p>
														Design | Branding | Development | CMS Integration
													</p>
												</div>
											</div>
										</li>
										<li>
											<div class="ch-item ch-img-2">
												<div class="ch-info">
													<h3>
														<a href="http://www.trustintimacy.com" target="_blank">TRUST<br>
														Intimacy Oil</a>
													</h3>
													<p>
														Re-design | Branding E-Commerce Shop
													</p>
												</div>
											</div>
										</li>
										<li>
											<div class="ch-item ch-img-3">
												<div class="ch-info">
													<h3>
														<a href="http://www.roavisions.com" target="_blank">RoaVisions.com</a>
													</h3>
													<p>
														Design | WordPress
													</p>
												</div>
											</div>
										</li>
									</ul>
								</div><!-- row-->
								<div class="row">
									<img src="img/logos/advantage_logo.png" class="img-responsive logo-center" id="advantage_logo">
									<ul class="ch-grid">
										<li>
											<div class="ch-item ch-adv-1">
												<div class="ch-info">
													<h3>
														<a href="http://www.ghostwriting101.com" target="_blank">Ghostwriting 101</a>
													</h3>
													<p>
														Design | Branding | WordPress
													</p>
												</div>
											</div>
										</li>
										<li>
											<div class="ch-item ch-adv-2">
												<div class="ch-info">
													<h3 class="less-pad">
														<a href="http://www.breakingthrough.advantagelibrary.com" target="_blank">Breaking Through<br>
														<span class="by-who">by Carol Talbot</span></a>
													</h3>
													<p>
														Design | Learning Management System
													</p>
												</div>
											</div>
										</li>
										<li>
											<div class="ch-item ch-adv-3">
												<div class="ch-info">
													<h3>
														<a href="http://www.insidemediapro.com" target="_blank">Inside Media<br>
														<span class="by-who">For Entrepreneurs</span></a>
													</h3>
													<p>
														Design | Learning Management System | Sales Page
													</p>
												</div>
											</div>
										</li>
										<li>
											<div class="ch-item ch-adv-4">
												<div class="ch-info">
													<h3>
														<a href="http://www.uncommoncandor.com" target="_blank">Uncommon Candor</a>
													</h3>
													<p>
														Design | WordPress
													</p>
												</div>
											</div>
										</li>
										<li>
											<div class="ch-item ch-adv-5">
												<div class="ch-info">
													<h3 class="less-pad">
														<a href="http://www.uncommoncandor.advantagelibrary.com" target="_blank">Uncommon Candor<br>
														<span class="by-who">Online Course</span></a>
													</h3>
													<p>
														Design | Learning Management System
													</p>
												</div>
											</div>
										</li>
										<li>
											<div class="ch-item ch-adv-6">
												<div class="ch-info">
													<h3 class="less-pad">
														<a href="http://www.advantageauthoritymarketing.com" target="_blank">Authority Marketing<br>
														<span class="by-who">Summit</span></a>
													</h3>
													<p>
														Design | E-Commerce | WordPress
													</p>
												</div>
											</div>
										</li>
										<li>
											<div class="ch-item ch-adv-7">
												<div class="ch-info">
													<h3>
														<a href="http://www.7stages.advantagelibrary.com" target="_blank">Seven Stages<br>
														<span class="by-who">Dentistry Course</span></a>
													</h3>
													<p>
														Design | LMS | WordPress
													</p>
												</div>
											</div>
										</li>
										<li>
											<div class="ch-item ch-adv-8">
												<div class="ch-info">
													<h3>
														<a href="http://www.adamwitty.com" target="_blank">AdamWitty.com</a>
													</h3>
													<p>
														Design | Branding | WordPress
													</p>
												</div>
											</div>
										</li>
										<li>
											<div class="ch-item ch-adv-9">
												<div class="ch-info">
													<h3>
														<a href="http://www.distributionland.com" target="_blank">Distribution Land</a>
													</h3>
													<p>
														Design | WordPress
													</p>
												</div>
											</div>
										</li>
										<li>
											<div class="ch-item ch-adv-10">
												<div class="ch-info">
													<h3>
														<a href="http://www.elearning.chekinstitute.com" target="_blank">C.H.E.K Institute<br>
														<span class="by-who">E-Learning</span></a>
													</h3>
													<p>
														Design | LMS
													</p>
												</div>
											</div>
										</li>
									</ul>
								</div><!--row-->
							</div><!--panel-body-->
						</div><!--collapseOne-->
					</div><!--panel-default-->
					<!---GRAPHIC DESIGN PANEL-->
					<div class="panel panel-default">
						<div class="panel-heading">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><img src="img/graphic_design_label.png" class="img-responsive"></a>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" style="height: 0px;">
							<div class="panel-body">
								<div class="row">
									<img src="img/TMC_logo.png" class="img-responsive logo-center" id="tmc_logo"> <!--BlueIMP Img Gallery and Lightbox-->
									<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
										<!-- The container for the modal slides -->
										<div class="slides"></div><!-- Controls for the borderless lightbox -->
										<h3 class="title"></h3><a class="prev"></a> <a class="next"></a> <a class="close">x</a>
										<ol class="indicator"></ol><!-- The modal dialog, which will be used to wrap the lightbox content -->
										<div class="modal fade">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h4 class="modal-title"></h4>
													</div><!--modal-header-->
													<div class="modal-body next"></div>
												</div><!--modal-content-->
											</div><!--modal-dialog-->
										</div><!--mode fade-->
									</div><!--blueimp-gallery-->
									<!--Displays Graphic Design Pieces on Page-->
									<!--The Modern Connection-->
									<div id="links">
										<ul class="ch-grid">
											<li>
												<div class="ch-item ch-tmc-1">
													<div class="ch-info">
														<h3 class="folio_piece">
															<a href="img/portfolio/tmc/CCA_SM_Poster.png" title="Campus Center Apartments Social Media Poster" data-gallery="">CCA Social Media Poster</a>
														</h3>
													</div>
												</div>
											</li>
											<li>
												<div class="ch-item ch-tmc-2">
													<div class="ch-info">
														<h3 class="folio_piece">
															<a href="img/portfolio/tmc/cbw_sm_poster.jpg" title="Charleston Beer Works Social Media Poster" data-gallery="">CBW Social Media Poster</a>
														</h3>
													</div>
												</div>
											</li>
											<li>
												<div class="ch-item ch-tmc-3">
													<div class="ch-info">
														<h3 class="folio_piece">
															<a href="img/portfolio/tmc/joe_clarke_prohib.jpg" title="Joe Clarke Big Band at Prohibition Poster" data-gallery="">Joe Clarke Band at Prohibition</a>
														</h3>
													</div>
												</div>
											</li>
											<li>
												<div class="ch-item ch-tmc-4">
													<div class="ch-info">
														<h3 class="folio_piece">
															<a href="img/portfolio/tmc/cbw_ny_poster.jpg" title="Charleston Beer Works New Year Party Poster" data-gallery="">CBW New Year Poster</a>
														</h3>
													</div>
												</div>
											</li>
											<li>
												<div class="ch-item ch-tmc-5">
													<div class="ch-info">
														<h3 class="folio_piece">
															<a href="img/portfolio/tmc/cbw_nye_banner.jpg" title="Charleston Beer Works New Year Party Facebook Cover" data-gallery="">CBW New Year FB Cover</a>
														</h3>
													</div>
												</div>
											</li>
											<li>
												<div class="ch-item ch-tmc-6">
													<div class="ch-info">
														<h3 class="folio_piece">
															<a href="img/portfolio/tmc/Sandys_Cleaner_Banner.png" title="Sandy's Cleaners Web Banner" data-gallery="">Sandy's Cleaners Web Banner</a>
														</h3>
													</div>
												</div>
											</li>
											<li>
												<div class="ch-item ch-tmc-7">
													<div class="ch-info">
														<h3 class="folio_piece">
															<a href="img/portfolio/tmc/Joe_Bustos_Twitter.jpg" title="Mayoral Candidate Joe Bustos Twitter Page" data-gallery="">Joe Bustos Twitter Page</a>
														</h3>
													</div>
												</div>
											</li>
											<li>
												<div class="ch-item ch-tmc-8">
													<div class="ch-info">
														<h3 class="folio_piece">
															<a href="img/portfolio/tmc/Turkey_FBCover.png" title="Turkeypalooza Web Banner" data-gallery="">Turkeypalooza Web Banner</a>
														</h3>
													</div>
												</div>
											</li>
										</ul>
									</div><!--links-->
								</div><!--row-->
								<div class="row">
									<img src="img/JJD_logo.png" class="img-responsive logo-center" id="JJD_logo2"> <!--Displays Graphic Design Pieces on Page-->
									 <!--J.J. Design-->
									<div id="links2">
										<ul class="ch-grid">
											<li>
												<div class="ch-item ch-jjd-1">
													<div class="ch-info">
														<h3 class="folio_piece">
															<a href="img/portfolio/jjd/save_date.jpg" title="Save the Date" data-gallery="">Save the Date</a>
														</h3>
													</div>
												</div>
											</li>
										</ul>
									</div><!--links-->
								</div><!--row-->
							</div><!--panel-body-->
						</div><!--collapseTwo-->
					</div><!--panel-default-->
				</div><!--panel-group-->
			</div><!--end container-->
		</div><!--end portfolio-->
		<div id="skills" class="page-section section">
			<div class="container">
				<h1 class="fade">
					Some Stuff I Can Do
				</h1>
				<div class="row icon_row flip-in-x">
					<div class="col-xs-3 col-md-3 icon">
						<object data="img/icons/designIcon.svg" type="image/svg+xml">
							</object>
						<h2>
							Design
						</h2>
					</div>
					<div class="col-xs-3 col-md-3 icon">
						<object data="img/icons/wordpressIcon.svg" type="image/svg+xml">
							</object>
						<h2>
							Wordpress
						</h2>
					</div>
					<div class="clearfix visible-xs"></div>
					<div class="col-xs-3 col-md-3 icon">
						<object data="img/icons/seoIcon.svg" type="image/svg+xml">
							</object>
						<h2>
							SEO
						</h2>
					</div>
					<div class="col-xs-3 col-md-3 icon">
						<object data="img/icons/advertisingIcon.svg" type="image/svg+xml">
							</object>
						<h2>
							Advertising
						</h2>
					</div>
				</div><!--end row-->
				<div class="row icon_row flip-in-x">
					<div class="col-xs-3 col-md-3 icon">
						<object data="img/icons/brandingIcon.svg" type="image/svg+xml">
							</object>
						<h2>
							Branding
						</h2>
					</div>
					<div class="col-xs-3 col-md-3 icon">
						<object data="img/icons/socialMediaIcon.svg" type="image/svg+xml">
							</object>
						<h2>
							Social Media
						</h2>
					</div>
					<div class="clearfix visible-xs"></div>
					<div class="col-xs-3 col-md-3 icon">
						<object data="img/icons/ecommerceIcon.svg" type="image/svg+xml">
							</object>
						<h2>
							E-Commerce
						</h2>
					</div>
					<div class="col-xs-3 col-md-3 icon">
						<object data="img/icons/maintenanceIcon.svg" type="image/svg+xml">
							</object>
						<h2>
							Maintenance
						</h2>
					</div>
				</div><!--end row-->
				<div class="col-xs-5 col-sm-offset-4 pie_chart roll-in">
					<object data="img/skills_chart.svg" type="image/svg+xml">
						</object>
				</div>
			</div><!--end container-->
		</div><!--end skills-->
		<div id="contact" class="page-section section">
			<div class="container">
				<h1 class="fade">
					Like What You See? Hire Me!
				</h1>
				<div class="row" id="thanks">
					<div class="col-sm-12 center">
						<h2>
							Thank you for the message!
						</h2>
						<p>
							I will be in touch soon
						</p><img id='checkmark' src='img/accepted_48.png'>
					</div>
				</div><!--end thanks-->
				<!--CONTACT FORM-->
				<div class="col-md-12 contact-section fade" id="contact-form">
					<?php  
							//init variables  
							$cf = array();  
							$sr = false;  

							if(isset($_SESSION['cf_returndata'])){  
							$cf = $_SESSION['cf_returndata'];  
							$sr = true;  
							}  
							?>
					<ul id="errors" class="<?php echo ($sr && !$cf['form_ok']) ? 'visible' : ''; ?>">
						<li id="info">There were some problems with your form submission:
						</li><?php   
								if(isset($cf['errors']) && count($cf['errors']) > 0) :  
								foreach($cf['errors'] as $error) :  
								?>
						<li>
							<?php echo $error ?>
						</li><?php  
								endforeach;  
								endif;  
								?>
					</ul>
					<p id="success" class="<?php echo ($sr && !$cf['form_ok']) ? 'visible' : ''; ?>">
						Thanks for your message! I will be in touch soon
					</p>
					<form action="" class="form-horizontal" method="post">
						<div class="form-group">
							<label for="inputName" class="col-sm-4 control-label"><span class="required">*</span>Name</label>
							<div class="col-sm-4 controls">
								<input type="text" class="form-control" id="inputName" name="inputName" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['inputName'] : '' ?>" placeholder="John Doe" required="">
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail" class="col-sm-4 control-label"><span class="required">*</span>Email</label>
							<div class="col-sm-4">
								<input type="email" class="form-control" id="inputEmail" name="inputEmail" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['inputEmail'] : '' ?>" placeholder="johndoe@example.com" required="">
							</div>
						</div>
						<div class="form-group">
							<label for="inputPhone" class="col-sm-4 control-label">Phone</label>
							<div class="col-sm-4">
								<input type="tel" class="form-control" id="inputPhone" name="inputPhone" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['inputPhone'] : '' ?>" placeholder="XXX-XXX-XXXX">
							</div>
						</div>
						<div class="form-group">
							<label for="inputMsg" class="col-sm-4 control-label"><span class="required">*</span>Message</label>
							<div class="col-sm-4">
								<textarea class="form-control" id="inputMsg" name="inputMsg" rows="4" placeholder="Ex. 'You MUST come work for me...'" required="" data-minlength="20">
<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['inputMsg'] : '' ?>
</textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-4 col-sm-4">
								<span id="loading"></span> <input type="submit" value="Send" class="btn btn-default" id="submit-button">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-4 col-sm-4">
								<p id="req-field-desc">
									<span class="required">*</span> indicates a required field
								</p>
							</div>
						</div>
					</form><?php unset($_SESSION['cf_returndata']); ?>
				</div><!--End contact-form-->
				<div class="row sm_row">
					<div class="col-xs-6 col-sm-3 col-md-3 roll-in">
						<object data="img/social_media/facebook.svg" type="image/svg+xml">
							</object>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-3 roll-in">
						<object data="img/social_media/twitter.svg" type="image/svg+xml">
							</object>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-3 roll-in">
						<object data="img/social_media/linked_in.svg" type="image/svg+xml">
							</object>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-3 roll-in">
						<object data="img/social_media/pinterest.svg" type="image/svg+xml">
							</object>
					</div>
				</div>
				<div class="row sm_row">
					<div class="col-xs-12">
						<span class="roll-in" style="font-size: 11px; font-family:Arial, Helvetica, sans-serif; display: inline-block; text-align: center; width: 125px;"><a title="J.J. Design" href="http://www.thumbtack.com/J-J-Design-Charleston-SC/service/817187" style="background: none; padding:0; border:0;"><img src="http://cdn-1.thumbtackstatic.com/media/badge_gold.png" style="display: block; margin-bottom: 6px; border: 0;" id="thumbtack" target="_blank"></a></span>
					</div>
				</div><!--end container->
		</div>



		<!- Bootstrap core JavaScript -->
				<script type="text/javascript" src="js/bootstrap.js"></script>
				<script type="text/javascript" src="js/modernizr-2.8.3.min.js"></script> <!-- Bootstrap JS is not required, but included for the responsive demo navigation and button states -->
				<script src="js/jquery.blueimp-gallery.min.js" type="text/javascript"></script>
				<script src="js/bootstrap-image-gallery.js" type="text/javascript"></script>
				<script src="js/script.js" type="text/javascript"></script>
				<script src="js/animations.js" type="text/javascript"></script>
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						// navigation click actions 
						$('.scroll-link').on( 'click', function(event){

							event.preventDefault();
							var sectionID = $(this).attr("data-id");
							scrollToID('#' + sectionID, 750);

						});

						// scroll to top action
						$('.scroll-top').on('click', function(event) {
							event.preventDefault();
							$('html, body').animate({scrollTop:0}, 'slow');      
						});

						// mobile nav toggle
						$('#navbar-toggle').on('click', function(event) {
							event.preventDefault();
							$('#main-nav').toggleClass('open');
						})
					});

					// $('.navbar-collapse').click('li', function() {
					// 	$('.navbar-collapse').collapse('hide');
					// });
					
				</script> 
				<script type="text/javascript">
					document.getElementById('links').onclick = function (event) {
						event = event || window.event;
						var target = event.target || event.srcElement,
						link = target.src ? target.parentNode : target,
						options = {index: link, event: event},
						links = this.getElementsByTagName('a');
						blueimp.Gallery(links, options);
					};
			</script>
			</div>
		</div>
	</body>
</html>