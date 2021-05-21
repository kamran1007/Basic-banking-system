<!DOCTYPE html>
<head>
	<title> syk Bank</title>
	<link rel="stylesheet" href="user.css">
	<link rel="stylesheet" href="responsive.css">
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    


<html lang="en" dir="ltr">

<meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

<title>Page Title</title>
</head>
<body>
		
	<form method="get" action="index.php">
	
<button> <i class="fa fa-chevron-circle-left fa-3x" aria-hidden="true"></i>
</button>
</form>

 
<div class="main-div">
		<div class="center-div">
			 
   
	
			<h1 style="color: #fff"> CUSTOMER DATA</h1>
			<div class="table-responsive">
            

			<table class ="table text-center table-striped table-hover tableStyle ">
				<thead>
					<tr>
						<th > ID </th>
						<th> NAME </th>
						<th> EMAIL </th>
						<th> BALANCE </th>
						<th> ACTION </th>

					</tr>
				</thead>
				<tbody>
					<?php
						 include 'connect.php';
						 $sql = "SELECT * FROM `users`";
						 $result = mysqli_query($conn,$sql);
						 $num = mysqli_num_rows($result);

						 while($rows = mysqli_fetch_array($result)){
						 ?>

						 	 <tr>
						<td><?php echo $rows['id']; ?> </td>
			            <td><?php echo $rows['names']; ?></td>
			            <td><?php echo $rows['email']; ?></td>

						<td><?php echo $rows['credit']; ?></td>
					    <td><a href="fundtransfer.php?id= <?php echo $rows['id'] ;?>"> <button class="usrbtn" type="button">Transact </button> </a></td>




					</tr>
					<?php
						}
						?>

					
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>

</html>
