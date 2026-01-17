<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
</head>
<body>

<h2>Đăng nhập</h2>

<form method="POST" action="">
    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Mật khẩu:</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit" name="login">Đăng nhập</button>
</form>

<?php
if (isset($_POST['login'])) {

    include "db_connect.php";

    $email = $_POST['email'];
    $password_input = $_POST['password'];

    $sql = "SELECT * FROM students WHERE email = ?";


    $stmt = $conn->prepare($sql);
    $stmt->execute([$email]);

    if ($stmt->rowCount() === 1) {

        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        $password_hash_db = $user['password'];

        if (password_verify($password_input, $password_hash_db)) {

            $_SESSION['user'] = $email;

            header("Location: dashboard.php");
            exit;

        } else {
            echo "<p style='color:red;'>Sai email hoặc mật khẩu</p>";
        }

    } else {
        echo "<p style='color:red;'>Sai email hoặc mật khẩu</p>";
    }
}
?>

</body>
</html>