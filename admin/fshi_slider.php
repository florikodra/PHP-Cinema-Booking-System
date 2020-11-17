<?php include('session.php'); ?>

<?php include ('dbcon.php');
$id=$_GET['id'];
 mysql_query("delete from slider where slider_id='$id'")or die (mysql_error());
?>
 <script>
	 window.location='shiko_slider.php';
 </script>
 