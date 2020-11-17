<?php include('session.php'); ?>

<?php
include('dbcon.php');
error_reporting(E_ALL);
if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"images/" . $_FILES["image"]["name"]);
			
									  $location="images/" . $_FILES["image"]["name"];
				                      $kinema_name=$_POST['kinema_name'];									  
									  $kinema_address=$_POST['kinema_address'];

			$save=	 mysql_query("insert into kinema (kinema_name,kinema_address,kinema_image) VALUES ('$kinema_name','$kinema_address','$location')");

				?> <script>
	 window.location='shto_kinema.php';
	 </script>
		<?php					
	}exit();	
?>
	