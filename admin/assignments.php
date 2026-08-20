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
      <h3>Assignments</h3>
      <p>Track assignments and submission status.</p>
    </div>
    <a href="dashboard.php" class="admin-btn">Back</a>
  </div>
  <div class="admin-panel">
    <ul class="admin-list">
      <li>React Basics <span>Pending</span></li>
      <li>Final Project <span>Review</span></li>
      <li>Database Practice <span>Completed</span></li>
    </ul>
  </div>
</div>
<?php include('footer.php'); ?>