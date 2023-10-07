<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <!-- <title>Neumorphism Login Form UI | CodingNepal</title> -->
      <link rel="stylesheet" href="css/styles.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="content">
         <div class="text">
            Login Ms
         </div>
         <form action="" method="POST">
            <div class="field">
               <input type="text" name="name"required>
               <span class="fas fa-user"></span>
               <label>Email or Phone</label>
            </div>
            <div class="field">
               <input type="password" name="pass"required>
               <span class="fas fa-lock"></span>
               <label>Password</label>
            </div>
            
            <button type="submit" name="login">Sign in</button>
           
         </form>
      </div>
   </body>
</html>
             <?php
             session_start();
             if(isset($_POST["login"]))
             {
                 $name = $_POST["name"];
                 $pass = $_POST["pass"];
                 if($name == "admin" && $pass == "7867")
                 {
                     
                     $_SESSION["done"] = $name;
                     header("Location: index.php");
                 }
                 else
                 {
                     echo"erooor";
                 }
             }
?>