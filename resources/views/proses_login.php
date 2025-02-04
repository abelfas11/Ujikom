<?php
session_start();

// Contoh validasi login sederhana
$username = $_POST['username'];
$password = $_POST['password'];

// Contoh username dan password (bisa diganti dengan database)
if ($username === 'admin' && $password === 'password') {
  // Set session untuk menandai pengguna sudah login
  $_SESSION['loggedin'] = true;
  $_SESSION['username'] = $username;

  // Redirect ke halaman dashboard
  header('Location: index.php');
  exit;
} else {
  // Jika login gagal, kembalikan ke halaman login dengan pesan error
  header('Location: login.php?error=1');
  exit;
}
?>