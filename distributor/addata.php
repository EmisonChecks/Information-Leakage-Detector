<?php
session_start();
include ('session.php');
include('../dbconnect.php');
?>
<html>
	<head>
		<title> Similarity of Documents </title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<style>
		
		.jumbotron{
			width: 700px;
            margin-left: auto;
            margin-right: auto;
            background-color : #002366;
            color:white;
            border-radius:5%;
		}
		
		.navbar{
			text-align:center;
			font-size:24px;
			background-color:#002366;
			color:white;
        }

		body {
			background-color:rgb(115, 142, 201);
		}
		
		.footer {
			position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            color: white;
            text-align: center;
		}
		</style>
		
	</head>
	
	<body> 
		<nav class="navbar navbar-expand-lg">
			<span class="navbar-text">
				Information Leakage Detection
			</span>
		</nav>
		<br><br><br>
		<div class="container">
			<div class="row">
				<div class="col-md-3 ">
					<div class="list-group ">
						
						<a href="index.php" style = "background-color:#002366;color:white;" class="list-group-item list-group-item-action">Homepage</a>
                        <a href="distributor.php" class="list-group-item list-group-item-action">Add Agent </a>
                        <a href="Similarity.php" class="list-group-item list-group-item-action">Similarity of Documents</a>
						<a href="GuiltyAgent.php" style = "background-color:#002366;color:white;" class="list-group-item list-group-item-action">Find Guilty</a>
						<a href="agent.php" class="list-group-item list-group-item-action">Display Agent Details</a>
						<a href="logout.php" class="list-group-item list-group-item-action">Logout</a>
                    </div> 
		        </div>
				<br>
				<div class="jumbotron text-center" >
					<h2> Generate Report </h2> <br><br>
					<h4> Select Leaked Files </h4> <br><br>
					<form action="manage.php" method="POST" name="similiarity" enctype="multipart/form-data">
				<input type="hidden" name="user" value="<?php echo $_SESSION['user']; ?>">
					File Name:	<input type="text" name="file_name" placeholder="file Name" class="m-3"><br>
				   &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
				 	File : <input type="file" name="file" id="file1" class="m-3"> <br><br><br>
                    <button class="btn" name="leaked" type="submit">SUBMIT</button> 
					</form>
				</div>
			</div>
		</div>
		<div class="footer">
			<p style="color:black">Developed By :- Checks </p>
		</div>
	</body>
</html>