<?php
$insert=false;
if(isset($_POST['name'])){
    $server="localhost";
    $user="root";
    $password="";
    $con=mysqli_connect($server,$user,$password);
    if(!$con){
        die("The connection to this database failed");
    }
    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $other=$_POST['other'];
    $sql="INSERT INTO `trip_form`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp())";
    echo "Success connecting to the db";
    if($con->query($sql)==true){
        // echo "Successfully inserted";
        $insert=true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to ITM University Travel Form</h1>
        <p>Enter your details to participate</p>
        <?php
        if($insert==true){

            echo "<h3 class='submit-msg'>Thankyou for submitting</h3>";
        }
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your Email">
            <input type="text" name="phone" id="phone" placeholder="Enter your Phone">
            <textarea name="other" id="other" cols="30" rows="10">Enter any other info here</textarea>
            <button class="btn">Submit </button>
           
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>