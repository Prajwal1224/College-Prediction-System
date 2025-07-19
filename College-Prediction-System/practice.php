<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="practice.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="icon" type="x-icon" href="jagran_logo1.jpg">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>About Us - College Dekho</title>
</head>
<body>
	<nav class="navbar sticky-top navbar-expand-sm navbar-dark bg-dark">
		<a class="navbar-brand" href="Home.php">
    		<img src="jagran_logo1.jpg" width="30" height="30" class="d-inline-block align-top" alt=""> College Dekho
  		</a>
  		<ul class="navbar-nav ml-auto">
    		<li class="nav-item">
      			<a class="nav-link" href="Home.php">Home</a>
    		</li>
    		<li class="nav-item active">
      			<a class="nav-link" href="practice.php">About Us</a>
    		</li>
    		<li class="nav-item">
      			<a class="nav-link" href="login.php">Not <?php
      			if(isset($_SESSION['username'])) {
      				echo $_SESSION['username'];
      			}
      			?>? Logout</a>
    		</li>
  		</ul>
	</nav>

	<div class="background">
		<i class="fa fa-quote-left"></i>
		<p>"Informed choices lead to brighter futures. Our mission is to help every CET and JEE student in Maharashtra discover their best-fit engineering college."</p>
	</div>

	<div class="background">
		<h2>About College Dekho</h2>
		<p><strong>College Dekho</strong> is an innovative platform built specifically for students across Maharashtra who are preparing for <strong>MHT-CET</strong> and <strong>JEE Main</strong>. Our tool helps you predict the best possible engineering colleges you can get into based on your scores, preferences, and academic performance.</p>

		<p>Whether you're from Pune, Mumbai, Nagpur, Nashik, or Aurangabad — we bring you detailed insights into top engineering institutions like <strong>COEP</strong>, <strong>VJTI</strong>, <strong>PICT</strong>, <strong>MIT-WPU</strong>, and many others.</p>

		<h4>🚀 What We Offer</h4>
		<ul>
			<li>🎯 Accurate college predictions based on CET & JEE scores</li>
			<li>📊 Cut-off trends, rankings, and course availability</li>
			<li>🔍 Compare colleges to make better choices</li>
			<li>💡 Tips on admission process, counselling, and scholarships</li>
		</ul>

		<h4>🌐 Why Choose Us?</h4>
		<p>With simplified tools, easy-to-use design, and real-time prediction logic, our goal is to make your engineering admission journey <strong>smarter, faster, and stress-free</strong>.</p>

		<h4>📈 Our Vision</h4>
		<p>To become Maharashtra’s most trusted college prediction platform, helping lakhs of students every year take the next step toward their engineering careers.</p>

		<h4>🤝 Get in Touch</h4>
		<p>Have feedback or questions? We’re here to help! Reach out via our contact form or connect with us on social media.</p>
	</div>

	<!-- Footer -->
	<footer class="bg-dark text-white text-center py-3 mt-4">
		&copy; <?php echo date("Y"); ?> <strong>College Dekho</strong> | Designed in Maharashtra.<br>
		Made for aspiring engineers by <a href="https://github.com/prajwal1224" target="_blank">Prajwal Newase</a>
	</footer>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>
