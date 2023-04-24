<?php
include '_dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
h1{
    text-align:center;
}
input, select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

#submit{
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

#submit:hover {
  background-color: #45a049;
}

.container {
    margin: 40px;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>
<nav class="topnav">
  <a class="active">For Your Help</a>
  <a href="index.php">Contact</a>
  <a href="admin.php">Admin</a>
</nav>
<h1>Contact Us</h1>
<div class="container">
  <form id="myform">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your first name"  required>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name" required>
     
    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Your email" required>

    <label for="mobile" >Mobile Number</label>
    <input type="tel" id="mob" name="mobile" placeholder="Your mobile number" required><br>

    <label for="message">Message</label>
    <textarea id="msg" name="message" placeholder="Write something.." style="height:200px" required></textarea>
    <button id="submit">Submit</button>
  </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script  type="text/javascript">
       $(document).ready(function(){
    $('#submit').click(function(e){
        e.preventDefault(); //prevent the default form submit
        var formData = $('#myform').serialize(); //serialize the form data
        $.ajax({
            type: 'POST',
            url: '_handelform.php',
            data: formData,
            success: function(response){
                alert(response); //show the server response message
            }
        });
    });
});

</script>
</body>
</html>