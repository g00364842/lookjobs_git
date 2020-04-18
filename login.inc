<?php 

 if(isset($_POST['login-submit'])){

 	require 'connect/connect.php';

 	$mailuid = $_POST['uidUsers'];
 	$password = $_POST['pwd'];

 	//if empty
 	if (empty($mailuid) || empty($password)){
 		header("Location: index.php?emptyfields");
		exit();
 	}
 	//check if the user exists
 	else {
 		$sql = "SELECT * FROM users WHERE uidUsers=?;";
 		//initialize a new statement
 		$stmt = mysqli_stmt_init($conn);
 		//check if exists on DB
 		if(!mysqli_stmt_prepare($stmt, $sql)) {
 			//header("Location: index.php?error=sqlerror");
			//exit();
 		}
 		else {
 			mysqli_stmt_bind_param($stmt, "s", $mailuid);
 			mysqli_stmt_execute($stmt);

 			$result = mysqli_stmt_get_result($stmt);
 			
 			//get data from DB and check
 			if ($row = mysqli_fetch_assoc($result)){
 				//check if matches
 				$pwdCheck = password_verify($password, $row['pwd']);
 				if ($pwdCheck == false) {
 					//wrong password
 					//back to front
 					header("Location: http://smcreative.ie/lookjobs/index.php?error=wrongpwd");
					exit();
 				}
 				else if ($pwdCheck == true){
 					//start session
 					session_start();
 					$_SESSION['userId'] = $row['idUsers'];
 					$_SESSION['userUid'] = $row['uidUsers'];

 					header("Location: http://smcreative.ie/lookjobs/index.php?login=success");
					exit();
 				}
 				else {
 					header("Location: http://smcreative.ie/lookjobs/index.php?error=wrongpwd");
					exit();
 				}
 			}
 			else{
 				header("Location: http://smcreative.ie/lookjobs/index.php?error=nouser");
				exit();
 			}


 		}

 	}
 }
 else{
 	header("Location: http://smcreative.ie/lookjobs/index.php");
	exit();

 }
 ?>