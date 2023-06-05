<a href="?mod=hoadon&id=0" type="button" class="btn btn-success">Chưa duyệt</a>
<a href="?mod=hoadon&id=1" type="button" class="btn btn-warning">Đã duyệt</a>
<a href="?mod=hoadon&id=2" type="button" class="btn btn-primary">Đã giao</a>
<a href="?mod=hoadon&id=3" type="button" class="btn btn-danger">Giao thất bại</a>
<a href="?mod=hoadon&xuat" type="button" class="btn btn-secondary">Xuất hóa đơn</a>
<?php if (isset($_COOKIE['msg'])) { ?>
  <div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
  </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col">Mã hoá đơn</th>
      <th scope="col">Ngày đặt hàng</th>
      <th scope="col">Người nhận</th>
      <th scope="col">SĐT</th>
      <th scope="col">Địa chỉ</th>
      <th scope="col">Tổng tiền (VNĐ)</th>
      <th scope="col">Trạng thái</th>
      <th scope="col">Thanh toán</th>
      <th scope="col">Ngày giao hàng</th>
      <th>Hành động</th>
    </tr>
  </thead>
  <tbody>

    <?php if (isset($_GET['xuat'])) {
      foreach ($data as $row) { ?>
        <tr>
         <td><?= $row['MaHD'] ?></td>
          <td><?= $row['NgayLap'] ?></td>
          <td><?= $row['NguoiNhan'] ?></td>
          <td><?= $row['SDT'] ?></td>
          <td><?= $row['DiaChi'] ?></td>
          <td><?= number_format($row['TongTien']) ?></td>
          <td><?php if ($row['TrangThai'] == 0) {
                echo 'Chưa xét duyệt';
              } else if ($row['TrangThai'] == 2) {
                echo 'Đã giao';
              }
              else if ($row['TrangThai'] == 3) {
                echo 'Giao hàng thất bại';
              }  else {
                echo 'Đang giao';
              }
              ?></td>
              <td><?php if ($row['PhuongThucTT'] == 'Chuyển khoản MoMo') {
                echo 'Đã thanh toán MoMo';
              } else if ($row['TrangThai'] == 2 and $row['PhuongThucTT']!='Chuyển khoản MoMo' ) {
                echo 'Đã thanh toán tiền mặt';
              }
              else {
                echo 'Chưa thanh toán';
              }
              ?></td>

              <td><?php if ($row['TrangThai'] == 0) {
                echo 'Chưa xét duyệt';
              } else if ($row['TrangThai'] == 1) {
                echo 'Đang giao';
              }
              else {
                echo $row['NgayGiao'];
              }
              ?></td>
          <td style="white-space:nowrap">
            <?php if ($row['TrangThai'] == 0) { ?>

              <a href="?mod=hoadon&act=chitiet&id=<?= $row['MaHD'] ?>" class="btn btn-success">Xét duyệt</a>
            <?php } else {


            ?>
              <a target="_blank" href="?mod=hoadon&act=xuat&id=<?= $row['MaHD'] ?>" class="btn btn-secondary">Xuất hóa đơn</a>

            <?php } ?>

          </td>
        </tr>
      <?php }
    } else {



      foreach ($data as $row) { ?>
        <tr>
          <td><?= $row['MaHD'] ?></td>
          <td><?= $row['NgayLap'] ?></td>
          <td><?= $row['NguoiNhan'] ?></td>
          <td><?= $row['SDT'] ?></td>
          <td><?= $row['DiaChi'] ?></td>
          <td><?= number_format($row['TongTien']) ?></td>
          <td><?php if ($row['TrangThai'] == 0) {
                echo 'Chưa xét duyệt';
              } else if ($row['TrangThai'] == 2) {
                echo 'Đã giao';
              }
              else if ($row['TrangThai'] == 3) {
                echo 'Giao hàng thất bại';
              }  else {
                echo 'Đang giao';
              }
              ?></td>
              <td><?php if ($row['PhuongThucTT'] == 'Chuyển khoản MoMo') {
                echo 'Đã thanh toán MoMo';
              } else if ($row['TrangThai'] == 2 and $row['PhuongThucTT']!='Chuyển khoản MoMo' ) {
                echo 'Đã thanh toán tiền mặt';
              }
              else {
                echo 'Chưa thanh toán';
              }
              ?></td>

          <td><?php if ($row['TrangThai'] == 0) {
                echo 'Chưa xét duyệt';
              } else if ($row['TrangThai'] == 1) {
                echo 'Đang giao';
              }
              else {
                echo $row['NgayGiao'];
              }
              ?></td>
            
            


          <td style="white-space:nowrap">
            <?php if ($row['TrangThai'] == 0) { ?>

              <a href="?mod=hoadon&act=chitiet&id=<?= $row['MaHD'] ?>" class="btn btn-success">Xét duyệt</a>
            <?php } else if ($row['TrangThai'] == 1) {


            ?>
              <a href="?mod=hoadon&act=chitietcapnhat&id=<?= $row['MaHD'] ?>" class="btn btn-warning">Cập nhật</a>
             

            <?php } ?>
            <a href="?mod=hoadon&act=delete&id=<?= $row['MaHD'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
          </td>
        </tr>
    <?php }
    } ?>
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