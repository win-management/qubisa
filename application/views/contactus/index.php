<?php $this->load->view("include/doctype.php") ?>
<html lang="en">
<head>
	<?php $this->load->view("include/incmeta.php") ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/contactus.css') ?>">
</head>
<body>
	<?php $this->load->view("include/header.php") ?>
	<div class="main-content">
		<section id="main-slide-3">
			<div>
				<div class="title">
					<div class="container">
						<div class="row">
							<p class="col-12">Hubungi kami</p>
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
						<p class="title">Kirim Pesan</p>
						<form id="contactus-form" name="contactus-form" action="#!" method="post">
							<div class="form-group">
								<label class="title" for="name">Nama</label>
								<input class="form-control" type="text" id="name" name="name" placeholder="">
							</div>
							<div class="form-group">
								<label class="title" for="email">Email</label>
								<input class="form-control" type="email" id="email" name="email" placeholder="">
							</div>
							<div class="form-group">
								<label class="title" for="title">Judul</label>
								<input class="form-control" type="text" id="title" name="title" placeholder="">
							</div>
							<div class="form-group">
								<label class="title" for="comment">Bagaimana kami dapat membantu Anda?</label>
								<textarea class="form-control" rows="5" id="comment"></textarea>
							</div>
							<div class="form-group">
								<input class="w-25 btn btn-primary" type="submit" id="btn-submit" value="Submit">
							</div>
						</form>
				</div>
				<div class="col-12 col-md-6">
						<div class="col-12">
							<p class="title">Jam Operasional</p>
							<p class="desc">Setiap hari kerja pukul 09.00 - 17.30 WIB</p>
						</div>
						<div class="col-12">
							<p class="title">Email</p>
							<p class="desc">Anda bisa mengirimkan email ke support@qubisa.co.id</p>
						</div>
						<div class="col-12">
							<p class="title">Dukungan Layanan Pelanggan</p>
							<p class="desc">Untuk respon lebih cepat Anda bisa menghubungi Layanan Pelanggan kami di +62 21xxxxx</p>
						</div>
						<div class="col-12">
							<p class="title">Alamat</p>
							<div id="map"></div>
						</div>
				</div>
				</div>
			</div>
		</section>
	</div>

	<?php $this->load->view("include/footer.php") ?>
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
