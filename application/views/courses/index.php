<!DOCTYPE html>
<table
<html>
<head>
	<title>Courses Assignment Dashboard</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<style type="text/css">
		body
		{
			text-align:center;
		}
		#description
		{
			resize: none;
		}
		.description
		{
			margin-left: 111px;
			margin-top: -30px;
		}
		.move_description
		{
			margin-left: -150px;
			margin-top: 20px;
		}
		.btn
		{
			width:100px;
			margin-left: 170px;
		}

		
	</style>
	
</head>
<body>

	<div class="container">
	<h3> Welcome to Theo's Courses! </h3>

	<h2> All Courses </h2>
	<form action="/courses/create" method="post" >
		<label>Name of course:</label>
		<input type="text" name="name">
		<br>
		<label class="move_description">Description:</label>
		<div class="description">
		
		<textarea name="description" id="description" ></textarea>
		<br>
		</div>
		<input type="submit" value="Add Course" class=" btn btn-danger">
	</form>
	<table class= "table table-bordered table-striped">
		<caption>Table displaying all the courses</caption>
		<thead>
			<tr>
				<th>Course Name</th>
				<th>Description</th>
				<th>Created At</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach($courses as $course){ ?>
			<tr>
				<td><?= $course['name']; ?></td>
				<td><?= $course['description'];?></td>
				<td><?= $course['created_at'];?></td>
				<td><a href='courses/destroy/<?=$course['id']; ?>'>Remove</a></td>
			</tr>
		<?php }?>
		</tbody>
		<table
	</table>
	</div>
	
</body>
</html>