<?php include('session.php'); ?>

<?php include ('dbcon.php');
$id=$_GET['id'];
mysql_query("delete from bilete_more where bilete_id='$id'")or die (mysql_error());
mysql_query("delete from bilete where bilete_id='$id'")or die (mysql_error());


?>
 <script>
	 history.go(-1)
 </script>
 