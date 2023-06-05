<?php
    $mod = isset($_GET['mod']) ? $_GET['mod'] : "login";
?>
<!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
<img style = "    width: 90%; "src="public/img/logo-icon.png" alt = "logo TP Shop" />

</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Chức năng
</div>

<!-- Nav Item - Pages Collapse Menu -->

<li class="nav-item">
  <a class="nav-link <?php echo $mod == 'login' ? 'sidebar-admin-active' : ''?>" href="index.php">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Trang chủ</span></a>
</li>

<!-- Nav Item - Charts -->
<?php if (isset($_SESSION['isLogin_AdminTong']) && $_SESSION['isLogin_AdminTong'] == true) { ?>
<li class="nav-item">
  <a class="nav-link <?php echo $mod == 'nguoidung' ? 'sidebar-admin-active' : ''?> " href="?mod=nguoidung">
    <i class="fas fa-fw fa-table"></i>
    <span>Quản lý tài khoản</span></a>
</li>
<?php } ?>
<!-- Nav Item - Tables -->
<li class="nav-item">
  <a class="nav-link <?php echo $mod == 'sanpham' ? 'sidebar-admin-active' : ''?>" href="?mod=sanpham">
    <i class="fas fa-fw fa-table"></i>
    <span>Quản lý sản phẩm</span></a>
</li>
<li class="nav-item">
  <a class="nav-link <?php echo $mod == 'thumua' ? 'sidebar-admin-active' : ''?>" href="?mod=thumua">
    <i class="fas fa-fw fa-table"></i>
    <span>Quản lý thu mua</span></a>
</li>

<li class="nav-item">
  <a class="nav-link <?php echo $mod == 'loaisanpham' ? 'sidebar-admin-active' : ''?>" href="?mod=loaisanpham">
    <i class="fas fa-fw fa-table"></i>
    <span>Quản lý loại sản phẩm</span></a>
</li>

<li class="nav-item">
  <a class="nav-link <?php echo $mod == 'hoadon' ? 'sidebar-admin-active' : ''?>" href="?mod=hoadon">
    <i class="fas fa-fw fa-table"></i>
    <span>Xét duyệt hóa đơn</span></a>
</li>

<li class="nav-item">
  <a class="nav-link <?php echo $mod == 'danhmuc' ? 'sidebar-admin-active' : ''?>" href="?mod=danhmuc">
    <i class="fas fa-fw fa-table"></i>
    <span>Quản lý danh mục sản phẩm</span></a>
</li>
<?php if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true ||isset($_SESSION['isLogin_AdminTong']) && $_SESSION['isLogin_AdminTong'] == true) { ?>
<li class="nav-item">
  <a class="nav-link <?php echo $mod == 'banner' ? 'sidebar-admin-active' : ''?>" href="?mod=banner">
    <i class="fas fa-fw fa-table"></i>
    <span>Quản lý banner</span></a>
</li>
<?php }?>



<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->