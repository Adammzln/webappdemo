 //*********************    Display table     *********************
    function get_tds(){
        $sql = "SELECT * FROM ats_details";
		$res = mysql_query($sql) or die(mysql_error());
    
if (mysql_num_rows($res)==0):
        
        else:
        ?>
<form method="post" action="sl_mr_ats.php" class="form-horizontal">
            <input type="hidden" name="add" value="true" />

			<table>
			<tr>
			<th> Year: </th>
			<td><select name="ddlbCalCode" onchange="javascript:setTimeout('__doPostBack(\'ddlbCalCode\',\'\')', 0)" id="ddlbCalCode" style="font-size:9pt;height:25px;width:150px;margin-left: 8px">
			<option selected="selected" value="15-16">15-16</option>
			<option value="14-15">14-15</option>
			<option value="13-14">13-14</option>
			<option value="12-13">12-13</option>
		</select>
            <input type="submit" name="btnAutoPopulate" value="Auto Populate" onclick="javascript:return confirm('The auto-populate function will automatically override all data for the current calendar code with copied data from the previous calendar code. Do you wish to continue?');" id="btnAutoPopulate" class="button" />
                        </td>
			</tr>
			
			</table>
		<table class='table table-condensed'>
			<tr>
			<th>Name</th>
			<th>Position</th>
			<th>HP No.</th>
			<th>Email</th>
			<th>T-shirt Size</th>
			</tr>
                <tr align=left>
			<td><input required type="text" class="col-sm-5" name="name" id="name" /></td>
            <td><input required type="text" class="col-sm-5" name="position" id="position" /></td>
            <td><input required type="text" class="col-sm-5" name="contact_no" id="contact_no" /></td>
            <td><input required type="text" class="col-sm-5" name="email" id="email" /></td>
            <td><input type="text" class="col-sm-5" name="tshirt_size" id="tshirt_size" /></td>
                </tr>
            </table>
                <div><input type="submit" name="submit" class="btn btn-danger" value="Add"/></div>
</form>


            
            
<?php
        endif;
        if (mysql_num_rows($res)!=0):
        ?>
<form method="post" action="sl_pa_ct.php" class="form-horizontal">
            <input type="hidden" name="save" value="true" />
            <table class='table table-condensed'>
<?php
        echo "
			<tr>
			<th>Name</th>
			<th>Position</th>
			<th>HP No.</th>
			<th>Email</th>
			<th>T-shirt Size</th>
			</tr>";
        while($row = mysql_fetch_assoc($res)){
            ?>
                <input type="hidden" name="attendees_id[]" value="<?php echo $row['attendees_id'] ?>" />
                <tr>
                <td><input required type="text" class="col-sm-5" name="name[]" id="name" value="<?php echo $row['name']?>"/></td>
                <td><input required type="text" class="col-sm-5" name="position[]" id="position" value="<?php echo $row['position']?>"/></td>
                <td><input required type="text" class="col-sm-5" name="contact_no[]" id="contact_no" value="<?php echo $row['contact_no']?>"/></td>
                <td><input required type="text" class="col-sm-5" name="email[]" id="email" value="<?php echo $row['email']?>"/></td>
                <td><input type="text" class="col-sm-5" name="tshirt_size[]" id="tshirt_size" value="<?php echo $row['tshirt_size']?>"/></td>
                </tr>
                <?php
        }
        ?>
                </table>

                <div><input type="submit" name="submit" class="btn btn-danger" value="Save"/></div>
                
                
</form>
<?php
        else:
        echo "NO DATA";
        endif;
        ?>

                <?php
    }
//*********************    add attendees into db     *********************    
    function add_attendees($p,$username){
        $name = mysql_real_escape_string($p['name']);
		$position = mysql_real_escape_string($p['position']);
		$contact_no = mysql_real_escape_string($p['contact_no']);
		$email = mysql_real_escape_string($p['email']);
		$tshirt_size = mysql_real_escape_string($p['tshirt_size']);
    $sql1 = "SELECT * FROM attendees_details";
		$res1 = mysql_query($sql1) or die(mysql_error());
    
if (mysql_num_rows($res1)==10):
        
        else:
    $sql = "INSERT INTO attendees_details VALUES ('$username','$name', '$position', '$contact_no','$email', '$tshirt_size','')";
			$res = mysql_query($sql) or die(mysql_error());
			echo "Added Succesfully";
        endif;
    }
//*********************    edit db (save)     *********************
    function save_attendees($_POST)
    {       
        $attendees_id=$_POST['attendees_id'];
        $name=$_POST['name'];
        $position=$_POST['position'];
        $contact_no=$_POST['contact_no'];
        $email=$_POST['email'];
        $tshirt_size=$_POST['tshirt_size'];
        $N = count($attendees_id);
            for($i=0; $i < $N; $i++)
        {   
        $result = mysql_query("UPDATE attendees_details SET name='$name[$i]' , position='$position[$i]', contact_no='$contact_no[$i]', email='$email[$i]', tshirt_size='$tshirt_size[$i]' WHERE attendees_id = '$attendees_id[$i]'");       
        }
    }
