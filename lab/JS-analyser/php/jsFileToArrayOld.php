<?php

    $all_lines = [];
    $number_of_line = 0;
    $file = fopen("../js/js-files-examples/chart.js", "r"); 
    while(!feof($file)) {
        $number_of_line++;
        $line = fgets($file);
        if(preg_match("/class\s{1,}\S*\s{/i", $line, $found)){
            $dzianis1 = strlen($found[0]) - 8;
            $result = substr($found[0],6, $dzianis1);
            array_push($all_lines, $result); 
        }
        elseif(preg_match("/class\s*\S*\s*extends\s/i", $line, $found)){
            $dzianis1 = strlen($found[0]) - 15;
            $result = substr($found[0],6, $dzianis1);
            array_push($all_lines, $result); 
        }
    }
    fclose($file);
    $js_array = json_encode($all_lines);
    echo "const javascript_array = ". $js_array . ";\n";

?>