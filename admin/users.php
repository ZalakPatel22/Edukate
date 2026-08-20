<?php
session_start();
if (!isset($_SESSION['admin_user'])) {
  header('Location: index.php');
  exit;
}
?>
<?php include('header.php'); ?>
<div class="row">
  <div class="col-lg-12">
    <div class="admin-card">
      <h2>Users</h2>
      <p>Manage site users from this admin page.</p>
      <p>Review registered users, update account status, and track activity.</p>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>