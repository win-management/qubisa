<?php $this->load->view("include/doctype.php") ?>
<html lang="en">
<head>
	<?php $this->load->view("include/incmeta.php") ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/course-detail.css?v='.version) ?>">
</head>
<body>
	<?php $this->load->view("include/header.php") ?>
	<div class="main-content">
		<section id="main-slide-2">
			<div>
				<picture>
					<source media="(max-width: 767px)" srcset="<?php echo base_url('assets/img/aboutus/main-image-m.jpg') ?>">
					<img src="<?php echo base_url('assets/img/course/main-image.jpg') ?>" alt="">
				</picture>
				<div class="overlay"></div>
				<div class="title">
					<div class="container">
						<div class="row">
							<p class="col-12 py-2">Coaching</p>
						</div>
					</div>
				</div>
				<div class="btn-play">
					<div class="container">
						<div class="row">
							<p class="py-2"><i class="ti-control-play"></i> Intro video</p>
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
											<p class="float-left">Lectures</p>
											<p class="float-right">9</p>
											<div class="clearfix"></div>
										</li>
										<li>
											<p class="float-left">Skill level</p>
											<p class="float-right">Intermediate</p>
											<div class="clearfix"></div>
										</li>
										<li>
											<p class="float-left">Languages</p>
											<p class="float-right">Bahasa Indonesia</p>
											<div class="clearfix"></div>
										</li>
									</ul>
									<div class="container">
										<div class="row">
											<div class="col-12 col-md-8">
												<div class="py-4">
													<h6 class="title">About this course</h6>
													<p class="col-10">Seseorang coach akan lebih efektif melakukan dialog coachingnya apabila dia menguasai beberapa keterampilan dasar, seperti mendengarkan, memberikan umpan balik, dan bertanya yang meng inspirasi.</p>
												</div>
												<div class="pb-4">
													<h6 class="title">Who should join this course</h6>
													<ul class="list-unstyled">
														<li>What they do?</li>
														<li>Dosen</li>
														<li>Karyawan, Mahasiswa</li>
														<li>Mc (Master of ceremony)</li>
													</ul>
													<ul class="list-unstyled mb-1">
														<li>Where they work?</li>
														<li>Universitas</li>
														<li>IBM</li>
													</ul>
												</div>
												<div class="pb-4">
													<h6 class="title">Viewers watch this course</h6>
													<ul class="list-unstyled mb-1">
														<li>What they do?</li>
														<li>Dosen</li>
														<li>Karyawan, Mahasiswa</li>
														<li>Mc (Master of ceremony)</li>
													</ul>
												</div>
												<div class="pb-4">
													<h6 class="title">Instructor</h6>
													<div class="item-people">
														<img data-toggle="modal" data-target="#peopleModalCenter" class="rounded-circle" src="<?php echo base_url('assets/img/course/people.png') ?>" alt="">
														<p data-toggle="modal" data-target="#peopleModalCenter" class="pt-3 author-title">Author: Isvana</p>
													</div>
												</div>
											</div>
											<div class="col-12 col-md-4">
												<div id="div-enroll" class="py-4">
													<form class="form-enroll sidebar_inner" action="#!" method="post">
														<input class="btn btn-primary" type="submit" id="enroll" value="Daftar"/>
														<p class="px-0 py-3 col-10"><input type="checkbox" name="tnc" value="tnc"> I would like to receive email from Tsinghua University and learn about</p> 
													</form>
												</div>
											</div>
										</div>
									</div>

									<div class="container">
										<div class="row">
											<div class="col-12">
												<div id="div-rating" class="pb-4">
													<h6 class="title">Student Feedback/Rate course</h6>
													<h4>4.5 Average Rating</h4>
													<div class="row">
														<div class="col-md-4 col-12 px-0">
															<div class="progress">
																<div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
														<div class="col-md-8 col-12 px-0">
															<div class="rating float-right">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-o"></i>
																<span class="rating-text">80%</span>
															</div>
														</div>
														<div class="col-md-4 col-12 px-0">
															<div class="progress">
																<div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
														<div class="col-md-8 col-12 px-0">
															<div class="rating float-right">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-o"></i>
																<i class="fa fa-star-o"></i>
																<span class="rating-text">60%</span>
															</div>
														</div>
														<div class="col-md-4 col-12 px-0">
															<div class="progress">
																<div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
														<div class="col-md-8 col-12 px-0">
															<div class="rating float-right">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-o"></i>
																<i class="fa fa-star-o"></i>
																<i class="fa fa-star-o"></i>
																<span class="rating-text">40%</span>
															</div>
														</div>
														<div class="col-md-4 col-12 px-0">
															<div class="progress">
																<div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
														<div class="col-md-8 col-12 px-0">
															<div class="rating float-right">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-half-o"></i>
																<i class="fa fa-star-o"></i>
																<span class="rating-text">70%</span>
															</div>
														</div>
														<div class="col-md-4 col-12 px-0">
															<div class="progress">
																<div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
														<div class="col-md-8 col-12 px-0">
															<div class="rating float-right">
																<i class="fa fa-star"></i>
																<i class="fa fa-star-o"></i>
																<i class="fa fa-star-o"></i>
																<i class="fa fa-star-o"></i>
																<i class="fa fa-star-o"></i>
																<span class="rating-text">20%</span>
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
														<p>Kursus ini sangat membantu saya dalam coaching skill</p>
													</div>
													<div>
														<div class="rating">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div>
														<p>Kursus ini membantu saya dalam mengatasi saya dalam meng implentasi di pekerjaan</p>
													</div>
													<a href="!#">Lihat semua ulasan</a>
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
													<h6 class="title">Introduction</h6>
												</div>
												<div class="pb-4">
													<h6 class="title">Materi yang akan dibahas</h6>
													<ul class="list-unstyled">
														<li>Keterampilan dalam coaching</li>
														<li>Approaching</li>
													</ul>
												</div>
												<div class="pb-4">
													<h6 class="title">Kursus ini terdiri dari:</h6>
													<ul id="ul-course" class="list-unstyled mb-5">
														<li>Video belajar</li>
														<li>Pre-test</li>
														<li>Modul</li>
														<li>Post test</li>
														<li>Quiz</li>
														<li>Certificate</li>
														<li>Voucher</li>
													</ul>
												</div>
											</div>
											<div class="col-12 col-md-4">
												<div id="div-enroll-2" class="py-4">
													<form class="form-enroll sidebar_inner" action="#!" method="post">
														<input class="btn btn-primary" type="submit" id="enroll" value="Daftar"/>
														<p class="px-0 py-3 col-10"><input type="checkbox" name="tnc" value="tnc"> I would like to receive email from Tsinghua University and learn about</p> 
													</form>
												</div>
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
	</div>

	<div class="modal fade" id="peopleModalCenter" tabindex="-1" role="dialog" aria-labelledby="peopleModalCenterTitle" aria-hidden="true">
  		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div>
					<img src="<?php echo base_url('assets/img/course/people-2.png') ?>" alt="">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="ti-close" aria-hidden="true"></span>
					</button>
				</div>
				<div class="modal-body">
					<div class="container-fluid">
						<div class="row">
							<div class="col-12">
								<div class="py-3">
									<p>Isyana Sarasvati (lahir di Bandung, 2 Mei 1993; umur 26 tahun) merupakan penyanyi dan penulis lagu berkebangsaan Indonesia. Isyana merupakan lulusan dari Nanyang Academy of Fine Arts, Singapura dan Royal College of Music, Britania Raya.[1][2] Isyana yang menulis sendiri semua lagunya[3] ini juga pernah menjadi penyanyi opera di Singapura.[4][5] Sebelum publik mengenal Isyana Sarasvati sebagai penyanyi pop dan penulis lagu yang populer, ia lebih dulu terjun di dunia musik classic sebagai soloist dan recitalist. Isyana juga telah berpartisipasi dalam berbagai kompetisi musik yang membentuknya menjadi musisi penuh talenta hingga seperti sekarang. Isyana bergabung dengan Sony Music Entertainment Indonesia pada tahun 2014 dan mulai merilis 2 single, "Keep Being You" (2014) dan "Tetap Dalam Jiwa" (2015).[6] Pada September 2018, di 18th Pesta Olahraga Asia 2018 Jakarta-Palembang, Indonesia, Isyana menjadi penampil pertama dalam Closing Ceremony Asian Games dengan lagu "Asia's Who We Are" di hadapan audiensi hingga 55.000 orang lebih di Stadion Utama Gelora Bung Karno.[7]</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php $this->load->view("include/footer.php") ?>
	<script type="text/javascript" src="<?php echo base_url('assets/libs/jquery/js/jquery.sticky.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/course-detail.js') ?>"></script>
</body>
</html>
