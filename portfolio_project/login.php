<?php 
session_start(); // * ouverture de session*//
include "db_conn.php";//*connexion base de données*//

//* vérifier si les champs du formulaire de connexion 'uname' (nom d'utilisateur) et 'password' (mot de passe)*//
 //*ont été envoyés via la méthode POST.**//


if (isset($_POST['uname']) && isset($_POST['password'])) {
//*la fonction de validation des données *//
	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);


//*Si l'un des champs est vide, l'utilisateur est redirigé vers loginx.php avec un message d'erreur *//
	if (empty($uname)) {
		header("Location: loginx.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: loginx.php?error=Password is required");
	    exit();
		
		 //requête sql sélectionne l'utilisateur dans la base de données dont le nom d'utilisateur*//
		 //*et le mot de passe correspondent aux données fournies.*//
	}else{
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: index.php");
		        exit();
            }else{
				header("Location: loginx.php?error=Incorect User name or password");
		        exit();
			}
			
			//*Si une seule ligne est retournée par la requête (mysqli_num_rows($result) === 1),*//
			//*les informations de l'utilisateur sont récupérées.*//
            //*Les données sont comparées avec celles entrées par l'utilisateur. Si elles correspondent, **//
			//*les informations de l'utilisateur sont stockées dans la session et l'utilisateur est redirigé**//
			//*vers home.php.Sinon, l'utilisateur est redirigé vers loginx.php avec un message d'erreur *//
			//*indiquant que le nom d'utilisateur ou le mot de passe est incorrect.*//
			
			
		}else{
			header("Location: loginx.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: loginx.php");
	exit();
}