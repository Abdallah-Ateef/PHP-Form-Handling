<?php
if(!isset($_GET['submit'])){?>
<form >
    <label for="username">UserName</label><input type="text" id="username" name='username'>
    <label for="password">Password</label><input type="password" id='password'name='password'>
    <input type="submit" value="login" name='submiit'>
</form>
<?php } else echo 'welcom to our controll panel';?>

<h1><?='welcom to our webs'?></h1>
//********************************************************************************************************** *//

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"href='main.css'>
<!-- <link rel="icon" href="data:,"> -->
</head>
<body>

<form method="post">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter name" name="name" id="name" required>
    <label for="age"><b>Age</b></label>
    <input type="text" placeholder="Enter Age" name="age" id="age" required>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn" name='submit' value='login'>Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>

</body>
</html>
<?php 
require 'user.class.php';

if(isset($_POST['submit'])){
   $user=new users();
   $user->name=$_POST['name'];
   $user->age=$_POST['age'];
   $user->email=$_POST['email'];
   echo 'welcom tou our website ya'.$user->name ;
}

echo var_dump($_POST);

echo '<pre>';
print_r(filter_list());
echo '</pre>';

$name='Abdallah';
echo 'welcom to our website '.$name;


?>