<?php include('session.php'); ?>
<!doctype html>
<html>
<head>
	<!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>PRIME CINEMA - Rezervimi Final</title>
        <link rel="icon" href="../admin/favicon.jpg" type="image/x-icon">

    
    <!-- Mobile Specific Metas-->
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="telephone=no" name="format-detection">
    
    <!-- Fonts -->
        <!-- Font awesome - icon font -->
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <!-- Mono font -->
        <link href='http://fonts.googleapis.com/css?family=PT+Mono' rel='stylesheet' type='text/css'>
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

<script>
function printContent(el){
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
}
</script>
</head>

<body >
<?php include('../dbcon.php'); 
include('header.php'); 
$usid=$_SESSION['id'];
?>    
    <div class="wrapper place-wrapper">


<br><br><br>
        
<? $id=$_GET['id']; ?>

<?php $bileta=mysql_query("select * from bilete where bilete_id='$id'")or die (mysql_error());
                while($bilete=mysql_fetch_array($bileta)){ ?>

        <section class="container" >
            <div class="order-container" id="div1">
                <div class="order">
                    <img class="order__images" alt='' src="../images/logodrk.png">
                    <p class="order__title">Ju Falenderojme <br><span class="order__descript">Ju sapo rezervuat</span></p>
                </div>

                <div class="ticket" >
                    <div class="ticket-position">
                        <div class="ticket__indecator indecator--pre"><div class="indecator-text pre--text">online ticket</div> </div>
                        <div class="ticket__inner">

                            <div class="ticket-secondary">
                                <span class="ticket__item">Numri i Biletes <strong class="ticket__number">#<?php echo $bilete['bilete_id'];?></strong></span>
                                <span class="ticket__item">ID-ja e Klientit:<strong class="ticket__number">#<?php echo $usid;?></strong></span>
                                <span class="ticket__item ticket__date"><?php echo $bilete['shfaqe_date'];?></span>
                                <span class="ticket__item ticket__time"><?php echo $bilete['shfaqe_orar'];?></span>
                                <span class="ticket__item">Kinema: <span class="ticket__cinema"><?php echo $bilete['kinema_emer'];?></span></span>
                                <span class="ticket__item">Salle: <span class="ticket__hall"><?php echo $bilete['salle_emer'];?></span></span>
                                <span class="ticket__item ticket__price">Çmimi: <strong class="ticket__cost"><?php echo $bilete['bilete_cmim'];?></strong></span>
                            </div>

                            <div class="ticket-primery">
                                <span class="ticket__item ticket__item--primery ticket__film">Filmi:<br><strong class="ticket__movie"><?php echo $bilete['film_emer'];?></strong></span>
                                


                                <span class="ticket__item ticket__item--primery">Vendet: <span class="ticket__place">
                                    <?php $vendet=mysql_query("select * from bilete_more where bilete_id='$id' order by vend_id ASC")or die (mysql_error());
                while($vndt=mysql_fetch_array($vendet)){ ?>
<?php echo $vndt['vend_id'];?>, <? } ?> </span></span>
                            </div>


                        </div>
                        <div class="ticket__indecator indecator--post"><div class="indecator-text post--text">Bileta Online</div></div>
                    </div>
                </div>

                <div class="ticket-control">
                    <a href="bileta.php" class="watchlist list--download">Biletat e Mia</a>
                    <button class="watchlist list--print" onclick="printContent('div1')">Print</button>
                </div>

            </div>
        </section> <? } ?>
        
        <div class="clearfix"></div>

<?php include('footer.php'); ?>
    </div>

<script >
function myFunction() {
    window.print();
}
</script>

	<!-- JavaScript-->
        <!-- jQuery 1.9.1--> 
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../js/external/jquery-1.10.1.min.js"><\/script>')</script>
        <!-- Migrate --> 
        <script src="../js/external/jquery-migrate-1.2.1.min.js"></script>
        <!-- jQuery UI -->
        <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <!-- Bootstrap 3--> 
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

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
                $('.top-scroll').parent().find('.top-scroll').remove();
            });
        </script>

</body>
</html>
