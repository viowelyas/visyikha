<?php
	session_start();
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);

	mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
	mysql_select_db("database") or die("Cannot connect to database"); //Connect to database
	$query = mysql_query("SELECT * from users WHERE username='$username'"); 
	$exists = mysql_num_rows($query); //Checks if username exists
	$table_users = "";
	$table_password = "";
	if($exists > 0) //IF there are no returning rows or no existing username
	{
		while($row = mysql_fetch_assoc($query)) //display all rows from query
		{
			$table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
			$table_password = $row['password']; // the first password row is passed on to $table_users, and so on until the query is finished
		}
		if(($username == $table_users) && ($password == $table_password)) // checks if there are any matching fields
		{
				if($password == $table_password)
				{
					if($password == "admin"){
						$_SESSION['username'] = $username; //set the username in a session. This serves as a global variable
						Print '<script>alert("Sign In Success!");</script>';
						header("location: home_admin.php"); // redirects the user to the authenticated home page						
					}
					else{
						$_SESSION['username'] = $username; //set the username in a session. This serves as a global variable
						Print '<script>alert("Sign In Success!");</script>';
						header("location: home.php"); // redirects the user to the authenticated home page
					}
					
				}
				
		}
		else
		{
			Print '<script>alert("Incorrect Password!");</script>'; //Prompts the user
			Print '<script>window.location.assign("index.html");</script>'; // redirects to login.php
		}
		
	}
	else
	{Print '<script>alert("Incorrect Username!");</script>'; //Prompts the user
		Print '<script>window.location.assign("index.html");</script>'; // redirects to login.php
		

	}
?>