<?php
 session_start();

 // cek apakau user sudah login
 if($_SESSION['username']){
  
 }else{
     header('Location: index.html');
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="">
    <meta name="author" content="">
    <link type="text/css" rel="stylesheet" href="style.css"/>
    <script src="jquery.min.js"></script>

    <title>visyikha</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->


    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">

</head>

    <style>
    b{
        font-family: "Trebuchet MS", Helvetica, sans-serif;
    }
	a{
		color:#ffffff;
	}
	.bg-1 {
		background-image: url(img/bg1.png);
	}
	.bg-2 {
		background-image: url(img/bg5.png);
	}
        .bg-3{
            background-image: url(img/bg.png);
        }
    </style>

    <?php include_once('functions_user.php'); ?>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">visyikha</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#booklist">Booking List</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#checkdate">Check Date</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#form">Form Registration</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="logout.php"><i class="glyphicon glyphicon-off"></i>Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Peminjaman Ruangan</div>
                <div class="intro-heading">Foodcourt YARSI</div>
                <a href="#form" class="page-scroll btn btn-xl">Registration</a>
            </div>
        </div>
    </header>

    <!-- Booking List Section -->
    <section id="booklist" class="bg-1" style="background-color:#808080" >
		<div class="container">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading">Booking List</h2>
				<h3 class="section-subheading text-muted">Berikut adalah daftar peminjaman ruangan foodcourt</h3>
			</div>
			<div >
				<table class="table" style="background-color:lightgray">
					<thead>
						<tr style="background-color:white">
                            <th><b>No</b></th>
                            <th><b>Organization</b></th>
                            <th><b>Name of Activity</b></th>
                            <th><b>Date</b></th>
                            <th><b>Time</b></th>
                            <th><b>Condition</b></th>
						</tr>
					</thead>
					<tbody>
						<?php

							include "koneksi.php";
							$query_mysql = mysql_query("SELECT * FROM form")or die(mysql_error());
							$nomor = 1;
							while($data = mysql_fetch_array($query_mysql)){
						?>
						<tr>
							<td><?php echo $nomor++; ?></td>
							<td><?php echo $data['organization']; ?></td>
							<td><?php echo $data['name_act']; ?></td>
							<td><?php echo $data['date']; ?></td>
							<td><?php echo $data['time']; ?></td>
                            <td><?php echo $data['kondisi']; ?></td>

						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</section>

  <!-- Check Date Section -->
  <section id="checkdate" class="bg-3" style="background-color:white">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 text-center">
                  <h2 class="section-heading ">Check Date</h2><br><br>
              </div>
          </div>

          <div id="calendar_div">
          <?php echo getCalender(); ?>
        </div>

                      </div>
                  </form>
              </div>
          </div>
      </div>
  </section>

	<!-- Form Registration Section -->
    <section id="form" class="bg-2" style="background-color:#C0C0C0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Form Registration Foodcourt YARSI</h2>
                </div>
                <div class="col-lg-offset-4">
                    <form action="home.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
								<div class="form-group">
                                    <b>Organization </b> <input type="text" class="form-control" name="organization" required data-validation-required-message="Please enter your Organization">
                                    <p class="help-block text-danger"></p>
                                </div>
								<div class="form-group">
                                    <b>Name of Activity </b> <input type="text" class="form-control" name="name_act" required data-validation-required-message="Please enter name of activity.">
                                    <p class="help-block text-danger"></p>
                                </div>
								<div class="form-group">
                                    <b>Type of Activity </b> <input type="text" class="form-control" name="type_act" required data-validation-required-message="Please enter type of activity.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <b>Number of Participants </b> <input type="number" class="form-control" name="participant" required data-validation-required-message="Please enter number of participant.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <b>Date </b> <input type="date" class="form-control" placeholder="dd/mm/yyyy" name="date" required data-validation-required-message="Please enter the date.">
                                    <p class="help-block text-danger"></p>
                                </div>
									<div class="form-group">
                                        <b>Time </b> <input type="time" class="form-control" id="time" required data-validation-required-message="Please enter the time.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-6 center-block">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl center-block center-block">SUBMIT</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

	<!-- About Section -->
    <section id="about" style="background-color:#D3D3D3">
		<div class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Peminjaman Foodcourt YARSI</h2>


    <div id="band" class="text-center">
        <p  style="text-align: justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lending system foodcourt room is a system that we make to facilitate both of students, teachers or the rectorate in lending process. The existing lending process is quite complicated, then the system is designed according to user needs.</p>
            <br>
                <div class="row">
                    <div class="col-sm-4">
                        <p class="text-center"><strong><b>Deskhana Wati</b></strong></p>
                        <p><em>Design and Analysis</em></p>
                        <a href="#demo" data-toggle="collapse">
                            <img src="img/team/desk.PNG" class="img-circle person" alt="Random Name" width="255" height="255">
                        </a>
                        <div id="demo" class="collapse">
                            <p>Guitarist and Lead Vocalist</p>
                            <p>Loves long walks on the beach</p>
                            <p>Member since 1988</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <p class="text-center"><strong><b>Syihabuddin</b></strong></p>
                        <p class="text-center"><em>Leader and interviewer</em></p>
                        <a href="#demo2" data-toggle="collapse">
                            <img src="img/team/sihab.PNG" class="img-circle person" alt="Random Name" width="255" height="255">
                        </a>
                        <div id="demo2" class="collapse">
                            <p>Drummer</p>
                            <p>Loves drummin'</p>
                            <p>Member since 1988</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <p class="text-center"><strong><b>Vioni Wita Elya</b></strong></p>
                        <p><em>Programmer</em></p>
                        <a href="#demo3" data-toggle="collapse">
                            <img src="img/team/pio.PNG" class="img-circle person" alt="Random Name" width="255" height="255">
                        </a>
                        <div id="demo3" class="collapse">
                            <p>Bass player</p>
                            <p>Loves math</p>
                            <p>Member since 2005</p>
                        </div>
                    </div>
                </div>
        </div>



            </div>
        </div>
		</div>
    </section>


<div style="background-color:#eeeeee">
    <footer>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; visyikha 2017</span>
                </div>
            </div>
        </div>

    </footer>
	</div>
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <!--<script src="js/contact_me.js"></script>-->

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

	$organization = mysql_real_escape_string($_POST['organization']);
	$name_act = mysql_real_escape_string($_POST['name_act']);
	$type_act = mysql_real_escape_string($_POST['type_act']);
	$participant = mysql_real_escape_string($_POST['participant']);
	$date = mysql_real_escape_string($_POST['date']);
	$time = mysql_real_escape_string($_POST['time']);
    $bool = true;

	mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
	mysql_select_db("database") or die("Cannot connect to database"); //Connect to database
	$query = mysql_query("Select * from form"); //Query the users table
	while($row = mysql_fetch_array($query)) //display all rows from query
	{
		$table_users = $row['date']; // the first username row is passed on to $table_users, and so on until the query is finished
		if($date == $table_users) // checks if there are any matching fields
		{
			$bool = false; // sets bool to false
			Print '<script>alert("The date has been taken!");</script>'; //Prompts the user
			Print '<script>window.location.assign("home.php#form");</script>'; // redirects to register.php
		}
	}
	if($bool) // checks if bool is true
	{
		mysql_query("INSERT INTO form (organization, name_act, type_act, participant, date, time) VALUES ('$organization','$name_act','$type_act','$participant','$date','$time')"); //Inserts the value to table users
		Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
		Print '<script>window.location.assign("home.php");</script>'; // redirects to register.php
	}
}
?>
