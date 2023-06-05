<?php
require_once("model.php");
class Thumua extends Model
{
    
    var $table = "thumua";
    var $contens = "MaThuMua";
    function khuyenmai(){
        $query = "select * from khuyenmai ";
        require("result.php");
        return $data;
    }
    function loaisp(){
        $query = "select * from loaisanpham";
        require("result.php");
        return $data;
    }
    function danhmuc(){
        $query = "select * from danhmuc ";
        require("result.php");
        return $data;
    }
    function store($data)
    {
        $f = "";
        $v = "";
        foreach ($data as $key => $value) {
            $f .= $key . ",";
            $v .= "'" . $value . "',";
        }
        $f = trim($f, ",");
        $v = trim($v, ",");
        $query = "INSERT INTO $this->table($f) VALUES ($v);";

        $status = $this->conn->query($query);

        if ($status == true) {
            setcookie('msgthumua', 'Thêm mới thành công', time() + 2);
            
        } else {
            setcookie('msgthumua1', 'Thêm vào không thành công', time() + 2);
            
        }
    }
}