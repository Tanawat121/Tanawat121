<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #f9fafb;
      font-family: 'Arial', sans-serif;
    }

    .form-container {
      background: #ffffff;
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 30px;
      max-width: 600px;
      margin: 50px auto;
    }

    .form-container h2 {
      color: #007bff;
      font-weight: bold;
      margin-bottom: 20px;
      text-align: center;
    }

    .btn-custom {
      border-radius: 50px;
      padding: 10px 20px;
    }

    .btn-success {
      background-color: #28a745;
      border: none;
    }

    .btn-danger {
      background-color: #dc3545;
      border: none;
    }

    .btn-primary {
      background-color: #007bff;
      border: none;
    }
  </style>
  <title>บันทึกข้อมูลพนักงาน</title>
</head>

<body>
  <div class="container">
    <div class="form-container">
      <h2>บันทึกข้อมูลพนักงาน</h2>
      <hr>
      <form action="insertdata.php" method="POST" class="form-signin">
        <div class="mb-3">
          <label for="emp_title" class="form-label">คำนำหน้า</label>
          <select name="emp_title" class="form-select" required>
            <option value="นาย">นาย</option>
            <option value="นาง">นาง</option>
            <option value="นางสาว">นางสาว</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="emp_name" class="form-label">ชื่อ</label>
          <input type="text" name="emp_name" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="emp_surname" class="form-label">นามสกุล</label>
          <input type="text" name="emp_surname" class="form-control">
        </div>
        <div class="mb-3">
          <label for="emp_birthday" class="form-label">วันเดือนปีเกิด</label>
          <input type="date" name="emp_birthday" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="emp_adr" class="form-label">ที่อยู่</label>
          <textarea name="emp_adr" class="form-control" rows="3"></textarea>
        </div>
        <div class="mb-3">
          <label for="emp_skill" class="form-label">ทักษะพิเศษ</label>
          <textarea name="emp_skill" class="form-control" rows="3"></textarea>
        </div>
        <div class="mb-3">
          <label for="emp_tel" class="form-label">เบอร์โทรศัพท์</label>
          <input type="tel" name="emp_tel" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="emp_user" class="form-label">ชื่อเข้าระบบ</label>
          <input type="text" name="emp_user" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="emp_pass" class="form-label">รหัสผ่าน</label>
          <input type="password" name="emp_pass" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="emp_level" class="form-label">ระดับผู้ใช้งาน</label>
          <select name="emp_level" class="form-select" required>
            <option value="">--เลือกระดับผู้ใช้งาน--</option>
            <option value="a">ผู้ดูแลระบบ</option>
            <option value="u">ผู้ใช้งาน</option>
          </select>
        </div>
        <div class="d-flex justify-content-between">
          <button type="submit" class="btn btn-success btn-custom">บันทึกข้อมูล</button>
          <button type="reset" class="btn btn-danger btn-custom">ล้างข้อมูล</button>
          <a href="index.php" class="btn btn-primary btn-custom">กลับหน้าแรก</a>
        </div>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
