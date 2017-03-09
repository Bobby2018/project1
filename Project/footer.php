<?php
session_start();
?>


<div class="footer">
        <p> User <?php echo $_SESSION['userName'] ?>
    
        logged in at <?php echo  $_SESSION['startTime'] ?></p>
	<p> This site is part of a CSU <a href="https://www.cs.colostate.edu/~ct310/yr2017sp/">CT 310</a> Course Project.</p>
	

