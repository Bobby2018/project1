<?php
$loginPage = TRUE;
include 'header.php';
include 'nav.php';

session_start();

?>
	<body>
		
	<!-- create three coulumn with lg and md size-->
		
		<div class="container-fluid">
			<div class="row visible-on">
                            <div class="col-md-4">
                                <img src="tumeric2.jpg" class="img" alt="tumeric" width="250" height="200"></img>
                                <img src="kohlrabi.jpg" class="img" alt="kohlrabi" width="250" height="200"></img>
                                <img src="cilantro.jpg" class="img" alt="cilantro" width="250" height="200"></img>
                                <p> Images from <a href=https://draxe.com/cilantro-benefits/>draxe.com</a> , <a href=http://www.simplyrecipes.com/kohlrabi/>simplyrecipes</a> , and <a href=https://d2v4vjmuxdiocn.cloudfront.net/wp-content/uploads/Curmin-image.jpg>cloudfront.net</a> </p>
                            </div>
            
					
	<!-- Add Main Content here -->
                <div class="col-lg-5">
                        <div class="Title">
                        <h1>Log In</h1> 
                            <h4>Welcome Users.
                            </h4> 
                        </div>
                        <div class="maincontent">
						<?php  
						$jpass = password_hash("1234", PASSWORD_DEFAULT);
						$bpass = password_hash("4321", PASSWORD_DEFAULT);
						$ctpass = password_hash("IFY_hortus", PASSWORD_DEFAULT);
						?>
						<?php
						$msg = '';
						if(isset($_POST['submit'])){
							if($_POST['username'] == 'jack' && password_verify($_POST['pass'], $jpass)){
								$_SESSION['valid'] = true;
								$_SESSION['timeout'] = time();
								$_SESSION['username'] = "jack";
								echo "logged in";
							} 
							if($_POST['username'] == 'bobby' && password_verify($_POST['pass'], $bpass)){
								$_SESSION['valid'] = true;
								$_SESSION['timeout'] = time();
								$_SESSION['username'] = "bobby";
								echo "logged in";
							} 
							if($_POST['username'] == 'ct310' && password_verify($_POST['pass'], $ctpass)){
								$_SESSION['valid'] = true;
								$_SESSION['timeout'] = time();
								$_SESSION['username'] = "ct310";
								echo "logged in";
							} 
						} else {
							echo "Please Log in";
						}
						?>
						<br><br>
						<div class="loginFormat">
					
						<form action="" method="post">
							<p>User Name:</p>
							<select name = "username">
								<option value="jack">Jack</option>
								<option value="bobby">Bobby</option>
								<option value="ct310">ct310</option>
							</select>
							<br><br>
							<p>Password:</p><input type="password" name="pass"><br><br>
							<input type="submit" value="Login" name = "submit">
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
