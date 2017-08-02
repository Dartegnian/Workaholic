<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Workaholic Prizes</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="assets/images/logosmallsquare.png">
		<!-- CSS -->
		<link href="assets/css/styles-dark.css" rel="stylesheet"> <!-- Dark theme -->
		<link rel="stylesheet" type="text/css" href="assets/css/textrotator.css"/>
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<!-- Scripts -->
		<script src='assets/js/jquery.min.js'></script>
		<script src='assets/js/textrotator.js'></script>
		<script>
			$(document).ready(function(){
				$(".header .rotate").textrotator({
					animation: "dissolve",
					speed: 2000
				});
			});
			$(function() {
				$("#backtotop").click(function() {
					$("body,html").animate({
						scrollTop: 0
					}, 4500);
					return false
				})
			});
			function popup() { // Declare a function
    			alert("Invalid or empty credentials.");
			}
			function Logout() {
				window.location="index.php";
			}
		</script>
	</head>
	<body>
		<header>
			<h1 style="display: inline;"> <a href="index.php"><img id="logo" src="assets\images\logowhite.png"/></a></h1>
			<button style="display: inline-block;float: right; margin-left: -5px; margin-top: 4px; margin-right: 30px;" class="userbutt" onclick="Logout()">Logout</button>
			<form action="dashboard.php" method="post" style="display: inline;">
				<table border="0" style="display: inline; float: right;">
					<tr style="display: inline;">
					<td align="left"><input class="inputfield" type="text" readonly="yes" name="username" value="<?php
					$username = $_POST['username'];
					echo $username;
					?>"
				size="20" maxlength="50" style="background: url(assets/images/people.png); background-color: rgba(100, 100, 100, 0.3); background-size: 30px; padding-left: 35px; background-repeat: no-repeat;"></td>
					</tr>
					<tr style="display: inline;">
					<td colspan="2" align="center">
					</td>
					</tr>
				</table>
			</form>
			<nav>
				<a id="current" style="border-right: 1px solid #e4e4e4;">Dashboard</a>
				<a href="dashboard.php" style="padding-left: 25px;">Summary</a>
				<a href="leaderboard.php">Leaderboard</a>
				<a id="current">Available Prizes</a>
			</nav>
		</header>
		<section id="filler">
		</section>	
		<section class="fullbackground" id="vertmenu">
			<div class="verticalmenu" id="juan">
				<div class="vertcontain">
					<ul>
						<li>
							<img id="partnerimg" src="assets\images\partner1.jpg">
						</li>
						<li>
							<img id="partnerimg" src="assets\images\partner2.jpg">
						</li>
						<li>
							<img id="partnerimg" src="assets\images\partner3.jpg">
						</li>
						<li>
							<img id="partnerimg" src="assets\images\partner7.jpg">
						</li>
						<li>
							<img id="partnerimg" src="assets\images\partner4.jpg">
						</li>
						<li>
							<img id="partnerimg" src="assets\images\partner6.jpg">
						</li>
						<li>
							<img id="partnerimg" src="assets\images\partner5.jpg">
						</li>
					</ul>
				</div>
			</div>
			<div id="rightcontain">
				<h1>Countless of Partners</h1>
				<p>As of now, the Workaholic login suite currently has 7 main partners to help employees get to their workplace safely and, most importantly, on time.</p>
				<br>
				<p>Grab and Uber Philippines have partnered with us recently to introduce an emergency transport system designed to help those who are late for work get to their destination on time.</p>
				<br>
				<p>Several international fast food companies (McDonalds, KFC, and Jollibee) have partnered with us to help those who are late, or are in a rush, get their day's meal. Still hot, and ready to eat. All upon your arrival to work.</p>
				<br><br>
				<button class="contactbutt" id="partnerbutt" onclick="Redirect2()">PARTNER UP</button>
			</div>
		</section>
		<footer>
			<div id="backtotop">
				<i id="chevron"></i>
			</div>
			<div id="footstuff">
				<a href="http://tanda.co" target="_blank">
					<img src="assets\images\logosmall.png">
				</a>
				<div class="footcontain">
					<h4>About Workaholic</h4>
					<p>Learn more about the automated login suite, its structure, how it works, and the people behind it.</p>
					<ul>
					<li><a href="about.html">About us</a></li>
					<li><a href="contact.html">Contact</a></li>
					<li><a href="privacy.html">Privacy Policy</a></li>
					<li><a href="feedback.html">Send your feedback</a></li>
					</ul>
				</div>
				<div class="footcontain">
					<h4>Workaholic Links</h4>
					<ul>
					<li><a href="https://www.dartegnian.co">Current Partners</a></li>
					<li><a href="https://www.dartegnian.co">Partner With Us</a></li>
					<li><a href="https://www.dartegnian.co">Service Status</a></li>
					<li><a href="https://www.dartegnian.co">Licensing</a></li>
					<li><a href="https://www.dartegnian.co">Tutorials</a></li>
					<li><a href="https://www.dartegnian.co">Get Help</a></li>
					<li><a href="https://www.dartegnian.co">Termination</a></li>
					</ul>
				</div>
				<div class="footcontain">
					<h4>About TANDA</h4>
					<ul>
					<li><a href="https://www.tanda.co/about/">About</a></li>
					<li><a href="https://www.tanda.co/blog/">Careers</a></li>
					<li><a href="https://www.facebook.com/tandaclocks">Facebook Page</a></li>
					<li><a href="https://my.tanda.co/api/v2/documentation">API Docs</a></li>
					<li><a href="https://my.tanda.co/try/">Free Trial</a></li>
					<li><a href="http://help.tanda.co/">Help Center</a></li>
					<li><a href="https://www.tanda.co/partners/">Parner Program</a></li>
					</ul>
				</div>
				<div class="footcontain">
					<h4>Other TANDA Links</h4>
					<ul>
					<li><a href="https://www.tanda.co/employee-time-clock/">Time Clock</a></li>
					<li><a href="https://www.tanda.co/pricing/">Pricing</a></li>
					<li><a href="https://www.tanda.co/leave-management/">Leave Management</a></li>
					<li><a href="https://www.tanda.co/award-interpretation/">Award Interpretation</a></li>
					<li><a href="https://www.tanda.co/rostering-software/">Rostering Software</a></li>
					<li><a href="https://www.tanda.co/payroll/">Payroll Integration</a></li>
					<li><a href="https://www.tanda.co/webinars/">Webinars</a></li>
					</ul>
				</div>
				</div>
		</footer>
		<footer id="apcfooter">
			<center>
				Coded with <a href="assets\images\APC-Hymn.jpg">❤</a> by the students of <a href="https://apc.edu.ph/" target="_blank">Asia Pacific College</a>
			</center>
		</footer>
	</body>
</html>