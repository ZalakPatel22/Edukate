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
      <h2>Contacts</h2>
      <p>Manage contact inquiries and messages from this admin page.</p>
      <p>Review submissions and respond to prospective students or partners.</p>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>