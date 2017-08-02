<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Workaholic Leaderboard</title>
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
				<a id="current">Leaderboard</a>
				<a href="prizes.php">Available Prizes</a>
			</nav>
		</header>
		<section id="filler">
		</section>
		<section id="content">
			<h1>Top employees</h1>
			<div id="entrycontainer">
				<div id="entryfiller" style="float: left; background-image: url(assets/images/jennifer.jpg);">
					<div id="entry">
						<h6 style="background-image: url(assets/images/jennifer.jpg);"></h6>
						<h5>Jennifer Reyes</h5>
						<p>Assistant Marketing</p>
						<h4 class="loggedin">CLOCKED IN</h3>
						<div id="perfcontainer"></div>
						<div class="moreinfo" id="info1">
							15 logins
						</div>
						<div class="moreinfo" id="info2">
							pcalugas@workaholic.co
						</div>
						<div class="moreinfo" id="info3">
							69,000 total points
						</div>
						<div class="floatcontain">
							<button class="moreinfo" id="fltlft">
								Clock In
							</button>
							<button class="moreinfo" id="fltrght">
								Clock Out
							</button>
						</div>
					</div>
				</div>
				<div id="entryfiller" style="float: right; background-image: url(assets/images/mina.jpg);">
					<div id="entry">
						<h6 style="background-image: url(assets/images/mina.jpg);"></h6>
						<h5>Carmina Ambrocio</h5>
						<p>Chief Executive Officer</p>
						<h4 class="loggedout">CLOCKED OUT</h3>
						<div id="perfcontainer"></div>
						<div class="moreinfo" id="info1">
							75 logins
						</div>
						<div class="moreinfo" id="info2">
							minaambrocio@workaholic.co
						</div>
						<div class="moreinfo" id="info3">
							420,000 total points
						</div>
						<div class="floatcontain">
							<button class="moreinfo" id="fltlft">
								Clock In
							</button>
							<button class="moreinfo" id="fltrght">
								Clock Out
							</button>
						</div>
					</div>
				</div>
				<div id="entryfiller" style="float: right; background-image: url(assets/images/ding.jpg);">
					<div id="entry">
						<h6 style="background-image: url(assets/images/ding.jpg);"></h6>
						<h5>Gertrude Parado</h5>
						<p>Art Director</p>
						<h4 class="loggedin">CLOCKED IN</h3>
						<div id="perfcontainer"></div>
						<div class="moreinfo" id="info1">
							75 logins
						</div>
						<div class="moreinfo" id="info2">
							minaambrocio@workaholic.co
						</div>
						<div class="moreinfo" id="info3">
							420,000 total points
						</div>
						<div class="floatcontain">
							<button class="moreinfo" id="fltlft">
								Clock In
							</button>
							<button class="moreinfo" id="fltrght">
								Clock Out
							</button>
						</div>
					</div>
				</div>
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