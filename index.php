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
						<img src="assets\images\wewlad1.jpeg"\>
					</a>
				</div>
			</div>
			<aside id="infospace">
				<h2>What's Workaholic?</h2>
				<p class="firsttwo">Workaholic is a suite of tools that can help ease your employees commute to your workplace. Designed by a team from the Philippines, and hailing from Asia Pacific College, Workaholic is the best and the most sure-fire way to get your employees to work on time, prepared, and all set.</p>
				<br/>
				<h2>Accomplishments</h2>
				<p>Since 2016, this team has been helping Asia Pacific College to lessen the spread of computer viruses, and through thorough research and determination they succeeded, as their project continues to this day. Their aim to accomplish their Vision never ceases as they keep on developing and innovating to help the society to become greener and better. One of their greatest achievement is the Cyclicity App, the app has reduced the pollution in the Philippines to at least 60% compared to the other years.</p>
			</aside>
		</section>
		<section class="fullbackground">
			<div id="leftcontain">
				<h1>A New Drive</h1>
				<p>Sa kasalukuyan, nag-iisa lang ang proyekto na ipinapagawa malapit sayo. Ito ay ang pagsasaayos ng pozo negro at canal sa San Anton, Main, Palmera, Aranga, at Reten street.</p>
				<br>
				<p>Asahan na ito ay matatapos sa taong 2020. Sa kasalukuyan, itong proyekto any aktibong-aktibo, na binabantayan ni Ginoong Ramon Robles.</p>
				<br>
				<p>Ang proyekto na ito ay sinimulan noong ika-17 ng Junyo, 2012 ng Administrasyong Aquino. Sa ngayon, ang komplesyon ng proyekto na ito at nasa 65% at ang progreso nito ay sakto sa iskedyul.</p>
				<br>
				<p>Mga ₱648,427 ang halaga ng pera na inilaan ng gobyerno para sa proyekto na ito.</p>
				<br><br>
				<button class="contactbutt" onclick="Redirect2()">TRY IT FOR FREE</button>
			</div>
		</section>
		<section id="content">
			<div id="imagecontainer">
				<div id="image1container" class="images">
					<a href="project1.php" target='_blank'>
						<img src="assets\images\wewlad1.jpeg"\>
					</a>
				</div>
			</div>
			<aside id="infospace">
				<h2>What's Workaholic?</h2>
				<p class="firsttwo">Workaholic is a suite of tools that can help ease your employees commute to your workplace. Designed by a team from the Philippines, and hailing from Asia Pacific College, Workaholic is the best and the most sure-fire way to get your employees to work on time, prepared, and all set.</p>
				<br/>
				<h2>Accomplishments</h2>
				<p>Since 2016, this team has been helping Asia Pacific College to lessen the spread of computer viruses, and through thorough research and determination they succeeded, as their project continues to this day. Their aim to accomplish their Vision never ceases as they keep on developing and innovating to help the society to become greener and better. One of their greatest achievement is the Cyclicity App, the app has reduced the pollution in the Philippines to at least 60% compared to the other years.</p>
			</aside>
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
							<img id="partnerimg" src="assets\images\partner4.jpg">
						</li>
						<li>
							<img id="partnerimg" src="assets\images\partner5.jpg">
						</li>
					</ul>
				</div>
			</div>
			<div id="rightcontain">
				<h1>Countless of Partners</h1>
				<p>Sa kasalukuyan, nag-iisa lang ang proyekto na ipinapagawa malapit sayo. Ito ay ang pagsasaayos ng pozo negro at canal sa San Anton, Main, Palmera, Aranga, at Reten street.</p>
				<br>
				<p>Asahan na ito ay matatapos sa taong 2020. Sa kasalukuyan, itong proyekto any aktibong-aktibo, na binabantayan ni Ginoong Ramon Robles.</p>
				<br>
				<p>Ang proyekto na ito ay sinimulan noong ika-17 ng Junyo, 2012 ng Administrasyong Aquino. Sa ngayon, ang komplesyon ng proyekto na ito at nasa 65% at ang progreso nito ay sakto sa iskedyul.</p>
				<br><br>
				<button class="contactbutt" onclick="Redirect2()">TRY IT FOR FREE</button>
			</div>
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