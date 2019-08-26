<?php $this->load->view("include/doctype.php") ?>
<html lang="en">
<head>
	<?php $this->load->view("include/incmeta.php") ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/libs/video-js/css/video-js.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/course-detail.css?v='.version) ?>">

	<!-- If you'd like to support IE8 -->
	<script type="text/javascript" src="<?php echo base_url('assets/libs/video-js/js/videojs-ie8.min.js') ?>"></script>
</head>
<body>
	<div class="wrapper">
		
		<?php $this->load->view("include/sidebar.php") ?>

		<div id="content">
			<?php $this->load->view("include/header.php") ?>

			<section id="main-slide-detail">
				<div class="container">
					<div class="row h-100">
						<div class="col-12 col-md-4 px-0 preview-video my-auto hidden-sm-up">
							<div data-toggle="modal" data-target="#videoModalCenter">
								<div class="play-btn"></div>
								<p>Preview this course</p>
							</div>
							<img src="<?php echo gDomainFiles ?>/files/courses/1/images/img/1.png">
						</div>
						<div class="col-12 col-md-8 py-2 py-md-4 my-auto">
							<div>
								<h1 class="py-2">Strategy and Perfomance Execution Excellence (SPEx2) For Line Manager</h1>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
									<span class="rating-text">4.5(23.433 ratings)</span>
									<span class="rating-text">260.345 student enrolled</span>
								</div>
								<div class="author pb-4 pb-md-0">
									<span>Created by  Lutan Edukasi</span>
									<span>Last updated 08/2019</span>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-4 px-0 preview-video my-auto hidden-sm-down">
							<div data-toggle="modal" data-target="#videoModalCenter">
								<div class="play-btn"></div>
								<p>Preview this course</p>
							</div>
							<img src="<?php echo gDomainFiles ?>/files/courses/1/images/img/1.png">
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
									<li class="breadcrumb-item"><a href="<?php echo gDomainCourse ?>">Semua Kursus</a></li>
									<li class="breadcrumb-item active" aria-current="page">Detail</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</section>

			<section id="content" class="my-5">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div>
								<ul class="nav nav-tabs" id="detail-tab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="overview-tab" data-toggle="tab" href="#div-overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="content-tab" data-toggle="tab" href="#div-content" role="tab" aria-controls="content" aria-selected="false">Content</a>
									</li>
								</ul>
								<div class="tab-content" id="detail-tab-content">
									<div class="tab-pane fade show active" id="div-overview" role="tabpanel" aria-labelledby="overview-tab">
										<ul class="list-unstyled">
											<li>
												<p class="float-left">Kuliah</p>
												<p class="float-right">5</p>
												<div class="clearfix"></div>
											</li>
											<li>
												<p class="float-left">Tingkah keahlian</p>
												<p class="float-right">Intermediate</p>
												<div class="clearfix"></div>
											</li>
											<li>
												<p class="float-left">Bahasa</p>
												<p class="float-right">Bahasa Indonesia</p>
												<div class="clearfix"></div>
											</li>
										</ul>
										<div class="container">
											<div class="row">
												<div class="col-12 col-md-8">
													<div class="py-4">
														<h6>Tentang kursus ini</h6>
														<p class="col-12 col-md-10">Kursus ini akan membantu Anda untuk memantau eksekusi inisiatif yang sedang berjalan. Dalam materi 5 Practices of Execution Winner ini, berbagi tentang kerangka kerja kompetensi SDM dalam organisasi berbasis eksekusi. Di dalamnya, Anda akan belajar tentang lima kompetensi yang diperlukan untuk berhasil mengeksekusi strategi demi mencapai sasaran. Kerangka kerja yang terstruktur dan metodologi langkah demi langkah disajikan bersama contoh-contoh kasus yang spesifk untuk penerapan pribadi dan profesional.<br><br>Apa pun jabatan Anda—pemimpin tim, penyelia, manajer, direktur, pemilik bisnis atau pemimpin dalam organisasi nirlaba—selama Anda memiliki sasaran yang ingin Anda wujudkan, materi ini akan membuka arah baru bagi Anda untuk mencapai sasaran tersebut.<br><br>Marilah kita bermimpi besar dan bertindak lebih besar lagi.</p>
													</div>
													<div class="pb-4">
														<h6>Siapa yang seharusnya mengikuti kursus ini?</h6>
														<ul class="list-unstyled">
															<li>What they do?</li>
															<li>Direktur</li>
															<li>Manager</li>
															<li>Pemimpin tim atau bisnis atau organisasi nirlaba</li>
														</ul>
														<ul class="list-unstyled mb-1">
															<li>Where they work?</li>
															<li>Perusahaan</li>
														</ul>
													</div>
													<div class="pb-4">
														<h6>Siapa yang bisa mengikuti kursus ini?</h6>
														<ul class="list-unstyled mb-1">
															<li>What they do?</li>
															<li>Dosen</li>
															<li>Karyawan</li>
															<li>Mahasiswa</li>
														</ul>
													</div>
													<div class="pb-4">
														<h6>Instruktur</h6>
														<div class="item-people">
															<img data-toggle="modal" data-target="#peopleModalCenter" class="rounded-circle" src="<?php echo base_url('assets/img/course/logo-lutan.png?v=0.1') ?>" alt="">
															<p data-toggle="modal" data-target="#peopleModalCenter" class="pt-3 author-title">LUTAN EDUKASI</p>
														</div>
													</div>
												</div>
												<div class="col-12 col-md-4">
													<div id="div-enroll" class="py-4">
														<form class="form-enroll sidebar_inner" action="<?php echo gDomainCourse . "/enroll" ?>" method="post">
															<input class="btn btn-primary" type="submit" id="enroll" value="Daftar"/>
															<div class="form-check pt-2 d-none">
																<input class="form-check-input" type="checkbox" value="tnc" id="tnc" name="tnc">
																<label class="form-check-label" for="tnc">
																	I would like to receive email from Lutan Edukasi and learn about
																</label>
															</div>
														</form>
													</div>
												</div>
											</div>
										</div>

										<div class="container">
											<div class="row">
												<div class="col-12">
													<div id="div-rating" class="pb-4">
														<h6>Ulasan peserta/penilaian</h6>
														<h4>4.5 <span>Penilaian Rata-rata</span></h4>
														<div class="row">
															<div class="col-md-4 col-12 px-0 pt-1">
																<div class="progress">
																	<div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
															<div class="col-md-8 col-12 px-0 px-md-3">
																<div class="rating">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<span class="rating-text">70%</span>
																</div>
															</div>
															<div class="col-md-4 col-12 px-0 pt-1">
																<div class="progress">
																	<div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
															<div class="col-md-8 col-12 px-0 px-md-3">
																<div class="rating">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star-o"></i>
																	<span class="rating-text">10%</span>
																</div>
															</div>
															<div class="col-md-4 col-12 px-0 pt-1">
																<div class="progress">
																	<div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
															<div class="col-md-8 col-12 px-0 px-md-3">
																<div class="rating">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<span class="rating-text">10%</span>
																</div>
															</div>
															<div class="col-md-4 col-12 px-0 pt-1">
																<div class="progress">
																	<div class="progress-bar" role="progressbar" style="width: 8%" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
															<div class="col-md-8 col-12 px-0 px-md-3">
																<div class="rating">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<span class="rating-text">8%</span>
																</div>
															</div>
															<div class="col-md-4 col-12 px-0 pt-1">
																<div class="progress">
																	<div class="progress-bar" role="progressbar" style="width: 2%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
															<div class="col-md-8 col-12 px-0 px-md-3">
																<div class="rating">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<span class="rating-text">2%</span>
																</div>
															</div>
														</div>
													</div>
													<div id="div-review" class="pb-5 mb-5">
														<div>
															<div class="rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
															</div>
															<p>Kursus ini sangat membantu saya dalam meningkatkan skill saya</p>
														</div>
														<div>
															<div class="rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
															</div>
															<p>Kursus ini membantu saya dalam mengatasi saya dalam mengimplentasi di pekerjaan</p>
														</div>
														<!--a href="#!">Lihat semua ulasan</a-->
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="div-content" role="tabpanel" aria-labelledby="content-tab">
										<div class="container">
											<div class="row">
												<div class="col-12 col-md-8">
													<div class="py-4">
														<h6>Materi yang akan dibahas</h6>
														<ul id="material" class="list-unstyled">
															<li>
																<p class="mb-0">Competency 1: Thinking Beyond The Horizon</p>
																<ul class="my-2">
																	<li>Tool #1: Analisis Lingkungan Makro</li>
																	<li>Tool #2: Analisis Industri</li>
																	<li>Tool #3: Analisis Internal</li>
																	<li>Tool #4: Analisis SWOT</li>
																	<li>Tool #5: Proses Alternatif untuk Identifikasi TPG</li>
																	<li>Tool #6: Matrik Penetapan Prioritas Inisiatif</li>
																</ul>
															</li>
															<li>
																<p class="mb-0">Competency 2: Communication and Influencing</p>
																<ul class="my-2">
																	<li>Tool #7: Matrik Perencanaan Komunikasi</li>
																	<li>Tool #8: Mempengaruhi</li>
																	<li>Tool #9: Reframing</li>
																</ul>
															</li>
															<li>
																<p class="mb-0">Competency 3: Planning and Organizing</p>
																<ul class="my-2">
																	<li>Tool #10: Work Breakdown Structure</li>
																	<li>Tool #11: Gantt Chart</li>
																</ul>
															</li>
															<li>
																<p class="mb-0">Competency 4: Making Things Happen</p>
																<ul class="my-2">
																	<li>Tool #12: Open Task Report</li>
																</ul>
															</li>
															<li>
																<p class="mb-0">Competency 5: Engaging Talents</p>
																<ul class="my-2">
																	<li>Tool #13: Mengidentifikasi Penyebab Masalah Kinerja</li>
																	<li>Tool #14: Rencana Pengembangan Individu</li>
																</ul>
															</li>
														</ul>
													</div>
													<div class="pb-4">
														<h6>Kursus ini terdiri dari:</h6>
														<ul id="ul-course" class="list-unstyled mb-5">
															<li>Video belajar</li>
															<li>Pre-test</li>
															<li>Modul</li>
															<li>Post test</li>
															<li>Quiz</li>
															<li>Certificate</li>
														</ul>
													</div>
												</div>
												<div class="col-12 col-md-4">
													<div id="div-enroll-2" class="py-4">
														<form class="form-enroll sidebar_inner" action="<?php echo gDomainCourse . "/enroll" ?>" method="post">
															<input class="btn btn-primary" type="submit" id="enroll" value="Daftar"/>
															<div class="form-check pt-2 d-none">
																<input class="form-check-input" type="checkbox" value="tnc" id="tnc" name="tnc">
																<label class="form-check-label" for="tnc">
																	I would like to receive email from Lutan Edukasi and learn about
																</label>
															</div>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="sticky-bottom">
								<form class="form-enroll sidebar_inner" action="<?php echo gDomainCourse . "/enroll" ?>" method="post">
									<input class="btn btn-primary w-100" type="submit" id="enroll" value="Daftar"/>
									<div class="form-check pt-2 d-none">
										<input class="form-check-input" type="checkbox" value="tnc" id="tnc" name="tnc">
										<label class="form-check-label" for="tnc">
											I would like to receive email from Lutan Edukasi and learn about
										</label>
									</div>
								</form>
							</div>	
						</div>
					</div>
				</div>
			</section>

			<div class="modal fade" id="peopleModalCenter" tabindex="-1" role="dialog" aria-labelledby="peopleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div>
							<img src="<?php echo base_url('assets/img/course/lutan-profile.png') ?>" alt="">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span class="ti-close" aria-hidden="true"></span>
							</button>
						</div>
						<div class="modal-body">
							<div class="container-fluid">
								<div class="row">
									<div class="col-12">
										<div class="py-3">
										<ul class="list-unstyled">
											<li class="my-2">
												<p class="mb-0">Our Mission</p>
												To be the most widely adopted training and development 
												company by business community in Indonesia. We provide 
												cost effective, skill-based blended learning solution that 
												translate our clients ordinary resources into extraordinary 
												and measurable results.
											</li>
											<li class="my-2">
												<p class="mb-0">We are providing in-class workshop, public seminars, e-learning and blended learning solutions in various topics, including: </p>
												<ul>
													<li>Balancing Leadership and Management in The New Era</li>
													<li>Change Management</li>
													<li>General Management</li>
													<li>Customer Services</li>
													<li>Sales Management</li>
													<li>Marketing Management</li>
													<li>Managing Personal Effectiveness</li>
													<li>Human Resources</li>
													<li>Organizational Development</li>
												</ul>
											</li>
										</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="modal fade" id="videoModalCenter" tabindex="-1" role="dialog">
				<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-body">
							<div class="container-fluid">
								<div class="row">
									<div class="col-12">
										<h6 class="float-left title">Strategy and Perfomance Execution Excellence (SPEx2) For Line Manager</h6>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span class="ti-close" aria-hidden="true"></span>
										</button>
									</div>
									<div class="col-12 p-0">
										<video id="video-course" class="video-js vjs-default-skin vjs-big-play-centered" width="640px" height="400px" controls preload="none" poster='<?php echo gDomainFiles ?>/files/courses/1/images/img/1.png' data-setup='{ "techOrder": ["flash", "html5"], "aspectRatio":"640:400", "playbackRates": [1, 1.5, 2], "nativeControlsForTouch": true}'>
											<source src="<?php echo gDomainFiles ?>/files/courses/1/videos/preview.mp4" type='video/mp4' />
											<!--source src="https://vjs.zencdn.net/v/oceans.webm" type='video/webm' />
											<track kind="subtitles" src="<?php echo base_url('assets/video/srt/demo.vtt') ?>" srclang="en" label="English"></track-->										
										</video>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<?php $this->load->view("include/footer.php") ?>
		</div>

		<div class="main-overlay"></div>
	</div>
	<?php $this->load->view("include/incjs.php") ?>
	<script type="text/javascript" src="<?php echo base_url('assets/libs/jquery/js/jquery.sticky.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/libs/video-js/js/video.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/libs/video-js/js/videojs-flash.min.js') ?>"></script>
	<script>videojs.options.flash.swf ="<?php echo base_url('assets/libs/video-js/video-js.swf') ?>";</script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/course-detail.js?v='.version) ?>"></script>
</body>
</html>
