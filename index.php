<?php
$insert = false;
if(isset($_POST['name'])){

// CONNECTION VARIABLES

$server = "localhost";
$username = "root";
$password = "";

// CREATING DB CONNECTION

$con = mysqli_connect($server, $username, $password);

// CONNECTION SUCCESS VERIFICATION

if(!$con){
    die("connection to this database failed due to " . mysqli_connect_error());
}
// echo "Success connecting to the db";

// POST VARIABLES

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];

$sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())";

// echo $sql;

// EXECUTE THE QUERY

if($con->query($sql) == true){
    // echo "Successfully inserted";
    //FLAG FOR SUCCESSFUL INSERTION
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}

// CLOSING DB CONNECTION

$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="bg2.jpg" class="bg" alt="Vrindavan">
    <div class="container">
        
        <h1>Welcome to Vrindavan Trip form</h1>
        <p class="subhead">Enter your details and submit this form to confirm your participation in the trip.</p>
        
        <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the trip.</p>";
        }
        ?>

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
            <button class="btn">Submit</button>

        </form>
    </div>
    <script src="index.js"></script>
    <!-- INSERT INTO `trip` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('1', 'nish', '20', 'female', 'nistha25srivastava@gmail.com', '9999999999', 'my first php myadmin msg', current_timestamp()); -->
</body>
</html>