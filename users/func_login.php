                 <?php
                 include('../dbcon.php');
                                if (isset($_POST['submit4'])){
                                session_start();
                                $email =$_POST['email'];
                                $password =$_POST['password'];
                                $query = "SELECT * FROM klient WHERE klient_email='$email' AND klient_password='$password'";
                                $result = mysql_query($query)or die(mysql_error());
                                $num_row = mysql_num_rows($result);
                                    $row=mysql_fetch_array($result);
                                    if( $num_row > 0 ){  
                                        header('location:index.php');
                                    
                                $_SESSION['id']=$row['klient_id'];
                                    session_start();
                                    }
                                     else { 
                                    ?>
                                <script type="text/javascript">
                                alert('Te dhenat jane shkruar gabim.');
								history.go(-1);
                            </script>
                                <?php
                                }}
                                ?>