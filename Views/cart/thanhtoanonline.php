<!-- pages-title-start -->
<div class="pages-title section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="pages-title-text text-center">

                    <h2>THANH TOÁN ONLINE QUA ATM</h2>


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
            <div class="col-sm-10" style="    float: none;margin: auto;">

                <?php
if(isset($_POST['TongTien'])) 
{ 
    $amount = $_POST['TongTien']; 
    $extraData=  $_POST['ND'].','.$_POST['NguoiNhan'].','.$_POST['SDT'].','.$_POST['DiaChi'];

}

?>

                <div class="main-input padding60" id="dangnhap">
                    <div class="log-title">
                        <h3><strong>Nhập thông tin tài khoản để thanh toán</strong></h3>
                    </div>
                    <div class="login-text">
                        <div class="custom-input">


                            <form action="?act=cart&xuli=thanhtoan" method="post" id="form1">
                                <img src="public/momo.jpg" style="    margin: 0 auto 24px;
																width: 80%;
																display: block;">
                                <input type="hidden" name="amount" value="<?=$amount?>" />
                                <input type="hidden" name="extraData" value="<?=$extraData?>" />

                                <input type="text" name="tennganhang" placeholder="Tên ngân hàng" required />
                                <input type="text" name="sothe" placeholder="Số tài khoản" required />
                                <input type="text" name="chutaikhoan" placeholder="Tên chủ tài khoản" required />
                                <div class="submit-text" style = "text-align:center">
                                    <button   style="background:#d82d8b; color:white" name="submit" type="submit" form="form1">
									Thanh toán
									</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>





        </div>
    </div>
</section>
<!-- login content section end -->