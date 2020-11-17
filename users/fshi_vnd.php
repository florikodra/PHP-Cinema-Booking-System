<?php include('session.php'); ?>

<?php include ('../dbcon.php');
$idvend=$_GET['idvend'];
 mysql_query("delete from shporte where shporte_id='$idvend'")or die (mysql_error());
?>
 <script>
	 history.go(-1)
 </script>
 