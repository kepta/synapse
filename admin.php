<?php
	
require_once('db.php');
require_once('startsession.php');
$error_msg = "";
	
//echo 'hello '.$_SESSION['user_id'];
if (!isset($_SESSION['user_id'])) {
	$error_msg = "You need to login";
	header( 'refresh:2;url='.'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) );
}
$dbc = mysqli_connect($HOST,$USER,$PASS,$DB);
if (!$dbc) {
	die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['query']) && strcmp($_POST['security'],"299792458") == 0) {
echo 'passed';
	$query = $_POST['command'];
	mysqli_query($dbc,$query) or die("error querying".$error_contact);
} 
if (isset($_POST['disable'])) {
	$team_id = $_POST['number'];
	$query = "UPDATE {$main_table} SET disable = '1' WHERE user_id = '$team_id'";
	echo $query;
	mysqli_query($dbc,$query) or die('error disabling');
}
if (isset($_POST['addevent']) && !empty($_POST['eventname'])) {
	$eventname = $_POST['eventname'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	
	
	$description = $_POST['description'];

	$query = "INSERT INTO {$main_table} (teamname, email, password, contact , description,reg_date,disable) VALUES ('$eventname','$email',SHA('$eventname'),'$contact','The most beautiful of all description',NOW(),'0')";
	
	//echo $query;
	$data = mysqli_query($dbc,$query) or die("error adding event".$error_contact);
	
	$query = "SELECT user_id FROM {$main_table} ORDER BY user_id DESC LIMIT 1;";
	$data = mysqli_query($dbc,$query) or die("error selecting id".$error_contact);
	$row = mysqli_fetch_array($data);
	
	$query = "INSERT INTO {$form_table} (user_id,template,field_1) VALUES('$row[0]','1','null')";
	$data = mysqli_query($dbc,$query) or die("error creaeting template form".$error_contact);
	}
require_once('header.php');
?>





<?php
if (!isset($_SESSION['user_id'])) {
		
		
	?>
	<div class="mfp-container mfp-s-ready mfp-inline-holder"><div class="mfp-content"><div id="loginpopup" class="login-popup container-fluid mfp-with-anim">
		<div class="login">
			<h1>
				<?php echo $error_msg; ?>
			</h1>
			<div style= "min-height:100px">
				<h3 style = "text-align:center;margin-top:200px"> Sorry</h3>
			</div>				
		</div>

									
		<button title="Close (Esc)" type="button" class="mfp-close">×</button></div></div><div class="mfp-preloader">Loading...</div></div>
				
				
				
		<?php
					
				
	}
	else {
			
		$dbc = mysqli_connect($HOST,$USER,$PASS,$DB);
		if (!$dbc) {
			die("Connection failed: " . mysqli_connect_error());
		}
			
		?>
		<section class="basicinfo">
			<div class="container-fluid">
				<div class= "col-md-offset-3 col-md-6">
			
					<form method="post" class="basic-grey" action="<?php echo $_SERVER['PHP_SELF']; ?>">
						<h1>Hello, <?php echo $_SESSION['teamname'];?> 
							<span>Add events </span>
						</h1>
						<label>
							<span>Event Name :</span>
							<input id="name" type="text" name="eventname" placeholder="Event Name" />
						</label>
						<label>
							<span>Mob. No. :</span>
							<input id="contact" type="text" name="contact" placeholder="Note:it will we displayed on the website" />
						</label>
						<label>
							<span>Email :</span>
							<input id="email" type="email" name="email" placeholder="Will be used to notify you" />
						</label>
    
						<label>
							<span>Event description :</span>
							<textarea id="message" name="description" placeholder=""></textarea>
						</label> 
						<label>
							<span>&nbsp;</span> 
							<input type="submit" class="button" value="Add" name ="addevent" /> 
						</label>    
					</form>
						
						
			
				</div>
			</div>
			
		</section>
		<section class ="query">
			<div class="container-fluid ">
				<form method="post" class="basic-grey" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<span>&nbsp;</span> 
					<label>
						<span>Query :</span>
						<textarea id="message" name="command" placeholder="dont mess with this. PLEASE"></textarea>
					</label>
					<label>
							<span>Sec. :</span>
							<input id="sec" type="text" name="security" placeholder="pass" />
						</label>
					<label>
						<span>&nbsp;</span>
					<input type="submit" class="button" value="query" name ="query" />
				</label>
				</form>
			</div>
		</section>
		
		<section class ="disableevent">
			<div class="container-fluid ">
				<form method="post" class="basic-grey" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<span>&nbsp;</span> 
											<label>
							<span>Disable id :</span>
							<input id="name" type="text" name="number" placeholder="donot use plzz" />
						</label>
					<label>
							<span>Sec. :</span>
							<input id="sec" type="text" name="security" placeholder="pass" />
						</label>
					<label>
						<span>&nbsp;</span>
					<input type="submit" class="button" value="query" name ="disable" />
				</label>
				</form>
			</div>
		</section>
		<section class ="data" style ="overflow:scroll">
			<div class="container-fluid">
				
				<?php
				$query = "show tables";
				$result = mysqli_query($dbc,$query);
				while($table = mysqli_fetch_array($result)) {
					echo '<div class="row">';
					$query = "select * from $table[0]";
					echo '<h3>'.$table[0].'</h3>';
					$result_table = mysqli_query($dbc,$query);
					echo "<table><tr>";
					for($i = 0; $i < mysqli_field_count($dbc); $i++) {
						$field_info = mysqli_fetch_field($result_table);
						echo "<th><h5>{$field_info->name}</h5></th>";
					}
					echo '</tr>';
				
					while($row=mysqli_fetch_array($result_table)) {
						echo '<tr>';
						for($i = 0; $i < mysqli_field_count($dbc); $i++) {
					    
							echo '<td style =" white-space:pre;max-width:400px; word-wrap:break-word;" >'.$row[$i]."</td>";
						}
					
						echo '</tr>';
					}
					echo '</table></div>';
				}
				?>
			
				
		</div>
	</section>
</div>
</div>
</div>
<?php
}
require_once('footer.php');
?>