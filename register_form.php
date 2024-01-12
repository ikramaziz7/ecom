<?php include_once'includes/header.php' ?>
<body>
   
<div class="form-container-register">

   <form action="register_form.php" method="post">
      <h3>Sign Up</h3>
      <input type="email" name="usermail" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <input type="submit" name="submit" value="Sign Up" class="form-btn">
      <p>Do you have already an <a href="Login_form.php">account ?</a></p>
   </form>
      <p class="registre-confirmation" ><?php
      session_start();
      include_once 'db/config.php';
      include_once 'db/configControlleur.php';

      $connection=new dbControlleur($bdd);
      
      if(isset($_POST['submit'])){
          $email = $_POST['usermail'];
          $pass = md5($_POST['password']);
          $cpass = md5($_POST['cpassword']);
          $insert=$connection->addClient($email,$pass,$cpass);
      if($insert){ echo'your account hace been registred'; } 
      else{
         echo'check password';  
   }}
      ?></p>
</div>

</body>
</html>