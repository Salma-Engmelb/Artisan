<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="stylex.css">
    <title>Sign-up</title>
</head>
<body>


    <!-- ############### -->
    <!-- Navigation-->
    <!-- ############### -->

   <div class="container">
    <header>
        <a href="#" class="logo"><i class='bx bxs-building-house'></i>Artisan<span>Home</span></a>
        <ul class="navigation">
            <li><a href="./index.php" >Accueil</a></li>
        </ul>
        
    </header>
   </div>

        <!-- ############### -->
    <!-- Login ->
    <!-- ############### -->

    <div class="login container">
        <div class="login-container">
            <h2>Log in</h2>
           

          <form action="inscrire.php" method="post">
                <span>Enter username</span>
				
             <input type="text" name="uname" placeholder="User Name"><br>

                
                <span>Enter your password</span>
				
               <input type="password" name="password" placeholder="Password"><br>
                <span>Comfirm your password</span>
                <input type="password" name= "cpass" placeholder="cPassword" >
                <button type="submit" name="submit" class="btn"  >Create an account</button>
                <a href="./login.html" class="btn"> log in</a>
            </form>
        </div>
        <div class="login-img">
            <img src="./images/signup.jpg" alt="">
        </div>
    </div>



        <!-- ############### -->
    <!-- Footer -->
    <!-- ############### -->

   

    

    <script src="app.js"></script>
</body>
</html>