<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .imagee {
      width: 290px;
    }
    .ct{
      margin-left: 20px;
    }
  </style>
</head>
<body>
  <div class="row mt-4">
    <h3 class = "ct"><a href="index.php"><i class="fa-solid fa-arrow-left"></i></a></h3>
    <div class="col-md-3">
      <?php include "_sanphamlienquan.php"; ?>
    </div>
    <div class="col-md-8 offset-md-1">
      <div class="container-fuild">
        <div class="row mt-4">
          <?php
          extract($onesp);
          ?>
         
          <?php
          $imge = $img_path  . $img;
          echo '<img class="imagee" src="' . $imge . '" >';
          ?>
          <div style="font-weight: 500;" class="col-md-8">
            <ul>
              <h2><?= $name ?></h2>
              <li>
                Đơn giá:
                <?php
                $tt = $price  - (($price * $giamgia) / 100);
                echo number_format($tt);
                ?> VNĐ
                <del class="badge bg-danger"><?= $price ?> VNĐ</del>
              </li>
              <li>Nhà cung cấp: <?= $tendm ?></li>
              <li>Hàng mới</li>
              <li>
                Số lượng còn:
                <span class="badge bg-warning"><?= $soluongsp ?></span> chiếc
              </li>
              <li>
                Giảm giá:
                <span class="badge bg-danger"><?= $giamgia ?> % </span>
              </li>
              <li>
                Lượt xem:
                <span><?= $luotxem ?></span>
              </li>
            </ul>
           
            <?php
            echo '
            <form style="margin-top: 20px;" action="index.php?act=addtocart" method="post">
                <input type="hidden" name="id" value="' . $id . '">
                <input type="hidden" name="name" value="' . $name . '">
                <input type="hidden" name="img" value="' . $img . '">
                <input type="hidden" name="price" value="' .  $tt = $price  - (($price * $giamgia) / 100)  . '">          
                <input style="background-color: green;" type="submit" name="addtocart" value="Mua hàng" class="btn btn-success">                   
            </form>';
            ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h4 class="mt-5">MÔ TẢ SẢN PHẨM</h4>
            <hr />
            <span>
              <?php
              echo $mota;
              ?>
            </span>
          </div>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
          
          <script>
            $(document).ready(function() {
              $("#binhluan").load("binhluan/binhluan.php", {
                idpro: <?= $id ?>
              });
            });
          </script> 
          <div class="col-md-12" id="binhluan">

          </div>
          
        </div>
      </div>
    </div>
  </div>
</body>
</html>