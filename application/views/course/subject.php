<?php $this->load->view("include/doctype.php") ?>
<html lang="en">
<head>
	<?php $this->load->view("include/incmeta.php") ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/subject.css?v='.version) ?>">
</head>
<body>
	<div class="wrapper">
		
		<?php $this->load->view("include/sidebar.php") ?>

		<div id="content">
			<?php $this->load->view("include/header.php") ?>

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

			<section id="main-content" class="my-5">
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
						<?php for ($x = 0; $x <= 4; $x++) {?>
							<div class="col-lg-2dot4 col-md-4 col-sm-4 col-6 mt-4">
								<div class="card-item">
									<a href="<?php echo gDomainCourseDetail ?>">
										<img src="<?php echo gDomainFiles ?>/files/courses/1/images/img/1.png" class="img-fluid" alt="">
										<div class="p-3">
											<p>Strategy and Perfomance Execution Excellence (SPEx2) For Line Manager</p>
											<p class="author">LUTAN EDUKASI</p>
											<div class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<span class="rating-text">4,7 (13)</span>
											</div>
											<p class="info-status my-3">Free course</p>
										</div>
									</a>
								</div>
							</div>
							<div class="col-lg-2dot4 col-md-4 col-sm-4 col-6 mt-4">
								<div class="card-item">
									<a href="<?php echo gDomainCourseDetail ?>">
										<img src="<?php echo base_url('assets/img/course/course-2.png') ?>" class="img-fluid" alt="">
										<div class="p-3">
											<p>Konsep Adaptive Learning Design Dengan Menggunakan BLOOMS TAXONOMY MODELS</p>
											<p class="author">GML Consulting</p>
											<div class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<span class="rating-text">4,7 (13)</span>
											</div>
											<p class="info-status my-3">Free course</p>
										</div>
									</a>
								</div>
							</div>
							<div class="col-lg-2dot4 col-md-4 col-sm-4 col-6 mt-4">
								<div class="card-item">
									<a href="<?php echo gDomainCourseDetail ?>">
										<img src="<?php echo base_url('assets/img/course/course-3.png') ?>" class="img-fluid" alt="">
										<div class="p-3">
											<p>The Complete Web Developer Course 2.0</p>
											<p class="author">LUTAN EDUKASI</p>
											<div class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<span class="rating-text">4,7 (13)</span>
											</div>
											<p class="info-status my-3">Free course</p>
										</div>
									</a>
								</div>
							</div>
							<div class="col-lg-2dot4 col-md-4 col-sm-4 col-6 mt-4">
								<div class="card-item">
									<a href="<?php echo gDomainCourseDetail ?>">
										<img src="<?php echo base_url('assets/img/course/course-4.png') ?>" class="img-fluid" alt="">
										<div class="p-3">
											<p>Build Responsive Real World Websites with HTML5 and CSS3</p>
											<p class="author">GML Consulting</p>
											<div class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<span class="rating-text">4,7 (13)</span>
											</div>
											<p class="info-status my-3">Free course</p>
										</div>
									</a>
								</div>
							</div>
							<div class="col-lg-2dot4 col-md-4 col-sm-4 col-6 mt-4">
								<div class="card-item">
									<a href="<?php echo gDomainCourseDetail ?>">
										<img src="<?php echo base_url('assets/img/course/course-5.png') ?>" class="img-fluid" alt="">
										<div class="p-3">
											<p>Photography Masterclass: A Complete Guide to Photography</p>
											<p class="author">LUTAN EDUKASI</p>
											<div class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<span class="rating-text">4,7 (13)</span>
											</div>
											<p class="info-status my-3">Free course</p>
										</div>
									</a>
								</div>
							</div>
							<div class="col-lg-2dot4 col-md-4 col-sm-4 col-6 mt-4">
								<div class="card-item">
									<a href="<?php echo gDomainCourseDetail ?>">
										<img src="<?php echo base_url('assets/img/course/course-6.png') ?>" class="img-fluid" alt="">
										<div class="p-3">
											<p>Yoast SEO: Write a SEO Optimized Articles in 10 Minutes</p>
											<p class="author">GML Consulting</p>
											<div class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<span class="rating-text">4,7 (13)</span>
											</div>
											<p class="info-status my-3">Free course</p>
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
								<div id="search-bottom-container"></div>
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

			<?php $this->load->view("include/footer.php") ?>
		</div>

		<div class="main-overlay"></div>
	</div>
	<?php $this->load->view("include/incjs.php") ?>
	<script type="text/javascript" src="<?php echo base_url('assets/js/subject.js?v='.version) ?>"></script>
</body>
</html>
