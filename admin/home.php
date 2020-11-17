<?php include('session.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>PRIME CINEMA - HOME</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.jpg" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Page Loader -->
 <?php include('top.php'); ?>   
    <!-- #Top Bar -->
<?php include('menu.php'); 
 include('dbcon.php'); 

?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <a class="info-box bg-pink hover-expand-effect" href="shiko_film.php">
                        <div class="icon">
                            <i class="material-icons">theaters</i>
                        </div>
                        <div class="content">
                            <div class="text">Shiko te gjitha</div>
                            <div class="number">FILMAT</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <a class="info-box bg-cyan hover-expand-effect" href="bileta.php">
                        <div class="icon">
                            <i class="material-icons">receipt</i>
                        </div>
                        <div class="content">
                            <div class="text">Shiko te gjitha</div>
                            <div class="number">BILETAT</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <a class="info-box bg-light-green hover-expand-effect" href="kontakt.php">
                        <div class="icon">
                            <i class="material-icons">phone</i>
                        </div>
                        <div class="content">
                            <div class="text">Shiko te gjithe</div>
                            <div class="number">KONTAKTET</div>
                        </div>
                    </a>
                </div>

            </div>
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>CPU USAGE (%)</h2>
                                </div>
                                <div class="col-xs-12 col-sm-6 align-right">
                                    <div class="switch panel-switch-btn">
                                        <span class="m-r-10 font-12">REAL TIME</span>
                                        <label>OFF<input type="checkbox" id="realtime" checked><span class="lever switch-col-cyan"></span>ON</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="body">
                            <div id="real_time_chart" class="dashboard-flot-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# CPU Usage -->
            <div class="row clearfix">


            </div>

                 <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                 10 Biletat me te fundit te porositura
                            </h2>

                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th># Bilete ID</th>
                                            <th>Kinemaja</th>
                                            <th>Salla</th>
											<th>Data</th>
                                            <th>Ora</th>
											<th>Cmimi</th>
											<th>Nr.Vendeve</th>
                                            <th>Te tjera</th>
                                        </tr>
                                    </thead>
                                     <tbody>
                                    <?php $bttt=mysql_query("select * from bilete order by bilete_id DESC LIMIT 10")or die (mysql_error());
				while($bilete=mysql_fetch_array($bttt)){ ?>
                                        <tr>
                                            <td><?php echo $bilete['bilete_id'];?></td>
                                            <td><?php echo $bilete['kinema_emer'];?></td>
											<td><?php echo $bilete['salle_emer'];?></td>
                                            <td><?php echo $bilete['shfaqe_date'];?></td>
											<td><?php echo $bilete['shfaqe_orar'];?></td>
                                            <td><?php echo $bilete['bilete_cmim'];?></td>
                                            <td><?php echo $bilete['nr_vende'];?></td>
                                            <td><a type="button" class="btn btn-danger waves-effect" href="fshi_bilete.php?id=<?php echo $bilete['bilete_id'];?>">FSHI</a>&nbsp;<a type="button" class="btn btn-warning waves-effect" href="shiko_bilete.php?id=<?php echo $bilete['bilete_id'];?>">Vendet</a></td>
                                        </tr>

                <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		
		
		
		
		
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>