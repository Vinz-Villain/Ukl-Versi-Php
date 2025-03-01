<?php
session_start();
$servername = "localhost";
$username = "root"
$password = "";
$dbname = "crud_login";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("UPDATE users SET gmail=?, password=? WHERE id=?");
    $stmt->bind_param("ssi", $email, $password, $id);

    if ($stmt->execute()) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error updating record: " . $stmt->error;
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM users WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "No record found.";
        exit();
    }
} else {
    echo "ID not provided.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pengguna</title>
    <link rel="stylesheet" type="text/css" href="crud.css">
</head>
<body>
    <h1>Edit Pengguna</h1>

    <form method="POST">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']); ?>">
        <input type="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>" required>
        <input type="password" name="password" value="<?php echo htmlspecialchars($row['password']); ?>" required>
        <button type="submit" name="update">Update</button>
    </form>

    <a href="crud.php">Kembali ke Daftar Pengguna</a>
</body>
</html>

<?php
$conn->close();
?>