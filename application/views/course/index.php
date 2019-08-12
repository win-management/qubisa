<?php $this->load->view("include/doctype.php") ?>
<html lang="en">
<head>
	<?php $this->load->view("include/incmeta.php") ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/course.css?v='.version) ?>">
</head>
<body>
	<div class="wrapper">
		
		<?php $this->load->view("include/sidebar.php") ?>

		<div id="content">
			<?php $this->load->view("include/header.php") ?>

			<section id="breadcrumb-container">
				<div class="container">
					<div class="row">
						<div class="col-12 px-0">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo gDomainName ?>"><i class="ti-home"></i></a></li>
									<li class="breadcrumb-item active" aria-current="page">Semua Kursus</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</section>

			<section id="main-content">
				<div class="container my-5">
					<div class="row">
						<div class="col-md-4">
							<?php $this->load->view("course/include/filter.php") ?>
						</div>
						<div class="col-md-8">
							<div class="card-view">
								<p>Kursus premium</p>
								<div class="row align-items-start">
									<div class="col-md-4 col-6 mt-4">
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
									<div class="col-md-4 col-6 mt-4">
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
									<div class="col-md-4 col-6 mt-4">
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
								</div>
							</div>
							<div class="card-view mt-4">
									<p>Semua kursus</p>
									<div class="row align-items-start">
									<?php for ($x = 0; $x <= 4; $x++) {?>
										<div class="col-md-4 col-6 mt-4">
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
										<div class="col-md-4 col-6 mt-4">
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
										<div class="col-md-4 col-6 mt-4">
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
						</div>
					</div>
				</div>
			</section>

			<?php $this->load->view("include/footer.php") ?>
		</div>

		<div class="main-overlay"></div>
	</div>
	<?php $this->load->view("include/incjs.php") ?>
	<script type="text/javascript" src="<?php echo base_url('assets/js/course.js?v='.version) ?>"></script>
</body>
</html>
