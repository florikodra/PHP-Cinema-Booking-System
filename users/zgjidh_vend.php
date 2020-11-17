<?php include('session.php'); ?>
<!doctype html>
<html>
<head>
	<!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>PRIME CINEMA | Zgjidh Vendin tend</title>
                <link rel="icon" href="../admin/favicon.jpg" type="image/x-icon">

    
    <!-- Mobile Specific Metas-->
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="telephone=no" name="format-detection">
    
    <!-- Fonts -->
        <!-- Font awesome - icon font -->
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <!-- Roboto -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    
    <!-- Stylesheets -->
        <!-- jQuery UI -->
        <link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="stylesheet">

        <!-- Mobile menu -->
        <link href="../css/gozha-nav.css" rel="stylesheet" />
        <!-- Select -->
        <link href="../css/external/jquery.selectbox.css" rel="stylesheet" />
    
        <!-- Custom -->
        <link href="../css/style.css?v=1" rel="stylesheet" />

        <!-- Modernizr --> 
        <script src="../js/external/modernizr.custom.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --> 
    <!--[if lt IE 9]> 
    	<script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script> 
		<script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>		
    <![endif]-->
</head>

<body>
    <div class="wrapper"> 
        <!-- Banner -->


<?php include('header.php'); 
include('../dbcon.php'); 
$kem=$_GET['kem'];
$sem=$_GET['sem'];
$fid=$_GET['fid'];
$sid=$_GET['sid'];
$nrvd=$_GET['nrvd'];
$usid=$_SESSION['id'];


?>


        <!-- Main content -->
        <section class="container">
            <div class="content-wrapper modify--bottom">
            <!-- Promo boxes -->
            <div class="content-wrapper">
 <div class="col-sm-12">
                  <div class="promo promo--short">
				  <div class="promo__describe">Rezervimi i Vendeve</div>
                      <div class="promo__head">CINEMA SCREEN</div>
                      
                  </div>

                </div>
            </div>

				<div class="col-sm-12">
                   <!-- Theme buttons varaiant for using-->
           <?php $vende=mysql_query("select * from vende where vend_id <= '$nrvd'")or die (mysql_error());
                while($vnd=mysql_fetch_array($vende)){ 

                $vendplc=$vnd['vend_id'];
                $cntvnd=mysql_query("select * from shporte where shfaqe_id='$sid' and klient_id='$usid' and vend_id='$vendplc'");
                $cntvnds=mysql_num_rows($cntvnd);

                $cntvndbltmr=mysql_query("select * from bilete_more where shfaqe_id='$sid' and vend_id='$vendplc'");
                $cntvndbltmrr=mysql_num_rows($cntvndbltmr);

                ?>
<form method="POST" action="shto_crt.php?sid=<?php echo $sid;?>" class="color" style="width: 70px;" > 
                        <input type="hidden" name="idvend" value="<?php echo $vnd['vend_id'];?>">
                        
                        <? if($cntvnds > 0) {?>

                        <div class="btn">
                            <button type="submit" class="btn btn-md btn--warning" style="width: 50px;" name="vend"" value="<?php echo $vnd['vend_id'];?>" disabled><?php echo $vnd['vend_id'];?></button>
                        </div>


                        <?php }
                        elseif ($cntvndbltmrr > 0) { ?>
                        <div class="btn">
                           <button type="submit" class="btn btn-md btn--danger"  style="width: 50px;" name="vend"" value="<?php echo $vnd['vend_id'];?>" disabled><?php echo $vnd['vend_id'];?></button>
                        
                        </div>
                        <?php }



                        else{ ?>

                        <div class="btn">
                            <button type="submit"  class="btn btn-md btn--warning" style="width: 50px;" name="vend"" value="<?php echo $vnd['vend_id'];?>"><?php echo $vnd['vend_id'];?></button>
                        </div>


                       <?php } ?>

                        

        





</form>  <?php    } ?>
                </div>


            </div>
            
        </section>

        
        <!-- Main content -->
        <section class="container">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="page-heading">Vendet e Zgjedhura:</h2>

                        <div class="rates-wrapper rates--full">
                            
                            <table>

                                <thead class="rates rates--top">
                                    <td class="rates__obj"><strong>Kinemaja</strong></td>
                                    <td class="rates__obj"><strong>Salla</strong></td>
                                    <td class="rates__obj"><strong>Data</strong></td>
                                    <td class="rates__obj"><strong>Ora</strong></td>
                                    <td class="rates__obj"><strong>Cmimi</strong></td>
                                    <td class="rates__obj"><strong>Vendi</strong></td>
                                    <td class="rates__obj"><strong>Te tjera</strong></td>
                                    
                                </thead>

<?php $shfaqq=mysql_query("select * from shfaqe where shfaqe_id = '$sid'")or die (mysql_error()); 
while ($ert = mysql_fetch_array($shfaqq)) {

$shqdt = $ert['shfaqe_date'];
$shqor = $ert['shfaqe_orar'];
$shqcm = $ert['shfaqe_cmim'];

}

?>

<?php $filmmm=mysql_query("select * from filma where film_id = '$fid'")or die (mysql_error()); 
while ($frmmmm = mysql_fetch_array($filmmm)) {

$fem = $frmmmm['film_emer'];


}

?>

<?php $shport=mysql_query("select * from shporte where shfaqe_id='$sid' and klient_id='$usid'")or die (mysql_error());
                 $cntbl=mysql_num_rows($shport);
                 $total=$cntbl*$shqcm;
                while($shprt=mysql_fetch_array($shport)){ ?>
                         <tbody>
                                 <tr class="rates">
                                    <td class="rates__obj"><?php echo $kem;?></td>
                                    <td class="rates__obj"><?php echo $sem;?></td>
                                    <td class="rates__obj"><?php echo $shqdt;?></td>
                                    <td class="rates__obj"><?php echo $shqor;?></td>
                                    <td class="rates__obj"><?php echo $shqcm;?></td>
                                    <td class="rates__obj"><?php echo $shprt['vend_id'];?></td>
                                    <td class="rates__obj"><a href="fshi_vnd.php?idvend=<?php echo $shprt['shporte_id'];?>" class="btn btn-md btn--danger">X</a></td>

                                </tr>

</tbody>

           <?php    } ?>          


<thead class="rates rates--top">
    
                                    <td class="rates__obj"></td>
                                    <td class="rates__obj"></td>
                                    <td class="rates__obj"></td>
                                    <td class="rates__obj"><strong>Totali:</strong></td>
                                    <td class="rates__obj"><strong><?php echo $total;?></strong></td>
                                    <td class="rates__obj"></td>
                                    <td class="rates__obj"></td>


</thead>



                            </table>
                        </div>

                         <? 
                         $shport=mysql_query("select * from shporte where shfaqe_id='$sid' and klient_id='$usid'")or die (mysql_error());
                 $cntbl=mysql_num_rows($shport);


                         if($cntbl > 0) {?>

                          <div class="booking-pagination booking-pagination--margin">
                           <form action="" method="POST" >
                            <button name="konfirmo" type="submit" class="booking-pagination__next"><span class="arrow__text arrow--next">Konfirmoni</span>
                        <span class="arrow__info">Hapi i Fundit</span></button>
                         <? if(isset($_POST['konfirmo'])){
mysql_query("insert into bilete (klient_id,film_emer,kinema_emer,salle_emer,shfaqe_date,shfaqe_orar,nr_vende,bilete_cmim) values ('$usid','$fem','$kem','$sem','$shqdt','$shqor','$cntbl','$total')");
                            $dbts = mysql_connect('localhost','sfzqpcra_primecinema','primecinema2018');
                            $id = mysql_insert_id($dbts);
$merrdb=mysql_query("select * from shporte where shfaqe_id='$sid' and klient_id='$usid'")or die (mysql_error());
 while($merr=mysql_fetch_array($merrdb)){ 

                                mysql_query("insert into bilete_more (bilete_id,klient_id,shfaqe_id,vend_id) values ('$id','$usid','$sid','".$merr['vend_id']."')");


}

$merrdbfsh=mysql_query("select * from shporte where shfaqe_id='$sid'")or die (mysql_error());
 while($merrtjt=mysql_fetch_array($merrdbfsh)){ 

                                mysql_query("delete from shporte where shporte_id='".$merrtjt['shporte_id']."'");


}




                            ?> <script>
    window.location='book-final.php?id=<? echo $id; ?>'
     </script><? } ?>


                            </form>
                        

                        </div> <? }
                        else{
                          
                        }
                        ?>




                    </div>

                </div>
            </div>
        </section>


    </div>


<?php include('footer.php'); ?>
	<!-- JavaScript-->
        <!-- jQuery 1.9.1--> 
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/external/jquery-1.10.1.min.js"><\/script>')</script>
        <!-- Migrate --> 
        <script src="../js/external/jquery-migrate-1.2.1.min.js"></script>
        <!-- jQuery UI -->
        <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <!-- Bootstrap 3--> 
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script> 
        <!-- Inview -->
        <script src="../js/external/jquery.inview.js"></script>

        <!-- Mobile menu -->
        <script src="../js/jquery.mobile.menu.js"></script>
        <!-- Select -->
        <script src="../js/external/jquery.selectbox-0.2.min.js"></script>

        <!-- Form element -->
        <script src="../js/external/form-element.js"></script>
        <!-- Form validation -->
        <script src="../js/form.js"></script>

        <!-- Custom -->
        <script src="../js/custom.js"></script>
		
		<script type="text/javascript">
            $(document).ready(function() { 
                init_Elements();
            });
		</script>

</body>
</html>