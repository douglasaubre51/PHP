<?php
if(isset($_POST['submitBtn'])){
    if(empty($_POST['emailBox']) || empty($_POST['passwordBox'])){
	echo "<h3>email or password field is empty!</h3>";
    }
    else{
	$loginEmailID='anakin99@gmail.com';
	$loginPassword='chancellor66';

	$emailAuth=$_POST['emailBox'] == $loginEmailID ? true:false;
	$passwordAuth=$_POST['passwordBox'] == $loginPassword ? true:false;

	if(!$emailAuth)
	    echo "<h3>invalid email id!</h3>";

	else if(!$passwordAuth)
	    echo "<h3>invalid password!</h3>";

	else
	    echo "<h3>User : $loginEmailID logged in Successfully!</h3>";

    }
}
?>
