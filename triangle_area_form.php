<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ฟอร์มสำหรับรับค่า</title>
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
        .form-box {
            display: inline-block;
            padding: 20px 40px;
            border: 2px solid #4682b4;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #4682b4;
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-size: 16px;
            margin-bottom: 8px;
            color: #555;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }
        input[type="submit"] {
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
        input[type="submit"]:hover {
            background-color: #5a9bd4;
        }
        input[type="reset"] {
            padding: 10px 20px;
            font-size: 16px;
            color: #ffffff;
            background-color: #dc143c; /* สีแดง */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 5px;
            transition: background-color 0.3s ease;
        }
        input[type="reset"]:hover {
            background-color: #e57373;
        }
    </style>
</head>
<body>
    <div class="form-box">
        <h1>กรอกความยาวฐานและความสูงของสามเหลี่ยม</h1>
        <form action="triangle_area.php" method="post">
            <label for="base">ความยาวฐาน:</label>
            <input type="text" name="base" id="base" placeholder="กรอกความยาวฐาน">

            <label for="hight">ความสูง:</label>
            <input type="text" name="hight" id="hight" placeholder="กรอกความสูง">

            <input type="submit" value="คำนวณ">
            <input type="reset" value="ล้างข้อมูล">
        </form>
    </div>
</body>
</html>
