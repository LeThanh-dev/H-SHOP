<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-warning">
      <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
  <?php } ?>
  <form  onsubmit="return validateForm()"  action="?mod=sanpham&act=store" method="POST" role="form" enctype="multipart/form-data">
    <div class="form-group">
      <label for="cars">Danh mục: </label>
      <select id="" name="MaDM" class="form-control">
        <?php foreach ($data_dm as $row) { ?>
          <option value="<?= $row['MaDM'] ?>"><?= $row['TenDM'] ?></option>
        <?php } ?>
      </select>
    </div>
    <div class="form-group">
      <label for="cars">Loại sản phẩm: </label>
      <select id="" name="MaLSP" class="form-control">
        <?php foreach ($data_lsp as $row) { ?>
          <option value="<?= $row['MaLSP'] ?>"><?= $row['TenLSP'] ?></option>
        <?php } ?>
      </select>
    </div>
    <div class="form-group">
      <label for="">Tên sản phẩm <span style="color:red">(*)</span></label>
      <input type="text" required class="form-control" id="" placeholder="" name="TenSP">
    </div>
    <div class="form-group">
      <label for="">Đơn giá <span style="color:red">(*)</label>
      <input type="number" required class="form-control" id="" placeholder="" name="DonGia">
    </div>
    <div class="form-group">
      <label for="">Số lượng <span style="color:red">(*)</label>
      <input type="number" required class="form-control" id="" placeholder="" name="SoLuong">
    </div>
    <div class="form-group">
      <label for="">Hình ảnh 1 <span style="color:red">(*)</label>
      <input type="file" onchange="previewImage(event)" class="form-control" required id="" placeholder="" name="HinhAnh1" accept="image/*">
       <img id="preview" style="max-width: 100%; height: auto; margin-top: 10px;">
    </div>
    <div class="form-group">
      <label for="">Hình ảnh 2<span style="color:red">(*)</label>
      <input type="file"accept="image/*" class="form-control" onchange="previewImage1(event)" required id="" placeholder="" name="HinhAnh2">
      <img id="preview1" style="max-width: 100%; height: auto; margin-top: 10px;">
    </div>
    <div class="form-group">
      <label for="">Hình ảnh 3<span style="color:red">(*)</label>
      <input type="file" accept="image/*" class="form-control" required id="" onchange="previewImage2(event)" placeholder="" name="HinhAnh3">
       <img id="preview2" style="max-width: 100%; height: auto; margin-top: 10px;">
    </div>
    <div class="form-group">
      <label for="cars">Mã khuyến mãi </label>
      <select id="" name="MaKM" class="form-control">
        <?php foreach ($data_km as $row) { ?>
          <option value="<?= $row['MaKM'] ?>"><?= $row['TenKM'] ?></option>
        <?php } ?>
      </select>
    </div>
     <div class="form-group">
      <label for="">Hãng sản phẩm<span style="color:red">(*)</label>
      <input type="text" class="form-control" required id="" placeholder="" name="Hang">
    </div>
    <div class="form-group">
      <label for="">Kích thước<span style="color:red">(*)</label>
      <input type="text" class="form-control" required id="" placeholder="" name="KichThuoc">
    </div>
    <div class="form-group">
      <label for="">Trọng lượng<span style="color:red">(*)</label>
      <input type="text" class="form-control" id="" placeholder="" name="TrongLuong">
    </div>
    <div class="form-group">
      <label for="">Chất liệu<span style="color:red">(*)</label>
      <input type="text" class="form-control" required id="" placeholder="" name="ChatLieu">
    </div>
    
   
    
    <label for="">Mô tả<span style="color:red">(*)</label>
    <div class="form-group">
      <textarea class="form-control" id="summernote"  placeholder="" name="MoTa"></textarea>
      <div id="mota-error"class="invalid-feedback">Vui lòng nhập mô tả.</div>
    </div>
    <div class="form-group">
      <label for="">Trạng thái</label>
      <input type="checkbox" id="" placeholder="" value="1" name="TrangThai"><em>(Check cho phép hiện thị sản phẩm)</em>
    </div>
    <button type="submit"  class="btn btn-primary">Create</button>
  </form>

  <script>
    $(document).ready(function() {
      $('#summernote').summernote();
    });
  </script>
  <script>

function validateForm() {
  var mota = document.getElementById("summernote").value;
  var motaError = document.getElementById("mota-error");
  if (mota.trim() == "") {
    motaError.style.display = "block";
    return false;
  } else {
    motaError.style.display = "none";
    return true;
  }
}

  function previewImage(event) {
    var reader = new FileReader();
   
    reader.onload = function() {
      var output = document.getElementById('preview');
      
      output.src = reader.result;
      
    };
    reader.readAsDataURL(event.target.files[0]);

    
  }
  function previewImage1(event) {
    var reader = new FileReader();
   
    reader.onload = function() {
      var output = document.getElementById('preview1');
      
      output.src = reader.result;
      
    };
    reader.readAsDataURL(event.target.files[0]);

    
  }
  function previewImage2(event) {
    var reader = new FileReader();
   
    reader.onload = function() {
      var output = document.getElementById('preview2');
      
      output.src = reader.result;
      
    };
    reader.readAsDataURL(event.target.files[0]);

    
  }
</script>
</table>