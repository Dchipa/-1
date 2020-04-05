<!doctype html>
<html lang="ENG">
<head>
    <title>Registration</title>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="Styles.css">
   
   

</head>
<body>
<?php



if (isset($_POST['username']) && isset($_POST['password'])) {
    $login = ($_POST['username']);
    $firstname = ($_POST['firstname']);
    $lastname = ($_POST['lastname']);
    $email = ($_POST['email']);
    $password = ($_POST['password']);
    $passwordrepeat = ($_POST['passwordrepeat']);


    if (empty($_POST['username'])) {
        $error = "You Must Enter Username"; }
    else{$login=$_POST['username'];
        $lower=strtolower($login);}

    if($login!=$lower){
        $error="Only (a-z)(1-0)";
    }
    elseif (strlen($login) < 2 || strlen($login) > 10) {
        $error = "Incorret username";
    } elseif (strlen($firstname) < 1 || strlen($lastname) < 1) {
        $error = "Enter Firstname or Username";
    } elseif (!preg_match("#[A-Z]+#", $password)) {
        $error = "Password Must Include At Least One CAPS!";
    } elseif (strlen($password) < 8 || strlen($password) > 16) {
        $error = "Change Password Lenght";
    }  elseif ($password != $passwordrepeat) {
        $error = "Please repeat correct password";
    }
    else{$s="Registration Completed";
        }



}
?>

<div class="dato">
    <form  class="form-signin" method="POST">
        <h1>Registration</h1>


        <?php if (isset($s)){?> <div class="alert alert-success" role="alert"><?php echo $s;?> </div> <?php }?>
        <?php if (isset($error)){?> <div class="alert alert-danger" role="alert"><?php echo $error;?> </div> <?php }?>
        <input type="text" name="username" class="form-control" placeholder="Username" required><br>
        <input type="text" name="firstname" class="form-control" placeholder="Firstname" required><br>
        <input type="text" name="lastname" class="form-control" placeholder="Lastname" required><br>
        <input type="email" name="email" class="form-control" placeholder="Email" required><br>
        <input type="password" name="password" class="form-control" placeholder="Password" required><br>
        <input type="password" name="passwordrepeat" class="form-control" placeholder="PasswordRepeat" required><br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
    </form>
</div>
</body>
</html>