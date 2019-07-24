<?php $this->load->view("include/doctype.php") ?>
<html lang="en">
<head>
	<?php $this->load->view("include/incmeta.php") ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/course.css') ?>">
</head>
<body>
	<?php $this->load->view("include/header.php") ?>

	<section id="content" class="pt-2">
		<div class="container my-5">
			<div class="row">
				<div class="col-md-4">
					<?php $this->load->view("course/include/filter.php") ?>
				</div>
				<div class="col-md-8 pl-4">
					<div class="card-view">
						<p>Feature courses</p>
						<div class="row align-items-start">
							<div class="col-md-4 col-6 mt-4">
								<div class="card-item">
									<img src="<?php echo base_url('assets/img/card-1.png') ?>" class="img-fluid" alt="">
									<div class="p-3">
										<p>Coaching</p>
										<p>Teasing - minutes activities</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-6 mt-4">
								<div class="card-item">
									<img src="<?php echo base_url('assets/img/card-2.png') ?>" class="img-fluid" alt="">
									<div class="p-3">
										<p>Coaching</p>
										<p>Teasing - minutes activities</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-6 mt-4">
								<div class="card-item">
									<img src="<?php echo base_url('assets/img/card-1.png') ?>" class="img-fluid" alt="">
									<div class="p-3">
										<p>Coaching</p>
										<p>Teasing - minutes activities</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-view mt-4">
							<p>All courses</p>
							<div class="row align-items-start">
								<div class="col-md-4 col-6 mt-4">
									<div class="card-item">
										<img src="<?php echo base_url('assets/img/card-2.png') ?>" class="img-fluid" alt="">
										<div class="p-3">
											<p>Coaching</p>
											<p>Teasing - minutes activities</p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-6 mt-4">
									<div class="card-item">
										<img src="<?php echo base_url('assets/img/card-1.png') ?>" class="img-fluid" alt="">
										<div class="p-3">
											<p>Coaching</p>
											<p>Teasing - minutes activities</p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-6 mt-4">
									<div class="card-item">
										<img src="<?php echo base_url('assets/img/card-2.png') ?>" class="img-fluid" alt="">
										<div class="p-3">
											<p>Coaching</p>
											<p>Teasing - minutes activities</p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-6 mt-4">
									<div class="card-item">
										<img src="<?php echo base_url('assets/img/card-2.png') ?>" class="img-fluid" alt="">
										<div class="p-3">
											<p>Coaching</p>
											<p>Teasing - minutes activities</p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-6 mt-4">
									<div class="card-item">
										<img src="<?php echo base_url('assets/img/card-1.png') ?>" class="img-fluid" alt="">
										<div class="p-3">
											<p>Coaching</p>
											<p>Teasing - minutes activities</p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-6 mt-4">
									<div class="card-item">
										<img src="<?php echo base_url('assets/img/card-2.png') ?>" class="img-fluid" alt="">
										<div class="p-3">
											<p>Coaching</p>
											<p>Teasing - minutes activities</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php $this->load->view("include/footer.php") ?>
	<script type="text/javascript" src="<?php echo base_url('assets/js/course.js') ?>"></script>
</body>
</html>
