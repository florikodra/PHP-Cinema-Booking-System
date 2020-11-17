<?php include('session.php'); ?>
<!doctype html>
<html> 
<head>
	<!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>Prime Cinema | Rreth Filmit</title>
        <link rel="icon" href="../admin/favicon.jpg" type="image/x-icon">


    <!-- Mobile Specific Metas-->
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="telephone=no" name="format-detection">
    
    <!-- Fonts -->
        <!-- Font awesome - icon font -->
        <link href="http://nethna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <!-- Roboto -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    
    <!-- Stylesheets -->
        <!-- jQuery UI --> 
        <link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="stylesheet">

        <!-- Mobile menu -->
        <link href="../css/gozha-nav.css" rel="stylesheet" />
        <!-- Select -->
        <link href="../css/external/jquery.selectbox.css" rel="stylesheet" /> 
        <!-- Swiper slider -->
        <link href="../css/external/idangerous.swiper.css" rel="stylesheet" />
        <!-- Magnific-popup -->
        <link href="../css/external/magnific-popup.css" rel="stylesheet" />

    
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

    	<?php include('header.php'); 
    include('../dbcon.php');?>
<?php
$id=$_GET['id'];
$query=mysql_query("select * from filma where film_id='$id'")or die (mysql_error());
$row=mysql_fetch_array($query);

$videourl = $row["film_trailer"];
?>
<br><br>

        <!-- Main content -->
        <section class="container">
            <div class="col-sm-12">
                <div class="movie">
                    <h2 class="page-heading"><?php echo $row['film_emer'];?></h2>
                    
                    <div class="movie__info">
                        <div class="col-sm-4 col-md-3 movie-mobile">
                            <div class="movie__images">
                                <span class="movie__rating"><?php echo $row['fim_imdb'];?></span>
                                <img alt='' width="257" height="376" src="../admin/images/filma/<?php echo $row['film_image'];?>">
                            </div>
                        </div>

                        <div class="col-sm-8 col-md-9">
						
                            <p class="movie__option"><strong>Viti: </strong><?php echo $row['film_vit'];?></p>
                            <p class="movie__option"><strong>Kategori: </strong><?php echo $row['film_kategori'];?></p>
                            <p class="movie__option"><strong>Autori: </strong><?php echo $row['film_autor'];?></p>
  <h2 class="page-heading">Permbajtja</h2>

                    <p class="movie__describe"><?php echo $row['film_permbajtje'];?></p>
	  
                            <div class="movie__btns movie__btns--full">
                                <a href="#rez" class="btn btn-md btn--warning" >Rezervo nje bilete</a><br>
								 <a href="<?php echo $row['film_trailer'];?>" class="btn btn-md btn--default"  target="_blank">Shiko Traileri e Filmit</a>
                        
                            </div>


                        </div>
                    </div>
                    

					 






                </div></div>
<div class="col-sm-12">
                

       <div class="row" id="rez">
                    <div class="col-sm-12">
                        <h2 class="page-heading">Lista e shfaqeve:</h2>

                        <div class="rates-wrapper rates--full">
                            
                            <table><thead class="rates rates--top">
                                        <tr>

                                
                                    <th class="rates__obj">Kinemaja</th>
                                    <th class="rates__obj">Salla</th>
                                    <th class="rates__obj">Data</th>
                                    <th class="rates__obj">Ora</th>
                                    <th class="rates__obj">Cmimi</th>
                                    <th class="rates__obj">Te tjera</th>
                                    </tr>
                                </thead>

                         <tbody> <?php $shqqq=mysql_query("select * from shfaqe inner join salla on shfaqe.salle_id = salla.salle_id where film_id=$id and shfaqe_status='Available'")or die (mysql_error());
                while($flm=mysql_fetch_array($shqqq)){ ?>
                                 <tr class="rates">
                                    <th class="rates__obj"><?php echo $flm['kinema_emer'];?></th>
                                    <th class="rates__obj"><?php echo $flm['salle_emer'];?></th>
                                    <th class="rates__obj"><?php echo $flm['shfaqe_date'];?></th>
                                    <th class="rates__obj"><?php echo $flm['shfaqe_orar'];?></th>
                                    <th class="rates__obj"><?php echo $flm['shfaqe_cmim'];?></th>
                                    <th class="row"><center><a href="zgjidh_vend.php?kem=<?php echo $flm['kinema_emer'];?>&sem=<?php echo $flm['salle_emer'];?>&fid=<?php echo $flm['film_id'];?>&sid=<?php echo $flm['shfaqe_id'];?>&nrvd=<?php echo $flm['salle_vende'];?>" class="btn btn-md btn--success" width="40px">Rezervo</a></center></th>

                                </tr>
 <?php } ?>
</tbody>

                                

                            </table>
                        </div>

                    </div>

                </div>


            </div>

        </section>
            <div class="clearfix"></div>
            
        


    </div>
<?php include('footer.php'); ?>


	<!-- JavaScript-->
        <!-- jQuery 1.9.1--> 
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../js/external/jquery-1.10.1.min.js"><\/script>')</script>
        <!-- Migrate --> 
        <script src="../js/external/jquery-migrate-1.2.1.min.js"></script>
        <!-- jQuery UI -->
        <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <!-- Bootstrap 3--> 
        <script src="http://nethna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

        <!-- Mobile menu -->
        <script src="../js/jquery.mobile.menu.js"></script>
         <!-- Select -->
        <script src="../js/external/jquery.selectbox-0.2.min.js"></script>

        <!-- Stars rate -->
        <script src="../js/external/jquery.raty.js"></script>
        <!-- Swiper slider -->
        <script src="../js/external/idangerous.swiper.min.js"></script>
        <!-- Magnific-popup -->
        <script src="../js/external/jquery.magnific-popup.min.js"></script> 

        <!--*** Google map  ***-->
        <script src="https://maps.google.com/maps/api/js?sensor=true"></script> 
        <!--*** Google map infobox  ***-->
        <script src="../js/external/infobox.js"></script> 

        <!-- Share buttons -->
        <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-525fd5e9061e7ef0"></script>

        <!-- Form element -->
        <script src="../js/external/form-element.js"></script>
        <!-- Form validation -->
        <script src="../js/form.js"></script>

        <!-- Custom -->
        <script src="../js/custom.js"></script>
		
		<script type="text/javascript">
            $(document).ready(function() {
                init_MoviePage();
                 init_MoviePageFull();
            });
		
		
		
		
		</script>

</body>
</html>
