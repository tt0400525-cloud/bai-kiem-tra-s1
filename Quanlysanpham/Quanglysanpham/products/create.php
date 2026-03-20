<?php
// Xử lý submit (demo – chưa lưu DB)
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name  = trim($_POST['name'] ?? '');
    $price = trim($_POST['price'] ?? '');
    $desc  = trim($_POST['description'] ?? '');

    if ($name && $price && $desc) {
        // Sau này:
        // - INSERT vào database
        // - hoặc xử lý khác
        $success = true;
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm Sản Phẩm</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        html, body {
            height: 100%;
            margin: 0;
        }

        body {
            display: flex;
            flex-direction: column;
            background: linear-gradient(180deg, #f4fbfb, #eef7f7);
        }

        /* ===== HEADER ===== */
        header {
            background: #fff;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .logo {
            font-size: 22px;
            font-weight: bold;
        }

        nav a {
            margin-left: 22px;
            text-decoration: none;
            color: #374151;
            font-size: 15px;
        }

        /* ===== MAIN ===== */
        .container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        .card {
            width: 420px;
            background: #fff;
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 20px 35px rgba(0,0,0,0.15);
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
            color: #111827;
        }

        .success {
            background: #ecfeff;
            color: #0369a1;
            padding: 10px;
            border-radius: 8px;
            text-align: center;
            margin-bottom: 15px;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            margin-bottom: 6px;
            font-size: 14px;
            color: #374151;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #d1d5db;
            background: #f9fafb;
            font-size: 14px;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        .btn-submit {
            width: 100%;
            margin-top: 10px;
            padding: 14px;
            background: #4f46e5;
            color: #fff;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-submit:hover {
            background: #4338ca;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 18px;
            color: #4f46e5;
            text-decoration: none;
            font-size: 14px;
        }

        .back-link:hover {
            text-decoration: underline;
        }

        /* ===== FOOTER ===== */
        footer {
            background: #fff;
            border-top: 1px solid #e5e7eb;
            text-align: center;
            padding: 18px 0;
            color: #4b5563;
            font-size: 15px;
        }
    </style>
</head>
<body>

<header>
    <div class="logo">Logo (thay logo của bạn)</div>
    <nav>
        <a href="../dashboard.php">Dashboard</a>
        <a href="index1.php">Sản Phẩm</a>
        <a href="../index.php">Đăng Xuất</a>
    </nav>
</header>

<div class="container">
    <div class="card">
        <h1>Thêm Sản Phẩm Mới</h1>

        <?php if ($success): ?>
            <div class="success">Thêm sản phẩm thành công!</div>
        <?php endif; ?>

        <form method="post">
            <div class="form-group">
                <label>Tên Sản Phẩm</label>
                <input type="text" name="name" placeholder="Nhập tên sản phẩm" required>
            </div>

            <div class="form-group">
                <label>Giá (VNĐ)</label>
                <input type="number" name="price" placeholder="Nhập giá sản phẩm" required>
            </div>

            <div class="form-group">
                <label>Mô Tả</label>
                <textarea name="description" placeholder="Nhập mô tả sản phẩm" required></textarea>
            </div>

            <button type="submit" class="btn-submit">Thêm Sản Phẩm</button>
        </form>

        <a href="products/index1.php" class="back-link">Quay lại danh sách sản phẩm</a>
    </div>
</div>

<footer>
    © 2025 – Bản quyền thuộc về (tên của bạn)
</footer>

</body>
</html>