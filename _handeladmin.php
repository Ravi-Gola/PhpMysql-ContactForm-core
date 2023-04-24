<?php
include '_dbconnect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $email=  $_POST['email'];
    $password =$_POST['password'];
    $sql = "SELECT * FROM `admin` WHERE `email` LIKE '$email' AND `password` LIKE '$password'";
    $result = mysqli_query($connection , $sql);
    $num=mysqli_num_rows($result);
    if($num == 1)
    { 
        // echo "successfully login";
        $query="SELECT * FROM `contact`";
        $res=mysqli_query($connection,$query);
        // $html="";
        while($row=mysqli_fetch_assoc($res)){
            $fname=$row['fname'];
            $lname=$row['lname'];
            $email=$row['email'];
            $mobile=$row['mobile'];
            $message=$row['message'];
            echo '<ul>
            <li>'.$fname.'</li>
            <li>'.$lname.'</li>
            <li>'.$email.'</li>
            <li>'.$mobile.'</li>
            <li>'.$message.'</li>
                  </ul>';
    }
        
    }
        else{
            echo '<h1>Error: wrong credentials ! please reload for another try</h1>';
        }
}
else{
    echo "<h1>please use post method</h1>";
}