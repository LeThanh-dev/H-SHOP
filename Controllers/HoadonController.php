<?php
require_once("Models/hoadon.php");
class HoaDonController
{
    var $hoadon_model;
    public function __construct()
    {
        $this->hoadon_model = new Hoadon();
    }
    function list()
    {
         if (isset($_SESSION['MaND'])) {
            $id = $_SESSION['MaND'];
         $data_danhmuc = $this->hoadon_model->danhmuc();

            $data_chitietDM = array();

            for ($i = 1; $i <= count($data_danhmuc); $i++) {
                $data_chitietDM[$i] = $this->hoadon_model->chitietdanhmuc($i);
            }

        $data = array();
       
            
            $data = $this->hoadon_model->chitiethoadon($id);;
         
        require_once("Views/index.php");
    } else
    {
        
            header('location: ?act=taikhoan');
        
        
    }


    }

    function add()
    {
         if (isset($_SESSION['MaND'])) {
            $id = $_SESSION['MaND'];
         $data_danhmuc = $this->hoadon_model->danhmuc();

            $data_chitietDM = array();

            for ($i = 1; $i <= count($data_danhmuc); $i++) {
                $data_chitietDM[$i] = $this->hoadon_model->chitietdanhmuc($i);
            }

        $data = array();
       
            
            $data = $this->hoadon_model->chitietthumua($id);;
        
        require_once("Views/index.php");
    } else
    {
        
            header('location: ?act=taikhoan');
        
        
    }


    }


    function delete()
    {
        $id = $_GET['id'];
       
        $this->hoadon_model->xoahoadon($id);
        
    }

   
}
