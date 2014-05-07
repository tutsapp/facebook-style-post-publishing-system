<?php

//status updater
//Developer:Rahul Negi
//Dev Url: www.tutsapp.com
include_once('dbconnect.php');

$msg="";
if(empty($_POST['user']) || $_POST['user']=="Your Name")
{
$msg="Please Must Enter Your Name.";
}else{
$user=$_POST['user'];
}
if(empty($_POST['status'])|| $_POST['status']=="What`s On Your Mind?")
{
$msg="Please Say What's On Your Mind?";
}else{
$status=$_POST['status'];
}
if(empty($msg))
{
$date=date('y-m-d h:i:s');
mysqli_query($con,"INSERT INTO statusupdater (`post_date`, `status_content`, `user`, `post_status`) 
VALUES ('$date','$status','$user','O')");
$msg="Successfuly Posted On Your Wall";	
}
?>
<?php if(!empty($msg))
{?>
<div id="msgBar"><?php echo $msg;?></div>
<?php }?>
