<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
     <link rel="stylesheet" type="text/css" href="css/loginn.css">
    
</head>
<body>
<nav>
        <div class="logo">
            <h4>ALEN Fashion</h4>
        </div>
        <ul class="nav-links">
        <li><a href="indexweb.php">HOME</a></li>
        &emsp;
        <li><a href="new.php">NEW</a></li>
        &emsp;
        <li><a href="indexcart.php">ACCESSORIES</a></li>
        &emsp;
        <li><a href="about.php">ABOUT</a></li>
        &emsp;
        <li><a href="indexlog.php">LOGIN</a></li>
        &emsp;
    </ul>
    <div class="menu">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
    </nav>
     <form action="signup-check.php" method="post">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>


     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Confirm Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Confirm_Password"><br>

     	<button type="submit">Sign Up</button>
          <a href="indexlog.php" class="ca">Already have an account?</a>
     </form>

     <script src="js/indexweb.js"></script>
</body>
</html>
