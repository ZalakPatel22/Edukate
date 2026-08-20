<?php
session_start();
$courses = [];
require_once __DIR__ . '/courses-data.php';
?><!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="img/fav.png" />
  <!-- Author Meta -->
  <meta name="author" content="colorlib" />
  <!-- Meta Description -->
  <meta name="description" content="" />
  <!-- Meta Keyword -->
  <meta name="keywords" content="" />
  <!-- meta character set -->
  <meta charset="UTF-8" />
  <!-- Site Title -->
  <title>Edukate - Courses</title>

  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:900|Roboto:400,400i,500,700" rel="stylesheet" />
  <!--
      CSS
      =============================================
    -->
  <link rel="stylesheet" href="css/linearicons.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="css/owl.carousel.css" />
  <link rel="stylesheet" href="css/nice-select.css">
  <link rel="stylesheet" href="css/hexagons.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css" />
  <link rel="stylesheet" href="css/main.css" />

  <style>
    
    .banner-right {
    margin-top: 100px;
    text-align: right;
}
    .other-feature-item {
      border-radius: 15%;  
    }
    .popular-course-area .thumb img {
        width: 100%; 
        height: 350px; 
        object-fit: cover; 
        border-radius: 10px; 
    }     
    .course-section {
            max-width: 1200px;
            margin: auto;
        }

        .course-section h2 {
              font-size: 28px;
              color: #333;
              margin-bottom: 31px;
}

        .course-section p {
            font-size: 16px;
            color: #666;
            margin-bottom: 30px;
        }

        .course-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .course-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 300px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .course-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        .course-card h3 {
            font-size: 22px;
            margin-bottom: 10px;
            color: #333;
        }

        .course-card p {
            font-size: 14px;
            color: #666;
            margin-bottom: 15px;
        } 

.enroll-btn {
            background: linear-gradient(135deg, #932cbf, #9286a1);
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 25px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.2s ease;
            display: inline-block;
            text-decoration: none;
        }

        .enroll-btn:hover {
            background: linear-gradient(135deg,#932cbf, #9286a1);
            transform: scale(1.05);
        }

        .course-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 12px;
            margin-bottom: 16px;
        }

        @media (max-width: 768px) {
            .course-container {
                flex-direction: column;
                align-items: center;
            }
        }
      </style>
</head>

<body>
  <!-- ================ Start Header Area ================= -->
   <!-- ================ Start Header Area ================= -->
   <!-- <header class="default-header">
    <nav class="navbar navbar-expand-lg  navbar-light">
      <div class="container">
        <a class="navbar-brand" href="index.html">
         
           <h2 style="color:azure;">Edukate</h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="lnr lnr-menu"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="courses.html">Courses</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                Pages
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="faculty.html">Faculty</a>
                <a class="dropdown-item" href="course-details.html">Course Details</a>
              </div>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                Blog
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="blog-home.html">Blog Home</a>
                <a class="dropdown-item" href="blog-single.html">Blog Details</a>
              </div>
            </li>
            <li><a href="contacts.html">Contacts</a></li>

            <li>
              <button class="search">
                <span class="lnr lnr-magnifier" id="search"></span>
              </button>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="search-input" id="search-input-box">
      <div class="container">
        <form class="d-flex justify-content-between">
          <input type="text" class="form-control" id="search-input" placeholder="Search Here" />
          <button type="submit" class="btn"></button>
          <span class="lnr lnr-cross" id="close-search" title="Close Search"></span>
        </form>
      </div>
    </div>
  </header> -->
  <?php include('header.php'); ?>

  <!-- ================ End Header Area ================= -->

  <!-- ================ start banner Area ================= -->
  <section class="banner-area">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-12 banner-right">
            <h1 class="text-white">
              Courses
            </h1>
            <p class="mx-auto text-white  mt-20 mb-40">
              Explore 2,500+ industry-leading courses designed to elevate your skills and career.
            </p>
            <div class="link-nav">
              <span class="box">
                <a href="index.php">Home </a>
                <i class="lnr lnr-arrow-right"></i>
                <a href="courses.html">Courses</a>
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- ================ End banner Area ================= -->

  <!-- ================ Start Feature Area ================= -->
  <!-- <section class="feature-area">
    <div class="container-fluid">
      <div class="feature-inner row">
        <div class="col-lg-2 col-md-6">
          <div class="feature-item d-flex">
            <i class="ti-book"></i>
            <div class="ml-20">
              <h4>New Classes</h4>
              <p>
                In the history of modern astronomy, there is probably no one greater leap forward.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6">
          <div class="feature-item d-flex">
            <i class="ti-cup"></i>
            <div class="ml-20">
              <h4>Top Courses</h4>
              <p>
                In the history of modern astronomy, there is probably no one greater leap forward.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6">
          <div class="feature-item d-flex border-right-0">
            <i class="ti-desktop"></i>
            <div class="ml-20">
              <h4>Full E-Books</h4>
              <p>
                In the history of modern astronomy, there is probably no one greater leap forward.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- ================ End Feature Area ================= -->

  <!-- ================ Start Popular Course Area ================= -->
  <!-- <section class="popular-course-area section-gap">
    <div class="container-fluid">
      <div class="row justify-content-center section-title">
        <div class="col-lg-12">
          <h2>
            Popular Courses <br />
            Available Right Now
          </h2>
          <p>
            Top Courses in Edukate section already lists popular courses
          </p>
        </div>
      </div>
      <div class="owl-carousel popuar-course-carusel"  >
        <div class="single-popular-course">
          <div class="thumb">
            <img class="f-img img-fluid mx-auto" src="img/web-devlop.jpg" alt="">
          </div>
          <div class="details">
            <div class="d-flex justify-content-between mb-20">
              <p class="name">Web Devlopement</p>
            </div>
            <a href="#">
              <h4>Build dynamic, responsive, and high-performing websites with modern web technologies.</h4>
            </a>
            <div class="bottom d-flex mt-15">
              <ul class="list">
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
              </ul>
              <p class="ml-20">02 Reviews</p>
            </div>
          </div>
        </div>

        <div class="single-popular-course" >
          <div class="thumb">
            <img class="f-img img-fluid mx-auto" src="img/app-devlop.jpg" alt="" >
          </div>
          <div class="details">
            <div class="d-flex justify-content-between mb-20">
              <p class="name">App Devlopement</p>
            </div>
            <a href="#">
              <h4>Transform ideas into powerful apps with cutting-edge development tools and frameworks</h4>
            </a>
            <div class="bottom d-flex mt-15">
              <ul class="list">
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
              </ul>
              <p class="ml-20">04 Reviews</p>
            </div>
          </div>
        </div>

        <div class="single-popular-course">
          <div class="thumb">
            <img class="f-img img-fluid mx-auto" src="img/cloud-comp.jpg" alt="" >
          </div>
          <div class="details">
            <div class="d-flex justify-content-between mb-20">
              <p class="name">Cloud Computing</p>
            </div>
            <a href="#">
              <h4>Scale effortlessly with cloud solutions that redefine flexibility and performance</h4>
            </a>
            <div class="bottom d-flex mt-15">
              <ul class="list">
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
              </ul>
              <p class="ml-20">05 Reviews</p>
            </div>
          </div>
        </div>

        <div class="single-popular-course">
          <div class="thumb">
            <img class="f-img img-fluid mx-auto" src="img/ui-ux-devlop.jpg" alt="" >
          </div>
          <div class="details">
            <div class="d-flex justify-content-between mb-20">
              <p class="name">Ui-Ux Designer</p>
            </div>
            <a href="#">
              <h4>Design immersive experiences that blend creativity with intuitive user interactions</h4>
            </a>
            <div class="bottom d-flex mt-15">
              <ul class="list">
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
              </ul>
              <p class="ml-20">03 Reviews</p>
            </div>
          </div>
        </div>

        <div class="single-popular-course">
          <div class="thumb">
            <img class="f-img img-fluid mx-auto" src="img/ios-devlop.jpg" alt="" >
          </div>
          <div class="details">
            <div class="d-flex justify-content-between mb-20">
              <p class="name">IOS Devlopement</p>
            </div>
            <a href="#">
              <h4>Craft seamless, high-performance iOS apps with Apple's latest innovations</h4>
            </a>
            <div class="bottom d-flex mt-15">
              <ul class="list">
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
              </ul>
              <p class="ml-20">01 Reviews</p>
            </div>
          </div>
        </div>

        <div class="single-popular-course">
          <div class="thumb">
            <img class="f-img img-fluid mx-auto" src="img/cyber.jpg" alt="" >
          </div>
          <div class="details">
            <div class="d-flex justify-content-between mb-20">
              <p class="name">Cyber Security</p>
            </div>
            <a href="#">
              <h4>Protect digital assets with cutting-edge security strategies and ethical hacking techniques</h4>
            </a>
            <div class="bottom d-flex mt-15">
              <ul class="list">
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
              </ul>
              <p class="ml-20">01 Reviews</p>
            </div>
          </div>
        </div>

    </div>
  </section> -->
  <!-- ================ End Popular Course Area ================= -->


  <section class="course-section">
    <h2 style="text-align: center;">Explore Our Courses</h2>

    <div class="course-container">
      <?php foreach ($courses as $key => $course): ?>
        <div class="course-card">
            <img src="<?= htmlspecialchars($course['image']) ?>" alt="<?= htmlspecialchars($course['title']) ?>">
            <h3><?= htmlspecialchars($course['title']) ?></h3>
            <p><?= htmlspecialchars($course['description']) ?></p>
            <a href="course-details.php?course=<?= urlencode($key) ?>" class="enroll-btn">View Details</a>
        </div>
      <?php endforeach; ?>
    </div>
</section>
  <!-- ================ Start Registration Area ================= -->
  <section class="registration-area">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-5">
          <div class="section-title text-left text-white">
            <h2 class="text-white">
              Watch Our Trainers <br>
              in Live Action
            </h2>
            <p>
              Learn from expert mentors in real-time, get instant doubt clearance, and gain hands-on experience. Don't just watch—interact, engage, and master new skills live!
            </p>
          </div>
        </div>
        <div class="offset-lg-3 col-lg-4 col-md-6">
          <div class="course-form-section">
            <h3 class="text-white">Courses for Free</h3>
            <p class="text-white">It is high time for learning</p>
            <form class="course-form-area contact-page-form course-form text-right" id="myForm" action="mail.html" method="post">
              <div class="form-group col-md-12">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" onfocus="this.placeholder = ''"
                 onblur="this.placeholder = 'Name'">
              </div>
              <div class="form-group col-md-12">
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Phone Number" onfocus="this.placeholder = ''"
                 onblur="this.placeholder = 'Phone Number'">
              </div>
              <div class="form-group col-md-12">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" onfocus="this.placeholder = ''"
                 onblur="this.placeholder = 'Email Address'">
              </div>
              <div class="col-lg-12 text-center">
                <button class="btn text-uppercase">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ End Registration Area ================= -->

  <!-- ================ Start Feature Area ================= -->
  <section class="other-feature-area">
    <div class="container">
      <div class="feature-inner row">
        <div class="col-lg-12">
          <div class="section-title text-left">
            <h2>
              Features That <br />
              Can Avail By Everyone
            </h2>
            <p>
              Edukate offers a seamless and accessible learning experience for students, professionals, and enthusiasts alike. 
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="other-feature-item">
            <span style="font-size: 50px;">📁</span>
            <h4>Exclusive Resource Library</h4>
            <div>
              <p>
                Access a rich collection of project files, templates, and study materials to reinforce your learning and skill development.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt--160">
          <div class="other-feature-item">
            <span style="font-size: 50px;">🎧</span>
            <h4>24/7 Live Support</h4>
            <div>
              <p>
                Our dedicated support team ensures your learning experience is smooth by offering instant help and clarifications.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt--260">
          <div class="other-feature-item">
            <span style="font-size: 50px;">📚</span>
            <h4>+100 Premium Courses</h4>
            <div>
              <p>
                Explore a vast selection of tech, business, design, AI, cybersecurity, and other trending domains curated for career growth.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="other-feature-item">
            <span style="font-size: 50px;">👨‍🏫</span>
            <h4>Interactive & Engaging Learning</h4>
            <div>
              <p>
                Enjoy real-world projects, hands-on exercises, and assessments to enhance your expertise.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt--160">
          <div class="other-feature-item">
            <span style="font-size: 50px;">🏆</span>
            <h4>Certification & Career Advancement</h4>
            <div>
              <p>
               Earn globally recognized certificates to enhance your resume and open doors to top career opportunities.</p> 
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt--260">
          <div class="other-feature-item">
            <span style="font-size: 50px;">🌍</span>
            <h4>Community-Driven Learning
            </h4>
            <div>
              <p>
                Join a global network of learners and professionals, collaborate, and grow with like-minded individuals.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <!-- ================ End Feature Area ================= -->

  <!-- ================ start footer Area ================= -->
  <!-- <footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Categories</h4>
					<ul>
						<li><a href="#">Digital Marketing</a></li>
						<li><a href="#">Stock Marketing</a></li>
						<li><a href="#">Programming</a></li>
						<li><a href="#">Machine Learning</a></li>
           
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Company</h4>
					<ul>
						<li><a href="#">Jobs</a></li>
						<li><a href="#">Investor Relations</a></li>
            <li><a href="#">Resume Bulider</a></li>
						<li><a href="#">Privacy</a></li>
            <li><a href="#">Sitemap</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Features</h4>
					<ul>
						<li><a href="#">Jobs</a></li>
						<li><a href="#">Brand Assets</a></li>
						<li><a href="#">Investor Relations</a></li>
						<li><a href="#">Terms of Service</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Resources</h4>
					<ul>
						<li><a href="#">Guides</a></li>
						<li><a href="#">Research</a></li>
						<li><a href="#">Experts</a></li>
						<li><a href="#">Agencies</a></li>
					</ul>
				</div>
				<div class="col-lg-4 col-md-6 single-footer-widget">
					<h4>Newsletter</h4>
					<p>You can trust us. we only send promo offers,</p>
					<div class="form-wrap" id="mc_embed_signup">
						<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
						 method="get" class="form-inline">
							<input class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
							 required="" type="email">
							<button class="click-btn btn btn-default text-uppercase">subscribe</button>
							<div style="position: absolute; left: -5000px;">
								<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
							</div>
							<div class="info"></div>
						</form>
					</div>
				</div>
			</div>
			<div class="footer-bottom row align-items-center">
				<p class="footer-text m-0 col-lg-8 col-md-12">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Edukate Teame</a>
</p>
				<div class="col-lg-4 col-md-12 footer-social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-dribbble"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a>
				</div>
			</div>
		</div>
	</footer> -->
  <?php include('footer.php'); ?>
  <!-- ================ End footer Area ================= -->

  <script src="js/vendor/jquery-2.2.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
    crossorigin="anonymous"></script>
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