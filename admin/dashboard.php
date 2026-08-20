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
      <h3>Welcome back, <?= htmlspecialchars($_SESSION['admin_user']) ?></h3>
      <p>Here is a quick overview of your Edukate admin workspace.</p>
    </div>
    <a href="profile.php" class="admin-btn">View Profile</a>
  </div>

  <div class="admin-stats-grid">
    <div class="admin-stat-card">
      <span class="admin-stat-label">Total Students</span>
      <h4>1,240</h4>
    </div>
    <div class="admin-stat-card">
      <span class="admin-stat-label">Total Courses</span>
      <h4>86</h4>
    </div>
    <div class="admin-stat-card">
      <span class="admin-stat-label">Revenue</span>
      <h4>$24.8k</h4>
    </div>
    <div class="admin-stat-card">
      <span class="admin-stat-label">Faculty</span>
      <h4>32</h4>
    </div>
  </div>

  <div class="admin-grid-2">
    <div class="admin-panel">
      <div class="admin-panel-head">
        <h3>Enrollment Overview</h3>
        <span class="status-pill success">Live</span>
      </div>
      <div class="chart-placeholder">Enrollment Chart</div>
    </div>
    <div class="admin-panel">
      <div class="admin-panel-head">
        <h3>Payments Overview</h3>
        <span class="status-pill pending">Updated</span>
      </div>
      <div class="chart-placeholder">Payments Chart</div>
    </div>
  </div>

  <div class="admin-grid-3">
    <div class="admin-panel">
      <div class="admin-panel-head">
        <h3>Recent Students</h3>
      </div>
      <ul class="admin-list">
        <li>Alice Brown <span>New</span></li>
        <li>Michael Stone <span>Pending</span></li>
        <li>Chris Davis <span>Active</span></li>
      </ul>
    </div>
    <div class="admin-panel">
      <div class="admin-panel-head">
        <h3>Latest Payments</h3>
      </div>
      <ul class="admin-list">
        <li>$150 - Course A <span>Paid</span></li>
        <li>$80 - Bootcamp <span>Pending</span></li>
        <li>$220 - Bundle <span>Paid</span></li>
      </ul>
    </div>
    <div class="admin-panel">
      <div class="admin-panel-head">
        <h3>Notifications</h3>
      </div>
      <ul class="admin-list">
        <li>New review submitted <span>2m</span></li>
        <li>Course approval needed <span>15m</span></li>
        <li>Payment issue flagged <span>1h</span></li>
      </ul>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>
