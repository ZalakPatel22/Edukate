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
      <h2>Faculty</h2>
      <p>Manage faculty profiles and course assignments from this admin page.</p>
      <p>Update faculty details and review instructor activity.</p>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>