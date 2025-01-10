<?php
include('config.php');
session_start();

// Check if the user is logged in
if (!isset($_SESSION['id'])) {
    die("Access denied. Please <a href='login.php'>login</a> first.");
}

// Get the user ID from the session
$user_id = (int)$_SESSION['id']; // Cast to integer for security

// Fetch the user's profile
$sql = "SELECT id, username, full_name, email, address, user_type FROM users WHERE id = $user_id";
$result = mysqli_query($link, $sql);

if (!$result || mysqli_num_rows($result) == 0) {
    die("User not found.");
}

$user = mysqli_fetch_assoc($result);

// Handle profile updates (if the form is submitted)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Capture POST values (intentionally vulnerable to SQL injection)
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    // Vulnerability: User may manipulate the hidden `id` field
    $submitted_id = $_POST['id']; // This should match the logged-in user's ID
    if ($submitted_id != $user_id) {
        // Vulnerability: Allow updating another user's data
        echo "<p style='color: red;'>Warning: You changed the ID!</p>";
    }

    // Update the user's profile
    $update_sql = "UPDATE users SET full_name = '$full_name', email = '$email', address = '$address' WHERE id = $submitted_id";
    mysqli_query($link, $update_sql);

    echo "<p>Profile updated successfully.</p>";
    // Refresh the page to show updated info
    header("Location: profile.php");
    exit;
}

mysqli_close($link);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile Page</title>
	<link rel="stylesheet" type="text/css" media="screen,projection" href="master.css" />
	<!--[if lt ie 7]><link rel="stylesheet" type="text/css" media="screen,projection" href="ie-win.css" /><![endif]-->
	<link rel="start" title="SimplyGold" href="#" />
</head>
<body>

	<div id="header"><h1><a href="#">Chary Wary Books</a></h1></div>

	<div id="navigation">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="#">Search</a></li>
			<li><a href="#">Order</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
<?php
        //Start your session
        session_start();
        //Read your session (if it is set)
        if (isset($_SESSION['userlogin']))
	{
		echo "<li class=\"active\"><a href=\"profile.php\">Profile</a></li>";
    		echo "<li><a href=\"logout.php\">Logout " . htmlspecialchars($_SESSION['userlogin']) . "</a></li>";
	}
        else
        {
                echo "<li><a href=\"select.php\">Login</a></li>";
        }
?>

		</ul>
	</div>

    <h3>Hello <?php echo htmlspecialchars($user['username']); ?></h3>

<h4>Edit your personal details:</h4>
<form method="POST" action="profile.php" style="margin-bottom: 20px;">
    <!-- Intentionally vulnerable hidden field for the ID -->
    <input type="hidden" name="id" value="<?php echo $user['id']; ?>" />
    <p style="margin-bottom: 15px;">
        <label for="username">Username:</label>
        <input type="text" id="username" value="<?php echo htmlspecialchars($user['username']); ?>" disabled />
        <br>
    </p>
    <p style="margin-bottom: 15px;">
        <label for="full_name">Full Name:</label>
        <input type="text" id="full_name" name="full_name" value="<?php echo htmlspecialchars($user['full_name']); ?>" style="width: 40%;" />
        <br>
    </p>
    <p style="margin-bottom: 15px;">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" style="width: 40%;" />
        <br>
    </p>
    <p style="margin-bottom: 15px;">
        <label for="address">Address:</label>
        <textarea id="address" name="address" style="width: 40%; height: 80px;"><?php echo htmlspecialchars($user['address']); ?></textarea>
        <br>
    </p>
    <p>
        <input type="submit" value="Save Changes" style="padding: 10px 20px; margin-top: 10px;" />
    </p>
</form>
<hr style="margin-top: 20px; margin-bottom: 20px;">


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

