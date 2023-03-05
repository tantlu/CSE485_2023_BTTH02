<?php
include("configs/DBConnection.php");
include("models/Category.php");
class CategoryService{
    public function getAllCategory(){
        // 4 bước thực hiện
       $dbConn = new DBConnection();
       $conn = $dbConn->getConnection();

        // B2. Truy vấn
        $sql = "SELECT * FROM theloai";
        $stmt = $conn->query($sql);

        // B3. Xử lý kết quả
        $category = [];
        while($row = $stmt->fetch()){
            $article = new Category($row['ma_tloai'], $row['ten_tloai']);
            array_push($category,$category);
        }
        // Mảng (danh sách) các đối tượng Article Model

        return $category;
    }
}