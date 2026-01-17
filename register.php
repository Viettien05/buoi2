<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Đăng ký tài khoản</title>
</head>
<body>

<h2>Đăng ký</h2>

<form method="POST" action="">
    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Mật khẩu:</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit" name="register">Đăng ký</button>
</form>

<?php
if (isset($_POST['register'])) {

    include "db_connect.php";

    $email = $_POST['email'];
    $password = $_POST['password'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO students (email, password) VALUES (?, ?)";

    $stmt = $conn->prepare($sql);

    $stmt->execute([$email, $hashedPassword]);

    echo "<p style='color:green;'>Đăng ký thành công!</p>";
}
?>

</body>
</html>