<?php
session_start();
if (!isset($_SESSION['admin_user'])) {
  header('Location: index.php');
  exit;
}
?>
<?php include('header.php'); ?>
<div class="admin-panel">
  <div class="admin-panel-head">
    <div>
      <h3>Students</h3>
      <p>Manage learners and view recent enrollments.</p>
    </div>
    <a href="dashboard.php" class="admin-btn">Back</a>
  </div>
  <div class="admin-panel">
    <ul class="admin-list">
      <li>John Carter <span>Active</span></li>
      <li>Mina Patel <span>Pending</span></li>
      <li>Rafiq Ali <span>Completed</span></li>
    </ul>
  </div>
</div>
<?php include('footer.php'); ?>