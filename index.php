<?php
include 'header.php';
?>
	<body>
	<!-- Create the collapsing navigation bar -->
		
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>       
						<span class="icon-bar"></span>      
						<span class="icon-bar"></span>                      
					</button>
					<a class="navbar-brand" href="./index.php">Home</a>
				</div>
				
			<div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="./aboutus.php" target="_blank" >About Us</a></li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Ingredients<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                           <li><a href="./kohlrabi.php" target="_blank" >Kohlrabi</a></li>
                                           <li><a href="./tumeric.php" target="_blank" >Tumeric</a></li>
                                           <li><a href="./cilantro.php" target="_blank" >Cilantro</a></li>
                                        </ul>
                                        </li>
                                    </ul>
                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a href="./login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                                    </ul>
                                    
  
			</div>
			</div>
		</nav>
		
	<!-- create three coulumn with lg and md size-->
		
		<div class="container-fluid">
			<div class="row visible-on">

					
					
					
					
					
					
					
	<!-- Add Main Content here -->
                <div class="col-lg-6">
                    <div class="Title">
                        <h1>Bobby and Jack's Ingredients</h1> 
                            <h4>Kohlrabi, Tumeric, and Cilantro!
                            </h4> 
                        </div>
                        <div class="mainconten"t>    
                        <p> Welcome message, and info</p>
                      
                    </div>
                </div>
				
				
				
				
				
				
			
					
	<!-- Add Image here -->				

			
			
			
			
			
			</div>
		</div>
<?php
include 'footer.php';
?>

	</body>
</html>
