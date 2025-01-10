
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
			<li class="active"><a href="#">Home</a></li>
			<li><a href="search.php">Seach</a></li>
			<li><a href="select.php">Order</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
<?php
        //Start your session
        session_start();
        //Read your session (if it is set)
        if (isset($_SESSION['userlogin']))
        {
                echo "<li><a href=\"profile.php\">Profile</a></li>";
                echo "<li><a href=\"logout.php\">Logout " . htmlspecialchars($_SESSION['userlogin']) . "</a></li>";
        }
        else
        {
                echo "<li><a href=\"select.php\">Login</a></li>";
        }
?>
		

</ul>
	</div>
	
	<div id="content-wrapper">
	
		<div id="content">
                <p><a href="view.php?id=33" class="drop-shadow"><img src="images/boat.jpg" width="100" height="150" alt="Three Men in a Boat" class="captionated" /></a></p>
                <p><a href="view.php?id=31" class="drop-shadow"><img src="images/fin.jpg" width="100" height="150" alt="Huckleberry Finn" class="captionated" /></a></p>
                <p><a href="view.php?id=4" class="drop-shadow"><img src="images/gulivar.jpg" width="100" height="150" alt="Gulliver's Travels" class="captionated" /></a></p>
                <p><a href="view.php?id=47" class="drop-shadow"><img src="images/india.jpg" width="100" height="150" alt="A Passage to India" class="captionated" /></a></p>

                <hr />

                <p><a href="view.php?id=50" class="drop-shadow"><img src="images/menwithout.jpg" width="100" height="150" alt="Men Without Women" class="captionated" /></a></p>
                <p><a href="view.php?id=21" class="drop-shadow"><img src="images/mobydick.jpg" width="100" height="150" alt="Herman Melville" class="captionated" /></a></p>
                <p><a href="view.php?id=3" class="drop-shadow"><img src="images/robinson.jpg" width="100" height="150" alt="Robinson Crusoe" class="captionated" /></a></p>
                <p><a href="view.php?id=17" class="drop-shadow"><img src="images/wuthering.jpg" width="100" height="150" alt="Wuthering Heights" class="captionated" /></a></p>
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
			Copyright &copy; 2025 Kasun Chathuranga
		
		</div>
	
	</div>
	
</body>
</html>
