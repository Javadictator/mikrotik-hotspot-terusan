<?php
require_once __DIR__ . '/../lib/auth.php';
require_login();
include __DIR__ . '/layout/header.php';
include __DIR__ . '/layout/sidebar.php';
?>
<div class="content">
  <h1>Settings</h1>
  <!-- Konfigurasi CMS, change password, dst. -->
</div>
<?php include __DIR__ . '/layout/footer.php'; ?>
