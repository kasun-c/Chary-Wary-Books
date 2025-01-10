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
			<li class="active"><a href="search.php">Search</a></li>
			<li><a href="select.php">Order</a></li>
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

// Get the search keyword directly from the GET parameter
$keyword = $_GET['keyword'];

// Intentionally vulnerable SQL query using string concatenation
$sql = "SELECT * FROM books WHERE name='$keyword'";

// Execute the query
$result = mysqli_query($link, $sql);

// Close the connection
mysqli_close($link);

// Display the search results
echo "<h2>Search results for " . htmlspecialchars($keyword) . "</h2>";

// Check if the query returned any results
if (mysqli_num_rows($result) > 0) {
    // Fetch the first result (assuming one match for simplicity)
    $row = mysqli_fetch_assoc($result);

    // Display book details
    echo "<table width=\"600\" border=\"1\" style=\"font-size:20px\">";
    echo "<tr><td>Name of the Book</td><td>" . htmlspecialchars($row['name']) . "</td></tr>";
    echo "<tr><td>Author</td><td>" . htmlspecialchars($row['author']) . "</td></tr>";
    echo "<tr><td>Description</td><td>" . htmlspecialchars($row['summary']) . "</td></tr>";
    echo "<tr><td>Price</td><td>" . htmlspecialchars($row['price']) . "</td></tr>";
    echo "<tr><td>Stock</td><td>" . htmlspecialchars($row['stock']) . "</td></tr>";
    echo "</table>";

    // Add a form for purchasing the book
    echo "<br><br>";
    echo "<form action=\"purchase.php\" method=\"post\">";
    echo "<input type=\"hidden\" name=\"BookID\" value=\"" . htmlspecialchars($row['id']) . "\" >";
    echo "<input type=\"submit\" value=\"Purchase\" style=\"height:50px; width:150px\">";
    echo "</form>";
} else {
    echo "<h3>Not found</h3>";
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
	
</body>
</html>
