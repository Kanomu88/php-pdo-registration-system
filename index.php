<?php 

    session_start();
    require_once 'config/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration System PDO</title>
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="anm.js">
</head>
<body>
<div class="container">
        <form action="signup_db.php" method="post">
            <?php if(isset($_SESSION['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </div>
            <?php } ?>
            <?php if(isset($_SESSION['success'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </div>
            <?php } ?>
            <?php if(isset($_SESSION['warning'])) { ?>
                <div class="alert alert-warning" role="alert">
                    <?php 
                        echo $_SESSION['warning'];
                        unset($_SESSION['warning']);
                    ?>
                </div>
            <?php } ?>

			
  <form id="form" autocomplete="off">
    <h1 id="message">Get Started</h1><small id="smallMessage"> </small>
    <div class="field">
      <input id="email" type="email" name="email" placeholder="Email" autocomplete="off"/>
      <label for="email">Email</label>
    </div>
    <div class="field">
      <input id="password" type="password" name="password" placeholder="Password" autocomplete="new-password"/>
      <label for="password">Password</label>
    </div>
    <button id="submit">Login</button>
    <p>By signing up, I agree to to the Terms of Service and Privacy Policy</p>
  </form>
</div>

</body>
</html>