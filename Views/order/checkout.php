<!-- pages-title-start -->


<div class="pages-title section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="pages-title-text text-center">
                    <h2>Đặt Hàng</h2>
                    <ul class="text-left">
                        <li><a href="index.php?act=home">Trang chủ</a></li>
                        <li><span> / </span>Đặt Hàng</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- pages-title-end -->
<!-- Checkout content section start -->
<?php if (isset($_SESSION['sanpham'])) {


?>
<section class="pages checkout section-padding">
    <div class="container">
        <div class="row">
            <div class=" col-sm-6">
                <div class="padding60" style="padding:16px;text-align: center;">
                    <div class="log-title">
                        <h3><strong>Hóa đơn</strong></h3>
                    </div>
                    <div class="cart-form-text pay-details table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>Sản phẩm</th>
                                    <td style="font-weight:600">Thành Tiền</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (isset($_SESSION['sanpham'])) {
									foreach ($_SESSION['sanpham'] as $value) { ?>
                                <tr>
                                    <th><?=$value['TenSP']?></th>
                                    <td><?=number_format($value['ThanhTien'])?> VNĐ</td>
                                </tr>
                                <?php }
								} ?>
                                <tr style="    background: #dfdfdf;">
                                    <th>Giảm giá</th>
                                    <td><?php if(isset($datagiam)){
											echo $datagiam['MoTa'];
											
										}else
										{
											echo '0';
										}
											?></td>
                                </tr>
                                <tr style="    background: #dfdfdf;">
                                    <th>Phí vận chuyển</th>
                                    <td>30,000 VNĐ</td>
                                </tr>
                                <!-- <tr style = "    background: #dfdfdf;">
							<th>Vat</th>
							<td>0</td>
						</tr> -->
                            </tbody>
                            <tfoot style="font-size:18px">
                                <?php if(isset($tongtien))
							
							{
								$tongtienTT= $tongtien;
							}
							else
							{
								$tongtienTT= number_format( $count + 30000);
							}
							?>
                                <tr>
                                    <th>TỔNG THANH TOÁN</th>
                                    <td style="white-space: nowrap;"><?= $tongtienTT ?> VNĐ</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="main-input single-cart-form padding60" style="padding:16px;text-align: center;">
                    <div class="log-title">
                        <h3><strong>Địa chỉ nhận hàng</strong></h3>
                    </div>
                    <div class="custom-input">
                        <form id="checkout-form" method="post">
                            <input type="hidden" name="ND" required value="<?= $_SESSION['login']['MaND'] ?>" />
                            <input type="hidden" name="TongTien" required
                                value="<?= str_replace(',', '', $tongtienTT )  ?>" />
                            <label style="text-align: left;display: block;margin-left: 3px;">Người nhận</label>
                            <input type="text" name="NguoiNhan" required
                                value="<?php echo $_SESSION['login']['Ten'] ?>" />



                            <label style="text-align: left;display: block;margin-left: 3px;">Số điện thoại</label>
                            <input type="tel" name="SDT" required pattern="0[0-9]{9}" maxLength="10"
                                value="<?=$_SESSION['login']['SDT']?>" />

                            <label style="text-align: left;display: block;margin-left: 3px;">Địa chỉ</label>
                            <input type="text" name="DiaChi" required value="<?=$_SESSION['login']['DiaChi']?>" />

                            <br />
                            <div class="submit-text">
                                <button type="submit" id="tienmat-btn" name="tienmat">Đặt hàng</button>
                                <!-- <button id="momo-btn" type="submit" name="order_momo"
                                    style="background:#d82d8b; color:white;margin-left:10px">
                                    Mua hàng
                                </button> -->
                            </div>
                        </form>

                        <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const tienmatButton = document.getElementById('tienmat-btn');
                            const momoButton = document.getElementById('momo-btn');
                            const checkoutForm = document.getElementById('checkout-form');

                            tienmatButton.addEventListener('click', function() {
                                checkoutForm.action = "?act=checkout&xuli=save";
                                checkoutForm.removeAttribute('enctype');
                            });

                            momoButton.addEventListener('click', function() {
                                checkoutForm.action = "?act=thanhtoanonline";
                                checkoutForm.setAttribute('enctype',
                                    'application/x-www-form-urlencoded');
                            });
                        });
                        </script>

                        </br>





                    </div>

                </div>

            </div>
        </div>

    </div>
    </div>
</section>
<?php
}
else 
{
?>
<div class="row">
    <div class="col-xs-12 text-center">
        <div class="complete-title">
            <p style="margin: 0">Bạn hiện chưa có sản phẩm trong giỏ hàng để đặt hàng!</p>
        </div>
    </div>
</div>
<?php
}
?>
<!-- Checkout content section end -->