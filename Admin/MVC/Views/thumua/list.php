<?php if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true ||isset($_SESSION['isLogin_AdminTong']) && $_SESSION['isLogin_AdminTong'] == true) { ?>
  <a href="?mod=thumua&id=1" type="button" class="btn btn-primary">Đã duyệt</a>
  <a href="?mod=thumua&id=0" type="button" class="btn btn-primary">Chưa duyệt</a>
  <a href="?mod=thumua&id=2" type="button" class="btn btn-primary">Đã mua</a>
<?php } ?>
<?php 
if (isset($_COOKIE['msg'])) {
  
  echo'<script type="text/javascript"> alert("Thêm thành công")</script>';

  
  
} ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Tên sản phẩm</th> 
      <th scope="col">Hình ảnh</th> 
      <th scope="col">Giá thành (VNĐ)</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Trạng thái</th>
      <th scope="col">Duyệt</th>
      
    </tr>
  </thead>
  <tbody>
    <?php 
    $i=0;
    foreach ($data as $row) { $i++;?>
      <tr>
        <th scope="row"><?= $i ?></th>
        <td><?= $row['TenSP'] ?></td>
        <td>
         <img width = "150px" src="../public/<?= $row['HinhAnh1'] ?>" alt="image product thumua"onerror="this.src='../public/img/collect/2.jpg'" />
        </td>
        <td><?= number_format($row['DonGia']) ?></td>
        <td><?= $row['SoLuong'] ?></td>
        <td><?php if($row['TrangThai']==0){
          echo 'Chưa xét duyệt';
        }else if($row['TrangThai']==1){
          echo 'Đã xét duyệt';
        } else{
          echo 'Đã mua';
        }
      ?></td>


      <form  onsubmit="return validateForm()"  action="?mod=thumua&act=xetduyet&id=<?= $row['MaThuMua'] ?>" method="POST" role="form" enctype="multipart/form-data">
        
        <input name="MaLSP" type="hidden" value="<?= $row['MaLSP'] ?>">
         <input name="TenSP" type="hidden" value="<?= $row['TenSP'] ?>">
          <input name="MaDM" type="hidden" value="<?= $row['MaDM'] ?>">
           <input  name="DonGia" type="hidden" value="<?= $row['DonGia'] ?>">
            <input name="SoLuong" type="hidden" value="<?= $row['SoLuong'] ?>">
             <input  name="HinhAnh1" type="hidden" value="<?= $row['HinhAnh1'] ?>">
              <input  name="HinhAnh2" type="hidden" value="<?= $row['HinhAnh2'] ?>">
               <input name="HinhAnh3" type="hidden" value="<?= $row['HinhAnh3'] ?>">
                <input name="Hang" type="hidden" value="<?= $row['Hang'] ?>">
                 <input name="KichThuoc" type="hidden" value="<?= $row['KichThuoc'] ?>">
                 <input name="TrongLuong" type="hidden" value="<?= $row['TrongLuong'] ?>">
                 <input name="ChatLieu" type="hidden" value="<?= $row['ChatLieu'] ?>">
                 
        
     
    
                          <input type="hidden" value="<?= $row['MoTa'] ?>" class="form-control"   placeholder=""  name="MoTa">

                       

                       


















                      


                      <td><?php if($row['TrangThai']==1){?>
                        <button type="submit" name="thumua"  class="btn btn-primary">Thêm vào cửa hàng</button>
                        
                        </form>
                      <?php } else if ($row['TrangThai']==0){

                      ?>
        
          <a class="btn btn-primary" href="?mod=thumua&act=duyetmua&id=<?= $row['MaThuMua'] ?>"> Duyệt mua </a>
       



                    <?php }
                    else {
                    
                    ?>
                     <a class="btn btn-primary" href="?mod=thumua&act=xuat&id=<?= $row['MaThuMua'] ?>"> Xuất hóa đơn </a>

                    <?php } ?>  
                    </td>
                    
                  </tr>
                  
                <?php } ?>
              </tbody>
            </table>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="//cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="//cdn.datatables.net/1.11.2/css/jquery.dataTables.min.css">

<script>
  $(document).ready(function() {
    // Thêm tiêu đề và placeholder cho ô tìm kiếm
    var searchLabel = '<label><span>Tìm kiếm thông tin:</span><input type="search" class="form-control form-control-sm" placeholder="Tìm kiếm..."></label>';
    $('#dataTable_filter').append(searchLabel);

    // Khởi tạo DataTable
    var dataTable = $('#dataTable').DataTable({
      "order": [[ 0, "asc" ]], // Sắp xếp theo cột đầu tiên (cột số 0) từ cao đến thấp
      "language": {
        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Vietnamese.json", // Đường dẫn đến file ngôn ngữ tiếng Việt
        "paginate": {
          "previous": "Trước", // Thay thế chữ "Previous" bằng "Trước"
          "next": "Tiếp" // Thay thế chữ "Next" bằng "Tiếp"
        },
        "search": "Tìm kiếm", // Thay thế chữ "Search" bằng "Tìm kiếm"
        "info": "Hiển thị _START_ đến _END_ của _TOTAL_ mục", // Thay thế chuỗi "Showing _START_ to _END_ of _TOTAL_ entries" bằng "Hiển thị _START_ đến _END_ của _TOTAL_ mục"
        "lengthMenu": "Hiển thị _MENU_ mục" // Thay thế chuỗi "Show _MENU_ entries" bằng "Hiển thị _MENU_ mục"
      }
    });
  });
</script>