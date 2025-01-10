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
			<li class="active"><a href="#">Search</a></li>
			<li><a href="#">Order</a></li>
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

<?php
include('config.php');
$id='1';
if (isset( $_POST['BookID'] ) )
      $id=$_POST['BookID'];

if ($stmt = mysqli_prepare($link, "SELECT * FROM books WHERE id=?")) 
{
	mysqli_stmt_bind_param($stmt, "s", $id);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_bind_result($stmt, $rid,  $name, $author, $price, $stock, $summary);
	mysqli_stmt_fetch($stmt);
	mysqli_stmt_close($stmt);
}
mysqli_close($link);
if ($name==NULL)
	echo "<h3>Item not found</h3>";
else
{
	session_name('BookShop');
        session_start();
        if (isset($_SESSION['userlogin']))
        {
		echo "<h2>Purchase Successful</h2>";
		echo "<h4>Details:</h4>";
		echo "<table width=\"600\" border=\"1\"  style=\"font-size:14px\">";
		echo "<tr>";
		echo "<td>";
		echo "Name of the Book";
		echo "</td>";
		echo "<td>";
		echo $name;
		echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>";
		echo "Author";
		echo "</td>";
		echo "<td>";
		echo $author;
		echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>";
		echo "Description";
		echo "</td>";
		echo "<td>";
		echo $summary;
		echo "</td>";
		echo "</tr>";
		echo "</table>";
	}
	        else
        {
		echo "<a href=\"select.php\">Please Login</a>";
        }
}
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
			Copyright &copy; 2015 Kasun Chathuranga
		
		</div>
	
	</div>
<script>
if(top != window) {
	top.location = window.location
}
</script>	
</body>
</html>
