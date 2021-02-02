
<?php 
	include_once("config.php");

	$result = mysqli_query($mysqli, "SELECT * FROM country");
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Homepage</title>
	<body style="background-color:grey;">

</head>
<body>
	<a href=""></a>
	<h1><?php echo "COUNTRIES"; ?></h1> 
	<a href="add.html">Add new Data</a><br/><br/>

	<table>
		<tr bgcolor='#ccccccc'>
			<td>Id </td>
			<td>Iso </td>
			<td>Name </td>
			<td>Nicename </td>
			<td>Iso3 </td>
			<td>Numcode </td>
			<td>Phonecode </td>
			<td>Created_at </td>
		</tr>


		<?php 

		while( $res = mysqli_fetch_array($result)){
			echo "<tr bgcolor='#98AFC8'>";
			echo "<td>".$res['id']."</td>";
			echo "<td>".$res['iso']."</td>";
			echo "<td>".$res['name']."</td>";
			echo "<td>".$res['nicename']."</td>";
			echo "<td>".$res['iso3']."</td>";
			echo "<td>".$res['numcode']."</td>";
			echo "<td>".$res['phonecode']."</td>";
			echo "<td>".$res['created_at']."</td>";
			echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete this record?')\">Delete</a></td>";
			echo "</tr>";
		} 

		?>



	</table>

</body>
</html
