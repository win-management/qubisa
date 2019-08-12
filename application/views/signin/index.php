<?php $this->load->view("include/doctype.php") ?>
<html lang="en">
<head>
	<?php $this->load->view("include/incmeta.php") ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/signin.css?v='.version) ?>">
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
									<li class="breadcrumb-item active" aria-current="page">Masuk</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</section>

			<section id="main-content" class="pt-2">
				<div id="signin" class="container my-5">
					<div class="row">
						<div style="color: red;margin-bottom: 15px;">
							<?php
								if($this->session->flashdata('message')){ 
									echo $this->session->flashdata('message'); 
								}
							?>
						</div>
						<form id="login-form" action="<?php echo base_url('signin/authorize') ?>" class="w-100" name="login-form" method="post">
							<div class="row">
								<div class="col-md-12">
									<input class="w-100" type="email" id="email" name="email" placeholder="Username atau alamat email">
								</div>
								<div class="col-md-12">
									<input class="w-100" type="password" id="password" name="login" placeholder="Kata sandi">
								</div>
								<div class="col-md-12 form-footer">
									<a href="#!">Lupa kata sandi?</a>
								</div>
								<div class="col-md-12">
									<input class="w-100 btn btn-primary" type="submit" id="login" value="Masuk">
								</div>
							</div>
						</form>
						<div class="w-100">
							<div class="row">
								<p class="col-md-12 text-center">Atau masuk dengan</p>
								<div class="btn-socmed w-100">
									<button id="fb-login">Facebook</button>
									<button id="google-login">Google</button>
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
	<script type="text/javascript" src="<?php echo base_url('assets/js/signin.js?v='.version) ?>"></script>
</body>
</html>
