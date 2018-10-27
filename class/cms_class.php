<?php

class emnc{
	 var $host;
	 var $username;
	 var $password;
	 var $db;
//*********************    connect db     *********************
	 function connect(){
	 $con = mysql_connect($this->host, $this->username, $this->password) or die(mysql_error());
	 mysql_select_db($this->db, $con) or die(mysql_error());
	 }
//*********************    add participant     *********************	 
	 function add_participant($p){
	 
		$university = mysql_real_escape_string($p['university']);
		
		echo $university;
	 }
//*********************    ori     *********************    
	 function get_content($id = ''){
		
		if($id != ""):
			$id = mysql_real_escape_string($id);
			$sql = "SELECT * FROM cms_content WHERE id = '$id'";
			
			$return= '<p><a href="index.php">Go back to content</a></p>';
		else:
			$sql = "SELECT * FROM cms_content ORDER BY id";
		endif;
		
	 $res = mysql_query($sql) or die(mysql_error());
	 
	 if(mysql_num_rows($res) != 0):
		while($row = mysql_fetch_assoc($res)){
			echo '<h1>' . $row['type'] . '</a></h1>';
			echo '<p>' . $row['price_day'] . '<br>'. $row['price_week'] .'<br>'. $row['price_month'] .'</p>';
		}
		else:
			echo '<p>No Result.</p>';
		endif;
		
		echo $return;
	 }
//*********************    ori     *********************
	 function add_content($p) {
		
		$type = mysql_real_escape_string($p['type']);
		$plate = mysql_real_escape_string($p['plate']);
		$price_day = mysql_real_escape_string($p['price_day']);
		$price_week = mysql_real_escape_string($p['price_week']);
		$price_month = mysql_real_escape_string($p['price_month']);
		$status = mysql_real_escape_string($p['status']);
		$image = mysql_real_escape_string($p['image']);
		$seat = mysql_real_escape_string($p['seat']);
		
		if(!$type || !$plate|| !$seat || !$price_day || !$price_week || !$price_month || !$status || !$image):
			
			if(!$type):
				echo "<p>The car type is required</p>";
			endif;
			if(!$plate):
				echo "<p>The plate number is required</p>";
			endif;
			if(!$price_day):
				echo "<p>The price for a day is required</p>";
			endif;
			if(!$price_week):
				echo "<p>The price for a week is required</p>";
			endif;
			if(!$price_month):
				echo "<p>The price for a month is required</p>";
			endif;
			if(!$status):
				echo "<p>The status is required</p>";
			endif;
			if(!$image):
				echo "<p>The image is required</p>";
			endif;
			if(!$seat):
				echo "<p>The seat is required</p>";
			endif;
			
			
			echo '<p><a href="add_content.php">Try Again!</a></p>';
			echo '<p><a href="../index.php">Go back to content</a></p>';
		else:
			$sql = "INSERT INTO cms_content VALUES (null, '$type', '$plate', '$seat','$price_day', '$price_week', '$price_month', '$status','image')";
			$res = mysql_query($sql) or die(mysql_error());
			echo "Added Succesfully";
			echo '<p><a href="index.php">Back</a></p>';
		endif;
		
	}
	 function manage_content() {
	$sql="SELECT * FROM cms_content";
	$res=mysql_query($sql) or die(mysql_error());
		echo '
		<table>
			<tr>
			<th>Car Type</th><th>Plate Number</th><th>Seat</th><th>Price (RM)</th><th>Status</th><th>Action</th>
			</tr>';
		

		while($row=mysql_fetch_assoc($res))
		{
		?>
			<tr align=center>
			<td><img src="<?php echo $row['image']?>" alt="<?php echo $row['type']?>" width="220" height="150"></td>
			<td><?php echo $row['type']?></td><td><?php echo $row['plate'];?></td>
			<td><?php echo $row['seat']?></td>
			<td><?php echo $row['price_day'];?>
				<br><?php echo $row['price_week'];?>
				<br><?php echo $row['price_month'];?></td><td><?php echo $row['status'];?></td>
			<td><a href="update_content.php?id=<?php echo $row['id']?>">Edit</a> | <a href="?delete=<?php echo $row['id']?>">Delete</a></td>
			</tr>
		<?php
		}
		echo '</table>';
	 
	 
	 }
//*********************    ori     *********************
	  function delete_content($id){
        if(!$id){
            return false;
        }else{
            $id = mysql_real_escape_string($id);
            $sql = "DELETE FROM cms_content WHERE id = '" . $id . "'";
            $res = mysql_query($sql) or die(mysql_error());
            echo "Content Deleted Succesffuly";
		}
	 }
//*********************    ori     *********************
	 function cust_order() {
	$sql="SELECT * FROM order_detail";
	$res=mysql_query($sql) or die(mysql_error());
		echo '
		<table>
			<tr>
			<th>Username</th><th>Car ID</th><th>Option</th><th>Pick-up Time</th><th>Pick-up Date</th><th>Total Price (RM)</th><th>Order Date</th><th>Action</th>
			</tr>';
		

		while($row=mysql_fetch_assoc($res))
		{
		?>
			<tr align=center>
			<td><?php echo $row['username']?></td>
			<td><?php echo $row['car_id']?></td><td><?php echo $row['option'];?></td>
			<td><?php echo $row['time'];?></td>
			<td><?php echo $row['pick_up_date'];?></td><td><?php echo $row['total_price'];?></td>
			<td><?php echo $row['date']?></td>
			<td><a href="?delete=<?php echo $row['order_id']?>">Delete</a></td>
			</tr>
		<?php
		}
		echo '</table>';
	 }
//*********************    ori     *********************    
	  function delete_cust_order($id){
		$status='available';
		$id = mysql_real_escape_string($id);
		$sql_order = "SELECT * FROM order_detail WHERE order_id = '$id'";
		$res_order=mysql_query($sql_order) or die(mysql_error());
		$row= mysql_fetch_assoc($res_order);
		$car_id=$row['car_id'];
		
		
        if(!$id){
            return false;
        }else{
            $sql = "DELETE FROM order_detail WHERE order_id = $id";
            $res = mysql_query($sql) or die(mysql_error());
			$sql_update_car= "UPDATE cms_content SET status='$status' WHERE id = '$car_id'";
			$res_update_car=mysql_query($sql_update_car) or die(mysql_error());
			
			
            echo "Content Deleted Succesffuly";
		}
	 }

//*********************    Ori     *********************
function car_rent($id) {
	
	$name=mysql_real_escape_string($name);
	$id = mysql_real_escape_string($id);
	
	$sql = "SELECT * FROM cms_content WHERE id = '$id'";
	$res=mysql_query($sql) or die(mysql_error());
	$row = mysql_fetch_assoc($res);
		?>
		<!--<table>
			<tr>
			<th>Image</th><th>Car Type</th><th>Plate Number</th><th>Price Per Hour</th><th>Status</th><th>Action</th>
			</tr>';
		
		
			<tr align=center>
			<td><img src="<?php echo $row['image']?>" width="100" height="100"></td>
			<td><?php echo $row['type']?></td><td><?php echo $row['plate'];?></td>
			<td><?php echo $row['price'];?></td><td><?php echo $row['status'];?></td>
			<td><a href="#.php?id=<?php echo $row['id']?>">Edit</a> | <a href="?delete=<?php echo $row['id']?>">Delete</a></td>
			</tr>
		
		
		</table>-->
		
		<center><img src="<?php echo $row['image']?>" width="250" height="200">
		<br><b>RM <?php echo $row['price_day']?></b> per day
		<br><b>RM <?php echo $row['price_week']?></b> per week
		<br><b>RM <?php echo $row['price_month']?></b> per month
		</center>
		
	<form method="post" action="order_detail.php">
	
		<input type="hidden" name="order" value="true" />
		<input type="hidden" name="id" value="<?php echo $row['id'] ?>" />
		<table>
		<tr>
		<td width="40%">Car Type</td><td width="40%">: <b><?php echo $row['type']?></b></td>
		</tr>
		<tr>
		<td>Plate No.</td><td>: <b><?php echo $row['plate']?></b></td>
		</tr>
		<tr>
		<td> Car Seat</td><td>: <b><?php echo $row['seat']?></b></td>
		</tr>
		<tr>
		<td>Pick-up Date</td><td>: <input type="date" name="date" min="<?php echo date("Y-m-d"); ?>" value="<?php echo date("Y-m-d"); ?>"></td>
		</tr>
		
		<tr>
		<td>Pick-up Time</td><td>: <select name="time" id="time">
		<option value="9:00 AM">9:00 AM</option>
		<option value="10:00 AM">10:00 AM</option>
		<option value="11:00 AM">11:00 AM</option>
		<option selected="selected" value="12:00 PM">12:00 PM</option>
		<option value="1:00 PM">1:00 PM</option>
		<option value="2:00 PM">2:00 PM</option>
		<option value="3:00 PM">3:00 PM</option>
		<option value="4:00 PM">4:00 PM</option>
		<option value="5:00 PM">5:00 PM</option>
		<option value="6:00 PM">6:00 PM</option>
		<option value="7:00 PM">7:00 PM</option>
		<option value="8:00 PM">8:00 PM</option>
		<option value="9:00 PM">9:00 PM</option>
		<option value="10:00 PM">10:00 PM</option>
		</select>
		</td>
		</tr>
		<tr>
		<td>Time For Rent</td><td>: <select name="option" id="option">
		<option value="per day">per day</option>
		<option value="per week">per week</option>
		<option value="per month">per month</option>
		</select>
		</td>
		</tr>
		
		</table>
		<input type="submit" name="submit" value="RENT" />
	</form>
		
		<a href="view_car.php">Back to Car List</a>
	 <?php
	 
	 }
//*********************    Ori     *********************
function order_detail($p,$name) {
		
		//table order_detail
		$name = mysql_real_escape_string($name);
		$time = mysql_real_escape_string($p['time']);
		$option = mysql_real_escape_string($p['option']);
		$date = mysql_real_escape_string($p['date']);
		$order_date=date("Y-m-d");
		$rent="renting";
		$id = mysql_real_escape_string($p['id']);

		//table cms_content
		$sql="SELECT * FROM cms_content WHERE id='$id'";
		$res=mysql_query($sql) or die(mysql_error());
		$row=mysql_fetch_assoc($res);
		$price_day_car=$row['price_day'];
		$price_week_car=$row['price_week'];
		$price_month_car=$row['price_month'];
		
		//switch case
		switch ($option)
		{
		case "per day":
		$test=$price_day_car+10+20;
		break;
		case "per week":
		$test=$price_week_car+30+40;
		break;
		case "per month":
		$test=$price_month_car+100+80;
		break;
		}
		
		
		$total=number_format($test,2);
		
		if(!$time || !$option || !$date):
			
			if(!$time):
				echo "<p>The time is required</p>";
			endif;
			if(!$option):
				echo "<p>The option is required</p>";
			endif;
			if(!$date):
				echo "<p>The date is required</p>";
			endif;
			
			echo '<p><a href="car_rent.php?id='.$row['id'].'">Try Again!</a></p>';
			echo '<p><a href="view_car.php">Car List</a></p>';
		else:
	
			$sql = "INSERT INTO order_detail VALUES (null, '$name', '$id', '$time', '$option', '$total', '$date', '$order_date', '$rent')";
			$res = mysql_query($sql) or die(mysql_error());
			$sql2 = "UPDATE cms_content SET status='$rent' WHERE id = '$id'";
			$res2 = mysql_query($sql2) or die(mysql_error());
			echo "Added Succesfully";
			echo '<p><a href="customer_member.php">Back</a></p>';
		endif;
		
	}
//*********************    Ori     *********************
function rent_detail($name){
	
		//table order_detail 
		$name = mysql_real_escape_string($name);
		$sql_order="SELECT * FROM order_detail WHERE username='$name'";
		$res_order=mysql_query($sql_order) or die(mysql_error());
		$row_order=mysql_fetch_assoc($res_order);
		$order_id=$row_order['order_id'];
		$time_order=$row_order['time'];
		$option_order=$row_order['option'];
		$pick_up_order=$row_order['pick_up_date'];
		$car_id_order=$row_order['car_id'];
		$total_order=$row_order['total_price'];
		
		//table customer_detail
		$sql_cust="SELECT * FROM customer_detail WHERE customer_username='$name'";
		$res_cust=mysql_query($sql_cust) or die(mysql_error());
		$row_cust=mysql_fetch_assoc($res_cust);
		$name_cust=$row_cust['customer_fullname'];
		$contact_cust=$row_cust['customer_contact'];
		
		//table cms_content
		$sql_car="SELECT * FROM cms_content WHERE id='$car_id_order'";
		$res_car=mysql_query($sql_car) or die(mysql_error());
		$row_car=mysql_fetch_assoc($res_car);
		$type_car=$row_car['type'];
		$plate_car=$row_car['plate'];
		$price_day_car=$row_car['price_day'];
		$price_week_car=$row_car['price_week'];
		$price_month_car=$row_car['price_month'];
		
		//switch case
		switch ($option_order)
		{
		case "per day":
		$price=$price_day_car;
		break;
		case "per week":
		$price=$price_week_car;
		break;
		case "per month":
		$price=$price_month_car;
		break;
		}
		?>
		
		<table>
		<tr>
		<td>Name</td><td>: <?php echo $name_cust?></td>
		</tr>
		<tr>
		<td>Phone Number</td><td>: <?php echo $contact_cust?></td>
		</tr>
		<tr>
		<td>Car Type</td><td>: <?php echo $type_car?></td>
		</tr>
		<tr>
		<td>Car Plate</td><td>: <?php echo $plate_car?></td>
		</tr>
		<tr>
		<td>Pick-up Date</td><td>: <?php echo $pick_up_order?></td>
		</tr>
		<tr>
		<td>Pick-up Time</td><td>: <?php echo $time_order?></td>
		</tr>
		<tr>
		<td>Time Rent</td><td>: <?php echo $option_order?></td>
		</tr>
		
		
		</table>
		<br><br>
		<?php
		switch ($option_order)
		{
		case "per day":
		?>
		<table>
		<tr>
		<td width="10%"></td><td width="20%">Price Per Day</td><td width="20%">&nbsp;RM <?php echo $price?></td>
		</tr>
		<tr>
		<td></td><td>Car Service</td><td>&nbsp;RM&nbsp; 10.00</td>
		</tr>
		<tr>
		<td>+</td><td>Sub Charge</td><td>&nbsp;RM&nbsp; 20.00</td>
		</tr>
		<tr>
		<td></td><td><b>Total</b></td><td><font size="4"><b>RM <?php echo $total_order ?></b></font></td>
		</tr>
		</table>
		
		<a style="margin-left:450px;" href="?delete=<?php echo $row_order['order_id']?>"><input type="submit" name="submit" value="Cancel Order"></a>
		<?php
		break;
		case "per week":
				?>
		<table>
		<tr>
		<td width="10%"></td><td width="20%">Price Per Week</td><td width="20%">&nbsp;RM <?php echo $price?></td>
		</tr>
		<tr>
		<td></td><td>Car Service</td><td>&nbsp;RM&nbsp; 30.00</td>
		</tr>
		<tr>
		<td>+</td><td>Sub Charge</td><td>&nbsp;RM&nbsp; 40.00</td>
		</tr>
		<tr>
		<td></td><td><b>Total</b></td><td><font size="4"><b>RM <?php echo $total_order ?></b></font></td>
		</tr>
		</table>
		
		<a style="margin-left:450px;" href="?delete=<?php echo $row_order['order_id']?>"><input type="submit" name="submit" value="Cancel Order"></a>
		<?php
		break;
		case "per month":
				?>
		<table>
		<tr>
		<td width="10%"></td><td width="20%">Price Per Month</td><td width="20%">&nbsp;RM <?php echo $price?></td>
		</tr>
		<tr>
		<td></td><td>Car Service</td><td>&nbsp;RM&nbsp; 100.00</td>
		</tr>
		<tr>
		<td>+</td><td>Sub Charge</td><td>&nbsp;RM&nbsp; 80.00</td>
		</tr>
		<tr>
		<td></td><td><b>Total</b></td><td><font size="4"><b>RM <?php echo $total_order ?></b></font></td>
		</tr>
		</table>
		
		<a style="margin-left:450px;" href="?delete=<?php echo $row_order['order_id']?>"><input type="submit" name="submit" value="Cancel Order"></a>
		<?php
		break;
		}
		?>
		
		
		<p>
		<font color="red" size="2">* Please photocopy your licence and identity card.
		<br>* The management reserves the right to refuse admission by refunding the purchased.
		<br>* Please do not litter in the vehicles and help us to keep vehicles clean.
		</font></p>
		<?php
		
	
	}	
//*********************    Ori     *********************	
	function delete_order($id){
		$status='available';
		$id = mysql_real_escape_string($id);
		$sql_order = "SELECT * FROM order_detail WHERE order_id = '$id'";
		$res_order=mysql_query($sql_order) or die(mysql_error());
		$row= mysql_fetch_assoc($res_order);
		$car_id=$row['car_id'];
		
		
        if(!$id){
            return false;
        }else{
            $sql = "DELETE FROM order_detail WHERE order_id = $id";
            $res = mysql_query($sql) or die(mysql_error());
			$sql_update_car= "UPDATE cms_content SET status='$status' WHERE id = '$car_id'";
			$res_update_car=mysql_query($sql_update_car) or die(mysql_error());
			
			
            echo "<center><font color='red'>Order Cancelled</font></center>";
		}
	 }
    
    
    
    
    
    
    
    
    
    
    
//*********************    Update Student Leader Details     *********************
	 function update_user_form($id) {
		$id = mysql_real_escape_string($id);
		$sql = "SELECT * FROM sl_details WHERE sl_id = '$id'";
		
		$res = mysql_query($sql) or die(mysql_error());
		$row = mysql_fetch_assoc($res);
		?>
		
		<form method="post" action="ec_home.php">
	
		<input type="hidden" name="update_user" value="true" />
		<input type="hidden" name="sl_id" value="<?php echo $row['sl_id'] ?>" />
		<div>
			<label for="type">University:</label>
			<input type="text" name="university" id="university" value="<?php echo $row['university'] ?>" />
		</div>
		
		<div>
			<label for="c_president">Current President :</label>
			<input type="text" name="c_president" id="c_president" value="<?php echo $row['c_president'] ?>" />
		</div>
		
		<div>
			<label for="email">Email :</label>
			<input type="text" name="email" id="email" value="<?php echo $row['email'] ?>" />
		</div>
		
		<div>
			<label for="contact">Contact Number :</label>
			<input type="text" name="contact" id="contact" value="<?php echo $row['contact'] ?>" />
		</div>
		
		<div>
			<label for="date">Joined Date) :</label>
			<input type="text" name="date" id="date" value="<?php echo $row['date'] ?>" />
		</div>
		<input type="submit" name="submit" value="Update University" />
	</form>
		
	<?php
		}
//*********************    Update Student Leader     *********************	 
	function update_user($p) {
		$sl_id = mysql_real_escape_string($p['sl_id']);
		$university = mysql_real_escape_string($p['university']);
		$email = mysql_real_escape_string($p['email']);
		$c_president = mysql_real_escape_string($p['c_president']);
		$contact = mysql_real_escape_string($p['contact']);
		$date = mysql_real_escape_string($p['date']);
		
		
		if(!$university ||!$email || !$c_president || !$contact || !$date):
			
			if(!$university):
				echo "<p>The car university is required</p>";
			endif;
			if(!$email):
				echo "<p>The email number is required</p>";
			endif;
			if(!$c_president):
				echo "<p>The price for a day is required</p>";
			endif;
			if(!$contact):
				echo "<p>The price for a week is required</p>";
			endif;
			if(!$date):
				echo "<p>The price for a month is required</p>";
			endif;
			

echo '<p><a href="ec_ad_urole_edit.php?sl_id='.$sl_id.'">Try Again</a></p>';

else:
$sql = "UPDATE sl_details SET sl_id='$sl_id', email='$email', university='$university' , c_president='$c_president',contact='$contact',date='$date' WHERE sl_id = '$sl_id'";
$res=mysql_query($sql) or die(mysql_error());
echo "Updated University Details Successfully!";
echo '<p><a href="ec_ad_urole.php">Back</a></p>';
endif;
	 }
	 
//*********************    Student Leader Roles     *********************	 
function user_role($sl_id){

		echo "
		<table class='table table-condensed'>
			<tr>
			<th>No.</th>
			<th>University</th>
			<th>Current President</th>
			<th>email</th>
			<th>Contact Number</th>
			<th>Joined Date</th>
			<th>Overwrite</th>
			</tr>";
		$sql="SELECT * FROM sl_details";
		$res=mysql_query($sql) or die(mysql_error());
		?>
        <form>  
    <?php
		while($row=mysql_fetch_assoc($res)){
		echo'
			<tr align=left>
			<td>'.$row['sl_id'].' </td>
			<td>'.$row['university'].' </td>
			<td>'.$row['c_president'].'</td>
			<td>'.$row['email'].'</td>
			<td>'.$row['contact'].'</td>
			<td>'.$row['date'].'</td>
			<td><a href="ec_ad_urole_edit.php?sl_id='.$row["sl_id"].'">Edit</a></td>
			</tr>';
		}
		
		
		?>
		</form>
		
		<?php
		echo '</table>';
	}
        
    //*********************    Display table of Competition Team    *********************
    function get_attendees_ct($username){
        
        $sql = "SELECT * FROM attendees_details where (position ='Leader' or position ='Presenter' or position = 'Technician') AND username ='$username'";
		$res = mysql_query($sql) or die(mysql_error());
    
if (mysql_num_rows($res)==10):
            echo "Maximum for one team is ten representative.";
        else:
        ?>
<form method="post" action="sl_pa_ct.php" class="form-horizontal">
            <input type="hidden" name="add" value="true" />

		<table class='table table-condensed'>
			<tr>
			<th>Name</th>
			<th>Position</th>
			<th>HP No.</th>
			<th>Email</th>
			<th>T-shirt Size</th>
			</tr>
                <tr align=left>
			<td><input required type="text" class="col-sm-12" name="name" id="name" /></td>
            <td><input required type="text" class="col-sm-12" name="position" id="position" /></td>
            <td><input required type="text" class="col-sm-12" name="contact_no" id="contact_no" /></td>
            <td><input required type="text" class="col-sm-12" name="email" id="email" /></td>
            <td><input type="text" class="col-sm-12" name="tshirt_size" id="tshirt_size" /></td>
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
                <td><input required type="text" class="col-sm-12" name="name[]" id="name" value="<?php echo $row['name']?>"/></td>
                <td><input required type="text" class="col-sm-12" name="position[]" id="position" value="<?php echo $row['position']?>"/></td>
                <td><input required type="text" class="col-sm-12" name="contact_no[]" id="contact_no" value="<?php echo $row['contact_no']?>"/></td>
                <td><input required type="text" class="col-sm-12" name="email[]" id="email" value="<?php echo $row['email']?>"/></td>
                <td><input type="text" class="col-sm-12" name="tshirt_size[]" id="tshirt_size" value="<?php echo $row['tshirt_size']?>"/></td>
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
//*********************    add attendees (competition team) into db, limit 10 person   *********************    
    function add_attendees_ct($p,$username){
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
//*********************    edit db (save, competition team)     *********************
    function save_attendees_ct($_POST)
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
    

 //*********************    Display table for oberver    *********************
    function get_attendees_o($username){
        $sql = "SELECT * FROM attendees_details where position ='Observer' AND username ='$username'";
		$res = mysql_query($sql) or die(mysql_error());
    

        
        
        ?>
<form method="post" action="sl_pa_o.php" class="form-horizontal">
            <input type="hidden" name="add" value="true" />

		<table class='table table-condensed'>
			<tr>
			<th>Name</th>
			<th>HP No.</th>
			<th>Email</th>
			<th>T-shirt Size</th>
			</tr>
                <tr align=left>
			<td><input required type="text" class="col-sm-12" name="name" id="name" /></td>
            <td><input required type="text" class="col-sm-12" name="contact_no" id="contact_no" /></td>
            <td><input required type="text" class="col-sm-12" name="email" id="email" /></td>
            <td><input type="text" class="col-sm-12" name="tshirt_size" id="tshirt_size" /></td>
                </tr>
            </table>
                <div><input type="submit" name="submit" class="btn btn-danger" value="Add"/></div>
</form>
        

            
            
<?php
        if (mysql_num_rows($res)!=0):
        ?>
<form method="post" action="sl_pa_o.php" class="form-horizontal">
            <input type="hidden" name="save" value="true" />
            <table class='table table-condensed'>
<?php
        echo "
			<tr>
			<th>Name</th>
			<th>HP No.</th>
			<th>Email</th>
			<th>T-shirt Size</th>
			</tr>";
        while($row = mysql_fetch_assoc($res)){
            ?>
                <input type="hidden" name="attendees_id[]" value="<?php echo $row['attendees_id'] ?>" />
                <tr>
                <td><input required type="text" class="col-sm-12" name="name[]" id="name" value="<?php echo $row['name']?>"/></td>
                <td><input required type="text" class="col-sm-12" name="contact_no[]" id="contact_no" value="<?php echo $row['contact_no']?>"/></td>
                <td><input required type="text" class="col-sm-12" name="email[]" id="email" value="<?php echo $row['email']?>"/></td>
                <td><input type="text" class="col-sm-12" name="tshirt_size[]" id="tshirt_size" value="<?php echo $row['tshirt_size']?>"/></td>
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
    
    //*********************    add attendees,observer into db     *********************    
    function add_attendees_o($p,$username){
        $name = mysql_real_escape_string($p['name']);
		$position = mysql_real_escape_string($p['position']);
		$contact_no = mysql_real_escape_string($p['contact_no']);
		$email = mysql_real_escape_string($p['email']);
		$tshirt_size = mysql_real_escape_string($p['tshirt_size']);
    $sql1 = "SELECT * FROM attendees_details";
		$res1 = mysql_query($sql1) or die(mysql_error());
        $position = "Observer";
    

    $sql = "INSERT INTO attendees_details VALUES ('$username','$name', '$position', '$contact_no','$email', '$tshirt_size','')";
			$res = mysql_query($sql) or die(mysql_error());
			echo "Added Succesfully";
        
    }
 //*********************    Display table for alumni     *********************
    function get_attendees_af($username){
        $sql = "SELECT * FROM attendees_details where position ='Alumni' AND username ='$username'";
		$res = mysql_query($sql) or die(mysql_error());
    

        
        
        ?>
<form method="post" action="sl_pa_af.php" class="form-horizontal">
            <input type="hidden" name="add" value="true" />

		<table class='table table-condensed'>
			<tr>
			<th>Name</th>
			<th>HP No.</th>
			<th>Email</th>
			<th>T-shirt Size</th>
			</tr>
                <tr align=left>
			<td><input required type="text" class="col-sm-12" name="name" id="name" /></td>
            <td><input required type="text" class="col-sm-12" name="contact_no" id="contact_no" /></td>
            <td><input required type="text" class="col-sm-12" name="email" id="email" /></td>
            <td><input type="text" class="col-sm-12" name="tshirt_size" id="tshirt_size" /></td>
                </tr>
            </table>
                <div><input type="submit" name="submit" class="btn btn-danger" value="Add"/></div>
</form>
        

            
            
<?php
        if (mysql_num_rows($res)!=0):
        ?>
<form method="post" action="sl_pa_af.php" class="form-horizontal">
            <input type="hidden" name="save" value="true" />
            <table class='table table-condensed'>
<?php
        echo "
			<tr>
			<th>Name</th>
			<th>HP No.</th>
			<th>Email</th>
			<th>T-shirt Size</th>
			</tr>";
        while($row = mysql_fetch_assoc($res)){
            ?>
                <input type="hidden" name="attendees_id[]" value="<?php echo $row['attendees_id'] ?>" />
                <tr>
                <td><input required type="text" class="col-sm-12" name="name[]" id="name" value="<?php echo $row['name']?>"/></td>
                <td><input required type="text" class="col-sm-12" name="contact_no[]" id="contact_no" value="<?php echo $row['contact_no']?>"/></td>
                <td><input required type="text" class="col-sm-12" name="email[]" id="email" value="<?php echo $row['email']?>"/></td>
                <td><input type="text" class="col-sm-12" name="tshirt_size[]" id="tshirt_size" value="<?php echo $row['tshirt_size']?>"/></td>
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
        
//*********************    add attendees,alumni into db     *********************    
    function add_attendees_af($p,$username){
        $name = mysql_real_escape_string($p['name']);
		$position = mysql_real_escape_string($p['position']);
		$contact_no = mysql_real_escape_string($p['contact_no']);
		$email = mysql_real_escape_string($p['email']);
		$tshirt_size = mysql_real_escape_string($p['tshirt_size']);
    $sql1 = "SELECT * FROM attendees_details";
		$res1 = mysql_query($sql1) or die(mysql_error());
        $position = "Alumni";
    

    $sql = "INSERT INTO attendees_details VALUES ('$username','$name', '$position', '$contact_no','$email', '$tshirt_size','')";
			$res = mysql_query($sql) or die(mysql_error());
			echo "Added Succesfully";
        
    }
 //*********************    Display table for supporter     *********************
    function get_attendees_sfa($username){
        $sql = "SELECT * FROM attendees_details where position ='Supporter' AND username ='$username'";
		$res = mysql_query($sql) or die(mysql_error());
    

        
        
        ?>
<form method="post" action="sl_pa_sfa.php" class="form-horizontal">
            <input type="hidden" name="add" value="true" />

		<table class='table table-condensed'>
			<tr>
			<th>Name</th>
			<th>HP No.</th>
			<th>Email</th>
			<th>T-shirt Size</th>
			</tr>
                <tr align=left>
			<td><input required type="text" class="col-sm-12" name="name" id="name" /></td>
            <td><input required type="text" class="col-sm-12" name="contact_no" id="contact_no" /></td>
            <td><input required type="text" class="col-sm-12" name="email" id="email" /></td>
            <td><input type="text" class="col-sm-12" name="tshirt_size" id="tshirt_size" /></td>
                </tr>
            </table>
                <div><input type="submit" name="submit" class="btn btn-danger" value="Add"/></div>
</form>
        

            
            
<?php
        if (mysql_num_rows($res)!=0):
        ?>
<form method="post" action="sl_pa_sfa.php" class="form-horizontal">
            <input type="hidden" name="save" value="true" />
            <table class='table table-condensed'>
<?php
        echo "
			<tr>
			<th>Name</th>
			<th>HP No.</th>
			<th>Email</th>
			<th>T-shirt Size</th>
			</tr>";
        while($row = mysql_fetch_assoc($res)){
            ?>
                <input type="hidden" name="attendees_id[]" value="<?php echo $row['attendees_id'] ?>" />
                <tr>
                <td><input required type="text" class="col-sm-12" name="name[]" id="name" value="<?php echo $row['name']?>"/></td>
                <td><input required type="text" class="col-sm-12" name="contact_no[]" id="contact_no" value="<?php echo $row['contact_no']?>"/></td>
                <td><input required type="text" class="col-sm-12" name="email[]" id="email" value="<?php echo $row['email']?>"/></td>
                <td><input type="text" class="col-sm-12" name="tshirt_size[]" id="tshirt_size" value="<?php echo $row['tshirt_size']?>"/></td>
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
    
//*********************    add attendees,supporter into db     *********************    
    function add_attendees_sfa($p,$username){
        $name = mysql_real_escape_string($p['name']);
		$position = mysql_real_escape_string($p['position']);
		$contact_no = mysql_real_escape_string($p['contact_no']);
		$email = mysql_real_escape_string($p['email']);
		$tshirt_size = mysql_real_escape_string($p['tshirt_size']);
    $sql1 = "SELECT * FROM attendees_details";
		$res1 = mysql_query($sql1) or die(mysql_error());
        $position = "Supporter";
    

    $sql = "INSERT INTO attendees_details VALUES ('$username','$name', '$position', '$contact_no','$email', '$tshirt_size','')";
			$res = mysql_query($sql) or die(mysql_error());
			echo "Added Succesfully";
        
    }
    
     //*********************    Display table for judges    (admin side)   *********************
    function get_attendees_j(){
        $sql = "SELECT * FROM judges_details";
		$res = mysql_query($sql) or die(mysql_error());
    

        
        
        ?>
<form method="post" action="ec_pa_j.php" class="form-horizontal">
            <input type="hidden" name="add" value="true" />

		<table class='table table-condensed'>
			<tr>
			<th>Name</th>
			<th>Company Name</th>
			<th>Contact No.</th>
			<th>Job Title</th>
            <th>Email</th>
			</tr>
                <tr align=left>
			<td><input required type="text" class="col-sm-12" name="name" id="name" /></td>
            <td><input required type="text" class="col-sm-12" name="company" id="company" /></td>
            <td><input required type="text" class="col-sm-12" name="contact_no" id="contact_no" /></td>
            <td><input type="text" class="col-sm-12" name="job_title" id="job_title" /></td>
            <td><input type="text" class="col-sm-12" name="email" id="email" /></td>        
                </tr>
            </table>
                <div><input type="submit" name="submit" class="btn btn-danger" value="Add"/></div>
</form>
        

            
            
<?php
        if (mysql_num_rows($res)!=0):
        ?>
<form method="post" action="ec_pa_j.php" class="form-horizontal">
            <input type="hidden" name="save" value="true" />
            <table class='table table-condensed'>
<?php
        echo "
			<tr>
			<th>Name</th>
			<th>Company Name</th>
			<th>Contact No.</th>
			<th>Job Title</th>
            <th>Email</th>
			</tr>";
        while($row = mysql_fetch_assoc($res)){
            ?>
                <input type="hidden" name="attendees_id[]" value="<?php echo $row['judges_id'] ?>" />
                <tr>
                <td><input required type="text" class="col-sm-12" name="name[]" id="name" value="<?php echo $row['name']?>"/></td>
                <td><input required type="text" class="col-sm-12" name="company[]" id="company" value="<?php echo $row['company']?>"/></td>
                <td><input required type="text" class="col-sm-12" name="contact_no[]" id="contact_no" value="<?php echo $row['contact_no']?>"/></td>
                <td><input type="text" class="col-sm-12" name="job_title[]" id="job_title" value="<?php echo $row['job_title']?>"/></td>
                <td><input type="text" class="col-sm-12" name="email[]" id="email" value="<?php echo $row['email']?>"/></td>
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
    
//*********************    add judges into db   (admin side)  *********************    
    function add_attendees_j($p){
        $name = mysql_real_escape_string($p['name']);
		$company = mysql_real_escape_string($p['company']);
		$contact_no = mysql_real_escape_string($p['contact_no']);
		$job_title = mysql_real_escape_string($p['job_title']);
		$email = mysql_real_escape_string($p['email']);
    $sql1 = "SELECT * FROM judges_details";
		$res1 = mysql_query($sql1) or die(mysql_error());
    

    $sql = "INSERT INTO judges_details VALUES ('','$name', '$company', '$contact_no','$job_title', '$email')";
			$res = mysql_query($sql) or die(mysql_error());
			echo "Added Succesfully";
        
    }
 
//*********************    edit db (save)     *********************
    function save_judges($_POST)
    {       
        $judges_id=$_POST['judges_id'];
        $name=$_POST['name'];
        $company=$_POST['company'];
        $contact_no=$_POST['contact_no'];
        $job_title=$_POST['job_title'];
        $email=$_POST['email'];
        $N = count($judges_id);
            for($i=0; $i < $N; $i++)
        {   
        $result = mysql_query("UPDATE judges_details SET name='$name[$i]' , company='$company[$i]', contact_no='$contact_no[$i]', job_title='$job_title[$i]', email='$email[$i]' WHERE judges_id = '$judges_id[$i]'");       
        }
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
    //*********************    add other details into db     *********************    
    function add_other($p,$username){
        $category = mysql_real_escape_string($p['category']);
		$title = mysql_real_escape_string($p['title']);
		$description = mysql_real_escape_string($p['description']);
    $sql1 = "SELECT * FROM other_details";
		$res1 = mysql_query($sql1) or die(mysql_error());
    $sql = "INSERT INTO other_details VALUES ('','$category', '$title', '$description')";
			$res = mysql_query($sql) or die(mysql_error());
			echo "Added Succesfully"; 
    }  
   
//*********************    get form, other details (display)     *********************
 function get_other(){
        $sql = "SELECT * FROM other_details";
		$res = mysql_query($sql) or die(mysql_error());
    
        
       ?>   
<form method="post" action="ec_o_c.php">
	
		<input type="hidden" name="add" value="true" />
		<div class=""row><br>
            <div class="col-lg-12">
                <b>Category:</b>&nbsp;<br>&nbsp;
                    <input type="radio" name="category"
                    <?php if (isset($category) && $category=="competition") echo "checked";?>
                    value="competition">Competition &nbsp;
                    <input type="radio" name="category"
                    <?php if (isset($category) && $category=="event") echo "checked";?>
                    value="event">Events &nbsp;
                    <input type="radio" name="category"
                    <?php if (isset($category) && $category=="accommodation") echo "checked";?>
                    value="accommodation">Accommodation</div>
            <br><br><br>
            <div class="col-lg-12">
                <b> Title &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp; </b><input type="text" class="form-control input-lg" name="title" value="<?php echo $title;?>">   <br></div>
            <div class="col-lg-12">
                <b> Details &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp; </b><textarea class="form-control input-lg" name="description" rows="5" cols="40"><?php echo $description;?></textarea>
		</div><br><br>
		&nbsp;&nbsp;&nbsp;&nbsp;<input class="btn btn-default" type="submit" name="submit" value="Add"/></div>
	</form>
<?php   
 }
//*********************    Display other detail,competition    *********************
    function get_other_c(){
        $sql = "SELECT * FROM other_details where category ='competition'";
		$res = mysql_query($sql) or die(mysql_error());
        while($row = mysql_fetch_assoc($res)){
            ?>
                <div class="col-lg-12">
                    <div>
                   <h3> <?php echo $row['title'] ?>
                    </div>
                    <div>
                   <p> <?php echo $row['description'] ?>
                    </div>
                </div>
                <?php
        }
    }

//*********************    Display other detail,accommodation    *********************
    function get_other_a(){
        $sql = "SELECT * FROM other_details where category ='Accommodation'";
		$res = mysql_query($sql) or die(mysql_error());
        while($row = mysql_fetch_assoc($res)){
            ?>
                <div class="col-lg-12">
                    <div>
                   <h3> <?php echo $row['title'] ?>
                    </div>
                    <div>
                   <p> <?php echo $row['description'] ?>
                    </div>
                </div>
                <?php
        }
    }
   
//*********************    Display other detail,event    *********************
    function get_other_e(){
        $sql = "SELECT * FROM other_details where category ='event'";
		$res = mysql_query($sql) or die(mysql_error());
        while($row = mysql_fetch_assoc($res)){
            ?>
                <div class="col-lg-12">
                    <div>
                   <h3> <?php echo $row['title'] ?>
                    </div>
                    <div>
                   <p> <?php echo $row['description'] ?>
                    </div>
                </div>
                <?php
        }
    }

//*********************    Display attendees,ct at admin   *********************    
function post_attendees_ct($p){
    $university =mysql_real_escape_string($p['university']);
    
        $sql = "SELECT * FROM attendees_details where username ='$university' AND (position ='Leader' OR position ='Presenter' OR position = 'Technician')";
		$res = mysql_query($sql) or die(mysql_error());
    ?>
    <table class='table table-condensed'>
<?php
        echo "
			<tr>
			<th>Name</th>
			<th>Position</th>
			<th>HP No.</th>
			<th>Email</th>
			<th>T-shirt Size</th>
            <th>action</th>
			</tr>";
        while($row = mysql_fetch_assoc($res)){
            ?>
                <form class="form-horizontal" action="ec_pa_ct.php" method="post">
                    <input type="hidden" name="overwrite" value="true" />
                <input type="hidden" name="attendees_id[]" value="<?php echo $row['attendees_id'] ?>" />
                
                <tr>
                <td><input required type="text" class="col-sm-12" name="name[]" id="name" value="<?php echo $row['name']?>"/></td>
                <td><input required type="text" class="col-sm-12" name="position[]" id="position" value="<?php echo $row['position']?>"/></td>
                <td><input required type="text" class="col-sm-12" name="contact_no[]" id="contact_no" value="<?php echo $row['contact_no']?>"/></td>
                <td><input required type="text" class="col-sm-12" name="email[]" id="email" value="<?php echo $row['email']?>"/></td>
                <td><input type="text" class="col-sm-12" name="tshirt_size[]" id="tshirt_size" value="<?php echo $row['tshirt_size']?>"/></td>
                <td>
                    
                        <button type="submit" class="btn btn-success">Overwrite
                        
                        </button>
                    </form>
                </td>
                </tr>
                <?php
        }
        ?>
                </table>
                    <?php
                    }
    
//*********************    Display attendees,sfa at admin   *********************    
function post_attendees_sfa($p){
    $university =mysql_real_escape_string($p['university']);
    
        $sql = "SELECT * FROM attendees_details where username ='$university' or position ='Supporter'";
		$res = mysql_query($sql) or die(mysql_error());
    ?>
    <table class='table table-condensed'>
<?php
        echo "
			<tr>
			<th>Name</th>
			<th>Position</th>
			<th>HP No.</th>
			<th>Email</th>
			<th>T-shirt Size</th>
            <th>action</th>
			</tr>";
        while($row = mysql_fetch_assoc($res)){
            ?>
                <form class="form-horizontal" action="ec_pa_ct.php" method="post">
                    <input type="hidden" name="overwrite" value="true" />
                <input type="hidden" name="attendees_id[]" value="<?php echo $row['attendees_id'] ?>" />
                <tr>
                <td><input required type="text" class="col-sm-12" name="name[]" id="name" value="<?php echo $row['name']?>"/></td>
                <td><input required type="text" class="col-sm-12" name="position[]" id="position" value="<?php echo $row['position']?>"/></td>
                <td><input required type="text" class="col-sm-12" name="contact_no[]" id="contact_no" value="<?php echo $row['contact_no']?>"/></td>
                <td><input required type="text" class="col-sm-12" name="email[]" id="email" value="<?php echo $row['email']?>"/></td>
                <td><input type="text" class="col-sm-12" name="tshirt_size[]" id="tshirt_size" value="<?php echo $row['tshirt_size']?>"/></td>
                <td>
                    
                        <button type="submit" class="btn btn-success">Overwrite
                        
                        </button>
                    </form>
                </td>
                </tr>
                <?php
        }
        ?>
                </table>
                    <?php
                    }             
    
//*********************    Display attendees,o at admin   *********************    
function post_attendees_o($p){
    $university =mysql_real_escape_string($p['university']);
    
        $sql = "SELECT * FROM attendees_details where username ='$university' or position ='Observer'";
		$res = mysql_query($sql) or die(mysql_error());
    ?>
    <table class='table table-condensed'>
<?php
        echo "
			<tr>
			<th>Name</th>
			<th>Position</th>
			<th>HP No.</th>
			<th>Email</th>
			<th>T-shirt Size</th>
            <th>action</th>
			</tr>";
        while($row = mysql_fetch_assoc($res)){
            ?>
                <form class="form-horizontal" action="ec_pa_ct.php" method="post">
                    <input type="hidden" name="overwrite" value="true" />
                <input type="hidden" name="attendees_id[]" value="<?php echo $row['attendees_id'] ?>" />
                <tr>
                <td><input required type="text" class="col-sm-12" name="name[]" id="name" value="<?php echo $row['name']?>"/></td>
                <td><input required type="text" class="col-sm-12" name="position[]" id="position" value="<?php echo $row['position']?>"/></td>
                <td><input required type="text" class="col-sm-12" name="contact_no[]" id="contact_no" value="<?php echo $row['contact_no']?>"/></td>
                <td><input required type="text" class="col-sm-12" name="email[]" id="email" value="<?php echo $row['email']?>"/></td>
                <td><input type="text" class="col-sm-12" name="tshirt_size[]" id="tshirt_size" value="<?php echo $row['tshirt_size']?>"/></td>
                <td>
                    
                        <button type="submit" class="btn btn-success">Overwrite
                        
                        </button>
                    </form>
                </td>
                </tr>
                <?php
        }
        ?>
                </table>
                    <?php
                    }  
    
//*********************    Display attendees,af at admin   *********************    
function post_attendees_af($p){
    $university =mysql_real_escape_string($p['university']);
    
        $sql = "SELECT * FROM attendees_details where username ='$university' or position ='Alumni'";
		$res = mysql_query($sql) or die(mysql_error());
    ?>
    <table class='table table-condensed'>
<?php
        echo "
			<tr>
			<th>Name</th>
			<th>Position</th>
			<th>HP No.</th>
			<th>Email</th>
			<th>T-shirt Size</th>
            <th>action</th>
			</tr>";
        while($row = mysql_fetch_assoc($res)){
            ?>
                <form class="form-horizontal" action="ec_pa_ct.php" method="post">
                    <input type="hidden" name="overwrite" value="true" />
                <input type="hidden" name="attendees_id[]" value="<?php echo $row['attendees_id'] ?>" />
                <tr>
                <td><input required type="text" class="col-sm-12" name="name[]" id="name" value="<?php echo $row['name']?>"/></td>
                <td><input required type="text" class="col-sm-12" name="position[]" id="position" value="<?php echo $row['position']?>"/></td>
                <td><input required type="text" class="col-sm-12" name="contact_no[]" id="contact_no" value="<?php echo $row['contact_no']?>"/></td>
                <td><input required type="text" class="col-sm-12" name="email[]" id="email" value="<?php echo $row['email']?>"/></td>
                <td><input type="text" class="col-sm-12" name="tshirt_size[]" id="tshirt_size" value="<?php echo $row['tshirt_size']?>"/></td>
                <td>
                    
                        <button type="submit" class="btn btn-success">Overwrite
                        
                        </button>
                    </form>
                </td>
                </tr>
                <?php
        }
        ?>
                </table>
                    <?php
                    }      
    //*********************    upload image, best student leader (by student)  *********************  
    function upload_image_bst($username){
        ?>
        <form method="post" action="image_upload_bsl.php" enctype="multipart/form-data" class="form-horizontal">
        <input type="hidden" name="upload" value="true" />
            <input type="hidden" name="username" value="<?php echo $username?>" />
        <input name="uploadedimage" type="file">
            <input type="submit" name="submit" Value="Submit">
</form>
<?php
    }
    
    
 //*********************    upload image, annual report (by student)  *********************  
    function upload_image_ar($username){
        ?>
        <form method="post" action="image_upload_ar.php" enctype="multipart/form-data" class="form-horizontal">
        <input type="hidden" name="upload" value="true" />
            <input type="hidden" name="username" value="<?php echo $username?>" />
        <input name="uploadedimage" type="file">
            <input type="submit" name="submit" Value="Submit">
</form>
<?php
    }
    
    //*********************    upload image, payment (by student)  *********************  
    function upload_image_payment($username){
        ?>
        <form method="post" action="image_upload_payment.php" enctype="multipart/form-data" class="form-horizontal">
        <input type="hidden" name="upload" value="true" />
            <input type="hidden" name="username" value="<?php echo $username?>" />
        <input name="uploadedimage" type="file">
            <input type="submit" name="submit" Value="Submit">
</form>
<?php
    }
    
      //*********************    upload file, project verification form (by student)  *********************  
    function upload_file_pvf($username){
        ?>
        <form method="post" action="file_upload_pvf.php" enctype="multipart/form-data" class="form-horizontal">
        <input type="hidden" name="upload" value="true" />
            <input type="hidden" name="username" value="<?php echo $username?>" />
        <input name="uploadedfile" type="file">
            <input type="submit" name="submit" Value="Submit">
</form>
<?php
    }
    
 //*********************    upload image, all start award (by admin)  *********************  
    function upload_image_asa(){
        ?>
        <form method="post" action="image_upload.php" enctype="multipart/form-data" class="form-horizontal">
        <input type="hidden" name="upload" value="true" />
            <input type="hidden" name="upload" value="TRUE" />
        <input name="uploadedimage" type="file">
            <input class="btn btn-default" type="submit" name="submit" Value="done">
</form>
<?php
    }   
    
//*********************    student update team data sheet     *********************
    function update_tds($username){
        $sql = "SELECT * FROM tds_details where username ='$username'";
		$res = mysql_query($sql) or die(mysql_error());
    ?>
<b>
                By submitting the Enactus Team Portfolio Report you verify the information on this form is correct to the best of your knowledge. Should it be presented in the team's Annual Report or at an Enactus competition, all information will remain consistent.</br></br>
        PLEASE NOTE THAT THIS INFORMATION IS FOR USE BY THE ENACTUS ORGANIZATION ONLY. THE INFORMATION PROVIDED WILL NOT BE DISTRIBUTED TO THE JUDGES AT ANY ENACTUS COMPETITION.
            </b>
          <?php
        
        if(mysql_num_rows($res)==0):
        ?>
<form method="post" action="sl_mr_tds.php">
	
		<input type="hidden" name="team_nodata" value="true" />
		<!--<input type="hidden" name="id" value="<?php //echo $row['tds_id'] ?>" />-->
		<table>
		<tr>
			<td width="40%">Completed By (Name):</td></tr><tr>
			<td width="40%"><input type="text" name="name_sub" id="name_sub" /></td>
		</tr>
		<tr>
			<td>Position:</td></tr><tr>
			<td><select name="position" id="position">
			<option value="advisor">Advisor</option>
			<option value="student">Student</option>
			</select>
			</td>
		</tr>
                    
            
		<tr>
			<td>1. Please indicate whether or not your institution offers Enactus as a course for credit:</td>
			<td><select name="credit_course" id="credit_course">
			<option value="yes">Yes</option>
			<option value="no">No</option>
			</select>
			</td>
		</tr>
		<tr>
			<td>2. Number of people on your team's Business Advisory Board (BAB):</td>
			<td><input type="text" name="partner" id="partner" /></td>
		</tr>
		<tr>
			<td>3. Select your Enactus Team's source(s) for revenue (indicate total amount in US$):</td></tr><tr>
			<td><table>
			<tr><td>Institutional Support</td>
			<td><input type="text" name="int_support" id="int_support" /></td></tr>
			<tr><td>Business Advisory Board (BAB)</td>
			<td><input type="text" name="bab" id="bab" /></td></tr>
			<tr><td>Non-BAB Donations</td>
			<td><input type="text" name="non_bab" id="non_bab" /></td></tr>
			<tr><td>Team Entrepreneurial Activities</td>
			<td><input type="text" name="activity" id="activity" /></td></tr>
			<tr><td>Grants</td>
			<td><input type="text" name="gran" id="gran" /></td></tr>
			<tr><td>In-Kind Donations</td>
			<td><input type="text" name="donation" id="donation" /></td></tr>
			</table></td>
		</tr>
		<tr>
			<td>4. Does your team actively promote its online presence through any of the following sites:</td></tr><tr>
			<td><table>
			<tr><td>Facebook</td>
			<td><input type="text" name="facebook" id="facebook" /></td></tr>
			<tr><td>Twitter</td>
			<td><input type="text" name="twitter" id="twitter" /></td></tr>
			<tr><td>Youtube</td>
			<td><input type="text" name="youtube" id="youtube" /></td></tr>
			<tr><td>LinkedIn</td>
			<td><input type="text" name="linked" id="linked"/></td></tr>
			<tr><td>Team Website</td>
			<td><input type="text" name="website" id="website" /></td></tr>
			<tr><td>Other</td>
			<td><input type="text" name="other" id="other" /></td></tr>
			</table></td>
		</tr>
		<tr>
			<td>5. Additional Hours of Team Involvement (Non-Project Related):</td>
			<td><input type="text" name="hours_involvement" id="hours_involvement"/></td>
		</tr>
		<tr>
			<td>6. Additional Media Impressions (Non-Project Related):</td>
			<td><input type="text" name="media_impression" id="media_impression"/></td>
		</tr>
		
		</table>
		<input type="submit" name="submit" value="Save" />
	</form>

    	<?php 
        
        else: 
             $sql = "SELECT * FROM tds_details where username ='$username'";
		$res = mysql_query($sql) or die(mysql_error());
            $row=mysql_fetch_assoc($res);
?>
<form method="post" action="sl_mr_tds.php">
	
		<input type="hidden" name="update_team_data" value="true" />
		<input type="hidden" name="id" value="<?php echo $row['tds_id'] ?>" />
		<table>
		<tr>
			<td width="40%">Completed By (Name):</td></tr><tr>
			<td width="40%"><input type="text" name="name_sub" id="name_sub" value="<?php echo $row['name_sub'] ?>" /></td>
		</tr>
		<tr>
			<td>Position:</td></tr><tr>
			<td><select name="position" id="position">
			<option value="advisor">Advisor</option>
			<option value="student">Student</option>
			</select>
			</td>
		</tr>
                    
            
		<tr>
			<td>1. Please indicate whether or not your institution offers Enactus as a course for credit:</td>
			<td><select name="credit_course" id="credit_course">
			<option value="yes">Yes</option>
			<option value="no">No</option>
			</select>
			</td>
		</tr>
		<tr>
			<td>2. Number of people on your team's Business Advisory Board (BAB):</td>
			<td><input type="text" name="partner" id="partner" value="<?php echo $row['partner'] ?>" /></td>
		</tr>
		<tr>
			<td>3. Select your Enactus Team's source(s) for revenue (indicate total amount in US$):</td></tr><tr>
			<td><table>
			<tr><td>Institutional Support</td>
			<td><input type="text" name="int_support" id="int_support" value="<?php echo $row['int_support'] ?>" /></td></tr>
			<tr><td>Business Advisory Board (BAB)</td>
			<td><input type="text" name="bab" id="bab" value="<?php echo $row['bab'] ?>" /></td></tr>
			<tr><td>Non-BAB Donations</td>
			<td><input type="text" name="non_bab" id="non_bab" value="<?php echo $row['non_bab'] ?>" /></td></tr>
			<tr><td>Team Entrepreneurial Activities</td>
			<td><input type="text" name="activity" id="activity" value="<?php echo $row['activity'] ?>" /></td></tr>
			<tr><td>Grants</td>
			<td><input type="text" name="gran" id="gran" value="<?php echo $row['gran'] ?>" /></td></tr>
			<tr><td>In-Kind Donations</td>
			<td><input type="text" name="donation" id="donation" value="<?php echo $row['donation'] ?>" /></td></tr>
			</table></td>
		</tr>
		<tr>
			<td>4. Does your team actively promote its online presence through any of the following sites:</td></tr><tr>
			<td><table>
			<tr><td>Facebook</td>
			<td><input type="text" name="facebook" id="facebook" value="<?php echo $row['facebook'] ?>" /></td></tr>
			<tr><td>Twitter</td>
			<td><input type="text" name="twitter" id="twitter" value="<?php echo $row['twitter'] ?>" /></td></tr>
			<tr><td>Youtube</td>
			<td><input type="text" name="youtube" id="youtube" value="<?php echo $row['youtube'] ?>" /></td></tr>
			<tr><td>LinkedIn</td>
			<td><input type="text" name="linked" id="linked" value="<?php echo $row['linked'] ?>" /></td></tr>
			<tr><td>Team Website</td>
			<td><input type="text" name="website" id="website" value="<?php echo $row['website'] ?>" /></td></tr>
			<tr><td>Other</td>
			<td><input type="text" name="other" id="other" value="<?php echo $row['other'] ?>" /></td></tr>
			</table></td>
		</tr>
		<tr>
			<td>5. Additional Hours of Team Involvement (Non-Project Related):</td>
			<td><input type="text" name="hours_involvement" id="hours_involvement" value="<?php echo $row['hours_involvement'] ?>" /></td>
		</tr>
		<tr>
			<td>6. Additional Media Impressions (Non-Project Related):</td>
			<td><input type="text" name="media_impression" id="media_impression" value="<?php echo $row['media_impression'] ?>" /></td>
		</tr>
		
		</table>
		<input type="submit" name="submit" value="Save" />
	</form>
    <?php   endif;
    }
    
    //*********************    add tds into db   (student side)  *********************    
    function add_tds($p,$username){
        $name_sub = mysql_real_escape_string($p['name_sub']);
		$position = mysql_real_escape_string($p['position']);
		$credit_course = mysql_real_escape_string($p['credit_course']);
		$partner = mysql_real_escape_string($p['partner']);
		$int_support = mysql_real_escape_string($p['int_support']);
		$bab = mysql_real_escape_string($p['bab']);
		$non_bab = mysql_real_escape_string($p['non_bab']);
		$activity = mysql_real_escape_string($p['activity']);
		$gran = mysql_real_escape_string($p['gran']);
		$donation = mysql_real_escape_string($p['donation']);
		$facebook = mysql_real_escape_string($p['facebook']);
		$twitter = mysql_real_escape_string($p['twitter']);
		$youtube = mysql_real_escape_string($p['youtube']);
		$linked = mysql_real_escape_string($p['linked']);
		$website = mysql_real_escape_string($p['website']);
		$other = mysql_real_escape_string($p['other']);
		$hours_involvement = mysql_real_escape_string($p['hours_involvement']);
		$media_impression = mysql_real_escape_string($p['media_impression']);
    
    

    $sql = "INSERT INTO tds_details VALUES ('$username','','$name_sub', '$position', '$credit_course','$partner','$int_support','$bab','$non_bab','$activity','$grant','$donation','$facebook','$twitter','$youtube','$linked','$website','$other','$hours_involvement','$media_impression')";
			$res = mysql_query($sql) or die(mysql_error());
			echo "Added Succesfully";
        
    }
 
//*********************    edit tds (save)     *********************
    function save_tds($p, $username)
    {   
        $name_sub = mysql_real_escape_string($p['name_sub']);
		$position = mysql_real_escape_string($p['position']);
		$credit_course = mysql_real_escape_string($p['credit_course']);
		$partner = mysql_real_escape_string($p['partner']);
		$int_support = mysql_real_escape_string($p['int_support']);
		$bab = mysql_real_escape_string($p['bab']);
		$non_bab = mysql_real_escape_string($p['non_bab']);
		$activity = mysql_real_escape_string($p['activity']);
		$gran = mysql_real_escape_string($p['gran']);
		$donation = mysql_real_escape_string($p['donation']);
		$facebook = mysql_real_escape_string($p['facebook']);
		$twitter = mysql_real_escape_string($p['twitter']);
		$youtube = mysql_real_escape_string($p['youtube']);
		$linked = mysql_real_escape_string($p['linked']);
		$website = mysql_real_escape_string($p['website']);
		$other = mysql_real_escape_string($p['other']);
		$hours_involvement = mysql_real_escape_string($p['hours_involvement']);
		$media_impression = mysql_real_escape_string($p['media_impression']);
        
        $sql = "UPDATE tds_details SET name_sub='$name_sub' , position='$position', credit_course='$credit_course', partner='$partner', int_support='$int_support', bab='$bab', non_bab='$non_bab', activity='$activity', gran='$gran', donation='$donation' , facebook='$facebook', twitter='$twitter', youtube='$youtube', linked='$linked', website='$website' , other='$other', hours_involvement='$hours_involvement', media_impression='$media_impression' WHERE username = '$username'";       
        $res=mysql_query($sql) or die(mysql_error());
    }    
    
    
	 } //*********  class end here  
?>