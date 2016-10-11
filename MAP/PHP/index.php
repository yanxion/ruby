<?php
	$con = mysql_connect("localhost", "root", "123456");
	
	if(!$con){
		die("Error: ".mysql_error());
	}
	
	mysql_select_db("sample", $con);
	
	$result = mysql_query("SELECT * FROM");
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>	
		<body>
			<div>
				<table id="datatables">
					<thead>
						<tr>
							<th>name</th>
							<th>population</th>
							<th>internet_users</th>
							<th>penetration</th>
							<th>world_users</th>
						</tr>
					</thead>
					<tbody>
						<?php
							while ($row = mysql_fetch_array($result)){
							?>
							<tr>
								<td><?=$row['name']?></td>
								<td><?=$row['population']?></td>
								<td><?=$row['internet_users']?></td>
								<td><?=$row['penetration']?></td>
								<td><?=$row['world_users']?></td>
							</tr>
							<?php
						}
						?>
					</tbody>
				</table>
			</div>		
		</body>
</html>