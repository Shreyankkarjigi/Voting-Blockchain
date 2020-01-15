<?php
session_start();

if(isset($_POST['submit'])) {

	include'dbh.inc.php';
	$uid = mysqli_real_escape_string($conn,$_POST['uid']);
	$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
     
    if(empty($uid) || empty($pwd)) {
    	header("Location: ../index.php?login=empty");
	    exit();
    }else{
    	$sql="SELECT * FROM users WHERE user_uid='$uid'";
    	$result=mysqli_query($conn ,$sql);
    	$resultCheck =mysqli_num_rows($result);
    	if($resultCheck < 1){
    		header("Location: ../index.php?login=error");
	    exit();

    	}else{
    		if($row=mysqli_fetch_assoc($result)){
    			$hashedPwdCheck=password_verify($pwd,$row['user_pwd']);
    			if($hashedPwdCheck == false) {
    				header("Location: ../login unsucessful.html?login=error");
	            exit();

    			}elseif($hashedPwdCheck == true) {
    				$_SESSION['u_id']=$row['user_id'];
    				$_SESSION['u_first']=$row['user_first'];
    				$_SESSION['u_last']=$row['user_last'];
    				$_SESSION['u_email']=$row['user_email'];
    				$_SESSION['u_uid']=$row['user_id'];
					header("Location: ../login successfull.php?login=success");
					session_start();
 
// Accessing session data

	       exit();

    			}
    		}
    	}
	}
	if (Session["user_id"]  != null)

{

        //then the page do be opened to a user

}

else

{

     //This is an invalid user send the user to the login page

response.redirect("index.php",false);

}

}else{
	header("Location: ../index.php?login=error");
	exit();
}
