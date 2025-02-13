<html>
<body>
<h1>Database DataHandler</h1>

<form method=post action='' >

name: <input type='text' name='name' />
<br><br>
regno: <input type='number' name='regno' />
<br><br>

mark1: <input type='number' name='mark1' />
<br><br>
mark2: <input type='number' name='mark2' />
<br><br>
mark3: <input type='number' name='mark3' />
<br><br>

<button type='submit' name='insertSql' > insert </button>
<button type='submit' name='selectSql' > retrieve </button>

</form>

</body>
</html>
<?php
if(isset($_POST['insertSql'])){
    if(!(empty($_POST['regno']) || empty($_POST['name']) || empty($_POST['mark1']) || empty($_POST['mark2']) || empty($_POST['mark3']))){

	# table creation 
	$conn=mysqli_connect('localhost','root','chancellor66');
	($conn) ? print("connection ok!") : print("connection error!");
	echo "<br><br>";

	mysqli_select_db($conn,'StudentDb');

	$tableSql="create table if not exists StudentTb(RegNo int,Name varchar(20),Mark1 int,Mark2 int,Mark3 int,Total int,Percent int)";
	mysqli_query($conn,$tableSql);

	$regno=$_POST['regno'];
	$name=$_POST['name'];
	$mark1=$_POST['mark1'];
	$mark2=$_POST['mark2'];
	$mark3=$_POST['mark3'];

	$total=$mark1+$mark2+$mark3;
	$percent=$total/3;

	# table action

	$insertSql="insert into StudentTb values ($regno,'$name',$mark1,$mark2,$mark3,$total,$percent)";
	mysqli_query($conn,$insertSql);

	echo "updated database successfully!";

    }

    else echo "enter all fields!";
}

if(isset($_POST['selectSql'])){

    $conn=mysqli_connect('localhost','root','chancellor66');
    ($conn) ? print("connection ok!") : print("connection error!");

    mysqli_select_db($conn,'StudentDb');

    # table action

    $selectSql="select * from StudentTb";
    $cursor=mysqli_query($conn,$selectSql);

    while($i=mysqli_fetch_assoc($cursor)){

	echo "<h1>Student Marklist</h1>";
	echo "<h3>Register Number : $i[RegNo]</h3>";
	echo "<h3>Student Name : $i[Name]</h3>";
	echo "<h3>Mark1 : $i[Mark1]</h3>";
	echo "<h3>Mark2 : $i[Mark2]</h3>";
	echo "<h3>Mark3 : $i[Mark3]</h3>";
	echo "<h3>Total : $i[Total]</h3>";
	echo "<h3>Percentage : $i[Percent] %</h3>";
    }
}
?>
