<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'link.php'; ?>
	<?php include 'style.php';?>

</head>
<body>
<div class="container register">
	<div class="row">
		<div class="col-lg-3  col-md-3 register-left">
			<img src="site.png" height="300" width="350" >
			<h3 class="mr-lg-5 mb-lg-5 ml-lg-5">Welcome</h3>
			<p>please fill all the details carefully.this form can change your life.</p>
			<a href="display.php">Check Form</a><br>
		</div>
			<div class="col-lg-9  col-md-9  register-right">
				
					<h3 class="pb-3 pt-5 pl-5 text-center"> Apply for Web Develper Post</h3>
			
				<form action="index.php" method="POST">
					<div class="row register-form">
						<div class="col-lg-12 col-md-12 mt-5">

							<div class="row">
							
								<div class="col-lg-6 col-md-6">
									<div class="form-group">
										<input type="text" name="user" value="" placeholder="enter your name" class="form-control">
									</div>

									<div class="form-group">
										<input type="tel" name="mobile" value="" placeholder="mobile number" class="form-control">
									</div>

									<div class="form-group">
										<input type="text" name="refer" value="" placeholder="any reference" class="form-control">
									</div>
								</div>


								<div class="col-lg-6 col-md-6">
									<div class="form-group">
										<input type="email" name="email" value="" placeholder="email-id" class="form-control">
									</div>

									<div class="form-group">
										<input type="text" name="degree" value="" placeholder="enter your qualification" class="form-control">
									</div>

									<div class="form-group">
										<input type="text" name="jobprofile" value="" placeholder="web devloper post" class="form-control">
									</div>
								</div>
							
							<input type="submit" name="submit" class="btnRegister " value="Register">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<?php
  include 'connection.php';
if(isset($_POST['submit']))
{
	$user = $_POST['user'];
	//echo $user;
	$degree = $_POST['degree'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$refer = $_POST['refer'];
	$jobprofile =$_POST['jobprofile'];

	$insertquery = "insert into crudthapa(name, degree, mobile, email, refer, jobpost) values ('$user','$degree','$mobile','$email','$refer','$jobprofile')";

	$res = mysqli_query($con,$insertquery);

	if($res)
	{
		?>
		<script>
			alert("data inserted properly");

		</script>
	
		<?php
	}

		else
		{
			?>
			<script>
				alert(" data is not inserted succefully");
			</script>

			

			<?php
	   }
}



?>



</body>
</html>