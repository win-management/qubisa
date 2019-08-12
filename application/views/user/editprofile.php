<?php $this->load->view("include/doctype.php") ?>
<html lang="en">
<head>
	<?php $this->load->view("include/incmeta.php") ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/profile.css?v='.version) ?>">
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
									<li class="breadcrumb-item active" aria-current="page">Profile</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</section>

			<section id="main-content" class="my-5">
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
									<li  class="active"><a class="btn" href="javascript:void(0);">Profile</a></li>
									<li><a class="btn" href="<?php echo gDomainAccount ?>">Kata Sandi</a></li>
								</ul> 
							</div>
						</div>
						<div class="col-12 col-md-7">
							<div>
								<div class="col-md-12">
									<form id="edit-profile" name="edit-profile" action="#!" method="post" enctype="multipart/form-data">
										<div class="form-group">
											<p>Lengkapi Profil Anda</p>
											<div id="div-profile-pic" class="mb-3">
												<img src="<?php echo base_url("assets/img/user/ic-profile-pic.png") ?>" />
												<p>Ubah foto</p>
											</div>
											<input type="file" name="profile-pic" id="profile-pic" accept="image/*" class="d-none">
										</div>
										<div class="form-group">
											<label>Nama Lengkap *</label>
											<input id="username" name="username" placeholder="" class="form-control" required="required" type="text">
										</div>
										<div class="form-group">
											<label>Nomor Handphone *</label>
											<input id="hp" name="hp" placeholder="" class="form-control" required="required" type="phone">
										</div>
										<div class="form-group">
											<label>Jenis Kelamin *</label>
											<select class="form-control" id="gender" name="gender">
												<option value="1">Pria</option>
												<option value="2">Wanita</option>
											</select>
										</div>
										<div class="form-group">
											<label>Email *</label>
											<input id="email" name="email" placeholder="" class="form-control" required="required" type="email">
										</div>
										<div class="form-group">
											<p class="mb-4">*QuBisa  berkomitmen untuk menjaga kerahasiaan data akun anda.</p>
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
		</div>

		<div class="main-overlay"></div>
	</div>
	<?php $this->load->view("include/incjs.php") ?>
	<script type="text/javascript" src="<?php echo base_url('assets/js/profile.js?v='.version) ?>"></script>
</body>
</html>
