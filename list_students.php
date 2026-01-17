<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Danh sách sinh viên</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        a {
            text-decoration: none;
            color: blue;
        }
    </style>
</head>
<body>

<h2>Danh sách sinh viên</h2>

<?php
include "db_connect.php";

$sql = "SELECT * FROM students";

$stmt = $conn->prepare($sql);
$stmt->execute();

$students = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<table>
    <tr>
        <th>ID</th>
        <th>Họ tên</th>
        <th>Mã SV</th>
        <th>Email</th>
        <th>Hành động</th>
    </tr>

    <?php
    foreach ($students as $row) {
        echo "<tr>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['fullname']}</td>";
        echo "<td>{$row['student_code']}</td>";
        echo "<td>{$row['email']}</td>";
        echo "<td>
                <a href='#'>Sửa</a> |
                <a href='#'>Xóa</a>
              </td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>