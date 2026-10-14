<?php
    function get_shortest($strings) {
        $shortest_string = $strings[0];
        for ($i=1; $i < count($strings); $i++){
            if (strlen($strings[$i]) < strlen($shortest_string)) {
                $shortest_string = $strings[$i];
            }
        }
        return $shortest_string;
    }
?>