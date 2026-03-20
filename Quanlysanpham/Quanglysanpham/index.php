<?php session_start(); ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang Chủ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: #f5f7fa;
        }

        /* HEADER */
        header {
            background: #ffffff;
            padding: 20px 80px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        nav a {
            margin-left: 30px;
            text-decoration: none;
            color: #333;
            font-weight: 500;
        }

        nav a:hover {
            color: #4f46e5;
        }

        /* HERO */
        .hero {
            height: 80vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            background: linear-gradient(to bottom,#f0fcf9, #e6f0ff);
            padding: 20px;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 18px;
            color: #555;
            margin-bottom: 30px;
        }

        .btn {
            padding: 16px 28px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            margin: 0 10px;
            display: inline-block;
        }

        .btn-primary {
            background: #4f46e5;
            color: white;
        }

        .btn-primary:hover {
            background: #4338ca;
        }

        .btn-secondary {
            background: #e5e7eb;
            color: #333;
        }

        .btn-secondary:hover {
            background: #d1d5db;
        }

        /* FOOTER */
        footer {
            background: #ffffff;
            text-align: center;
            padding: 20px;
            margin-top: 50px;
            box-shadow: 0 -2px 10px rgba(0,0,0,0.05);
        }

    </style>
</head>
<body>

<header>
    <div class="logo">Logo</div>
    <nav>
        <a href="index.php">Trang Chủ</a>
        <a href="">Sản phẩm</a>
        <a href="contact.php">Liên hệ</a>
    </nav>
</header>

<section class="hero">
    <div>
        <h1>Chào Mừng Đến Với (tên trang web của bạn)</h1>
        <p>
            Đây là nơi bạn có thể khám phá các dịch vụ tuyệt vời của chúng tôi.
            Hãy đăng ký hoặc đăng <br>nhập để trải nghiệm ngay hôm nay!
        </p>

        <a href="register.php" class="btn btn-primary">Đăng Ký</a>
        <a href="login.php" class="btn btn-secondary">Đăng Nhập</a>
    </div>
</section>

<footer>
    © <?php echo date("Y"); ?> - Bản quyền thuộc về (tên của bạn)
</footer>

</body>
</html>