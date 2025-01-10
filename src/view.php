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

// Default value for $id
$id = '1';

// If the `id` parameter is set in the URL, use it
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

// Enable error reporting for debugging SQL errors
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    // Vulnerable query: Directly concatenating user input into the query
    $sql = "SELECT * FROM books WHERE id = '$id'";
    $result = mysqli_query($link, $sql);

    // Fetch the book details
    if ($row = mysqli_fetch_assoc($result)) {
        echo "<table width=\"600\" border=\"1\" style=\"font-size:20px\">";
        echo "<tr>";
        echo "<td>Name of the Book</td>";
        echo "<td>" . htmlspecialchars($row['name']) . "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Author</td>";
        echo "<td>" . htmlspecialchars($row['author']) . "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Description</td>";
        echo "<td>" . htmlspecialchars($row['summary']) . "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Price</td>";
        echo "<td>" . htmlspecialchars($row['price']) . "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Stock</td>";
        echo "<td>" . htmlspecialchars($row['stock']) . "</td>";
        echo "</tr>";
        echo "</table>";
    } else {
        echo "<h3>Item not found</h3>";
    }

    // Close the result set
    mysqli_free_result($result);

} catch (Exception $e) {
    // Show SQL error message
    echo "<h3>SQL Error: " . htmlspecialchars($e->getMessage()) . "</h3>";
}

// Close the database connection
mysqli_close($link);

echo "<br> <br> ";
echo "<form action=\"purchase.php\" method=\"post\">";
echo "<input type=\"hidden\" name=\"BookID\" value=\"$id\" >";
echo "<input type=\"submit\" value=\"Purchase\" style=\"height:50px; width:150px\" >";
echo "</form>";
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
			Copyright &copy; 2025 Kasun Chathuranga
		
		</div>
	
	</div>
	
</body>
</html>
