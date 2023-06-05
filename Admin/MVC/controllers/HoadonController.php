<?php
require_once("MVC/models/hoadon.php");
include_once('../Mail/sendmail.php');
class HoaDonController
{
    var $hoadon_model;
    public function __construct()
    {
        $this->hoadon_model = new Hoadon();
    }
    function list()
    {
        $data = array();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            if ($id > 3) {
                $id = 0;
            }
            $data = $this->hoadon_model->trangthai($id);
        } else {
            $data = $this->hoadon_model->All();
        }
        require_once("MVC/Views/Admin/index.php");
    }
    function xetduyet()
    {
        
        $data = array(
            'MaHD' => $_GET['id'],
            'TrangThai' => 1,
        );
        $this->hoadon_model->update($data);
       $ketqua= $this->hoadon_model->ktraMail($_GET['id']);
       $chitiet=$this->hoadon_model->chitiethoadon($_GET['id']);
       $chitietkg='';
       $chitietkg.='<table style=" border: 1px solid">
       <tr style=" border: 1px solid">
       <th style=" border: 1px solid">Tên sản phẩm</th>
       <th  style=" border: 1px solid">Đơn giá</th>
       <th  style=" border: 1px solid">Số lượng</th>
       <th  style=" border: 1px solid">Thành tiền</th>
       </tr>';
       foreach ($chitiet as $row)
       {
       
       $chitietkg.='
       <tr style=" border: 1px solid">
       <td  style=" border: 1px solid">'.$row['Ten'].'</td>
       <td  style=" border: 1px solid">'.$row['DonGia'].'</td>
       <td  style=" border: 1px solid">'.$row['SoLuong'].'</td>
       <td  style=" border: 1px solid">'.$row['DonGia']* $row['SoLuong'].'</td>
       </tr>
        
        
        
        
        
        </table>';
       }
       
       xacnhandon($ketqua[0]['Email'],$chitietkg);
    }

    function capnhat()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian =  date('Y-m-d H:i:s');
        $data = array(
            'MaHD' => $_GET['id'],
            'TrangThai' => 2,
            'NgayGiao' => $ThoiGian,
        );
        $this->hoadon_model->update($data);
        $ketqua= $this->hoadon_model->ktraMail($_GET['id']);
        if(1000000<=$ketqua[0]['TongTien'] and $ketqua[0]['TongTien']<=5000000 )
        {
            $magiamgia = bin2hex(random_bytes(5));
            $giam='2%';
            $data = array(
                'MaGiamGia' => $magiamgia,
                'GiaTriGiamGia' => 0.02,
                'MoTa' => '2%',
                'TrangThai' => 1,
            );
            
            $success = false;
            while (!$success) {
                $kq = $this->hoadon_model->store1($data);
                if ($kq=true) {
                    $success = true;
                    sendmailgiamgia($ketqua[0]['Email'],$magiamgia, $giam);
                }
            }
           
            
           
        }
        elseif (5000000<=$ketqua[0]['TongTien'] and $ketqua[0]['TongTien']<=10000000 )
        {
            
            $magiamgia = bin2hex(random_bytes(5));
            $giam='5%';
            $data = array(
                'MaGiamGia' => $magiamgia,
                'GiaTriGiamGia' => 0.05,
                'MoTa' => '5%',
                'TrangThai' => 1,
            );
            
            $success = false;
            while (!$success) {
                $kq = $this->hoadon_model->store1($data);
                if ($kq=true) {
                    $success = true;
                    sendmailgiamgia($ketqua[0]['Email'],$magiamgia,$giam);
                }
            }
           
        }

        elseif ( $ketqua[0]['TongTien']>=10000000 )
        {
            
            $magiamgia = bin2hex(random_bytes(5));
            $giam='10%';
            $data = array(
                'MaGiamGia' => $magiamgia,
                'GiaTriGiamGia' => 0.1,
                'MoTa' => '10%',
                'TrangThai' => 1,
            );
            
            $success = false;
            while (!$success) {
                $kq = $this->hoadon_model->store1($data);
                if ($kq=true) {
                    $success = true;
                    sendmailgiamgia($ketqua[0]['Email'],$magiamgia,$giam);
                }
            }
           
        }
        
    }
    function capnhat1()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian =  date('Y-m-d H:i:s');
        $data = array(
            'MaHD' => $_GET['id'],
            'TrangThai' => 3,
            'NgayGiao' => $ThoiGian,
        );
        $this->hoadon_model->update($data);
    }
    function delete()
    {
        if (isset($_GET['id'])) {
            $this->hoadon_model->delete($_GET['id']);
        }
    }
    function xuat()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->hoadon_model->xuathoadon($id);
        
        require_once("MVC/Views/hoadon/xuat.php");
    }
    function chitiet()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->hoadon_model->chitiethoadon($id);
        require_once("MVC/Views/Admin/index.php");
    }
    function chitietcapnhat()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->hoadon_model->chitiethoadon($id);
        
        require_once("MVC/Views/Admin/index.php");
    }
}
