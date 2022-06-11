<?php

    $all_lines = [];
    $number_of_line = 0;
    $file = fopen("../js/chart.js", "r"); 

//////////////////////////////////////////////////////////////////////////////////////////////////

    $curly_braces_indicator = 0;

//////////////////////////////////////////////////////////////////////////////////////////////////
// return function
    while(!feof($file)) {
        $number_of_line++;
        $line = fgets($file);
        // if(preg_match("/function\s{1,}\S*\s{/i", $line, $found)){
        // if(!(
        //     preg_match("/global, factory/", $line, $found)
        //     ||
        //     preg_match("/return function/", $line, $found)
        //     ||
        //     preg_match("/typeof define === 'function'/", $line, $found)
        //     ||
        //     preg_match("/'use strict'/", $line, $found)
        //     ))
        //     {

        if(preg_match("/^function.+\(/", trim($line), $found)){
                $result = mb_substr(implode($found),9,-1);
                array_push($all_lines, $result); 
                $curly_braces_indicator++;
                echo $result;
                echo '<br>';
        }
        
        // }
        // elseif(preg_match("/class\s*\S*\s*extends\s/i", $line, $found)){
        //     $dzianis1 = strlen($found[0]) - 15;
        //     $result = substr($found[0],6, $dzianis1);
        //     array_push($all_lines, $result); 
        //     $curly_braces_indicator++;
        // }

//////////////////////////////////////////////////////////////////////////////////////////////////

        // if(){}
        // elseIf{}

        // if(!preg_match("/class\s{1,}\S*\s{/i", $line, $found)){
        //     if($curly_braces_indicator==1) {
        //         if(preg_match("/.*{/i", $line, $found)){
        //             // array_push($all_lines, mb_substr(implode($found),0,-2)); 
        //             echo trim(mb_substr(implode($found),0,-2));
        //             echo "<br>";
        //         };
        //     }
        //     $curly_braces_indicator = $curly_braces_indicator + preg_match_all("/{/",$line) - preg_match_all("/}/",$line);
        // }

        // if(preg_match("/.*{/i", , $found)){
            // array_push($all_lines, $found); 
            // echo trim(mb_substr(implode($found),0,-2));
            // echo "<br>";
        // }


    
        // if(preg_match("/.*{/i", $line, $found)){
        //     array_push($all_lines, $found);
        //     $dzianis = strlen(implode($found));
        //     echo trim(substr((implode($found)),$dzianis));
        //     echo "<br>";
        // }

        // echo $line;
        // echo '<br>';
        // echo $curly_braces_indicator;
        // echo '<br>';

//////////////////////////////////////////////////////////////////////////////////////////////////

    }
    // echo ;
    fclose($file);
    // $js_array = json_encode($all_lines);
    // echo "const javascript_array = ". $js_array . ";\n";
    
    // $counter = count($all_lines);
    // $i=0;//

    // while($counter) {
    //     echo implode('',$all_lines[$counter-1]);
    //     echo "<br>";
    //     $counter--;
    // }

?>