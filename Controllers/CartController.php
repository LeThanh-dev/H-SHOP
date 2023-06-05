<?php
require_once("Models/cart.php");
class CartController
{
    var $cart_model;
    public function __construct()
    {
        $this->cart_model = new Cart();
    }
    function list_cart()
    {
        $data_danhmuc = $this->cart_model->danhmuc();

        $data_chitietDM = array();

        for ($i = 1; $i <= count($data_danhmuc); $i++) {
            $data_chitietDM[$i] = $this->cart_model->chitietdanhmuc($i);
        }

        $count = 0;
        if (isset($_SESSION['sanpham'])) {
            foreach ($_SESSION['sanpham'] as $value) {
                $count += $value['ThanhTien'];
            }
        }
        if(isset($_POST['giamgia']))
        {
        $giamgia=$_POST['giamgia'];
        $datagiam = $this->cart_model->giamgia($giamgia);
       $_SESSION['giamgia']= $giamgia;
        }
        if(isset($_GET['xuli']) and $_GET['xuli']== 'thanhtoan' )
        {
            header('Location:?act=checkout&xuli=save&message=Successful.&amount='.$_POST['amount'].'&extraData='.$_POST['extraData'].'');
        }
        require_once('Views/index.php');
    }
    function add_cart()
    {
        $id = $_GET['id'];
        $data = $this->cart_model->detail_sp($id);
        $count = 0;
        if (isset($_SESSION['sanpham'][$id])) {
            $arr = $_SESSION['sanpham'][$id];
        
            $arr['SoLuong'] = $arr['SoLuong'] + 1;
            $arr['ThoiGian'] = time();
            //echo  $arr['SoLuong'];
            $arr['ThanhTien'] = $arr['SoLuong'] * $arr["DonGia"];

            $_SESSION['sanpham'][$id] = $arr;
            // print_r($_SESSION['sanpham'][$id] );
            // echo'<pre>';
            // $products = $_SESSION['sanpham'];
			// 						usort($products, function ($a, $b) {
			// 							// Sắp xếp theo thứ tự tăng dần của thời gian thêm sản phẩm
			// 							return  intval($b['ThoiGian']) -  intval($a['ThoiGian']);
			// 						});
            // print_r($products);
            // echo'</pre>';
        } else {
            $arr['MaSP'] = $data['MaSP'];
            $arr['TenSP'] = $data['TenSP'];
            $arr['DonGia'] = $data['DonGia'];
            $arr['SoLuong'] = 1;
            $arr['ThanhTien'] = $data['DonGia'];
            $arr['HinhAnh1'] = $data['HinhAnh1'];
            $arr['ThoiGian'] = time();
            $_SESSION['sanpham'][$id] = $arr;
        }

        foreach ($_SESSION['sanpham'] as $value) {
            $count += $value['ThanhTien'];
        }

       header('Location:?act=cart');
    }
    function update_cart()
    {
        $soluong=$this->cart_model->SoluongSP($_GET['id']);
       
        $arr = $_SESSION['sanpham'][$_GET['id']];
        if($soluong['SoLuong']>  $arr['SoLuong'])
        {
        $arr['SoLuong'] = $arr['SoLuong'] + 1;
        $arr['ThanhTien'] = $arr['SoLuong'] * $arr["DonGia"];
        $_SESSION['sanpham'][$_GET['id']] = $arr;
        header('Location: ?act=cart');
        }
        else
        {
            header('Location: ?act=cart');
            setcookie('slhang',' Không đủ số lượng của sản phẩm '.$soluong['TenSP'],time() + 2);

        }
    }
    function giamgia()
    {
       
    }

    function delete_cart()
    {
        $arr = $_SESSION['sanpham'][$_GET['id']];

        if ($arr['SoLuong'] == 1) {
            unset($_SESSION['sanpham'][$_GET['id']]);
        } else {
            
            $arr = $_SESSION['sanpham'][$_GET['id']];
            $arr['SoLuong'] = $arr['SoLuong'] - 1;
           
        
            $arr['ThanhTien'] = $arr['SoLuong'] * $arr["DonGia"];
            $_SESSION['sanpham'][$_GET['id']] = $arr;
       
        }

        header('Location: ?act=cart');
    }
    function deleteall_cart()
    {
        unset($_SESSION['sanpham'][$_GET['id']]);
        if (empty($_SESSION['sanpham'])) {
        unset($_SESSION['sanpham']);
    }
        header('Location: ?act=cart');
    }
}
