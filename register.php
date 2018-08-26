<?php
    $db_name="iuser"; // database name
   $db_user="root"; // database username
   $db_pass=""; // database password
   $db_host="127.0.0.1:3307"; // domain (example : igowtham.com)
   $con=mysqli_connect("$db_host","$db_user","$db_pass","$db_name");
  if (!$con)
   {
   /*echo 
   ('
   <script>
   console.log("connection error");
   </script>
   ');*/
   }
   
   else
   {
   echo 
   /*('
   <script>
   console.log("connected");
   </script>
   ');*/
   }

   //if(isset($_POST['register'])) {
   {$name = mysqli_real_escape_string($con, $_POST['name']);
   $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
   $email = mysqli_real_escape_string($con, $_POST['email']);
   $college = mysqli_real_escape_string($con, $_POST['college']);
   $password=mysqli_real_escape_string($con, $_POST['password']);
   $result = mysqli_query($con, "INSERT INTO audience(name,mobile,email,college,password) VALUES('$name','$mobile','$email','$college','$password')");
   /*echo($result);
   echo ('<script>alert("hi");</script>');}*/
?>