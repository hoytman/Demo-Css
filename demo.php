<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" type="text/css" href="HJ_DemoCss.css">

        <title>HJ_DemoCss</title>
        
        <style>

        </style>

    </head>
    <body class="demo-css">

       <h1>This is a demo of HJ_DemoCss</h1>

       <h3>
           This section displays the Demo found within the .css file
       </h3>
<?php
    
    for($i = 1; $i <= 27; $i++){
        echo "<div style='display:none' class='demo-line'>$i".PHP_EOL;
    }
    for($i = 1; $i <= 27; $i++){
        echo "</div>".PHP_EOL;
    }

?>
      
        <h3>
            A horizontal demo 
        </h3>
       
<?php

    for($i = 1; $i <= 27; $i++){
        echo "<div style='display:none' class='demo-horizontal'>$i".PHP_EOL;
    }
    for($i = 1; $i <= 27; $i++){
        echo "</div>".PHP_EOL;
    }

?>
      
        <h3>
            A vertical demo 
        </h3>
 
<?php

    for($i = 1; $i <= 27; $i++){
        echo "<div style='display:none' class='demo-vertical'>$i".PHP_EOL;
        for($j = 0; $j < 4; $j++){
            echo "<div class='demo-horizontal'>hello</div>".PHP_EOL;
        }
        echo "<br /><br />".PHP_EOL;
    }

    for($i = 1; $i <= 27; $i++){
        echo "</div>".PHP_EOL;
    }

?>

*/
       
   </body>
</html>