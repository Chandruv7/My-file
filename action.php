<!DOCTYPE html>
<html>
<head>
<title>Jcs Consulting</title>
<link rel="stylesheet" href="css/styles.css"/>

</head>
<body>

    <header>
            <h1><a href="www.jcs.com">Jcs consulting</a></h1>
            
          <nav>
                    <a href="/about">   ABOUT  </a>
                    <a href="/contact">   CONTACT  </a>
                    <a href="/services"> SERVICES    </a>
                    <a href="/location">  LOCATION  </a>
            </nav>
            
      </header>
    

<section class="info-section">
<div class="info-block">
  
Thank you <?php print $_POST["name"];?>
WE received your email <?php print $_POST["email"];?>
Your <?php print $_POST["subject"];?> with <?php print $_POST["message"];?> will be stored with us.
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jcs";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$first_name = "'" .$_POST["name"] ."'";
$email = "'" .$_POST["email"] ."'";
$subject = "'" .$_POST["subject"] ."'"; 
$message = "'" .$_POST["message"] ."'";
//$sql = "INSERT INTO contacts (name, email, subject, message) VALUES ($_POST['name'], $_POST['email'],$_POST['subject'], $_POST['message'])";
$sql = "INSERT INTO contacts (name, email, subject, message) VALUES ($first_name,$email,$subject,$message)";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</div>


</section>



   



</body>
</html>