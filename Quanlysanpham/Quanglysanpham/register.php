<?php

$errors = [];
$fullname = "";
$email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = htmlspecialchars(trim($_POST["fullname"] ?? ""));
    $email = htmlspecialchars(trim($_POST["email"] ?? ""));
    $password = $_POST["password"] ?? "";
    $confirm_password = $_POST["confirm_password"] ?? "";

    // kiểm tra họ tên
    if ($fullname == "") {
        $errors["fullname"] = "Vui lòng nhập họ tên";
    }

    // kiểm tra email
    if ($email == "") {
        $errors["email"] = "Vui lòng nhập email";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Email không đúng định dạng";
    }

    // kiểm tra mật khẩu
    if ($password == "") {
        $errors["password"] = "Vui lòng nhập mật khẩu";
    } elseif (strlen($password) < 6) {
        $errors["password"] = "Mật khẩu phải ít nhất 6 ký tự";
    }

    // xác nhận mật khẩu
    if ($confirm_password == "") {
        $errors["confirm_password"] = "Vui lòng xác nhận mật khẩu";
    } elseif ($confirm_password != $password) {
        $errors["confirm_password"] = "Mật khẩu xác nhận không khớp";
    }

    // nếu không có lỗi
    if (empty($errors)) {

        setcookie("username", $fullname, time() + 86400, "/");
        setcookie("email", $email, time() + 86400, "/");
        setcookie("password", $password, time() + 86400, "/");

        header("Location: login.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Đăng Ký</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to bottom, #f0fcf9, #e6f0ff);
        }

        .container {
            background: white;
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
            margin-top: 18px;
            margin-bottom: 8px;
            font-weight: 600;
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

        .error {
            color: red;
            font-size: 14px;
            margin-top: 5px;
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
        }

        .links a {
            color: #4f46e5;
            text-decoration: none;
            font-weight: 600;
        }
    </style>
</head>

<body>

    <div class="container">

        <h2>Đăng Ký</h2>

        <form method="POST">

            <label>Họ và Tên</label>
            <input type="text" name="fullname" placeholder="Nhập họ tên" value="<?= $fullname ?>">
            <?php if (isset($errors["fullname"]))
                echo "<p class='error'>{$errors["fullname"]}</p>"; ?>

            <label>Email</label>
            <input type="text" name="email" placeholder="Nhập email" value="<?= $email ?>">
            <?php if (isset($errors["email"]))
                echo "<p class='error'>{$errors["email"]}</p>"; ?>

            <label>Mật khẩu</label>
            <input type="password" name="password" placeholder="Nhập mật khẩu">
            <?php if (isset($errors["password"]))
                echo "<p class='error'>{$errors["password"]}</p>"; ?>

            <label>Xác nhận mật khẩu</label>
            <input type="password" name="confirm_password" placeholder="Xác nhận mật khẩu">
            <?php if (isset($errors["confirm_password"]))
                echo "<p class='error'>{$errors["confirm_password"]}</p>"; ?>

            <button type="submit" class="btn">Đăng Ký</button>

        </form>

        <div class="links">
            Đã có tài khoản? <a href="login.php">Đăng Nhập</a><br>
            <a href="#">Quên mật khẩu?</a>
        </div>

    </div>

</body>

</html>