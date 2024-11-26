<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Triangle Area Result</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 20px;
            }
            .container {
                max-width: 600px;
                margin: 0 auto;
                background: #ffffff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                text-align: center;
            }
            h1 {
                color: #28a745;
            }
            p {
                font-size: 18px;
                color: #333;
            }
            .triangle {
                margin: 20px auto;
                width: 0;
                height: 0;
                border-left: calc(var(--base) / 2 * 1px) solid transparent;
                border-right: calc(var(--base) / 2 * 1px) solid transparent;
                border-bottom: calc(var(--height) * 1px) solid #007BFF;
            }
            a {
                display: inline-block;
                margin-top: 20px;
                text-decoration: none;
                color: #007BFF;
                font-weight: bold;
            }
            a:hover {
                color: #0056b3;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>ผลการคำนวณพื้นที่สามเหลี่ยม</h1>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $base = $_POST['base'];
                    $height = $_POST['height'];

                    if (is_numeric($base) && is_numeric($height) && $base > 0 && $height > 0) {
                        $area = 0.5 * $base * $height;
                        echo "<p>ฐาน (Base): <strong>" . htmlspecialchars($base) . "</strong></p>";
                        echo "<p>ความสูง (Height): <strong>" . htmlspecialchars($height) . "</strong></p>";
                        echo "<p>พื้นที่สามเหลี่ยมคือ: <strong>" . number_format($area, 2) . " ตารางหน่วย</strong></p>";

                        // เพิ่มการสร้างรูปสามเหลี่ยม
                        echo "<div class='triangle' style='--base: $base; --height: $height;'></div>";
                    } else {
                        echo "<p>กรุณากรอกตัวเลขที่มากกว่าศูนย์สำหรับทั้งฐานและความสูง</p>";
                    }
                } else {
                    echo "<p>ไม่มีข้อมูลที่ส่งมา กรุณากลับไปที่ <a href='Triangle_area_form.php'>ฟอร์ม</a></p>";
                }
            ?>
            <a href="Triangle_area_form.php">กลับไปกรอกข้อมูลใหม่</a>
        </div>
    </body>
</html>
