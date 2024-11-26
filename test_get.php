<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ทดสอบส่งค่าโดยใช้ Method GET</title>
</head>
<body>
    <h2>ทดสอบรับค่าจาก method GET (ผ่าน URL)</h2>
    <?php
    echo"ศึกษาเรื่อง : ".$_GET['subject']." ได้ที่ ".$_GET['web'];
    
    ?>
</body>
</html>