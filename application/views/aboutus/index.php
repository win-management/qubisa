<?php $this->load->view("include/doctype.php") ?>
<html lang="en">
<head>
	<?php $this->load->view("include/incmeta.php") ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/aboutus.css?v='.version) ?>">
</head>
<body>
	<?php $this->load->view("include/header.php") ?>

	<div class="main-content">
		<section id="main-slide-2">
			<div>
				<picture>
					<source media="(max-width: 767px)" srcset="<?php echo base_url('assets/img/aboutus/main-image-m.jpg') ?>">
					<img src="<?php echo base_url('assets/img/aboutus/main-image.jpg') ?>" alt="">
				</picture>
				<div class="overlay"></div>
				<div class="title">
					<div class="container">
						<div class="row">
							<p class="col-12 py-2">Tentang QuBisa</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="breadcrumb-container">
			<div class="container">
				<div class="row">
					<div class="col-12 px-0">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?php echo gDomainName ?>"><i class="ti-home"></i></a></li>
								<li class="breadcrumb-item active" aria-current="page">Tentang Kami</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</section>

		<section id="about-us" class="py-5">
			<div class="container">
				<div class="row">
					<div class="col-12 our-mission">
						<p>Misi Kami</p>
						<ul class="list-unstyled">
							<li>Tingkatkan akses ke pendidikan berkualitas tinggi untuk semua orang, dimana saja.</li>
							<li>Tingkatkan pengajaran dan pembelajaran di kampus dan online.</li>
							<li>Memajukan pengajaran dan pembelajaran melalui penelitian.</li>
						</ul>
					</div>
					<div class="col-12 our-history">
						<p>Sejarah Kami</p>
						<p class="desc">QuBisa platform terpercaya untuk pendidikan dan pembelajaran. Didirikan oleh Harvard dan MIT. QuBisa adalah rumah bagi lebih dari 20 juta peserta didik, mayoritas universitas peringkat teratas di dunia dan perusahaan industri terkemuka. Sebagai organisasi nirlaba global, QuBisa mengubah pendidikan tradisional, menghilangkan hambatan biaya, lokasi, dan akses.</p>
					</div>
					<div class="col-12 our-community">
						<p>Komunitas Belajar Global Kami</p>
						<p class="desc">Siswa kami berasal dari setiap negara di dunia! Apakah Anda tertarik pada ilmu komputer, bahasa, teknik, psikologi, penulisan, elektronik, biologi, atau pemasaran, kami meliliki kursus untuk Anda! Daftarkan diri Anda hari ini dan pelajari sesuatu yang baru.</p>
					</div>
					<div class="col-12 our-difference">
						<p>Perbedaan Kami</p>
						<p class="desc">Kami didirikan oleh dan terus diperintah oleh perguruan tinggi dan universitas. Kami adalah satu-satunya penyedia MOOC terkemuka yang bersifat nirlaba dan open source.</p>
					</div>
				</div>
			</div>
		</section>

		<div id="div-background">
			<section id="key-people">
				<div class="container">
					<h6 class="pb-2 mb-0 title">Key People</h6>
					<div class="row">
						<div class="col-6 col-sm-6 col-md-4 col-lg-3">
							<div class="item-people">
								<img data-aos="fade-right" data-aos-delay="400" data-toggle="modal" data-target="#peopleModalCenter" class="rounded-circle" src="<?php echo base_url('assets/img/aboutus/people-1.png') ?>" alt="">
								<div data-toggle="modal" data-target="#peopleModalCenter" class="py-3">
									<p>Mark S</p>
									<p class="desciption">Founder Commissioner</p>
								</div>
							</div>
						</div>
						<div class="col-6 col-sm-6 col-md-4 col-lg-3">
							<div class="item-people">
								<img data-aos="fade-right" data-aos-delay="400" data-toggle="modal" data-target="#peopleModalCenter" class="rounded-circle" src="<?php echo base_url('assets/img/aboutus/people-2.png') ?>" alt="">
								<div data-toggle="modal" data-target="#peopleModalCenter" class="py-3">
									<p>Steve</p>
									<p class="desciption">Co Founder CEO</p>
								</div>
							</div>
						</div>
						<div class="col-6 col-sm-6 col-md-4 col-lg-3">
							<div class="item-people">
								<img data-aos="fade-right" data-aos-delay="400" data-toggle="modal" data-target="#peopleModalCenter" class="rounded-circle" src="<?php echo base_url('assets/img/aboutus/people-3.png') ?>" alt="">
								<div data-toggle="modal" data-target="#peopleModalCenter" class="py-3">
									<p>Aida Aisha</p>
									<p class="desciption">Director</p>
								</div>
							</div>
						</div>
						<div class="col-6 col-sm-6 col-md-4 col-lg-3">
							<div class="item-people">
								<img data-aos="fade-right" data-aos-delay="400" data-toggle="modal" data-target="#peopleModalCenter" class="rounded-circle" src="<?php echo base_url('assets/img/aboutus/people-4.png') ?>" alt="">
								<div data-toggle="modal" data-target="#peopleModalCenter" class="py-3">
									<p>Bram</p>
									<p class="desciption">Vice President</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="our-partner">
				<div class="container">
					<h6 class="pb-2 mb-0 title">Mitra Kami</h6>
					<div class="row">
						<div class="col-6 col-sm-6 col-md-4 col-lg-3">
							<div class="top-category" data-aos="fade-up" data-aos-delay="400">
								<a href="#!">
									<div>
										<img src="<?php echo base_url('assets/img/aboutus/psi.png') ?>" alt="">
									</div>
								</a>
							</div>
						</div>
						<div class="col-6 col-sm-6 col-md-4 col-lg-3">
							<div class="top-category" data-aos="fade-up" data-aos-delay="400">
								<a href="#!">
									<div>
										<img src="<?php echo base_url('assets/img/aboutus/rbl.png') ?>" alt="">
									</div>
								</a>
							</div>
						</div>
						<div class="col-6 col-sm-6 col-md-4 col-lg-3">
							<div class="top-category" data-aos="fade-up" data-aos-delay="400">
								<a href="#!">
									<div>
										<img src="<?php echo base_url('assets/img/aboutus/qpr.png') ?>" alt="">
									</div>
								</a>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3"></div>
						<div class="col-6 col-sm-6 col-md-4 col-lg-3">
							<div class="top-category" data-aos="fade-up" data-aos-delay="400">
								<a href="#!">
									<div>
										<img src="<?php echo base_url('assets/img/aboutus/axzo.png') ?>" alt="">
									</div>
								</a>
							</div>
						</div>
						<div class="col-6 col-sm-6 col-md-4 col-lg-3">
							<div class="top-category" data-aos="fade-up" data-aos-delay="400">
								<a href="#!">
									<div>
										<img src="<?php echo base_url('assets/img/aboutus/tmbc.png') ?>" alt="">
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>

		<section id="contact-us">
			<div class="container">
				<div class="row">
					<div class="col-12">
					<div class="text-center">	
						<p>Ingin mengetahui lebih lanjut?</p>
						<a href="<?php echo gDomainContactUs ?>"><div class="btn btn-primary">Hubungi Kami</div></a>
					</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<div class="modal fade" id="peopleModalCenter" tabindex="-1" role="dialog" aria-labelledby="peopleModalCenterTitle" aria-hidden="true">
  		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="container-fluid">
						<div class="row">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span class="ti-close" aria-hidden="true"></span>
							</button>
							<div class="col-12">
								<div class="item-people">
									<img class="rounded-circle" src="<?php echo base_url('assets/img/aboutus/people-1.png') ?>" alt="">
									<div class="py-3">
										<p>Mark S</p>
										<p class="desciption">Founder Commissioner</p>
										<p>2013-2017</p>
										<p>CEO PT Digital Artha Media, sebuah perusahaan startup yang mengembangkan Mandiri e-cash, e-Money berbasis digital yang saat ini memimpin pasar di bidangnya dengan enam juta pengguna sebelum ia meninggalkan perusahaan.</p>
										<p>2010-2012</p>
										<p>Direktur PT Buana Central Swakarsa, sebuah grup perusahaan logistik.</p>
										<p>2001-2010</p>
										<p>Dengan jabatan terakhir sebagai Deputy CEO Jatis Group, perusahaan IT terkemuka yang berbasis di Indonesia dengan keahlian dalam pengembangan industri reksa dana di Indonesia. Sebelumnya juga sempat menjabat sebagai Vice President Financial Service Industry and Head of Wealth Management System.</p>
										<p>1997-2001</p>
										<p>Penggagas pemasaran reksa dana di Bank Bali (sekarang Permata Bank).	</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php $this->load->view("include/footer.php") ?>
	<script type="text/javascript" src="<?php echo base_url('assets/js/aboutus.js?v='.version) ?>"></script>
</body>
</html>
