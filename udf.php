<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ทดสอบการสร้าง Function ที่สร้างโดยผู้พัฒนาโปรเเกรม</h1>
    <?php
        $name = "ใส่ชื่อนามสกุลของตัวเองตรงนี้";
        Hello($name);

    function Hello($yourname){
        echo "<h3>ผู้พัฒนาโปรแกรม<h3>";
        echo "<h3>.$yourname.<h3>";
        echo "<hr>";
    }
    function sum($x,$y){
        $z = $x+$y;
        return $z;
    }
</body>
</html>