<?php $this->load->view("include/doctype.php") ?>
<html lang="en">
<head>
	<?php $this->load->view("include/incmeta.php") ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/contactus.css?v='.version) ?>">
</head>
<body>
	<div class="wrapper">
		
		<?php $this->load->view("include/sidebar.php") ?>

		<div id="content">
			<?php $this->load->view("include/header.php") ?>
			<section id="main-slide-3">
				<div>
					<div class="title">
						<div class="container">
							<div class="row">
								<p class="col-12">Hubungi kami</p>
								<p class="col-12"></p>
							</div>
						</div>
					</div>
					<div class="overlay"></div>
				</div>
			</section>

			<section id="breadcrumb-container">
				<div class="container">
					<div class="row">
						<div class="col-12 px-0">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo gDomainName ?>"><i class="ti-home"></i></a></li>
									<li class="breadcrumb-item active" aria-current="page">Kontak Kami</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</section>

			<section id="content" class="my-5">
				<div class="container">
					<div class="row">
					<div class="col-12 col-md-6">
							<p class="contact-title">Kirim Pesan</p>
							<form id="contactus-form" name="contactus-form" action="#!" method="post">
								<div class="form-group">
									<label class="contact-title" for="name">Nama</label>
									<input class="form-control" type="text" id="name" name="name" placeholder="">
								</div>
								<div class="form-group">
									<label class="contact-title" for="email">Email</label>
									<input class="form-control" type="email" id="email" name="email" placeholder="">
								</div>
								<div class="form-group">
									<label class="contact-title" for="title">Judul</label>
									<input class="form-control" type="text" id="title" name="title" placeholder="">
								</div>
								<div class="form-group">
									<label class="contact-title" for="comment">Bagaimana kami dapat membantu Anda?</label>
									<textarea class="form-control" rows="5" id="comment"></textarea>
								</div>
								<div class="form-group">
									<input class="w-25 btn btn-primary" type="submit" id="btn-submit" value="Submit">
								</div>
							</form>
					</div>
					<div class="col-12 col-md-6 contact-detail">
							<div class="col-12">
								<p class="contact-title">Jam Operasional</p>
								<p class="desc">Setiap hari kerja pukul 09.00 - 17.30 WIB</p>
							</div>
							<div class="col-12">
								<p class="contact-title">Email</p>
								<p class="desc">Anda bisa mengirimkan email ke support@qubisa.co.id</p>
							</div>
							<div class="col-12">
								<p class="contact-title">Dukungan Layanan Pelanggan</p>
								<p class="desc">Untuk respon lebih cepat Anda bisa menghubungi Layanan Pelanggan kami di +62 21xxxxx</p>
							</div>
							<div class="col-12">
								<p class="contact-title">Alamat</p>
								<p class="desc">IVECO Rukan Golf Lake Venice, B100<br>Outer Ring Road, Jl. Kamal Raya, Cengkareng Timur, Kecamatan Cengkareng, Jakarta Barat 11730.</p>
								<div id="map"></div>
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
    <script>
        // Initialize and add the map
        function initMap() {
        // The location of Uluru
        var uluru = {lat: -6.1258431, lng: 106.7257791};
        // The map, centered at Uluru
        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 4, center: uluru});
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({position: uluru, map: map});
        }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0EeSbabL4_HIbPhgCeHyQRZh8G9NpaFw&callback=initMap">
    </script>
</body>
</html>
