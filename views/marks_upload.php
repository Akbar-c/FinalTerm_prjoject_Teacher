<?php
if(isset($_GET['action'])) {
	$users = simplexml_load_file('student_data.xml');
	$id = $_GET['id'];
	$index = 0;
	$i = 0;
	foreach($users->user as $user){
		if($user['id']==$id){
			$index = $i;
			break;
		}
		$i++;
	}
	unset($users->user[$index]);
	file_put_contents('student_data.xml', $users->asXML());
	}
	$users = simplexml_load_file('student_data.xml');
	$snum= 'Number of Students: '.count($users);
	$sinfo=' Engineering management ';
?>
<!DOCTYPE HTML>
<html lang="en">
		<head>
			<title>
				Marks Upload
			</title>
			<link rel="stylesheet" type="text/css" href="../css/studentInfo.css" >
		</head>
	<body>
	
	<div class="cell">
	<h1><?php echo $sinfo ?></h1>
	<h2><?php echo $snum ?></h2>
		<table class="content-table">
			<thead>
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>GPA </th>
					<th>Gender</th>
					<th>Phone</th>
					<th>Email</th>
					<th>Marks</th>
					
				</tr>
			</thead>
			
			
			<tbody>
			<?php foreach($users->user as $user) { ?>
			<tr>
				
				<td><?php echo $user['id']; ?></td>
				<td><?php echo $user->firstname; ?></td>
				<td><?php echo $user->CGPA; ?></td>
				<td><?php echo $user->gender; ?></td>
				<td><?php echo $user->phone; ?></td>
				<td><?php echo $user->email; ?></td>
				<td><a href=""><?php echo $user->marks; ?></a></td>
				
				
			</tr>
			<?php } ?>
			
			<tbody>
			
		</table>
	</div>
	</body>
</html>
