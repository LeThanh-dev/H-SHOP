<div class="sidebar left-sidebar">
    <div class="s-side-text">
        <div class="sidebar-title clearfix">
            <h4 class="floatleft">Danh mục</h4>
        </div>
        <div class="categories left-right-p">
            <ul id="accordion" class="panel-group clearfix">
                <?php $i = 1;
                foreach ($data_chitietDM as $row) { 
                    if(isset($_GET['sp']))
                    {
                        echo '<style> 
                        .sidebar  .categories [data-target="#collapse'.$_GET['sp'].'"]  .medium-a:after {
                            content:"-";
                            color:red;
                            
                        }
                        #collapse'.$_GET['sp'].' 
                        {
                            display:block;
                        }
                        .tieude'.$_GET['sp'].' .ten
                        {
                            color:red;
                        }
                        </style>';
                        if(isset($_GET['loai']))
                        {
                            echo '<style>
                            #loai'.preg_replace('/[^0-9]/', '', base64_encode($_GET['loai'])).'{
                                color:red;
                            }
                            
                            
                            
                            </style>';

                        }

                    }
                    
                    ?>
                    <li class="panel">
                        <div data-toggle="collapse" data-parent="#accordion" class="tieude<?= $i ?>" data-target="#collapse<?= $i ?>">
                            <div class="medium-a">
                            <a  href="?act=shop&sp=<?= $i?>&ten=<?=$data_danhmuc[$i-1]['TenDM']?>">  <b class="ten" ><?= $data_danhmuc[$i - 1]['TenDM'] ?></b></a>
                            </div>
                        </div>
                        <div class="paypal-dsc panel-collapse collapse"  id="collapse<?= $i ?>">
                            <div class="normal-a">
                                <?php foreach ($row as $value) { ?>
                                    <a id="loai<?=preg_replace('/[^0-9]/', '', base64_encode($value['TenLSP']))?>" href="?act=shop&sp=<?= $value['MaDM'] ?>&loai=<?= $value['TenLSP'] ?>"><?= $value['TenLSP'] ?></a>
                                <?php } ?>
                            </div>
                        </div>
                    </li>
                <?php $i++;
                } ?>
            </ul>
        </div>
    </div>
    <div class="s-side-text">
        <form action="" method="GET" style = "padding:12px" >
        <input type="hidden" name="act" value="shop" />
            <div class="form-group">
                <label class="text-center" for="price">Tìm sản phẩm theo giá:</label>
                <select id="price" name="tk" class="form-control">
                    <option value="all">Tất cả</option>
                    <option value="0-1">0 triệu đến 1 triệu </option>
                    <option value="1-3">1 triệu đến 3 triệu</option>
                    <option value="3-5">3 triệu đến 5 triệu</option>
                    <option value="5-10">5 triệu đến 10 triệu</option>
                    <option value="10-<?php

$max_don_gia = $max[0]['max(DonGia)'];

// Cắt 6 ký tự từ bên phải của giá trị 'max(DonGia)'
$max_don_gia_cut = substr($max_don_gia, 0, -6);

// In ra giá trị sau khi cắt
echo $max_don_gia_cut;
?>">>10 triệu</option>
                </select>
            </div>
            
            <div class="text-center">
      <button type="submit" class="btn btn-primary">Tìm kiếm</button>
    </div>
        </form>
    </div>



</div>