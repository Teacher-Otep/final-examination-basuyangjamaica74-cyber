<?php
require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sql = "UPDATE students SET 
            name=:name,
            surname=:surname,
            middlename=:middlename,
            address=:address,
            contact_number=:contact
            WHERE id=:id";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ':id' => $_POST['id'],
        ':name' => $_POST['name'],
        ':surname' => $_POST['surname'],
        ':middlename' => $_POST['middlename'],
        ':address' => $_POST['address'],
        ':contact' => $_POST['contact']
    ]);

    header("Location: ../public/index.php?status=updated");
    exit();
}