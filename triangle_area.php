<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>แสดงค่าพื้นที่สามเหลี่ยม</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            background: linear-gradient(180deg , #8cffea, #61a79a); /* สีฟ้าจางไปขาว */
            color: #333;
            text-align: center;
            padding: 50px;
            min-height: 100vh; /* ให้เต็มหน้าจอ */
            margin: 0;
        }
        .result-box {
            display: inline-block;
            padding: 20px;
            border: 2px solid #4682b4;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #4682b4;
        }
        .btn {
            padding: 10px 20px;
            font-size: 16px;
            color: #ffffff;
            background-color: green; /* สีฟ้า */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 5px;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #5a9bd4;
        }
    
    </style>
</head>
<body>
    <center>
<?php
$base = $_POST['base'];
$hight =$_POST['hight'];
$area = triangleArea($hight,$base);
?>
<br>
<div class="result-box">
        <h1>ผลลัพธ์การคำนวณ</h1>
        <p>ค่าพื้นที่สามเหลี่ยม: <strong><?php echo number_format($area, 2); ?></strong> ตารางหน่วย</p>
        <a href="triangle_area_form.php" class="btn">กลับไปหน้าแบบฟอร์ม</a>
    </div>
</center>
    <?php 
    function triangleArea($h,$b){
        $a = 0.5 * $h * $b;
        return $a;
    }
    ?>
</body>
</html>