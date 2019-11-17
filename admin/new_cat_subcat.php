<?php
	$servername = "localhost";
	$username = "edelweissuser4";
	$password = "edelweissuser4";
	$db="edelweissuser";
	$conn = mysqli_connect($servername, $username, $password,$db);
$result = mysqli_query($conn,"SELECT * FROM categories");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Category</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
  <?php  include("sidebar.php"); ?>
<div class="container">
	<form method="POST" action="">
		<div class="form-group">
		  <label for="sel1">Category</label>
		  <select class="form-control" id="category">
		  <option value="">Select Category</option>
		    <?php
			while($row = mysqli_fetch_array($result)) {
			?>
			
				<option value="<?php echo $row["cat_id"];?>"><?php echo $row["cat_title"];?></option>
			<?php
			}
			?>
			
		  </select>
		</div>
		<div class="form-group">
		  <label for="sel1">Sub Category</label>
		  <select class="form-control" id="sub_category" name="sub_category">
			
		  </select>
		</div>
		
		 <?php
            $sql = "SELECT * FROM `journal`";
            $result = mysqli_query($conn,$sql);
            while( $row = mysqli_fetch_assoc($result) ){ ?>
            <label>
            <input type="checkbox" name="segment[]" value="<?php echo $row['id']; ?>"> <?php echo $row['journal_title']; ?>
            </label>
            <?php    
            }
            ?>
            <button name="submit" type="submit">Submit</button>
	</form>
</div>
<script>
$(document).ready(function() {
	$('#category').on('change', function() {
			var category_id = this.value;
			$.ajax({
				url: "get_subcat.php",
				type: "POST",
				data: {
					category_id: category_id
				},
				cache: false,
				success: function(dataResult){
					$("#sub_category").html(dataResult);
				}
			});
		
		
	});
});
</script>
</body>
</html>
<?php  
if(isset($_POST['submit']))  
{  
$sub_category=$_POST['sub_category'];  
$checkbox1=$_POST['segment'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }
   $s="update subcategories set journals='$chk' where s_cat_id='$sub_category'";
 $in_ch=mysqli_query($conn,$s);  
if($in_ch)  
   {  
      echo'<script>alert("Inserted Successfully")</script>';  
   }  
else  
   {  
      echo'<script>alert("Failed To Insert")</script>';  
   }  
}  
?>  