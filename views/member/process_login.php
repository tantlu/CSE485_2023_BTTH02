
<?php
    session_start();
    // Kiem tra Du lieu voi Database
    // admin = dungkt/password = abc
    include 'configs/DBConnection.php';
    $dbConn = new DBConnection();
    $conn = $dbConn;
    

    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if(isset($_POST['btnLogin'])){
        // Lay tu FORM
        $user = $_POST['txtUser'];
        $pass = $_POST['txtPass'];

        // So khop voi CSDL
        if($user ==  $row['username'] && $pass ==  $row['passwork']){
            header("Location:views/admin/index.php");
        }else{
            header("Location:login.php?error='Invalid user or pass'");
        }
    }
?>
