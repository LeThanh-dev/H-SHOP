<head>
	<title>Xuất hóa đơn</title>
	<head>
	
	<style>
		.page {
			width: 80%;
			margin: 0 auto;
			font-family: 'Times New Roman', Times, serif, sans-serif;
			font-size: 16px;
			line-height: 1.5;
		}
		
		.header {
			padding: 20px 0;
			border-bottom: 1px solid #ccc;
		}
		
		.company h1 {
			font-size: 32px;
			font-weight: bold;
			margin-bottom: 10px;
		}
		
		.company p {
			font-size: 18px;
			margin-bottom: 5px;
		}
		
		.title h2 {
			font-size: 24px;
			font-weight: bold;
			margin-bottom: 10px;
		}
		
		.customer p {
			font-size: 18px;
			margin-bottom: 5px;
		}
		
		table {
			width: 100%;
			border-collapse: collapse;
			margin-top: 20px;
			font-size: 16px;
		}
		
		th, td {
			padding: 10px;
			border: 1px solid #ccc;
			text-align: left;
		}
		
		.footer-right {
			margin-top: 30px;
			font-size: 18px;
			font-style: italic;
			float: right;
			margin-right: 0;
		}
		
		.text-center {
			text-align: center;
		}
	</style>
</head>



</head>

<body>
	<div id="page" class="page">
		<div class="header">
			<div class="company">
				<h1 class="text-center">TP SHOP - CHUYÊN THU MUA VÀ BÁN DỒ GIA DỤNG CŨ</h1>
				<p class="text-center">Mã số thuế: 1111111</p>
				<p class="text-center">Địa chỉ: 939 Nguyễn Bỉnh Khiêm, Đông Hải 1, Hải An, Hải Phòng</p>
			</div>
		</div>

		<div class="title">
			<h2>Hoá Đơn Mua Hàng</h2>
		</div>

		<div class="customer">
			<p>Khách hàng: <?= $data[0]['NguoiNhan'] ?></p>
			<p>Địa chỉ: <?= $data[0]['DiaChi'] ?></p>
			<p>Số điện thoại: <?= $data[0]['SDT'] ?></p>
			<p>TỔNG TIỀN: <?= number_format($data[0]['TongTien']) ?>VNĐ</p>
			<p>Trạng thái: 
			<?php if ($data[0]['TrangThai'] == 0) {
                echo 'Chưa xét duyệt';
              } else if ($data[0]['TrangThai'] == 2) {
                echo 'Đã giao';
              }
              else if ($data[0]['TrangThai'] == 3) {
                echo 'Giao hàng thất bại';
              }  else {
                echo 'Đang giao';
              }
              ?>
			</p>
			<p>Thanh toán: 
			<?php if ($data[0]['PhuongThucTT'] == 'Chuyển khoản MoMo') {
                echo 'Đã thanh toán MoMo';
              } else if ($data[0]['TrangThai'] == 2 and $data[0]['PhuongThucTT']!='Chuyển khoản MoMo' ) {
                echo 'Đã thanh toán tiền mặt';
              }
              else {
                echo 'Chưa thanh toán';
              }
              ?>
			</p>
			<p>Ngày giao: 
			<?php if ($data[0]['TrangThai'] == 0) {
                echo 'Chưa xét duyệt';
              } else if ($data[0]['TrangThai'] == 1) {
                echo 'Đang giao';
              }
              else {
                echo $data[0]['NgayGiao'];
              }
              ?>
			</p>
		</div>
<?php


$id=$data[0]['MaHD'];



?>
		<div class="title">
			<h2>Chi tiết hóa đơn</h2>
		</div>

		<div class="container mt-5">
			<?php if (isset($data) and $data != null) { ?>
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">Tên sản phẩm</th>
							<th scope="col">Đơn giá</th>
							<th scope="col">Số lượng</th>
							<th scope="col">Thành tiền</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($data as $row) { ?>
							<tr>
								<td><?= $row['Ten'] ?></td>
								<td><?= number_format($row['DonGia']) ?> VNĐ</td>
								<td><?= $row['SoLuong'] ?></td>
								<td><?= number_format($row['DonGia'] * $row['SoLuong']) ?> VNĐ</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
				<?php $time = time(); ?>
				<div class="footer-right text-right" style=" float: right; margin-right:0">
				<p style="text-align:right">Ngày <?= date("d", $time) ?> tháng <?= date("m", $time) ?> năm <?= date("Y", $time) ?></p>
				<p style="text-align:right">Nhân viên</p>
				</div>
				
				
			<?php } ?>
		</div>
	</div>

	<?php
	
	$time = $id."_".time();
	
	header('Content-Type: application/doc');
	header("Content-Disposition: attachment; filename= Hóa đơn số HD_$time.doc");
	
	?>
