
<!-- pages-title-start -->
<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<h2>Thông tin liên hệ</h2>
					<ul class="text-left">
						<li><a href="?act=home">Trang chủ</a></li>
						<li><span> / </span>Liên hệ</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- pages-title-end -->
<!-- contact content section start -->
<div class="pages contact-page section-padding">
	<div class="container text-center">
		<div class="row">
			<div class="col-sm-12">
				<div class="googleMap-info">
					<div id="googleMap"></div>
					<div class="map-info">
						<p><strong>TP SHOP</strong></p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-10 col-text-center">
				<div class="contact-details">
					<div class="row">
						<div class="col-sm-4">
							<a class="single-contact"
							style = "text-transform: none;text-decoration: underline;"
							href= "https://www.google.com/maps/place/Thu+Mua+%C4%90%E1%BB%93+C%C5%A9+t%E1%BA%A1i+H%E1%BA%A3i+Ph%C3%B2ng/@20.8614913,106.6247176,13z/data=!4m10!1m2!2m1!1zxJHhu5MgZ2lhIGTFqW5nIGPFqSBI4bqjaSBQaMOybmc!3m6!1s0x314a7bc9f97a4841:0x56078c48de4aeb57!8m2!3d20.8614913!4d106.6968154!15sCiDEkeG7kyBnaWEgZMWpbmcgY8WpIEjhuqNpIFBow7JuZ1oiIiDEkeG7kyBnaWEgZMWpbmcgY8WpIGjhuqNpIHBow7JuZ5IBEHNlY29uZF9oYW5kX3Nob3DgAQA!16s%2Fg%2F11js2vy6z9?hl=vi-VN"
							target = "_blank"
							>
								<i class="mdi mdi-map-marker"></i>
								<p>939 Nguyễn Bỉnh Khiêm</p>
								<p>Đông Hải 1, Hải An, Hải Phòng</p>
							</a>
						</div>
						<div class="col-sm-4">
							<div class="single-contact">
								<i class="mdi mdi-phone"></i>
								<p>(+84) 123456789</p>
								<p>(+84) 987654321</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="single-contact">
								<i class="mdi mdi-email"></i>
								<p>hoangtamtom@gmail.com</p>
								<p>epu@gmail.com</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- contact content section end -->
<!-- Google Map JS -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
	function initialize() {
	
		var mapOptions = {
		zoom: 17,
		hue: '#E9E5DC',
		gestureHandling:'none',
		scrollwheel: false,
		mapTypeId:google.maps.MapTypeId.TERRAIN,
		center: new google.maps.LatLng(20.864138007802193, 106.69612872696685)
		};

		var map = new google.maps.Map(document.getElementById('googleMap'),
			mapOptions);


		var marker = new google.maps.Marker({
		position: map.getCenter(),
		icon: 'public/img/map-marker.png',
		map: map,
		});

	}

	google.maps.event.addDomListener(window, 'load', initialize);
	google.maps.event.addListener(marker, 'click', function() {window.location.href = marker.url;});

</script>
