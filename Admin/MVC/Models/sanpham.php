<?php
require("model.php");
class sanpham extends model
{
    var $table = "sanpham";
    var $contens = "MaSP";
    function khuyenmai(){
        $query = "select * from khuyenmai ";
        require("result.php");
        return $data;
    }
    function khuyenmai1($id){
        $query = "select GiaTriKM from khuyenmai where MaKM=$id ";
        require("result.php");
        return $data;
    }
    function loaisp(){
        $query = "select * from loaisanpham ";
        require("result.php");
        return $data;
    }
    function danhmuc(){
        $query = "select * from danhmuc ";
        require("result.php");
        return $data;
    }
}
