<!doctype html>
<html>
<head>
	<!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>PRIEMCINEMA - Na Kontaktoni</title>
        <link rel="icon" href="admin/favicon.jpg" type="image/x-icon">

    
    <!-- Mobile Specific Metas-->
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="telephone=no" name="format-detection">
    
    <!-- Fonts -->
        <!-- Font awesome - icon font -->
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <!-- Roboto -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    
    <!-- Stylesheets -->

        <!-- Mobile menu -->
        <link href="css/gozha-nav.css" rel="stylesheet" />
        <!-- Select -->
        <link href="css/external/jquery.selectbox.css" rel="stylesheet" />
    
        <!-- Custom -->
        <link href="css/style.css?v=1" rel="stylesheet" />

        <!-- Modernizr -->
        <script src="js/external/modernizr.custom.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --> 
    <!--[if lt IE 9]> 
    	<script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script> 
		<script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>		
    <![endif]-->
</head>

<body>
<?php include('header.php'); 
include('dbcon.php'); 

?>    
<div class="wrapper">

<br><br><br><br><br><br>



        <!-- Main content -->
        <section class="container">
            
            <div class="contact">
                <p class="contact__title">Na KONTAKTONI, <br><span class="contact__describe">per cdo pyetje apo paqartesi.</span></p>
        
            </div>
        

        <div class="contact-form-wrapper">
            <div class="container">
                <div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                    <form id='contact-form' class="form row" method='post'>
                       
                        <div class="col-sm-6">
                            <input type='text' placeholder='Emri Juaj' name='name' class="form__name">
                        </div>
                        <div class="col-sm-6">
                            <input type='email' placeholder='Emaili Juaj' name='email' class="form__mail">
                        </div>
                        <div class="col-sm-12">
                            <textarea placeholder="Mesazhi Juaj" name="subject" class="form__message"></textarea>
                        </div>
                        <button type="submit" name="submit" class='btn btn-md btn--danger'>Dergo Mesazhin</button>

<?php 

if (isset($_POST['submit'])) {
$emer = $_POST['name'];
$emaili = $_POST['email'];
$mesazh = $_POST['subject'];

mysql_query("insert into kontakt (emer,email,mesazh) values ('$emer','$emaili','$mesazh')");

$msg = 'Emri:'.$_POST['name']."\n"
        .'Email:'.$_POST['email']."\n"
        .'Subjekt:'.$_POST['subject'];
        mail('info@primecinema.tk', 'PRIMECINEMA - Kontaktoni', $msg);
    

    $to = $_POST['email']; 
    $subject = $_POST['name'];
    $message = $_POST['subject'];
    $from = "info@primecinema.tk";
    $headers = "From:" . $from;

    if (mail($to, $subject, $message, $headers)) {
       ?> <script> alert ("Mesazhi u Dergua "); 
       window.location='kontakt.php';</script> <?
    }
    else {
        ?> <script> alert ("Mesazhi Deshtoi "); 
        window.location='kontakt.php';</script> <?
    }
}

?> 








                    </form>



                </div>
            </div>
        </div>
</section>


</div><?php include('footer.php'); ?>

	<!-- JavaScript-->
        <!-- jQuery 1.9.1--> 
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/external/jquery-1.10.1.min.js"><\/script>')</script>
        <!-- Migrate --> 
        <script src="js/external/jquery-migrate-1.2.1.min.js"></script>
        <!-- Bootstrap 3--> 
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

        <!-- Mobile menu -->
        <script src="js/jquery.mobile.menu.js"></script>
         <!-- Select -->
        <script src="js/external/jquery.selectbox-0.2.min.js"></script>

        <!--*** Google map  ***-->
        <script src="https://maps.google.com/maps/api/js?sensor=true"></script> 
        <!--*** Google map infobox  ***-->
        <script src="js/external/infobox.js"></script>

        <!-- Form element -->
        <script src="js/external/form-element.js"></script>
        <!-- Form validation 
        <script src="js/form.js"></script>-->

        <!-- Custom -->
        <script src="js/custom.js"></script> 
		
		<script type="text/javascript">
            $(document).ready(function() {
                init_Contact ();
            });
		</script>

</body>
</html>
