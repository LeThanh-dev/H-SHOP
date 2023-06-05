 <!-- Begin Page Content -->
 <div class="container-fluid">

 	<!-- Page Heading -->
 	<div class="d-sm-flex align-items-center justify-content-between mb-4">
 		<h1 class="h3 mb-0 text-gray-800">Thống Kê</h1>
 	</div>

 	<!-- Content Row -->
 	<div class="row">

 		<!-- Earnings (Monthly) Card Example -->
 		<div class="col-xl-3 col-md-6 mb-4">
 			<div class="card border-left-success shadow h-100 py-2">
 				<div class="card-body">
 					<div class="row no-gutters align-items-center">
 						<div class="col mr-2">
 							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Danh thu tháng này</div>
 							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= number_format($data_countM['Count']) ?> VNĐ</div>
 						</div>
 						<div class="col-auto">
 							<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>

 		<!-- Earnings (Monthly) Card Example -->
 		<div class="col-xl-3 col-md-6 mb-4">
 			<div class="card border-left-success shadow h-100 py-2">
 				<div class="card-body">
 					<div class="row no-gutters align-items-center">
 						<div class="col mr-2">
 							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Danh thu năm nay</div>
 							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= number_format($data_countY['Count']) ?> VNĐ</div>
 						</div>
 						<div class="col-auto">
 							<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>

 		<!-- Earnings (Monthly) Card Example -->
 		<div class="col-xl-3 col-md-6 mb-4">
 			<div class="card border-left-primary shadow h-100 py-2">
 				<div class="card-body">
 					<div class="row no-gutters align-items-center">
 						<div class="col mr-2">
 							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Khách hàng</div>
 							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data_nguoidung['Count'] ?></div>
 						</div>
 						<div class="col-auto">
 							<i class="fas fa-calendar fa-2x text-gray-300"></i>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>

 		<!-- Earnings (Monthly) Card Example -->
 		<div class="col-xl-3 col-md-6 mb-4">
 			<div class="card border-left-primary shadow h-100 py-2">
 				<div class="card-body">
 					<div class="row no-gutters align-items-center">
 						<div class="col mr-2">
 							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Nhân viên</div>
 							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data_nhanvien['Count'] ?></div>
 						</div>
 						<div class="col-auto">
 							<i class="fas fa-calendar fa-2x text-gray-300"></i>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>


 	</div>

 	<div class="row">

 		<div class="col-xl-3 col-md-6 mb-4">
 			<div class="card border-left-info shadow h-100 py-2">
 				<div class="card-body">
 					<div class="row no-gutters align-items-center">
 						<div class="col mr-2">
 							<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Dụng cụ nhà bếp</div>
 							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data_tksp1['Count'] ?></div>
 						</div>
 						<div class="col-auto">
 							<i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>

 		<div class="col-xl-3 col-md-6 mb-4">
 			<div class="card border-left-info shadow h-100 py-2">
 				<div class="card-body">
 					<div class="row no-gutters align-items-center">
 						<div class="col mr-2">
 							<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Thiết bị vệ sinh</div>
 							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data_tksp2['Count'] ?></div>
 						</div>
 						<div class="col-auto">
 							<i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>

 		<!-- Earnings (Monthly) Card Example -->
 		<div class="col-xl-3 col-md-6 mb-4">
 			<div class="card border-left-info shadow h-100 py-2">
 				<div class="card-body">
 					<div class="row no-gutters align-items-center">
 						<div class="col mr-2">
 							<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Đồ điện</div>
 							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data_tksp3['Count'] ?></div>
 						</div>
 						<div class="col-auto">
 							<i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>

 		<!-- Pending Requests Card Example -->
 		<div class="col-xl-3 col-md-6 mb-4">
 			<div class="card border-left-warning shadow h-100 py-2">
 				<div class="card-body">
 					<div class="row no-gutters align-items-center">
 						<div class="col mr-2">
 							<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Hóa đơn chưa duyệt</div>
 							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data_hd['Count'] ?></div>
 						</div>
 						<div class="col-auto">
 							<i class="fas fa-comments fa-2x text-gray-300"></i>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>

 </div>
 <!-- /.container-fluid -->


 <div class="container">
 	<form action="" method="GET">
 		<h1 class="form-heading text-center my-5">LỰA CHỌN CÁCH THỐNG KÊ</h1>
 		<div class="form-row justify-content-center">
 			<div class="col-md-4">
 				<div class="col-md-12">
 					<div class="form-group">
 						<label for="thongke">Chọn cách thống kê:</label>
 						<select class="form-control" id="thongke" name="thongke">
 							<option value="all">Tất cả</option>
 							<option value="thoigian">Theo khoảng thời gian</option>
 						</select>
 					</div>
 				</div>
 				<div class="col-md-12">
 					<div id="form-thoigian" style="display: none;">
 						<div class="form-row justify-content-center">

 							<div class="form-group">
 								<label for="tg1">Từ ngày:</label>
 								<input type="date" pattern="\d{2}-\d{2}-\d{4}" placeholder="DD-MM-YYYY" class="form-control" id="tg1" name="tg1">
 							</div>

 							<div class="form-group">
 								<label for="tg2">Đến ngày:</label>
 								<input type="date" pattern="\d{2}-\d{2}-\d{4}" placeholder="DD-MM-YYYY" class="form-control" id="tg2" name="tg2">
 							</div>

 						</div>
 					</div>
 				</div>

 			</div>

 			<div class="col-md-4">
 				<div class="form-group">
 					<label for="thongke">Chọn cách thống kê:</label>
 					<select class="form-control" id="thongke" name="mauthongke">
 						<option value="all">Tất cả</option>
 						<option value="thumua">Thống kê thu mua sản phẩm</option>
 						<option value="banhang">Thống kê hóa đơn bán hàng</option>
 						<option value="tonkho">Thống kê tồn kho</option>
 					</select>
 				</div>
 			</div>



 		</div>






 		<div class="form-row justify-content-center mb-5 mt-2">
 			<div class="col-md-4">
 				<button type="submit" class="btn btn-primary btn-block" name="tke">Thống kê</button>
 			</div>
 		</div>
 	</form>
 </div>


 <?php if (isset($_GET['tke'])) {
	?>

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
 					border-top: 1px solid #ccc;
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
 					margin-bottom: 0px;
 				}

 				.customer p {
 					font-size: 18px;
 					margin-bottom: 5px;
 				}

 				table {
 					width: 100%;
 					border-collapse: collapse;
 					margin-top: 10px;
 					font-size: 16px;
 				}

 				th,
 				td {
 					padding: 10px;
 					border: 1px solid #ccc;
 					text-align: left;
 				}

 				.footer-right {
 					margin-top: 30px;
 					font-size: 18px;
 					font-style: italic;
 					margin-right: 0;
 				}

 				.text-center {
 					text-align: center;
 				}
 			</style>
 		</head>



 	</head>

 	<body>
 		<?php
			$noidung = $_GET['thongke'];
			$mauthongke = $_GET['mauthongke'];
			if ($noidung == 'all') {
				if ($mauthongke == 'all') {
					$noidung = " TẤT CẢ";
					$mauthongke = "TẤT CẢ";
				} elseif ($mauthongke == 'thumua') {
					$noidung = " TẤT CẢ";
					$mauthongke = "THU MUA";
				} elseif ($mauthongke == 'banhang') {
					$noidung = " TẤT CẢ";
					$mauthongke = "BÁN HÀNG";
				} elseif ($mauthongke == 'tonkho') {
					$noidung = " TẤT CẢ";
					$mauthongke = "TỒN KHO";
				}
			} else {

				$tg1 = date('d-m-Y', strtotime($_GET['tg1']));
				$tg2 = date('d-m-Y', strtotime($_GET['tg2']));



				if ($mauthongke == 'all') {
					$noidung = " KHOẢNG THỜI GIAN TỪ " .  $tg1 . " ĐẾN " .  $tg2;
					$mauthongke = "TẤT CẢ";
				} elseif ($mauthongke == 'thumua') {
					$noidung = " KHOẢNG THỜI GIAN TỪ " .  $tg1 . " ĐẾN " .  $tg2;
					$mauthongke = "THU MUA";
				} elseif ($mauthongke == 'banhang') {
					$noidung = " KHOẢNG THỜI GIAN TỪ " .  $tg1 . " ĐẾN " .  $tg2;
					$mauthongke = "BÁN HÀNG";
				} elseif ($mauthongke == 'tonkho') {
					$noidung = " KHOẢNG THỜI GIAN TỪ " .  $tg1 . " ĐẾN " .  $tg2;
					$mauthongke = "TỒN KHO";
				}
			}

			?>
 		<div id="page" class="page">
 			<div class="header">
 				<div class="company">
 					<h1 class="text-center">TP SHOP - CHUYÊN THU MUA VÀ BÁN DỒ GIA DỤNG CŨ</h1>
 					<p class="text-center">Mã số thuế: 1111111</p>
 					<p class="text-center">Địa chỉ: 22/11 Tô Hiệu, phường Tân Thới Hòa, quận Tân Phú</p>
 				</div>
 			</div>

 			<div class="title" style = "padding:20px 0 " >
 				<h2 style="text-align:center">THỐNG KÊ <?= $mauthongke ?> THEO <?= $noidung ?></h2>
 			</div>

 			<div class="customer">
 				<?php if (isset($tongdoanhthu)) { ?>
 					<p><b>Tổng doanh thu:</b> <?= number_format($tongdoanhthu['Tong']) ?> VNĐ </p>
 				<?php } ?>
 				<?php if (isset($tongchi)) { ?>
 					<p><b>Tổng chi đơn thu mua:</b>
 						<?php
							if ($tongchi['Tong'] == null) {
								$tongchi['Tong'] = 0;
							}
							//print_r( $tongchi['Tong']);

							echo number_format($tongchi['Tong']);
							?> VNĐ </p> <?php } ?>
 				<?php if (isset($tonkho)) { ?>

 					<p><b>Tổng hàng tồn kho: </b><?=$tongtonkho['Count']?> sản phẩm ( Tổng số lượng: <?= $tonkho['SUM(SoLuong)'] ?> ) </p>

 				<?php } ?>

 				<?php if (isset($sp1)) { ?>

 					<p style=" text-indent: 5px; "><b>+ Dụng cụ nhà bếp:</b> <?php echo $sp1['Count'] ?> sản phẩm ( Tổng số lượng: <?= $slsp1['Count'] ?> ) </p>

 				<?php } ?>

 				<?php if (isset($sp2)) { ?>

 					<p style=" text-indent: 5px; "><b>+ Thiết bị vệ sinh:</b> <?php echo $sp2['Count'] ?> sản phẩm ( Tổng số lượng: <?= $slsp2['Count'] ?> ) </p>

 				<?php } ?>

 				<?php if (isset($sp3)) { ?>

 					<p style=" text-indent: 5px; "><b>+ Đồ điện:</b> <?php echo $sp3['Count'] ?> sản phẩm ( Tổng số lượng: <?= $slsp3['Count'] ?> ) </p>

 				<?php } ?>

 				<?php if (isset($tongthumua)) { ?>
 					<p><b>Số lượng đơn thu mua:</b> <?= $tongthumua['Count'] ?> đơn thu mua </p>
 				<?php } ?>
 				<?php if (isset($tonghoadon)) { ?>
 					<p><b>Số lượng đơn bán:</b> <?= $tonghoadon['Count'] ?> đơn bán </p>
 				<?php } ?>
 			</div>

 			<?php






				?>

		<?php if (isset($listtonkho1) and $listtonkho1 != null) { ?>
 				<div class="title" style = "padding:20px 0 0">
 					<h2>Chi tiết tồn kho sản phẩm dụng cụ nhà bếp</h2>
 				</div>

 				<div class="container mt-3">

 					<table>
 						<thead>
 							<tr>
 								<th scope="col">STT</th>
 								<th scope="col">Tên sản phẩm</th>
								 <th scope="col">Hãng</th>
 								<th scope="col">Giá</th>
 								<th scope="col">Số lượng</th>
 								

 							</tr>
 						</thead>
 						<tbody>

 							<?php $i = 0;
								foreach ($listtonkho1 as $row) {
									$i++; ?>
 								<tr>
 									<td><?= $i ?></td>
 									<td><?= $row['TenSP'] ?></td>
									 <td><?= $row['Hang'] ?></td>
 									<td><?= number_format($row['DonGia']) ?> VNĐ</td>
 									<td><?= $row['SoLuong'] ?></td>
 									
 								</tr>
 							<?php } ?>




 						</tbody>
 					</table>
 				<?php } ?>





				 <?php if (isset($listtonkho2) and $listtonkho2 != null) { ?>
 				<div class="title" style = "padding:20px 0 0">
 					<h2>Chi tiết tồn kho sản phẩm thiết bị vệ sinh</h2>
 				</div>

 				<div class="container mt-3">

 					<table>
 						<thead>
 							<tr>
 								<th scope="col">STT</th>
 								<th scope="col">Tên sản phẩm</th>
								 <th scope="col">Hãng</th>
 								<th scope="col">Giá</th>
 								<th scope="col">Số lượng</th>
 								

 							</tr>
 						</thead>
 						<tbody>

 							<?php $i = 0;
								foreach ($listtonkho2 as $row) {
									$i++; ?>
 								<tr>
 									<td><?= $i ?></td>
 									<td><?= $row['TenSP'] ?></td>
									 <td><?= $row['Hang'] ?></td>
 									<td><?= number_format($row['DonGia']) ?> VNĐ</td>
 									<td><?= $row['SoLuong'] ?></td>
 									
 								</tr>
 							<?php } ?>




 						</tbody>
 					</table>
 				<?php } ?>




				 <?php if (isset($listtonkho3) and $listtonkho3 != null) { ?>
 				<div class="title" style = "padding:20px 0 0">
 					<h2>Chi tiết tồn kho sản phẩm đồ điện</h2>
 				</div>

 				<div class="container mt-3">

 					<table>
 						<thead>
 							<tr>
 								<th scope="col">STT</th>
 								<th scope="col">Tên sản phẩm</th>
								 <th scope="col">Hãng</th>
 								<th scope="col">Giá</th>
 								<th scope="col">Số lượng</th>
 								

 							</tr>
 						</thead>
 						<tbody>

 							<?php $i = 0;
								foreach ($listtonkho3 as $row) {
									$i++; ?>
 								<tr>
 									<td><?= $i ?></td>
 									<td><?= $row['TenSP'] ?></td>
									 <td><?= $row['Hang'] ?></td>
 									<td><?= number_format($row['DonGia']) ?> VNĐ</td>
 									<td><?= $row['SoLuong'] ?></td>
 									
 								</tr>
 							<?php } ?>




 						</tbody>
 					</table>
 				<?php } ?>




 			<?php if (isset($thumua) and $thumua != null) { ?>
 				<div class="title" style = "padding:20px 0 0">
 					<h2>Chi tiết sản phẩm thu mua</h2>
 				</div>

 				<div class="container mt-3">

 					<table>
 						<thead>
 							<tr>
 								<th scope="col">STT</th>
 								<th scope="col">Tên sản phẩm</th>
 								<th scope="col">Giá</th>
 								<th scope="col">Số lượng</th>
 								<th scope="col">Thành tiền</th>

 							</tr>
 						</thead>
 						<tbody>

 							<?php $i = 0;
								foreach ($thumua as $row) {
									$i++; ?>
 								<tr>
 									<td><?= $i ?></td>
 									<td><?= $row['TenSP'] ?></td>
 									<td><?= number_format($row['DonGia']) ?> VNĐ</td>
 									<td><?= $row['SoLuong'] ?></td>
 									<td><?= number_format($row['DonGia'] * $row['SoLuong']) ?> VNĐ</td>
 								</tr>
 							<?php } ?>




 						</tbody>
 					</table>
 				<?php } ?>

 				<?php if (isset($listhoadon) and $listhoadon != null) { ?>
 					<div class="title" style = "padding:20px 0 0">
 						<h2>Chi tiết hóa đơn bán hàng</h2>
 					</div>

 					<div class="container mt-3">

 						<table>
 							<thead>
 								<tr>
 									<th scope="col">STT</th>
 									<th scope="col">Mã hóa đơn</th>
 									<th scope="col">Tên sản phẩm</th>

 									<th scope="col">Giá thành</th>
 									<th scope="col">Số lượng</th>
 									<th scope="col">Tổng tiền</th>
 									<th scope="col">Trạng thái</th>
 									<th scope="col">Ngày đặt hàng</th>
 									<th scope="col">Ngày giao hàng</th>
 									<th scope="col">Địa chỉ giao hàng</th>

 								</tr>
 							</thead>
 							<tbody>

 								<?php
									$temp = array(); // mảng tạm để lưu thông tin sản phẩm trước đó
									$MaHD_temp = ''; // biến tạm để lưu mã HD của sản phẩm trước đó
									$SoSanPham_temp = 0; // biến tạm để lưu số sản phẩm của mã HD trước đó
									$i;

									foreach ($listhoadon as $row) {
										$MaHD = $row['MaHD'];
										if ($MaHD == $MaHD_temp) {
											// nếu mã HD hiện tại giống với mã HD trước đó, tăng giá trị biến đếm số sản phẩm và lưu trữ thông tin của sản phẩm hiện tại vào mảng tạm
											$SoSanPham_temp++;
											$temp['SanPham'][] = $row;
											$temp['TongTien'] = $temp['TongTien'] + ($row['DonGia'] * $row['SoLuong']);
										} else {
											// nếu mã HD hiện tại khác với mã HD trước đó, in ra thông tin của mã HD trước đó và in ra thông tin của các sản phẩm con hiện tại
											if (!empty($temp)) {
									?>
 											<tr>
 												<?php if ($SoSanPham_temp > 1) { ?>
 													<td rowspan="<?= $SoSanPham_temp ?>"><?= $temp['SanPham'][0]['STT'] ?></td>
 													<td rowspan="<?= $SoSanPham_temp ?>">HD_<?= $temp['MaHD'] ?></td>
 													<td><?= $temp['SanPham'][0]['TenSP'] ?></td>

 													<td><?= $temp['SanPham'][0]['DonGia'] ?></td>
 													<td><?= $temp['SanPham'][0]['SoLuong'] ?></td>
 													<td rowspan="<?= $SoSanPham_temp ?>"><?= number_format($temp['TongTien']) ?> VNĐ</td>

 													<!-- Trạng thái -->
 													<?php if ($temp['SanPham'][0]['TrangThai'] == 0) { ?>

 														<td style="color: #2287ef;" rowspan="<?= $SoSanPham_temp ?>">

 															Đợi duyệt



 														</td>
 													<?php } else if ($temp['SanPham'][0]['TrangThai'] == 1) { ?>
 														<td style="color: #ff9900;" rowspan="<?= $SoSanPham_temp ?>">Đang giao</td>
 													<?php } else if ($temp['SanPham'][0]['TrangThai'] == 3) { ?>
 														<td rowspan="<?= $SoSanPham_temp ?>">Giao thất bại</td>
 													<?php } else { ?>
 														<td style="color: #19ad32;" rowspan="<?= $SoSanPham_temp ?>">Đã giao</td>
 													<?php } ?>

 													<!-- Ngày đặt -->
 													<td rowspan="<?= $SoSanPham_temp ?>"><?= $temp['SanPham'][0]['NgayLap'] ?></td>
 													<!-- Ngày giao -->
 													<?php if ($temp['SanPham'][0]['TrangThai'] == 0) { ?>

 														<td style="color: #2287ef;" rowspan="<?= $SoSanPham_temp ?>">Đợi duyệt


 														</td>
 													<?php } else if ($temp['SanPham'][0]['TrangThai'] == 1) { ?>
 														<td style="color: #ff9900;" rowspan="<?= $SoSanPham_temp ?>">Đang giao</td>
 													<?php } else if ($temp['SanPham'][0]['TrangThai'] == 3) { ?>
 														<td rowspan="<?= $SoSanPham_temp ?>">Giao thất bại</td>
 													<?php } else { ?>
 														<td style="color: #19ad32;" rowspan="<?= $SoSanPham_temp ?>"><?= $temp['SanPham'][0]['NgayGiao'] ?></td>
 													<?php } ?>
 													<!-- Địa chỉ -->
 													<td rowspan="<?= $SoSanPham_temp ?>"><?= $temp['SanPham'][0]['DiaChi'] ?></td>

 												<?php } else { ?>
 													<td><?= $temp['SanPham'][0]['STT'] ?></td>
 													<td>HD_<?= $temp['MaHD'] ?></td>
 													<td><?= $temp['SanPham'][0]['TenSP'] ?></td>

 													<td><?= $temp['SanPham'][0]['DonGia'] ?></td>
 													<td><?= $temp['SanPham'][0]['SoLuong'] ?></td>
 													<td><?= number_format($temp['SanPham'][0]['SoLuong'] * $temp['SanPham'][0]['DonGia']) ?> VNĐ</td>
 													<!-- Trạng thái -->

 													<?php if ($temp['SanPham'][0]['TrangThai'] == 0) { ?>

 														<td style="color: #2287ef;">Đợi duyệt


 														</td>
 													<?php } else if ($temp['SanPham'][0]['TrangThai'] == 1) { ?>
 														<td style="color: #ff9900;">Đang giao</td>
 													<?php } else if ($temp['SanPham'][0]['TrangThai'] == 1) { ?>
 														<td>Giao thất bại</td>
 													<?php } else { ?>
 														<td style="color: #19ad32;">Đã giao</td>
 													<?php } ?>

 													<td><?= $temp['SanPham'][0]['NgayLap'] ?></td>

 													<!-- Ngày giao -->
 													<?php if ($temp['SanPham'][0]['TrangThai'] == 0) { ?>

 														<td style="color: #2287ef;">Đợi duyệt

 														</td>
 													<?php } else if ($temp['SanPham'][0]['TrangThai'] == 1) { ?>
 														<td style="color: #ff9900;">Đang giao</td>
 													<?php } else if ($temp['SanPham'][0]['TrangThai'] == 1) { ?>
 														<td>Giao thất bại</td>
 													<?php } else { ?>
 														<td style="color: #19ad32;"><?= $temp['SanPham'][0]['NgayGiao'] ?></td>
 													<?php } ?>

 													<!-- Địa chỉ -->
 													<td rowspan="<?= $SoSanPham_temp ?>"><?= $temp['SanPham'][0]['DiaChi'] ?></td>

 												<?php } ?>
 											</tr>
 											<?php
												for ($i = 1; $i < $SoSanPham_temp; $i++) {
												?>
 												<tr>
 													<td><?= $temp['SanPham'][$i]['TenSP'] ?></td>

 													<td><?= $temp['SanPham'][$i]['DonGia'] ?></td>
 													<td><?= $temp['SanPham'][$i]['SoLuong'] ?></td>
 												</tr>
 								<?php
												}
											}
											$temp['MaHD'] = $MaHD;
											$temp['TongTien'] = $row['DonGia'] * $row['SoLuong'];
											$temp['SanPham'] = array();
											$temp['SanPham'][] = $row;
											$SoSanPham_temp = 1;
										}
										$MaHD_temp = $MaHD;
									}
									// in ra thông tin của mã HD cuối cùng
									?>
 								<tr>
 									<?php if ($SoSanPham_temp > 1) { ?>
 										<td rowspan="<?= $SoSanPham_temp ?>"><?= $temp['SanPham'][0]['STT'] ?></td>
 										<td rowspan="<?= $SoSanPham_temp ?>">HD_<?= $temp['MaHD'] ?></td>
 										<td><?= $temp['SanPham'][0]['TenSP'] ?></td>

 										<td><?= number_format($temp['SanPham'][0]['DonGia']) ?></td>
 										<td><?= $temp['SanPham'][0]['SoLuong'] ?></td>
 										<td rowspan="<?= $SoSanPham_temp ?>"><?= number_format($temp['TongTien']) ?> VNĐ</td>



 										<?php if ($temp['SanPham'][0]['TrangThai'] == 0) { ?>

 											<td style="color: #2287ef;" rowspan="<?= $SoSanPham_temp ?>">Đợi duyệt


 											</td>
 										<?php } else if ($temp['SanPham'][0]['TrangThai'] == 1) { ?>
 											<td style="color: #ff9900;" rowspan="<?= $SoSanPham_temp ?>">Đang giao</td>
 										<?php } else if ($temp['SanPham'][0]['TrangThai'] == 3) { ?>
 											<td rowspan="<?= $SoSanPham_temp ?>">Giao thất bại</td>
 										<?php } else { ?>
 											<td style="color: #19ad32;" rowspan="<?= $SoSanPham_temp ?>">Đã giao</td>
 										<?php } ?>

 										<!-- Ngày đặt -->
 										<td rowspan="<?= $SoSanPham_temp ?>"><?= $temp['SanPham'][0]['NgayLap'] ?></td>
 										<!-- Ngày giao -->
 										<?php if ($temp['SanPham'][0]['TrangThai'] == 0) { ?>

 											<td style="color: #2287ef;" rowspan="<?= $SoSanPham_temp ?>">Đợi duyệt

 											</td>
 										<?php } else if ($temp['SanPham'][0]['TrangThai'] == 1) { ?>
 											<td style="color: #ff9900;" rowspan="<?= $SoSanPham_temp ?>">Đang giao</td>
 										<?php } else if ($temp['SanPham'][0]['TrangThai'] == 3) { ?>
 											<td rowspan="<?= $SoSanPham_temp ?>">Giao thất bại</td>
 										<?php } else { ?>
 											<td style="color: #19ad32;" rowspan="<?= $SoSanPham_temp ?>"><?= $temp['SanPham'][0]['NgayGiao'] ?></td>
 										<?php } ?>



 										<!-- Địa chỉ -->
 										<td rowspan="<?= $SoSanPham_temp ?>"><?= $temp['SanPham'][0]['DiaChi'] ?></td>

 									<?php } else { ?>

 										<td rowspan="<?= $SoSanPham_temp ?>"><?= $temp['SanPham'][0]['STT'] ?></td>
 										<td>HD_<?= $temp['MaHD'] ?></td>
 										<td><?= $temp['SanPham'][0]['TenSP'] ?></td>

 										<td><?= number_format($temp['SanPham'][0]['DonGia']) ?></td>
 										<td><?= $temp['SanPham'][0]['SoLuong'] ?></td>
 										<td><?= number_format($temp['SanPham'][0]['SoLuong'] * $temp['SanPham'][0]['DonGia']) ?> VNĐ</td>


 										<?php if ($temp['SanPham'][0]['TrangThai'] == 0) { ?>

 											<td style="color: #2287ef;">Đợi duyệt

 											</td>
 										<?php } else if ($temp['SanPham'][0]['TrangThai'] == 1) { ?>
 											<td style="color: #ff9900;">Đang giao</td>
 										<?php } else if ($temp['SanPham'][0]['TrangThai'] == 3) { ?>
 											<td>Giao thất bại</td>
 										<?php } else { ?>
 											<td style="color: #19ad32;">Đã giao</td>
 										<?php } ?>

 										<td rowspan="<?= $SoSanPham_temp ?>"><?= $temp['SanPham'][0]['NgayLap'] ?></td>

 										<!-- Ngày giao -->
 										<?php if ($temp['SanPham'][0]['TrangThai'] == 0) { ?>

 											<td style="color: #2287ef;">Đợi duyệt</td>
 										<?php } else if ($temp['SanPham'][0]['TrangThai'] == 1) { ?>
 											<td style="color: #ff9900;">Đang giao</td>
 										<?php } else if ($temp['SanPham'][0]['TrangThai'] == 3) { ?>
 											<td>Giao thất bại</td>
 										<?php } else { ?>
 											<td style="color: #19ad32;"><?= $temp['SanPham'][0]['NgayGiao'] ?></td>
 										<?php } ?>

 										<!-- Địa chỉ -->
 										<td rowspan="<?= $SoSanPham_temp ?>"><?= $temp['SanPham'][0]['DiaChi'] ?></td>

 									<?php } ?>
 								</tr>
 								<?php
									for ($i = 1; $i < $SoSanPham_temp; $i++) {
									?>
 									<tr>
 										<td><?= $temp['SanPham'][$i]['TenSP'] ?></td>

 										<td><?= number_format($temp['SanPham'][$i]['DonGia']) ?></td>
 										<td><?= $temp['SanPham'][$i]['SoLuong'] ?></td>
 									</tr>
 								<?php
									}

									?>




 							</tbody>
 						</table>
 					<?php } ?>









 					<?php $time = time(); ?>
 					<div class="footer-right text-right" style="  margin-right:0">
 						<p style="text-align:right">Ngày <?= date("d", $time) ?> tháng <?= date("m", $time) ?> năm <?= date("Y", $time) ?></p>
 						<p style="text-align:right">Nhân viên</p>
 					</div>



 					</div>
 				</div>
 		</div>
 		<?php if (isset($_GET['tg1']) and $_GET['tg1'] != '') {

			?>
 			<a href="?mod=login&act=xuat&tke&thongke=<?= $_GET['thongke'] ?> &tg1= <?= $_GET['tg1'] ?>&tg2= <?= $_GET['tg2'] ?> &mauthongke=<?= $_GET['mauthongke'] ?>" class="btn btn-primary my-custom-class" style = "width:fit-content; margin: 12px auto;display:block "> Xuất</a>
 		<?php

			} else {
			?>
 			<a href="?mod=login&act=xuat&tke&thongke=<?= $_GET['thongke'] ?>&mauthongke=<?= $_GET['mauthongke'] ?>" class="btn btn-primary my-custom-class" style = "width:fit-content; margin: 12px auto;display:block "> Xuất</a>
 		<?php } ?>
 		<style>
 			.my-custom-class {

 				color: #fff;


 				text-decoration: none;
 			}
 		</style>








 	<?php } ?>
 	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
 	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 	<script>
 		const selectThongKe = document.querySelector('select[name="thongke"]');
 		const formThoigian = document.querySelector('#form-thoigian');
 		const tg1 = document.getElementById('tg1');
 		const tg2 = document.getElementById('tg2');

 		selectThongKe.addEventListener('change', function() {
 			if (this.value === 'thoigian') {
 				formThoigian.style.display = 'block';
 				tg1.required = true;
 				tg2.required = true;
 			} else {
 				formThoigian.style.display = 'none';
 			}
 		});
 	</script>