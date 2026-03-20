<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];

    if (
        isset($_COOKIE["email"]) &&
        isset($_COOKIE["password"]) &&
        $email == $_COOKIE["email"] &&
        $password == $_COOKIE["password"]
    ) {

        $_SESSION["user"] = $email;
        header("Location: dashboard.php");
        exit();

    } else {

        $error = "Sai tài khoản hoặc mật khẩu!";

    }
}
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Đăng Nhập</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to bottom, #f0fcf9, #e6f0ff);
        }

        .container {
            background: #fff;
            width: 550px;
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
        }

        h2 {
            text-align: center;
            margin-bottom: 35px;
            font-size: 32px;
        }

        label {
            display: block;
            margin-top: 20px;
            margin-bottom: 8px;
            font-weight: 600;
            font-size: 16px;
        }

        input {
            width: 100%;
            padding: 16px;
            border-radius: 12px;
            border: 1px solid #ddd;
            font-size: 16px;
            background: #f3f4f6;
        }

        input:focus {
            outline: none;
            border-color: #4f46e5;
        }

        .btn {
            width: 100%;
            margin-top: 30px;
            padding: 18px;
            border: none;
            border-radius: 14px;
            background: #4f46e5;
            color: white;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
        }

        .btn:hover {
            background: #4338ca;
        }

        .links {
            text-align: center;
            margin-top: 25px;
            font-size: 16px;
        }

        .links a {
            color: #4f46e5;
            text-decoration: none;
            font-weight: 600;
        }

        .links a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Đăng Nhập</h2>
        <?php
        if (isset($error)) {
            echo "<p style='color:red;text-align:center;margin-bottom:15px;'>$error</p>";
        }
        ?>
        <form method="POST">
            <label>Email</label>
            <input 
            type="email" 
            name="email" 
            placeholder="Nhập email" 
            value="<?php echo $_COOKIE['email'] ?? ''; ?>"
            required>

            <label>Mật khẩu</label>
            <input 
            type="password" 
            name="password" 
            placeholder="Nhập mật khẩu" 
            required>

            <button type="submit" class="btn">Đăng Nhập</button>
        </form>

        <div class="links">
            Chưa có tài khoản? <a href="register.php">Đăng Ký</a><br>
            <a href="reset-password.php">Quên mật khẩu?</a>
        </div>
    </div>

</body>

</html>