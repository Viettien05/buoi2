<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>

<h2>Trang quản trị</h2>

<p>Xin chào, <b><?php echo $_SESSION['user']; ?></b></p>

<form action="logout.php" method="POST">
    <button type="submit">Đăng xuất</button>
</form>

</body>
</html>