<!DOCTYPE HTML>
<html>

<head>
	<title> Black Snow </title>
	<meta http-equiv="content-type" content="text/html; charset=windows-1252" />
	
	<link rel="stylesheet" type="text/css" href="stil.css"/>
	<script src="scripts/snow.js" type="text/javascript" charset="utf-8"></script>
	<link rel="stylesheet" href="scripts/snow.css" type="text/css" media="screen" charset="utf-8">

	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js'></script>
	<script type="text/javascript" src="javaskript.js"></script>
	
	<script type='text/javascript' src='http://malsup.github.io/jquery.form.js'></script>
	
<!-- <script type="text/javascript"><!--
$('.about').click(function() {
        $('#example1div').html('<img src="2.jpg">');
    });
</script>	-->
	
<script> 
$(document).ready(function() {

    $('.selected').click( function() { 
	//activate = $(this).attr('id': '#about');
	
	//imga = this.load('aabout.html');
	
	//var img = $('#content').empty().load('aabout.html');
	
	/*
	  $('#content span').fadeOut('slow', function() {
        $('#content span').empty().append('#about');     //  .load('aabout.html');
        $('#content span').fadeIn('slow');
    }); */
	var id = $('.pikachu:visible').attr("id");
		
	div_to_activate = $(this).attr("href"); // Store its target
	 
	if( id=='null'){$('.pikachu:visible').fadeOut('fast', function(){$(div_to_activate).fadeIn('slow');});}
		else{$('.pikachu:visible').fadeOut('slow', function(){$(div_to_activate).fadeIn('slow');});}
      
		
	});
	
	/*
	$(function(){
  $('#header').css({ height: $(window).height() });
  $(window).resize(function(){$('#header').css({ height: $(window).height() }); }); }); 
	*/
	
});
</script> 	
	
</head>

<body>
<div id="main">
	<div id="header">
	
	<div id="con">
				
				
	<!---------------------------------------------------------->
				
		<div id="content"><span>
			
			<!---------------------------------------------------------------------------------------------------------------------------------------------->
			<div class="pikachu" id="null"></div>
			
			<div class="pikachu" id="home" style="display: none;"><div class="content1">
			<h1> WELCOME </h1>
			
			<p><i>"Perfection lies in the heart of winter."</i></p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non sem erat. Mauris nulla orci, ornare id pulvinar in, ornare id lorem. Phasellus arcu ligula, faucibus sed commodo quis, pretium vel odio. Aliquam malesuada augue eget dolor lacinia vitae mollis metus ornare. Pellentesque sed enim non libero vehicula lacinia ac quis arcu. Donec tincidunt semper augue, tempus sagittis nulla tincidunt a. Sed bibendum posuere pharetra. Duis porta varius urna, sed hendrerit est imperdiet vel.</p>
			</div>
			
						
			</div>
			
			<!---------------------------------------------------------------------------------------------------------------------------------------------->
			
			
			<div class="pikachu" id="gallery" style="display: none;"><div class="content1">
			
			</div>
			
				<div class="content2">
					<h1> GALLERY </h1>
					<table id="table1" border="0">
					<tr> 
						<td> <img id="prev" onclick="prev()" title="Previous" alt ="Prev" height="25" width="15"src="prev.png"/> </td>
						<td id="tdd"> <div id="hideshow">  <img name="slide" id="slide" alt ="my images" class="classs" src="1.jpg"  width="450" height="250"/> </div> </td> 
						<td> <img id="nexxt" onclick="nexxt()" title="Next" alt ="Next" height="25" width="15" src="next.png"/>  </td> 
					</tr> 
					<tr> 
						<td> </td>
						<td align="center"style="font:small-caps bold 15px georgia; color:blue;"> 
							<div id ="mydiv">
							</div>
						</td> 
						<td> </td> 
					</tr> 
					</table>
				</div>	
					
					
					
					
					
				<div class="content3">	
					<table id="table2" border="0">
							
						<tr >
						<td><img id="1" class="opClass" name="1" onClick="klik()" src="1.jpg"/></td>
						<td><img id="2" class="opClass" name="2" onClick="klik1()" src="2.jpg"/></td>
						<td><img id="3" class="opClass" name="3" onClick="klik(3)" src="3.jpg"/></td>
						</tr>
						<tr>
						<td><img id="4" class="opClass" name="4" onClick="klik()" src="4.jpg"/></td>
						<td><img id="5" class="opClass" name="5" onClick="klik()" src="5.jpg"/></td>
						<td><img id="6" class="opClass" name="6" onClick="klik()" src="6.jpg"/></td>
						</tr>
						<tr>
						<td><img id="7" class="opClass" name="7" onClick="klik()" src="7.jpg"/></td>
						<td><img id="8" class="opClass" name="8" onClick="klik()" src="8.jpg"/></td>
						<td><img id="9" class="opClass" name="9" onClick="klik()" src="9.jpg"/></td>
						</tr>
		
		
					</table>
				</div>
				
			</div>
			
			<!---------------------------------------------------------------------------------------------------------------------------------------------->
			
			<div class="pikachu" id="about" style="display: none;"><div class="content1">
			<h1> ABOUT </h1>
			
			<div id="horror"></div>
			<div id="sponzori">
			<table border="0">
				<tr>
				<td><img src="racunalo.png"/></td>
				<td><a href="http://www.etfos.unios.hr/"> <img src="etfos.png"/> </a></td>
				</tr>
			</table>
			</div>
			
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non sem erat. Mauris nulla orci, ornare id pulvinar in, ornare id lorem. Phasellus arcu ligula, faucibus sed commodo quis, pretium vel odio. Aliquam malesuada augue eget dolor lacinia vitae mollis metus ornare. Pellentesque sed enim non libero vehicula lacinia ac quis arcu. Donec tincidunt semper augue, tempus sagittis nulla tincidunt a. Sed bibendum posuere pharetra. Duis porta varius urna, sed hendrerit est imperdiet vel. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non sem erat. Mauris nulla orci, ornare id pulvinar in, ornare id lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non sem erat. Mauris nulla orci, ornare id pulvinar in, ornare id lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non sem erat. Mauris nulla orci, ornare id pulvinar in, ornare id lorem.</p>

			
			
			
			</div></div>
			
			<!---------------------------------------------------------------------------------------------------------------------------------------------->
			
			<div class="pikachu" id="story" style="display: none;"><div class="content1">
			<h1> STORY </h1>
			
			<div class="storytime" id="story1">
			<p>Phasellus arcu ligula, faucibus sed commodo quis, pretium vel odio. Aliquam malesuada augue eget dolor lacinia vitae mollis metus ornare. Pellentesque sed enim non libero vehicula lacinia ac quis arcu. Donec tincidunt semper augue, tempus sagittis nulla tincidunt a. Sed bibendum posuere pharetra. Duis porta varius urna, sed hendrerit est imperdiet vel. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non sem erat. Mauris nulla orci, ornare id pulvinar in, ornare id lorem. </p>
			</div>
			
			<div class="storytime" id="story2" style="display: none;">
			<p>Nulla non sem erat. Mauris nulla orci, ornare id pulvinar in, ornare id lorem. Phasellus arcu ligula, faucibus sed commodo quis, pretium vel odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed enim non libero vehicula lacinia ac quis arcu. Aliquam malesuada augue eget dolor lacinia vitae mollis metus ornare. Pellentesque sed enim non libero vehicula lacinia ac quis arcu. Donec tincidunt semper augue, tempus sagittis nulla tincidunt a. Sed bibendum posuere pharetra. Duis porta varius urna, sed hendrerit est imperdiet vel.</p>
			</div>
			
			<div class="storytime" id="story3" style="display: none;">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt semper augue, tempus sagittis nulla tincidunt a. Sed bibendum posuere pharetra. Duis porta varius urna, sed hendrerit est imperdiet vel. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non sem erat. Mauris nulla orci, ornare id pulvinar in, ornare id lorem. Nulla non sem erat. Mauris nulla orci, ornare id pulvinar in, ornare id lorem. Phasellus arcu ligula, faucibus sed commodo quis, pretium vel odio. Aliquam malesuada augue eget dolor lacinia vitae mollis metus ornare. Pellentesque sed enim non libero vehicula lacinia ac quis arcu. Donec tincidunt semper augue, tempus sagittis nulla tincidunt a. Sed bibendum posuere pharetra. Duis porta varius urna, sed hendrerit est imperdiet vel.</p>
			</div>
			
			</div>
			
			<div id="menubar2">
				<ul id="menu2">
					<li><a class="story" href="#story1">1</a></li>
					<li><a class="story" href="#story2">2</a></li>
					<li><a class="story" href="#story3">3</a></li>
				</ul>
			</div>
			
			</div>
			
			<!---------------------------------------------------------------------------------------------------------------------------------------------->
			
			<div class="pikachu" id="contact" style="display: none;"><div class="content2">
			<div class="content1">
			<h1> CONTACT </h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non sem erat. Mauris nulla orci, ornare id pulvinar in, ornare id lorem. Phasellus arcu ligula, faucibus sed commodo quis, pretium vel odio. Aliquam malesuada augue eget dolor lacinia vitae mollis metus ornare. Pellentesque sed enim non libero vehicula lacinia ac quis arcu. Donec tincidunt semper augue, tempus sagittis nulla tincidunt a. Sed bibendum posuere pharetra. Duis porta varius urna, sed hendrerit est imperdiet vel.</p>
			</div>
			</div>
			
				<div class="content3">
				
				<?php
				if( !isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) ){
				if(!isset($_REQUEST['submit']))
				{ 
				?> 
				
				<div id="success" style="display:none; font: normal 175% 'century gothic', arial, sans-serif; color: gray; margin:50px 100px 0px 0px;">MAIL SENT</div>
				
				<form  method="POST" action="" id="form_one">
				<div id="forma">  

					<div class="contact_name">
						<span class="contact_label">Name:*</span> <div style="display: none;" class="error" id="nameError">Required: Please enter your name<br /></div>
							<p><input name="name" type="text" id="name" /></p>
						
					</div> 
 
					<div class="contact_email">
						<span class="contact_label">Email:*</span> <div style="display: none;" class="error" id="emailError">Email address invalid<br /></div>
							<p><input name="email" type="text" id="email" /></p><br />
						
					</div> 
 
					<div class="contact_comment">
						<span class="contact_label">Message:*</span> <div style="display: none;" class="error" id="commentError">Required: Please enter a message<br /></div>
							<p><textarea name="comment" id="comment" rows="8" cols="40"></textarea></p>
						
					</div> 
 
					<div class="contact_submit">
						<p><input type='submit' name="submit" value='Submit' class="button" id="submit_one" /><span class="contact_nb"> * required field</span></p>
					</div> 
						
				</div>		
				</form>
				
				<?php
				}}
				else 
				{
					$mailto = "mail@gmail.com";
					$ime = filter_var($_REQUEST['name'], FILTER_SANITIZE_STRING);
					$email = $_REQUEST['email'];
					$poruka = $_REQUEST['comment'];

					if(!mail("$mailto", "Ime: $ime", "$poruka", "-f $email"))
					{	
						echo"ERROR";
					}
				}
				?>
				
				
				</div>
			</div>
			<!---------------------------------------------------------------------------------------------------------------------------------------------->
			
			<div class="pikachu" id="login" style="display: none;"><div class="content2">
			<h1> LOGIN </h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non sem erat. Mauris nulla orci, ornare id pulvinar in, ornare id lorem. Phasellus arcu ligula, faucibus sed commodo quis, pretium vel odio. Aliquam malesuada augue eget dolor lacinia vitae mollis metus ornare. Pellentesque sed enim non libero vehicula lacinia ac quis arcu. Donec tincidunt semper augue, tempus sagittis nulla tincidunt a. Sed bibendum posuere pharetra. Duis porta varius urna, sed hendrerit est imperdiet vel.</p>
			</div>
			
			<div class="content3">				

				<?php
				if(!isset($_POST["spremanje"]))
				{
				?>
					<div id="success2" style="display:none; font: normal 175% 'century gothic', arial, sans-serif; color: gray; margin:50px 50px 0px 0px;">LOGIN SUCCESSFUL</div>
					<div id="error2" style="display:none; font: normal 175% 'century gothic', arial, sans-serif; color: gray; margin:50px 50px 0px 0px;">ERROR</div>

					
					<form method="POST" action="" id="form_two">
					<div id="forma2">
					
						Name*: <div style="display: none;" class="error" id="nameError2">Required: Please enter your name<br /></div>
								<p><input type="text" name="ime" id="ime"></p> 
						Surname: <p><input type="text" name="prezime"></p>
					
						<hr>					
						<p>
						City: <p><input type="text" name="mjesto"></p>
						Gender: <p><select name="spol">
										<option>Male</option>
										<option>Female</option>
													</select></p>
						Birthdate (18+) (YYYY-MM-DD)*: <div style="display: none;" class="error" id="dateError">Invalid date<br /></div><div style="display: none;" class="error" id="dateError2">Underage!<br /></div>
													<p><input type="text" name="datum" id="date"></p> 
						</p>
						<hr>

						Contact (email)*: <div style="display: none;" class="error" id="emailError2">Email address invalid<br /></div>
											<p><input type="text" name="mail" id="mail"></p> 
						
	
						<p><input type="submit" name="spremanje" value="Submit" class="button" id="submit_two"><span class="contact_nb"> * required field</span></p>
										
					</div>
					</form>
	
				<?php
				}
				else
				{
					include "spoj.php";
					
					// kveri string:
					$sql_forma="INSERT INTO clanovi(ime, prezime, mjesto, spol, datum , mail)
									VALUES('$_POST[ime]', '$_POST[prezime]', '$_POST[mjesto]', '$_POST[spol]', '$_POST[datum]', '$_POST[mail]')";

									if(!mysql_query($sql_forma))
									{
										echo"ERROR";
									}
									
				}
				?>
				</div>
				</div>
			</span>
			
		<!---------------------------------------------------------------------------------------------------------------------------------------------->
		
		<div class="pikachu" id="download" style="display: none;">
		
		<h1> COMING SOON </h1>
		
		</div>
		
		<!---------------------------------------------------------------------------------------------------------------------------------------------->
		
		</div>
				
				
				
				
				
				
				
				
	<!---------------------------------------------------------->
				
				
	</div>
		<div id="logo">
			<div id="logo1">
				<p> WINTERFROST </p>
			</div>
			
		
			<div id="snowContainer">
			</div>
			
			
						
			<div id="menubar">
		
			<ul id="menu">
				
				<li><a class="selected" href="#home">Main</a></li>
				<li><a class="selected" href="#story">Story</a></li>
				<li><a class="selected" href="#gallery">Gallery</a></li>
				<li><a class="selected" href="#download">Download</a></li>
				<li><a class="selected" href="#about">About</a></li>
				<li><a class="selected" href="#contact">Contact</a></li>
				<li><a class="selected" href="#login">Login</a></li>
			</ul>
		
			</div>
		</div>
		
		
		<div id="footer">
			<p><span> Copyright © 2014 Alen Paulic. All rights reserved <span> </p>
		</div>
	</div>
	
	
	
</div>


</body>

</html>