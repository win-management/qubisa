<?php $this->load->view("include/doctype.php") ?>
<html lang="en">
<head>
	<?php $this->load->view("include/incmeta.php") ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/benefit.css') ?>">
</head>
<body>
	<?php $this->load->view("include/header.php") ?>
	<div class="main-content">
		<section id="main-slide-3">
			<div>
				<div class="title">
					<div class="container">
						<div class="row">
							<p class="col-12">Apa yang Anda dapat?</p>
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
								<li class="breadcrumb-item active" aria-current="page">Apa Yang Anda Dapat?</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</section>

		<section id="benefit-1" class="py-5 benefit-container">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-7">
						<img src="<?php echo base_url('assets/img/benefit/benefit-1.png') ?>" class="rounded-img" alt="">
						<p class="title pt-3">Video Courses</p>
						<p class="title">You can learn by Video</p>
						<p>Akses tanpa batas keseluruh katalog khusus online QuBisa. Belajar dimanapun & kapanpun dari para instruktur ahli dibidangnya. Temukan kursus video tentang hampir semua topik Bangun perpustakaan untuk karier dan pertumbuhan pribadi Anda</p>
					</div>
				</div>
			</div>
		</section>

		<section id="benefit-2" class="py-5 benefit-container b-even">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-7">
						<img src="<?php echo base_url('assets/img/benefit/benefit-2.png') ?>" class="rounded-img" alt="">
						<p class="title pt-3">Bergabung dengan kami</p>
						<p>Kapan terakhir Anda mengenmbangkan diri? Mari bergabung dengan QuBisa kursus online terbesar dan nomor 1 di Indonesia untuk para professional yang senantiasa ingin berkembang.</p>
					</div>
				</div>
			</div>
		</section>

		<section id="benefit-3" class="py-5 benefit-container">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-7">
						<img src="<?php echo base_url('assets/img/benefit/benefit-3.png') ?>" class="rounded-img" alt="">
						<p class="title pt-3">Belajar sesuai kecepatan Anda</p>
						<p>Nikmati akses seumur hidup ke kursus di situs web dan aplikasi  QuBisa.</p>
					</div>
				</div>
			</div>
		</section>

		<section id="benefit-4" class="py-5 benefit-container b-even">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-7">
						<img src="<?php echo base_url('assets/img/benefit/benefit-4.png') ?>" class="rounded-img" alt="">
						<p class="title pt-3">Sertifikat online</p>
						<p>Hampir semua kursus online kami memiliki test di akhir kursus. Setelah lulus test tersebut, Anda akan mendapatkan sertifikat online secara otomatis.</p>
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
</body>
</html>
