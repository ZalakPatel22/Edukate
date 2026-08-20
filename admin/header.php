<?php
include_once __DIR__ . '/security.php';
$is_admin_logged_in = isset($_SESSION['admin_user']);
if ($is_admin_logged_in) {
    enforce_admin_session_timeout();
}
$current_page = basename($_SERVER['PHP_SELF']);
$current_title = str_replace('.php', '', $current_page);
$current_title = $current_title === 'index' ? 'Login' : ucwords(str_replace(['-', '_'], ' ', $current_title));
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Panel</title>
  <link rel="stylesheet" href="../Edukate/css/bootstrap.css" />
  <link rel="stylesheet" href="../Edukate/css/font-awesome.min.css" />
  <link rel="stylesheet" href="../Edukate/css/linearicons.css" />
  <link rel="stylesheet" href="../Edukate/css/main.css" />
  <link rel="stylesheet" href="css/admin.css" />
</head>
<body class="admin-body">
<?php if ($is_admin_logged_in): ?>
  <div class="admin-wrapper">
    <aside class="admin-sidebar">
      <div class="admin-brand">
        <div class="brand-icon">E</div>
        <div>
          <h4>Edukate</h4>
          <p>Admin Panel</p>
        </div>
      </div>
      <nav class="admin-sidebar-nav">
        <a href="dashboard.php" class="<?= $current_page === 'dashboard.php' ? 'active' : '' ?>">Dashboard</a>
        <a href="students.php" class="<?= $current_page === 'students.php' ? 'active' : '' ?>">Students</a>
        <a href="faculty.php" class="<?= $current_page === 'faculty.php' ? 'active' : '' ?>">Faculty</a>
        <a href="courses.php" class="<?= $current_page === 'courses.php' ? 'active' : '' ?>">Courses</a>
        <a href="categories.php" class="<?= $current_page === 'categories.php' ? 'active' : '' ?>">Categories</a>
        <a href="blogs.php" class="<?= $current_page === 'blogs.php' ? 'active' : '' ?>">Blogs</a>
        <a href="assignments.php" class="<?= $current_page === 'assignments.php' ? 'active' : '' ?>">Assignments</a>
        <a href="payments.php" class="<?= $current_page === 'payments.php' ? 'active' : '' ?>">Payments</a>
        <a href="reviews.php" class="<?= $current_page === 'reviews.php' ? 'active' : '' ?>">Reviews</a>
        <a href="certificates.php" class="<?= $current_page === 'certificates.php' ? 'active' : '' ?>">Certificates</a>
        <a href="reports.php" class="<?= $current_page === 'reports.php' ? 'active' : '' ?>">Reports</a>
        <a href="settings.php" class="<?= $current_page === 'settings.php' ? 'active' : '' ?>">Settings</a>
        <a href="profile.php" class="<?= $current_page === 'profile.php' ? 'active' : '' ?>">Profile</a>
        <a href="logout.php">Logout</a>
      </nav>
    </aside>
    <div class="admin-main">
      <header class="admin-topbar">
        <div class="admin-topbar-title">
          <h3><?= htmlspecialchars($current_title) ?></h3>
          <p>Welcome back, <?= htmlspecialchars($_SESSION['admin_user']) ?></p>
        </div>
        <div class="admin-topbar-actions">
          <div class="admin-search">
            <span>🔍</span>
            <input type="text" placeholder="Search..." />
          </div>
          <a href="notifications.php" class="admin-icon-badge">🔔</a>
          <a href="profile.php" class="admin-profile-pill">Profile</a>
        </div>
      </header>
      <main class="admin-content">
<?php else: ?>
  <div class="admin-guest-shell">
<?php endif; ?>
