<?php $this->load->view("include/doctype.php") ?>
<html lang="en">
<head>
	<?php $this->load->view("include/incmeta.php") ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/libs/owlcarousel/assets/owl.carousel.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/libs/owlcarousel/assets/owl.theme.default.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/home.css?v='.version) ?>">
</head>
<body>
	<div class="wrapper">
		
		<?php $this->load->view("include/sidebar.php") ?>

		<div id="content">
			<?php $this->load->view("include/header.php") ?>
			
			<?php $this->load->view("include/mainslide.php") ?>

			<section id="popular-categories" class="my-5">
				<div class="container">
					<h6 class="pb-2 mb-0 title">Kategori populer</h6>
					<div class="row">
						<div class="col-12 col-sm-6 col-md-4 col-lg-4">
							<div class="top-category">
								<a href="<?php echo gDomainCourseSubject ?>">
									<div>
										<img src="<?php echo base_url('assets/img/home/ic-coaching.png') ?>" alt="">
										<div>Coaching</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-md-4 col-lg-4">
							<div class="top-category">
								<a href="<?php echo gDomainCourseSubject ?>">
									<div>
										<img src="<?php echo base_url('assets/img/home/ic-communication.png') ?>" alt="">
										<div>Communications</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-md-4 col-lg-4">
							<div class="top-category">
								<a href="<?php echo gDomainCourseSubject ?>">
									<div>
										<img src="<?php echo base_url('assets/img/home/ic-cs.png') ?>" alt="">
										<div>Customer Service</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-md-4 col-lg-4">
							<div class="top-category">
								<a href="<?php echo gDomainCourseSubject ?>">
									<div>
										<img src="<?php echo base_url('assets/img/home/ic-sales-marketing.png') ?>" alt="">
										<div>Sales & Marketing</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-md-4 col-lg-4">
							<div class="top-category">
								<a href="<?php echo gDomainCourseSubject ?>">
									<div>
										<img src="<?php echo base_url('assets/img/home/ic-electronic.png') ?>" alt="">
										<div>Electronic</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-md-4 col-lg-4">
							<div class="top-category">
								<a href="<?php echo gDomainCourseSubject ?>">
									<div>
										<img src="<?php echo base_url('assets/img/home/ic-english.png') ?>" alt="">
										<div>English</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>

			<hr class="clearfix divider"/>

			<section id="viewed-course" class="my-5">
				<div class="container">
					<h6 class="pb-3 mb-0 title">Peserta melihat</h6>
					<div class="owl-carousel owl-viewed-course owl-theme card-view">
						<div class="item card-item">
							<a href="<?php echo gDomainCourseDetail ?>">
								<img src="<?php echo gDomainFiles ?>/files/courses/1/images/img/1.png" alt="">
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
						<div class="item card-item">
							<a href="<?php echo gDomainCourseDetail ?>">
								<img src="<?php echo base_url('assets/img/course/course-2.png') ?>" alt="">
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
						<div class="item card-item">
							<a href="<?php echo gDomainCourseDetail ?>">
								<img src="<?php echo base_url('assets/img/course/course-3.png') ?>" alt="">
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
						<div class="item card-item">
							<a href="<?php echo gDomainCourseDetail ?>">
								<img src="<?php echo base_url('assets/img/course/course-4.png') ?>" alt="">
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
						<div class="item card-item">
							<a href="<?php echo gDomainCourseDetail ?>">
								<img src="<?php echo base_url('assets/img/course/course-5.png') ?>" alt="">
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
						<div class="item card-item">
							<a href="<?php echo gDomainCourseDetail ?>">
								<img src="<?php echo base_url('assets/img/course/course-6.png') ?>" alt="">
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
				</div>
			</section>

			<section id="participant-course" class="my-5">
				<div class="container">
					<h6 class="pb-3 mb-0 title">Komentar peserta kursus</h6>
					<div class="owl-carousel owl-participant-course owl-theme">
						<div class="item card-view">
							<div class="card-item">
								<a href="#!">
									<div>
										<img class="rounded-circle" src="<?php echo base_url('assets/img/home/participant-1.png') ?>" alt="">
										<div class="p-3">
											<p>Aida Aisha</p>
											<p class="desciption my-3">QuBisa sangat berjasa. Saya tidak punya waktu atau uang untuk kuliah. Target saya adalah menjadi pengembang web mandiri dan berkat QuBisa target itu hampir tercapai.</p>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="item card-view">
							<div class="card-item">
								<a href="#!">
									<div>
										<img class="rounded-circle" src="<?php echo base_url('assets/img/home/participant-2.png') ?>" alt="">
										<div class="p-3">
											<p>Robert Jason</p>
											<p class="desciption my-3">QuBisa sangat berjasa. Saya tidak punya waktu atau uang untuk kuliah. Target saya adalah menjadi pengembang web mandiri dan berkat QuBisa target itu hampir tercapai.</p>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="item card-view">
							<div class="card-item">
								<a href="#!">
									<div>
										<img class="rounded-circle" src="<?php echo base_url('assets/img/home/participant-3.png') ?>" alt="">
										<div class="p-3">
											<p>Robert Jason</p>
											<p class="desciption my-3">QuBisa sangat berjasa. Saya tidak punya waktu atau uang untuk kuliah. Target saya adalah menjadi pengembang web mandiri dan berkat QuBisa target itu hampir tercapai.</p>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="item card-view">
							<div class="card-item">
								<a href="#!">
									<div>
										<img class="rounded-circle" src="<?php echo base_url('assets/img/home/participant-2.png') ?>" alt="">
										<div class="p-3">
											<p>Robert Jason</p>
											<p class="desciption my-3">QuBisa sangat berjasa. Saya tidak punya waktu atau uang untuk kuliah. Target saya adalah menjadi pengembang web mandiri dan berkat QuBisa target itu hampir tercapai.</p>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="item card-view">
							<div class="card-item">
								<a href="#!">
									<div>
										<img class="rounded-circle" src="<?php echo base_url('assets/img/home/participant-2.png') ?>" alt="">
										<div class="p-3">
											<p>Robert Jason</p>
											<p class="desciption my-3">QuBisa sangat berjasa. Saya tidak punya waktu atau uang untuk kuliah. Target saya adalah menjadi pengembang web mandiri dan berkat QuBisa target itu hampir tercapai.</p>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="item card-view">
							<div class="card-item">
								<a href="#!">
									<div>
										<img class="rounded-circle" src="<?php echo base_url('assets/img/home/participant-2.png') ?>" alt="">
										<div class="p-3">
											<p>Robert Jason</p>
											<p class="desciption my-3">QuBisa sangat berjasa. Saya tidak punya waktu atau uang untuk kuliah. Target saya adalah menjadi pengembang web mandiri dan berkat QuBisa target itu hampir tercapai.</p>
										</div>
									</div>
								</a>
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
	<script type="text/javascript" src="<?php echo base_url('assets/libs/owlcarousel/owl.carousel.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/home.js?v='.version) ?>"></script>
</body>
</html>
