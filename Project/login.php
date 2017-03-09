<?php
$loginPage = TRUE;
include 'header.php';
include 'nav.php';

include 'control.php';
include 'support.php';

$users = setDefaultUsers();

if (isset ( $_POST ['full_name'] )) {
	$new = strip_tags($_POST ['full_name']);
	$epw = strip_tags($_POST ['entered']);
	$old = $_SESSION ['userName'];
	if ($new != $old) {
		if (password_verify($epw, userHashByName($users, $new))) {
			$_SESSION ['startTime'] = time ();
			$_SESSION ['userName'] = $new;
			header ( "Location: https://$host$uri/index.php" );
		}
	}
}
?>
	<body>
		
	<!-- create three coulumn with lg and md size-->
		
		<div class="container-fluid">
			<div class="row visible-on">
                            <div class="col-md-4">
                                <img src="tumeric2.jpg" class="img" alt="tumeric" width="250" height="200"></img>
                                <img src="kohlrabi.jpg" class="img" alt="kohlrabi" width="250" height="200"></img>
                                <img src="cilantro.jpg" class="img" alt="cilantro" width="250" height="200"></img>
                            </div>
            
					
	<!-- Add Main Content here -->
                <div class="col-lg-5">
                        <div class="Title">
                        <h1>Log In</h1> 
                            <h4>Welcome Users.
                            </h4> 
                        </div>
                        <div class="maincontent"> 
						<br><br>
						<div class="loginFormat">
						<form action="./index.php" method="post">
							<p>User Name:</p>
							<select name = "User Name">
								<option value="jack">Jack</option>
								<option value="bobby">Bobby</option>
								<option value="ct310">ct310</option>
							</select>
							<br><br>
							<p>Password:</p><input type="password" name="pass"><br><br>
							<input type="submit" value="Login">
						</form>
						<br><br><br>
                        </div>
                        </div>	
                </div>
		</div>
		</div>
<?php
include 'footer.php';
?>

	</body>
</html>
