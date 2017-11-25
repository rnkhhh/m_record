<?php 
session_start();
if(isset($_SESSION['Admin_login_login']))
	header('location:addadetails.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin_Login</title>
    <meta charset="UTF-8">

  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/pure.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/redmond/jquery-ui.css" type="text/css" media="screen">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui.js"></script>
</head>

<body>
    <div class="container_11">
        <div class="wrapper">
            <div class="imgBox">
                <p class="imgText">Login</p>
            </div>
        </div>
    </div>

    <section id="content">
        <div class="main">
            <div class="container_12">

                <form class="pure-form pure-form-aligned" method="post" action="addadetails.php">
                    <fieldset>
                        <div class="pure-control-group">
                            <label for="username">Username</label>
                            <input name="username" id="username" type="text" required>
                        </div>

                        <div class="pure-control-group">
                            <label for="password">Password</label>
                            <input name="password" id="password" type="password" required>
                        </div>

                        <div class="pure-controls">
                           
                            <button type="submit" name="submit" class="pure-button pure-button-primary">Login</button>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div>
    </section>
</body>



<?php

$conn=mysqli_connect('localhost','root','','m_record');

if(isset($_POST['submit']))
		{
			$username=$_POST['username'];
			$pass=$_POST['password'];
			
			$sql = "select * from admin where username = '".$username."' and password ='".$pass."'";
	
			$result = mysqli_query($conn,$sql);
			if($row = mysqli_fetch_array($result))
			{
			session_start();
			$_SESSION['Admin_login']=1;
			header('location:addadetails.php');
			}
			else{
			header('location:aalogin.php');
			}
}

?>






</html>




