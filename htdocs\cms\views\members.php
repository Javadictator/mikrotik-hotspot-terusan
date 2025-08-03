<?php
require_once __DIR__ . '/../lib/auth.php';
require_login();
include __DIR__ . '/layout/header.php';
include __DIR__ . '/layout/sidebar.php';
?>
<div class="content">
  <h1>Member Management</h1>
  <!-- Tabel anggota, tambah/edit member di sini -->
</div>
<?php include __DIR__ . '/layout/footer.php'; ?>
