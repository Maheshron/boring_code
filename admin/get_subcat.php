<?php
	$servername = "localhost";
	$username = "edelweissuser4";
	$password = "edelweissuser4";
	$db="edelweissuser";
	$conn = mysqli_connect($servername, $username, $password,$db);

	$category_id=$_POST["category_id"];
	$result = mysqli_query($conn,"SELECT * FROM subcategories where cat_id=$category_id");
?>
<option value="">Select SubCategory</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
	<option value="<?php echo $row["s_cat_id"];?>"><?php echo $row["s_cat_title"];?></option><br>
<?php
}
?>