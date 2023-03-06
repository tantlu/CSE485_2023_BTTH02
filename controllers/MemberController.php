<?php
include("services/MemberService.php");
class MemberController {
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['txtUser'];
            $password = $_POST['txtPass'];

            $user = Process_login($username, $password);

            if ($user) {
                include 'views/admin/index.php';
                exit;
            } else {
                $message = 'Tên đăng nhập hoặc mật khẩu không đúng';
            }
        }

        include("views/member/login.php");
    }

}