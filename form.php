<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
   
</head>
<body>
    <div>
        <h1>form</h1>
    </div>
    <form action="form.php" method="post">
    <label for="">Name: </label>
        <input type="text" name="fname" id="fname"><br><br>
        <label for="">Id: </label>
        <input type="text" name="id" id="id"><br><br>
        <label for="">Password: </label>
        <input type="text" name="pass" id="pass">
        <button type="submit">Submit</button>
    </form>
       
    
    


    <?php
    
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = 'form';
    
    // Create connection
    $conn = mysqli_connect ($host, $user, $pass, $db);

    $fname=$_POST['fname'];
    $id=$_POST['id'];
    $pass=$_POST['pass'];

    $sql="INSERT INTO `submit`  (`name`, `id`, `password`) VALUES('$fname', '$id', '$pass')";

    if($conn->query($sql)==True){
        echo "new record added";

    }
    else{
        echo "error";
    }

    $conn->close();

   
    ?>

</body>
</html>