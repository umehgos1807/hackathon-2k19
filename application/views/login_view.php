<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<title>Login</title>

	<style>
	.form-div{
		width:50%;
		margin:auto;
		-webkit-box-shadow: 14px 9px 29px -17px rgba(0,0,0,0.3);
		-moz-box-shadow: 14px 9px 29px -17px rgba(0,0,0,0.3);
		box-shadow: 14px 9px 29px -17px rgba(0,0,0,0.3);
		border-radius: 10px;
		margin-top: 50px;
		padding: 20px;
		min-width: 340px;
	}
	form{
		padding: 20px;
	}
	.text-danger{
		margin:15px;
	}
</style>
</head>
<body>
	<div class="container">
		<div class="form-div">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Student Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Teacher Login</a>
				</li>
				
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					<?php 
					if(isset($error) && $error_type=='usn')
					{
						echo '<div class="text-danger">'.$error.'</div>';
					}
		
					?>
					<form action="student_submit" method="post">
						<div class="form-group">
							<label for="usn">USN</label>
							<input type="text" required class="form-control" name="usn" id="usn"  placeholder="Enter your USN">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" name="password" id="password" required placeholder="Enter Password">
						</div>

						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					<?php 
					if(isset($error) && $error_type=='teacher_id')
					{
						echo '<div class="text-danger">'.$error.'</div>';
					}
		
					?>
					<form action="teacher_submit" method="post">
						<div class="form-group">
							<label for="teacher_id">Teacher ID</label>
							<input type="text" required class="form-control" name="teacher_id" id="teacher_id"  placeholder="Enter your teacher id">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" name="password" id="password" required placeholder="Enter Password">
						</div>

						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>				
			</div>
		</div>
	</div>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>