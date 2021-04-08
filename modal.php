<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">
	
</head>
<body>

<!-- Modal content-->
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4 class="modal-title">Edit Data</h4>
												</div>
												<div class="modal-body">
													<form  action="aksi_edit.php" method="GET">
														<div class="row">
															<div class="col-md-6 form-group">
																<td>
																	<b>Username </b> <input type="text" value = "<?php echo $data['username']; ?>" class="form-control" name="us" required data-validation-required-message="Please enter username">
																	<p class="help-block text-danger"></p>
																</td>
																<td>
																	<b>NPM </b> <input type="text" class="form-control" value = "<?php echo $data['npm']; ?>" name="np" required data-validation-required-message="Please enter npm.">
																	<p class="help-block text-danger"></p>
																</td>
																<td>	
																	<b>Name </b> <input type="text" class="form-control" value = "<?php echo $data['name']; ?>" name="na" required data-validation-required-message="Please enter ral name.">
																	<p class="help-block text-danger"></p>
																</td>
																<td>
																	<b>Fakulty / Prodi </b> <input type="text" class="form-control" value = "<?php echo $data['fakultas']; ?>" name="fa" required data-validation-required-message="Please enter faculty.">
																	<p class="help-block text-danger"></p>
																</td>
																<td>	
																	<b>Phone Number </b> <input type="text" class="form-control" value = "<?php echo $data['phone']; ?>" name="ph" required data-validation-required-message="Please enter the date.">
																	<p class="help-block text-danger"></p>
																</td>
																<td>	
																	<b>E-mail Address </b> <input type="text" class="form-control" value = "<?php echo $data['email']; ?>" name="em" required data-validation-required-message="Please enter email.">
																	<p class="help-block text-danger"></p>
																</td>
																<td>	
																	<b>Password </b> <input type="text" class="form-control" value = "<?php echo $data['password']; ?>" name="pa" required data-validation-required-message="Please enter the date.">
																	<p class="help-block text-danger"></p>
																</td>
																<td>
																	<div class="clearfix"></div>
																	<div class="col-md-6 center-block">
																		<div id="success"></div>
																		<input type = "hidden" name = "username" value = "<?php echo $data['username']; ?>">
																		<input type = "submit" name = "tombol" value = "Edit" class = "edit" 
																			onclick="return tanya("<?php echo $data['username']; ?>")">
																	</div>
																</td>
															</div>
														</div>
													</form>
												</div>
											</div>
											</body>