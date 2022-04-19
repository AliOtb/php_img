<html><body>

<form action="" enctype="multipart/form-date" method="post">
Select image : 
<input type ="file" name="file"><br/>
<input type="submit" value="Upload" name="submit"> <br/>
</form>

<?php
if(isset ($_POST['submit']))
{
	$filepath = "images/" .$_FILES["file"] ["name"];
	$fileName= $_FILES["file"] ["tmp_name"];
	if(move_uploaded_file($fileName,$filepath))
		echo "<img src=".$filepath." height=200 width=300 />";
	
		else
		echo "Error!!";
}
?>

</body></html>
