<?php $this->load->view("include/doctype.php") ?>
<html lang="en">
<head>
	<?php $this->load->view("include/incmeta.php") ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/my-course.css?v='.version) ?>">
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
								<p class="col-12">Kursus Qu</p>
								<p class="col-12">Semua Kursus</p>
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
									<li class="breadcrumb-item active" aria-current="page">Kursus Qu</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</section>

			<section id="filter" class="mt-5">
				<div class="container">
					<div class="row">
						<div class="col-12 col-sm-8 col-md-9 col-sm-9">
							<form>
								<div class="form-group">
									<label for="sortSelect">Sortir dengan</label>
									<select class="form-control" id="sortSelect" name="sortSelect">
										<option>Baru di akses</option>
										<option>Judul: A-Z</option>
										<option>Judul: Z-A</option>
										<option>Penyelesaian: 0% - 100%</option>
										<option>Penyelesaian: 100% - 0%</option>
									</select>
								</div>
								<div class="form-group">
									<label for="filterSelect">Filter dengan</label>
									<div id="filterSelect">
										<select class="form-control" id="categorySelect" name="categorySelect">
											<option>Semua Kategori</option>
											<option>Design</option>
											<option>Development</option>
											<option>Marketing</option>
										</select>
										<select class="form-control" id="progressSelect" name="progressSelect">
											<option>Sedang berjalan</option>
											<option>Selesai</option>
											<option>Belum dimulai</option>
										</select>
									</div>
								</div>
							</form>
						</div>
						<div class="col-12 col-sm-4 col-md-3 col-lg-3 pull-right">
							<form class="form-search">
								<div><input type="text" id="autocomplete_bottom" placeholder="Cari Kursus Qu"><i class="ti-search"></i></div>
							</form>
							<div id="search-container"></div>
						</div>
					</div>
				</div>
			</section>

			<section id="main-content" class="mb-5">
				<div class="container">
					<div class="row">
						<div class="row card-view">
						<?php for ($x = 0; $x <= 4; $x++) {?>
							<div class="col-lg-2dot4 col-md-4 col-sm-4 col-6 mt-4">
								<div class="card-item">
									<a href="<?php echo gDomainCourseDetail ?>">
										<img src="<?php echo base_url('assets/img/course/course-1.png') ?>" class="img-fluid" alt="">
										<div class="p-3">
											<p>Strategy and Perfomance Execution Excellence (SPEx2) For Line Manager</p>
											<p class="author">LUTAN EDUKASI</p>
											<div class="rating">
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
											</div>
											<div class="detail-bottom">
												<div class="progress mt-2">
													<div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<p class="info-progress my-1">75% complete</p>
												<p class="info-rating mb-2">Leave a Rating</p>
											</div>
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
											</div>
											<div class="detail-bottom">
												<div class="progress mt-2">
													<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<p class="info-progress my-1">25% complete</p>
												<p class="info-rating mb-2">Your Rating</p>
											</div>
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
											</div>
											<div class="detail-bottom">
												<div class="progress mt-2">
													<div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<p class="info-progress my-1">50% complete</p>
												<p class="info-rating mb-2">Your Rating</p>
											</div>
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
												<div class="d-none">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="detail-bottom">
												<div class="progress mt-2">
													<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<p class="info-start my-1">START COURSE</p>
											</div>
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
											</div>
											<div class="detail-bottom">
												<div class="progress mt-2">
													<div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<p class="info-progress my-1">75% complete</p>
												<p class="info-rating mb-2">Leave a Rating</p>
											</div>
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
											</div>
											<div class="detail-bottom">
												<div class="progress mt-2">
													<div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<p class="info-progress my-1">75% complete</p>
												<p class="info-rating mb-2">Leave a Rating</p>
											</div>
										</div>
									</a>
								</div>
							</div>
						<?php } ?>
						</div>
					</div>
				</div>
			</section>

			<?php $this->load->view("include/footer.php") ?>
		</div>

		<div class="main-overlay"></div>
	</div>
	<?php $this->load->view("include/incjs.php") ?>
	<script type="text/javascript" src="<?php echo base_url('assets/js/my-course.js?v='.version) ?>"></script>
</body>
</html>
