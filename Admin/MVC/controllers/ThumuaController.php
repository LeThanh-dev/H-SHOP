<?php
require_once("MVC/Models/thumua.php");

class ThumuaController
{
    var $thuamua_model;
    public function __construct()
    {
        $this->thumua_model = new Thumua();
       
    }
    public function list()
    {
        $data = array();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            if ($id > 2) {
                $id = 0;
            }
            $data = $this->thumua_model->list($id);
        } else {
            $data = $this->thumua_model->All1();
        }
        require_once("MVC/Views/Admin/index.php");



        
    }

    function xetduyet()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian =  date('Y-m-d H:i:s');
         $data = array(
            'MaThuMua' => $_GET['id'],
            'TrangThai' => 2,
            'ThoiGian' => $ThoiGian
        );
    $this->thumua_model->update($data);
       
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian =  date('Y-m-d H:i:s');
        $data = array(
            'MaLSP' =>    $_POST['MaLSP'],
            'TenSP'  =>   $_POST['TenSP'],
            'MaDM' => $_POST['MaDM'],
            'DonGia' => $_POST['DonGia'],
            'SoLuong' => $_POST['SoLuong'],
            'HinhAnh1' => $_POST['HinhAnh1'],
            'HinhAnh2' => $_POST['HinhAnh2'],
            'HinhAnh3' => $_POST['HinhAnh3'],
            
            'Hang' =>  $_POST['Hang'],
            'KichThuoc' =>  $_POST['KichThuoc'],
            'TrongLuong' => $_POST['TrongLuong'],
            'ChatLieu' =>  $_POST['ChatLieu'],
            
            
            
            'TrangThai' => 1,
            'MoTa' =>  $_POST['MoTa'],
            'ThoiGian' => $ThoiGian
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }

         $this->thumua_model->store1($data);
       
    }
    function xetduyet1()
    {
        $data = array(
            'MaThuMua' => $_GET['id'],
            'TrangThai' => 1
        );
    $this->thumua_model->update($data);
        
       
    }

    function xuat()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->thumua_model->xuathoadon($id);
        
        require_once("MVC/Views/thumua/xuat.php");
    }
}
