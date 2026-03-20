<?php
session_start();

if (!isset($_GET['id']) || !isset($_SESSION['products'][$_GET['id']])) {
    header("Location: index1.php");
    exit();
}

$id = $_GET['id'];
$product = $_SESSION['products'][$id]; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"] ?? '';
    $price = $_POST["price"] ?? '';
   
    $description = $_POST["description"] ?? ''; 

    $_SESSION["products"][$id] = [
        "name" => $name,
        "price" => $price,
        "description" => $description
    ];

    header("Location: index1.php"); 
    exit();
}

?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Cập Nhật Sản Phẩm - ShopMANGA2X</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>

    <div class="navbar">
       <div class="logo-container">
            <img src="../img/images.jpg" alt="Logo">
       </div>
        <div class="nav-links">
            <a href="../dashboard.php">Dashboard</a>
            <a href="index1.php">Sản phẩm</a>
            <a href="../index.php">Đăng Xuất</a>
        </div>
    </div>

    <div class="main-content">
        <div class="form-card">
            <h2>Cập Nhật Sản Phẩm</h2>
            
            <form method="POST">
                <div class="form-group">
                    <label>Tên Sản Phẩm</label>
                    <input type="text" name="name" value="<?php echo htmlspecialchars($product['name']); ?>" required>
                </div>

                <div class="form-group">
                    <label>Giá (VNĐ)</label>
                    
                </div>

                <div class="form-group">
                    <label>Mô Tả</label>
                    <textarea name="description"><?php echo htmlspecialchars($product['description'] ?? ''); ?></textarea>
                </div>

                <button type="submit" class="btn-submit">Lưu Thay Đổi</button>
            </form>

            <a href="index1.php" class="back-link">Quay lại danh sách sản phẩm</a>
        </div>
    </div>

</body>
</html>
