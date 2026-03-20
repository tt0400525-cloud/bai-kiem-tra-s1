<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
    background: linear-gradient(to bottom,#f0fcf9, #e6f0ff);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    /* Navbar */
    .navbar {
      background: #f5f5f5;
      padding: 20px 60px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }

    .navbar h2 {
      font-weight: 700;
    }

    .nav-links a {
      text-decoration: none;
      margin-left: 30px;
      color: #333;
      font-weight: 500;
    }

    .nav-links a:hover {
      color: #4f46e5;
    }

    /* Main */
    .main {
      flex: 1;
      text-align: center;
      padding-top: 80px;
    }

    .main h1 {
      font-size: 40px;
      margin-bottom: 60px;
      color: #1f2937;
    }

    /* Cards */
    .cards {
      display: flex;
      justify-content: center;
      gap: 40px;
      margin-bottom: 50px;
    }

    .card {
      background: #f3f4f6;
      padding: 40px 60px;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.08);
      width: 370px;
    }

    .card h3 {
      margin-bottom: 20px;
      font-weight: 600;
      color: #374151;
    }

    .card p {
      font-size: 36px;
      font-weight: 700;
      color: #4f46e5;
    }

    /* Button */
    .btn {
      background: linear-gradient(to right, #4f46e5, #6366f1);
      border: none;
      padding: 15px 40px;
      border-radius: 12px;
      color: white;
      font-size: 18px;
      font-weight: 600;
      cursor: pointer;
      transition: 0.3s;
    }

    .btn:hover {
      transform: scale(1.05);
    }

    /* Footer */
    footer {
      text-align: center;
      padding: 20px;
      background: #f5f5f5;
      color: #555;
    }

    /* Responsive */
    @media(max-width: 900px){
      .cards {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
</head>
<body>

  <div class="navbar">
    <h2>Logo (thay logo của bạn)</h2>
    <div class="nav-links">
      <a href="dashboard.php">Trang Chủ</a>
      <a href="">Sản phẩm</a>
      <a href="contact.php">Liên Hệ</a>
      <a href="index.php">Đăng Xuất</a>
    </div>
  </div>

  <div class="main">
    <h1>Tổng Quan</h1>

    <div class="cards">
      <div class="card">
        <h3>Số Sản Phẩm</h3>
        <p>50</p>
      </div>

      <div class="card">
        <h3>Người Dùng</h3>
        <p>120</p>
      </div>

      <div class="card">
        <h3>Đơn Hàng</h3>
        <p>30</p>
      </div>
    </div>

    <a href="products/index1.php" class="btn">Quản Lý Sản Phẩm</a>
  </div>
  <footer>
    © 2025 - Bản quyền thuộc về (tên của bạn)
  </footer>

</body>
</html>