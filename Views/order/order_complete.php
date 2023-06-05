

<!-- pages-title-start -->
<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<h2>Đặt hàng thành công</h2>
					<ul class="text-left">
						<li><a href="index.php?act=home">Trang chủ</a></li>
						<li><span> / </span>HOÀN THÀNH ĐẶT HÀNG</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- pages-title-end -->
<!-- order-complete content section start -->
<section class="pages checkout order-complete section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<div class="complete-title">
					<p style = "    background: #34aebb;
    color: white;">Cảm ơn bạn đã tin tưởng và đặt hàng của chúng tôi</p>
					<p>Đơn hàng của bạn đang chờ xét duyệt</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<div class="padding60" style = "padding:16px;
    text-align: center;">
					<div class="log-title">
						<h3><strong>ĐƠN ĐẶT HÀNG CỦA BẠN</strong></h3>
					</div>
					<div class="cart-form-text pay-details">
						<table>
							<thead>
								<tr>
									<th>Sản Phẩm</th>
									<td style = "font-weight:600">Tiền</td>
								</tr>
							</thead>
							<tbody>
								<?php if (isset($_SESSION['sanpham'])) {
									foreach ($_SESSION['sanpham'] as $value) { ?>
										<tr>
											<th><?= $value['TenSP'] ?></th>
											<td><?= number_format($value['ThanhTien']) ?> VNĐ</td>
										</tr>
								<?php }
								} ?>
								<!-- <tr>
									<th>VAT</th>
									<td>0 VNĐ</td>
								</tr> -->
							</tbody>
							<tfoot style = "font-size:18px">
							<?php if(isset( $_SESSION['TongTien'])) {

								$TT= number_format( $_SESSION['TongTien']);
								
								
							} else
							{
								$TT= number_format($count + 30000);
							}
							
							?>
								<tr>
									<th >Tổng tiền</th>
									<td style = "white-space:nowrap"><?= $TT ?> VNĐ</td>
								</tr>
							</tfoot>
						</table>
						
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="order-details padding60" style = "padding:16px;">
					<div class="log-title">
						<h3 style = "margin-bottom:20px"><strong>THÔNG TIN GIAO HÀNG</strong></h3>
					</div>
					<div class="por-dse clearfix">
						<ul>
							<li><span style = "display:contents; text-transform:none;letter-spacing:.5px">Người nhận<strong>:</strong></span> <?php echo $_SESSION['NguoiNhan']?></li>
							<li><span style = "display:contents; text-transform:none;letter-spacing:.5px">SĐT<strong>:</strong></span> <?=$_SESSION['SDT']?></li>
							
							<li><span style = "display:contents; text-transform:none;letter-spacing:.5px">Địa chỉ<strong>:</strong></span> <?=$_SESSION['DiaChi']?></li>
							<li>Thanh toán: Bạn sẽ thanh toán tiền khi nhận hàng</li>
						</ul>
					</div>
				</div>
				<!-- <div class="order-address bill padding60" style = "padding:16px;">
					<div class="log-title">
						<h3 style = "margin-bottom:20px"><strong>ĐỊA CHỈ GIAO HÀNG</strong></h3>
					</div>
					<p style = "font-size:16px; margin-top:6px; font-weight:600;letter-spacing:.5px">Địa chỉ: <?=$_SESSION['login']['DiaChi']?></p>
					<p style = "font-size:16px; margin-top:6px; font-weight:600;letter-spacing:.5px">SĐT: <?=$_SESSION['login']['SDT']?></p>
				</div> -->
			</div>
		</div>
	</div>
</section>
<!-- order-complete content section end -->
<?php

unset($_SESSION['sanpham']);
unset($_SESSION['TongTien']);
	?>