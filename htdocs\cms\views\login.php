<?php
// Jika sudah login, langsung redirect ke dashboard
if (isset($_SESSION['user'])) {
  header("Location: index.php?page=dashboard");
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>
  <h2>Login</h2>
  <form method="POST" action="index.php?page=do_login">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Masuk</button>
  </form>
</body>
</html>
