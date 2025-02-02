<html>
<head>
	<title>Form Submission</title>
</head>
<body>
<form method="get" name="form1">
Enter no 1 : <input type="number" name="numberBox1" />
<br>
Enter no 2 : <input type="number" name="numberBox2" />
<br>
<button type="submit" name="numberBtn">Click Me</button>
</form>
</body>
</html>
<?php
    echo "the no 1 is : ".$_REQUEST["numberBox1"]."<br>"."<hr>";
    echo "the no 2 is : ".$_REQUEST["numberBox2"]."<br>"."<hr>";
    $sum=$_REQUEST["numberBox1"]+$_REQUEST["numberBox2"];
    echo "the sum is : $sum";
?>
