<! DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="stylex.css">
    <title>Login</title>
</head>
<body>


    <!-- ############### -->
    <!-- Navigation-->
    <!-- ############### -->

   <div class="container">
    <header>
	
	
    <a href="#" class="logo"><i class='bx bxs-building-house'></i>Artisan<span>Home</span></a>
		
        <ul class="navigation">
		  
		
            <li><a href="./index.php" >Home</a></li>
        </ul>
        
    </header>
   </div>

        <!-- ############### -->
    <!-- Login ->
    <!-- ############### -->

    <div class="login container">
        <div class="login-container">
            <h2>Log in</h2>
			<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
			
			
			 <form action="login.php" method="post">
            
          
                <span>Enter your e-mail</span>
				<input type="text" name="uname" placeholder="User Name"><br>
				
				
              
				
                <span>Enter your password</span>
                <input type="password" placeholder="****" required>
				
					
				 <button type="submit">Login</button>
               
                <a class="mdp" href="#">Forgot your password?</a>
                <a href="./signupx.html" class="btn">Create an account</a>
            </form>
        </div>
        <div class="login-img">
            <img src="./images/login.jpg" alt="">
        </div>
    </div>



        <!-- ############### -->
    <!-- Footer -->
    <!-- ############### -->

    

    

    <script src="app.js"></script>
</body>
</html>