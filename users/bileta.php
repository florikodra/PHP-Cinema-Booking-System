<?php include('session.php'); ?>
<!doctype html>
<html>
<head>
	<!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>PRIME CINEMA | Bileta</title>
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

$usid=$_SESSION['id'];


?>

<br><br>

        
        <!-- Main content -->
        <section class="container">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="page-heading">Biletat e rezervuara</h2>

                        <div class="rates-wrapper rates--full">
                            
                            <table>

                                <thead class="rates rates--top">
                                     <td class="rates__obj"><strong>Bilete ID</strong></td>
                                    <td class="rates__obj"><strong>Kinemaja</strong></td>
                                    <td class="rates__obj"><strong>Salla</strong></td>
                                    <td class="rates__obj"><strong>Data</strong></td>
                                    <td class="rates__obj"><strong>Ora</strong></td>
                                    <td class="rates__obj"><strong>Cmimi</strong></td>
                                    <td class="rates__obj"><strong>Nr.Vendeve</strong></td>
                                    <td class="rates__obj"><strong>Te tjera</strong></td>
                                    
                                </thead>




<?php $bilttt=mysql_query("select * from bilete where klient_id='$usid' order by bilete_id DESC")or die (mysql_error());
                while($bilete=mysql_fetch_array($bilttt)){ ?>
                         <tbody>
                                 <tr class="rates">
                                    <td class="rates__obj">#<?php echo $bilete['bilete_id'];?></td>
                                    <td class="rates__obj"><?php echo $bilete['kinema_emer'];?></td>
                                    <td class="rates__obj"><?php echo $bilete['salle_emer'];?></td>
                                    <td class="rates__obj"><?php echo $bilete['shfaqe_date'];?></td>
                                    <td class="rates__obj"><?php echo $bilete['shfaqe_orar'];?></td>
                                    <td class="rates__obj"><?php echo $bilete['bilete_cmim'];?></td>
                                    <td class="rates__obj"><?php echo $bilete['nr_vende'];?></td>
                                    <td class="rates__obj"><a href="book-final.php?id=<?php echo $bilete['bilete_id'];?>" class="btn btn-md btn--default">Shiko</a></td>

                                </tr>

</tbody>

           <?php    } ?>          





                            </table>
                        </div>

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