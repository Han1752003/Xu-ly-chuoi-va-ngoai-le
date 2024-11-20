<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate Phone Number</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 50px;
            text-align: center;
        }
        h1{color: red;}
        .form-container {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color:whitesmoke;
        }
        input{background-color: whitesmoke;}
        .form-group {
            margin-bottom: 15px;
        }
        .form-group input {
            width: 60%;
            padding: 8px;
            box-sizing: border-box;
        }
        button{
            background-color: red;
            color: white;}
        button:hover {background-color: lightcoral;}
        
        .error {
            color: red;
            font-size: 17px;
        }

        .success {
            color: green;
            font-size: 17px;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h1>Validate Phone</h1>
        <form method="POST">
            <div class="form-group">
                <input type="text" id="phone" name="phone" placeholder="Nhập số điện thoại (xx)-(0xxxxxxxxx)" required>
            </div>
            <button type="submit">Kiểm tra</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $phone = $_POST["phone"];
            $pattern = '/^\(\d{2}\)-\(0\d{9}\)$/';
            if (preg_match($pattern, $phone)) {
                echo "<p class='success'>Số điện thoại hợp lệ: $phone</p>";
            } else {
                echo "<p class='error'>Số điện thoại không hợp lệ. Định dạng phải là (xx)-(0xxxxxxxxx).</p>";
            }
        }
        ?>
    </div>
</body>

</html>