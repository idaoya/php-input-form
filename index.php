<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert Data Into MySQL Using PHP + CSS + JavaScript</title>
<link href="css/style.css" rel='stylesheet' type='text/css' /> 
<script src="js/checkPassword.js"></script> 
</head>
<body>

<?php
    require ("connect.php"); // include connection
    $db = new DB ();

    if (isset ( $_POST ['msg'] )) {
        $db->insertCustomer (); // insert into table customer
    }
?>
    
<h3>Insert Data Into MySQL Using PHP + CSS + JavaScript</h3>

<div>
  <form action="<?php $_PHP_SELF ?>" method="post" enctype="multipart/form-data" onSubmit = "return checkPassword(this)"> 
      
    <label for="name">Name</label>
    <input type="text" name="name" placeholder="Type your name here..." tabindex="1" required>

    <label for="email">Email</label>
    <input type="email" name="email" placeholder="Type your email here..." tabindex="2" required>
 
    <label for="password">Password</label>
    <input type="password" name="password1" placeholder="Type your password here..." tabindex="3" required>

    <label for="password">Confirm Password</label>
    <input type="password" name="password2" placeholder="Type your password here..." tabindex="4" required>

    <button type="submit" name="msg">OK</button>
    <button type="Reset">Reset</button>
	
  </form>
</div>

</body>
</html>
