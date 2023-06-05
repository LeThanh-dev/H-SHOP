<?php
require_once("Models/checkout.php");
class CheckoutController
{
    var $checkout_model;
    public function __construct()
    {
        $this->checkout_model = new Checkout();
    }
    function list()
    {
        if (isset($_SESSION['login'])) {
            $data_danhmuc = $this->checkout_model->danhmuc();

            $data_chitietDM = array();

            for ($i = 1; $i <= count($data_danhmuc); $i++) {
                $data_chitietDM[$i] = $this->checkout_model->chitietdanhmuc($i);
            }

            $count = 0;
            if (isset($_SESSION['sanpham'])) {
                foreach ($_SESSION['sanpham'] as $value) {
                    $count += $value['ThanhTien'];
                }
            }
           if(isset( $_POST['tongtien']))
           {
            $tongtien=  $_POST['tongtien'];
            $giamgia=$_POST['giamgia'];
          
            $datagiam = $this->checkout_model->giamgia($giamgia);
           }
            require_once('Views/index.php');
        } else {
            header('location: ?act=taikhoan');
        }
    }
    function  save()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian =  date('Y-m-d H:i:s');

        $count = 0;
        if (isset($_SESSION['sanpham'])) {
            foreach ($_SESSION['sanpham'] as $value) {
                $count += $value['ThanhTien'];
            }
        }
        if(isset($_GET['message']) and $_GET['message']=='Successful.' )
        {

            $string = $_GET['extraData'];
            $array = explode(",", $string);
            $data = array(
                'MaND' => $array[0],
                'NgayLap' => $ThoiGian,
                'NguoiNhan' =>   $array[1],
                'SDT' => $array[2],
                'DiaChi' => $array[3],
                'TongTien' =>$_GET['amount'],
                'TrangThai'  =>  '0',
                'PhuongThucTT'  =>  'Chuyển khoản MoMo',
            );
            $_SESSION['NguoiNhan']= $array[1];
            $_SESSION['SDT']= $array[2];
            $_SESSION['DiaChi']= $array[3];
            $_SESSION['TongTien']=$_GET['amount'];

        }
        else
        {
        
        $data = array(
            'MaND' => $_SESSION['login']['MaND'],
            'NgayLap' => $ThoiGian,
            'NguoiNhan' =>    $_POST['NguoiNhan'],
            'SDT' => $_POST['SDT'],
            'DiaChi' => $_POST['DiaChi'],
            'TongTien' =>$_POST['TongTien'],
            'TrangThai'  =>  '0',
            'PhuongThucTT'  =>  'Tiền mặt',
        );

        $_SESSION['NguoiNhan']= $_POST['NguoiNhan'];
            $_SESSION['SDT']=$_POST['SDT'];
            $_SESSION['DiaChi']= $_POST['DiaChi'];
            $_SESSION['TongTien']=$_POST['TongTien'];
        
    }
       
        $this->checkout_model->save($data);

    }
    function order_complete()
    {
        $data_danhmuc = $this->checkout_model->danhmuc();

        $data_chitietDM = array();

        for ($i = 1; $i <= count($data_danhmuc); $i++) {
            $data_chitietDM[$i] = $this->checkout_model->chitietdanhmuc($i);
        }
        $count = 0;
        if (isset($_SESSION['sanpham'])) {
            foreach ($_SESSION['sanpham'] as $value) {
                $count += $value['ThanhTien'];
            }
        }
        require_once('Views/index.php');
    }
}
