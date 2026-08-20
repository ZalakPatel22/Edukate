<?php
session_start();

$message = '';
$messageType = 'success';

if (isset($_SESSION['user'])) {
  header('Location: profile.php');
  exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $fullName = trim($_POST['full_name'] ?? '');
  $email = trim($_POST['email'] ?? '');
  $phone = trim($_POST['phone'] ?? '');
  $password = trim($_POST['password'] ?? '');
  $confirmPassword = trim($_POST['confirm_password'] ?? '');

  if ($fullName === '' || $email === '' || $phone === '' || $password === '' || $confirmPassword === '') {
    $message = 'Please fill in all fields.';
    $messageType = 'error';
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $message = 'Please enter a valid email address.';
    $messageType = 'error';
  } elseif (!preg_match('/^[0-9\s+\-()]{7,20}$/', $phone)) {
    $message = 'Please enter a valid phone number.';
    $messageType = 'error';
  } elseif ($password !== $confirmPassword) {
    $message = 'Passwords do not match.';
    $messageType = 'error';
  } else {
    $_SESSION['auth_message'] = 'Account created successfully. Please sign in.';
    $_SESSION['auth_message_type'] = 'success';
    header('Location: signin.php');
    exit;
  }
}
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="shortcut icon" href="img/fav.png" />
  <meta name="author" content="colorlib" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta charset="UTF-8" />
  <title>Edukate - Sign Up</title>

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
    /* Hide header search input on signup page */
    #search-input-box { display: none !important; }
  </style>

  <section class="auth-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="auth-card">
            <h2>Create an Account</h2>
            <p>Join Edukate and start learning with expert-led courses.</p>

            <?php if (!empty($message)) : ?>
              <div class="auth-alert <?= $messageType === 'success' ? 'success' : 'error' ?>">
                <?= htmlspecialchars($message) ?>
              </div>
            <?php endif; ?>

            <form class="auth-form" method="post">
              <div class="form-group">
                <label for="full_name">Full Name</label>
                <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Enter your full name" required>
              </div>
              <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Create a password" required>
              </div>
              <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required>
              </div>
              <button type="submit" class="auth-btn">Create Account</button>
            </form>

            <div class="auth-footer">
              <p>Already have an account? <a href="signin.php" class="auth-link">Sign In</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include('footer.php'); ?>
</body>
</html>
