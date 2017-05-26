
<html lang="en">
	<head>
		  <title>Neo Wedding Organizer</title>
			<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
			<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
			<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
			<link rel="stylesheet" href="<?php echo base_url("assets/css/beranda-style.min.css"); ?>" />
			<link rel="stylesheet" href="<?php echo base_url("assets/css/animate.css"); ?>" />
			<link href="<?php echo base_url().'assets/admin_bootstrap/vendor/font-awesome/css/font-awesome.min.css'?>" type="text/css" rel="stylesheet">
      <link rel="stylesheet" href="<?php echo base_url("assets/css/lightbox.css"); ?>" />

      <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-3.2.1.min.js"); ?>"></script>
			<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
			<script type="text/javascript" src="<?php echo base_url("assets/js/beranda-js.js"); ?>"></script>
    	<script type="text/javascript" src="<?php echo base_url("assets/js/lightbox.js"); ?>"></script>

	</head>
	<body>
		<section>
			<nav class = "navbar navbar-transparent navbar-inverse navbar-fixed-top animated fadeIn">
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
							<li><a href="<?php echo site_url().'Home/Galeri'?>" class ="active">GALERI</a></li>
							<li><a href="<?php echo site_url().'Home/Artikel'?>">ARTIKEL</a></li>
							<li><a href="<?php echo site_url().'Home/Kontak'?>">KONTAK</a></li>
						</ul>
					</div>
			</nav>

			<div id = "newCarousel" class="carousel slide" >
				<ol class="carousel-indicators">
					<li data-target="#newCarousel" data-slide-to ="0" class="active"></li>
					<li data-target="#newCarousel" data-slide-to ="1" ></li>
					<li data-target="#newCarousel" data-slide-to ="2" ></li>
				</ol>
				<div class="carousel-inner slider" >
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

		<section class=galeri>
			<div class="container">
        <h1 class="text-center uppercase"><br><strong>Galeri</strong></h1>
        <div class="row ">
        <?php foreach($gallery as $b){ ?>
	          <div class="col-xs-6 col-md-4">
							<div class="img-wrapper">
		            <a href="<?php echo base_url().'img/gambar/'.$b->gambar ?>" data-lightbox="gallery">
									<img class="img-responsive" src="<?php echo base_url().'img/gambar/'.$b->gambar ?>">
									<div class="overlay">
										<diV>
											<span><i class="fa fa-search-plus" aria-hidden="true"></i></span>
											<h4><?php echo $b ->judul;?></h4>
										</div>
									</div>
								</a>
							</div>
	          </div>
	    	<?php } ?>
					<!-- <p><?php echo $links; ?></p> -->
        </div>
			</div>
			<div class="row">
        <div class="col-md-12 text-center">
            <?php echo $links; ?>
            <!-- <?php echo $lol; ?> -->
        </div>
    	</div>
			<!-- <nav aria-label="Page navigation">
				<div class="text-center">
				  <ul class="pagination">
				    <li class="disabled">
				      <a href="#" aria-label="Previous">
				        <span aria-hidden="true">&laquo;</span>
				      </a>
				    </li>
				    <li><a href="#">1</a></li>
				    <li><a href="#">2</a></li>
				    <li><a href="#">3</a></li>
				    <li><a href="#">4</a></li>
				    <li><a href="#">5</a></li>
				    <li>
				      <a href="#" aria-label="Next">
				        <span aria-hidden="true">&raquo;</span>
				      </a>
				    </li>
				  </ul>
				</div>
			</nav> -->

    </section>
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
		<a  id="return-to-top"><i class="fa fa-chevron-up"></i></a>
	</body>
</html>
