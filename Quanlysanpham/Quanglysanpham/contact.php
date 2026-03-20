<?php
// Xử lý gửi form (demo – chưa lưu DB)
$success = false;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name    = trim($_POST["name"] ?? "");
    $email   = trim($_POST["email"] ?? "");
    $subject = trim($_POST["subject"] ?? "");
    $message = trim($_POST["message"] ?? "");

    if ($name && $email && $subject && $message) {
        // Ở đây bạn có thể:
        // - gửi mail
        // - lưu database
        // - hoặc xử lý khác
        $success = true;
    }
    
}
?>
<?php
$back = $_SERVER['HTTP_REFERER'] ?? 'index.php';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Liên Hệ</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            margin: 0;
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

        header .logo {
            font-weight: bold;
            font-size: 20px;
        }

        header nav a {
            margin-left: 20px;
            text-decoration: none;
            color: #333;
            font-size: 15px;
        }

        /* ===== MAIN ===== */
        .container {
            min-height: calc(100vh - 80px);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .contact-box {
            background: #fff;
            width: 420px;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.12);
        }

        .contact-box h2 {
            text-align: center;
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 6px;
            font-size: 14px;
            color: #444;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ddd;
            font-size: 14px;
            background: #f7f7f7;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 100px;
        }

        .btn-submit {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 10px;
            background: #4f46e5;
            color: #fff;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-submit:hover {
            background: #4338ca;
        }

        .success {
            background: #e6fffa;
            color: #047857;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 15px;
            text-align: center;
            font-size: 14px;
        }
    </style>
</head>
<body>

<header>
    <div class="logo">Logo (thay logo của bạn)</div>
    <nav>
       <a href="<?= $back ?>">Trang Chủ</a>
        <a href="products/index.php">Sản phẩm</a>
        <a href="contact.php">Liên Hệ</a>
    </nav>
</header>

<div class="container">
    <div class="contact-box">
        <h2>Liên Hệ Với Chúng Tôi</h2>

        <?php if ($success): ?>
            <div class="success">Gửi tin nhắn thành công!</div>
        <?php endif; ?>

        <form method="post">
            <div class="form-group">
                <label>Họ và Tên</label>
                <input type="text" name="name" placeholder="Nhập họ tên" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="Nhập email" required>
            </div>

            <div class="form-group">
                <label>Chủ đề</label>
                <input type="text" name="subject" placeholder="Nhập chủ đề" required>
            </div>

            <div class="form-group">
                <label>Nội dung</label>
                <textarea name="message" placeholder="Nhập nội dung tin nhắn" required></textarea>
            </div>

            <button type="submit" class="btn-submit">Gửi Tin Nhắn</button>
        </form>
    </div>
</div>

</body>
</html>