<?php

  include 'header.php'
?>
	<div class="content">
	<!-- Welcome Page -->
	<div class="welcome wrap-width">
		<div class="empty-layout"></div>
		<center>
		 
		<div class="welcome-text">
			<p id="text-heading">K.J. Somaiya</p><br>
			<p id="text-context">Somaiya Pacement Portal is a platform for students where can apply for<br>Companies,get the documents posted by TPO,<br> can interact with students and companies plus they can post their problem </p>
			<a id="readmore" href="aboutus.php">Read More</a>
		</div> <!-- welcome-text -->
		</center>
	</div>	<!-- welcome -->

	<div class="link-container clearfix">
		<div class="wrap-width">
			<a id="register">Sign Up Now</a>
			<p id="join">Join - Be a part of our community.</p>
		</div> 
	</div>	 <!-- link-container -->

	
	<div class="about-container clearfix wrap-width" id="about">
		<p id="title">Everything you need to know about us.</p><hr class="style-1" style="width: 600px; align-self: center;"><br/>

		<div class="col-container">
		<span class="text-back tooltip" onclick="slider()"></span>
		<i class="material-icons arrow arrow-back">navigate_before</i>
		<img id="about-img" src="images/we.png"/>
		<div class="col_one_third col_1st">
		<h1>WHO ARE <span>WE</span>.</h1>
		<div class="bottom-border"></div>

		<p>We are a group of highly motivated students and we are trying to solve the daily life problems of students which hinder them to be successful in their lives.  </p>
		</div>	<!-- col_one_third -->
		<div class="col_one_third col_2nd">
		<h1>OUR <span>MISSION</span>.</h1>
		<div class="bottom-border"></div>	<!-- border-bottom -->
		
		<p>We aim to promote the digital document attestation and verification. Our sole mission is to save the time that the students consume in attesting their docs.</p>
		</div>	<!-- col_one_third -->
		<div class="col_one_third col_3rd">
		<h1>WHAT WE <span>PROVIDE</span>.</h1>
		<div class="bottom-border"></div> <!-- border-bottm -->	
		<p>This is a platform where students can get their documents verified and attested digitally. Companies can view their docs and offer them internships and jobs.</p>
		</div>	<!-- col_one_third col_last -->
	
		<i class="material-icons arrow arrow-forward">navigate_next</i>
		<span class="text-forward tooltip"></span>
		
		</div> <!-- col-conatiner -->
	</div>	<!-- About-container -->
	<script>
	var slide = 1;
	
	var myVar = setInterval(slider, 4000);
	$(".col_one_third").hover(function(ev){
			clearInterval(myVar);
		}, function(ev){
			myVar = setInterval(slider,4000);
	});

	function slider(){
		slide+=1;
		if(slide>3){
			slide = 1;
		}

		$(".col_one_third").css("animation","fadeInRight 0.6s ease-out");
		$("#about-img").css("animation","fadeInLeft 0.4s ease-out");
		move();
	}
	</script>	
	<script>
	function move(){
		if (slide ==1){
		$(".radio-1").html("radio_button_checked");
		$(".radio-2").html("radio_button_unchecked");
		$(".radio-3").html("radio_button_unchecked");
		$(".col_1st").show();
		$(".col_2nd").hide();
		$(".col_3rd").hide();
		$("#about-img").prop("src","images/we.png");
		$(".text-back").text("What we provide");
		$(".text-forward").text("Our mission");
		}
		else if (slide==2){
		$(".radio-1").html("radio_button_unchecked");
		$(".radio-2").html("radio_button_checked");
		$(".radio-3").html("radio_button_unchecked");
		$(".col_1st").hide();
		$(".col_2nd").show();
		$(".col_3rd").hide();
		$("#about-img").prop("src","images/mission.png");
		$(".text-back").text("Who are we");
		$(".text-forward").text("What we provide");
		}
		else if (slide==3){
		$(".radio-1").html("radio_button_unchecked");
		$(".radio-2").html("radio_button_unchecked");
		$(".radio-3").html("radio_button_checked");
		$(".col_1st").hide();
		$(".col_2nd").hide();
		$(".col_3rd").show();
		$("#about-img").prop("src","images/provide.png");
		$(".text-back").text("Our mission");
		$(".text-forward").text("Who are we");
		}
	}
	</script>
	<center>
		
		<i class="material-icons radio-1">radio_button_checked</i>
		<i class="material-icons radio-2">radio_button_unchecked</i>
		<i class="material-icons radio-3">radio_button_unchecked</i>
	
	</center>
	<center>
	<div class="contact-container " id="contact">
		
		<div id="form-main">
  			<div class="contact-div form-div">
	  			<p class="contact-title" id="title">Contact us<br></p>
				<form class="form" id="form1" name="form1" action="#" method="post">
      				<p class="name">
        			<input type="text" pattern="^[a-zA-Z ]+$" class="feedback-input" maxlength="35" placeholder="Your Name" id="name" name="name" required/>
      				</p>
      
      				<p class="email">
        			<input type="email" class="feedback-input" id="email" name="email" placeholder="Your Email" required/>
      				</p>
      
      				<p class="text">
        			<textarea class="feedback-input" id="message" name="message" placeholder="Message" required></textarea>
      				</p>
            
    				<div class="submit">
    	    		<input type="submit" value="SEND" id="button-send"/>
    	    		<div class="ease"></div>
    	  			</div>
    			</form>
    		<script>
				$(function() {
		  			$("form[name='form1']").validate({
    					rules: {
      						name: {
        						required: true,
        						maxlength: 35
      						},
      						email: {
        						required: true,
        						email: true
      						},
      						message: {
        						required: true,
        						minlength: 20,
        						maxlength:250
      						}
    					},
    
  						messages: {
      						name: {
        						required: "enter your good name",
        						maxlength: "35"
      						},
      						email: "Please enter an email address",
      						email: "enter valid email"
    					},
  					});
				});
			</script>
    		</div>

    		<div class="contact-div contact-detail">
    			<p class="contact-title" id="ct-details">Contact Details</p>
    			<div class="detail-container" id="phone-no">
    				<i class="material-icons first">contact_phone</i>
    				<p class="contact-context" id="phone-text">7045327591</p>
    			</div>
    			<div class="detail-container" id="email-id">
    				<i class="material-icons second">email</i>
	    			<p class="contact-context" id="mail-text">pradeep.ramola@somaiya.edu</p>
	    		</div>
	    		 
	    		 	
					
    		</div>
    		
			</center>
	</div>
	<footer>
		<a href="#home"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a>
		<div id="copyrights">
				<span class="siteName"> Somaiya ©  2019. All rights reserved.</span>
            </div><!--copyrights-->
	</footer>
 
	</script>
	

<script defer src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<script defer type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.12.0/additional-methods.js"></script>
<script defer src="js/animate.js"></script>

</body>

</html>