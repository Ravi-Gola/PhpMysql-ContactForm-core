<?php
include '_dbconnect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  
    if($_POST['firstname'] !=null && $_POST['lastname'] !=null && $_POST['email'] != null && $_POST['mobile'] != null && $_POST['message'] != null){
        $fname = $_POST['firstname'];
        $lname=$_POST['lastname'];
        $email = $_POST['email'];
        $mob=$_POST['mobile'];
        $msg=$_POST['message'];
        $sql="INSERT INTO `contact` (`id`,`fname`, `lname`, `email`, `mobile`, `message`,`date`) VALUES (NULL,'$fname', '$lname', '$email', '$mob', '$msg',current_timestamp());";
        if (mysqli_query($connection, $sql)) {
            echo "Data inserted successfully";
         } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connection);
         }
     }
     else{
         echo "please fill the form correctly ! all the fields are required";
     }
  
 
  
   }
   else{
      echo "please use post method";
   }

?>
