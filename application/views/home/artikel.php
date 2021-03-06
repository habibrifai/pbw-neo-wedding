<!DOCTYPE html>

<html lang="en">
	<head>
	<title>Neo Wedding Organizer</title>
	<link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Vollkorn" rel="stylesheet">
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
						<a href="<?php echo base_url()?>"><img class="navbar-brand" src="<?php echo base_url("img/NSM-Square.png"); ?>"></a>
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
							<li><a class="link-kontak" href="<?php echo site_url().'#kontak-neo'?>">KONTAK</a></li>
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
					 	 </p><br>
						 <a href="<?php echo base_url().'Home/Artikel/artikelMore/'.$a->no ?>" class="btn btn-primary">Read More</a><br>
					 </div><!-- /.blog-post -->
				 <?php } ?>
			 </div>
		 </div>
	 </div>
	 <div class="row">
        <div class="col-md-12 text-center">
            <?php echo $links; ?>
            <!-- <?php echo $lol; ?> -->
        </div>
     </div>
	 <?php require 'footer.php'; ?>
		<a id="return-to-top"><i class="fa fa-chevron-up"></i></a>

	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.2.1.min.js'); ?>"></script>
	<script src="<?php echo base_url().'assets/admin_bootstrap/vendor/bootstrap/js/bootstrap.min.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/beranda-js.js'); ?>"></script>

	</body>

</html>
