
<?php include_once'includes/header.php' ?>
<body>
   
<div class="form-container">

   <form action="login_form.php" method="post">
      <h3>login now</h3>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>

</div>

</body>
</html>


<?php
session_start();
include 'db/config.php';
include_once 'db/configControlleur.php';
$connection=new dbControlleur($bdd);
if(isset($_POST['submit'])){
   $email = $_POST['email'];
   $pass =$_POST['password'];
   
   
  

  /* if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:user_page.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }
*/
$result=$connection->fetchClient($email,$pass);
if(sizeof($result)>0){
  $_SESSION["email"]=$email;
  header("Location: candl.php");
}
}
?>
