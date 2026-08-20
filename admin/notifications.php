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
      <h2>Notifications</h2>
      <p>Manage site notifications and alerts from this admin page.</p>
      <p>Configure announcements, reminders, and system messages.</p>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>