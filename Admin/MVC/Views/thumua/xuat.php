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
				<h1 class="text-center"> TP SHOP - CHUYÊN THU MUA VÀ BÁN DỒ GIA DỤNG CŨ</h1>
				<p class="text-center">Mã số thuế: 1111111</p>
				<p class="text-center">Địa chỉ: 22/11 Tô Hiệu, phường Tân Thới Hòa, quận Tân Phú</p>
			</div>
		</div>

		<div class="title">
			<h2>PHIẾU THU MUA HÀNG</h2>
		</div>

		<div class="customer">
			<p>Người bán: <?= $data[0]['Ho']." ".$data[0]['Ten']  ?></p>
			<p>Địa chỉ: <?= $data[0]['DiaChi'] ?></p>
			<p>Số điện thoại: <?= $data[0]['SDT'] ?></p>
			
		</div>
<?php


$id=$data[0]['MaThuMua'];



?>
		<div class="title">
			<h2>Chi tiết hóa đơn thu mua</h2>
		</div>

		<div class="container mt-5">
			<?php if (isset($data) and $data != null) { ?>
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">Tên sản phẩm</th>
							<th scope="col">Hãng</th>
							<th scope="col">Kích thước</th>
							<th scope="col">Trọng lượng</th>
							<th scope="col">Chất liệu</th>
							<th scope="col">Đơn giá</th>
							<th scope="col">Số lượng</th>
							<th scope="col">Thành tiền</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($data as $row) { ?>
							<tr>
								<td><?= $row['TenSP'] ?></td>
								<td><?= $row['Hang'] ?></td>
								<td><?= $row['KichThuoc'] ?></td>
								<td><?= $row['TrongLuong'] ?></td>
								<td><?= $row['ChatLieu'] ?></td>
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
