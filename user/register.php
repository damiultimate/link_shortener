<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
  
<!-- Mirrored from shurl.club/user/register by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Apr 2020 16:08:16 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>       
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0" />  
    <meta name="description" content="Register an account and gain control over your urls. Manage them, edit them or remove them without hassle." />
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

    <!-- Open Graph Tags -->
    <meta property="og:type" content="website" />
	<meta property="og:url" content="../index.php" />
	<meta property="og:title" content="Register and manage your urls - Linklock" />
	<meta property="og:description" content="Register an account and gain control over your urls. Manage them, edit them or remove them without hassle." />
	<meta property="og:image" content="" />
	<link rel="icon" type="image/png" href="../content/favicon.png" sizes="32x32" />
	<link rel="canonical" href="register.php" />
	<link rel="stylesheet" href="load-animation.css"/>
	 

    <title>Register and manage your urls - Linklock</title> 
        
    <!-- Bootstrap core CSS -->

    <link href="../static/css/bootstrap.min.css" rel="stylesheet">

    <!-- Component CSS -->
    <link rel="stylesheet" type="text/css" href="../themes/infinity/style.css">
	<link rel="stylesheet" type="text/css" href="../themes/infinity/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="../themes/infinity/css/snackbar.min.css">
    <link rel="stylesheet" type="text/css" href="../static/css/components.min.css">
	<link rel="stylesheet" type="text/css" href="../static/css/fa-all.min.css">
	
	<!-- <link rel="stylesheet" type="text/css" href="https://shurl.club/themes/infinity/styles/green.css"> -->
	
    <!-- Required Javascript Files -->
    <script type="text/javascript" src="../ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> 
    <script type="text/javascript">
      var appurl="../index.php";
      var token="4318f6c9bfd887c645fbb5615ba21ff2";
    </script>  
	<script type="text/javascript" src="../cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.jquery.min9f1e.js?v=1.1.0"></script>
	<script type="text/javascript" src="../cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.1/icheck.minf700.js?v=1.0.1"></script>
	<script type="text/javascript" src="../cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.15/clipboard.min19cd.js?v=1.5.15"></script>
	<script type="text/javascript" src="../cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min4c20.js?v=3.0.3"></script>
	<link rel="stylesheet" type="text/css" href="../cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min4c20.css?v=3.0.3">
	<script type="text/javascript" src="../cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.4.10/jquery.autocomplete.mind38a.js?v=1.1.5"></script>
	    
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>@font-face {font-family: 'Material-Design-Iconic-Font';src: url('../themes/infinity/fonts/Material-Design-Iconic-Fontd1f1.php?v=2.2.0') format('woff2'), url('../themes/infinity/fonts/Material-Design-Iconic-Fontd1f1.woff?v=2.2.0') format('woff'), url('../themes/infinity/fonts/Material-Design-Iconic-Fontd1f1.ttf?v=2.2.0') format('truetype');font-weight: normal;font-style: normal;}</style>
  </head>
  <div id="focus-overlay"></div>
<body class='dark' id="body">
    <a href="#body" id="back-to-top"><i class="zmdi zmdi-chevron-up"></i></a>
    		      
	<?php include ("header.php"); ?>
	<section class="under-head-cont">
		<div class="container">
			<div class="centered form">      
					
				<form role="form" class="live_form" id="login_form" method="post" action="regprocess.php">
					<p class="title">Get Started</p>
					<div class="form-group">
						<input type="text" class="form-control" id="name" placeholder="Username" name="username" autofocus required />
						<i class="zmdi zmdi-account"></i>
					</div>        
					<div class="form-group">
						<input type="email" class="form-control" id="email" placeholder="Email address" name="email" required />
						<i class="zmdi zmdi-email"></i>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="pass" placeholder="Password" name="password" required />
						<i class="zmdi zmdi-dialpad"></i>
					</div>     
					<div class="form-group">
						<input type="password" class="form-control" id="pass2" placeholder="Confirm Password" name="cpassword" required />
						<i class="zmdi zmdi-dialpad"></i>
					</div>  
								
					<div class="form-group">
						<div class="round-check">
							<input type="checkbox" name="terms" value="1" id="round-checkbox"/> 
							<label for="round-checkbox">I agree to the <a href="../page/terms.php" target="_blank">terms and conditions</a>.</label>
						</div>
					</div>          
					<button type="submit" class="mdbtn btn btn-primary width100">Create account</button>
					<br><br>
					<p>Do you have an account? <a href='login.php'>Login Now</a></p>

					<hr />
				</form>        


			</div>
		</div>
	</section>           

<div class="sk-chase" id="sk-chase">
  <div class="sk-chase-dot"></div>
  <div class="sk-chase-dot"></div>
  <div class="sk-chase-dot"></div>
  <div class="sk-chase-dot"></div>
  <div class="sk-chase-dot"></div>
  <div class="sk-chase-dot"></div>
</div>



	<script type="text/javascript">
			var lang = {"del":"Delete","url":"URL","count":"Country","copied":"Copied","geo":"Geotargeting data for","error":"Please enter a valid URL.","success":"URL has been successfully shortened. Click Copy or CRTL+C to Copy it.","stats":"You can access the statistic page via this link","copy":"Copied to clipboard.","from":"Redirect from","to":"Redirect to","share":"Share this on","congrats":"Congratulation! Your URL has been successfully shortened. You can share it on Facebook or Twitter by clicking the links below.","qr":"Save QR Code","continue":"Continue","cookie":"This website uses cookies to ensure you get the best experience on our website.","cookieok":"Got it!","cookiemore":"Learn more"};
	</script>  
		
	<script type="text/javascript" src="../bootstrap.js"></script>
	<script type="text/javascript" src="../themes/infinity/assets/js/application.fn.js"></script>
	<script type="text/javascript" src="../themes/infinity/assets/js/application.js"></script>
	<script type="text/javascript" src="../themes/infinity/assets/js/server.js"></script>
	<script type="text/javascript" src="../themes/infinity/assets/js/snackbar.min.js"></script>
	<script type="text/javascript" src="../themes/infinity/assets/js/main.js"></script>
	<script type="text/javascript" src="../sweetalert2-9.js"></script>


	<script type="text/javascript">

$('#login_form').submit(function(e){
e.preventDefault();

if($('#round-checkbox:checked').val() != '1'){

Swal.fire('Error','Please agree to the terms and conditions before you can continue','error');


}
else if($('#pass').val() != $('#pass2').val()){
Swal.fire('Error','Passwords Do Not Match','error');
}
else{

$('#login_form').submit();	

}

});


		$(window).on("scroll", function() {
		if($(window).scrollTop() > 50) {
			$("header").addClass("activehead");
		} else {
			//remove the background property so it comes transparent again (defined in your css)
			$("header").removeClass("activehead");
		}
		});

		function In_headerFunction() {
		var element = $("header");
		element.toggleClass("activeheadmenu2");
		}

		function In_ShowPosInfo() {
		$(".short-adv-sett").fadeIn(100);
		$(".main-index-top #main-form .main-options").slideDown(100);
		}

		//Custom Link Modal
		var $modallink = $('.link-shared'),
		$overlaylink = $('.overlaylink'),
		$showModallink = $('.show-modal'),
		$closelink = $('.closelink');

		function In_ShowLinkModal(){
		e.preventDefault();

		var windowHeight = $(window).height(),
			windowWidth = $(window).width(),
			modalWidth = windowWidth/2; //50% of window

		$overlaylink.show();
		$modallink.css({
			'width' : modalWidth,
			'margin-left' : -modalWidth/2
		});
		}

		$closelink.on('click', function(){
			$overlaylink.hide();
		});

		//Sidebar Menu
		$(document).on('click','.quicklinks-toggle__btn',function(){
			$('body').addClass('menu_active');
		});

		$('#focus-overlay').on('click',function (){
			$('body').removeClass('menu_active');
		});

		$(document).ready(function(){
			$("#widget_news h3").append(" <i class='zmdi zmdi-info' style='color: #00BCD4;'></i>");
			$("#widget_activities h3").append(" <i class='zmdi zmdi-swap-vertical-circle' style='color: #ff9800;'></i>");
			$("#widget_top_urls h3").append(" <i class='zmdi zmdi-trending-up' style='color: #4caf50;'></i>");
			$("#splash h3, #splash_create h3").append(" <i class='zmdi zmdi-info' style='color: #673ab7;'></i>");
			$("#overlay h3").append(" <i class='zmdi zmdi-info' style='color: #4CAF50;'></i>");
			$("#widget_tools h3").append(" <i class='zmdi zmdi-wrench' style='color: #9c27b0;'></i>");
			$("#widget_export h3").append(" <i class='zmdi zmdi-hourglass-alt' style='color: #4CAF50;'></i>");
		});

		//Smooth Scroll
		$('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function(t){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=$(this.hash);(e=e.length?e:$("[name="+this.hash.slice(1)+"]")).length&&(t.preventDefault(),$("html, body").animate({scrollTop:e.offset().top},1e3,function(){var t=$(e);if(t.focus(),t.is(":focus"))return!1;t.attr("tabindex","-1"),t.focus()}))}})
	</script>
</body>

<!-- Mirrored from shurl.club/user/register by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Apr 2020 16:08:16 GMT -->
</html>