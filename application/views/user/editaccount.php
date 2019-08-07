<?php $this->load->view("include/doctype.php") ?>
<html lang="en">
<head>
	<?php $this->load->view("include/incmeta.php") ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/profile.css?v='.version) ?>">
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
								<li class="breadcrumb-item active" aria-current="page">Profile</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</section>

		<section id="content" class="my-5">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-4">
						<div>
							<div class="d-flex flex-row d-profile mb-3">
								<div class="p-0 float left">
									<img src="<?php if(isset($_SESSION['profile_pic'])) echo $_SESSION['profile_pic']; ?>" class="rounded-circle" />
								</div>
								<div class="pl-2 ppt-2 pr-2 pb-2 float left">
									<p><?php if(isset($_SESSION['username'])) echo $_SESSION['username'] ?></p>
								</div>
							</div>
							<ul class="list-unstyled">
								<li><a class="btn" href="<?php echo gDomainProfile ?>">Profile</a></li>
								<li class="active"><a class="btn" href="javascript:void(0);">Kata Sandi</a></li>
							</ul> 
						</div>
					</div>
					<div class="col-12 col-md-7">
						<div>
							<div class="col-md-12">
								<form>
									<div class="form-group">
										<p class="mb-3">Ubah Kata Sandi Saat Ini</p>
									</div>
									<div class="form-group">
										<label>Kata Sandi Saat Ini *</label>
										<input id="currpassword" name="currpassword" placeholder="" class="form-control" required="required" type="password">
									</div>
									<div class="form-group">
										<label>Kata Sandi Baru *</label>
										<input id="password" name="password" placeholder="" class="form-control" required="required" type="password">
									</div>
									<div class="form-group">
										<label>Konfirmasi Kata Sandi Baru *</label>
										<input id="repassword" name="repassword" placeholder="" class="form-control" required="required" type="password">
									</div>
									<div class="form-group mt-4">
										<input class="btn btn-primary" type="submit" id="btn-submit" value="Simpan Perubahan">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	<?php $this->load->view("include/footer.php") ?>
	<script type="text/javascript" src="<?php echo base_url('assets/js/profile.js?v='.version) ?>"></script>
</body>
</html>
