<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="Home.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="icon" type="x-icon" href="jagran_logo1.jpg">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>College Dekho - Maharashtra Engineering Predictor</title>
</head>
<body>
	<nav class="navbar sticky-top navbar-expand-sm navbar-dark bg-dark">
		<a class="navbar-brand" href="home.php">
    		<img src="jagran_logo1.jpg" width="30" height="30" class="d-inline-block align-top" alt=""> College Sikhsha
  		</a>
  		<ul class="navbar-nav ml-auto">
    		<li class="nav-item active">
      			<a class="nav-link" href="home.php">Home</a>
    		</li>
    		<li class="nav-item">
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
		<p>"Choosing the right engineering college in Maharashtra is crucial. CET and JEE scores can open the doors to top institutes in Pune, Mumbai, Nagpur, and beyond!"</p>
	</div>

	<div class="background">
		<h2>Maharashtra Engineering College Predictor</h2><br>
		<form method="post" action="home.php">
			<div id="center">
				<input class="ip" type="number" name="board" placeholder="12th Board Percentage" required><br><br>
				<input class="ip" type="number" name="cet" placeholder="MHT-CET Score" required><br><br>
				<input class="ip" type="number" name="jee" placeholder="JEE Mains Score" required><br><br>
				<input class="button" type="submit" name="submit" value="Predict College">
			</div>
		</form>
	</div>

	<?php 
		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		if (isset($_POST['submit'])) {
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$board = test_input($_POST['board']);
				$cet = test_input($_POST['cet']);
				$jee = test_input($_POST['jee']);

				echo "<div class='background'>";
				echo "<h2>Predicted Colleges in Maharashtra</h2>";

				if ($board < 60) {
					echo "❌ Sorry, colleges in Maharashtra generally require at least 60% in 12th board exams.";
				} else {
					// Weighted average: 60% board + 20% CET + 20% JEE
					$normalized_cet = ($cet / 200) * 100;
					$normalized_jee = ($jee / 300) * 100;
					$score = ($board * 0.6) + ($normalized_cet * 0.2) + ($normalized_jee * 0.2);

					// College predictions (mocked ranges)
					if ($score >= 85) {
						echo "✅ You are eligible for:<br>";
						echo "- College of Engineering Pune (COEP)<br>";
						echo "- VJTI Mumbai<br>";
						echo "- ICT Mumbai<br>";
					} elseif ($score >= 70) {
						echo "✅ You are eligible for:<br>";
						echo "- MIT-WPU Pune<br>";
						echo "- PICT Pune<br>";
						echo "- Sardar Patel Institute of Technology (SPIT), Mumbai<br>";
					} elseif ($score >= 60) {
						echo "✅ You are eligible for:<br>";
						echo "- Sinhgad Institutes Pune<br>";
						echo "- DY Patil College of Engineering, Akurdi<br>";
						echo "- AISSMS Pune<br>";
					} else {
						echo "⚠️ You may qualify for Tier-3 private colleges. Try improving your scores or consider management quota.";
					}
				}
				echo "</div>";
			}
		}
	?>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>
