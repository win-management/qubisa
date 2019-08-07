<nav class="navbar navbar-expand-lg navbar-light py-2">
	<div class="container">
		<a class="navbar-brand" href="<?php echo base_url()?>"><img src="<?php echo base_url('assets/img/logo-qubisa.png') ?>" alt=""></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="ul-search navbar-nav mx-auto">
				<li class="nav-item hidden-sm-up">
					<a class="nav-link" href="<?php  echo gDomainCourse?>">Kursus</a>
				</li>
				<li class="nav-item dropdown dropdown-menu-course hidden-sm-down">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kursus</a>
					<ul class="dropdown-menu dropdown-menu-left animate slideIn" aria-labelledby="navbarDropdown">
						<li class="dropdown-item disabled">Kategori Kursus <a href="<?php echo gDomainCourse?>" class="btn btn-primary">Lihat Semua Kursus</a></li>
						<li class="dropdown-item"><a href="<?php echo gDomainCourseSubject?>">Coaching</a></li>
						<li class="dropdown-item"><a href="<?php echo gDomainCourseSubject?>">Communication</a></li>
						<li class="dropdown-item"><a href="<?php echo gDomainCourseSubject?>">Customer Service</a></li>
						<li class="dropdown-item"><a href="<?php echo gDomainCourseSubject?>">Leadership</a></li>
						<li class="dropdown-item"><a href="<?php echo gDomainCourseSubject?>">Sales & Marketing</a></li>
						<li class="dropdown-item"><a href="<?php echo gDomainCourseSubject?>">Skills</a></li>
						<li class="dropdown-item"><a href="<?php echo gDomainCourseSubject?>">Business English</a></li>
						<li class="dropdown-item"><a href="<?php echo gDomainCourseSubject?>">Electronic</a></li>
					</ul>
				</li>
				<li class="nav-item hidden-sm-down">
					<form class="form-search <?php if(isset($_SESSION['user_id'])){?>is-user<?php } ?> my-2 my-lg-0 mx-auto align-middle">
						<div><input type="text" id="autocomplete_search" placeholder="Cari"><i class="ti-search"></i></div>
					</form>
					<div id="search-container"></div>
				</li>
			</ul>
			<?php if(isset($_SESSION['user_id'])){?>
				<ul class="navbar-nav ml-auto nav-profile">
					<li class="nav-item">
						<a class="nav-link" href="#!">Instruktur</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo gDomainMyCourse ?>">Kursus Qu</a>
					</li>
					<li class="nav-item hidden-sm-up">
						<a class="nav-link" href="<?php  echo gDomainProfile?>">Profile Qu</a>
					</li>
					<li class="nav-item hidden-sm-up">
						<a class="nav-link" href="<?php  echo gDomainSignOut?>">Keluar</a>
					</li>
					<li class="nav-item dropdown dropdown-menu-notif hidden-sm-down">
						<a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<img src="<?php echo base_url('assets/img/ic-notification.png'); ?>" width="20" />
						</a>
						<span class="badge badge-danger">8</span>
						<ul class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="notifDropdown">
							<li>
								Notifications <a href="#!" class="dropdown-menu-header pull-right"><i class="ti-settings"></i></a>
							</li>
							<li>
								<ul class="timeline timeline-icons timeline-sm">
									<li class="no-notif">
										<p>
											No notification
										</p>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="nav-item dropdown avatar dropdown-menu-profile hidden-sm-down">
						<a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<img class="rounded-circle" width="48" src="<?php if(isset($_SESSION['profile_pic'])) echo $_SESSION['profile_pic']; ?>" alt="">
						</a>
						<ul class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="profileDropdown">
							<li class="dropdown-item disabled">
								<a href="<?php echo gDomainProfile?>">
									<div class="d-flex flex-row d-profile">
										<div class="p-0 w-25">
											<img src="<?php if(isset($_SESSION['profile_pic'])) echo $_SESSION['profile_pic']; ?>" class="rounded-circle" />
											
										</div>
										<div class="pl-2 ppt-2 pr-2 pb-2 w-75">
											<p><?php if(isset($_SESSION['username'])) echo $_SESSION['username'] ?></p>
											<p><?php if(isset($_SESSION['email'])) echo $_SESSION['email'] ?></p>
										</div>
									</div>
								</a>
							</li>
							<li class="dropdown-item"><a href="<?php echo gDomainProfile?>">Profile Qu</a></li>
							<li class="dropdown-item"><a href="<?php echo gDomainSupport?>">Dukungan</a></li>
							<li class="dropdown-item"><a href="<?php echo gDomainSignOut?>">Keluar</a></li>
						</ul>
					</li>
				</ul>
			<?php }else{?>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="<?php echo gDomainSignIn ?>">Masuk</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo gDomainSignUp ?>">Daftar</a>
					</li>
				</ul>
			<?php } ?>
		</div>
	</div>
</nav>
