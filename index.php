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
			<button style="display: inline-block;float: right; margin-left: -5px; margin-top: 4px; margin-right: 30px;" class="userbutt" onclick="Redirect()">Register</button>
			<form action="signingin.php" method="post" style="display: inline;">
			<table border="0" style="display: inline; float: right;">
				<tr style="display: inline;">
				<td style="color: #fff">Username</td>
				<td align="left"><input class="inputfield" type="text" name="username" size="20" maxlength="50" /></td>
				</tr>
				<tr style="display: inline;">
				<td style="color: #fff">Password</td>
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
			<h1 class="header"><span class="rotate">AN EASIER WAY TO GET TO WORK, A FASTER WAY, A BETTER WAY, WORKAHOLIC LOGIN SUITE</span></h1>
		</section>
		<section id="content">
			<div id="imagecontainer">
				<div id="image1container" class="images">
					<a href="project1.php" target='_blank'>
						<img src="Resources\Images\proj1-tacloban.jpg"\>
					</a>
				</div>
				<div id="otherimages">
					<div id="image2container" class="images">
						<a href="project5.php" target='_blank'>
							<img src="Resources\Images\proj2-subway.jpg"\>
						</a>
					</div>
					<div id="image3container" class="images">
						<a href="project3.php" target='_blank'>
							<img src="Resources\Images\proj3-subway.jpg"\>
						</a>
					</div>
				</div>
			</div>
		<aside id="infospace">
			<h2>Vision</h2>
			<p class="firsttwo">Regarding this Website and Mobile app, we aim to increase the transparency between the government and our fellow Filipino citizens. We do this by displaying almost all of the activities of the government in this website and mobile app, so that our fellow citizen may view those activities for them to be informed. The best way for the government to connect to the people and vice versa is to be informed of the activities they currently do. </p>
			<br/>
			<h2>Mission</h2>
			<p class="firsttwo">Our group aims to help the Philippines to have a greener, cleaner, and prosperous society through technology powered by innovations and creativity. Technology can do so much with so little effort, but it’s a shame that we can do little with so much technology. Our team aims to unleash and utilize technology to connect people so that together we can make a change for a better environment.</p>
			<br>
			<h2>Accomplishments</h2>
			<p>Since 2016, this team has been helping Asia Pacific College to lessen the spread of computer viruses, and through thorough research and determination they succeeded, as their project continues to this day. Their aim to accomplish their Vision never ceases as they keep on developing and innovating to help the society to become greener and better. One of their greatest achievement is the Cyclicity App, the app has reduced the pollution in the Philippines to at least 60% compared to the other years.</p>
		</aside>
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