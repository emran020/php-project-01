<!DOCTYPE html>
<html>
<head>
<title>Basic MySQLi Commands</title>
</head>
<body>
		
	<br>
	<div>
		<table border="1">
			<thead>
				<th>Customer Name</th>
				<th>Product Name</th>
				<th>Price</th>
				<th>Sale Price</th>
				<th>Date</th>
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `orderproduct` 
					inner join user on orderproduct.userid=user.userid
					inner join products on orderproduct.product_id=products.id");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['firstname'].' '.$row['lastname']; ?></td>
							<td><?php echo $row['prouct_name']; ?></td>
							<td><?php echo $row['price']; ?></td>
							<td><?php echo $row['saleprice']; ?></td>
							<td><?php echo $row['create_date']; ?></td>
							<td>
								<a href="edit.php?id=<?php echo $row['userid']; ?>">Edit</a>
								<a href="delete.php?id=<?php echo $row['userid']; ?>">Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>