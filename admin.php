<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
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
 
button {   
       background-color: #04AA6D;   
       width: 100%;  
        color: white;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 form {   
        border: 3px solid #f1f1f1;   
    }   
 input[type=email], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }    
        
     
 .container {   
       margin: 50px;
        padding: 25px;   
        background-color: lightblue;  
    }  
    ul{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        li{
            list-style: none;
            font-size: larger;
            width: 20%;
            text-align: center;
        } 
    </style>
</head>
<body>
<nav class="topnav">
  <a class="active">For Your Help</a>
  <a href="index.php">Contact</a>
  <a href="admin.php">Admin</a>
</nav>
<h1>Only admin login</h1>
<form id="adminform">  
        <div class="container">   
            <label>Email : </label>   
            <input type="email" placeholder="Enter email" name="email" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>  
            <button type="submit" id="login">Login</button>     
        </div>   
</form>  
<h1>Users Queries</h1>
<section id="content">
<ul>
        <li>first name</li>
        <li>last name</li>
        <li>email</li>
        <li>mobile</li>
        <li>message</li>
    </ul>
</section>   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script  type="text/javascript">
       $(document).ready(function(){
    $('#login').click(function(e){
        e.preventDefault(); //prevent the default form submit
        var formData = $('#adminform').serialize(); //serialize the form data
        $.ajax({
            type: 'POST',
            url: '_handeladmin.php',
            data: formData,
            success: function(response) {
   var htmlResponse = response;
   var sectionHTML = $('<div>').html(htmlResponse);
   $('#content').append(sectionHTML);
}
        });
    });
});

</script>
</body>
</html>