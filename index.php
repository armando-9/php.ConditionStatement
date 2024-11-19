<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center><h1>การใช้คำสั่งแบบCondition (กลุ่มคำสั่ง if)</h1></center>
<?php
    echo"<h2>คำสั่ง if</h2>";
    $x=5;
    $y=8;
    echo"\$x = $x<br>";
    echo"\$y = $y<br>";
    if ($x<$y) {
        echo "ค่าในตัวแปร X น้อยกว่าค่าในตัวแปร Y<br>";
    }
    else{
        echo "ค่าในตัวแปร Y น้อยกว่าค่าในตัวแปร X<br>";
    }
    echo"----------------------------------------";

    echo"<h2> Short hand if</h2>";

    $score = 35;
    if ($score >= 50) echo"ขอแสดงความยินดีคุณสอบผ่าน";
    else echo"คุณสอบตก";
    echo"<br>";
    $result = $score>=50 ? "ได้เกรด P" : "ได้เกรด F";
    echo"ผลการเรียนของคุณ" . $result;
    echo"<br>";
    echo"----------------------------------------";
    echo"<h2> คำสั่งSwitch case</h2>";
    echo"<br>";
    $pet='brid';

    switch ($pet) {
        case 'cat':
            echo "คุณชอบนอนเหมือนแมว<br>";
            break;
        case'dog':
            echo"คุณชอบนอนเหมือนหมา<br>";
            break;  
        case'brid':
            echo"คุณชอบนอนเหมือนนก<br>";
            break;  
        default:
            echo"คุณเป็นมนุษย์ Introvert<br>";
            break;
    }
    echo"<br>";
    echo"----------------------------------------";



?>
</body>
</html>