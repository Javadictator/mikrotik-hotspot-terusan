<?php
session_start();
require('../config/database.php'); // koneksi PDO ke MySQL
require_once('../lib/auth.php');  // auth middleware

// Tentukan halaman default
$page = $_GET['page'] ?? 'login';

switch ($page) {
  case 'do_login':
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password_hash'])) {
      $_SESSION['user']    = $user['username'];
      $_SESSION['user_id'] = $user['id'];
      header("Location: index.php?page=dashboard");
      exit;
    }

    // login gagal
    echo "<p style='color:red;'>Username atau password salah.</p>";
    echo "<a href='index.php?page=login'>Kembali ke login</a>";
    exit;

  case 'dashboard':
    require_login();
    include('../views/dashboard.php');
    break;

  case 'voucher_list':
    require_login();
    include('../views/voucher_list.php');
    break;

  case 'members':
    require_login();
    include('../views/members.php');
    break;

  case 'reports':
    require_login();
    include('../views/reports.php');
    break;

  case 'settings':
    require_login();
    include('../views/settings.php');
    break;

  case 'logout':
    logout();
    header("Location: index.php?page=login");
    exit;

  case 'login':
  default:
    // jika sudah login, langsung ke dashboard
    if (is_logged_in()) {
      header("Location: index.php?page=dashboard");
      exit;
    }
    include('../views/login.php');
    break;
}
?>
