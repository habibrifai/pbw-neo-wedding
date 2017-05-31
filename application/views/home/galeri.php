<html lang="en">
	<head>
		  <title>Neo Wedding Organizer</title>
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
							<li><a href="<?php echo site_url().'Home/Galeri'?>" class ="active">GALERI</a></li>
							<li><a href="<?php echo site_url().'Home/Artikel'?>">ARTIKEL</a></li>
							<li><a class="link-kontak" href="<?php echo site_url().'#kontak-neo'?>">KONTAK</a></li>
						</ul>
					</div>
			</nav>
		</section>

		<section class=galeri>
			<div class="container">
        <h1 class="text-center uppercase"><br><strong>Galeri</strong></h1>
        <di v class="row ">
        <?php foreach($gallery as $b){ ?>
	          <div class="col-xs-12 col-sm-6 col-md-4">
							<div class="img-wrapper animated fadeInUp">
		            <a href="<?php echo base_url().'img/gambar/'.$b->gambar ?>" data-lightbox="gallery">
									<img class="img-responsive" src="<?php echo base_url().'img/gambar/'.$b->gambar ?>">
									<div class="overlay">
										<div>
											<span><i class="fa fa-search-plus" aria-hidden="true"></i></span>
											<h4><?php echo $b ->judul;?></h4>
										</div>
									</div>
								</a>
							</div>
	          </div>
	    	<?php } ?>
        </div>
			</div>
			<div class="row">
        <div class="col-md-12 text-center">
            <?php echo $links; ?>
        </div>
    	</div>
		<?php require 'footer.php'; ?>
		<a  id="return-to-top"><i class="fa fa-chevron-up"></i></a>
	</body>
</html>
