<?php
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
?>

<?php

$name = $_POST['name'];
$college = $_POST['college'];
$board = $_POST['board'];
$reg_num = $_POST['reg_num'];
$roll_num = $_POST['roll_num'];
$hsc_cg = $_POST['hsc_cg'];
$ssc_cg = $_POST['ssc_cg'];

phpAlert("Welcome [||$name||] to Admission Portal.");
echo '<h1 style="color:  #0d0961;padding:10px;">Registration Successful</h1>';
echo '<hr>';
echo '<p style="color:  #7771e5 ;border:1px solid   #7194e5 ;padding:10px;">';

echo "Your name is $name",".<br/>";

echo "Your College Name is $college",".<br/>";

echo "Your Board is $board",".<br/>";

echo "Your Registration number is $reg_num",".<br/>";

echo "Your Roll number is $roll_num",".<br/>";

echo "Your H.S.C. gpa is $hsc_cg",".<br/>";

echo "Your S.S.C. gpa is $ssc_cg",".<br/>";

echo "</p>";

echo '<p style="color: # #4b5b0e ;padding:20px;">Go to <a href="data_check.php">Login</a> page.</p>';

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






$sql2 = "INSERT INTO users
(reg_num,name,college,board,roll_num,hsc_cg,ssc_cg)
VALUES('$reg_num','$name','$college','$board','$roll_num','$hsc_cg','$ssc_cg')
";
//VALUES($nam,$exm,$brd,$py,$rslt)

if($cn->query($sql2))
{
	//echo "Inserted Value";
}
else
{
	phpAlert("Couldn't insert");
}



?>