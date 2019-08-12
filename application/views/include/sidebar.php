 <!-- Sidebar -->
 <nav id="sidebar">
	<div id="dismiss">
		<i class="fa fa-arrow-left"></i>
	</div>

	<?php if(isset($_SESSION['user_id'])){?>
	<div class="sidebar-header">
		<a href="<?php echo gDomainProfile?>">
			<div class="d-flex flex-row d-profile">
				<div class="p-0 w-25">
					<img src="<?php if(isset($_SESSION['profile_pic'])) echo $_SESSION['profile_pic']; ?>" class="rounded-circle" />
					
				</div>
				<div class="ppt-2 pr-2 pb-2 w-75">
					<p><?php if(isset($_SESSION['username'])) echo $_SESSION['username'] ?></p>
					<p>Selamat datang</p>
				</div>
			</div>
		</a>
	</div>
	<?php } ?>

	<ul class="list-unstyled">
		<?php if(!isset($_SESSION['user_id'])){?>
		<li class="menu-label pb-0">
			<a href="<?php echo gDomainSignIn ?>">Masuk</a>
		</li>
		<li class="menu-label pb-0">
			<a href="<?php echo gDomainSignUp ?>">Daftar</a>
		</li>
		<?php } ?>
		<li class="menu-label">
			<a href="<?php  echo gDomainCourse?>">Kursus</a>
		</li>
		<li class="menu-link pt-0">
			<a href="<?php echo gDomainCourseSubject?>">Coaching</a>
		</li>
		<li class="menu-link">
			<a href="<?php echo gDomainCourseSubject?>">Communication</a>
		</li>
		<li class="menu-link">
			<a href="<?php echo gDomainCourseSubject?>">Customer Services</a>
		</li>
		<li class="menu-link">
			<a href="<?php echo gDomainCourseSubject?>">Leadership</a>
		</li>
		<li class="menu-link">
			<a href="<?php echo gDomainCourseSubject?>">Sales & Marketing</a>
		</li>
		<li class="menu-link">
			<a href="<?php echo gDomainCourseSubject?>">Skills</a>
		</li>
		<li class="menu-link">
			<a href="<?php echo gDomainCourseSubject?>">Business English</a>
		</li>
		<li class="menu-link pb-0">
			<a href="<?php echo gDomainCourseSubject?>">Electronic</a>
		</li>
		<?php if(isset($_SESSION['user_id'])){?>
		<li class="menu-label pb-0">
			<a href="<?php echo gDomainMyCourse ?>">Kursus Qu</a>
		</li>
		<li class="menu-label pb-0">
			<a href="#!">Instruktur</a>
		</li>
		<li class="menu-label">
			<a href="<?php  echo gDomainSignOut?>">Keluar</a>
		</li>
		<?php } ?>
	</ul>
</nav>
 <!-- Sidebar -->
