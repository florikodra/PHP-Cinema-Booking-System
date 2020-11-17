<?php include('session.php'); ?>

<?php include ('dbcon.php');
$id=$_GET['id'];
 mysql_query("delete from klient where klient_id='$id'")or die (mysql_error());
?>
 <script>
	 window.location='kliente.php';
 </script>
 