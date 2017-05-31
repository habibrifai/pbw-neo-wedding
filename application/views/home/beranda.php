<!-- <!DOCTYPE html> -->
<html lang="en">
	<head>
	<title>Neo Wedding Organizer</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">
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
							<li><a href="<?php echo base_url()?>" class ="beranda active">BERANDA</a></li>
							<li><a href="<?php echo base_url().'Home/Galeri'?>">GALERI</a></li>
							<li><a href="<?php echo base_url().'Home/Artikel'?>">ARTIKEL</a></li>
							<li><a class="one-page" href="#kontak-neo">KONTAK</a></li>
						</ul>
					</div>
			</nav>

			<div id = "newCarousel" class="carousel fade-carousel carousel-fade slide" data-interval="6000" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#newCarousel" data-slide-to ="0" class="active"></li>
					<li data-target="#newCarousel" data-slide-to ="1" ></li>
					<li data-target="#newCarousel" data-slide-to ="2" ></li>
				</ol>
				<div class="carousel-inner slider carousel-zoom" >

					<header class="intro">
						<div class="intro-body">
							<div class="container">
								<div class="row">
									<div class="col-md-8 col-md-offset-2">
											<h1 class="brand-heading animated fadeInDown">NEO WEDDING ORGANIZER</h1>
											<p class="intro-text animated fadeInUp">We have ideas to be combinated with our client's idea to make a beyond imagination wedding</p>
											<a href="#about" class="btn btn-circle animated fadeInDown">
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
				  <div class="col-sm-6"><img class="img-responsive center-block animated" src="<?php echo base_url("img/trusted.png"); ?>"></div>
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

		<div class="lihat-galeri">
			<div class="col-sm-6 col-foto-galeri ">
			</div>
			<div class="col-sm-6 col-kunjungi-galeri">
				<p class="text-center">Kunjungi Galeri Kami<br><br><br><br><br><br></p>
				<p><a href="<?php echo base_url().'Home/Galeri'?>" class="tombol btn-galeri"><span>GALERI   </span><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></p>
			</div>
		</div>

		<section class="row testimonial text-center">
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
      <div class="text-center">
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
						<a>
							<div class="card-front"><i class="fa fa-phone" aria-hidden="true"></i></div>
							<div class="card-back">082132291570</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="card no-wa">
						<a>
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
      <div class="text-center">
        <h2 class="title-center"><strong>Kirim Pesan</strong></h2>
      </div>
			<?php if($this->session->flashdata('error')) { ?>
                <div class='alert alert-danger text-center'><?php echo $this->session->flashdata('error'); ?></div>
            <?php } else if($this->session->flashdata('success')) { ?>
                <div class='alert alert-success text-center'><?php echo $this->session->flashdata('success'); ?></div>
            <?php } ?>

			<form role="form" method="post" action="<?php echo base_url().'Home/Kontak/sendMessage'?>">
				<div class="row">
				  	<div class="form-group col-md-6 col-sm-12">
						<label>Name</label>
						<input type="text" name="nama" class="form-control">
					</div>
					<div class="form-group col-md-6 col-sm-12">
						<label>Email</label>
						<input type="text" name="email" class="form-control">
					</div>
					<div class="form-group col-md-12">
						<label>Pesan</label>
						<textarea type="text" name="pesan" class="form-control" rows="7"></textarea>
					</div>
					<div class="form-group col-md-12">
						<input type="submit" class="btn btn-default" value="Kirim">
					</div>
				</div>
			</form>
    </section>
		<section class="lokasi">
			<div class="container text-center">
        <h2 class="title-center"><strong>Lokasi Kantor</strong></h2>
      </div>

			<h3 class="text-center">Jalan Kapasan Kidul 1 no 7 Simokerto, Surabaya</h3>
			<div class="container" id="map">
			</div>
		</section>
    <?php require 'footer.php'; ?>
		<a id="return-to-top"><i class="fa fa-chevron-up"></i></a>

	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.2.1.min.js'); ?>"></script>
	<script src="<?php echo base_url().'assets/admin_bootstrap/vendor/bootstrap/js/bootstrap.min.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/beranda-js.js'); ?>"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPJiSH4BYDIXjSAIYj5kX5bO88hbg6RV4&callback=initMap"
  type="text/javascript"></script>


	</body>

</html>
