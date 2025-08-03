<?php
// views/dashboard.php
require_once __DIR__ . '/../lib/auth.php';
require_login();
include __DIR__ . '/layout/header.php';
include __DIR__ . '/layout/sidebar.php';
?>
<div class="content">
  <h1>Dashboard</h1>
  <p>Selamat datang, <?= htmlspecialchars($_SESSION['user']) ?>!</p>
  <!-- Tambahkan widget atau ringkasan statistik di sini -->
</div>
<?php include __DIR__ . '/layout/footer.php'; ?>
