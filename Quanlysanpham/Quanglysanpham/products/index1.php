<?php
// Dữ liệu demo (sau này thay bằng database)
$products = [
    ['id' => 1, 'name' => 'Áo Thun Đen', 'price' => 200000],
    ['id' => 2, 'name' => 'Quần Jeans Xanh', 'price' => 500000],
    ['id' => 3, 'name' => 'Giày Thể Thao', 'price' => 800000],
];
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh Sách Sản Phẩm</title>
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
            max-width: 1000px;
            margin: 60px auto;
            padding: 0 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 35px;
            color: #111827;
            font-size: 32px;
        }

        .card {
            background: #fff;
            border-radius: 16px;
            padding: 25px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.12);
            width: 1000px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background: #f3f4f6;
        }

        th, td {
            padding: 16px;
            border-bottom: 1px solid #e5e7eb;
            text-align: left;
        }

        th {
            font-weight: bold;
            color: #374151;
        }

        td {
            color: #374151;
        }

        /* ===== BUTTONS ===== */
        .btn {
            display: inline-block;
            padding: 8px 16px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: bold;
            color: #fff;
            text-decoration: none;
            margin-right: 6px;
        }

        .btn-edit {
            background: #4f46e5;
        }

        .btn-delete {
            background: #dc2626;
        }

        .btn-edit:hover {
            background: #4338ca;
        }

        .btn-delete:hover {
            background: #b91c1c;
        }

        .btn-add {
            margin-top: 28px;
            padding: 14px 30px;
            background: #4f46e5;
            border-radius: 12px;
            display: inline-block;
            color: #fff;
            font-weight: bold;
            text-decoration: none;
        }

        .btn-add:hover {
            background: #4338ca;
        }

        /* ===== FOOTER (GIỐNG HÌNH) ===== */
        footer {
            background: #ffffff;
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
         <a href="../dashboard.php">Trang Chủ</a>
    <a href="index.php">Sản phẩm</a>
    <a href="../contact.php">Liên Hệ</a>
    <a href="../index.php">Đăng Xuất</a>
    </nav>
</header>

<div class="container">
    <h1>Danh Sách Sản Phẩm</h1>

    <div class="card">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Giá</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $p): ?>
                <tr>
                    <td><?= $p['id'] ?></td>
                    <td><?= $p['name'] ?></td>
                    <td><?= number_format($p['price'], 0, ',', '.') ?> VNĐ</td>
                    <td>
                        <a href="edit.php?id=<?= $p['id'] ?>" class="btn btn-edit">Sửa</a>
                        <a href="delete.php?id=<?= $p['id'] ?>"
                           class="btn btn-delete"
                           onclick="return confirm('Bạn có chắc muốn xóa?')">
                           Xóa
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div style="text-align:center;">
            <a href="create.php" class="btn-add">Thêm Sản Phẩm</a>
        </div>
    </div>
</div>

<footer>
    © 2025 – Bản quyền thuộc về (tên của bạn)
</footer>

</body>
</html>