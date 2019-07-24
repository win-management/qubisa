<?php $this->load->view("include/doctype.php") ?>
<html lang="en">
<head>
	<?php $this->load->view("include/incmeta.php") ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/signin.css') ?>">
</head>
<body>
	<?php $this->load->view("include/header.php") ?>

	<section id="content" class="pt-2">
		<div id="signin" class="container my-5">
			<div class="row">
				<form id="login-form" class="w-100" name="login-form" action="#!" method="post">
					<div class="row">
						<div class="col-md-12">
							<input class="w-100" type="email" id="email" name="email" placeholder="Username or e-mail address">
						</div>
						<div class="col-md-12">
							<input class="w-100" type="password" id="password" name="login" placeholder="Password">
						</div>
						<div class="col-md-12 form-footer">
							<a href="#!">Forgot your password?</a>
						</div>
						<div class="col-md-12">
							<input class="w-100 btn btn-primary" type="submit" id="login" value="Sign in">
						</div>
					</div>
				</form>
				<div class="w-100">
					<div class="row">
						<p class="col-md-12 text-center">Or sign in with</p>
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
	<script type="text/javascript" src="<?php echo base_url('assets/js/signin.js') ?>"></script>
</body>
</html>
