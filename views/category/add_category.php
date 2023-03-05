<?php
    require "configs/DBConnection.php";

    if(isset($_POST["add"])){
        $tl_id = $_POST["txtArID"];
        $tl_ten = $_POST["txtArName"];
        
        if($tl_id == ""){echo "Vui lòng nhập mã thể loại <br/>";}
        if($tl_ten == ""){echo "Vui lòng nhập tên thể loại ";}

        if($tl_id !="" && $tl_ten!=""){
            $sql = "INSERT INTO theloai(ma_tloai,ten_thloai) VALUES ('$tl_id','$tl_ten')";
            $qr = mysqli_query($conn,$sql);
            header("location: category.php");
        }
    }
    $sql = "SELECT * FROM tacgia";
    $result = mysqli_query($conn,$sql);
    $sql1 = "SELECT * FROM theloai";
    $result1 = mysqli_query($conn,$sql1);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music for Life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style_login.css">
</head>
<body>
<?php require 'layout/admin_header.php';
    
    ?>
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Thêm mới</h3>
                <form action="" method="post">
                <div class="row">
            <div class="col-sm">
                <form method="post" action="" >
                <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblArId">Mã thể loại</span>
                        <input type="text" class="form-control" name="txtArID" value="">
                    </div>

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblArName">Tên thể loại</span>
                        <input type="text" class="form-control" name="txtArName" value = "">
                    </div>

                    <div class="form-group  float-end ">
                        <input type="submit" value="Lưu lại" class="btn btn-success" name = "add">
                        <a href="article.php" class="btn btn-warning ">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>
                </form>
            </div>
        </div>
    </main>
    <?php require 'layout/admin_footer.php';
    
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>