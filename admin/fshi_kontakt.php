<?php include('session.php'); ?>

<?php include ('dbcon.php');
$id=$_GET['id'];
 mysql_query("delete from kontakt where kontakt_id='$id'")or die (mysql_error());
?>
 <script>
	 window.location='kontakt.php';
 </script>
 