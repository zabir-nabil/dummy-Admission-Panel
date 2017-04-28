<?php
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
?>

<?php
$board = $_POST['board'];

$hsc_roll = $_POST['hsc_roll'];


//DATABASE

//DATABASE insecure connection

$cn = new mysqli("127.0.0.1","root","","shojib_adm");

if($cn)
{
	//echo 'Database connected successfully!';
}
else
{
    phpAlert('Error happened in connecting');
}
//echo '<br><br>---------------------------';





if($cn->select_db("shojib_adm"))
{
	//echo "Selected DB<br/>";
}
else
{
	phpAlert("Couldn't select db.<br/>");
}


//echo "<br/>";



$user_get = mysqli_query($cn, "SELECT * FROM users WHERE roll_num='$hsc_roll'");

$user = mysqli_fetch_array($user_get);

//TEST
//echo $user['name']; // This will echo the Username

//echo $user['ssc_cg']; // This will echo their first name (I used this for a dashboard)

$name = $user['name'];
$college = $user['college'];
$board = $user['board'];
$reg_num = $user['reg_num'];
$roll_num = $user['roll_num'];
$hsc_cg = $user['hsc_cg'];
$ssc_cg = $user['ssc_cg'];

phpAlert("Welcome [||$name||] to Admission Portal.");
echo '<h1 style="color:   #cddc34;padding:10px;">Login Successful</h1>';
echo '<hr>';
echo '<p style="color:  #7771e5 ;border:1px solid  #f36113 ;padding:10px;">';

echo "Your name is $name",".<br/>";

echo "Your College Name is $college",".<br/>";

echo "Your Board is $board",".<br/>";

echo "Your Registration number is $reg_num",".<br/>";

echo "Your Roll number is $roll_num",".<br/>";

echo "Your H.S.C. gpa is $hsc_cg",".<br/>";

echo "Your S.S.C. gpa is $ssc_cg",".<br/>";

echo "</p>";

echo '<p style="color: # #4b5b0e ;padding:20px;">Go to <a href="home.php">Home</a> page.</p>';



$cn->close();



?>