<?php 
include_once("dbconnect.php");
$feedresult=mysqli_query($con,"Select * From statusupdater ORDER BY status_id DESC");
while($result=mysqli_fetch_array($feedresult))
{
?>
<div id="feed">
<div class="feedtop">
<div class="avatar">
<img src="images/user_avatar.jpg" alt="User avatar">
</div>
<div class="date">
<?php echo $result['user'];?> Updated Status At <?php echo $result['post_date'];?>
</div>
<div class="clear"></div>
</div>
<div id="s_content">
<?php echo $result['status_content'];?>
</div>
</div>
<?php } ?>
