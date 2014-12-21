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

$user_id = $_SESSION['user_id'];
if (isset($_POST['eventupdate'])) {
	if (empty($_POST['password'])) {
		
		$contact = $_POST['contact'];
		$email = $_POST['email'];
		
		$query = "UPDATE  {$main_table}  SET contact = '$contact' , email = '$email'  WHERE user_id = '$user_id'";
		//echo "hurrary".$query;
		mysqli_query($dbc,$query) or die("error updating event info ".$error_contact);
		$error_msg = '<span class="success"> updated successfully</span>';
	}
	else if(strcmp($_POST['password'],$_POST['passwordv']) == 0) {
		//echo "hurrary";
		$password = mysqli_real_escape_string($dbc,$_POST['password']);
		$contact = $_POST['contact'];
		$email = $_POST['email'];
		
		$query = "UPDATE  {$main_table}  SET contact = '$contact' , email = '$email', password=SHA('$password') WHERE user_id = '$user_id'";
		//echo "hurrary".$query;
		mysqli_query($dbc,$query) or die("error updating event info ".$error_contact);
		$error_msg = '<span class="success"> updated successfully</span>';
	}
	else {
		$error_msg = '<span class="errors"> Passwords did not match, please try again</span>';
		//echo $error_msg;
	}
}
if (isset($_POST['eventdescription'])) {
	$description = mysqli_real_escape_string($dbc,$_POST['deshtml']);
	$query = "UPDATE {$main_table} SET description = '$description' WHERE user_id ='$user_id' ";
	mysqli_query($dbc,$query) or die("error updating description ".$error_contact);
	$error_msg = '<span class="success"> updated successfully</span>';
}
if (isset ( $_POST['formupdate'])) {
	
	$field_1 = trim($_POST['field_1']);
	$field_2 = trim($_POST['field_2']);
	$field_3 = trim($_POST['field_3']);
	$field_4 = trim($_POST['field_4']);
	$field_5 = trim($_POST['field_5']);
	$field_6 = trim($_POST['field_6']);
	$field_7 = trim($_POST['field_7']);
	$field_8 = trim($_POST['field_8']);
	$field_9 = trim($_POST['field_9']);
	
	$big_field_1 = trim($_POST['big_field_1']);
	$big_field_2 = trim($_POST['big_field_2']);
	$big_field_3 = trim($_POST['big_field_3']);
	
	$query = "UPDATE {$form_table} SET field_1 = '$field_1' , field_2 = '$field_2', field_3 = '$field_3' , field_4 = '$field_4',field_5 = '$field_5' , field_6 = '$field_6', field_7 = '$field_7' , field_8 = '$field_8', field_9 = '$field_9' , big_field_1= '$big_field_1', big_field_2= '$big_field_2',big_field_3= '$big_field_3' WHERE user_id = '$user_id' AND template = '1' ";
	//echo $query;
	mysqli_query($dbc,$query) or die("error updating description ".$error_contact);
	$error_msg = '<span class="success"> Updated successfully.</span>';
}

$query = "SELECT teamname , contact , email ,description  FROM {$main_table} WHERE user_id = '$user_id'";
$result = mysqli_query($dbc , $query) or die ("Error fetching event information ".$error_contact);
$row_event_info = mysqli_fetch_array($result);

$query = "SELECT *  FROM {$form_table} WHERE user_id = '$user_id'";
$result = mysqli_query($dbc , $query) or die ("Error fetching registration information ".$error_contact);
$row_form = mysqli_fetch_array($result);
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
		?>


	
		<section class="basicinfo">
			<div class ="row"><h3 style="text-align:center"><?php
								echo $error_msg;
				
								?></h3>
			<div class="container-fluid">
				<div class= "col-md-6">
				
					<form id ="checkpassword" method="post" class="basic-grey" action="<?php echo $_SERVER['PHP_SELF']; ?>">
						<h1>Hello, <?php echo $_SESSION['teamname'];?> 
							<span>Please fill the following. Make sure you provide correct email and contact number. You can check all the registrations uptil now in the registrations sections. An email will be sent to you when a successful registration occurs.
								<br>
								
							</span>
						</h1>
						
						<label>
							<span>Event Name :</span>
							<input id="name" type="text" name="name" value=" <?php echo $row_event_info['teamname'];?> " readonly/>
						</label>
						<label>
							<span>Mob. No. :</span>
							<input id="contact" type="text" name="contact" placeholder ="Note:it will we displayed on the website" value="<?php echo $row_event_info['contact'];?> " />
						</label>
						<label>
							<span>Email :</span>
							<input id="email" type="email" name="email" value="<?php echo $row_event_info['email'];?>" />
						</label>
	
						
						<label>
							<span>Password :</span>
							<input type="password" name="password" value="" placeholder="Password">
					
						</label>
						<label>
						
							<span>Confirm Password :</span>
							<input type="password" name="passwordv" value="" placeholder="Password">
					
						</label>
						
						<div>
							<label style = "position:relative;left:0px">
								<span>&nbsp;</span> 
								<input type="submit" class="button" name = "eventupdate" value="update" /> 
							</label> 
						</div>   
					</form>
			
				</div>
				<div class= "col-md-6">
			
				<form id ="eventformupdate" method="post" class="basic-grey" action="<?php echo $_SERVER['PHP_SELF']; ?>">
						<h1>Registration form 
							<span>This form will be served to participants on the main website. You dont necessarily need to fill all the fields.(blank fields won't be shown on the main website).<br>Put anything you like , teamname, place, lalala</span>
						</h1>
						<label>
							<span>Field 1 :</span>
							<input id="name" type="text" name="field_1" value="<?php echo $row_form['field_1']?>" />
						</label>
						<label>
							<span>Field 2 :</span>
							<input id="contact" type="text" name="field_2" value="<?php echo $row_form['field_2']?>" />
						</label>
						<label>
							<span>Field 3 :</span>
							<input id="name" type="text" name="field_3" value="<?php echo $row_form['field_3']?>" />
						</label>
						<label>
							<span>Field 4 :</span>
							<input id="contact" type="text" name="field_4" value="<?php echo $row_form['field_4']?>" />
						</label>
						<label>
							<span>Field 5 :</span>
							<input id="name" type="text" name="field_5" value="<?php echo $row_form['field_5']?>" />
						</label>
						<label>
							<span>Field 6 :</span>
							<input id="contact" type="text" name="field_6" value="<?php echo $row_form['field_6']?>" />
						</label>
						<label>
							<span>Field 7 :</span>
							<input id="contact" type="text" name="field_7" value="<?php echo $row_form['field_7']?>" />
						</label>
						<label>
							<span>Field 8:</span>
							<input id="contact" type="text" name="field_8" value="<?php echo $row_form['field_8']?>" />
						</label>
						<label>
							<span>Field 9:</span>
							<input id="contact" type="text" name="field_9" value="<?php echo $row_form['field_9']?>" />
						</label>
		<label>		
	<span>For bigger inputs</span>
	<input style="visibility:hidden" id="contact" type="text" name="big_field_1" placeholder="For bigger inputs" />
</label>
				<label>
					
					<span>Big Field 1 :</span>
					<input id="contact" type="text" name="big_field_1" value="<?php echo $row_form['big_field_1']?>" />
				</label>
				<label>
					<span>Big Field 2:</span>
					<input id="contact" type="text" name="big_field_2" value="<?php echo $row_form['big_field_2']?>" />
				</label>
				<label>
					<span>Big Field 3:</span>
					<input id="contact" type="text" name="big_field_3" value="<?php echo $row_form['big_field_3']?>" />
				</label>
						<label>
							<span>&nbsp;</span> 
							<input type="submit" class="button" value="Save" name="formupdate" /> 
						</label>    
					</form>
			
				</div>
			</div>
		</section>
		<section class="divisor">
			<div class="row row-no-padding">
				<div class="col-xs-2 no-padding-col div1">
				</div>
				<div class="col-xs-2 no-padding-col div2">
				</div>
				<div class="col-xs-2 no-padding-col div3">
				</div>
				<div class="col-xs-2 no-padding-col div4">
				</div>
				<div class="col-xs-2 no-padding-col div5">
				</div>
				<div class="col-xs-2 no-padding-col div6">
				</div>
			</div>
		</section>
		<section class="details">
			<div class="container-fluid">
				<div class = "row" style="text-align:center"><h1>Event Description</h1></div>
				<div class="quill-wrapper">
				<div id="toolbar" class="ql-toolbar ql-snow">
	                
					<select class="ql-font"  title="Font">
	                    <option selected value="sans-serif">
	                        Sans Serif
	                    </option>

	                    <option value="serif">
	                        Serif
	                    </option>

	                    <option value="monospace">
	                        Monospace
	                    </option>
	                </select>
					<span class="ql-format-separator"></span>
					<select title="Size" class="ql-size">
						<option value="10px">Small</option>
						<option value="13px" selected="">Normal</option>
						<option value="18px">Large</option>
						<option value="32px">Huge</option>
					</select>
					<span class="ql-format-group">
						<span title="Bold" class="ql-format-button ql-bold"></span>
						<span class="ql-format-separator"></span>
						<span title="Italic" class="ql-format-button ql-italic"></span>
						<span class="ql-format-separator"></span>
						<span title="Underline" class="ql-format-button ql-underline"></span>
						<span class="ql-format-separator"></span><span title="Strikethrough" class="ql-format-button ql-strike"></span>
					</span>
					<span class="ql-format-separator"></span>
					<span title="Image" class="ql-format-button ql-image"></span>
					<span title="Bullet" class="ql-format-button ql-bullet"></span>
					<span title="List" class="ql-format-button ql-list"></span>
					<select class="ql-color"  title="Text Color">
	                    <option label="rgb(0, 0, 0)" selected value="black">
	                        </option>

	                    <option label="red" value="rgb(230, 0, 0)">
	                        </option>

	                    <option label="orange" value="rgb(255, 153, 0)">
	                        </option>
						</select>
						
				</div>




				<!-- Create the editor container -->
				<div id="editor" class="ql-container ql-snow">
					<?php echo $row_event_info['description'] ;?>
				</div>
				<script>
				 quill = new Quill('#editor', {
    modules: {
      'toolbar': { container: '#toolbar' },
      'image-tooltip': true,
      'link-tooltip': true
    },
    theme: 'snow'
  });
				

				$(".details").ready(function(){
					//console.log(html);
					$(".event-post").ready(function() {
						$("#eventdescription").click(function() {
							
							//console.log(quill.getHTML());
							$("#html-input").val(quill.getHTML());
							$("#eventdescription-submit").trigger("click");
						});
				
					});
				});
				//$("#html-input").val(22);
				
				
				
				</script>
				<link rel="stylesheet" href="css/quill.snow.css" />
				
			</div>
			<form id ="event-post" method="post" class="basic-grey" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<div>
					<label>
						<span>HTML :</span>
						<textarea readonly id="html-input" type="text" name="deshtml" placeholder="blank"><?php echo $row_event_info['description'] ;?> ></textarea>
					</label>
					<label style = "">
						<span>&nbsp;</span> 
						<input type="button" id = "eventdescription" class="button"  value="save" /> 
						<input style="display:none" type="submit" id = "eventdescription-submit" class="button" name = "eventdescription" value="submit" /> 
						
					</label> 
				</div>
			</form>
			</div>
		
				
		
		</section>
		<section class="divisor">
			<div class="row row-no-padding">
				<div class="col-xs-2 no-padding-col div1">
				</div>
				<div class="col-xs-2 no-padding-col div2">
				</div>
				<div class="col-xs-2 no-padding-col div3">
				</div>
				<div class="col-xs-2 no-padding-col div4">
				</div>
				<div class="col-xs-2 no-padding-col div5">
				</div>
				<div class="col-xs-2 no-padding-col div6">
				</div>
			</div>
		</section>
		<section class="teamregistrations">
	
			<div class = "teamdetails container-fluid">
				<div class = "row" style="text-align:center"><h1>Registrations</h1></div>
				<div class = "col-md-5  team">
					<div class = "row">
						<h3>Team:blah</h3>
					</div>
					<div class = "row">
						<table>
							<tr>
								<td >
									<span class="field">
										<h4>Name:</h4>
									</span>
								</td>
								<td>
									<p>Hello world i am doung good </p>
								</td>
							</tr>
							<tr>
								<td style ="padding-right:20px">
									<span class="field">
										<h4>Nasdfafsdgfsdfsdme:</h4>
									</span>
								</td>
								<td>
									<p>Heldfsdfhsdkjfhssdsdsdsdsdsdsdsdsldkfhjshfgd i am doung goodHeldfsdfhsdkjfhsldkfhjshfgd i am doung goodHeldfsdfhsdkjfhsldkfhjshfgd i am doung goodHeldfsdfhsdkjfhsldkfhjshfgd i am doung goodHeldfsdfhsdkjfhsldkfhjshfgd i am doung good</p>
								</td>
							</tr>
						</table>
					</div>
				</div>
				
				<div class = "col-md-5  col-md-offset-2 team">
					<div class = "row">
						<h3>Team:blah</h3>
					</div>
					<div class = "row">
						<table>
							<tr>
								<td >
									<span class="field">
										<h4>Name:</h4>
									</span>
								</td>
								<td>
									<h5>Hello world i am doung good </h5>
								</td>
							</tr>
							<tr>
								<td style ="padding-right:20px">
									<span class="field">
										<h4>Nasdfafsdgfsdfsdme:</h4>
									</span>
								</td>
								<td>
									<p>Heldfsdfhsdkjfhsldkfhjshfgd i am doung goodHeldfsdfhsdkjfhsldkfhjshfgd i am doung goodHeldfsdfhsdkjfhsldkfhjshfgd i am doung goodHeldfsdfhsdkjfhsldkfhjshfgd i am doung goodHeldfsdfhsdkjfhsldkfhjshfgd i am doung good </p>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div class = "col-md-5  team">
					<div class = "row">
						<h3>Team:blah</h3>
					</div>
					<div class = "row">
						<table>
							<tr>
								<td >
									<span class="field">
										<h4>Name:</h4>
									</span>
								</td>
								<td>
									<p>Hello world i am doung good </p>
								</td>
							</tr>
							<tr>
								<td style ="padding-right:20px">
									<span class="field">
										<h4>Nasdfafsdgfsdfsdme:</h4>
									</span>
								</td>
								<td>
									<p>Heldfsdfhsdkjfhssdsdsdsdsdsdsdsdsldkfhjshfgd i am doung goodHeldfsdfhsdkjfhsldkfhjshfgd i am doung goodHeldfsdfhsdkjfhsldkfhjshfgd i am doung goodHeldfsdfhsdkjfhsldkfhjshfgd i am doung goodHeldfsdfhsdkjfhsldkfhjshfgd i am doung good</p>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			
		</section>
	</div>
</div>
</div>
<?php
}
require_once('footer.php');
?>