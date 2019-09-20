<!DOCTYPE html>
<html lang="en"><head>
	<title> Example </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<script type="text/javascript" src="http://localhost/bai2//vendor/bootstrap.js"></script>
	<script type="text/javascript" src="http://localhost/bai2/1.js"></script>
	<link rel="stylesheet" href="http://localhost/bai2/vendor/bootstrap.css">
	<link rel="stylesheet" href="http://localhost/bai2/vendor/font-awesome.css">
	<link rel="stylesheet" href="http://localhost/bai2/1.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body >
	<div class="container">
		<div class="text-xs-center">
			<h3 class="display-3">Danh sách nhân sự</h3>
		</div>
	</div>
	<div class="container">
		<div class="card" style="width:300px">
			<img class="card-img-top" src="https://www.w3schools.com/bootstrap4/img_avatar1.png" alt="Card image" style="width:100%">
			<div class="card-body">
				<h4 class="card-title name">Nguyen Van A</h4>
				<p class="card-text age">Age : 30</p>
				<p class="card-text phoneNumber">Phone Number : 30</p>
				<p class="card-text numberOfOder"> Number of oder : 100</p>
				<a href="#" class="btn btn-primary stretched-link ">Facebook</a>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="text-xs-center">
			<h4 class="display-4">Thêm mới nhân sự</h4>
		</div>
		<form method="post" enctype="multidata/form-data" action="<?= base_url() ?>/index.php/employee/addEmployee">
			<div class="row">
				<div class="form-group col-sm-6">
					<label for="image">Image : </label>
					<input type="file" class="form-control" id="image">
				</div>
				<div class="form-group col-sm-6">
					<label for="name">Name :</label>
					<input type="text" class="form-control" id="name">
				</div>
				<div class="form-group col-sm-6">
					<label for="age">Age :</label>
					<input type="text" class="form-control" id="age">
				</div>
				<div class="form-group col-sm-6">
					<label for="order">Number of order :</label>
					<input type="text" class="form-control" id="order">
				</div>
				<div class="form-group col-sm-6">
					<label for="phoneNumber">Phone Number :</label>
					<input type="text" class="form-control" id="phoneNumber">
				</div>
				<div class="form-group col-sm-6">
					<label for="linkFB">Facebook :</label>
					<input type="text" class="form-control" id="linkFB">
				</div>
				<div class="text-xs-center col-sm-12" >
					<button type="submit" class="btn btn-outline-primary " style="padding: 5px 50px 5px 50px">Submit</button>
					<button type="reset" class="btn btn-outline-danger " style="padding: 5px 50px 5px 50px">Reset</button>

				</div>
			</div>

		</form>
		
	</div>
	

</body>
</html>