<?php
session_start();
?><!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="shortcut icon" href="img/fav.png" />
  <meta name="author" content="colorlib" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta charset="UTF-8" />
  <title>Edukate - AI Quiz Generator</title>

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
.ai-hero {
  padding: 100px 0 80px;
  background: linear-gradient(135deg, rgba(124, 50, 255, 0.95), rgba(92, 45, 255, 0.85));
  position: relative;
}
.ai-hero .about-content h1,
.ai-hero .about-content p {
  color: #fff;
}

.navbar-nav {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
}

.navbar-nav li {
  padding: 0;
}

.navbar-nav li a,
.navbar-nav li .search {
  color: #fff;
}

.navbar-nav li a {
  display: inline-block;
  padding: 10px 15px;
  text-transform: uppercase;
  font-size: 12px;
  font-weight: 500;
}

.navbar .dropdown-menu {
  display: none;
  position: absolute;
  background: #fff;
  padding: 10px 0;
  border-radius: 12px;
  box-shadow: 0 16px 35px rgba(0,0,0,0.12);
  z-index: 999;
}

.navbar .dropdown:hover .dropdown-menu {
  display: block;
  opacity: 1;
  visibility: visible;
}

.navbar-nav .dropdown .dropdown-item {
  color: #222;
  padding: 10px 20px;
  font-size: 12px;
}

.feature-section {
  padding: 70px 0;
}

.section-title {
  font-size: 32px;
  font-weight: 700;
  margin-bottom: 10px;
}

.section-subtitle {
  color: #6b7280;
  max-width: 700px;
  margin: 0 auto 40px;
}

.feature-grid {
  display: grid;
  grid-template-columns: repeat(4, minmax(0, 1fr));
  gap: 24px;
}

.feature-card {
  background: #fff;
  border-radius: 20px;
  border: 1px solid rgba(124, 50, 255, 0.12);
  box-shadow: 0 20px 45px rgba(124, 50, 255, 0.08);
  padding: 28px;
  color: #111827;
  text-decoration: none;
  transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.feature-card:hover {
  transform: translateY(-3px);
  box-shadow: 0 24px 55px rgba(124, 50, 255, 0.12);
}

.feature-card h4 {
  margin-bottom: 10px;
}

.ai-form .form-group {
  margin-bottom: 18px;
}

.ai-form .form-control {
  border: 1px solid #e5e7eb;
  border-radius: 12px;
  padding: 16px 18px;
  width: 100%;
  background: #fff;
}

.ai-form textarea.form-control {
  min-height: 240px;
}

.admin-panel,
.ai-panel {
  background: #fff;
  border-radius: 20px;
  border: 1px solid rgba(124, 50, 255, 0.12);
  box-shadow: 0 20px 45px rgba(124, 50, 255, 0.08);
  padding: 28px;
}

.admin-panel-head,
.ai-panel-head {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
}

.status-pill {
  display: inline-block;
  padding: 5px 12px;
  border-radius: 999px;
  background: #eef2ff;
  color: #5a2ff3;
  font-size: 12px;
  font-weight: 700;
}

@media (max-width: 991px) {
  .feature-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }
}

@media (max-width: 767px) {
  .feature-grid {
    grid-template-columns: 1fr;
  }
}
</style>

<section class="banner-area relative ai-hero" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">AI Quiz Generator</h1>
                <p class="text-white link-nav">Generate quick practice quizzes for any topic and test your understanding.</p>
            </div>
        </div>
    </div>
</section>

<section class="feature-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="admin-panel">
                    <h3>Generate Quiz</h3>
                    <p>Enter a topic and see sample questions created by AI.</p>
                    <form class="ai-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Topic, e.g. HTML basics" />
                        </div>
                        <button type="button" class="auth-btn">Generate Quiz</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>

  <script src="js/vendor/jquery-2.2.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="js/vendor/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/parallax.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/hexagons.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>