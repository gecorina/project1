    <?php
        echo"<div class='sah_container'>\n";
        for($i = 0; $i < 8; $i++){
            for($j = 0; $j <8; $j++){
                if(($j+$i)%2 == 0){
                    echo "<div class='sah_cell white'></div>\n";
                }else{
                    echo "<div class='sah_cell black'></div>\n";
                }
            }
        }
        echo"</div>";
    ?>
