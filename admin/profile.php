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
      <h3>Admin Profile</h3>
      <p>Manage your profile information and account preferences.</p>
    </div>
    <a href="dashboard.php" class="admin-btn">Back</a>
  </div>
  <div class="admin-grid-2">
    <div class="admin-panel">
      <div class="admin-panel-head">
        <h3>Profile Details</h3>
      </div>
      <ul class="admin-list">
        <li><strong>Username</strong> <span><?= htmlspecialchars($_SESSION['admin_user']) ?></span></li>
        <li><strong>Role</strong> <span>Administrator</span></li>
        <li><strong>Status</strong> <span>Active</span></li>
      </ul>
    </div>
    <div class="admin-panel">
      <div class="admin-panel-head">
        <h3>Quick Actions</h3>
      </div>
      <ul class="admin-list">
        <li><a href="settings.php">Update Settings</a></li>
        <li><a href="notifications.php">Open Notifications</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>