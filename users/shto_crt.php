<?php include('session.php'); ?>
<?php
	include('../dbcon.php');
$sid =$_GET['sid'];
$usid=$_SESSION['id'];
       if(isset($_POST['vend'])){
                        $vend_id=$_POST['idvend'];
                        
                            
                            mysql_query("insert into shporte (vend_id,shfaqe_id,klient_id) values ('$vend_id','$sid','$usid')");
                            
                            ?> <script>
     history.go(-1)
     </script><?php
                            }
                            





//$id=$_GET['id'];
//$query=mysql_query("select * from vende where vend_id='$id'")or die (mysql_error());
//$row=mysql_fetch_array($query);
//$new=echo $row['vend_id'];
//mysql_query("insert into shporte (vend_id) values ('$new') ")or die (mysql_error());
?>