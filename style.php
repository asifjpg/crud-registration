
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'link.php'; ?>
<style type="text/css">
</head>
<body>


	
	*{
		margin: 0px;
		padding:0px;
		box-sizing: border-box;
		font-family: 'Poppins', sans-serif;
	}

.main1-div
	{
		width:100%;
		height: auto;
		/*display:flex;
		justify-content: center;
		align-items: center;*/
		background-color: #B3E5FC;
	}

	.center-div
				{
					margin-left: 120px;
					width:80%;
					height: auto;
					color:black;
					background-color: #E1F5FE;
					background:-webkit-linear-gradient(left,#5DADE2,#00c6ff);
					padding: 20px 0 0 0 ;
					box-shadow:0 10px 20px 0 rgba(0,0,0,.02);
					border-radius: 10px;
					align-items: center;
					margin-left:- 100px;
					
				}
	h1
		{
			font-size: 18px;
			color: #000;
			text-align: center;
			margin-top: -20px;
			margin-bottom: 20px;
		}			

		table
				{
					border-collapse:collapse;
					background-color: :#fff;
					box-shadow: 0 10px 20px 0 rgba(0,0,0,0.1);
					/*border-spacing: 5px;*/
					border-radius: 10px;
					margin : auto: 
				}

		 th,td
		      {
		      	border:1px solid #f2f2f2;
		      	padding: 8px 30px;
		      	text-align: center;
		      	color: white;
		      }		

		th 	
			{
				text-transform: uppercase;
				font-weight: 300;


			}      

		td
			{
				font-size:13px;





			}

				.email-style
				{
					font-size: 14px;
					color: grey;
					display: inline-block;
					background:#f2f2f2;
					-webkit-border-radius:2px;
					-moz-border-radius:2px;
					border-radius: 2px;
					line-height: 30px;
					padding:  0 14px;
				}

				.post-class
					{
						text-transform: uppercase;
					}

					.fa 
					{
						font-size:15px;
						font-weight: bold;

					}
			

					.fa-edit
					{color:green;}

					.fa-trash
					{color:#ff0000;}

					a{
						text-decoration: none;
						display: flex;
						justify-content: center;
						align-items: center;
						text-align: center;
					}
/**********************************************insert*****************************/
	
			/*	.register h3
				{
					margin-top: 50px;
				}
*/

					.register
					{	width: 100%;

						background:-webkit-linear-gradient(right,#3931af,#00c6ff);
						margin-top: 1%;
						padding: 6%;
						box-shadow: 0 10px 20px 0 rgba(0,0,0,0.3);
					}

				.register-left
					{
						text-align: center;
						color: #fff;
						margin-top: 4%;
					}

					.register-left a
					{
						text-decoration: none;
						border:none;
						border-radius: 1.5rem;
						padding: 2%;
						width:60%;
						color:#383d41;
						font-weight: bold;
						background: #f8f9fa;
						font-weight: bold;
						color:#383d41;
						margin: auto;
						cursor: pointer;

					}
					.register-left img
					{
						margin-left: -100px;
						margin-top:15%;
						margin-bottom: 15%;
						-webkit-animation:mover 2s infinite alternate;
						animation:mover 1s linear infinite;
					} 

				@-webkit-keyframes mover
				{
					0% {transform:translateY(0);}
					100%{transform:translateY(-20px);}
				}	

				@keyframes mover
					{
						0%{transform: translateY(0);}
						50%{transform: translateY(-25px);}
						100%{transform: translateY(-50px);}
					}




					.register-right 
					{	padding-left:-200px;
						background: #f8f9fa;
						/*padding-left:-100px;*/
						border-bottom-left-radius:10% 50%;
						border-top-left-radius:10% 50%;
						box-shadow: 0 10px 20px 0 rgba(0,0,0,0.3);
					}

					.register-left p
					{
						font-weight: lighter;
						padding-top: -6%;
						padding-bottom: 12%;
						margin-top: -5%;
					}

						.register .register-form
								{
									padding: 10px;
									padding-top: 10px;
								}

								.btnRegister
								{
									float: right;
									margin-top: 5%;margin-left: 500px;
									border:none;
									border-radius: 1.2rem;
									padding: 1%;
									/*line-height: center;*/
									background: #0062cc;
									color:#fff;
									font-weight: 300;
									width:20%;
									cursor:pointer;


								}


</style>
</body>
</html>