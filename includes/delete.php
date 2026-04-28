<?php
require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sql = "DELETE FROM students WHERE id=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':id' => $_POST['id']]);

    header("Location: ../public/index.php?status=deleted");
    exit();
}