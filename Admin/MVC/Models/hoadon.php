<?php
require_once("model.php");
class Hoadon extends Model
{
    var $table = "hoadon";
    var $contens = "MaHD";

    var $table1 = "giamgia1";
    var $contens1 = "ID";
    function trangthai($id){
        $query = "select * from HoaDon where TrangThai = $id  ORDER BY MaHD DESC";

        require("result.php");

        return $data;
    }
    function chitiethoadon($id){
        $query = "select ct.*,s.TenSP as Ten from chitiethoadon as ct, sanpham as s where ct.MaSP = s.MaSP and ct.MaHD = $id ";
        
        require("result.php");
        
        return $data;
    }
    function chitiethoadon1($id){
        $query = "select * from hoadon where MaHD = $id ";
       
        require("result.php");
        
        return $data;
    }
    function xuathoadon($id){
        $query = "select ct.*, s.TenSP as Ten,hoadon.* from chitiethoadon as ct, sanpham as s,hoadon where ct.MaSP = s.MaSP and ct.MaHD = $id and ct.MaHD= hoadon.MaHD";
       
        require("result.php");
        
        return $data;
    }

    function ktraMail($id){
       
        $query = "SELECT Email, TongTien from nguoidung,hoadon  WHERE nguoidung.MaND = hoadon.MaND and MaHD='" . $id . "'  AND nguoidung.TrangThai = 1";
        require("result.php");
        
        return $data;
   
  
        
    }

    
    
}