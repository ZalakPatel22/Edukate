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
      <h3>Reviews</h3>
      <p>Monitor course feedback and testimonials.</p>
    </div>
    <a href="dashboard.php" class="admin-btn">Back</a>
  </div>
  <div class="admin-panel">
    <ul class="admin-list">
      <li>Excellent teaching <span>5★</span></li>
      <li>Great course flow <span>4★</span></li>
      <li>Needs more examples <span>3★</span></li>
    </ul>
  </div>
</div>
<?php include('footer.php'); ?>