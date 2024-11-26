<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Triangle Area Form</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f9f9f9;
                margin: 0;
                padding: 20px;
            }
            .container {
                max-width: 500px;
                margin: 0 auto;
                background: #ffffff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
            h1 {
                text-align: center;
                color: #333;
            }
            label {
                display: block;
                margin-bottom: 8px;
                font-weight: bold;
            }
            input[type="number"] {
                width: 100%;
                padding: 10px;
                margin-bottom: 15px;
                border: 1px solid #ccc;
                border-radius: 4px;
            }
            button {
                display: block;
                width: 100%;
                padding: 10px;
                background: #007BFF;
                color: #fff;
                border: none;
                border-radius: 4px;
                font-size: 16px;
            }
            button:hover {
                background: #0056b3;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>คำนวณพื้นที่สามเหลี่ยม</h1>
            <form action="Triangle_area.php" method="POST">
                <label for="base">ความยาวฐาน (Base):</label>
                <input type="number" name="base" id="base" placeholder="กรอกความยาวฐาน" required>
                
                <label for="height">ความสูง (Height):</label>
                <input type="number" name="height" id="height" placeholder="กรอกความสูง" required>
                
                <button type="submit">คำนวณ</button>
            </form>
        </div>
    </body>
</html>
