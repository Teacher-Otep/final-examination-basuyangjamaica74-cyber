<?php
require_once "db.php";

$stmt = $pdo->query("SELECT * FROM students");
$students = $stmt->fetchAll();

echo "<h2>Student Records</h2>";

echo "<table border='1' width='100%' cellpadding='10'>";
echo "<tr>
        <th>ID</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Middle</th>
        <th>Address</th>
        <th>Contact</th>
      </tr>";

foreach ($students as $row) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['surname']}</td>
        <td>{$row['middlename']}</td>
        <td>{$row['address']}</td>
        <td>{$row['contact_number']}</td>
    </tr>";
}

echo "</table>";