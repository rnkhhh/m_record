<?php 
session_start();
if(isset($_SESSION['Patient_login']))
	header('location:Phome.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Patient_Login</title>
    <meta charset="UTF-8">
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
                <p class="imgText">LOGIN TO ACCESS YOUR M_RECORDS</p>
            </div>
        </div>
    </div>

    <section id="content">
        <div class="main">
            <div class="container_12">

                <form class="pure-form pure-form-aligned" method="post" action="Phome.php">
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
                            <a class="pure-button pure-button-primary" href="NUR1.html">Create Account</a>
                            <button type="submit" name="submit" class="pure-button pure-button-primary">Login</button>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div>
    </section>
</body>

</html>
<?php

$conn=mysqli_connect('localhost','root','','m_record');

if(isset($_POST['submit']))
		{
			$username=$_POST['username'];
			$pass=$_POST['password'];
			
			$sql = "select * from nur1 where username = '".$username."' and password ='".$pass."'";
	
			$result = mysqli_query($conn,$sql);
			if($row = mysqli_fetch_array($result))
			{
			session_start();
			$_SESSION['Patient_login']=1;
			header('location:Phome.php');
			}
			else
{
			header('location:Patient.php');
			}
}

?>



