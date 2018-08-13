# Demo CSS

 This css document will assign a background color to every page element 
 based on its parent/child depth.  also sibling tags will be given either 
 a grey border if they are odd and a red border if they are even.
 
 To enable the css, put the .demo-css class in your <body> tag


 Paste this code into you page to render a color guide for each level
 The guide will be hidden if <body> doen not contain the .demo-css class.	



/*
 
    <?php

        for($i = 1; $i <= 27; $i++){
           echo "<div style='display:none' class='demo'>$i&nbsp;";
        }
        for($i = 1; $i < 27; $i++){
           echo "</div>";
        }

    ?>
      
*/