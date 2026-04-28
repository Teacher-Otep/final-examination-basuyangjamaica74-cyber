<?php require_once "../includes/db.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>CRUD</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<nav class="navbar">
    <img src="../images/jam-toast.svg" id="logo">
    <button class="navbarbuttons" onclick="showSection('create')">Create</button>
    <button class="navbarbuttons" onclick="showSection('read')">Read</button>
    <button class="navbarbuttons" onclick="showSection('update')">Update</button>
    <button class="navbarbuttons" onclick="showSection('delete')">Delete</button>
</nav>

<section id="home" class="homecontent">
    <h1>Welcome</h1>
</section>


<section id="create" class="content">
<h2>Create Student</h2>

<form action="../includes/insert.php" method="POST">
<input name="name" placeholder="Name" required><br>
<input name="surname" placeholder="Surname" required><br>
<input name="middlename" placeholder="Middle"><br>
<input name="address" placeholder="Address"><br>
<input name="contact" placeholder="Contact"><br>
<button type="submit">Save</button>
</form>
</section>


<section id="read" class="content">
<?php include "../includes/read.php"; ?>
</section>


<section id="update" class="content">
<h2>Update Student</h2>
<form action="../includes/update.php" method="POST">
<input name="id" placeholder="ID" required><br>
<input name="name" placeholder="Name"><br>
<input name="surname" placeholder="Surname"><br>
<input name="middlename" placeholder="Middle"><br>
<input name="address" placeholder="Address"><br>
<input name="contact" placeholder="Contact"><br>
<button type="submit">Update</button>
</form>
</section>


<section id="delete" class="content">
<h2>Delete Student</h2>
<form action="../includes/delete.php" method="POST">
<input name="id" placeholder="ID" required>
<button type="submit">Delete</button>
</form>
</section>

<script src="script.js"></script>
</body>
</html>