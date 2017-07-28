<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Cynthia</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="Resources/style.css" rel="stylesheet">
		<!-- <link rel="icon" type="image/png" href="Resources/Images/.png"> -->
		<script src='Resources/jquery.min.js'></script>
		<script src='Resources/textrotator.js'></script>
		<link rel="stylesheet" type="text/css" href="Resources/textrotator.css"/>
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
			<nav>
				<a href="link1.html">Link 1</a> |
				<a href="link2.html">Link 2</a>
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
				Coded with <a href="Resources\Images\APC-Hymn.jpg">❤</a> by the students of <a href="https://apc.edu.ph/" target="_blank">Asia Pacific College</a>
			</center>
		</footer>
	</body>
</html>