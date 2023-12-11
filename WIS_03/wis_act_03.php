<?php
// Database connection
$host = '127.0.0.1';
$username = 'root';
$password = '';
$database = 'crud_system';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



// Create
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    mysqli_query($conn, $sql);
}

// Read
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

// Update
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $newName = $_POST['newName'];
    $newEmail = $_POST['newEmail'];

    $sql = "UPDATE users SET name='$newName', email='$newEmail' WHERE id=$id";
    mysqli_query($conn, $sql);
}

// Delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $sql = "DELETE FROM users WHERE id=$id";
    mysqli_query($conn, $sql);
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD System</title>
    <link rel="stylesheet" href="crud.css">
    
</head>
<body>

<div class="container">
    <h2>CRUD System</h2>

    
    <form method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <button type="submit" name="submit">Add a User</button>
    </form>

  
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['name'] ?></td>
                <td><?= $row['email'] ?></td>
                <td>
                    <a href="?delete=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>

</body>
</html>
