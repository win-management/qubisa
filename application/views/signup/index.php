<?php $this->load->view("include/doctype.php") ?>
<html lang="en">
<head>
	<?php $this->load->view("include/incmeta.php") ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/signup.css') ?>">
</head>
<body>
	<?php $this->load->view("include/header.php") ?>

	<div class="main-content">
		<section id="breadcrumb-container">
			<div class="container">
				<div class="row">
					<div class="col-12 px-0">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?php echo gDomainName ?>"><i class="ti-home"></i></a></li>
								<li class="breadcrumb-item active" aria-current="page">Daftar</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</section>

		<section id="content" class="pt-2">
			<div id="signup" class="container my-5">
				<div class="row">
					<div class="w-100">
						<div class="row">
							<p class="col-md-12">Daftar dengan</p>
							<div class="btn-socmed w-100">
								<button id="fb-login">Facebook</button>
								<button id="google-login">Google</button>
							</div>
							<p class="col-md-12 text-detail">Atau daftar dengan email</p>
						</div>
					</div>
					<form id="login-form" class="w-100" name="login-form" action="#!" method="post">
						<div class="row">
							<div class="col-md-12">
								<input class="w-100" type="text" id="name" name="name" placeholder="Nama lengkap">
							</div>
							<div class="col-md-12">
								<input class="w-100" type="email" id="email" name="email" placeholder="Username atau alamat email">
							</div>
							<div class="col-md-12">
								<input class="w-100" type="password" id="password" name="password" placeholder="Kata sandi">
							</div>
							<div class="col-md-12">
								<input class="w-100" type="password" id="repassword" name="repassword" placeholder="Konfirmasi kata sandi">
							</div>
							<div class="col-md-12">
								<input class="w-100" type="phone" id="phone" name="phone" placeholder="Nomor Handphone +62">
							</div>
							<div class="col-md-12">
								<input class="w-100 btn btn-primary" type="submit" id="login" value="Buat akun saya">
							</div>
							<div class="col-md-12 form-footer">
								<p class="mx-4 mx-md-5">Dengan membuat akun, Anda menyetujui <a href="#!">Qubisa End User License Agreement</a> dan <a href="#!">Qubisa Term of Service dan Honor Code</a> & mengakui <a href="#!">Privacy Policy</a></p>
							</div>
						</div>
					</form>
					<div class="w-100">
						<div class="row">
							<div class="btn-login w-100">
								<a class="btn btn-default" href="<?php echo base_url('signin')?>">Masuk</a>
								<div>
									<div class="text-center">Sudah punya akun</div>
									<div class="text-center">Silakan masuk</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<?php $this->load->view("include/footer.php") ?>
	<script type="text/javascript" src="<?php echo base_url('assets/js/signup.js') ?>"></script>
</body>
</html>
