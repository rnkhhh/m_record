

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Patient_Home_Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
	<a class="navbar-brand" href="#">Patient_Home_Page</a>
	</div>
	
	 <div class="collapse navbar-collapse" id="myNavbar">
	   <ul class="nav navbar-nav navbar-right">
        <li><a href="plogout.php"><span class="glyphicon glyphicon-log-in"></span> LOGOUT</a></li>
      </ul>
    </div>
	
    </div>
	</nav>
	
	
	
	<div class="col-sm-8">
	<center><h2>Pateint_record</h2></center>
	 
	  <table class="table table-bordered">
	   <table class="table table-hover">
	
		 
		  <thead>
		  <tbody>
		  
		  
		  
		  
		    <tr class="danger">
		       <th>Name</th>
			   <th>DOB</th>
			   	<th>Gender</th>
				<th>Address</th>
				<th>WorkPhone</th>
				<th>ConsultingDoctor</th>
				<th>Disease</th>
					<th>MedicineName</th>
						<th>VisitingDate</th>
						<th>VisitingTime</th>
			</tr>
			
			 
	
		<?php
		
		

if(isset($_POST['submit']))
{
	$a = $_POST['username'];
	if(empty($a))
	{
		echo "enter";
	}
	 
	 $conn = mysqli_connect('localhost','root','','m_record');
	 if(mysqli_connect_errno())
		{
			echo "failed";
		}
		
			
			$sql = "select * from record where name = '$a'";
	
			
			if($result = mysqli_query($conn,$sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['dob'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
				  echo "<td>" . $row['workPhone'] . "</td>";
				    echo "<td>" . $row['consultingDoctor'] . "</td>";
					  echo "<td>" . $row['disease'] . "</td>";
					    echo "<td>" . $row['medicineName'] . "</td>";
						  echo "<td>" . $row['visitingDate'] . "</td>";
						  echo "<td>" . $row['visitingTime'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
}
			}
}
?>
			
			
             </thead>
			   <tbody>
		    </table>
			  </table>
			
			 </div>
	
	
	
	
	
	

</body>
</html>
