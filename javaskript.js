function ShowEffect(element){ new Effect.Appear(element, {duration:1, from:0, to:1.0}); }
function FadeEffect(element){ new Effect.Fade(element, {duration:1, from:1.0, to:0}); } 
var klik=1;
var i = 0; 
var image = new Array(); 
// LIST OF IMAGES 

image[0] = "1.jpg"; 
image[1] = "2.jpg"; 
image[2] = "3.jpg"; 

image[3] = "4.jpg"; 
image[4] = "5.jpg"; 
image[5] = "6.jpg";

image[6] = "7.jpg"; 
image[7] = "8.jpg"; 
image[8] = "9.jpg";  
var k = image.length-1; 
var caption = new Array();
 // LIST OF CAPTIONS 
 /*
caption[0] = "Caption for the first image"; 
caption[1] = "Caption for the second image"; 
caption[2] = "Caption for the third image";
caption[3] = "Caption for the 4. image"; 
caption[4] = "Caption for the 5. image"; 
caption[5] = "Caption for the 6. image";

*/

// document.getElementById("1").className = "opClass";


$(document).ready(function(){ 
$('#nexxt').click(function(){
	
	
  
	
	
	var img= document.getElementById("slide"); // velika slika
	
	
		
	for(i=0;i<k;i++)
	{
        if(img.src.indexOf(image[i]) > -1)    // img.src == imdex[i]
        {
		
		klik=i+2;
		
        $(img).fadeOut(300, function(){
		
		
		
		var imge= new Image();
		 // var imge = $('<img id="slide">');
    	$(imge).attr({"id": "slide", "src": image[i+1]}).height(100).width(100);
		//imge.id="slide";
		
		//imge.src = image[5];
		
			$(this).attr("src", imge.src).bind('onreadystatechange load', function(){if (this.complete) $(this).fadeIn(300);} );
		}); 		     


				break; 
		}
	
 
		
		else if(img.src.indexOf(image[8]) > -1)
			{	klik=1;
				$(img).fadeOut(300, function(){
		
		
		
		var imge= new Image();
		 // var imge = $('<img id="slide">');
    	$(imge).load(function(){imgdiv.append(this);}).error(function () {$('#adsloder').remove();}).attr({"id": "slide", "src": image[0]}).height(100).width(100);
		//imge.id="slide";
		
		//imge.src = image[5];
		
			$(this).attr("src", imge.src).bind('onreadystatechange load', function(){if (this.complete) $(this).fadeIn(300);} );
		}); 		      		        break;
				
			}
	}
});
});


$(document).ready(function(){ 
$('#prev').click(function(){
	
	var img= document.getElementById("slide"); // velika slika
		
	for(i=k;i>0;i--)
	{
        if(img.src.indexOf(image[i]) > -1)    // img.src == imdex[i]
        {
		
		klik=i;
		
        $(img).fadeOut(300, function(){
		
		
		
		var imge= new Image();
		 // var imge = $('<img id="slide">');
    	$(imge).load(function(){imgdiv.append(this);}).error(function () {$('#adsloder').remove();}).attr({"id": "slide", "src": image[i-1]}).height(100).width(100);
		//imge.id="slide";
		
		//imge.src = image[5];
		
			$(this).attr("src", imge.src).bind('onreadystatechange load', function(){if (this.complete) $(this).fadeIn(300);} );
		}); 		     

				break; 
		}
	
 
		
		else if(img.src.indexOf(image[0]) > -1)
			{	klik=9;
				$(img).fadeOut(300, function(){
		
		
		
		var imge= new Image();
		 // var imge = $('<img id="slide">');
    	$(imge).load(function(){imgdiv.append(this);}).error(function () {$('#adsloder').remove();}).attr({"id": "slide", "src": image[8]}).height(100).width(100);
		//imge.id="slide";
		
		//imge.src = image[5];
		
			$(this).attr("src", imge.src).bind('onreadystatechange load', function(){if (this.complete) $(this).fadeIn(300);} );
		}); 		      		        break;
				
			}
	}
});
});

$(document).ready(function(){ 
$(".opClass").click(function ()

{	var clickEnabled = false;	
	//var img = document.getElementById("slide"); 
	/*
	if(img.src.indexOf(image[2]) > -1)    // img.src == index[i]
    { 
		$("#3").click(function(e){
				if (!clickEnabled) 
				{
					alert('disabled');
					e.stopImmediatePropagation();
					return false;
				}   
				else 
				{
					alert('enabled');
				}
				
			} );
		return -1;
	}
	*/
	
	
	var img = document.getElementById("slide"); // stara slika
	
	//var imge = document.createElement('img');  // nova slika
	
	
	var id = event.target.id;  //<---dohvat id-a
	
	/*
	if(id=="1") {imge.src = image[0];}
		else if(id=="2") {imge.src = image[1];}
		else if(id=="3") {imge.src = image[2];}
		else if(id=="4") {imge.src = image[3];}
		else if(id=="5") {imge.src = image[4];}
		else if(id=="6") {imge.src = image[5];}
	
	//imge.setAttribute("height", "200");
	//imge.setAttribute("width", "500");
	*/
	if( id=="1" && klik==1) {img.src = image[0];}
	else if( id=="2" && klik==2) {img.src = image[1];}
	else if( id=="3" && klik==3) {img.src = image[2];}
	else if( id=="4" && klik==4) {img.src = image[3];}
	else if( id=="5" && klik==5) {img.src = image[4];}
	else if( id=="6" && klik==6) {img.src = image[5];}
	else if( id=="7" && klik==7) {img.src = image[6];}
	else if( id=="8" && klik==8) {img.src = image[7];}
	else if( id=="9" && klik==9) {img.src = image[8];}
	 else{
	
	$(img).fadeOut(300, function()
		{
		//img.removeAttribute('id');
		
		var imge= new Image();
		// var imge = $('<img id="slide">');
    	$(imge).load(function(){imgdiv.append(this);}).error(function () {$('#adsloder').remove();}).attr({"id": "slide"}).height(100).width(100);
		//imge.id="slide";
		
		//imge.src = image[5];
		if(id=="1") {imge.src = image[0]; klik=1;}
		else if(id=="2") {imge.src = image[1]; klik=2; }
		else if(id=="3") {imge.src = image[2]; klik=3;}
		else if(id=="4") {imge.src = image[3]; klik=4;}
		else if(id=="5") {imge.src = image[4]; klik=5;}
		else if(id=="6") {imge.src = image[5]; klik=6;}
		else if(id=="7") {imge.src = image[6]; klik=7;}
		else if(id=="8") {imge.src = image[7]; klik=8;}
		else if(id=="9") {imge.src = image[8]; klik=9;}
			
			//if(img.src.indexOf(image[2]) > -1) {img.src = image[2];}
			
			
			
			$(this).attr("src", imge.src).bind('onreadystatechange load', function(){if (this.complete) $(this).fadeIn(300);} );
			
			
		}); }
	
});
});
/*
$(document).ready(function(){


$('.op').on('click', function(e) {
    alert('sh');
    }
   
);
}); */
//function init(){var e=document.getElementById("snowContainer");for(var t=0;t<NUMBER_OF_snow;t++){e.appendChild(createAsnow())}}function randomInteger(e,t){return e+Math.floor(Math.random()*(t-e))}function randomFloat(e,t){return e+Math.random()*(t-e)}function pixelValue(e){return e+"px"}function durationValue(e){return e+"s"}function createAsnow(){var e=document.createElement("div");var t=document.createElement("img");t.src="images/snow"+randomInteger(1,2)+".png";e.style.top="-100px";e.style.left=pixelValue(randomInteger(0,1e3));var n=Math.random()<.5?"clockwiseSpin":"counterclockwiseSpinAndFlip";e.style.webkitAnimationName="fade, drop";t.style.webkitAnimationName=n;var r=durationValue(randomFloat(5,11));var i=durationValue(randomFloat(4,8));e.style.webkitAnimationDuration=r+", "+r;var s=durationValue(randomFloat(0,5));e.style.webkitAnimationDelay=s+", "+s;t.style.webkitAnimationDuration=i;e.appendChild(t);return e}const NUMBER_OF_snow=30;window.addEventListener("load",init,false)



/*----------------------------------------------------------------------------------------------------------------------------------------------------------*/

$(document).ready(function() {
	$("#submit_one").click(function(e) {
	
	hideAllErrors();
	
	var name = $("#name").val();
	var email = $("#email").val();
	var  comment = $("#comment").val();
	
	//var name = document.getElementById("name").value;
	//email = document.getElementById("email").value;
	//comment = document.getElementById("comment").value;
	
	
	
	if (name == "" || email == "" || comment == "" || (!checkEmail(email)))
	{
		if(name == ""){
		$("#nameError").css('display', 'inline'); 
		$("#name").select();
		$("#name").focus();}
		
		if(email == "" || (!checkEmail(email))){
		$("#emailError").css('display', 'inline'); 
		$("#email").select();
		$("#email").focus();}
		
		if(comment == ""){
		$("#commentError").css('display', 'inline'); 
		$("#comment").select();
		$("#comment").focus();}
		
		return false;
		
	}
	
	
	
	
	else{
	
		e.preventDefault(); //=== To Avoid Page Refresh and Fire the Event "Click"===

	
	$.ajax({
			url:'index.php',
			data:$('#form_one').serialize(),
			type:'POST',
			dataType: 'text',
			success:function(data){
				console.log(data);
				$("#form_one").fadeOut(500, function(){ 
															//var suk = $('#success').css('display', 'inline'); if (suk.complete) {$('#success').fadeIn(1000);}  
														
														$('#success').show();});
				}
			});
	
	
	
	}
	
	function hideAllErrors() 
{
 $("#nameError").css('display', 'none');
$("#emailError").css('display', 'none');
$("#commentError").css('display', 'none');
}
	
	
	
	function checkEmail(inputvalue) 
	{
		var pattern = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		return pattern.test(inputvalue);
	}
	
	
	}); 
	
	

	
	
});

/*----------------------------------------------------------------------------------------------------------------------------------------------------------*/

$(document).ready(function() {
	$('#form_two').ajaxForm(  { beforeSubmit: validate });

		
	function validate(formData, jqForm, options) { 
		
	
    // fieldValue is a Form Plugin method that can be invoked to find the 
    // current value of a field 
    // 
    // To validate, we can capture the values of both the username and password 
    // fields and return true only if both evaluate to true 
 
 
	hideAllErrors();
 
    var ime = $("#ime").val();		
	var mail = $("#mail").val();	
	var date = $('#date').val();
	
	if(ime == "" || mail == "" || (!checkEmail(mail)) || date == "" || (!checkDate(date)))
	{
		if (ime == "")
		{		
			$("#nameError2").css('display', 'inline'); 
			$("#ime").select();
			$("#ime").focus();
						
		}	
		
		if (mail == "" || (!checkEmail(mail)))
		{		
			$("#emailError2").css('display', 'inline'); 
			$("#mail").select();
			$("#mail").focus();
						
		}

		if (date == "" || !checkDate(date))   // checkDate(date) izvrsi se samo ako dođe false (i postane true negacijom)
		{		
			
			
			$("#dateError").css('display', 'inline'); 
			$("#date").select();
			$("#date").focus();
			
			derp();
						
		}	
		

			return false;  //e.preventDefault();
	}	
		
	
      $("#form_two").fadeOut(500, function(){$('#success2').show();}); 
	
	}
				
	
	
	function hideAllErrors() 
	{
		$("#nameError2").css('display', 'none');
		$("#emailError2").css('display', 'none');
		$("#dateError").css('display', 'none'); 
		$("#dateError2").css('display', 'none'); 
	}

	function checkEmail(inputvalue) 
	{
		var pattern = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		return pattern.test(inputvalue);
	}

	function checkDate(inputvalue1)
	{
		var currentTime = new Date();
		var month = currentTime.getMonth();
		var day = currentTime.getDay();
		
		var minYear = 1902;
		var maxYear = (new Date()).getFullYear();
	
		var pattern1 =  /^(\d{4})-(\d{1,2})-(\d{1,2})$/;
		//return pattern1.test(inputvalue1);
				
		
		
		if(regs = inputvalue1.match(pattern1))
		{
			if(regs[3] < 1 || regs[3] > 31 ) 
				{return false;} 
			else if(regs[2] < 1 || regs[2] > 12 ) 
				{return false;} 
			else if(regs[1] < minYear || regs[1] > maxYear ) 
				{return false;}		
			else if((maxYear - regs[1])<18)
				{
					if((maxYear - regs[1])==0)
					{
						if(((month-regs[2])<0) || ((day-regs[3])<0)){ return false;}
					}
					else
					{
						$("#dateError2").css('display', 'inline'); return false;
					}
				}	
			
		}
		else 
			{return false;}
		
		return true;
		
		
	}
	
	
	function derp()
	{	
		var kek = $('#dateError2').css('display');
		
		if(kek == 'inline'){$('#dateError').css('display', 'none');}
	}
	
			
}); 

	
	


/*----------------------------------------------------------------------------------------------------------------------------------------------------------*/

$(document).ready(function() {

    $('.story').click( function() { 
			
		div2_to_activate = $(this).attr("href"); // Store its target
	 
		$('.storytime:visible').fadeOut('slow', function(){$(div2_to_activate).fadeIn('slow');}); 
		
		});
      
		
	});
	
	
	

