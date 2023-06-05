<?php
require_once("model.php");
class Shop extends Model
{
    
    function loaisp($a,$b)
    {
        $query = "SELECT * FROM loaisanpham WHERE   MaDM = 1 LIMIT $a, $b";

        require("result.php");
        
        return $data;
    }
    function keywork($a)
    {
        $a = "'%".$a."%'";
        $query = "SELECT * FROM sanpham WHERE  TenSP LIKE $a and TrangThai=1 ORDER BY DonGia ASC";

        require("result.php");
        
        return $data;
    }
    function keywork1($a,$c,$d)
    {
        $a = "'%".$a."%'";
        $query = "SELECT * FROM sanpham WHERE  TenSP LIKE $a and TrangThai=1 ORDER BY DonGia ASC LIMIT $c,$d";

        require("result.php");
        
        return $data;
    }
    function dongia($a,$b)
    {
        if($a ==0 ){
            $a = "30000";
        }else{
            $a = $a."000000";
        }
        $b = $b."000000";
        $query = "SELECT * FROM sanpham WHERE  DonGia > $a AND DonGia < $b and TrangThai=1 ORDER BY DonGia ASC";

        require("result.php");
    
        return $data;
    }
    function allsanpham()
    {
       
        $query = "SELECT * FROM sanpham WHERE  TrangThai=1 ";

        require("result.php");
    
        return $data;
    }
    function allsanpham1($a,$b)
    {
       
        $query = "SELECT * FROM sanpham WHERE  TrangThai=1  ORDER BY DonGia ASC LIMIT $a, $b";

        require("result.php");
    
        return $data;
    }
    function maxgia()
    {
       
        $query = "SELECT max(DonGia) FROM sanpham WHERE  TrangThai=1 ";

        require("result.php");
    
        return $data;
    }
    
function dongia1($a,$b,$c,$d)
    {
        if($a ==0 ){
            $a = "30000";
        }else{
            $a = $a."000000";
        }
        $b = $b."000000";
        $query = "SELECT * FROM sanpham WHERE  DonGia > $a AND DonGia < $b and TrangThai=1 ORDER BY DonGia LIMIT $c, $d";

        require("result.php");
    
        return $data;
    }
    function chitiet_loai($loai,$sp)
    {
        $query = "SELECT * FROM loaisanpham WHERE  TenLSP = '$loai' and MaDM = $sp";

        require("result.php");
        
        return $data;
    }
    function chitiet($id,$sp)
    {
        $query = "SELECT * FROM sanpham WHERE  MaLSP = '$id' and MaDM = $sp and TrangThai=1";

        require("result.php");
        
        return $data;
    }
    function chitietLoaiSP($a,$b,$id,$sp)
    {
        $query = "SELECT * FROM sanpham WHERE  MaLSP = '$id' and MaDM = $sp and TrangThai=1 ORDER BY ThoiGian DESC LIMIT $a, $b ";

        require("result.php");
        
        return $data;
    }
    function sanpham_noibat()
    {
        $query = "SELECT * FROM sanpham WHERE MaSP = (SELECT MaSP sp FROM chitiethoadon GROUP BY MaSP ORDER BY COUNT(MaSP) DESC LIMIT 1) and TrangThai=1";

        return $this->conn->query($query)->fetch_assoc();
    }
    function count_sp()
    {
        $query = "SELECT COUNT(MaSP) as tong FROM sanpham WHERE TrangThai=1 ";

        return $this->conn->query($query)->fetch_assoc();
    }
    function count_sp_dm($dm)
    {
        $query = "SELECT COUNT(MaSP) as tong FROM sanpham WHERE MaDM = $dm and TrangThai=1";

        return $this->conn->query($query)->fetch_assoc();
    }
    function count_sp_ctdm($dm,$ctdm)
    {
        $query = "SELECT COUNT(MaSP) as tong FROM sanpham WHERE MaDM = $dm And MaLSP = $ctdm and TrangThai=1";
        

        return $this->conn->query($query)->fetch_assoc();
    }
}