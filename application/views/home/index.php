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

	<div class="container my-5">
		<div class="row">
			<div class="col-md-4">
				<?php $this->load->view("home/include/filter.php") ?>
			</div>
			<div class="col-md-8 pl-4">
				<div class="card-view">
					<p>Feature courses</p>
					<div class="row align-items-start px-2">
						<div class="col-md-4 col-6 card-item px-2 mt-4">
							<img src="<?php echo base_url('assets/img/card-1.png') ?>" class="img-fluid" alt="">
							<div class="p-3">
								<p>Coaching</p>
								<p>Teasing - minutes activities</p>
							</div>
						</div>
						<div class="col-md-4 col-6 card-item px-2 mt-4">
							<img src="<?php echo base_url('assets/img/card-2.png') ?>" class="img-fluid" alt="">
							<div class="p-3">
								<p>Coaching</p>
								<p>Teasing - minutes activities</p>
							</div>
						</div>
						<div class="col-md-4 col-6 card-item px-2 mt-4">
							<img src="<?php echo base_url('assets/img/card-1.png') ?>" class="img-fluid" alt="">
							<div class="p-3">
								<p>Coaching</p>
								<p>Teasing - minutes activities</p>
							</div>
						</div>
					</div>
				</div>
				<div class="card-view mt-4">
						<p>All courses</p>
						<div class="row align-items-start px-2">
							<div class="col-md-4 col-6 card-item px-2 mt-4">
								<img src="<?php echo base_url('assets/img/card-2.png') ?>" class="img-fluid" alt="">
								<div class="p-3">
									<p>Coaching</p>
									<p>Teasing - minutes activities</p>
								</div>
							</div>
							<div class="col-md-4 col-6 card-item px-2 mt-4">
								<img src="<?php echo base_url('assets/img/card-1.png') ?>" class="img-fluid" alt="">
								<div class="p-3">
									<p>Coaching</p>
									<p>Teasing - minutes activities</p>
								</div>
							</div>
							<div class="col-md-4 col-6 card-item px-2 mt-4">
								<img src="<?php echo base_url('assets/img/card-2.png') ?>" class="img-fluid" alt="">
								<div class="p-3">
									<p>Coaching</p>
									<p>Teasing - minutes activities</p>
								</div>
							</div>
							<div class="col-md-4 col-6 card-item px-2 mt-4">
								<img src="<?php echo base_url('assets/img/card-2.png') ?>" class="img-fluid" alt="">
								<div class="p-3">
									<p>Coaching</p>
									<p>Teasing - minutes activities</p>
								</div>
							</div>
							<div class="col-md-4 col-6 card-item px-2 mt-4">
								<img src="<?php echo base_url('assets/img/card-1.png') ?>" class="img-fluid" alt="">
								<div class="p-3">
									<p>Coaching</p>
									<p>Teasing - minutes activities</p>
								</div>
							</div>
							<div class="col-md-4 col-6 card-item px-2 mt-4">
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

	<?php $this->load->view("include/footer.php") ?>
	<script type="text/javascript" src="<?php echo base_url('assets/libs/owlcarousel/owl.carousel.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/home.js') ?>"></script>
</body>
</html>
