<?php
require_once('db.php');
require_once('startsession.php');
$error_msg = "";
//echo 'hello '.$_SESSION['user_id'];
if (!isset($_SESSION['user_id'])) {
					
	if(isset($_POST['submit'])) {
		//connect to database
		$dbc = mysqli_connect($HOST,$USER,$PASS,$DB);
		if (!$dbc) {
			die("Connection failed: " . mysqli_connect_error());
		}
						
		//grabbing the credentials
		$team_name = mysqli_real_escape_string($dbc,trim($_POST['username']));
		$pass_word = mysqli_real_escape_string($dbc,trim($_POST['password']));
						
		if (!empty($team_name) && !empty($pass_word)) {
			// Lookup 
			$query = "SELECT user_id, teamname FROM main_tb1 WHERE teamname = '$team_name' AND password = SHA('$pass_word')";
			$data = mysqli_query($dbc,$query);
							
			if (mysqli_num_rows($data) == 1) {
				// login is ok
								
				$row = mysqli_fetch_array($data);
								
				$_SESSION['user_id'] = $row['user_id'];
				$_SESSION['teamname'] = $row['teamname'];
								
				setcookie('user_id',$row['user_id'],time()+1600);
				setcookie('teamname',$row['teamname'],time()+1600);
								
				$home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/coord.php';	
				header('Location:'.$home_url ); 
								
			}
			$error_msg = 'Sorry, you must enter a valid username and password.';
		}
		else {
			$error_msg = 'Sorry, the usrname and password field cannot be blank';
		}
	}
}
require_once('header.php');
					
?>



<section class="pronites">
	<div class="container-fluid inline-popups ">
							
                           
		<div class="row slidesrow">
			<div class="col-sm-offset-2 col-sm-4">
				<div class="row pronitesicon">
					<h1 style="letter-spacing:9px">Pronites</h1>
					<p>Pronites is so cool , and something . hello pronites you rock blah blah</p>
				</div>
			</div>
			<div class="col-sm-offset-2 col-sm-4">
				<div id="slides">
					<img src="img2/photo1.png">
					<img src="img2/photo2.png">
					<img src="img2/photo3.png">
					<img src="img2/photo4.png">
				</div>
			</div>
		</div>
							
		<div class="row ">
			<div class="col-md-3" id ="cyno">

				<img src="img/cyno.png">
									
				<h3><a href="#cyno-popup"  data-effect="mfp-newspaper">Cynosure</a></h3>
									
									
                                    
			</div>
			<div class="col-md-3" id ="ramp">
				<img src="img/rampage.png">
				<h3> <h3><a href="#rampage-popup"  data-effect="mfp-newspaper">Rampage</a></h3></h3>
									
                                  
			</div>
			<div class="col-md-3" id="piano">
				<img src="img/piano.png">
				<h3> <a href="#innaugral-popup"  data-effect="mfp-newspaper">Innaugral</a></h3>
                                        
			</div>
			<div class="col-md-3" id="rock">
				<img src="img/rock.png">
				<h3> <a href="#ragna-popup"  data-effect="mfp-newspaper">Ragna Rock</a></h3>
                                        
			</div>
		</div>
	</div>
</section>
<section class="synapse-tareef">
	<div class="row">
		<div class="col-md-offset-2 col-md-8">
			<div class="page-header">
				<h1 class="synapse-shit">
					Synapse is the new shit in town
					<br>
					it keeps getting better
					<br>
					And yes we  will never pay your prize money (*placeholder)
				</h1>
			</div>
		</div>
	</div>
</section>
					
<section class="redzone  inline-popups">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="page-header"><h1>The events</h1></div>
			</div>
		</div>
		<div id = "events" class="eventzone">
			<div class="row events1">
				<div class="col-xs-4 info">
					<img src="img/drama.png">
					<h3><a href="#Masquerade-popup"  data-effect="mfp-newspaper">Masquerade</a></h3>
				</div>
				<div class="col-xs-4 info">
					<img src="img/zing.png">
					<h3><a href="#Zing-popup"  data-effect="mfp-newspaper">Zing</a></h3>
				</div>
				<div class="col-xs-4 info">
					<img src="img/head.png">
					<h3><a href="#Headrush-popup"  data-effect="mfp-newspaper">Headrush</a></h3>
				</div>
			</div>
			<div class="row events2">
				<div class="col-xs-4 info">
					<img src="img/senate.png">
					<h3><a href="#Senate-popup"  data-effect="mfp-newspaper">Senate</a></h3>
				</div>
				<div class="col-xs-4 info">
					<img src="img/dlounge.png">
					<h3><a href="#d-lounge-popup"  data-effect="mfp-newspaper">D-lounge</a></h3>
				</div>
				<div class="col-xs-4 info">
					<img src="img/shailey.png">
					<h3><a href="#Shailey-popup"  data-effect="mfp-newspaper">Shailey</a></h3>
				</div>
			</div>
			<div class="row events3">
				<div class="col-xs-4 info">
					<img src="img/circus.png">
					<h3><a href="#Synapcity-popup"  data-effect="mfp-newspaper">Synapcity</a></h3>
				</div>
				<div class="col-xs-4 info">
					<img src="img/geek.png">
					<h3><a href="#Technical-popup"  data-effect="mfp-newspaper">Technical</a></h3>
				</div>
				<div class="col-xs-4 info">
					<img src="img/online.png">
					<h3><a href="#Online-popup"  data-effect="mfp-newspaper">Online Events</a></h3>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="sponsors2">
	<div class="container" style="text-align:center">
		<div class="row solidsponsor">
			<h2 >Sponsors</h2>
		</div></div>
	</section> 
	<section class="sponsors"> 
		<div class="container-fluid">

			<div class="col-md-6 sponsorleft">
				<img id="sponsorpic1" src="img/sponsor1.jpg">
			</div>
			<div class="col-md-6 sponsorright">
				<img id="sponsorpic2"  src="img/sponsor2.jpg">
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
	<section class="slider">
		<div id="slideshow">
			<a class="" rel="" href="photographs/photo1.jpg"><img src="thumbs/photo1.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo2.jpg"><img src="thumbs/photo2.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo3.jpg"><img src="thumbs/photo3.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo4.jpg"><img src="thumbs/photo4.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo5.jpg"><img src="thumbs/photo5.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo6.jpg"><img src="thumbs/photo6.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo7.jpg"><img src="thumbs/photo7.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo8.jpg"><img src="thumbs/photo8.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo9.jpg"><img src="thumbs/photo9.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo10.jpg"><img src="thumbs/photo10.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo11.jpg"><img src="thumbs/photo11.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo12.jpg"><img src="thumbs/photo12.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo13.jpg"><img src="thumbs/photo13.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo14.jpg"><img src="thumbs/photo14.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo15.jpg"><img src="thumbs/photo15.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo16.jpg"><img src="thumbs/photo16.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo17.jpg"><img src="thumbs/photo17.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo18.jpg"><img src="thumbs/photo18.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo19.jpg"><img src="thumbs/photo19.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo20.jpg"><img src="thumbs/photo20.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo21.jpg"><img src="thumbs/photo21.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo22.jpg"><img src="thumbs/photo22.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo23.jpg"><img src="thumbs/photo23.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo24.jpg"><img src="thumbs/photo24.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo25.jpg"><img src="thumbs/photo25.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo26.jpg"><img src="thumbs/photo26.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo27.jpg"><img src="thumbs/photo27.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo28.jpg"><img src="thumbs/photo28.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo29.jpg"><img src="thumbs/photo29.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo30.jpg"><img src="thumbs/photo30.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo31.jpg"><img src="thumbs/photo31.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo32.jpg"><img src="thumbs/photo32.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo33.jpg"><img src="thumbs/photo33.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo34.jpg"><img src="thumbs/photo34.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo35.jpg"><img src="thumbs/photo35.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo36.jpg"><img src="thumbs/photo36.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo37.jpg"><img src="thumbs/photo37.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo38.jpg"><img src="thumbs/photo38.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo39.jpg"><img src="thumbs/photo39.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo40.jpg"><img src="thumbs/photo40.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo41.jpg"><img src="thumbs/photo41.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo42.jpg"><img src="thumbs/photo42.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo43.jpg"><img src="thumbs/photo43.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo44.jpg"><img src="thumbs/photo44.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo45.jpg"><img src="thumbs/photo45.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo46.jpg"><img src="thumbs/photo46.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo47.jpg"><img src="thumbs/photo47.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo48.jpg"><img src="thumbs/photo48.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo49.jpg"><img src="thumbs/photo49.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo50.jpg"><img src="thumbs/photo50.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo51.jpg"><img src="thumbs/photo51.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo52.jpg"><img src="thumbs/photo52.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo53.jpg"><img src="thumbs/photo53.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo54.jpg"><img src="thumbs/photo54.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo55.jpg"><img src="thumbs/photo55.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo56.jpg"><img src="thumbs/photo56.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo57.jpg"><img src="thumbs/photo57.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo58.jpg"><img src="thumbs/photo58.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo59.jpg"><img src="thumbs/photo59.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo60.jpg"><img src="thumbs/photo60.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo61.jpg"><img src="thumbs/photo61.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo62.jpg"><img src="thumbs/photo62.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo63.jpg"><img src="thumbs/photo63.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo64.jpg"><img src="thumbs/photo64.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo65.jpg"><img src="thumbs/photo65.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo66.jpg"><img src="thumbs/photo66.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo67.jpg"><img src="thumbs/photo67.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo68.jpg"><img src="thumbs/photo68.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo69.jpg"><img src="thumbs/photo69.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo70.jpg"><img src="thumbs/photo70.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo71.jpg"><img src="thumbs/photo71.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo72.jpg"><img src="thumbs/photo72.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo73.jpg"><img src="thumbs/photo73.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo74.jpg"><img src="thumbs/photo74.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo75.jpg"><img src="thumbs/photo75.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo76.jpg"><img src="thumbs/photo76.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo77.jpg"><img src="thumbs/photo77.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo78.jpg"><img src="thumbs/photo78.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo79.jpg"><img src="thumbs/photo79.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo80.jpg"><img src="thumbs/photo80.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo81.jpg"><img src="thumbs/photo81.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo82.jpg"><img src="thumbs/photo82.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo83.jpg"><img src="thumbs/photo83.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo84.jpg"><img src="thumbs/photo84.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo85.jpg"><img src="thumbs/photo85.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo86.jpg"><img src="thumbs/photo86.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo87.jpg"><img src="thumbs/photo87.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo88.jpg"><img src="thumbs/photo88.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo89.jpg"><img src="thumbs/photo89.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo90.jpg"><img src="thumbs/photo90.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo91.jpg"><img src="thumbs/photo91.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo92.jpg"><img src="thumbs/photo92.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo93.jpg"><img src="thumbs/photo93.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo94.jpg"><img src="thumbs/photo94.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo95.jpg"><img src="thumbs/photo95.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo96.jpg"><img src="thumbs/photo96.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo97.jpg"><img src="thumbs/photo97.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo98.jpg"><img src="thumbs/photo98.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo99.jpg"><img src="thumbs/photo99.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo100.jpg"><img src="thumbs/photo100.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo101.jpg"><img src="thumbs/photo101.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo102.jpg"><img src="thumbs/photo102.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo103.jpg"><img src="thumbs/photo103.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo104.jpg"><img src="thumbs/photo104.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo105.jpg"><img src="thumbs/photo105.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo106.jpg"><img src="thumbs/photo106.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo107.jpg"><img src="thumbs/photo107.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo108.jpg"><img src="thumbs/photo108.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo109.jpg"><img src="thumbs/photo109.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo110.jpg"><img src="thumbs/photo110.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo111.jpg"><img src="thumbs/photo111.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo112.jpg"><img src="thumbs/photo112.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo113.jpg"><img src="thumbs/photo113.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo114.jpg"><img src="thumbs/photo114.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo115.jpg"><img src="thumbs/photo115.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo116.jpg"><img src="thumbs/photo116.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo117.jpg"><img src="thumbs/photo117.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo118.jpg"><img src="thumbs/photo118.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo119.jpg"><img src="thumbs/photo119.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo120.jpg"><img src="thumbs/photo120.jpg" alt=""></a>
			<a class="fancybox" rel="gallery" href="photographs/photo121.jpg"><img src="thumbs/photo121.jpg" alt=""></a>
																
		</div>
									
	</section>
									
									
									
													
	<div id ="popups">					
		<div id="cyno-popup" class="white-popup mfp-with-anim mfp-hide">
			<p>Stars brighten up the night. But the kind cynosure offer can set the night ablaze. The celebrity walks up to the stage amidst loud cheers from the crowd. <button id="show">Show</button><span class="texty">The next few hours of the night will leave you mesmerized, for sure . The Raghu Dixit Project, Agnee , Indi- an Ocean , Aditya Narayan , Tochi Raina and still counting ..</span></p>
		</div>
													
													
		<div id="rampage-popup" class="white-popup mfp-with-anim mfp-hide">
			<p>RampStars brighten up the night. But the kind cynosure offer can set the night ablaze. The celebrity walks up to the stage amidst loud cheers from the crowd. <button id="show">Show</button><span class="texty">The next few hours of the night will leave you mesmerized, for sure . The Raghu Dixit Project, Agnee , Indi- an Ocean , Aditya Narayan , Tochi Raina and still counting ..</span></p>
		</div>
													
		<div id="innaugral-popup" class="white-popup mfp-with-anim mfp-hide"><p>Hi</p></div>
		<div id="ragna-popup" class="white-popup mfp-with-anim mfp-hide">
			<p>RRRRampStars brighten up the night. But the kind cynosure offer can set the night ablaze. The celebrity walks up to the stage amidst loud cheers from the crowd. <button id="show">Show</button><span class="texty">The next few hours of the night will leave you mesmerized, for sure . The Raghu Dixit Project, Agnee , Indi- an Ocean , Aditya Narayan , Tochi Raina and still counting ..</span></p>
		</div>
		<div id="Masquerade-popup" class="data-popup container-fluid mfp-with-anim mfp-hide">
			<div class="col-sm-7 popup-col">
				<h2 style="padding-bottom:20px;text-align:center"> Events</h2>
				<div class="row pop-clickable div1 no-padding-col" id="pop-clickable1" style="text-align:center">
					<h4>Poscenium - Stage Play</h4>
					<p style="display:none;padding:3px 3px 3px 3px"> 
						A live audience, a story and a spotlight shinning in your face. If you were born to act, to enchant the audience with your charisma then a night full of wonderful plays awaits you. Get ready for the ultimate drama-nite where you will witness some of the most amazing stage-performers. It's showtime, literally!!
									
					</p>
				</div>
				<div class="row pop-clickable div2 no-padding-col" id="pop-clickable1" style="text-align:center">
					<h4>Naivete - Street Play</h4>
					<p style="display:none;padding:3px 3px 3px 3px"> 'The Street Play' rolls back the year's usage of open space, fundamental right of speech and showcasing an array of acts with socially relevant messages from those "olden days".
						Authentic plays aiming at the common man passing by on the street are displayed with three Es: Excitement, Energy and Enthusiasm... A tinge of imagination, shade of reality and desire to express social awareness is what naivete is all about. It is more powerful than any other mode of theater because of its proximity between the audience and actors.
					</p>
				</div>
				<div class="row pop-clickable div3 no-padding-col" id="pop-clickable1" style="text-align:center">
					<h4>Felicity - Musical Play & Mime</h4>
					<p style="display:none;padding:3px 3px 3px 3px">  Are words always necessary to express yourself? Imagine a world which consists of only words which are just said and not meant! Felicity is all about expressing your feelings through various forms of drama. If you can feel what you want to convey then words are not always necessary to express yourself. “Most of the time things are conveyed without words, certain things always remain UNSPOKEN”. Come to Felicity and let the beats of your heart be heard aloud.
					</p>
				</div>
				<div class="row pop-clickable div4 no-padding-col" id="pop-clickable1" style="text-align:center">
					<h4> Pehchan kaun </h4>
					<p style="display:none;padding:3px 3px 3px 3px">  Are words always necessary to express yourself? Imagine a world which consists of only words which are just said and not meant! Felicity is all about expressing your feelings through various forms of drama. If you can feel what you want to convey then words are not always necessary to express yourself. “Most of the time things are conveyed without words, certain things always remain UNSPOKEN”. Come to Felicity and let the beats of your heart be heard aloud.
					</p>
				</div>
			</div>
			<div class=" col-sm-5 hidden-xs" style="overflow:hidden">
										
				<div class="row">
					<img style="width:70%" src="img2/photo1.png">
				</div>
										
											
										
			</div>
		</div>
									
		<div id="Zing-popup" class="data-popup container-fluid mfp-with-anim mfp-hide">
			<div class="col-sm-7 popup-col">
				<h2 style="padding-bottom:20px;color:white;text-align:center"> Events</h2>
				<div class="row pop-clickable div1 no-padding-col" id="pop-clickable1" style="text-align:center">
					<h3>Rhapsody - Music Mantra</h3> 
					<p style="display:none;padding:3px 3px 3px 3px"> Let silence be your canvas and music be your paint as Rhapsody 2013 comes back with newer rounds and larger competition. This is a competition for all the music freaks who need a stage to let their music reverberate through the people.</p>
												
				</div>
				<div class="row pop-clickable div2 no-padding-col  " style="text-align:center">
					<h3>Hip Hop Street</h3> 
					<p style="display:none;padding:3px 3px 3px 3px"> B-boying , popping , locking , Mcing , rapping , Djing , grafiti #the list is endless. Have you also been bitten by the Hip-Hop bug then join us in "the hip hop street" which is going to mesmerize the crowds this time around in Synapse.Have you got in you too show the world how "hip" you are and can you make the crowds "hop" to your beats. If you are upto the challenge the "the hip hop street" is the place to be this Synapse.</p>
												
				</div>
											
											
				<div class="row pop-clickable div3 no-padding-col" style="text-align:center">
					<h3> Footloose - Western Dance </h3>
					<p style="display:none;padding:3px 3px 3px 3px"> 
						Can't stop your foot tapping when you listen to your favourite tune? Bingo then, because footloose brings you the perfect opportunity to portray your art, be it salsa, hip-hop or fusion. Be a part of this mega event and keep the audience mesmerized by your graceful moves. Just let your foot loose in the cosmos of dance, and create history with your captivating rendition.
													
					</p>
				</div>
											
											
											
											
				<div class="row pop-clickable div4 no-padding-col" style="text-align:center">
					<h3>  Naach - Indian Dance</h3>
					<p style="display:none;padding:3px 3px 3px 3px"> 
						The various Indian forms act like a window to India's rich cultural reservoir. Dance is the form of art, wherein the body is used as a medium of communication. Indian dances have played an influential role in many other realms of art including poetry, sculpture, architecture, literature, music and theatre.
						Naach is a platform that brings back to us a touch of our culture, our heritage. Students bring forth their genius through various "classical and folk" dance forms.
					</p>
				</div>
			</div>
										
											
			<div class=" col-sm-5 hidden-xs" style="overflow:hidden">
											
				<div class="row">
					<img style="width:70%" src="img2/photo1.png">
				</div>
											
												
											
			</div>
										
		</div>
									
		<div id="Headrush-popup" class="data-popup container-fluid mfp-with-anim mfp-hide">
			<div class="col-sm-7">
				<div class="row poop-clickable div1 no-padding-col" style="text-align:center">
					<h3 style="padding-top:20px;color:white">Headrush  </h3>
					<p style="padding:3px 3px 3px 3px"> 
													
						Remember all those little tidbits and obscure information you read, and saw on the TV about subjects nobody else but you was interested in? Well, Quizzing is where all these things come to play and along with some logical reasoning and abstract thinking, you get a good time.<br>
						Headrush brings you a 3-day extravaganza packed with five quizzes. Come join us in taking the red pill and find out how deep the rabbit-hole goes.
													
					</p>
				</div>
											
			</div>
			<div class=" col-sm-5 hidden-xs" style="overflow:hidden">
											
											
				<div class="row">
					<img style="width:70%" src="img2/photo2.png">
				</div>
												
											
			</div>
										
		</div>
									
		<div id="Senate-popup" class="data-popup container-fluid mfp-with-anim mfp-hide">
			<div class="col-sm-7">
				<div class="row poop-clickable div1 no-padding-col" style="text-align:center">
					<h3>Senate</h3>
					<p style="padding:3px 3px 3px 3px">
						This is the main debating fest of DAIICT. A 3x3 South Asian Parliamentary Format, the Senate Parliamentary Debate foresees participation from major NLU's, IIT's, IIM's, DU, various state universities and international universities as well. This is a great platform for critical thinking and analytical skills along with logic and impromptu speaking techniques to defend their sides of a given motion
					</p>
				</div>
			</div>
										
										
			<div class="col-sm-5 hidden-xs" style="overflow:hidden">
											
											
				<div class="row">
					<img style="width:70%" src="img2/photo2.png">
				</div>
												
											
			</div>
										
		</div>
									
		<div id="d-lounge-popup" class="data-popup container-fluid mfp-with-anim mfp-hide">
			<div class="col-sm-7">
				<div class="row poop-clickable div1 no-padding-col" style="text-align:center">
					<p style="padding:3px 3px 3px 3px">Welcome, welcome everyone, 
						To every jester, muse and mardy bum! 
						If you're looking for the centre of the carnival, the eye of the storm, D-Lounge is where you got to be!
					</p>
				</div>
										
			</div>
			<div class="col-sm-5 hidden-xs" style="overflow:hidden">
											
												
				<div class="row">
					<img style="width:70%" src="img2/photo2.png">
				</div>
												
											
			</div>
										
		</div>
									
		<div id="Shailey-popup" class="data-popup container-fluid mfp-with-anim mfp-hide">
			<div class="col-sm-7">
				<div class="row poop-clickable div1 no-padding-col" style="text-align:center">
					<p style="padding:3px 3px 3px 3px">    If writing is your passion and words are your weapon, then DA-IICT gladly welcomes you to its first ever literary eventShailee. It gives you a chance to unleash your spontaneity and creativity, and pen down your best thoughts.
					</p>
				</div>
											
			</div>
			<div class="col-sm-5 hidden-xs" style="overflow:hidden">
											
												
				<div class="row">
					<img style="width:70%" src="img2/photo2.png">
				</div>
												
											
			</div>
										
		</div>
									
		<div id="Synapcity-popup" class="data-popup container-fluid mfp-with-anim mfp-hide">
			<div class="col-sm-7">
				<div class="row pop-clickable div1 no-padding-col" style="text-align:center">
					<p style="padding:3px 3px 3px 3px">	Synapcity in unanimous with the spirit of Synapse. If Synapse captures the big picture, synapcity adds punk and style to it. the fun fiesta covers under its umbrella some of the wackiest, coolest stuff to sate you fun penchant. The campus will be buzzing with budding designers all set to take on the world and showing their talents in the design events and the A.R. Rahmans of the future will be belting out fun tines. The memories will be clicked, the songs remembered on the bustling synapse street. Wall your thoughts on the graffiti, warm your souls in the moonlight by fire!! The euphoria is gonna keep your adrenaline pumping and satiate your funny bones. So hop in the ride, because its gonna get crazier by the minute. So, if you are looking for fun.. then synapcity is your station!</p>
												
				</div>
											
			</div>
			<div class="col-sm-5 hidden-xs" style="overflow:hidden">
											
				<div class="row">
					<img style="width:70%" src="img2/photo1.png">
				</div>
											
											
			</div>
										
		</div>
									
		<div id="Technical-popup" class="data-popup container-fluid mfp-with-anim mfp-hide">
			<div class="col-sm-7">
				<div class="row pop-clickable div1 no-padding-col" style="text-align:center">
					<h3>Rekriti - Innovate, Ideate & Implement</h3>
					<p style="display:none;text-align:left ;padding:3px 3px 3px 3px"> 
						Rekriti is the biggest Technical event of Synapse. Kriti means `A work of art' or creation. Re-create an idea or re-interpret an idea to give it a new sense in the present world is what Re-kriti is all about. Participants have to choose an idea from the given list of ideas, add value to it (or re-create it) and then implement it. <br>
						If convention bores you, all you need is a little imagination and you are all set. We bring you the idea and with your genius you can take it to the next level. Come. Innovate. Marvel at leading innovator's work,their creativity and add a touch of your own. Ideas that one believes are right and hence realizing their true potential.
					</p>
				</div>
				<div class="row pop-clickable div2 no-padding-col" style="text-align:center">
					<h3>INC</h3>
					<p style="display:none;overflow:scroll;height:400px;text-align:left;padding:3px 3px 3px 3px"> 
						Entrepreneurship is often the most difficult but also the most courageous and risk taking decision in an individual’s life. An efficient and practical Business plan leads an Entrepreneur to the path of success. We the students of DA-IICT have organized this event Inc.(under SYNAPSE) in the hope of encouraging the mindset of entrepreneurship and celebrating the cultural unity of calculated risk takers.
						<br>
						Inc. encourages the mindset of entrepreneurship by providing an opportunity to prune and polish the ideas of youngsters as entrepreneurs.
						Inc. provides them a platform to prove themselves how well versed they are in the present Indian market as well as face the upcoming challenges which the market has to offer them.
						Perfection in every aspect of planning is one of the challenges that Inc. throws on the intellect of the participants.
						Hence participate with full spirit and enthusiasm to enhance your vision and broaden your outlook in entrepreneurship.
						<br>
						Phase 1 (Submission of Executive Summary):
						The Executive Summary is known to be the most important aspect of any business plan. It summarizes the key aspects of the business plan viz. business proposition, key financial projections and also the business idea and the strategy to implement it.
						<br>
						Phase 2 (Mentorship Phase):
						In this phase we would be providing mentors to the selected teams. These teams would be given a month time to interact with their mentors and refine their business ideas. The mentors would be people from the industry having an experience and knowledge about the market.

						<br>
						Phase 3 (Final Presentation):
						Teams undergoing the mentorship phase would be presenting their complete business plan in front of a panel of judges on the final day.


									
									
					</p>
				</div>
				<div class="row pop-clickable div3 no-padding-col" style="text-align:center">
					<h3> Surge </h3>
					<p style="display:none;text-align:left;overflow:scroll;height:400px;padding:3px 3px 3px 3px"> 
						1) Vista-Make your movie:
						There is an actor in each and everyone of us and this is the time to bring them out in the most zany, wacky, madcap and unconventional approach. Vista provides a platform for all those avant-garde movie makers/artists out there who haven’t had the chance but have it in them to capture their own imagination through their lenses and convert them into a captivating and charismatic display of art. 
						Grab this opportunity and with the wildest stretch of your imagination surprise audiences and yourself.
						<br>
						2) Imagineer - Light Camera Action: Reel life and Real life, two things sometimes so close, sometimes so far apart. Blessed are those, who blend them so skillfully to take the unreality out of one and the boredom out of the other. If you have the wits and skills, why waste time, grab the opportunity as well as a camera to create a memorable blended magic. There was an age when cartoons used to be an obsession with each of us. The beauty of giving life to the sketches you draw is a high only a few people experience. If you still doodle masterpieces during important lectures, then gear up, its time to take another step ahead. Imagineering brings to you the ultimate platform for animators too. Positives about anything sink below the negatives. Common it might seem, but you can make it uncommon. Bring out what you got behind your skull and use it to lighten the brights, and shade the darks. Not a piece of cake, but yes, you can make!! Use the latest technology and multimedia to create an enthralling experience.
						<br>
						3) PSD - Tshirt Design Contest: PSD - Photoshop Design Competition is a digital design competition that encourages students with creative minds to let their imagination flow, creativity take hold and showcase their ingenuity and artistic skills to design the posters based on the theme "INFERNO" or "EVIL & DEVIL". 
						T-shirt design also on the same topics. <br>

						4) Synapshot: "All photographs are memento mori. To take a photograph is to participate in another person’s (or thing’s) mortality, vulnerability, mutability. Precisely by slicing out this moment and freezing it, all photographs testify to time’s relentless melt.” - SUSAN SANTONG
									
									
					</p>
				</div>
				<div class="row pop-clickable div4 no-padding-col" style="text-align:center">
					<h3> Overclock </h3>
					<p style="padding:3px 3px 3px 3px"> 
						Forage: If you like getting your hands dirty making models and experimental hands-on machines then this is the event for you. But the catch is to unleash your innovative prowess using only scrap and junk provided by us. Make the best use of the ‘junk’ materials provided to accomplish a problem statement. Creative engineering at its best!
									
									
					</p>
				</div>
				<div class="row pop-clickable div1 no-padding-col" style="text-align:center">
					<h3> Battledrome </h3>
					<p style="display:none;text-align:left;overflow:scroll;height:400px;padding:3px 3px 3px 3px"> 
						1) Counter Strike: A game is as good as the player.
						Delve into the world of terrorists, Counter Terrorists where your ears pound with the sound of gunshots and bombs. Experience the feeling of running through dangerous maps, while keeping your eyes and ears alert all the time for the possibility of being brutally gunned down by the enemy. It's the biggest counter strike tournament in Gujarat. It's not a game, this one's a war! GO! GO! GO!
						Cheers to the spirit of the Game
						<br>
						2) NFS: The street is your kingdom. Your friends are your allies. You are on the wanted list of the State police department. You have the cars, you have the money. Race through the city at break-neck speed, dodging cops, clearing milestones to be the ultimate NFS pro.
						<br>
						3) Age of Empires 2 - The Conquerors: Live and fight like kings with your very own empire and with your own army on one of the oldest and most popular strategic games played ever ? Age Of Empires II ? The Conquerors. Fight out your enemies on the virtual battlefield in Battledrome 2015.<br>

						4) FIFA: Synapse is back with the best FIFA to date. If you think you are the one who can control every player and compete against the best in the game, then this where you need to be. Unleash your skills and management capabilities. IT'S IN THE GAME!!
						<br>

						5) Dota 2: Get ready to witness an earth-shattering rampage right beneath the threshold of DAIICT, as DotArians from far and wide ? picked with vigilance to carry the weight of multiple worlds, gather within an aggressive stance to foray their thunderous talent and skill-defying-abilities in a tightly contested make and break match-up finale.This is the moment of awakening for many virtuoso teams to unleash their potent talent and hidden strategies to overpower their oppressors, unravelling their uncharted journey and destined future.
						DOMINATING! UNSTOPPABLE! WICKED SICK! GODLIKE! 
						Get ready to become the new DOTA GOD!!<br>

						6) Rise of Nations: Dominate 6,000 years of history from the Ancient Age to the Information Age. Which forces will you deploy to lead your nation to global prominence? Trade, espionage, diplomacy? War? Conquer foes through military from using everything from sling-shots to cannons to stealth bombers to Artificial Intelligence.
											
									
									
					</p>
				</div>
			</div>
			<div class="col-sm-5 hidden-xs" style="overflow:hidden">
											
												
				<div class="row">
					<img style="width:70%" src="img2/photo2.png">
				</div>
												
											
			</div>
										
		</div>
									
		<div id="Online-popup" class="data-popup container-fluid mfp-with-anim mfp-hide">
			<div class="col-sm-7">
				<div class="row pop-clickable div1 no-padding-col" style="text-align:center">
					<h3>Googlock Homes</h3> 
					<p style="display:none">If you are searching for an event to unleash the puzzle busting instincts in you then you are at the right place. Here you dawn the light of Sherlock Holmes in you, with the help of illustrious aide Mr. Google and fire away the silver-bullets from the tricky guns.

					</p>
												
				</div>
										
				<div class="row pop-clickable div2 no-padding-col" style="text-align:center">
					<h3>Code Mutants</h3> 
					<p style="display:none;padding:3px 3px 3px 3px"> If you are searching for an event to unleash the puzzle busting instincts in you then you are at the right place. Here you dawn the light of Sherlock Holmes in you, with the help of illustrious aide Mr. Google and fire away the silver-bullets from the tricky guns.
					</p>
											
				</div>
				<div class="row pop-clickable div3 no-padding-col" style="text-align:center">
					<h3> Crazy Ganith</h3> 
					<p style="display:none;padding:3px 3px 3px 3px"> 
						If you are searching for an event to unleash the puzzle busting instincts in you then you are at the right place. Here you dawn the light of Sherlock Holmes in you, with the help of illustrious aide Mr. Google and fire away the silver-bullets from the tricky guns.
											
					</p>
											
				</div>
				<div class="row pop-clickable div4 no-padding-col" style="text-align:center">
					<h3> Team Twister</h3> 
					<p style="display:none;padding:3px 3px 3px 3px"> Are you the typical Indian fanatic for whom cricket is Religion and Sachin Tendulkar is God? Do you eat, sleep, and live cricket through and through? Then here is the contest just for you. Make your team which you think is better than the rest. Anticipation, knowledge of players, regular cricket updates are key to this.
					</p>
											
				</div>
			</div>
			<div class="col-sm-5 hidden-xs" style="overflow:hidden">
											
				<div class="row">
					<img style="width:70%" src="img2/photo1.png">
				</div>
											
											
			</div>
										
		</div>
	</div>
													
</div>
</div>
</div>
<!-- some spanning of fonts here -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<?php
require_once('footer.php');
?>

               
		
				