<?php

//status updater
//Developer:Rahul Negi
//Dev Url: www.tutsapp.com
include_once('dbconnect.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>Facebook like post publishing system - Demo Status Updater</title>
<meta name="description" content="see demo of facebook like demo status updater system using php, mysql and ajax- Developed by rahul negi"/>
<meta keywords="facebook status updater, facebook like status upldate system, facebook like publishing system, post publish system using php, facebook like status update"/>
<link rel="stylesheet" href="style.css" type="text/css"/>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
<script type="text/javascript">
	$(document).ready(function(){
  $("#statusUpdate").click(function(){
    $.post("http://localhost/demos/status-updater/statusupdater.php",
    {
      user:$("input:text").val(),
      status:$("textarea").val()
    },
    function(data,status){
      if(status == "success")
	  {
	  
		$("#msg").replaceWith("<div id=msg><img src=images/loader.gif><br/>Loading Your Status...</div>");
		setTimeout(function(){
		$("#msg").replaceWith("<span id=msg>"+data+"</span>");
		},5000);
		setTimeout(function (){
		$('#feed').load('result.php').fadeIn("slow");}, 7000); 
		}
    });
  });
		setTimeout(function (){
		$("#msg").replaceWith("<div id=msg></div>");
		$('#feed').load('result.php').fadeIn("slow");}, 3000); 
  });
  
  </script>
</head>
<body>
<header>
<img src="images/rappLogo.jpg" alt="R Apps - A Rahul Negi's Production"/>
</header>
<div id="entry-title"><h1>Demo Status Updater</h1>
<h2><a href="http://www.tutsapp.com/make-facebook-like-post-publishing-system.html">How To Make Facebook like post publishing system.</a></h2>
</div>
<section>
<div id="statusBar">
<form action="<?php $_SERVER['PHP_SELF'];?>" name="statusUp" method="post">
<input type="text" name="user" id="user" value="Your Name" onfocus="if(this.value=='Your Name')this.value='';" onblur="if(this.value=='')this.value='Your Name';"/>
<textarea name="status" id="status" onfocus="if(this.value=='What`s On Your Mind?')this.value='';" onblur="if(this.value=='')this.value='What`s On Your Mind?';">What`s On Your Mind?</textarea>
<div id="sbtbar"><input type="button" name="post" id="statusUpdate" onclick="statusUpdate()"value="Share"/><div class="clear"></div></div>
<div class="clear"></div>
</form>
</div>

<div id="bottomCol">
<div id="msg"></div>
<?php include_once('result.php');?>
</section>
<footer>
&copy; <?php echo date('Y'); ?> 2014 R APPS <small>A Rahul Negi's Production</small> 
</footer>

</body>
</html>
