<?php

// Create connection
$db_host="localhost";//Host of the Database
$db_name="book_store"; //Database name
$username="root"; //Username
$password="abc123"; //Password



$link = mysqli_connect($db_host, $username, $password, $db_name);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}




?> 
