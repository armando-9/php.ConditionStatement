<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>PHP Request</title>
</head>
<body>
    <h1>โปรดกรอกชื่อของท่าน</h1>
    <form method="post" action="<?php echo$_SERVER['PHP_SELF'];?>">
        Name: <input type="text" name="fname"> 
            <input type="submit">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        //$name = htmlspecialchars($_REQUEST['fname']);
        $name = htmlspecialchars($_POST['fname']);
        if (empty($name)) {
            echo "ชื่อเป็นที่ว่าง";
        }else {
            echo"ยินดีต้นรับคุณ  $name";
        }
    }
    ?>
    
</body>
</html>