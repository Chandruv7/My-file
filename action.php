<!DOCTYPE html>
<html>
<head>
<title>Jcs Consulting</title>
<link rel="stylesheet" href="css/styles.css"/>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4p_NjszWJuBaaUc2Je03wPF3tPjb1_JA&callback=myMap">
    </script>
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
</div>

</section>



   



</body>
</html>