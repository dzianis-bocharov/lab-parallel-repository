<?php
    function find_the_only_class_return($file2) {
        $all_lines = [];
        $curly_braces_indicator = 0;
        $file = fopen($file2, "r"); 
        $element_read_start = false;
        $the_only_class_return = [];
        while(!feof($file)) {
            $line = fgets($file);
            $curly_braces_indicator = $curly_braces_indicator + preg_match_all("/{/",$line) - preg_match_all("/}/",$line);
            if($curly_braces_indicator == 1 && preg_match("/return\s+\w+;/i", $line, $found)){
                $strlen = strlen($found[0]) - 7;
                $result = trim(substr($found[0],6,$strlen));
                array_push($the_only_class_return, $result);
            }
        };
        if (count($the_only_class_return)==1) {
             return $the_only_class_return[0];
        }
        else {
             return 'Error!';
        };
    };
?>