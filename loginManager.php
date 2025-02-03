<?php
if(isset($_POST['submitBtn'])){
    if(empty($_POST['userNameBox']) || empty($_POST['passwordBox'])){
	echo "<h3>userName or password field is empty!</h3>";
    }
    else{
	$loginUserName='anakin99';
	$loginPassword='chancellor66';

	$userNameAuth=$_POST['userNameBox'] == $loginUserName ? true:false;
	$passwordAuth=$_POST['passwordBox'] == $loginPassword ? true:false;

	if(!$userNameAuth)
	    echo "<h3>invalid UserName!</h3>";

	else if(!$passwordAuth)
	    echo "<h3>invalid password!</h3>";

	else
	    echo "<h3>User : $loginUserName logged in Successfully!</h3>";

    }
}
?>
