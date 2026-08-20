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
      <h2>Reports</h2>
      <p>View analytics and reports from this admin page.</p>
      <p>Monitor site performance, enrollment trends, and engagement data.</p>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>