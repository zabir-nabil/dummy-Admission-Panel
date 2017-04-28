<!DOCTYPE html>
  <html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admit Card System</title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
 <div id="top">
 <span id="logo"><b>Admit Card System</b></span>
 </div>
  <div id="hnav">
      <ul id="pul">
  <li class="pli"><a href="home.php">Home</a></li>
  <li class="pli"><a href="notice.php">Notice</a></li>
  <li class="pli"><a href="#">Register</a></li>
  <li class="pli"><a href="contact.php">Contact</a></li>
  <li class="pli"><a href="data_check.php">Data Check</a></li>
</ul>
</div> 
      <form action="action_msg.php" method="post">
      
        <h1>Give your information</h1>
        
        <fieldset>
          <legend><span class="number"></span>Primary Information</legend>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name">
          
    <label for="name">College:</label>
          <input type="text" id="name" name="college">
          
		      <label for="name">Board:</label>
          <input type="text" id="name" name="board">
          
             
          </fieldset>
        
        <fieldset>
          <legend><span class="number"></span>Admission</legend>
		            <label for="univ">Registration number:</label>
          <input type="text" id="univ" name="reg_num">
          <label for="univ">Roll no:</label>
          <input type="text" id="univ" name="roll_num">
		  <label for="univ">H.S.C. GPA:</label>
          <input type="text" id="univ" name="hsc_cg">
            <label for="univ">S.S.C. GPA:</label>
          <input type="text" id="univ" name="ssc_cg">
        </fieldset>
        <fieldset>
        
        
        </fieldset>
        <button id="regb" type="submit" onclick="location.href='profile.html'">Generate Admit Card</button>
      </form>
      
    </body>
	
	<footer>
	&copy; Developed by Monirul Islam.
	</footer>
	
</html>