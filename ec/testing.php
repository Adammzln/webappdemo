<?php
require_once('database.php');
?>
<html>
<body>
<form class="form-horizontal" role="form" action="testing.php" method="post">

		<div class="form-group">
		<label for="uni" class="col-sm-2 control-label'"> University:
		</label>&nbsp;&nbsp;
		<select class="form-control" style="width:auto; display:inline;" id="university" name="university" >
		<?php
		
		$sql = "SELECT * FROM sl_details";
		$res = mysql_query($sql) or die(mysql_error());
			while($row = mysql_fetch_assoc($res)):
			{
			?>
			<div>
			<option class="form-control" value="<?php echo $row['sl_id']?>"> <?php echo $row['username']?>
			</option>
			</div>
			<?php
			}
			endwhile;
		?>;
		</select>
		<input type="submit" name="btnAutoPopulate" value="Confirm" id="btnAutoPopulate" class="button" />
		<input type="hidden" name="add_participant" value="true">
		</div>
</form>


<div>
<?php

	if($_POST['add_participant']):
		$obj->add_participant($_POST);
	endif;
	
	

?>

</div>

</body>
</html>