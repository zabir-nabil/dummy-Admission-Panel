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
  <li class="pli"><a href="register.php">Register</a></li>
  <li class="pli"><a href="contact.php">Contact</a></li>
  <li class="pli"><a href="#">Data Check</a></li>
</ul>
</div> 
      <form action="data_db.php" method="post">
      
        <h1>Login to System</h1>
        
        
 
		      <label for="name">Board:</label>
          <input type="text" id="name" name="board">
          
             <label for="name">H.S.C Roll no:</label>
          <input type="text" id="name" name="hsc_roll">
          
          
        <button id="regb" type="submit">User info check</button>
      </form>
      
    </body>
	
	<footer>
	&copy; Developed by Monirul Islam.
	</footer>
	
</html>