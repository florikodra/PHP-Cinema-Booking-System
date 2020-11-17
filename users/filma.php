<?php include('session.php'); ?>
<!doctype html>
<html>
<head>
	<!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>PRIME CINEMA | Filmat Tone</title>
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

<?php include('header.php'); 
include('../dbcon.php'); 
?>

        
        <!-- Main content -->
        <section class="container">
            <div class="col-sm-12">
                <h2 class="page-heading">Movies</h2>


                 <div class="tags-area">
                    <div class="tags tags--unmarked">
                        <span class="tags__label">Sorted by:</span>
                            <ul>
                                <li class="item-wrap"><a href="#" class="tags__item item-active" data-filter='all'>all</a></li><?php $film=mysql_query("select * from filma ")or die (mysql_error());
                while($flm=mysql_fetch_array($film)){ ?>
                                <li class="item-wrap"><a href="#" class="tags__item" data-filter='<?php echo $flm['film_kategori'];?>'><?php echo $flm['film_kategori'];?></a></li>
                            <?php } ?></ul>
                            
                    </div>
                </div>
                

  

<?php $film=mysql_query("select * from filma ORDER BY film_id DESC")or die (mysql_error());
                while($flm=mysql_fetch_array($film)){ ?>

                <!-- Movie preview item -->
                <div class="movie movie--preview movie--full <?php echo $flm['film_kategori'];?>">
                     <div class="col-sm-3 col-md-2 col-lg-2">
                            <div class="movie__images">
                                <img alt='' height="200px" width ="170px"src="../admin/images/filma/<?php echo $flm['film_image'];?>">
								
                            </div>
                    </div>

                    <div class="col-sm-9 col-md-10 col-lg-10 movie__about">
                            <a href='rreth_filmit.php?id=<?php echo $flm['film_id'];?>' class="movie__title link--huge"><?php echo $flm['film_emer'];?></a>

                            <p class="movie__option"><strong>IMDB Rate: </strong><a href="#"><?php echo $flm['fim_imdb'];?></a>
                            <p class="movie__option"><strong>Kategori: </strong><a href="#"><?php echo $flm['film_kategori'];?></a>
                            <p class="movie__option"><strong>Data e daljes ne treg: </strong><?php echo $flm['film_vit'];?></p>
                            <p class="movie__option"><strong>Autori: </strong><a href="#"><?php echo $flm['film_autor'];?></a></p>

                            <div class="movie__btns">
                                <a href="rreth_filmit.php?id=<?php echo $flm['film_id'];?>" class="btn btn-md btn--warning">Shiko <span class="hidden-sm">me shume</span></a><br>
								<a href="<?php echo $flm['film_trailer'];?>" class="btn btn-md btn--default" target="_blank">Shiko <span class="hidden-sm">Trailerin</span></a>
                            </div>


                    </div>

                    <div class="clearfix"></div>

                </div>
                <!-- end movie preview item -->

              <?php } ?></ul>



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
        <script src="../js/external/jquery-migrate-1.2.1.min.js"></script>
        <!-- jQuery UI -->
        <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <!-- Bootstrap 3--> 
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

        <!-- Mobile menu -->
        <script src="../js/jquery.mobile.menu.js"></script>
         <!-- Select -->
        <script src="../js/external/jquery.selectbox-0.2.min.js"></script> 

        <!-- Stars rate -->
        <script src="../js/external/jquery.raty.js"></script>

        <!-- Form element -->
        <script src="../js/external/form-element.js"></script>
        <!-- Form validation -->
        <script src="../js/form.js"></script>

        <!-- Custom -->
        <script src="../js/custom.js"></script>
		
		<script type="text/javascript">
            $(document).ready(function() {
                init_MovieList();
            });
		</script>

</body>
</html>
