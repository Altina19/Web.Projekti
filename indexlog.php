<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
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
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
          <a href="signup.php" class="ca">Create an account</a>
     </form>

	 <script src="js/indexweb.js"></script>
</body>
</html>
