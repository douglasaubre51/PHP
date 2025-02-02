<html>
<body>
<h1>Is Prime Or Not</h1>

<form action='' method='post' name='forms'>
	<label>enter a no : </label>
	<input type='text' name='textBox1' />
	<button type='submit' name='formSubmission'>answer</button>

</form>

<?php
if(isset($_POST['formSubmission'])){

    $num=$_POST['textBox1'];

    if($num==1||$num==0){
	echo "$num is not a prime";
	exit;
    }
    else{
    	for($i=2;$i<=(int)($num**0.5);$i++){
		if($num%$i==0){
	    		echo "$num is a not prime";
	    		exit;
		}
    	}
    }
    echo "$num is a prime";
}
?>
</body>
</head>
