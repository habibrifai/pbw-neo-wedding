<!DOCTYPE html>
<html lang="en">
	<head>

		<title>Neo Wedding Organizer</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?php echo base_url().'assets/admin_bootstrap/vendor/bootstrap/css/bootstrap.css' ?>" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo base_url("assets/admin_bootstrap/vendor/bootstrap/css/bootstrap.min.css"); ?>" />
		<link rel="stylesheet" href="<?php echo base_url("assets/css/beranda-style.min.css"); ?>" />
		<link rel="stylesheet" href="<?php echo base_url("assets/css/animate.css"); ?>" />
		<link href="<?php echo base_url().'assets/admin_bootstrap/vendor/font-awesome/css/font-awesome.min.css'?>" type="text/css" rel="stylesheet">
      	<link rel="stylesheet" href="<?php echo base_url("assets/css/lightbox.css"); ?>" />

	</head>
	<body>
		<section>
			<nav class = "navbar navbar-transparent navbar-inverse navbar-fixed-top animated fadeIn">
					<div class="navbar-header">
						<img class="navbar-brand" src="<?php echo base_url("img/logo.png"); ?>">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
							<span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse navHeaderCollapse">
						<ul class ="nav navbar-nav navbar-right">
              			<li><a href="<?php echo base_url()?>" >BERANDA</a></li>
							<li><a href="<?php echo site_url().'Home/Galeri'?>">GALERI</a></li>
							<li><a href="<?php echo site_url().'Home/Artikel'?>">ARTIKEL</a></li>
							<li><a href="<?php echo site_url().'Home/Kontak'?>" class ="active">KONTAK</a></li>
						</ul>
					</div>
			</nav>

			<div id = "newCarousel" class="carousel slide" >
				<ol class="carousel-indicators">
					<li data-target="#newCarousel" data-slide-to ="0" class="active"></li>
					<li data-target="#newCarousel" data-slide-to ="1" ></li>
					<li data-target="#newCarousel" data-slide-to ="2" ></li>
				</ol>
				<div class="carousel-inner" >
					<div class="item active img1">
					</div>
					<div class="item img2">
					</div>
					<div class="item img3">
					</div>
			  </div>
				<a class="carousel-control left" href="#newCarousel" data-slide="prev">
					<span class ="icon-prev"></span>
				</a>
				<a class="carousel-control right" href="#newCarousel" data-slide="next">
					<span class ="icon-next"></span>
				</a>
			</div>
		</section>

	<section id="kon" class=kontak>
      <div class="container text-center garis">
        <h2 class="title-center"><strong>Hubungi Kami</strong></h2>
      </div>
			<div class="row">
			  <div class="col-md-3 col-sm-6">
					<div class="card facebook">
						<a href="https://www.facebook.com/neo.event.wedding.organizer">
							<div class="card-front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							<div class="card-back">Kunjungi Facebook Kami</div>
						</a>
					</div>
				</div>
			  <div class="col-md-3 col-sm-6">
					<div class="card no-hp">
						<a href="#">
							<div class="card-front"><i class="fa fa-phone" aria-hidden="true"></i></div>
							<div class="card-back">082132291570</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="card no-wa">
						<a href="#">
							<div class="card-front"><i class="fa fa-whatsapp" aria-hidden="true"></i></div>
							<div class="card-back">0851 0301 3553</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="card instagram">
						<a href="https://www.instagram.com/neo.organizer/">
							<div class="card-front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
							<div class="card-back">Kunjungi Instagram Kami</div>
						</a>
					</div>
				</div>
			</div>
    </section>

		<section class="container pesan">
      <div class="text-center garis">
        <h2 class="title-center"><strong>Kirim Pesan</strong></h2>
      </div>
			<form>
				<div class="row">
				  <div class="form-group col-md-6 col-sm-12">
						<label>Name</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group col-md-6 col-sm-12">
						<label>Email</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group col-md-12">
						<label>Pesan</label>
						<textarea type="text" class="form-control" rows="7"></textarea>
					</div>
					<div class="form-group col-md-12">
						<input type="hidden" name="save" value="submit">
						<button type="submit" class="btn btn-default">Kirim</button>
					</div>
				</div>
			</form>
    </section>
		<section class="footer text-center">
			<footer id="footer" class="dark">
				<div class="container ">

					<!-- Footer Widgets
					============================================= -->
					<div class="footer-widgets-wrap clearfix">

						<div class="col_two_third">

							<div class="widget clearfix">

								<img src="http://wemary.com/web1/images/footer-widget-logo.png" alt="" class="alignleft" style="margin-top: 8px; padding-right: 18px; border-right: 1px solid #4A4A4A;">

								<p>Kami percaya, pernikahan merupakan momen spesial yang patut untuk diabadikan. Ciptakan website pernikahan terintegrasi, dengan <strong>Wemary</strong>.</p>

								<div class="line" style="margin: 30px 0;"></div>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<footer id="footer" class="dark">

        <!-- Copyrights
            ============================================= -->
            <div id="copyrights">

                <div class="container clearfix">

                    <div class="col_half">
                        <div class="copyrights-menu copyright-links clearfix ">
                            <a href="#!">Beranda</a>/<a href="#">Galeri</a>/<a href="http://wemary.com/faq">Kontak</a>/<a href="http://blog.wemary.com" target="_blank">Artikel</a>
                        </div>
                        Copyrights &copy; 2017 All Rights Reserved by WatdelulArmy
                    </div>
                </div>

            </div><!-- #copyrights end -->

        </footer>
		</section>
		<a  id="return-to-top"><i class="fa fa-chevron-up"></i></a>

		<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-3.2.1.min.js"); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url("assets/admin_bootstrap/vendor/bootstrap/js/bootstrap.js"); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url("assets/js/beranda-js.js"); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.stellar.js"); ?>"></script>
    	<script type="text/javascript" src="<?php echo base_url("assets/js/lightbox.js"); ?>"></script>
	</body>
</html>

<script type="text/javascript">

	$(function(){
    $('html, body').animate({
        scrollTop: $('#kon').offset().top
    }, 900);
    return false;
});


</script>