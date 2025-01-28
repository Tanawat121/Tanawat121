<?php
require('dbconnect.php');

$emp_id = $_GET["emp_id"];

$sql = "SELECT * FROM employee WHERE emp_id=$emp_id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
?>
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
      background-color: #f0f8ff;
      font-family: 'Arial', sans-serif;
    }

    .form-container {
      background: #ffffff;
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      padding: 30px;
      max-width: 700px;
      margin: 50px auto;
    }

    .form-container h2 {
      color: #0056b3;
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

  <title>แก้ไขข้อมูลพนักงาน</title>
</head>

<body>
  <div class="form-container">
    <h2>แก้ไขข้อมูลพนักงาน</h2>
    <hr>
    <form action="updatedata.php" method="POST">
      <input type="hidden" value="<?php echo $row['emp_id']; ?>" name="emp_id">
      
      <div class="mb-3">
        <label for="emp_title" class="form-label">คำนำหน้า</label>
        <select name="emp_title" class="form-select" required>
          <option value="นาย" <?php if ($row["emp_title"] == "นาย") echo "selected"; ?>>นาย</option>
          <option value="นาง" <?php if ($row["emp_title"] == "นาง") echo "selected"; ?>>นาง</option>
          <option value="นางสาว" <?php if ($row["emp_title"] == "นางสาว") echo "selected"; ?>>นางสาว</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="emp_name" class="form-label">ชื่อ</label>
        <input type="text" name="emp_name" class="form-control" value="<?php echo $row['emp_name']; ?>" required>
      </div>

      <div class="mb-3">
        <label for="emp_surname" class="form-label">นามสกุล</label>
        <input type="text" name="emp_surname" class="form-control" value="<?php echo $row['emp_surname']; ?>" required>
      </div>

      <div class="mb-3">
        <label for="emp_birthday" class="form-label">วันเดือนปีเกิด</label>
        <input type="date" name="emp_birthday" class="form-control" value="<?php echo $row['emp_birthday']; ?>" required>
      </div>

      <div class="mb-3">
        <label for="emp_adr" class="form-label">ที่อยู่ปัจจุบัน</label>
        <textarea name="emp_adr" class="form-control" rows="3" required><?php echo $row['emp_adr']; ?></textarea>
      </div>

      <div class="mb-3">
        <label for="emp_skill" class="form-label">ทักษะความสามารถ</label>
        <textarea name="emp_skill" class="form-control" rows="3" required><?php echo $row['emp_skill']; ?></textarea>
      </div>

      <div class="mb-3">
        <label for="emp_tel" class="form-label">เบอร์โทรศัพท์</label>
        <input type="tel" name="emp_tel" class="form-control" value="<?php echo $row['emp_tel']; ?>" required>
      </div>

      <div class="d-flex justify-content-between">
        <button type="submit" class="btn btn-success btn-custom">บันทึกการแก้ไข</button>
        <button type="reset" class="btn btn-danger btn-custom">ล้างข้อมูล</button>
        <a href="index.php" class="btn btn-primary btn-custom">กลับหน้าแรก</a>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
