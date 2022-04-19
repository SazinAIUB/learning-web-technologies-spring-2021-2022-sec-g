<?php 
session_start();
if (isset($_SESSION['username'])){require 'Bar/top1.php';}
else{require 'Bar/top.php';}

   $insert = false;
   if(isset($_POST['Name'])){
      //set connection variables
   $server = "localhost";
   $username = "root";
   $password = "";
   //create a connection
   $con = mysqli_connect($server, $username, $password);
   //check connection success
   if (!$con) {
      die("Connection to this database failed due to..." . mysqli_connect_error());
   }
   //echo "Successfully Connected to Database...";
   //collect post variables
   $Name = $_POST['Name'];
   $Address = $_POST['Address'];
   $Gender = $_POST['Gender'];
   $Email = $_POST['Email'];
   $Phone_Number = $_POST['Phone_Number'];
   $DOB = $_POST['DOB'];
   $Blood_Group  = $_POST['Blood_Group'];

   $sql = "INSERT INTO `hmp_webtech`.`job application` (`Name`, `Address`, `Gender`, `Email`, `Phone Number`, `DOB`, `Blood Group`) VALUES ('$Name', '$Address', '$Gender', '$Email', '$Phone_Number', '$DOB', '$Blood_Group');";
   //echo $sql;
   //execute the query
   if ($con->query($sql) == true ) {
      //echo "Successfully Added...";
      $insert = true;
   }else{
      echo "Error: $sql <br> $con->error";
   }
   //close the database connection
$con->close();
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Job Application </title>
</head>
<body>

		<h1 style="background-color:Tomato;" align="center">Job Application Form</h1>
 <form action="ApplyJob.php" method="post">

   Name: <input type="text" name="Name" id="Name" placeholder="Enter your name: "> <br>
   Address: <input type="text" name="Address" id="Address" placeholder="Address: "><br>
   Gender: <input type="radio" name="Gender" id="Gender" value="M" placeholder="Enter your Gender: ">
   <label for="M">M</label>
   <input type="radio" name="Gender" id="Gender" value="F" placeholder="Enter your Gender: ">
   <label for="F">F</label><br>
   Email: <input type="email" name="Email" id="Email" placeholder="Enter email address: "><br>
   Phone No: <input type="phone" name="Phone_Number" id="Phone_Number" placeholder="Enter Phone Number: "><br>
   Date of Birth: <input type="date" name="DOB" id="DOB" placeholder="Enter your Birthday: "><br>
   <label for="Blood_Group">Blood Group:</label> 
   <select id="Blood_Group">
      <option id="Blood_Group" value="A+">A+</option>
      <option value="b+">B+</option>
      <option value="a-">A-</option>
      <option value="b-">B-</option>
      <option value="o+">O+</option>
      <option value="ab+">AB+</option>
   </select><br>
   <input type="submit" name="submit">
   <input type="reset" name="reset" value="Reset">
   <?php
   if($insert == true){
   echo "<p class='submitMsg'> Applied Successfully</p>";
}
   ?>

   <script type="text/javascript" src="ApplyJob_Validation.js"></script>


 </form>
</body>
</html>