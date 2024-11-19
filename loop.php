<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1>การใช้คำสั่งวนซ้ำ Loop Statement</h1></center>
    <?php
    echo "<h1>While loop</h1>";
    echo"<br>";
    $x = 1;
    while ($x <= 5){
        if ($x==3)break;
        echo"do loop รอบที่ : ".$x."<br>";
        $x++;
        
        };
    $i = 1;
    while ($i <= 250) {echo"-";$i++;}
    echo"<br>";
    echo"<h1>Do...While loop</h1>";
    $y = 1;
    do {
        echo"do...while loop รอบที่ : ".$y."<br>";
        $y++;
        if($y>=5)break;
    }while ($y <= 9999999);
    echo"<br>";
    echo"----------------------------------------<br>";
    echo"<h1>For loop</h1>";
    for ($i=1; $i <= 10 ; $i++) { 
        echo"loop For รอบที่ :".$i."<br>";
    }



    ?>
</body>
</html>