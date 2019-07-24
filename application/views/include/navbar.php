<nav class="navbar fixed-top navbar-expand-lg navbar-light py-2">
	<div class="container">
		<a class="navbar-brand" href="<?php echo base_url()?>"><img src="<?php echo base_url('assets/img/logo-qubisa.png') ?>" alt=""></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="ul-search navbar-nav mx-auto">
				<li class="nav-item">
					<p class="align-middle pr-3">Courses</p>
				</li>
				<li class="nav-item">
					<form class="form-search my-2 my-lg-0 mx-auto align-middle">
						<div><input type="text" id="autocomplete_search" placeholder="Search"><i class="ti-search"></i></div>
					</form>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="<?php  echo base_url('signin')?>">Sign in</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php  echo base_url('/signup')?>">Sign up</a>
			</li>
			</ul>
		</div>
	</div>
</nav>
