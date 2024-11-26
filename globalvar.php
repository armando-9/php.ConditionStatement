<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Global Variable</title>
</head>
<body>
    <h1>Global Variable</h1>
    <?php
    $x = 75;
    echo "ค่าของ X ==>".$x."<br>";
    function myfunction(){
        //echo "อ่านจาก Funtion ค่าของ X===> ".$GLOBALS['x'];
        global $x;
        $x = 35;
        echo "อ่านจาก Funtion ค่าของ X===> ".$x."<br>";
    }
    myfunction();
    echo "ค่าของ X ==>".$x."<br>";

    echo "<br>";

    echo"<h1>การใช้ข้อมูลจากServerด้วย \$_SEVER</h1>";
    echo $_SERVER['PHP_SELF']."<br>";
    echo $_SERVER['SERVER_NAME']."<br>";
    echo $_SERVER['HTTP_HOST']."<br>";
    //echo $_SERVER['HTTP_REFERER']."<br>";
    echo $_SERVER['HTTP_USER_AGENT']."<br>";
    echo $_SERVER['SCRIPT_NAME']."<br>";

    

    ?>
    
</body>
</html>