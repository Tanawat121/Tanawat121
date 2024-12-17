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
        //--------------------------------------
        echo "<h3>ทดสอบการใช้ Function</h3>";
        $a = 5;
        $b = 8;
        $c = sum($a,$b);
        echo "$a + $b = $c <br>";

        //--------------------------------------
        bye();

    function Hello($yourname){
        echo "<h3>ผู้พัฒนาโปรแกรม<h3>";
        echo "<h3>.$yourname.<h3>";
        echo "<hr>";
    }
    function sum($x,$y){
        $z = $x+$y;
        return $z;
    }
    function bye(){
        echo "<hr>";
        echo "<h4>หลักสูตรวิทยาศาสตรบัณฑิต เทคโนโลยีสารสนเทศ</h4>";
        echo "<h4>สาขาวิชาวิทยาการคอมพิวเตอร์เเละเทคโนโลยีสารสนเทศ</h4>";

    }
    ?>
</body>
</html>