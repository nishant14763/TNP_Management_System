<?php

$conn = new PDO("mysql:host=localhost;dbname=dbms_lab",'root','');

if(isset($_POST['search']))
{
	$str = $_POST["search"];
	$sql = $conn->prepare("SELECT * FROM `student` WHERE roll_number = '$str'");
	$sql->setFetchMode(PDO:: FETCH_OBJ);
	$sql->execute();
	
	while(count($sql)>0)
	{
	if($row = $sql->fetch())
	{
		?>
		<br><br><br>
		<center>
		<table>
			<caption><h2><b>Student Details</b></h2></caption>
			<tr>
				<th>name</th>
				<td><?php echo $row->name; ?></td>
			</tr>
			<tr>
				<th>roll_number</th>
				<td><?php echo $row->roll_number;?></td>
			</tr>
			<tr>
				<th>date_of_birth</th>
				<td><?php echo $row->date_of_birth;?></td>
			</tr>
			<tr>
				<th>address</th>
				<td><?php echo $row->address;?></td>
			</tr>
			<tr>
				<th>email_id</th>
				<td><?php echo $row->email_id;?></td>
			</tr>
			<tr>
				<th>mobile_number</th>
				<td><?php echo $row->mobile_number;?></td>
			</tr>
			<tr>
				<th>sem1</th>
				<td><?php echo $row->sem1;?></td>
			</tr>
			<tr>
				<th>sem2</th>
				<td><?php echo $row->sem2;?></td>
			</tr>
			<tr>
				<th>sem3</th>
				<td><?php echo $row->sem3;?></td>
			</tr>
			<tr>
				<th>sem4</th>
				<td><?php echo $row->sem4;?></td>
			</tr>
			<tr>
				<th>sem5</th>
				<td><?php echo $row->sem5;?></td>
			</tr>
			<tr>
				<th>sem6</th>
				<td><?php echo $row->sem6;?></td>
			</tr>
			<tr>
				<th>sem7</th>
				<td><?php echo $row->sem7;?></td>
			</tr>
			<tr>
				<th>sem8</th>
				<td><?php echo $row->sem8;?></td>
			</tr>
			<tr>
				<th>cgpa</th>
				<td><?php echo $row->cgpa;?></td>
			</tr>
			<tr>
				<th>hobbies</th>
				<td><?php echo $row->hobbies;?></td>
			</tr>
			<tr>
				<th>hosteller</th>
				<td><?php echo $row->hosteller;?></td>
			</tr>
			<tr>
				<th>refer_any</th>
				<td><?php echo $row->refer_any;?></td>
			</tr>
		</table>
		</center>
<?php 
	}
	
	else
	{
		echo "Name Does not exist ";
	}
	}
}

?>