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
      <h2>Courses</h2>
      <p>Manage course listings, categories, and curriculum details from this admin page.</p>
      <p>Publish new courses, update descriptions, and manage enrollment status.</p>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>