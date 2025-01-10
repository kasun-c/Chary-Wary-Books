<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Chary Wary Books</title>
	<link rel="stylesheet" type="text/css" media="screen,projection" href="master.css" />
	<!--[if lt ie 7]><link rel="stylesheet" type="text/css" media="screen,projection" href="ie-win.css" /><![endif]-->
	<link rel="start" title="SimplyGold" href="#" />
</head>
 <?php
        //Start your session

        session_start();
	session_destroy();
?>
<body>
	
	<div id="header"><h1><a href="#">Chary Wary Books</a></h1></div>

	<div id="navigation">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="search.php">Search</a></li>
			<li class="active"><a href="select.php">Order</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
	<?php
        //Start your session
        session_start();
        //Read your session (if it is set)
        if (isset($_SESSION['userlogin']))
        {
                echo "<li><a href=\"logout.php\">Logout ";
                echo $_SESSION['userlogin'];
                echo "</a></li>";
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
<table width="60%" border="0" cellpadding="5" align="center">
  					<tr>
					<td colspan="2" align="center">
					<img src="images/select.jpg">
											
					</td>
					</tr>
                                        <tr>
					<td colspan="2" align="center">
					<form method="get" action="login.php">
   <select name="Type">
      <option value="personal.php">I am a Personal User</option>
      <option value="corporate.php">I am a Corporate User</option>
   </select>
   <input type="submit" value="Continue">
</form>
					</td>
					</tr>

					</table>

		</div>
	
	</div>
	
	<div id="footer">
	
		<div id="meta">
		
			
			<hr />
		
		</div>
	
		<div id="copyright">
			Copyright &copy; 2015 Kasun Chathuranga
		
		</div>
	
	</div>
	
</body>
</html>
