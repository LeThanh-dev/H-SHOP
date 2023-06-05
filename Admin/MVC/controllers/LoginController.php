<?php 
    require_once("MVC/Models/login.php");
    class LoginController {
        var $login_model;
        public function __construct()
        {
            $this->login_model = new login();
        }
        // public function login()
        // {
        //     require_once("MVC/Views/login/login.php");
        // }
        // public function login_action()
        // {
        //     $this->login_model->login_action();
        // }
        public function admin()
        {
            $data_tksp1 = $this->login_model->tk_sanpham(1);
            $data_tksp2 = $this->login_model->tk_sanpham(2);
            $data_tksp3 = $this->login_model->tk_sanpham(3);
            if(isset($_GET['thongke']) and $_GET['thongke'] =='all' )
            {
                if( $_GET['mauthongke']=='all')
                {
            $tonkho = $this->login_model->tonkhoAll();
            $tongdoanhthu = $this->login_model->TongdoanhthuAll();
            $tonghoadon = $this->login_model->TongHoaDonAll();
            $tongthumua = $this->login_model->TongThuMuaAll();
            $thumua= $this->login_model->ListThuMua();
            $listhoadon= $this->login_model->ListHoaDon();
            $tongchi= $this->login_model->TongchiAll();
            $tonkho = $this->login_model->tonkhoAll();
            $tongtonkho = $this->login_model->tongsanpham();
            $listtonkho1 = $this->login_model->ListtonkhoAll(1);
    $listtonkho2 = $this->login_model->ListtonkhoAll(2);
    $listtonkho3 = $this->login_model->ListtonkhoAll(3);
            $sp1 = $this->login_model->tk_sanpham(1);
            $slsp1 = $this->login_model->tk_sanpham2(1);
            $sp2 = $this->login_model->tk_sanpham(2);
            $slsp2 = $this->login_model->tk_sanpham2(2);
            $sp3 = $this->login_model->tk_sanpham(3);
            $slsp3 = $this->login_model->tk_sanpham2(3);
                } elseif ( $_GET['mauthongke']=='thumua')
                {
                    $tongchi= $this->login_model->TongchiAll();
                    $thumua= $this->login_model->ListThuMua();
                    $tongthumua = $this->login_model->TongThuMuaAll();
                }
                elseif ( $_GET['mauthongke']=='banhang')
                {
                    $listhoadon= $this->login_model->ListHoaDon();
                    $tongdoanhthu = $this->login_model->TongdoanhthuAll();
                    $tonghoadon = $this->login_model->TongHoaDonAll();
                }
                 elseif ( $_GET['mauthongke']=='tonkho')
                {
                    $tongtonkho = $this->login_model->tongsanpham();
                    $tonkho = $this->login_model->tonkhoAll();
                    $listtonkho1 = $this->login_model->ListtonkhoAll(1);
            $listtonkho2 = $this->login_model->ListtonkhoAll(2);
            $listtonkho3 = $this->login_model->ListtonkhoAll(3);
                    $sp1 = $this->login_model->tk_sanpham(1);
                    $slsp1 = $this->login_model->tk_sanpham2(1);
                    $sp2 = $this->login_model->tk_sanpham(2);
                    $slsp2 = $this->login_model->tk_sanpham2(2);
                    $sp3 = $this->login_model->tk_sanpham(3);
                    $slsp3 = $this->login_model->tk_sanpham2(3);
                }
            

            }else if(isset($_GET['tg1'])and $_GET['tg1']!=''  )
        
            {
                if( $_GET['mauthongke']=='all')
                {
                    $tongtonkho = $this->login_model->tongsanphamtg($_GET['tg1'],$_GET['tg2']);
                $tonkho = $this->login_model->tonkho($_GET['tg1'],$_GET['tg2']);
                $tongdoanhthu = $this->login_model->Tongdoanhthu($_GET['tg1'],$_GET['tg2']);
                $tonghoadon = $this->login_model->TongHoaDon($_GET['tg1'],$_GET['tg2']);
                $tongthumua = $this->login_model->TongThuMua($_GET['tg1'],$_GET['tg2']);
                $thumua= $this->login_model->ListThuMua1($_GET['tg1'],$_GET['tg2']);
                $listhoadon= $this->login_model->ListHoaDon1($_GET['tg1'],$_GET['tg2']);
                $tongchi= $this->login_model->Tongchi($_GET['tg1'],$_GET['tg2']);
                $listtonkho1 = $this->login_model->Listtonkho(1,$_GET['tg1'],$_GET['tg2']);
            $listtonkho2 = $this->login_model->Listtonkho(2,$_GET['tg1'],$_GET['tg2']);
            $listtonkho3 = $this->login_model->Listtonkho(3,$_GET['tg1'],$_GET['tg2']);
                    $sp1 = $this->login_model->tk_sanphamtg(1,$_GET['tg1'],$_GET['tg2']);
                    $slsp1 = $this->login_model->tk_sanpham2tg(1,$_GET['tg1'],$_GET['tg2']);
                    $sp2 = $this->login_model->tk_sanphamtg(2,$_GET['tg1'],$_GET['tg2']);
                    $slsp2 = $this->login_model->tk_sanpham2tg(2,$_GET['tg1'],$_GET['tg2']);
                    $sp3 = $this->login_model->tk_sanphamtg(3,$_GET['tg1'],$_GET['tg2']);
                    $slsp3 = $this->login_model->tk_sanpham2tg(3,$_GET['tg1'],$_GET['tg2']);
                } 
                elseif ( $_GET['mauthongke']=='thumua')
                {
                    $tongchi= $this->login_model->Tongchi($_GET['tg1'],$_GET['tg2']);
                    $thumua= $this->login_model->ListThuMua1($_GET['tg1'],$_GET['tg2']);
                    $tongthumua = $this->login_model->TongThuMua($_GET['tg1'],$_GET['tg2']);
                }
                elseif ( $_GET['mauthongke']=='banhang')
                {
                    $listhoadon= $this->login_model->ListHoaDon1($_GET['tg1'],$_GET['tg2']);
                    $tongdoanhthu = $this->login_model->Tongdoanhthu($_GET['tg1'],$_GET['tg2']);
                    $tonghoadon = $this->login_model->TongHoaDon($_GET['tg1'],$_GET['tg2']);
                }

                elseif ( $_GET['mauthongke']=='tonkho')
                {
                    $tongtonkho = $this->login_model->tongsanphamtg($_GET['tg1'],$_GET['tg2']);
                    $tonkho = $this->login_model->tonkho($_GET['tg1'],$_GET['tg2']);
                    $listtonkho1 = $this->login_model->Listtonkho(1,$_GET['tg1'],$_GET['tg2']);
            $listtonkho2 = $this->login_model->Listtonkho(2,$_GET['tg1'],$_GET['tg2']);
            $listtonkho3 = $this->login_model->Listtonkho(3,$_GET['tg1'],$_GET['tg2']);
                    $sp1 = $this->login_model->tk_sanphamtg(1,$_GET['tg1'],$_GET['tg2']);
                    $slsp1 = $this->login_model->tk_sanpham2tg(1,$_GET['tg1'],$_GET['tg2']);
                    $sp2 = $this->login_model->tk_sanphamtg(2,$_GET['tg1'],$_GET['tg2']);
                    $slsp2 = $this->login_model->tk_sanpham2tg(2,$_GET['tg1'],$_GET['tg2']);
                    $sp3 = $this->login_model->tk_sanphamtg(3,$_GET['tg1'],$_GET['tg2']);
                    $slsp3 = $this->login_model->tk_sanpham2tg(3,$_GET['tg1'],$_GET['tg2']);
                }

            } else if(isset($_GET['tg1'])and $_GET['tg1']!='' and  $_GET['mauthongke']=='thumua')
        
            {


            }

            $data_hd = $this->login_model->tk_thongbao();

            $m = date("m");
            $y = "20".date("y");

            $data_countM = $this->login_model->tk_dtthang($m,$y);

           

            $data_countY = $this->login_model->tk_dtnam($y);

            $data_nguoidung = $this->login_model->tk_nguoidung(1);

            $data_nhanvien = $this->login_model->tk_nguoidung(3);
            require_once("MVC/Views/Admin/index.php");
           
        }

        public function xuat()
        {
            $data_tksp1 = $this->login_model->tk_sanpham(1);
            $data_tksp2 = $this->login_model->tk_sanpham(2);
            $data_tksp3 = $this->login_model->tk_sanpham(3);
            if(isset($_GET['thongke']) and $_GET['thongke'] =='all' )
            {
                if( $_GET['mauthongke']=='all')
                {
            $tonkho = $this->login_model->tonkhoAll();
            $tongdoanhthu = $this->login_model->TongdoanhthuAll();
            $tonghoadon = $this->login_model->TongHoaDonAll();
            $tongthumua = $this->login_model->TongThuMuaAll();
            $thumua= $this->login_model->ListThuMua();
            $listhoadon= $this->login_model->ListHoaDon();
            $tongchi= $this->login_model->TongchiAll();
            $tonkho = $this->login_model->tonkhoAll();
            $tongtonkho = $this->login_model->tongsanpham();
            $listtonkho1 = $this->login_model->ListtonkhoAll(1);
    $listtonkho2 = $this->login_model->ListtonkhoAll(2);
    $listtonkho3 = $this->login_model->ListtonkhoAll(3);
            $sp1 = $this->login_model->tk_sanpham(1);
            $slsp1 = $this->login_model->tk_sanpham2(1);
            $sp2 = $this->login_model->tk_sanpham(2);
            $slsp2 = $this->login_model->tk_sanpham2(2);
            $sp3 = $this->login_model->tk_sanpham(3);
            $slsp3 = $this->login_model->tk_sanpham2(3);
                } elseif ( $_GET['mauthongke']=='thumua')
                {
                    $tongchi= $this->login_model->TongchiAll();
                    $thumua= $this->login_model->ListThuMua();
                    $tongthumua = $this->login_model->TongThuMuaAll();
                }
                elseif ( $_GET['mauthongke']=='banhang')
                {
                    $listhoadon= $this->login_model->ListHoaDon();
                    $tongdoanhthu = $this->login_model->TongdoanhthuAll();
                    $tonghoadon = $this->login_model->TongHoaDonAll();
                }
                 elseif ( $_GET['mauthongke']=='tonkho')
                {
                    $tongtonkho = $this->login_model->tongsanpham();
                    $tonkho = $this->login_model->tonkhoAll();
                    $listtonkho1 = $this->login_model->ListtonkhoAll(1);
            $listtonkho2 = $this->login_model->ListtonkhoAll(2);
            $listtonkho3 = $this->login_model->ListtonkhoAll(3);
                    $sp1 = $this->login_model->tk_sanpham(1);
                    $slsp1 = $this->login_model->tk_sanpham2(1);
                    $sp2 = $this->login_model->tk_sanpham(2);
                    $slsp2 = $this->login_model->tk_sanpham2(2);
                    $sp3 = $this->login_model->tk_sanpham(3);
                    $slsp3 = $this->login_model->tk_sanpham2(3);
                }
            

            }else if(isset($_GET['tg1'])and $_GET['tg1']!=''  )
        
            {
                if( $_GET['mauthongke']=='all')
                {
                    $tongtonkho = $this->login_model->tongsanphamtg($_GET['tg1'],$_GET['tg2']);
                $tonkho = $this->login_model->tonkho($_GET['tg1'],$_GET['tg2']);
                $tongdoanhthu = $this->login_model->Tongdoanhthu($_GET['tg1'],$_GET['tg2']);
                $tonghoadon = $this->login_model->TongHoaDon($_GET['tg1'],$_GET['tg2']);
                $tongthumua = $this->login_model->TongThuMua($_GET['tg1'],$_GET['tg2']);
                $thumua= $this->login_model->ListThuMua1($_GET['tg1'],$_GET['tg2']);
                $listhoadon= $this->login_model->ListHoaDon1($_GET['tg1'],$_GET['tg2']);
                $tongchi= $this->login_model->Tongchi($_GET['tg1'],$_GET['tg2']);
                $listtonkho1 = $this->login_model->Listtonkho(1,$_GET['tg1'],$_GET['tg2']);
            $listtonkho2 = $this->login_model->Listtonkho(2,$_GET['tg1'],$_GET['tg2']);
            $listtonkho3 = $this->login_model->Listtonkho(3,$_GET['tg1'],$_GET['tg2']);
                    $sp1 = $this->login_model->tk_sanphamtg(1,$_GET['tg1'],$_GET['tg2']);
                    $slsp1 = $this->login_model->tk_sanpham2tg(1,$_GET['tg1'],$_GET['tg2']);
                    $sp2 = $this->login_model->tk_sanphamtg(2,$_GET['tg1'],$_GET['tg2']);
                    $slsp2 = $this->login_model->tk_sanpham2tg(2,$_GET['tg1'],$_GET['tg2']);
                    $sp3 = $this->login_model->tk_sanphamtg(3,$_GET['tg1'],$_GET['tg2']);
                    $slsp3 = $this->login_model->tk_sanpham2tg(3,$_GET['tg1'],$_GET['tg2']);
                } 
                elseif ( $_GET['mauthongke']=='thumua')
                {
                    $tongchi= $this->login_model->Tongchi($_GET['tg1'],$_GET['tg2']);
                    $thumua= $this->login_model->ListThuMua1($_GET['tg1'],$_GET['tg2']);
                    $tongthumua = $this->login_model->TongThuMua($_GET['tg1'],$_GET['tg2']);
                }
                elseif ( $_GET['mauthongke']=='banhang')
                {
                    $listhoadon= $this->login_model->ListHoaDon1($_GET['tg1'],$_GET['tg2']);
                    $tongdoanhthu = $this->login_model->Tongdoanhthu($_GET['tg1'],$_GET['tg2']);
                    $tonghoadon = $this->login_model->TongHoaDon($_GET['tg1'],$_GET['tg2']);
                }

                elseif ( $_GET['mauthongke']=='tonkho')
                {
                    $tongtonkho = $this->login_model->tongsanphamtg($_GET['tg1'],$_GET['tg2']);
                    $tonkho = $this->login_model->tonkho($_GET['tg1'],$_GET['tg2']);
                    $listtonkho1 = $this->login_model->Listtonkho(1,$_GET['tg1'],$_GET['tg2']);
            $listtonkho2 = $this->login_model->Listtonkho(2,$_GET['tg1'],$_GET['tg2']);
            $listtonkho3 = $this->login_model->Listtonkho(3,$_GET['tg1'],$_GET['tg2']);
                    $sp1 = $this->login_model->tk_sanphamtg(1,$_GET['tg1'],$_GET['tg2']);
                    $slsp1 = $this->login_model->tk_sanpham2tg(1,$_GET['tg1'],$_GET['tg2']);
                    $sp2 = $this->login_model->tk_sanphamtg(2,$_GET['tg1'],$_GET['tg2']);
                    $slsp2 = $this->login_model->tk_sanpham2tg(2,$_GET['tg1'],$_GET['tg2']);
                    $sp3 = $this->login_model->tk_sanphamtg(3,$_GET['tg1'],$_GET['tg2']);
                    $slsp3 = $this->login_model->tk_sanpham2tg(3,$_GET['tg1'],$_GET['tg2']);
                }

            } else if(isset($_GET['tg1'])and $_GET['tg1']!='' and  $_GET['mauthongke']=='thumua')
        
            {


            }


            $data_hd = $this->login_model->tk_thongbao();

            $m = date("m");
            $y = "20".date("y");

            $data_countM = $this->login_model->tk_dtthang($m,$y);

           

            $data_countY = $this->login_model->tk_dtnam($y);

            $data_nguoidung = $this->login_model->tk_nguoidung(1);

            $data_nhanvien = $this->login_model->tk_nguoidung(3);
            
            require_once('MVC/Views/login/xuat.php');
        }
       
    }
?>