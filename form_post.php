<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form POST</title>
</head>
<body>

<h2>Form đăng ký (POST)</h2>

<form method="POST" action="">
    <input type="text" name="name" placeholder="Nhập tên" required><br><br>
    <input type="password" name="password" placeholder="Nhập mật khẩu" required><br><br>
    <button type="submit">Đăng ký</button>
</form>

<?php
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    echo "<p>Đã nhận thông tin của <b>$name</b></p>";
}
?>

</body>
</html>