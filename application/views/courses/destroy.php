<!DOCTYPE html>
<html>
<head>
	
	
	<title>Destroy Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1> Are you sure you want to delete
		this course ? 
		</h1>
		<p> Name : <?php echo $name ?> </p>
		<p> Description : <?php echo $description ?> </p>
		<form action="/" method="post" >
			<input type="submit"  value="No" class= "btn btn-primary">
		</form>
		<form action="/courses/delete/<?= $id; ?>" method="post" >
			<input type="submit" value="Yes I want to delete" class="btn btn-danger">
		</form>



	</div>
	
</body>
</html>