<!-- pages-title-start -->
<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<h2>Giỏ Hàng</h2>
					<ul class="text-left">
						<li><a href="?act=home">Trang chủ</a></li>
						<li><span> / </span>Giỏ Hàng</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- pages-title-end -->
<!-- cart content section start -->
<?php if (isset($_SESSION['sanpham'])) {


?>
	<section class="pages cart-page section-padding">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="table-responsive padding60">
						<?php if (isset($_COOKIE['slhang'])) { ?>
							<div class="alert alert-danger">
								<strong>Thông báo</strong> <?= $_COOKIE['slhang'] ?>
							</div>
						<?php } else if (isset($_COOKIE['msg'])) { ?>
							<div class="alert alert-success">
								<strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
							</div>

						<?php } ?>
						<table class="wishlist-table text-center" id="dxd">
							<thead>
								<tr>
									<th>Sản phẩm</th>
									<th>Giá</th>
									<th>Số lượng</th>
									<th>Thành tiền</th>
									<th>Xóa</th>
								</tr>
							</thead>
							<tbody>
								<?php
								if (isset($_SESSION['sanpham'])) {
									$products = $_SESSION['sanpham'];
									usort($products, function ($a, $b) {
										// Sắp xếp theo thứ tự tăng dần của thời gian thêm sản phẩm
										return  intval($b['ThoiGian']) -  intval($a['ThoiGian']);
									});
									foreach ($products as $value) { ?>
										<tr>
											<td class="td-img text-left">
												<a href="?act=detail&id=<?= $value['MaSP'] ?>"><img src="public/<?= $value['HinhAnh1'] ?>" alt="Add Product" /></a>
												<div class="items-dsc">
													<h5><a href="?act=detail&id=<?= $value['MaSP'] ?>"><?= $value['TenSP'] ?></a></h5>
												</div>
											</td>
											<td><?= number_format($value['DonGia']) ?> VNĐ</td>
											<td>
												<form action="" method="POST">
													<?php if ($value['SoLuong'] == 1) { ?>
														<div class="plus-minus">
															<button style="width: 30px; height:30px" class="dec qtybutton" disabled type="button">-</button>
															<b class="plus-minus-box"><?= $value['SoLuong'] ?></b>
															<a href="?act=cart&xuli=update&id=<?= $value['MaSP'] ?>" class="inc qtybutton" type="button">+</a>
														</div>
													<?php } else if ($value['SoLuong'] >= 1) { ?>
														<div class="plus-minus">
															<a href="?act=cart&xuli=delete&id=<?= $value['MaSP'] ?>" class="dec qtybutton" type="button">-</a>
															<b class="plus-minus-box"><?= $value['SoLuong'] ?></b>
															<a href="?act=cart&xuli=update&id=<?= $value['MaSP'] ?>" class="inc qtybutton" type="button">+</a>
														</div>

													<?php } ?>
												</form>
											</td>
											<td>
												<strong><?= number_format($value['ThanhTien']) ?> VNĐ</strong>
											</td>
											<td><a href="?act=cart&xuli=deleteall&id=<?= $value['MaSP'] ?>"><i class="mdi mdi-close" title="Remove this product"></i></a></td>
										</tr>
								<?php }
								} ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="row margin-top">
				<div class="col-sm-6">
					<div class="single-cart-form padding60" style="padding:16px;text-align: center;">
						<div class="log-title">
							<h3 style="margin-bottom:16px"><strong>Mã giảm giá</strong></h3>
						</div>
						<div class="cart-form-text custom-input">
							<p>Nhập mã giảm giá nếu bạn có !</p>
							<?php if (!isset($datagiam) and isset($_POST['giamgia'])) { ?>
								<div class="alert alert-danger">
									<strong>Thông báo</strong> Áp dụng mã giảm giá không thành công
								</div>
							<?php } else if (isset($datagiam) and isset($_POST['giamgia'])) { ?>
								<div class="alert alert-success">
									<strong>Thông báo</strong> Áp dụng mã giảm giá thành công
								</div>

							<?php } ?>
							<form action="?act=cart&xuli=giamgia" method="post">
								<input style="    background-color: white;border: 1px solid #dbdbdb;" type="text" name="giamgia" placeholder="Nhập mã tại đây..." />
								<div class="submit-text coupon">
									<button type="submit">Áp dụng</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="single-cart-form padding60" style="padding:16px;text-align: center;">
						<div class="log-title">
							<h3><strong>Chi tiết thanh toán</strong></h3>
						</div>
						<div class="cart-form-text  table-responsive">
							<form action="?act=checkout" method="POST">
								<table>
									<tbody>
										<tr>
											<th>Tổng tiền hàng</th>
											<td><?= number_format($count) ?> VNĐ</td>
										</tr>
										<tr>
											<th>Giảm giá</th>
											<td><?php if (isset($datagiam)) {
													echo $datagiam['MoTa'];
												} else {
													echo '0';
												}
												?></td>
										</tr>
										<tr>
											<th>Phí vận chuyển</th>
											<td>30,000 VNĐ</td>
										</tr>
										<!-- <tr>
										<th>VAT</th>
										<td>0 VNĐ</td>
									</tr> -->
									</tbody>
									<?php
									if (isset($datagiam)) {
										$giam = $datagiam['GiaTriGiamGia'];
										$giamgia = $datagiam['MaGiamGia'];
									} else {
										$giam = 0;
										$giamgia = 0;
									}


									?>
									<tfoot style="font-size:18px">
										<tr>
											<th class="tfoot-padd">TỔNG TIỀN</th>
											<input type="hidden" name="giamgia" value="<?= $giamgia ?>">
											<td class="tfoot-padd"><input type="hidden" name="tongtien" value="<?= number_format(($count + 30000) - ($count + 30000) * $giam) ?>"> <?= number_format(($count + 30000) - ($count + 30000) * $giam) ?> VNĐ</td>
										</tr>
									</tfoot>
								</table>
								<div class="submit-text coupon">
									<button type="submit">Thanh toán</button>
								</div>
							</form>



						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- cart content section end -->
<?php } else {
?>
	<div class="row">
		<div class="col-xs-12 text-center">
			<div class="complete-title">
				<p style="margin: 0">Giỏ hàng của bạn hiện chưa có sản phẩm!</p>
			</div>
		</div>
	</div>
<?php
}


?>

<style>
	#order input:hover {
		background-color: red;

	}
</style>