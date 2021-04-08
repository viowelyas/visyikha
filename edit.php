<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>visyikha</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    

    <!-- Custom Fonts -->
    

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">
</head>
    <style>
        .bg-3{
            background-image: url(img/bg.png);
        }
    </style>

<body class="bg-3" style="background-color:#A9A9A9">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading"><br/>Form Editing Member<br/></h2>
            </div>
            <?php
                include 'koneksi.php';
                error_reporting(E_ALL ^ E_NOTICE);
                $username = $_GET['username'];
                $query_mysql = mysql_query("SELECT * FROM users where username = '$username'")or die(mysql_error());
                while($data = mysql_fetch_array($query_mysql)){
            ?>
            <div class="col-lg-offset-4">
                <form  action="aksi_edit.php" method="GET">
                    <div class="row"> <center>
                        <div class="col-md-6 form-group">
                            <b><br/><br/>Username </b> <input type="text" class="form-control" value="<?php echo $data['username']; ?>" name="username" required data-validation-required-message="Please enter username">
                            <p class="help-block text-danger"></p>
									
                            <b>NPM </b> <input type="text" class="form-control" value="<?php echo $data['npm']; ?>" name="npm" required data-validation-required-message="Please enter npm.">
                            <p class="help-block text-danger"></p>
									
                            <b>Name </b> <input type="text" class="form-control" value="<?php echo $data['name']; ?>" name="name" required data-validation-required-message="Please enter ral name.">
                            <p class="help-block text-danger"></p>
									
                            <b>Fakulty / Prodi </b> <input type="text" class="form-control" value="<?php echo $data['fakultas']; ?>" name="fakultas" required data-validation-required-message="Please enter faculty.">
                                <p class="help-block text-danger"></p>
									
                            <b>Phone Number </b> <input type="text" class="form-control" value="<?php echo $data['phone']; ?>" name="phone" required data-validation-required-message="Please enter the date.">
                            <p class="help-block text-danger"></p>
									
                            <b>E-mail Address </b> <input type="text" class="form-control" value="<?php echo $data['email']; ?>" name="email" required data-validation-required-message="Please enter email.">
                            <p class="help-block text-danger"></p>
									
                            <b>Password </b> <input type="text" class="form-control" value="<?php echo $data['password']; ?>" name="password" required data-validation-required-message="Please enter the date.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-6 center-block">
                            <div id="success"></div>
                            <input type = "hidden" name = "id" value = "<?php echo $data['username']; ?>">
                            <button type = "submit" name = "tomb" value = "Edit" class = "edit btn" 
                                onclick="return tanya("<?php echo $data['username']; ?>")">
                                <i class="glyphicon glyphicon-floppy-saved"></i>
                            </button>
                        </div></center>
                    </div>
                </form>
            </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>

