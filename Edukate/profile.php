<?php
session_start();

if (!isset($_SESSION['user'])) {
  header('Location: signin.php');
  exit;
}

$user = $_SESSION['user'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signout'])) {
  if (session_status() === PHP_SESSION_ACTIVE) {
    $_SESSION = [];
    if (ini_get('session.use_cookies')) {
      $params = session_get_cookie_params();
      setcookie(session_name(), '', time() - 42000, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
    }
    session_destroy();
  }

  session_start();
  $_SESSION['auth_message'] = 'You have been signed out. Please sign in again.';
  $_SESSION['auth_message_type'] = 'error';
  header('Location: signin.php');
  exit;
}
?><!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="shortcut icon" href="img/fav.png" />
  <meta name="author" content="colorlib" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta charset="UTF-8" />
  <title>Edukate - Profile</title>

  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:900|Roboto:400,400i,500,700" rel="stylesheet" />
  <link rel="stylesheet" href="css/linearicons.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="css/owl.carousel.css" />
  <link rel="stylesheet" href="css/nice-select.css">
  <link rel="stylesheet" href="css/hexagons.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css" />
  <link rel="stylesheet" href="css/main.css" />
</head>

<body>
  <?php include('header.php'); ?>
  <style>
    /* Hide header search input on profile page */
    #search-input-box { display: none !important; }
  </style>

  <section class="auth-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="auth-card profile-card">
            <button class="profile-close" id="profileClose" aria-label="Close">&times;</button>
            <h2>My Profile</h2>
            <p>Here is your signed-in account information.</p>

            <div class="profile-info">
              <div class="profile-item">
                <strong>Name</strong>
                <span><?= htmlspecialchars($user['name']) ?></span>
              </div>
              <div class="profile-item">
                <strong>Email</strong>
                <span><?= htmlspecialchars($user['email']) ?></span>
              </div>
              <div class="profile-item">
                <strong>Phone</strong>
                <span><?= htmlspecialchars($user['phone'] ?? '-') ?></span>
              </div>
            </div>

            <form method="post" class="mt-30">
              <button type="submit" name="signout" class="auth-btn">Sign Out</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var btn = document.getElementById('profileClose');
      if (!btn) return;
      btn.addEventListener('click', function(e) {
        e.preventDefault();
        var card = document.querySelector('.profile-card');
        if (card) card.style.display = 'none';
        window.location.href = 'index.php';
      });
    });
  </script>

  <?php include('footer.php'); ?>
</body>
</html>
