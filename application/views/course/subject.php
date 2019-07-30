<?php $this->load->view("include/doctype.php") ?>
<html lang="en">
<head>
	<?php $this->load->view("include/incmeta.php") ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/subject.css?v='.version) ?>">
</head>
<body>
	<?php $this->load->view("include/header.php") ?>
	<div class="main-content">
		<section id="main-slide-3">
			<div>
				<div class="title">
					<div class="container">
						<div class="row">
							<p class="col-12">Pelatihan</p>
							<p class="col-12">Pelajari tentang pelatihan..</p>
						</div>
					</div>
				</div>
				<div class="overlay"></div>
			</div>
		</section>

		<section id="breadcrumb-container">
			<div class="container">
				<div class="row">
					<div class="col-12 px-0">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?php echo gDomainName ?>"><i class="ti-home"></i></a></li>
								<li class="breadcrumb-item"><a href="<?php echo gDomainCourse ?>">Semua Kursus</a></li>
								<li class="breadcrumb-item active" aria-current="page">Pelatihan</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</section>

		<section id="content" class="my-5">
			<div class="container">
				<div class="row">
					<div class="col-12 subject-title">
						<div class="float-left">
							<p>Topik Terkait - Pelatihan</p>
							<div class="dropdown">
								<p data-toggle="dropdown"><i class="ti-angle-down"></i> Urutkan</p>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Rating Tertinggi</a>
									<a class="dropdown-item" href="#">Popularitas</a>
									<a class="dropdown-item" href="#">Terbaru</a>
									<a class="dropdown-item" href="#">Harga Terendah</a>
									<a class="dropdown-item" href="#">Harga Tertinggi</a>
								</div>
							</div>
						</div>
						<a class="btn btn-primary float-right" href="<?php echo gDomainCourse ?>">Lihat Semua Kursus</a>
					</div>

					<div class="row card-view">
					<?php for ($x = 0; $x <= 5; $x++) {?>
						<div class="col-md-2dot4 col-sm-3 col-6 mt-4">
							<div class="card-item">
								<a href="<?php echo gDomainCourseDetail ?>">
									<img src="<?php echo base_url('assets/img/card-1.png') ?>" class="img-fluid" alt="">
									<div class="p-3">
										<p>Coaching</p>
										<p>Teasing - minutes activities</p>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-2dot4  col-sm-3 col-6 mt-4">
							<div class="card-item">
								<a href="<?php echo gDomainCourseDetail ?>">
									<img src="<?php echo base_url('assets/img/card-2.png') ?>" class="img-fluid" alt="">
									<div class="p-3">
										<p>Coaching</p>
										<p>Teasing - minutes activities</p>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-2dot4 col-sm-3 col-6 mt-4">
							<div class="card-item">
								<a href="<?php echo gDomainCourseDetail ?>">
									<img src="<?php echo base_url('assets/img/card-1.png') ?>" class="img-fluid" alt="">
									<div class="p-3">
										<p>Coaching</p>
										<p>Teasing - minutes activities</p>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-2dot4  col-sm-3 col-6 mt-4">
							<div class="card-item">
								<a href="<?php echo gDomainCourseDetail ?>">
									<img src="<?php echo base_url('assets/img/card-2.png') ?>" class="img-fluid" alt="">
									<div class="p-3">
										<p>Coaching</p>
										<p>Teasing - minutes activities</p>
									</div>
								</a>
							</div>
						</div>
					<?php } ?>
					</div>
				</div>
			</div>
		</section>

		<section id="search-more">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="text-center search-more-container">
							<p>Masih mencari? Cari semua program kami</p>
							<form class="form-search">
								<div><input type="text" id="autocomplete_search_bottom" placeholder="Cari"><i class="ti-search"></i></div>
							</form>
							<div id="search-container"></div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="load-more">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="text-center">
							<a class="btn btn-primary" href="<?php echo gDomainCourse ?>">Lihat Semua Kursus</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<?php $this->load->view("include/footer.php") ?>
	<script type="text/javascript" src="<?php echo base_url('assets/js/subject.js') ?>"></script>
</body>
</html>
