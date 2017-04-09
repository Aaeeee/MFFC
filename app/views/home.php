<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<title><?php echo $title; ?></title>
</head>
<body>
	<table border = 1>
		<thead>
			<th>user_email</th>
			<th>user_registered</th>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $users['user_email']; ?></td>
				<td><?php echo $users['user_registered']; ?></td>
			</tr>
		</tbody>
	</table>
	<hr />
	<div><?php echo 'Test redis value: '.$redis; ?></div>
</body>
</html>