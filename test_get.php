<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ทดสอบส่งค่าโดยใช้ method GET</title>
</head>
<body>
    <h2>ทดสอบส่งค่าจาก method GET (ผ่านURL)</h2>
    <?php
    echo "ศึกษาเรื่อง: " .$_GET['subject'] . "ได้ที่".$_GET['web'];
    ?>
    
</body>
</html>