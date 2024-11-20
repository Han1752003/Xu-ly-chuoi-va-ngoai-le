<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate Email</title>
<body>
    <h1>Validate email</h1>
    <form method="POST">
        <input type="text" name="email" placeholder="Nhập email của bạn" required>
        <br>
        <button type="submit">Kiểm tra</button>
    </form>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 50px;
            text-align: center;
        }
        input {
            padding: 10px;
            width: 300px;
            margin-bottom: 20px;
            background-color: whitesmoke;
        }
        .error {color: red;}
        .success {color: darkgreen;}
        h1{color: red;}
    </style>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $pattern = '/^[^\s@]+@[^\s@]+\.[^\s@]+$/';
        if (preg_match($pattern, $email)) {
            echo "<p class='success'>Email hợp lệ: $email</p>";
        } else {
            echo "<p class='error'>Email không hợp lệ. Vui lòng thử lại.</p>";
        }
    }
    ?>
</body>

</html>