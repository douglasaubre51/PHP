<html>
<body>
<h1>Employee Records DataHandler</h1>

<form method=post action=''>

Employee ID : <input type='number' name='EId' />
<br><br>
Name : <input type='text' name='Name' />
<br><br>
Department : <input type='text' name='Department' />
<br><br>
Basic Salary : <input type='number' name='BasicSalary' />
<br><br>

<button type='submit' name='insertBtn'>insert record</button>
<button type='submit' name='deleteBtn'>delete By EId</button>
<button type='submit' name='selectBtn'>retrieve records</button>
<button type='submit' name='updateBtn'>update records</button>

</form>
</body>
</html>

<?php

if(isset($_POST['insertBtn'])){
    if(!(empty($_POST['EId']) || empty($_POST['Name']) || empty($_POST['Department']) || empty($_POST['BasicSalary']))){
	#db init
	$conn=mysqli_connect('localhost','root','chancellor66');
	($conn) ? print('connection ok!') : print('connection error!');
	echo '<br><br>';

	$createDbSql="create database if not exists EmployeeDb";
	mysqli_query($conn,$createDbSql);

	mysqli_select_db($conn,'EmployeeDb');

	$createTbSql="create table if not exists EmployeeRecords(EId int,EName varchar(30),Department varchar(10),BasicSalary int,DA decimal(10,2),HRA decimal(10,2),GrossSalary decimal(10,2))";
	mysqli_query($conn,$createTbSql);
	
	#getting fields
	$eId=$_POST['EId'];
	$name=$_POST['Name'];
	$department=$_POST['Department'];
	$basicSalary=$_POST['BasicSalary'];

	#calculate values
	$da=(50/100)*$basicSalary;
	$hra=(20/100)*$basicSalary;
	$grossSalary=$basicSalary+$da+$hra;

	#db insertion
	$insertSql="insert into EmployeeRecords values ($eId,'$name','$department',$basicSalary,$da,$hra,$grossSalary)";
	mysqli_query($conn,$insertSql);

	echo "db injection Successfull!";
    }
    else echo "enter all fields!";
}

else if(isset($_POST['deleteBtn'])){
    if(!empty($_POST['EId'])){
	#db init
	$conn=mysqli_connect('localhost','root','chancellor66');
	($conn) ? print('connection ok!') : print('connection error!');
	echo '<br><br>';

	mysqli_select_db($conn,'EmployeeDb');

	#getting field
	$eId=$_POST['EId'];

	#delete selected record
	$deleteSql="delete from EmployeeRecords where EId=$eId";
	mysqli_query($conn,$deleteSql);
	(mysqli_affected_rows($conn)>0) ? print('deleted selected record!') : print('EId doesnot exist!');
    }
    else echo 'enter EId of the employee to remove!';
}

if(isset($_POST['selectBtn'])){
	#db init
	$conn=mysqli_connect('localhost','root','chancellor66');
	($conn) ? print('connection ok!') : print('connection error!');
	echo '<br><br>';

	mysqli_select_db($conn,'EmployeeDb');

	#select db records
	$selectSql="select * from EmployeeRecords";
	$selectCursor=mysqli_query($conn,$selectSql);
	(mysqli_num_rows($selectCursor)>0) ? print('') : print('empty table!');

	#display db records
	echo '<h1>Employee Records</h1>';

	while($i=mysqli_fetch_assoc($selectCursor)){
	    echo "<h3>EId : $i[EId]</h3>";
	    echo "<h3>Employee Name : $i[EName]</h3>";
	    echo "<h3>Department : $i[Department]</h3>";
	    echo "<h3>Basic Salary : $i[BasicSalary]</h3>";
	    echo "<h3>DA : $i[DA]</h3>";
	    echo "<h3>HRA : $i[HRA]</h3>";
	    echo "<h3>Gross Salary : $i[GrossSalary]</h3>";
	}
}

if(isset($_POST['updateBtn'])){
    if(!(empty($_POST['EId']) || empty($_POST['Name']) || empty($_POST['Department']) || empty($_POST['BasicSalary']))){
	#db init
	$conn=mysqli_connect('localhost','root','chancellor66');
	($conn) ? print('connection ok!') : print('connection error!');
	echo '<br><br>';

	mysqli_select_db($conn,'EmployeeDb');

	#getting fields
	$eId=$_POST['EId'];
	$name=$_POST['Name'];
	$department=$_POST['Department'];
	$basicSalary=$_POST['BasicSalary'];

	#calculate values
	$da=(50/100)*$basicSalary;
	$hra=(20/100)*$basicSalary;
	$grossSalary=$basicSalary+$da+$hra;

	#update record
	$updateSql="update EmployeeRecords set EName='$name' where EId=$eId";
	mysqli_query($conn,$updateSql);
	$updateSql="update EmployeeRecords set Department='$department' where EId=$eId";
	mysqli_query($conn,$updateSql);
	$updateSql="update EmployeeRecords set BasicSalary=$basicSalary where EId=$eId";
	mysqli_query($conn,$updateSql);
	$updateSql="update EmployeeRecords set DA=$da where EId=$eId";
	mysqli_query($conn,$updateSql);
	$updateSql="update EmployeeRecords set HRA=$hra where EId=$eId";
	mysqli_query($conn,$updateSql);
	$updateSql="update EmployeeRecords set GrossSalary=$grossSalary where EId=$eId";
	mysqli_query($conn,$updateSql);

	echo "updated record of given EId!";
    }

    else echo 'enter all the fields!';
}
?>
