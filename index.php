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
			<h1 style="display: inline;"> <img id="logo" src="assets\images\logoworkmark.png"/></h1>
			<nav>
				<a href="link1.html" id="current">Home</a>
				<a href="link2.html">Management</a>
				<a href="link2.html">Management</a>
				<a href="link2.html">Management</a>
				<a href="link2.html">Management</a>
			</nav>
		</header>
		<section id="hero">
			<h1 class="header"><span class="rotate">CYNTHIA, THEME, WEW</span></h1>
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