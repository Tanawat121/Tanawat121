<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

  <style>
    body {
      background-color: #f0f8ff;
      font-family: 'Arial', sans-serif;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .form-login {
      background-color: #ffffff;
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      padding: 30px;
      width: 100%;
      max-width: 500px;
    }

    .form-login h2 {
      text-align: center;
      margin-bottom: 20px;
      font-weight: bold;
      color: #4CAF50;
    }

    .form-login .btn {
      width: 100%;
      margin-top: 10px;
    }

    .form-login a {
      text-decoration: none;
      color: #ffffff;
    }

    .form-login .btn-info {
      background-color: #17a2b8;
      border-color: #17a2b8;
    }

    .form-login .btn-info:hover {
      background-color: #138496;
      border-color: #117a8b;
    }
  </style>
  <title>เข้าสู่ระบบจัดการข้อมูลพนักงาน</title>
</head>

<body>
  <div class="form-login">
    <h2><i class='bx bxs-user-pin' style='color:#50e7d4'></i> เข้าสู่ระบบจัดการข้อมูลพนักงาน</h2>
    <form method="POST" action="chk.php">
      <div class="mb-3">
        <label for="username" class="form-label">ชื่อเข้าระบบ</label>
        <input type="text" class="form-control" id="username" name="username" required placeholder="กรุณากรอกชื่อผู้ใช้">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">รหัสผ่าน</label>
        <input type="password" class="form-control" id="password" name="password" required placeholder="กรุณากรอกรหัสผ่าน">
      </div>
      <button type="submit" class="btn btn-success">เข้าสู่ระบบ</button>
      <button type="reset" class="btn btn-warning">ล้างข้อมูล</button>
      <a href="index.php" class="btn btn-info">กลับหน้าหลัก</a>
    </form>
  </div>

  <!-- Optional JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
