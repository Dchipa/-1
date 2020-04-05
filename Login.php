<!doctype html>
<html lang="ENG">
<head>
    <title>Sign In</title>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="Styles.css">
   
   

</head>
<body>
<?php
    
      if(isset($_POST['login'])){
   

    if ( empty($_POST['username'])) {
        $error = "You Must Enter Username"; }
        elseif ( empty($_POST['password'])) {
            $error = "You Must Enter Password"; }
        
        else{
            session_start();
            $_SESSION['logged_user']=$_POST['username'];
            header('location:private.php');}}
            
            

    ?>

<div class="dato">
    <form  class="form-signin" method="POST">
        <h1>Sign In Your Account</h1>

        
        <?php if (isset($s)){?> <div class="alert alert-success" role="alert"><?php echo $s;?> </div> <?php }?>
        <?php if (isset($error)){?> <div class="alert alert-danger" role="alert"><?php echo $error;?> </div> <?php }?>
        <input type="text" name="username" class="form-control" placeholder="Username" required><br>
        <input type="password" name="password" class="form-control" placeholder="Password" required><br>
        <button class="button"  name="login" type="submit">Login</button>
       
    </form>
</div>
</body>
</html>
    