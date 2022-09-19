<!--form-->
<html>
<head>
		<link href="admin_category.css" rel="stylesheet" type="text/css">
	</head>
	
<body>
<div id="content1">
<h1>Category</h1>
		
		<table>
			<form action="process.php" method="POST" enctype="multipart/form-data" >
			
			
			<tr>
				<td style="color:black; font-size:20px;"> Category </td>
				<td><input class="l" type="text" name="name" placeholder="Enter Your Category name" size="50" ></td>
			</tr>
			<tr>
				<td style="color:black; font-size:20px;"> Picture </td>
				<td><input class="l" type="file" name="image" size="50" placeholder="Enter Your Picture" ></td>
			</tr>
			<tr>
			<td><input type="submit" name="submit" value="submit"/></td>
			</tr>
			</form>
		</table>	
		
</div>		
</body>
</html>	



<!--data show-->
<?php
$connect=mysqli_connect('localhost','root','','plant');
$query="SELECT * FROM category ORDER BY c_id DESC";
$result=mysqli_query($connect,$query);
?>
<!DOCTYPE html>
<html>
	<body bgcolor="pink">
		<table align="center" border="1px solid black;" style="width:1100px; line-height:60px;">
		<tr>
		<th colspan="6"><h1 style="font-family:tahoma; color:black;"><u>Category</u></h1></th>
		</tr>
		
		<tr>
		<th style="color:black;">ID</th>
		<th style="color:black;">Name</th>
		<th style="color:black;">Image</th>
		<th colspan="2" style="color:black;">Action</th>
		</tr>
		<?php
		
			while($rows=mysqli_fetch_array($result))
			{
			$image= $rows['c_pic']; 
		?>
	<tr>
	    
		<td align="center" style="color:black;"><?php echo $rows['c_id'];?></td>
		<td align="center" style="color:black;"><?php echo $rows['c_name'];?></td>
		<td align="center" style="color:black;"><?php echo "<img src='images/$image' class='img'>";?></td>
		<td align="center" style="color:black;"> <a href="editdata.php?edit_id=<?php echo $rows["c_id"];?>">Edit</a></td>
		<td align="center" style="color:black;"> <a href="delete.php?c_id=<?php echo $rows['c_id'];?>">Delete</a></td>
		
	</tr>
	<?php
		}
	?>
			</table>
	</body>
</html>
