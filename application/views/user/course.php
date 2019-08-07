<?php $this->load->view("include/doctype.php") ?>
<html lang="en">
<head>
	<?php $this->load->view("include/incmeta.php") ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/my-course.css?v='.version) ?>">
</head>
<body>
	<?php $this->load->view("include/header.php") ?>
	<div class="main-content">
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

		<section id="content" class="mb-5">
			<div class="container">
				<div class="row">
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

	<?php $this->load->view("include/footer.php") ?>
	<script type="text/javascript" src="<?php echo base_url('assets/js/my-course.js?v='.version) ?>"></script>
</body>
</html>
