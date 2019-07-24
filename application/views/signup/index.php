<?php $this->load->view("include/doctype.php") ?>
<html lang="en">
<head>
	<?php $this->load->view("include/incmeta.php") ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/signup.css') ?>">
</head>
<body>
	<?php $this->load->view("include/header.php") ?>

	<section id="content" class="pt-2">
		<div id="signup" class="container my-5">
			<div class="row">
				<div class="w-100">
					<div class="row">
						<p class="col-md-12">Sign up with</p>
						<div class="btn-socmed w-100">
							<button id="fb-login">Facebook</button>
							<button id="google-login">Google</button>
						</div>
						<p class="col-md-12 text-detail">Or sign up with email</p>
					</div>
				</div>
				<form id="login-form" class="w-100" name="login-form" action="#!" method="post">
					<div class="row">
						<div class="col-md-12">
							<input class="w-100" type="text" id="name" name="name" placeholder="Full Name">
						</div>
						<div class="col-md-12">
							<input class="w-100" type="email" id="email" name="email" placeholder="Username or e-mail address">
						</div>
						<div class="col-md-12">
							<input class="w-100" type="password" id="password" name="password" placeholder="Password">
						</div>
						<div class="col-md-12">
							<input class="w-100" type="password" id="repassword" name="repassword" placeholder="Retype password">
						</div>
						<div class="col-md-12">
							<input class="w-100" type="phone" id="phone" name="phone" placeholder="Handphone No +62">
						</div>
						<div class="col-md-12">
							<input class="w-100 btn btn-primary" type="submit" id="login" value="Create my account">
						</div>
						<div class="col-md-12 form-footer">
							<p class="mx-4 mx-md-5">By creating an account, you agree to the <a href="#!">Qubisa End User License Agreement</a> and <a href="#!">Qubisa Term of Service and Honor Code</a> & acknowledge the <a href="#!">Privacy Policy</a></p>
						</div>
					</div>
				</form>
				<div class="w-100">
					<div class="row">
						<div class="btn-login w-100">
							<a href="<?php echo base_url('signin')?>"><button>Sign in</button></a>
							<div>
								<div class="text-center">Already have account</div>
								<div class="text-center">Please sign in</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php $this->load->view("include/footer.php") ?>
	<script type="text/javascript" src="<?php echo base_url('assets/js/signup.js') ?>"></script>
</body>
</html>
