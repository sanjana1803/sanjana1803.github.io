
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Car Parking</title>
<link rel="shortcut icon" href="../favicon.ico"> 
<link rel="stylesheet" type="text/css" href="css/mystyle.css">
</head>

<body>
<section class="container">
<header>
<section class="logo">
<p><center>MULTIPLEX ONLINE PARKING RESERVATION SYSTEM</center></p>
</section>
    <nav>
      <ul class="nav">
        <li><a href="index.php" class="icon home"><span>Home</span></a></li>
        <li class="dropdown">
          <a>Our Services &amp; Personnel</a>
          <ul>
            <li><a href="../online-booking.php">Online Booking</a></li>
            <li><a href="../payment-methods.php">Payment Methods</a></li>
            <li><a href="../parking-personnel.php">Park Attendants</a></li>
			<li><a href="../security.php">Security</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a>Parking Zones</a>
          <ul class="large">
            <li><a href="region-1.php">JINJA ROAD - Cars Only</a></li>
            <li><a href="region-2.php">WANDEGEYA - Cars Only</a></li>
            <li><a href="region-3.php">6TH STREET INDUSTRIAL AREA -  Cars and Lorries</a></li>
            <li><a href="region-4.php">7TH STREET - Lorries Only</a></li>
			<li><a href="region-5.php">NAKUMART - Cars Only</a></li>
			<li><a href="region-6.php">ARUA PARK  - PSV Only</a></li>
          </ul>
        </li>
		 
		<?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
   if( isset( $_SESSION['email'] ) )
   {
   echo  "<li><a href=\"your-car.php\">Reserve</a></li>";
   }
   else
   {
    echo "<li><a href=\"../index.php\">Client Panel</a></li>";
   }
    ?>
     <li><a href=\"your-car.php\">Contact</a></li> 	
       
      </ul>
    </nav>
	<?php
	if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
   if( isset( $_SESSION['email'] ) )
      {
	   $name = $_SESSION["name"];
   echo "<p class=\"LogOut\">". $name. " "."<a href=\"process-log-out.php\">Log Out</a></p>";
   }
    
?>
	

  </header>
</section>
</body>

</html>