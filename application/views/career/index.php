<?php $this->load->view("include/doctype.php") ?>
<html lang="en">
<head>
	<?php $this->load->view("include/incmeta.php") ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/career.css?v='.version) ?>">
</head>
<body>
	<div class="wrapper">
		
		<?php $this->load->view("include/sidebar.php") ?>

		<div id="content">
			<?php $this->load->view("include/header.php") ?>
			<section id="main-slide-3">
				<div>
					<div class="overlay"></div>
					<div class="title">
						<div class="col-12 col-md-6 pull-left"></div>
						<div class="col-12 col-md-6 pull-right"></div>
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
									<li class="breadcrumb-item active" aria-current="page">Career</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</section>

			<section id="brief" class="mb-5">
				<div class="container">
					<div class="row text-center">
						<p class="w-100">We Want You To Be Our</p>
						<p class="w-100">Candidates!</p>
					</div>
				</div>
			</section>

			<section id="jobs" class="mb-5">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-4 text-center">
							<div>
								<p>Product & Operations</p>
								<div>
									<p>Strategize and monitor <br> the running of the business</p>
									<p>See 6 positions  ></p>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-4 text-center">
							<div>
								<p>Technology</p>
								<div>
									<p>Strategize and monitor <br> the running of the business</p>
									<p>See 6 positions  ></p>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-4 text-center">
							<div>
								<p>Marketing</p>
								<div>
									<p>Strategize and monitor <br> the running of the business</p>
									<p>See 6 positions  ></p>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-4 text-center">
							<div>
								<p>Product Design</p>
								<div>
									<p>Strategize and monitor <br> the running of the business</p>
									<p>See 6 positions  ></p>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-4 text-center">
							<div>
								<p>Content Development</p>
								<div>
									<p>Strategize and monitor <br> the running of the business</p>
									<p>See 6 positions  ></p>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-4 text-center">
							<div>
								<p>Field Counselor</p>
								<div>
									<p>Strategize and monitor <br> the running of the business</p>
									<p>See 6 positions  ></p>
								</div>
							</div>
						</div>
						<div class="col-12 text-center mt-5 mb-3">
							<a class="btn btn-primary" href="<?php echo gDomainCourse ?>">View All Jobs</a>
						</div>
					</div>
				</div>
			</section>

			<section id="job-lists">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="col-12 p-0 text-center">
								<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="pills-technology-tab" data-toggle="pill" href="#pills-technology" role="tab" aria-controls="pills-technology" aria-selected="true">Technology</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="pills-marketing-tab" data-toggle="pill" href="#pills-marketing" role="tab" aria-controls="pills-marketing" aria-selected="false">Marketing & Sales</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="pills-content-tab" data-toggle="pill" href="#pills-content" role="tab" aria-controls="pills-content" aria-selected="false">Content Development</a>
									</li>
								</ul>
							</div>
							<div class="tab-content" id="pills-tabContent">
								<div class="tab-pane fade show active" id="pills-technology" role="tabpanel" aria-labelledby="pills-technology-tab">
									<ul class="list-unstyled">
										<li><a href="https://www.jobstreet.co.id/id/job/2975807/sources/2" target="_blank">Programmer (Mobile Apps Developer)</a></li>
									</ul>
								</div>
								<div class="tab-pane fade" id="pills-marketing" role="tabpanel" aria-labelledby="pills-marketing-tab">
									<p class="text-center">Sorry, no vacancy for now.</p>
								</div>
								<div class="tab-pane fade" id="pills-content" role="tabpanel" aria-labelledby="pills-content-tab">
									<p class="text-center">Sorry, no vacancy for now.</p>
								</div>
							</div>
						</div>
						<div id="div-background"></div>
				</div>
			</section>

			<section id="more-jobs" class="py-5">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="text-center">
								<p>Do you like what you see?</p>
								<a class="btn btn-default" href="#job-lists">Find Position & Apply</a>
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
</body>
</html>
