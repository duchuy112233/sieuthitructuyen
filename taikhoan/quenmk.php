<?php



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Siêu thị trực tuyến</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="assets/css/admin.css" />
  <style>
    .tb {
      color: red;
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- header -->
    <div class="row mt-4">
      <div class="col-md-4 offset-md-4">
        <h5 class="text-center">QUÊN MẬT KHẨU</h5>
        <form action="index.php?act=quenmk" method="post">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="email" />
          </div>
          <div class="mb-3">
            <span>Đã có tài khoản? </span>
            <a href="index.php">Đăng nhập!</a>
          </div>
          <input type="submit" name="guiemail" class="btn btn-primary" value="Gửi"></input>
        </form>
        <br>
        <div class="tb">
          <?php
          if (isset($thongbao) && ($thongbao != "")) {
            echo $thongbao;
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</body>
</html>