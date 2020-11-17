<!doctype html>
<html>
<head>
	<!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>PRIME CINEMA - Login</title>
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
<?php include('dbcon.php'); ?>
<body>
    <div class="wrapper">

<?php include('header.php'); ?>
        <!-- Search bar -->
        <div class="search-wrapper">
            <div class="container container--add">
                
            </div>
        </div>
        
        <!-- Main content -->
                <form id="login-form" class="login col-sm-6" method='POST' action="users/func_login.php" enctype= "multipart/form-data">
                    <p class="login__title">LOGOHUNI <br><span class="login-edition">ne portalin tone</span></p>

                   

                    <p class="login__tracker">:</p>
                    
                    <div class="field-wrap">
                    <input type='email' placeholder='Email' name='email' class="login__input">
                    <input type='password' placeholder='Password' name='password' class="login__input">


                     </div>
                    
                    <div class="login__control">
                        <button type='submit' name="submit4" class="btn btn-md btn--warning btn--wider">Logohuni</button>
                    </div>






                </form> 
				
				<!-- Rregjistrohu -->
				





                <form class="login col-sm-6" method="POST" enctype= "multipart/form-data">
                    <p class="login__title">Rregjistrohuni <br><span class="login-edition">ne portalin tone</span></p>
                  
                    <div class="field-wrap">
					<input type='text' placeholder='Emri Mbiemri' name='klient_emer' class="login__input">
					<input type='text' placeholder='Adresa' name='klient_adresa' class="login__input">
					<input type='number' placeholder='Nr.cel' name='klient_cel' class="login__input" value="355">
                    <input type='email' placeholder='Email' name='klient_email' class="login__input">
                    <input type='password' placeholder='Password' name='klient_password' class="login__input">
                    <input type='password' placeholder='Verifiko Password' name='verf_password' class="login__input">


                     </div>
                    
<div class="login__control"><br>
                        <button type='submit' name="Rregjistrohuni" class="btn btn-md btn--warning btn--wider">Rregjistrohu</button>
 </div>
                    <?php   if(isset($_POST['Rregjistrohuni'])){
                    	if($_POST['klient_emer'] == "" || $_POST['klient_adresa'] == "" || $_POST['klient_cel'] == "355" || $_POST['klient_email'] == "" || $_POST['klient_password'] == "" || $_POST['verf_password'] == ""){

                    	?> <script>
     alert('Ju lutem plotesoni te gjithe te dhenat');
     window.location='login.php';
     </script><?php
                    	} 
                    	else {
                        $klient_emer=$_POST['klient_emer'];
                        $klient_adresa=$_POST['klient_adresa'];
                        $klient_cel=$_POST['klient_cel'];
                        $klient_email=$_POST['klient_email'];
                        $klient_password=$_POST['klient_password'];
                        $verf_password=$_POST['verf_password'];
                 
                            if($klient_password == $verf_password){
                            mysql_query("insert into klient(klient_emer,klient_adresa,klient_cel,klient_email,klient_password) values ('$klient_emer','$klient_adresa','$klient_cel','$klient_email','$klient_password')");
                            
                            ?> <script>
     alert('Ju u Rregjistruat me Sukses!');
     window.location='login.php';
     </script><?php
}
else{

     ?> <script>alert('Password-i nuk perputhet');</script>
<?php }}


                            }
                            ?>
                </form> 
        
        <div class="clearfix"></div>
    </div>

<?php include('footer.php'); ?>

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
        <!-- Form element -->
        <script src="js/external/form-element.js"></script>
        <!-- Form validation 
        <script src="js/form.js"></script>-->

        <!-- Custom -->
        <script src="js/custom.js"></script>
        

</body>
</html>
