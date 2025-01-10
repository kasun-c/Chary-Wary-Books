<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Chary Wary Books</title>
	<link rel="stylesheet" type="text/css" media="screen,projection" href="master.css" />
	<!--[if lt ie 7]><link rel="stylesheet" type="text/css" media="screen,projection" href="ie-win.css" /><![endif]-->
	<link rel="start" title="SimplyGold" href="#" />
</head>

<body>
	
	<div id="header"><h1><a href="#">Chary Wary Books</a></h1></div>

	<div id="navigation">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="search.php">Search</a></li>
			<li><a href="select.php">Order</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</div>
	
	<div id="content-wrapper">
	
		<div id="content">

<?php
session_start();
session_destroy();
echo "<b>Successfly Logged out</b>";
header('Refresh: 2; URL=index.php');
?>


		</div>
	
	</div>
	
	<div id="footer">
	
		<div id="meta">
		
			<div class="recent">
			
				<h3>Recently Reviewed</h3>
				
				<ul>
					<li><a href="#">300 by Frank Miller</a></li>
					<li><a href="#">A Big Fat Supernatural Wedding by Sherrilyn Kenyon</a></li>
					<li><a href="#">Strange Candy by Laurell K. Hamilton</a></li>
					<li><a href="#">The Time Traveler's Wife by Audrey Niffenegger</a></li>
					<li><a href="#">Wicked by Gregory Maguire</a></li>
				</ul>
			
			</div>
			
			<div class="upcoming">
			
				<h3>To Be Read Still</h3>
				
				<ul>
					<li><a href="#">The Mephisto Club by Tess Gerritsen</a></li>
					<li><a href="#">The Husband by Dean Koontz</a></li>
					<li><a href="#">The DaVinci Code by Dan Brown</a></li>
					<li><a href="#">Angels Fall by Nora Roberts</a></li>
					<li><a href="#">Twelve Sharp by Janet Evanovich</a></li>
				</ul>
			
			</div>
			
			<div class="authors">
			
				<h3>Favorite Authors</h3>
				
				<ul>
					<li><a href="#">Suzanne Brockmann</a></li>
					<li><a href="#">Dan Brown</a></li>
					<li><a href="#">J. K. Rowling</a></li>
					<li><a href="#">Tess Gerritsen</a></li>
					<li><a href="#">Kay Hooper</a></li>
				</ul>
			
			</div>
			
			<hr />
		
		</div>
	
		<div id="copyright">
			Copyright &copy; 2012 Kasun Chathuranga
		
		</div>
	
	</div>
	
</body>
</html>
