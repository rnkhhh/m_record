<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add_Details</title>
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
                <p class="imgText">Add Details</p>
            </div>
        </div>
    </div>

    <section id="content">
        <div class="main">
            <div class="container_12">

                	<form class="pure-form pure-form-aligned" method="post" action="reg.php">
                    <fieldset>
                        <div class="pure-control-group">
                            <label for="fName">First Name</label>
                            <input name="fName" type="text" required>
                        </div>

                        <div class="pure-control-group">
                            <label for="lName">Last Name</label>
                            <input name="lName" type="text">
                        </div>

                        <div class="pure-control-group">
                            <label for="b">Date of Birth</label>
                            <input name="b" type="date">
                        </div>
						
						<div class="pure-control-group">
                            <label for="c">Gender</label>
                            <select name="c" id="gender">
                                <option value="">Select</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
                            </select>
                        </div>
						
                        <div class="pure-control-group">
                            <label for="d">Address</label>
                            <input name="d" type="text">
                        </div>

                        <div class="pure-control-group">
                            <label for="e">Work Phone</label>
                            <input name="e" type="tel">
                        </div>
						
						
                        <div class="pure-control-group">
                            <label for="f">Consulting Doctor</label>
							 <select name="f" id="f" required>
                                <option value="">Select</option>
                                <option>Dr. Sumanta Chatterjee	</option>
                                <option>Dr. Soumitra Roy</option>
                                <option>Dr. Sanjay Borude</option>
								  <option>Dr. Ramneek Mahajan</option>
								    <option>Dr. Pankaj Garg</option>
									  <option>Dr. A. K. Kriplani</option>
                            </select>
                            
                        </div>
						
						  <div class="pure-control-group">
                            <label for="g">Disease</label>
                            <input name="g" type="text">
                        </div>
						
						  <div class="pure-control-group">
                            <label for="h">Medicine Name</label>
                            <input name="h" type="text">
                        </div>
						
						 <div class="pure-control-group">
                            <label for="i">Visiting Date</label>
                            <input name="i" type="text">
                        </div>
						
						<div class="pure-control-group">
                            <label for="j">Visiting Time</label>
                            <input name="j" type="time">
                        </div>
						

                      

                        <div class="pure-controls">
                           
                            <button type="submit" class="pure-button pure-button-primary">Add</button>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div>
    </section>
</body>






</html>





