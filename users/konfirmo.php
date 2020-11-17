<?php include('session.php'); ?>
<?php
	include('../dbcon.php');
	$db = include('../dbcon.php');


$usid=$_SESSION['id'];
$sid =$_GET['sid'];
$kem =$_GET['kem'];
$sem =$_GET['sem'];
$fem =$_GET['fem'];
$shqdt =$_GET['shqdt'];
$shqor =$_GET['shqor'];
$nrvd =$_GET['nrvd'];
$cm =$_GET['cm'];

if(isset($_POST['konfirmo'])){
mysql_query("insert into bilete (klient_id,film_emer,kinema_emer,salle_emer,shfaqe_date,shfaqe_orar,nr_vende,bilete_cmim) values ('$usid','$fem','$kem','$sem','$shqdt','$shqor','$nrvd','$nrvd','$cm')");
                            $id = mysql_insert_id($db);



$merrdb=mysql_query("select * from shporte where shfaqe_id='$sid' and klient_id='$usid'")or die (mysql_error());
 while($merr=mysql_fetch_array($merrdb)){ 

 	                            mysql_query("insert into bilete_more (bilete_id,klient_id,shfaqe_id,vend_id) values ('$id','$usid','$sid','".$merr['vend_id']."')");


}


                            ?> <script>
    window.location='bileta.php'
     </script><? } ?>


konfirmo.php?sid=<?php echo $sid;?>&kem=<?php echo $kem;?>&sem=<?php echo $sem;?>&fem=<?php echo $fem;?>&shqdt=<?php echo $shqdt;?>&shqor=<?php echo $shqor;?>&nrvd=<?php echo $cntbl;?>&cm=<?php echo $total;?>