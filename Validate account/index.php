<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate Account</title>
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
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        button{
            background-color: red;
            color: white;}
        button:hover {background-color: lightcoral;}
        
        .error {
            color: red;
            font-size: 20px;
        }

        .success {
            color: green;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h1>Validate Account</h1>
        <form method="POST">
            <div class="form-group">
                <input type="text" id="account" name="account" placeholder="Nhập tài khoản" required>
            </div>
            <button type="submit">Kiểm tra</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $account = $_POST["account"];
            $pattern = '/^[_a-z0-9]{6,}$/';
            if (preg_match($pattern, $account)) {
                echo "<p class='success'>Tên tài khoản hợp lệ: $account</p>";
            } else {
                echo "<p class='error'>Tên tài khoản không hợp lệ. Tài khoản phải có ít nhất 6 ký tự, không chứa ký tự đặc biệt hoặc chữ hoa.</p>";
            }
        }
        ?>
    </div>
</body>

</html>