<?php
$host = "localhost:3310";
$user = "root";
$pass = "";
$db   = "tba_website";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$first_name = $_POST['first_name'];
$last_name  = $_POST['last_name'];
$email      = $_POST['email'];
$phone      = $_POST['phone'];
$message    = $_POST['message'];

$sql = "INSERT INTO contact_form (first_name, last_name, email, phone, message)
        VALUES (?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $first_name, $last_name, $email, $phone, $message);

if ($stmt->execute()) {
    // Redirect kembali ke halaman form dengan notifikasi sukses
    header("Location: tbazenara.php?success=1");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
