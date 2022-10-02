<?php
$insert=false;
if(isset($_POST['fname'])){
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if (!$con) {
    die("connection to this database faild due to".mysqli_connect_error());;
}
// echo "Success connecting to the db <br>";
//Variable insert
$fnmae = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$age = $_POST['age'];
$email = $_POST['email'];
$mobNo = $_POST['mobno'];
$city = $_POST['city'];
$state = $_POST['state'];
$address = $_POST['add'];

$sql="INSERT INTO `bsc-it info`.`bsc-it info` (`FirstName`, `MiddleName`, `LastName`, `Email`, `Mobile no`, `City`, `State`, `Address`,`age`) VALUES ('$fnmae', '$mname','$lname', '$email', '$mobNo', '$city', '$state', '$address','$age');";

// echo $sql;

//Server Start
if($con->query($sql) == true){
    // echo "Successfully Inserted";
    $insert=true;
}
else {
    echo "ERROR  $sql <br> $con->error";
}
//Server Close
$con->close();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to GH Raisoni University</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1>Welcome to GH Raisoni University</h1>
    <p>Here a all records a student of BSC-IT 3rd year</p>
    <?php
    if ($insert==true){
    echo  "<p>Your form successfully submit</p>";
    }
    ?>
    <form action="index.php" method="post">

        <input type="text" name="fname" id="fname" placeholder="Firstname">
        <input type="text" name="mname" id="mname" placeholder="Middelname">
        <input type="text" name="lname" id="lname" placeholder="Lastname">
        <input type="text" name="age" id="age" placeholder="Gender"> 
        <!-- <input type="radio" name="gender" id="male" value="Male">Male
        <input type="radio" name="gender" id="fmale" value="female">Female
        <input type="radio" name="gender" id="other" value="Other">Other -->
        <input type="email" name="email" id="email" placeholder="abc@gmail.com">
        <input type="phone" name="mobno" id="mobno" placeholder="1234567890">
        <!-- <input type="password" name="password" id="password" placeholder="6-8 charecter">
        <input type="password" name="cpassword" id="cpassword" placeholder="6-8 charecter"> -->
        <input type="text" name="city" id="city" placeholder="CityName">
        <input type="text" name="state" id="state" placeholder="State">
        <textarea name="add" id="add" cols="30" rows="5" placeholder="Address"></textarea>
        <button type="submit" class="btns">Submit</button>
        <!-- <button type="reset" class="btnr">Reset</button> -->
    </form>
    </div>
    <script src="index.js"></script>
    
</body>
</html>