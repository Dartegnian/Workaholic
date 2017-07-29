<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Workaholic Suite</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="assets/css/style.css" rel="stylesheet">
		<link rel="icon" type="image/png" href="assets/images/logosmallsquare.png">
		<script src='assets/js/jquery.min.js'></script>
		<script src='assets/js/textrotator.js'></script>
		<link rel="stylesheet" type="text/css" href="assets/css/textrotator.css"/>
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
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
					<td align="left"><input class="inputfield" type="text" name="username" size="20" maxlength="50" style="background: url(assets/images/people.png); background-color: rgba(100, 100, 100, 0.3); background-size: 30px; padding-left: 35px; background-repeat: no-repeat;"></td>
					</tr>
					<tr style="display: inline;">
					<td style="color: #fff">Password</td>
					<td align="left"><input class="inputfield" type="password" name="password" style="background: url(assets/images/lock.png); background-color: rgba(100, 100, 100, 0.3); background-size: 30px; padding-left: 35px; background-repeat: no-repeat;" size="20" maxlength="50" /></td>
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
				<h2>Mission</h2>
				<p class="firsttwo">Workaholic aims to be the go-to application that your employees use when getting to work. This aims to be the best suite for workers everywhere.</p>
				<br/>
				<h2>About the Team</h2>
				<p>Ever since early 2017, the team that has developed Workaholic has been competing in hackathons and posting on their GitHub accounts. They have developed several software solutions for widescale use, such as a modern incentivized garbage disposal system, a location-based project viewing system, and recently a space information portal.</p>
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
				<button class="contactbutt" onclick="Redirect2()">PARTNER UP</button>
			</div>
		</section>
		<section id="content">
			<div id="imagecontainer">
				<div id="image1container" class="images">
					<a href="project1.php" target='_blank'>
						<img src="assets\images\devices.png"\>
					</a>
				</div>
			</div>
			<aside id="infospace">
				<h2>Available Wherever You Go</h2>
				<p class="firsttwo">We've developed the Workaholic service to run smoothly and elegantly on across all modern devices. From screens as large as a TV set to the screen on your phone, you can guarantee that you'll never lose sight of your work, schedule, or how we'll you've done throughout the weeks.</p>
				<br/>
				<h2>Cross-Platform</h2>
				<p class="firsttwo">Workaholic is available on <strong>ALL</strong> major application stores. It is available as a standalone application on iOS, Android, and Windows 10 devices. It also comes as a browser extension on the Chrome Web Store, on the Mozilla Marketplace for Firefox, and on the Opera Mobile Store.</p>
				<br/>
				<div class="platform-icons cf">
					<a id="apple" href="https://itunes.apple.com/app/id910639339?utm_source=mystudylife.com&amp;utm_medium=platforms" target="_blank">
					<i class="fa fa-apple" aria-hidden="true"></i></a>
					<a id="android" href="https://play.google.com/store/apps/details?id=com.virblue.mystudylife&amp;utm_source=mystudylife.com&amp;utm_medium=platforms" target="_blank"><i class="fa fa-android" aria-hidden="true"></i></a>
					<a id="windows" href="http://apps.microsoft.com/windows/app/my-study-life/3b763f6d-96dd-40a2-83e3-a3295b8e3697?utm_source=mystudylife.com&amp;utm_medium=platforms" target="_blank"></a>
					<a id="chrome" href="https://chrome.google.com/webstore/detail/my-study-life/mnjdjjiobjicmlhnjlogfgbibihjhkeo?utm_source=mystudylife.com&amp;utm_medium=platforms" target="_blank"><i class="fa fa-chrome" aria-hidden="true"></i></a>
					<a id="firefox" href="https://chrome.google.com/webstore/detail/my-study-life/mnjdjjiobjicmlhnjlogfgbibihjhkeo?utm_source=mystudylife.com&amp;utm_medium=platforms" target="_blank"><i class="fa fa-firefox" aria-hidden="true"></i></i></a>
					<a id="opera" href="https://chrome.google.com/webstore/detail/my-study-life/mnjdjjiobjicmlhnjlogfgbibihjhkeo?utm_source=mystudylife.com&amp;utm_medium=platforms" target="_blank"><i class="fa fa-opera" aria-hidden="true"></i></a>
					<a id="edge" href="https://chrome.google.com/webstore/detail/my-study-life/mnjdjjiobjicmlhnjlogfgbibihjhkeo?utm_source=mystudylife.com&amp;utm_medium=platforms" target="_blank"><i class="fa fa-edge" aria-hidden="true"></i></a>
            	</div>
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
				<button class="contactbutt" onclick="Redirect2()">PARTNER UP</button>
			</div>
		</section>
		<section class="fullbackground" id="final">
			<h1>Get a FREE Quote Today!</h1>
			<div id="formcontainer">
				<form action="signingin.php" method="post" style="display: inline;">
					<table border="0" style="display: inline; margin: 0 auto">
						<tr style="display: inline;">
						<td align="left"><input class="inputfield" type="text" name="username" size="20" placeholder="Company name" style="background-image: url(assets/images/city.png);" maxlength="50"></td>
						</tr>
						<tr style="display: inline;">
						<td align="left"><input class="inputfield" type="text" name="password" style="background-image: url(assets/images/mail.png);" placeholder="Contact email" size="20" maxlength="50" /></td>
						</tr>
						<tr style="display: inline;">
						<td colspan="2" align="center"><input type="submit" value="Get Quote" class="button"/></td>
						</tr>
						<tr style="display: inline;">
						<td colspan="2" align="center">
						</td>
						</tr>
					</table>
				</form>
			</div>
		</section>
		<footer>
			<div id="backtotop">
				<i id="chevron"></i>
			</div>
			<div id="footstuff">
				<a href="Resources\Images\coatofarms.png" target="_blank">
					<img src="assets\images\logosmall.png">
				</a>
				<div class="footcontain">
					<h4>About Workaholic</h4>
					<p>Learn more about the Philippine government, its structure, how government works, and the people behind it.</p>
					<ul>
					<li><a href="http://www.gov.ph">Official Gazette</a></li>
					<li><a href="http://data.gov.ph">Open Data Portal</a></li>
					<li><a href="http://www.gov.ph/feedback/idulog/">Send your feedback</a></li>
					</ul>
				</div>
				<div class="footcontain">
					<h4>Work-related Links</h4>
					<ul>
					<li><a href="http://president.gov.ph">The President</a></li>
					<li><a href="http://op-proper.gov.ph">Office of the President</a></li>
					<li><a href="http://ovp.gov.ph">Office of the Vice President</a></li>
					<li><a href="http://senate.gov.ph/">Senate of the Philippines</a></li>
					<li><a href="http://www.congress.gov.ph/">House of Representatives</a></li>
					<li><a href="http://sc.judiciary.gov.ph/">Supreme Court</a></li>
					<li><a href="http://ca.judiciary.gov.ph/">Court of Appeals</a></li>
					<li><a href="http://sb.judiciary.gov.ph/">Sandiganbayan</a></li>
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
				</div>
		</footer>
		<footer id="apcfooter">
			<center>
				Coded with <a href="assets\images\APC-Hymn.jpg">❤</a> by the students of <a href="https://apc.edu.ph/" target="_blank">Asia Pacific College</a>
			</center>
		</footer>
	</body>
</html>