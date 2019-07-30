<?php $this->load->view("include/doctype.php") ?>
<html lang="en">
<head>
	<?php $this->load->view("include/incmeta.php") ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/libs/owlcarousel/assets/owl.carousel.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/libs/owlcarousel/assets/owl.theme.default.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/home.css') ?>">
</head>
<body>
	<?php $this->load->view("include/header.php") ?>
	
	<?php $this->load->view("include/mainslide.php") ?>

	<section id="popular-categories" class="my-5">
		<div class="container">
			<h6 class="pb-2 mb-0 title">Popular Category</h6>
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
			<h6 class="pb-3 mb-0 title">Viewed Course</h6>
			<div class="owl-carousel owl-viewed-course owl-theme">
				<div class="item card-view">
					<div class="card-item">
						<a href="<?php echo gDomainCourseDetail ?>">
							<div>
								<img src="<?php echo base_url('assets/img/home/course-1.png') ?>" alt="">
								<div class="p-3">
									<p>Coaching<br/><span>Isyana</span></p>
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
							</div>
						</a>
					</div>
				</div>
				<div class="item card-view">
					<div class="card-item">
						<a href="<?php echo gDomainCourseDetail ?>">
							<div>
								<img src="<?php echo base_url('assets/img/home/course-2.png') ?>" alt="">
								<div class="p-3">
									<p>Coaching<br/><span>Mark Hugh</span></p>
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
							</div>
						</a>
					</div>
				</div>
				<div class="item card-view">
					<div class="card-item">
						<a href="<?php echo gDomainCourseDetail ?>">
							<div>
								<img src="<?php echo base_url('assets/img/home/course-3.png') ?>" alt="">
								<div class="p-3">
									<p>Coaching<br/><span>Isvana</span></p>
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
							</div>
						</a>
					</div>
				</div>
				<div class="item card-view">
					<div class="card-item">
						<a href="<?php echo gDomainCourseDetail ?>">
							<div>
								<img src="<?php echo base_url('assets/img/home/course-2.png') ?>" alt="">
								<div class="p-3">
									<p>Coaching<br/><span>Robert</span></p>
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
							</div>
						</a>
					</div>
				</div>
				<div class="item card-view">
					<div class="card-item">
						<a href="<?php echo gDomainCourseDetail ?>">
							<div>
								<img src="<?php echo base_url('assets/img/home/course-2.png') ?>" alt="">
								<div class="p-3">
									<p>Coaching<br/><span>Jason</span></p>
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
							</div>
						</a>
					</div>
				</div>
				<div class="item card-view">
					<div class="card-item">
						<a href="<?php echo gDomainCourseDetail ?>">
							<div>
								<img src="<?php echo base_url('assets/img/home/course-2.png') ?>" alt="">
								<div class="p-3">
									<p>Coaching<br/><span>Steve Light</span></p>
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
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="participant-course" class="my-5">
		<div class="container">
			<h6 class="pb-3 mb-0 title">Comment Participant Course</h6>
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
	<script type="text/javascript" src="<?php echo base_url('assets/libs/owlcarousel/owl.carousel.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/home.js?v='.version) ?>"></script>
</body>
</html>
