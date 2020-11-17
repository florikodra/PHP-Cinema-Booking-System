<?php include('session.php'); 
include('dbcon.php'); 

?>
<?php $user=mysql_query("select * from administrator where admin_id='$session_id'")or die (mysql_error());
$us=mysql_fetch_array($user);?>
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $us['admin_emer'];?></div>
                    <div class="email">Administrator</div>

                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="home.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">wallpaper</i>
                            <span>Slider</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="shto_slider.php">Shto Slider</a>
                                <a href="shiko_slider.php">Shiko Slider</a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">event_seat</i>
                            <span>Salla</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="shto_salle.php">Shto Salla</a>
                                <a href="shiko_salle.php">Shiko Salla</a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">theaters</i>
                            <span>Filma</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="shto_film.php">Shto Filma</a>
                                <a href="shiko_film.php">Shiko Filma</a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">queue_play_next</i>
                            <span>Shfaqe</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="shto_shfaqe.php">Shto Shfaqe</a>
                                <a href="shiko_shfaqe.php">Shiko Shfaqe</a>
                            </li>
                        </ul>
                    </li>
                    <li >
                        <a href="bileta.php">
                            <i class="material-icons">receipt</i>
                            <span>Biletat</span>
                        </a>
                    </li>
	               <li >
                        <a href="kontakt.php">
                            <i class="material-icons">phone</i>
                            <span>Kontakte</span>
                        </a>
                    </li>
                    <li >
                        <a href="kliente.php">
                            <i class="material-icons">person</i>
                            <span>Kliente</span>
                        </a>
                    </li>
					<li >
                        <a href="ndrysho.php">
                            <i class="material-icons">settings</i>
                            <span>Settings</span>
                        </a>
                    </li>
                    <li >
                        <a href="logout.php">
                            <i class="material-icons">lock</i>
                            <span>Dil</span>
                        </a>
                    </li>




                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2017 - 2018 <a href="javascript:void(0);">PRIME CINEMA</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->

    </section>  