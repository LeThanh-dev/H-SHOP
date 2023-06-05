<!-- pages-title-start -->
<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<h2>Đăng ký thông tin thu mua sản phẩm</h2>

					<ul class="text-left">
						<li><a href="?act=home">Trang chủ</a></li>
						<li><span> / </span>
							Thu mua


						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- pages-title-end -->
<!-- login content section start -->
<section class="pages login-page section-padding">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">


				<div class="main-input padding60" id="dangnhap">
					<div class="log-title">
						<h3><strong>Thông tin thu mua</strong></h3>
					</div>
					<div class="login-text">
						<div class="custom-input">
							
							<?php if (isset($_COOKIE['msg1'])) { ?>
								<div class="alert alert-danger">
									<strong>Thông báo</strong> <?= $_COOKIE['msg1'] ?>
								</div>
							<?php } else if (isset($_COOKIE['msg'])) { ?>
								<div class="alert alert-success">
									<strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
								</div>

							<?php } ?>
							<form onsubmit="return validateForm()" action="?act=thumua&xuli=save" method="POST" role="form" enctype="multipart/form-data">
								<div class="form-group">
									<label for="cars">Danh mục: </label>
									<select id="MaDM" name="MaDM" class="form-control" onchange="hienThiLoaiSanPham()">
										<?php foreach ($data_dm as $row) { ?>
											<option id="DM<?= $row['MaDM'] ?>" value="<?= $row['MaDM'] ?>"><?= $row['TenDM'] ?></option>
										<?php } ?>
									</select>
								</div>

								<div class="form-group">
									<label for="cars">Loại sản phẩm: </label>
									<select id="MaLSP" name="MaLSP" class="form-control">
										<?php foreach ($data_lsp as $row) { ?>
											<option id="Loai<?= $row['MaDM'] ?>" value="<?= $row['MaLSP'] ?>" style="display: none;"><?= $row['TenLSP'] ?></option>
										<?php } ?>
									</select>
								</div>


								<div class="form-group">
									<label for="">Tên sản phẩm <span style="color:red">(*)</span></label>
									<input type="text" required class="form-control" id="" placeholder="" name="TenSP">
									<input type="hidden" class="form-control" id="" placeholder="" value="<?= $_SESSION['MaND'] ?>" name="MaND">
								</div>
								<div class="form-group">
									<label for="">Đơn giá <span style="color:red">(*)</label>
									<input type="number" required class="form-control" id="" placeholder="" name="DonGia">
								</div>
								<div class="form-group">
									<label for="">Số lượng <span style="color:red">(*)</label>
									<input type="number" required class="form-control" id="" placeholder="" name="SoLuong">
								</div>
								<div class="form-group">
									<label for="">Hình ảnh 1 <span style="color:red">(*)</label>
									<input type="file" onchange="previewImage(event)" class="form-control" required id="" placeholder="" name="HinhAnh1" accept="image/*">
									<img id="preview" style="max-width: 250px; height: auto; margin-top: 10px;">
								</div>
								<div class="form-group">
									<label for="">Hình ảnh 2<span style="color:red">(*)</label>
									<input type="file" accept="image/*" class="form-control" onchange="previewImage1(event)" required id="" placeholder="" name="HinhAnh2">
									<img id="preview1" style="max-width: 250px; height: auto; margin-top: 10px;">
								</div>
								<div class="form-group">
									<label for="">Hình ảnh 3<span style="color:red">(*)</label>
									<input type="file" accept="image/*" class="form-control" required id="" onchange="previewImage2(event)" placeholder="" name="HinhAnh3">
									<img id="preview2" style="max-width: 250px; height: auto; margin-top: 10px;">
								</div>

								<div class="form-group">
									<label for="">Hãng sản phẩm<span style="color:red">(*)</label>
									<input type="text" class="form-control" required id="" placeholder="" name="Hang">
								</div>
								<div class="form-group">
									<label for="">Kích thước<span style="color:red">(*)</label>
									<input type="text" class="form-control" required id="" placeholder="" name="KichThuoc">
								</div>
								<div class="form-group">
									<label for="">Trọng lượng<span style="color:red">(*)</label>
									<input type="text" class="form-control" id="" placeholder="" name="TrongLuong">
								</div>
								<div class="form-group">
									<label for="">Chất liệu<span style="color:red">(*)</label>
									<input type="text" class="form-control" required id="" placeholder="" name="ChatLieu">
								</div>



								<label for="">Mô tả<span style="color:red">(*)</label>
								<div class="form-group">
									<textarea class="form-control" id="summernote" placeholder="" required name="MoTa"></textarea>

								</div>

								<button type="submit" name="thumua" class="btn btn-primary">Gửi thông tin</button>
							</form>
						</div>
					</div>
				</div>
			</div>





		</div>
	</div>
</section>
<!-- login content section end -->

<script>
	$(document).ready(function() {
		$('#summernote').summernote();
	});
</script>
<script>
	function validateForm() {
		var mota = document.getElementById("summernote").value;
		var motaError = document.getElementById("mota-error");
		if (mota.trim() == "") {
			motaError.style.display = "block";
			return false;
		} else {
			motaError.style.display = "none";
			return true;
		}
	}

	function previewImage(event) {
		var reader = new FileReader();

		reader.onload = function() {
			var output = document.getElementById('preview');

			output.src = reader.result;

		};
		reader.readAsDataURL(event.target.files[0]);


	}

	function previewImage1(event) {
		var reader = new FileReader();

		reader.onload = function() {
			var output = document.getElementById('preview1');

			output.src = reader.result;

		};
		reader.readAsDataURL(event.target.files[0]);


	}

	function previewImage2(event) {
		var reader = new FileReader();

		reader.onload = function() {
			var output = document.getElementById('preview2');

			output.src = reader.result;

		};
		reader.readAsDataURL(event.target.files[0]);


	}
</script>
<script>
	function hienThiLoaiSanPham() {
		var selectedMaDM = document.getElementById("MaDM").value;
		var selectedLoaiSanPham = document.getElementById("MaLSP");

		// Ẩn tất cả các tùy chọn "Loại sản phẩm"
		var loaiSanPhamOptions = document.querySelectorAll('[id^="Loai"]');
		loaiSanPhamOptions.forEach(function(option) {
			option.style.display = "none";
		});

		// Hiển thị các tùy chọn "Loại sản phẩm" tương ứng với lựa chọn trong danh mục
		var loaiSanPhamOptionsToShow = document.querySelectorAll('[id^="Loai' + selectedMaDM + '"]');
		loaiSanPhamOptionsToShow.forEach(function(option) {
			option.style.display = "block";
		});

		// Kiểm tra xem tùy chọn "Loại sản phẩm" hiện tại có thuộc danh sách tùy chọn mới không
		// Nếu không có, chọn tùy chọn đầu tiên trong danh sách mới
		var firstVisibleOption = Array.from(loaiSanPhamOptionsToShow).find(function(option) {
			return option.style.display !== "none";
		});

		if (firstVisibleOption) {
			selectedLoaiSanPham.value = firstVisibleOption.value;
		} else {
			selectedLoaiSanPham.selectedIndex = -1;
		}
	}

	// Gọi hàm để hiển thị tùy chọn ban đầu khi tải trang
	hienThiLoaiSanPham();
</script>