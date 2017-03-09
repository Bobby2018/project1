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
						<br><br>
						Username:
						
						<br><br><br>
						
						Password:
                        
                        </div>	
                </div>
		</div>
		</div>
<?php
include 'footer.php';
?>

	</body>
</html>
