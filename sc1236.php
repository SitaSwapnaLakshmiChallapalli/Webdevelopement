
<?php
// define variables and set to empty values
$fname = $Rooms = $email = $Gender = "";



if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['fname']) AND isset($_POST['Rooms']) AND isset($_POST['email']) AND isset($_POST['Gender'])) {
  $fname = $_POST["fname"];
  $Rooms =$_POST["Rooms"];
  $email =$_POST["email"];
  $Gender = $_POST["Gender"];
echo "<h2>Customer Details:</h2>";
echo "Your Name:",$fname;
echo "<br>";
echo "Your Email:",$Rooms;
echo "<br>";
echo "your rooms:",$email;
echo "<br>";
echo "your gender:",$Gender;
echo "<br>";
echo "<br>";

echo "<hr>";
echo "Previous Customer Records";

  $fy=fopen('sc1236.txt','a');
  $ft = fwrite($fy,"\n $fname \n $Rooms \n $email \n $Gender \n \n");
  if($ft)
  {
	echo "<pre>";
	echo file_get_contents("sc1236.txt");
	echo "</pre>";
  }
  fclose($fy);
  
  }
  
  else {
echo '<h2>Error</h2>
<hr>
<h4>You did not fill out the form completely <a href="sc1236.html"> Try again?</a></h4>';
}
	  
  
?>
