<?php
include "core/init.php";

?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--<link rel="stylesheet" type="text/css" href="normalize.css" />-->
    <link rel="stylesheet" type="text/css" href="stylez.css" />
    <link href='https://fonts.googleapis.com/css?family=Antic+Slab' rel='stylesheet' type='text/css'>
    <title>Vieraskirja_v3</title>
</head>
<body>
    <h1>vieraskirja</h1>
<div id="main">
    <div id="laatikko">
        <form id="lomake" method="post" action="includes/add_message.php">
            <div>
                <label for="nimi">Nimi</label>
                <input type="text" name="nimi" id="nimi" />
 
                <label for="viesti">Viesti</label>
                <textarea name="viesti" id="viesti" cols="30" rows="10"></textarea>
                        
                <input type="submit" id="laheta" value="Lähetä" />
            </div>
        </form>
    </div>
</div>
<div class="viestit">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>
<?php

?>
</div>
<script>
     var time = new Date().getTime();
     $(document.body).bind("mousemove keypress", function(e) {
         time = new Date().getTime();
     });

     function refresh() {
         if(new Date().getTime() - time >= 60000) 
             window.location.reload(true);
         else 
             setTimeout(refresh, 10000);
     }

     setTimeout(refresh, 10000);
</script>

</body>
</html>
