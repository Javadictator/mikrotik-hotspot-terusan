<?php
// views/layout/sidebar.php
$current = $_GET['page'] ?? 'dashboard';
?>
<div class="bg-light sidebar p-3">
  <h4>MyCMS</h4>
  <ul class="nav nav-pills flex-column">
    <li class="nav-item">
      <a class="nav-link <?= $current==='dashboard' ? 'active' : '' ?>"
         href="index.php?page=dashboard">
        Dashboard
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?= $current==='voucher_list' ? 'active' : '' ?>"
         href="index.php?page=voucher_list">
        Voucher Management
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?= $current==='members' ? 'active' : '' ?>"
         href="index.php?page=members">
        Member Management
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?= $current==='reports' ? 'active' : '' ?>"
         href="index.php?page=reports">
        Financial Reports
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?= $current==='settings' ? 'active' : '' ?>"
         href="index.php?page=settings">
        Settings
      </a>
    </li>
    <li class="nav-item mt-2">
      <a class="nav-link text-danger" href="index.php?page=logout">
        Logout
      </a>
    </li>
  </ul>
</div>
