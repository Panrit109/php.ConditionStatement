<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรแกรมคำนวณค่า BMI</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        h1 {
            text-align: center;
            color: #4CAF50;
        }
        label {
            font-size: 16px;
            color: #333;
        }
        input[type="text"], input[type="number"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
            padding: 20px;
            background-color: #f1f1f1;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>คำนวณค่า BMI</h1>
    <form method="post">
        <label for="fname">ชื่อ:</label>
        <input type="text" id="fname" name="fname" required>

        <label for="lname">นามสกุล:</label>
        <input type="text" id="lname" name="lname" required>

        <label for="age">อายุ:</label>
        <input type="number" id="age" name="age" required>

        <label for="weight">น้ำหนัก (กิโลกรัม):</label>
        <input type="number" id="weight" name="weight" required>

        <label for="height">ส่วนสูง (เซนติเมตร):</label>
        <input type="number" id="height" name="height" required>

        <input type="submit" value="คำนวณ BMI">
    </form>

    <?php
    function calculateBMI($weight, $height) {
        $heightMeters = $height / 100;
        return $weight / ($heightMeters ** 2);
    }

    function interpretBMI($bmi) {
        if ($bmi < 18.5) {
            return "ควรพบแพทย์น้ำหนักคุณน้อยกว่าปกติ";
        } elseif ($bmi <= 24.9) {
            return "น้ำหนักปกติ";
        } elseif ($bmi <= 29.9) {
            return "น้ำหนักเกิน";
        } else {
            return "ควรพบแพทย์น้ำหนักคุณมากกว่าปกติ";
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $age = $_POST['age'];
        $weight = $_POST['weight'];
        $height = $_POST['height'];

        
        $height_in_meters = $height / 100;
        $bmi = calculateBMI($weight,$height); 

        
        if ($bmi < 18.5) {
            $result = "ผอมเกินไป";
        } elseif ($bmi >= 18.5 && $bmi < 24.9) {
            $result = "น้ำหนักปกติ";
        } elseif ($bmi >= 25 && $bmi < 29.9) {
            $result = "น้ำหนักเกิน";
        } else {
            $result = "โรคอ้วน";
        }

        
        echo "<div class='result'>";
        echo "<h3>ข้อมูลผู้ใช้:</h3>";
        echo "<p>ชื่อ: $fname $lname</p>";
        echo "<p>อายุ: $age ปี</p>";
        echo "<p>น้ำหนัก: $weight กิโลกรัม</p>";
        echo "<p>ส่วนสูง: $height เซนติเมตร</p>";
        echo "<h3>ผลลัพธ์ BMI:</h3>";
        echo "<p>BMI: " . round($bmi, 2) . "</p>";
        echo interpretBMI($bmi);
        echo "</div>";
    }
    ?>

</div>

</body>
</html>