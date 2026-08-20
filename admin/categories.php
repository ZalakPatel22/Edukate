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
      <h3>Categories</h3>
      <p>Organize course categories and learning tracks.</p>
    </div>
    <a href="dashboard.php" class="admin-btn">Back</a>
  </div>
  <div class="admin-panel">
    <ul class="admin-list">
      <li>Web Development <span>Active</span></li>
      <li>Business <span>Active</span></li>
      <li>Design <span>Draft</span></li>
    </ul>
  </div>
</div>
<?php include('footer.php'); ?>