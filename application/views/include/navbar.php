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
				<li class="nav-item dropdown hidden-sm-down">
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
					<form class="form-search my-2 my-lg-0 mx-auto align-middle">
						<div><input type="text" id="autocomplete_search" placeholder="Cari"><i class="ti-search"></i></div>
					</form>
					<div id="search-container"></div>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="<?php  echo base_url('signin')?>">Masuk</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php  echo base_url('/signup')?>">Daftar</a>
			</li>
			</ul>
		</div>
	</div>
</nav>
