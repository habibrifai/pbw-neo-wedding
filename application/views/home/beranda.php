<!-- <!DOCTYPE html> -->
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
			<nav class = "navbar navbar-transparent navbar-inverse navbar-fixed-top animated fadeIn fadeInDown">
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
							<li><a href="<?php echo base_url()?>" class ="active">BERANDA</a></li>
							<li><a href="<?php echo base_url().'Home/Galeri'?>">GALERI</a></li>
							<li><a href="<?php echo base_url().'Home/Artikel'?>">ARTIKEL</a></li>
							<li><a class="link-kontak" href="#kontak-neo">KONTAK</a></li>
						</ul>
					</div>
			</nav>

			<div id = "newCarousel" class="carousel fade-carousel carousel-fade slide" data-interval="4000" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#newCarousel" data-slide-to ="0" class="active"></li>
					<li data-target="#newCarousel" data-slide-to ="1" ></li>
					<li data-target="#newCarousel" data-slide-to ="2" ></li>
				</ol>
				<div class="carousel-inner slider" >

					<header class="intro">
						<div class="intro-body">
							<div class="container">
								<div class="row">
									<div class="col-md-8 col-md-offset-2">
											<h1 class="brand-heading animated fadeInDown">NEO WEDDING ORGANIZER</h1>
											<p class="intro-text animated fadeInUp">We have ideas to be combinated with our client's idea to make a beyond imagination wedding</p>
											<a href="#about" class="btn btn-circle page-scroll animated fadeInDown">
													<i class="fa fa-angle-double-down animated"></i>
											</a>
									</div>
								</div>
							</div>
						</div>
					</header>
					<div class="item active img1">
					</div>
					<div class="item img2">
					</div>
					<div class="item img3">
					</div>
					<a class="carousel-control left" href="#newCarousel" data-slide="prev">
						<span class ="icon-prev"></span>
					</a>
					<a class="carousel-control right" href="#newCarousel" data-slide="next">
						<span class ="icon-next"></span>
					</a>
			  </div>

			</div>
		</section>
		<div class="container">
			<div id="about" class="container-fluid">
				<div class="row row1">
				  <div class="col-sm-6"><img class="img-responsive center-block img-col1row1 animated" src="<?php echo base_url("img/trusted.png"); ?>"></div>
				  <div class="col-sm-6 col" >
						<p class="text-center"><span class="text-center garis">Trusted & Reliable<br></span>Percayakanlah pesta pernikahan anda kepada kami, karena kami terpercaya dan dapat diandalkan</p>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row row2">
					<div class="col-sm-6 col" >
						<p class="text-center"><span class="text-center garis">Precise & Responsive<br></span>Kami mengerjakan semua hal dengan tepat dan mudah untuk beradaptasi</p>
					</div>
				  <div class="col-sm-6"><img class="img-responsive center-block img-col1row1 animated fadeInLeft" src="<?php echo base_url("img/precise.png"); ?>"></div>
				</div>
			</div>
		</div>



		<div class="row text-center layanan">
			<h3>Layanan Kami</h3>
			<div class="col-md-4 col-sm-6">
				<div class="thumbnail">
					<img class="img-responsive" src="<?php echo base_url("img/services/wedding-planner.png"); ?>">
					<div class="caption">
						<p class="text-center">Wedding Planner</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="thumbnail">
					<img class="img-responsive" src="<?php echo base_url("img/services/decoration.png"); ?>">
					<div class="caption">
						<p class="text-center">Decoration</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="thumbnail">
					<img class="img-responsive" src="<?php echo base_url("img/services/equipment.png"); ?>">
					<div class="caption">
						<p class="text-center">Wedding Equipment</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="thumbnail">
					<img class="img-responsive" src="<?php echo base_url("img/services/sound-system.png"); ?>">
					<div class="caption">
						<p class="text-center">Sound System</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="thumbnail">
					<img class="img-responsive" src="<?php echo base_url("img/services/mc.png"); ?>">
					<div class="caption">
						<p class="text-center">MC</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="thumbnail">
					<img class="img-responsive" src="<?php echo base_url("img/services/video-photo.png"); ?>">
					<div class="caption">
						<p class="text-center">Video & Photo</p>
					</div>
				</div>
			</div>
		</div>

		<div class="row lihat-galeri">
			<div class="col-sm-6 col-lihat-galeri ">
				<img class="img-responsive" src="<?php echo base_url("img/lihat-galeri.jpg"); ?>">
			</div>
			<div class="col-sm-6 col">
				<p class="text-center">Kunjungi Galeri Kami<br><br>
				<a href="#" class="tombol btn-galeri"><span>GALERI</span></a></p>
			</div>
		</div>

		<section class="testimonial text-center">
			<div class="container">
				<h1>Apa Kata Client Kami?</h1>
				<div id="carousel-testimonial" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner testi" >
						<div class="item active">
							<p class="lead"><i>"Dengan adanya wedding planner ini, jadi gak perlu mikir-mikir lagi buat pesta pernikahanku"</i></p>
							<span>Nama Testi 1</span>
						</div>
						<div class="item">
							<p class="lead"><i>"Viral wayfarers offal vegan, gentrify kinfolk bespoke. Cronut tattooed typewriter, locavore PBR&B man braid authentic drinking vinega"</i></p>
							<span>Nama Testi 2</span>
						</div>
						<div class="item">
							<p class="lead"><i>"Viral wayfarers offal vegan, gentrify kinfolk bespoke. Cronut tattooed typewriter, locavore PBR&B man braid authentic drinking vinega"</i></p>
							<span>Nama Testi 3</span>
						</div>
						<div class="item">
							<p class="lead"><i>"Viral wayfarers offal vegan, gentrify kinfolk bespoke. Cronut tattooed typewriter, locavore PBR&B man braid authentic drinking vinega"</i></p>
							<span>Nama Testi 4</span>
						</div>
					</div>
					<ol class="carousel-indicators">
						<li data-target="#carousel-testimonial" data-slide-to ="0" class="active">
							<img src="<?php echo base_url("img/testimoni/avatar_01.jpg")?>"/>
						</li>
						<li data-target="#carousel-testimonial" data-slide-to ="1" >
							<img src="<?php echo base_url("img/testimoni/avatar_02.jpg")?>"/>
						</li>
						<li data-target="#carousel-testimonial" data-slide-to ="2" >
							<img src="<?php echo base_url("img/testimoni/avatar_03.jpg")?>"/>
						</li>
						<li data-target="#carousel-testimonial" data-slide-to ="3" >
							<img src="<?php echo base_url("img/testimoni/avatar_04.jpg")?>"/>
						</li>
					</ol>
				</div>
			</div>
		</section>
		<section id="kontak-neo" class="kontak">
      <div class="container text-center garis">
        <h2 class="title-center"><strong>Hubungi Kami</strong></h2>
      </div>
			<div class="row container-fluid">
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
							<div class="card-back">085103013553</div>
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
		<section class="text-center">
			<footer id="footer" class="dark">
				<div class="container ">

					<!-- Footer Widgets
					============================================= -->
					<div class="footer-widgets-wrap clearfix">

						<div class="col_two_third">

							<div class="widget clearfix">
								<p>ALL YOU NEED IS LOVE<br> AND<br> A WEDDING PLANNER</p>
								<div class="line" style="margin: 30px 0;"></div>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<footer id="footer" class="dark">
          <div id="copyrights">

              <div class="container clearfix">

                  <div class="col_half">
                      <div class="copyrights-menu copyright-links clearfix ">
                          <a href="#">Beranda</a>/<a href=""<?php echo base_url().'Home/Galeri'?>"">Galeri</a>/<a href="<?php echo base_url().'Home/Artikel'?>">Artikel</a>/<a class="link-kontak" href="#kontak-neo">Kontak</a>
                      </div>
                      Copyrights &copy; 2017 All Rights Reserved by WatdelulArmy
                  </div>
              </div>

          </div>
      </footer>
		</section>
		<a id="return-to-top"><i class="fa fa-chevron-up"></i></a>

	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.2.1.min.js'); ?>"></script>
	<script src="<?php echo base_url().'assets/admin_bootstrap/vendor/bootstrap/js/bootstrap.min.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/beranda-js.js'); ?>"></script>

	</body>

</html>
