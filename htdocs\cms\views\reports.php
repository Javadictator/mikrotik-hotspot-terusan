<?php
require_once __DIR__ . '/../lib/auth.php';
require_login();
include __DIR__ . '/layout/header.php';
include __DIR__ . '/layout/sidebar.php';
?>
<div class="content">
  <h1>Financial Reports</h1>
  <!-- Grafik dan laporan keuangan di sini -->
</div>
<?php include __DIR__ . '/layout/footer.php'; ?>
