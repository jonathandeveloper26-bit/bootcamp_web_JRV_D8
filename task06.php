<?php
    function get_next_sequence(string $term): string {
        $result = "";
        $count = 1;
        $length = strlen($term);

        for ($i = 1; $i <= $length; $i++) {
            if ($i < $length && $term[$i] == $term[$i - 1]) {
                $count++;
            } else {
                $result .= $count . $term[$i - 1];
                $count = 1;
            }
        }
        return $result;
    }

    function sequence(int $n): string {
        $term = "1";
        for ($i = 1; $i <= $n; $i++) {
            echo $term . PHP_EOL;
            $term = get_next_sequence($term); 
        }
        return $term;
    }
?>