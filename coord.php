<?php
	
require_once('db.php');
require_once('startsession.php');
$error_msg = "";
	
//echo 'hello '.$_SESSION['user_id'];
if (!isset($_SESSION['user_id'])) {
	$error_msg = "You need to login";
	header( 'refresh:3;url='.'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) );
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
		?>


		<section class="basicinfo">
			<div class="container-fluid">
				<div class= "col-md-6">
			
					<form action="" method="post" class="basic-grey">
						<h1>Hello, <?php echo $_SESSION['teamname'];?> 
							<span>Please fill the following. Make sure you provide correct email and contact number. You can check all the registration uptil now in the registrations sections. An email will be sent to that particular address when a successful registration occurs. </span>
						</h1>
						<label>
							<span>Event Name :</span>
							<input id="name" type="text" name="name" placeholder="Event Name" />
						</label>
						<label>
							<span>Mob. No. :</span>
							<input id="contact" type="text" name="contact" placeholder="Note:it will we displayed on the website" />
						</label>
						<label>
							<span>Email :</span>
							<input id="email" type="email" name="text" placeholder="Will be used to notify you" />
						</label>
    
						<label>
							<span>Event description :</span>
							<textarea id="message" name="message" placeholder=""></textarea>
						</label> 
						<label>
							<span>&nbsp;</span> 
							<input type="button" class="button" value="Save" /> 
						</label>    
					</form>
			
				</div>
				<div class= "col-md-6">
			
					<form action="" method="post" class="basic-grey-2 basic-grey">
						<h1>Registration form 
							<span>This form will be served to participants on the main website. You dont necessarily need to fill all the fields.<br>(blank fields won't be shown on the main website)</span>
						</h1>
						<label>
							<span>Field 1 :</span>
							<input id="name" type="text" name="name" placeholder="Put anything you like , teamname, place, lalala" />
						</label>
						<label>
							<span>Field 2 :</span>
							<input id="contact" type="text" name="contact" placeholder="height, weight, sex , etc" />
						</label>
						<label>
							<span>Field 3 :</span>
							<input id="name" type="text" name="name" placeholder="blank" />
						</label>
						<label>
							<span>Field 4 :</span>
							<input id="contact" type="text" name="contact" placeholder="blank" />
						</label>
						<label>
							<span>Field 5 :</span>
							<input id="name" type="text" name="name" placeholder="blank" />
						</label>
						<label>
							<span>Field 6 :</span>
							<input id="contact" type="text" name="contact" placeholder="blank" />
						</label>
						<label>
							<span>Field 7 :</span>
							<input id="contact" type="text" name="contact" placeholder="blank" />
						</label>
						<label>
							<span>Field 8:</span>
							<input id="contact" type="text" name="contact" placeholder="blank" />
						</label>
						<label>
							<span>Field 9:</span>
							<input id="contact" type="text" name="contact" placeholder="blank" />
						</label>
			    
    
						<label>
							<span>Big Field 1 :</span>
							<textarea id="message" name="message" placeholder="You can accomodate big inputs in this field"></textarea>
						</label> 
						<label>
							<span>Big Field 2 :</span>
							<textarea id="message" name="message" placeholder="You can accomodate big inputs in this field"></textarea>
						</label>
						<label>
							<span>Big Field 3 :</span>
							<textarea id="message" name="message" placeholder="You can accomodate big inputs in this field"></textarea>
						</label>
				
						<label>
							<span>&nbsp;</span> 
							<input type="button" class="button" value="Save" /> 
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