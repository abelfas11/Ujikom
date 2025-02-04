<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  // Jika belum login, redirect ke halaman login
  header('Location: login.php');
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <!-- Load AdminLTE CSS -->
  <link rel="stylesheet" href="adminlte/dist/css/adminlte.min.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index.php" class="nav-link">Home</a>
        </li>
      </ul>
    </nav>

    <!-- Sidebar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <a href="index.php" class="brand-link">
        <span class="brand-text font-weight-light">AdminLTE</span>
      </a>
      <div class="sidebar">
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>

    <!-- Konten Dashboard -->
    <div class="content-wrapper">
      <section class="content">
        <div class="container-fluid">
          <h1>Selamat datang, <?php echo $_SESSION['username']; ?>!</h1>
        </div>
      </section>
    </div>

    <!-- Footer -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2023 AdminLTE.</strong> All rights reserved.
    </footer>
  </div>

  <!-- Load AdminLTE JS dan dependencies -->
  <script src="adminlte/plugins/jquery/jquery.min.js"></script>
  <script src="adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="adminlte/dist/js/adminlte.min.js"></script>
</body>
</html>