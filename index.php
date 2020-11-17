
<!doctype html>
<html>
<head>
    <!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>PRIME CINEMA | Faqja Kryesore</title>
        <link rel="icon" href="admin/favicon.jpg" type="image/x-icon">
    
    <!-- Mobile Specific Metas-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="telephone=no" name="format-detection">
    
    <!-- Fonts -->
        <!-- Font awesome - icon font -->
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <!-- Roboto -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,700' rel='stylesheet' type='text/css'>
        <!-- Open Sans -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:800italic' rel='stylesheet' type='text/css'>
    
    <!-- Stylesheets -->

        <!-- Mobile menu -->
        <link href="css/gozha-nav.css" rel="stylesheet" />
        <!-- Select -->
        <link href="css/external/jquery.selectbox.css" rel="stylesheet" />

        <!-- REVOLUTION BANNER CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
     <!-- Select -->
        <link href="css/external/jquery.selectbox.css" rel="stylesheet" />
        <!-- Custom -->
        <link href="css/style.css?v=1" rel="stylesheet" />

        <!-- Magnific-popup -->
        <link href="css/external/magnific-popup.css" rel="stylesheet" />
        <!-- Modernizr --> 
        <script src="js/external/modernizr.custom.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --> 
    <!--[if lt IE 9]> 
        <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script> 
        <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>       
    <![endif]-->
</head>

<body>
    <div class="wrapper">
        <!-- Banner 
        <div class="banner-top">
            <img alt='top banner' src="http://placehold.it/1600x90">
        </div>-->

<?php include('header.php'); 
include('dbcon.php');?>

        <!-- Slider -->
            <div class="bannercontainer">
                    <div class="banner">
                        <ul>
<?php $slider=mysql_query("select * from slider ORDER BY radha ASC")or die (mysql_error());
                while($sldr=mysql_fetch_array($slider)){ ?>

          
                

                
                
                
                                <li data-transition="fade" data-slotamount="7" class="slide" data-slide='More'>
                                <img alt='' src="admin/images/slider/<?php echo $sldr['slider_image'];?>">
                                 <div class="caption slide__name slide__name--smaller slide__name--specific customin customout" 
                                     data-x="left" 
                                     data-y="160" 

                                     data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                                     data-speed="700" 
                                     data-start="1400" 
                                     data-easing="easeOutBack"
                                     data-endspeed="500"
                                     data-end="8600"
                                     data-endeasing="Back.easeIn">
                                        <?php echo $sldr['slider_emri'];?>
                                     
                                    
                                </div>

                                  <div class="caption slide__descript customin customout" 
                                     data-x="left" 
                                     data-y="240"
                                     data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                     data-speed="700" 
                                     data-start="2000"
                                     data-endspeed="500"
                                     data-end="8400"
                                     data-endeasing="Back.easeIn">
                                     <?php echo $sldr['pershkrimi'];?>
                                 </div>

                                
                            </li>
<? } ?>
                        </ul>
                    </div>
                </div>





<section class="container">



            
            <div class="clearfix"></div>

            <h2 id="target" class="page-heading heading--outcontainer">Filmat me te rinj...</h2>

            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <!-- Movie variant with time -->

                        <?php $film=mysql_query("select * from filma ORDER BY film_id DESC limit 6")or die (mysql_error());
                while($flm=mysql_fetch_array($film)){ ?>
                            <div class="movie movie--test movie--test--dark movie--test--left">
                                <div class="movie__images">
                                    <a href="rreth_filmit.php?id=<?php echo $flm['film_id'];?>" class="movie-beta__link">
                                        <img alt="" height="200" width="200" src="admin/images/filma/<?php echo $flm['film_image'];?>" >
                                    </a>
                                </div>

                                <div class="movie__info">
                                    <a href="rreth_filmit.php?id=<?php echo $flm['film_id'];?>" class="movie__title"><?php echo $flm['film_emer'];?></a>

                                    <p class="movie__option"><?php echo $flm['film_vit'];?></p>

                                    <p class="movie__option"><a href="#"><?php echo $flm['film_kategori'];?></p>
                                    
                                    <div class="movie__rate">
                                        <span class="movie__rating"><?php echo $flm['fim_imdb'];?></span>
                                    </div>               
                                </div>
                            </div> 
                         <!-- Movie variant with time -->

<?php } ?></ul>

                    </div>


                </div>
            </div>

                
        </section>
        

        
        <div class="clearfix"></div>

<?php include('footer.php'); ?>
    </div>


    <!-- JavaScript-->
        <!-- jQuery 1.9.1--> 
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/external/jquery-1.10.1.min.js"><\/script>')</script>
        <!-- Migrate --> 
        <script src="js/external/jquery-migrate-1.2.1.min.js"></script>
        <!-- Bootstrap 3--> 
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

        <!-- jQuery REVOLUTION Slider -->
        <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

        <!-- Mobile menu -->
        <script src="js/jquery.mobile.menu.js"></script>
         <!-- Select -->
        <script src="js/external/jquery.selectbox-0.2.min.js"></script>
        <!-- Stars rate -->
        <script src="js/external/jquery.raty.js"></script>
        
        <!-- Magnific-popup -->
        <script src="js/external/jquery.magnific-popup.min.js"></script>
        <!-- Form element -->
        <script src="js/external/form-element.js"></script>
        <!-- Form validation -->
        <script src="js/form.js"></script>

        <!-- Twitter feed -->
        <script src="js/external/twitterfeed.js"></script>

        <!-- Custom -->
        <script src="js/custom.js"></script>
        
          <script type="text/javascript">
              $(document).ready(function() {
                init_Home();
              });
            </script>

</body>
</html>
