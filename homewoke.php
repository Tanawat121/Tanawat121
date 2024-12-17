<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรแกรมคำนวณ BMI</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 50%;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            font-size: 16px;
            color: #555;
        }
        input[type="text"], input[type="number"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0 20px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        .result {
            margin-top: 20px;
            background-color: #f8f8f8;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        .result p {
            font-size: 16px;
            color: #333;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>โปรแกรมคำนวณ BMI</h1>

    <form action="" method="POST">
        <label for="first_name">ชื่อ:</label>
        <input type="text" id="first_name" name="first_name" required>
        
        <label for="last_name">นามสกุล:</label>
        <input type="text" id="last_name" name="last_name" required>
        
        <label for="age">อายุ:</label>
        <input type="number" id="age" name="age" required>
        
        <label for="weight">น้ำหนัก (kg):</label>
        <input type="number" step="0.1" id="weight" name="weight" required>
        
        <label for="height">ส่วนสูง (m):</label>
        <input type="number" step="0.01" id="height" name="height" required>
        
        <input type="submit" value="คำนวณ BMI">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $age = $_POST['age'];
        $weight = $_POST['weight'];
        $height = $_POST['height'];

        // Calculate BMI by calling the function with weight and height
        $bmi = bmiConvert($weight, $height);
        
        // Get BMI status and recommendation
        list($bmi_status, $recommendation) = bmiToText($bmi);

        echo "<div class='result'>
                <p><strong>ข้อมูลผู้ใช้:</strong></p>
                <p>ชื่อ: $first_name $last_name</p>
                <p>อายุ: $age ปี</p>
                <p>น้ำหนัก: $weight kg</p>
                <p>ส่วนสูง: $height m</p>
                <p><strong>BMI: </strong>" . number_format($bmi, 2) . "</p>
                <p><strong>สถานะ BMI: </strong>$bmi_status</p>
                <p><strong>คำแนะนำ: </strong>$recommendation</p>
              </div>";
    }

    // Function to calculate BMI
    function bmiConvert($weight, $height){
        return $weight / ($height * $height);
    }

    // Function to return BMI status and recommendation
    function bmiToText($bmi){
        if ($bmi < 18.5) {
            $bmi_status = "น้ำหนักน้อย";
            $recommendation = "ควรเพิ่มน้ำหนักเพื่อสุขภาพที่ดี";
        } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
            $bmi_status = "น้ำหนักปกติ";
            $recommendation = "สุขภาพดี รักษาน้ำหนักนี้ไว้";
        } elseif ($bmi >= 25 && $bmi <= 29.9) {
            $bmi_status = "น้ำหนักเกิน";
            $recommendation = "ควรลดน้ำหนักเพื่อสุขภาพที่ดี";
        } else {
            $bmi_status = "อ้วน";
            $recommendation = "ควรลดน้ำหนักและปรึกษาแพทย์";
        }

        // Return the status and recommendation
        return [$bmi_status, $recommendation];
    }
?>



</div>

</body>
</html>