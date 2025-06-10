<?php
session_start(); // WAJIB di baris pertama
include 'koneksi.php';

// Cek apakah form sudah dikirimkan
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Pastikan data tersedia
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if (!isset($_POST['agree'])) {
        echo "You must agree to the terms and conditions.";
        exit;
    }

    // Cek apakah semua data diisi
    if (empty($name) || empty($email) || empty($password)) {
        echo "Semua field harus diisi!";
        exit;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    // Cek apakah email sudah terdaftar
    $check = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    if (mysqli_num_rows($check) > 0) {
        echo "Email sudah terdaftar. Silakan gunakan email lain.";
    } else {
        // Simpan data ke database
        $query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            // Login otomatis setelah register
            $_SESSION['user'] = [
                'name' => $name,
                'email' => $email
            ];
            header("Location: tbazenara.php");
            exit;
        }

    }
}
?>