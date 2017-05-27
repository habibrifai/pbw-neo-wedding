<!DOCTYPE html>

<html lang="en">
	<head>
	<title>Neo Wedding Organizer</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo base_url().'assets/admin_bootstrap/vendor/bootstrap/css/bootstrap.css' ?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/beranda-style.min.css' ?>" >
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/animate.css' ?>" >
	<link href="<?php echo base_url().'assets/admin_bootstrap/vendor/font-awesome/css/font-awesome.min.css'?>" type="text/css" rel="stylesheet">

	</head>
	<body>

		<section>
			<nav class = "navbar-default navbar-inverse navbar-fixed-top animated fadeIn">
					<div class="navbar-header">
						<img class="navbar-brand" src="<?php echo base_url("img/NSM-Square.png"); ?>">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
							<span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse navHeaderCollapse">
						<ul class ="nav navbar-nav navbar-right">
							<li><a href="<?php echo base_url()?>" >BERANDA</a></li>
							<li><a href="<?php echo base_url().'Home/Galeri'?>">GALERI</a></li>
							<li><a href="<?php echo base_url().'Home/Artikel'?>" class ="active">ARTIKEL</a></li>
							<li><a href="<?php echo base_url().'Home/Kontak'?>">KONTAK</a></li>
						</ul>
					</div>
			</nav>
		</section>

	 <div class="container text-center">
		 <div class="row">
			 <div class="col-sm-12 blog-main">
				 <?php foreach ($artikel as $a) { ?>
					 <div class="blog-post bordered">
						 <img class="img-responsive img-article" src="<?php echo base_url('img/artikel/'.$a->gambar)?>">
						 <h2 class="judul-blog"><?php echo $a->judul; ?></h2>
						 <p class="blog-post-meta"><?php echo $a->tgl_update; ?></p>
						 <p>
							<?php $isi = $a->isi;
								echo substr($isi, 0, 700)."....";
						 	?>
					 	 </p><br><br>
						 <a href="<?php echo base_url().'Home/Artikel/artikelMore/'.$a->no ?>" class="btn btn-primary">Read More</a><br><br><br><br><br><br>
					 </div><!-- /.blog-post -->
				 <?php } ?>
			 </div>
		 </div>
		</div>
		<section class="text-center">
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
		<a id="return-to-top"><i class="fa fa-chevron-up"></i></a>

	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.2.1.min.js'); ?>"></script>
	<script src="<?php echo base_url().'assets/admin_bootstrap/vendor/bootstrap/js/bootstrap.min.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/beranda-js.js'); ?>"></script>

	</body>

</html>
