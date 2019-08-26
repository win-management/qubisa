<?php $this->load->view("include/doctype.php") ?>
<html lang="en">
<head>
	<?php $this->load->view("include/incmeta.php") ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/libs/video-js/css/video-js.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/lecture.css?v='.version) ?>">

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
						<div class="col-12 col-md-8 py-2 py-md-4 my-auto">
							<div>
								<h1 class="py-2">Strategy and Perfomance Execution Excellence (SPEx2) For Line Manager</h1>
								<div class="author pb-4 pb-md-0">
									<span>Created by  Lutan Edukasi</span>
									<span>Last updated 08/2019</span>
								</div>
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
										<a class="nav-link active" id="topic-tab" data-toggle="tab" href="#div-topic" role="tab" aria-controls="topic" aria-selected="true">Topik</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="ratings-tab" data-toggle="tab" href="#div-ratings" role="tab" aria-controls="ratings" aria-selected="false">Peringkat</a>
									</li>
								</ul>
								<div class="tab-content" id="detail-tab-content">
									<div class="tab-pane fade show active" id="div-topic" role="tabpanel" aria-labelledby="topic-tab">
										<ul class="list-unstyled mb-0">
											<li>
												<div class="container">
													<div class="row">
														<div class="col-12 px-xl-0">
															<div class="container">
																<p>Pre-Test</p>
																<ul class="list-unstyled row">
																	<li class="col-6 col-sm-4 col-md-3 col-lg-2">
																		<div class="module">
																			<img src="<?php echo base_url('assets/img/course/icon/ic-pretest.png') ?>" alt=""/>
																		</div>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li>
												<div class="container">
													<div class="row">
														<div class="col-12 px-xl-0">
															<div class="container">
																<p>Book Reference</p>
																<ul class="list-unstyled row">
																	<li class="col-6 col-sm-4 col-md-3 col-lg-2">
																		<div class="module">
																			<img src="<?php echo base_url('assets/img/course/icon/ic-bookref.png') ?>" alt=""/>
																		</div>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li>
												<div class="container">
													<div class="row">
														<div class="col-12 px-xl-0">
															<div class="container">
																<p>Modul 1</p>
																<ul class="list-unstyled row">
																	<li class="col-6 col-sm-4 col-md-3 col-lg-2">
																		<div class="module" onclick="openVideo(1, 'Strategy and Perfomance Execution Excellence (SPEx2) For Line Manager')">
																			<img src="<?php echo base_url('assets/img/course/icon/ic-video.png') ?>" alt=""/>
																			<p>Video 1</p>
																		</div>
																	</li>
																	<li class="col-6 col-sm-4 col-md-3 col-lg-2">
																		<div class="module">
																			<img src="<?php echo base_url('assets/img/course/icon/ic-module.png') ?>" alt=""/>
																			<p>Competency 1</p>
																		</div>
																	</li>
																	<li class="col-6 col-sm-4 col-md-3 col-lg-2">
																		<div class="module" onclick="openVideo(2, 'Strategy and Perfomance Execution Excellence (SPEx2) For Line Manager')">
																			<img src="<?php echo base_url('assets/img/course/icon/ic-video.png') ?>" alt=""/>
																			<p>Video 2</p>
																		</div>
																	</li>
																	<li class="col-6 col-sm-4 col-md-3 col-lg-2">
																		<div class="module">
																			<img src="<?php echo base_url('assets/img/course/icon/ic-quiz.png') ?>" alt=""/>
																			<p>Quiz 1</p>
																		</div>
																	</li>
																</ul>
															<div>
														</div>
													</div>
												</div>
											</li>
											<li>
												<div class="container">
													<div class="row">
														<div class="col-12 px-xl-0">
															<div class="container">
																<p>Modul 2</p>
																<ul class="list-unstyled row">
																	<li class="col-6 col-sm-4 col-md-3 col-lg-2">
																		<div class="module" onclick="openVideo(3, 'Strategy and Perfomance Execution Excellence (SPEx2) For Line Manager')">
																			<img src="<?php echo base_url('assets/img/course/icon/ic-video.png') ?>" alt=""/>
																			<p>Video 1</p>
																		</div>
																	</li>
																	<li class="col-6 col-sm-4 col-md-3 col-lg-2">
																		<div class="module">
																			<img src="<?php echo base_url('assets/img/course/icon/ic-quiz.png') ?>" alt=""/>
																			<p>Quiz 1</p>
																		</div>
																	</li>
																	<li class="col-6 col-sm-4 col-md-3 col-lg-2">
																		<div class="module" onclick="openVideo(4, 'Strategy and Perfomance Execution Excellence (SPEx2) For Line Manager')">
																			<img src="<?php echo base_url('assets/img/course/icon/ic-video.png') ?>" alt=""/>
																			<p>Video 2</p>
																		</div>
																	</li>
																</ul>
															<div>
														</div>
													</div>
												</div>
											</li>
											<li>
												<div class="container">
													<div class="row">
														<div class="col-12 px-xl-0">
															<div class="container">
																<p>Modul 3</p>
																<ul class="list-unstyled row">
																	<li class="col-6 col-sm-4 col-md-3 col-lg-2">
																		<div class="module" onclick="openVideo(5, 'Strategy and Perfomance Execution Excellence (SPEx2) For Line Manager')">
																			<img src="<?php echo base_url('assets/img/course/icon/ic-video.png') ?>" alt=""/>
																			<p>Video 1</p>
																		</div>
																	</li>
																	<li class="col-6 col-sm-4 col-md-3 col-lg-2">
																		<div class="module">
																			<img src="<?php echo base_url('assets/img/course/icon/ic-quiz.png') ?>" alt=""/>
																			<p>Quiz 1</p>
																		</div>
																	</li>
																</ul>
															<div>
														</div>
													</div>
												</div>
											</li>
											<li>
												<div class="container">
													<div class="row">
														<div class="col-12 px-xl-0">
															<div class="container">
																<p>Post Test</p>
																<ul class="list-unstyled row">
																	<li class="col-6 col-sm-4 col-md-3 col-lg-2">
																		<div class="module">
																			<img class="img-lock" src="<?php echo base_url('assets/img/course/icon/ic-lock.png') ?>" alt=""/>
																			<div class="m-lock"></div>
																			<img src="<?php echo base_url('assets/img/course/icon/ic-posttest.png') ?>" alt=""/>
																		</div>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li>
												<div class="container">
													<div class="row">
														<div class="col-12 px-0 py-5">
															<div class="container">
																<div class="col-md-4 col-12">
																	<div class="progress mb-2">
																		<div class="progress-bar" role="progressbar" style="width: 8%" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
																<p class="col-12 ml-0">3 of  6 item s complete</p>
															</div>
														</div>
													</div>
												</div>
											</li>
										</ul>
									</div>
									<div class="tab-pane fade" id="div-ratings" role="tabpanel" aria-labelledby="ratings-tab">
										<div class="container">
											<div class="row">
												<div class="title col-12 pt-4 text-center">
													<p>Peringkat Tertinggi</p>
												</div>
												<div class="col-12">
													<div class="py-4">
														<table class="table">
															<tbody>
																<tr>
																	<th class="star star-red" scope="row">1</th>
																	<td class="font-weight-bold">ROMI ARIFIN</td>
																	<td>100</td>
																</tr>
																<tr>
																	<th class="star star-blue" scope="row">2</th>
																	<td class="font-weight-bold">Dina M</td>
																	<td>100</td>
																</tr>
																<tr>
																	<th class="star star-green" scope="row">3</th>
																	<td class="font-weight-bold">Joni Iskandar</td>
																	<td>100</td>
																</tr>
																<tr>
																	<th scope="row">4</th>
																	<td>Siaman</td>
																	<td>100</td>
																</tr>
																<tr>
																	<th scope="row">5</th>
																	<td>Agas siam</td>
																	<td>100</td>
																</tr>
																<tr>
																	<th scope="row">6</th>
																	<td>Bajuri</td>
																	<td>100</td>
																</tr>
																<tr>
																	<th scope="row">7</th>
																	<td>Wuling</td>
																	<td>90</td>
																</tr>
																<tr>
																	<th scope="row">8</th>
																	<td>Bima</td>
																	<td>90</td>
																</tr>
																<tr>
																	<th scope="row">9</th>
																	<td>Semar</td>
																	<td>90</td>
																</tr>
																<tr>
																	<th scope="row">10</th>
																	<td>Cupid</td>
																	<td>90</td>
																</tr>
																<tr>
																	<td class="dots"><span></span><span></span><span></span></td>
																</tr>
																<tr class="my-score">
																	<th scope="row">78</th>
																	<td>Alex</td>
																	<td>75</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<div class="bg-gray container">
													<div class="row pl-3 py-5">
														<div class="my-rating col-12 py-5">
															<p class="font-weight-600">Anda berada di peringkat 78 dari 99 orang</p>
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
				</div>
			</section>

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
	<script type="text/javascript" src="<?php echo base_url('assets/libs/video-js/js/video.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/libs/video-js/js/videojs-flash.min.js') ?>"></script>
	<script>videojs.options.flash.swf ="<?php echo base_url('assets/libs/video-js/video-js.swf') ?>";</script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/lecture.js?v='.version) ?>"></script>
</body>
</html>
