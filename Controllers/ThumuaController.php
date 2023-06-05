<?php
require_once("Models/thumua.php");
class ThumuaController
{
    var $thumua_model;
    public function __construct()
    {
        $this->thumua_model = new Thumua();
    }
    function list()
    {

         if (isset($_SESSION['login'])) {
            $data_danhmuc = $this->thumua_model->danhmuc();

            $data_chitietDM = array();

            for ($i = 1; $i <= count($data_danhmuc); $i++) {
                $data_chitietDM[$i] = $this->thumua_model->chitietdanhmuc($i);
            }

        $data_dm = $this->thumua_model->danhmuc();
        $data_lsp =$this->thumua_model->loaisp();
        

          require_once('Views/index.php');
        }
         else 

        {
            header('location: ?act=taikhoan');
        }
        
    
   

    }

     public function store()
    {
        if(isset($_POST['thumua'])){
        $target_dir = "public/img/products/";  // thư mục chứa file upload

        $HinhAnh1 = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh1"]["name"]); // link sẽ upload file lên

        $status_upload = move_uploaded_file($_FILES["HinhAnh1"]["tmp_name"], $target_file);

        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh1 =  "img/products/" . basename($_FILES["HinhAnh1"]["name"]);
        }

        $HinhAnh2 = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh2"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["HinhAnh2"]["tmp_name"], $target_file);
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh2 =  "/img/products/" . basename($_FILES["HinhAnh2"]["name"]);
        }

        $HinhAnh3 = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh3"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["HinhAnh3"]["tmp_name"], $target_file);
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh3 =  "/img/products/" . basename($_FILES["HinhAnh3"]["name"]);
        }

        $TrangThai = 0;
        if (isset($_POST['TrangThai'])) {
            $TrangThai = $_POST['TrangThai'];
        }

        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian =  date('Y-m-d H:i:s');
        $data = array(
            'MaLSP' =>    $_POST['MaLSP'],
            'TenSP'  =>   $_POST['TenSP'],
            'MaND'  =>   $_POST['MaND'],
            'MaDM' => $_POST['MaDM'],
            'DonGia' => $_POST['DonGia'],
            'SoLuong' => $_POST['SoLuong'],
            'HinhAnh1' => $HinhAnh1,
            'HinhAnh2' => $HinhAnh2,
            'HinhAnh3' => $HinhAnh3,
            
            'Hang' =>  $_POST['Hang'],
            'KichThuoc' =>  $_POST['KichThuoc'],
            'TrongLuong' => $_POST['TrongLuong'],
            'ChatLieu' =>  $_POST['ChatLieu'],
            
            
            
            'TrangThai' => $TrangThai,
            'MoTa' =>  $_POST['MoTa'],
            'ThoiGian' => $ThoiGian
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
        $this->thumua_model->store($data);
    }
$data_danhmuc = $this->thumua_model->danhmuc();

            $data_chitietDM = array();

            for ($i = 1; $i <= count($data_danhmuc); $i++) {
                $data_chitietDM[$i] = $this->thumua_model->chitietdanhmuc($i);
            }
        
        require_once("Views/index.php");
    
}
}
