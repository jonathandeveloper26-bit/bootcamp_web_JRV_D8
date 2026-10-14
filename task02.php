<?php
    function dog_bark(int $woof_nb) {
        for ($i = 1; $i <= $woof_nb; $i++){
            echo "woof";
            if ($i <$woof_nb) {
                echo " ";
            }
        }
        echo "\n";   
    }
?>