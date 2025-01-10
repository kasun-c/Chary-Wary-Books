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
			<li class="active"><a href="select.php">Order</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</div>
	
	<div id="content-wrapper">
	
		<div id="content">
<table width="60%" border="0" cellpadding="5" align="center">
  					<tr>
					<td colspan="2" align="center">
					<p><?php
   $type = 'personal.php';
   if (isset( $_GET['Type'] ) )
      $type = $_GET['Type'];
   include( $type  );
?></p></td></tr>
					</table>

		</div>
	
	</div>
	
	<div id="footer">
	
		<div id="meta">
		
			
			<hr />
		
		</div>
	
		<div id="copyright">
			Copyright &copy; 2025 Kasun Chathuranga
		
		</div>
	
	</div>
	
</body>
</html>
