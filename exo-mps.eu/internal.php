<?php
require_once("html.php");
html::header("Planetary Dynamics 2019 - Participants");
$username = "dynamics2019"; //Change to whatever you want your username to be
$password = "2019dynamics2019"; //Change to whatever you want your password to be
 
if(isset($_POST['submit'])){
//         if($_POST['username'] == $username && $_POST['password'] == $password){                  
// Username: <input type="text" name="username" /><br />
        if($_POST['password'] == $password){
        //EXECUTE YOUR CODE HERE
?> 

<p>
 <a href="Abstract_book.pdf" style="color:b" target="_blank"> Abstract book</a>
</p> 
<p>
 <a href="Dynamics_Intro.pdf" style="color:b" target="_blank"> Intro_slides</a>
</p> 
<p>
 <a href="internal_program.php" style="color:b" target="_blank"> Internal program (with links to presentations)</a>
</p> 


<?php 
        } else {
        echo "sorry the password was incorrect. Try again.";
        }
} else { //IF THE FORM WAS NOT SUBMITTED
//SHOW FORM
        ?><form method="post">
                Password: <input type="password" name="password" />
                <input type='submit' name='submit' />
        </form><?php
}
 
 
?>
 

<?php
html::footer();
?>


