<?php

           session_start(); 
          include "db_conn.php";
		  
		  
		  
          if (isset($_POST['submit'])) {
        //*Récupération des données du formulaire*//
            //*$name = $_POST['username'];*//
           // *$email = $_POST['email'];*//
           //* $pass = $_POST['password']*//;
            


         $name = $_POST['uname'];
	     $pass = $_POST['password'];
		$cpass = $_POST['cpass'];


        //*Vérification de l'existence de l'email dans la base de données*//
            //*$check = "select * from users where email='{$email}'";
          //*Une requête SQL est construite pour vérifier si l'email fourni est déjà utilisé *//
            //*$res = mysqli_query($conn, $check);*//

            //*$passwd = password_hash($pass, PASSWORD_DEFAULT);*//

            //*$key = bin2hex(random_bytes(12));*//




           
            //*Insertion des données utilisateur si l'email n'est pas utilisé*//
              if ($pass === $cpass) {
				  
				 

            $sql = "insert into users(user_name,password) values('$name','$pass')";

               $result = mysqli_query($conn, $sql);

                if ($result) {

                  echo "<div class='message'>
      <p>You are register successfully!</p>
      </div><br>";

                  //*echo "<a href='login.php'><button class='btn'>Login Now</button></a>";*//

                } else {
                  //*echo "<div class='message'>*//
        //*<p>This email is used, Try another One Please!</p>*//
       //* </div><br>";*//

                  //*echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button></a>";*//
                }

              } else {
                echo "<div class='message'>
      <p>Password does not match.</p>
      </div><br>";

                echo "<a href='inscrire.php'><button class='btn'>Go Back</button></a>";
              }
            }
         