<?php include('session.php'); ?>

<?php include ('dbcon.php');
$id=$_GET['id'];
 mysql_query("delete from shfaqe where shfaqe_id='$id'")or die (mysql_error());
?>
 <script>
	 window.location='shiko_shfaqe.php';
 </script>
 