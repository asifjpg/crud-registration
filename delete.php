<?php
 include 'connection.php';
 include 'link.php';
 
  $id= $_GET['id'] ;
  $q =" delete   from crudthapa where id=$id "; 
  $res = mysqli_query ($con,$q);
if($res)
// {
// 	echo "delete successfully";

// }
// else
// {
// 	echo "not delteted successfully";
// }

{
		?>
		<script>
			alert("data deleted properly");

		</script>
	
		<?php
	}

		else
		{
			?>
			<script>
				alert(" data  deleted succefully");
			</script>

			

			<?php
	   }

header('location:display.php');



?>