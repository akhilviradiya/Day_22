<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "mydb";

// create connection
$conn = mysqli_connect($serverName, $userName, $password, $dbName);

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to add data
$sql = "INSERT INTO Users (id, username, pass, email)
        VALUES ('1','jab', 'jbj', 'john@mail.com')";

// add data and check result
if (mysqli_query($conn, $sql)) {
    echo "New user added successfully";
} else {
    echo "Could not add user. Error: " . mysqli_error($conn);
}

// close connection
mysqli_close($conn);

?>