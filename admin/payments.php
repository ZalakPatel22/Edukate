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
      <h2>Payments</h2>
      <p>Manage payment records and transaction details from this admin page.</p>
      <p>Review payment history, subscriptions, and billing issues.</p>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>