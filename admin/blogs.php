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
      <h2>Blogs</h2>
      <p>Manage blog posts and articles from this admin page.</p>
      <p>Create new posts, edit existing entries, and review published content.</p>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>