<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Workaholic Suite</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="assets/css/style.css" rel="stylesheet">
		<link rel="icon" type="image/png" href="assets/images/logosmallsquareblue.png">
		<script src='assets/js/jquery.min.js'></script>
		<script src='assets/js/textrotator.js'></script>
		<link rel="stylesheet" type="text/css" href="assets/css/textrotator.css"/>
		<script>
			$(document).ready(function(){
				$(".header .rotate").textrotator({
					animation: "dissolve",
					speed: 2000
				});
			});
			$(function() {
				$(".buttspecial").click(function() {
					$("body,html").animate({
						scrollTop: 0
					}, 4500);
					return false
				})
			});
		</script>
	</head>
	<body>
		<header>
			<h1 style="display: inline;"> <img id="logo" src="assets\images\logowhite.png"/></h1>
			<button style="display: inline-block;float: right; margin-left: -5px; margin-top: 10px;" class="userbutt" onclick="Redirect()">Register</button>
			<form action="signingin.php" method="post" style="display: inline;">
			<table border="0" style="display: inline; float: right;">
				<tr style="display: inline;">
				<td style="color: #777">Username</td>
				<td align="left"><input class="inputfield" type="text" name="username" size="20" maxlength="50" /></td>
				</tr>
				<tr style="display: inline;">
				<td style="color: #777">Password</td>
				<td align="left"><input class="inputfield" type="password" name="password" size="20" maxlength="50" /></td>
				</tr>
				<tr style="display: inline;">
				<td style="border-right: 1px solid #e4e4e4; padding-right: 10px;" colspan="2" align="center"><input type="submit" value="Log In" class="button"/></td>
				</tr>
				<tr style="display: inline;">
				<td colspan="2" align="center">
				</td>
				</tr>
			</table>
		</form>
			<nav>
				<a href="link1.html" id="current">Home</a>
				<a href="link2.html">Dashboard</a>
				<a href="link2.html">Mobile App</a>
				<a href="link2.html">About</a>
			</nav>
		</header>
		<section id="filler">
		</section>
		<section id="hero">
			<h1 class="header"><span class="rotate">A NEW WAY FOR EMPLOYEES TO EXPERIENCE WORK, A FASTER WAY, A BETTER WAY, WORKAHOLIC LOGIN SUITE</span></h1>
		</section>
		<footer>
			<div id="backtotop">
				<i id="chevron"></i>
			</div>
			
		</footer>
		<footer id="apcfooter">
			<center>
				Coded with <a href="assets\images\APC-Hymn.jpg">❤</a> by the students of <a href="https://apc.edu.ph/" target="_blank">Asia Pacific College</a>
			</center>
		</footer>
	</body>
</html>