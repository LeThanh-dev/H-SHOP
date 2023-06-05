<footer class="footer-two">
    <!-- footer-top area start -->
    <div class="footer-top section-padding">
        <div class="footer-dsc">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="single-text">
                            <div class="footer-title">
                                <h4>Liên hệ</h4>
                            </div>
                            <div class="footer-text">
                                <ul>
                                    <li>
                                        <i class="mdi mdi-map-marker"></i>
                                        <a class="single-contact"
                                        style = "text-transform: none;text-decoration: underline;"
                                        href= "https://www.google.com/maps/place/Thu+Mua+%C4%90%E1%BB%93+C%C5%A9+t%E1%BA%A1i+H%E1%BA%A3i+Ph%C3%B2ng/@20.8614913,106.6247176,13z/data=!4m10!1m2!2m1!1zxJHhu5MgZ2lhIGTFqW5nIGPFqSBI4bqjaSBQaMOybmc!3m6!1s0x314a7bc9f97a4841:0x56078c48de4aeb57!8m2!3d20.8614913!4d106.6968154!15sCiDEkeG7kyBnaWEgZMWpbmcgY8WpIEjhuqNpIFBow7JuZ1oiIiDEkeG7kyBnaWEgZMWpbmcgY8WpIGjhuqNpIHBow7JuZ5IBEHNlY29uZF9oYW5kX3Nob3DgAQA!16s%2Fg%2F11js2vy6z9?hl=vi-VN"
                                        target = "_blank"
                                        >
                                            <p>939 Nguyễn Bỉnh Khiêm</p>
                                            <p>Đông Hải 1, Hải An, Hải Phòng</p>
                                        </a>
                                    </li>
                                    <li>
                                        <i class="mdi mdi-phone"></i>
                                        <p>(+84) 123456789</p>
								        <p>(+84) 987654321</p>
                                    </li>
                                    <li>
                                        <i class="mdi mdi-email"></i>
                                        <p>hoangtamtom@gmail.com</p>
								        <p>epu@gmail.com</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-4 wide-mobile">
                        <div class="single-text">
                            <div class="footer-title">
                                <h4>Tài khoản</h4>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="?act=taikhoan&xuli=account"><i class="mdi mdi-menu-right"></i>Tài khoản</a></li>
                                    <li><a href="?act=cart"><i class="mdi mdi-menu-right"></i>Giỏ Hàng</a></li>
                                    <!-- <li><a href="?act=taikhoan"><i class="mdi mdi-menu-right"></i>Đăng Nhập</a></li> -->
                                    <li><a href="?act=checkout"><i class="mdi mdi-menu-right"></i>Thanh Toán</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-4 wide-mobile">
                        <div class="single-text">
                            <div class="footer-title">
                                <h4>Danh mục</h4>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <?php foreach ($data_danhmuc as $row) { ?>
                                    <li><a href="?act=shop&sp=<?=$row['MaDM']?>&ten=<?=$row['TenDM']?>"><i class="mdi mdi-menu-right"></i><?=$row['TenDM']?></a></li>
                                    <?php  } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- footer-top area end -->
    <!-- footer-bottom area start -->
    
    <!-- footer-bottom area end -->
</footer>