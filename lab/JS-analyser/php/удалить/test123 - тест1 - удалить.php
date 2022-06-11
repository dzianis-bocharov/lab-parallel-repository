<?php

    $all_lines = [];
    $number_of_line = 0;
    $file = fopen("../js/chart.js", "r"); 


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    $begin_curly_brace = false;

    $curly_braces_indicator = 0; // понадобится для составления списка методов - удалить комментарий в конце разработки
    
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// начало чтения файла

    while(!feof($file)) {
        $number_of_line++;
        $line = fgets($file);

// составление списка классов

        if(preg_match("/class\s{1,}\S*\s{/i", $line, $found)){
            $dzianis1 = strlen($found[0]) - 8;
            $result = substr($found[0],6, $dzianis1);
            array_push($all_lines, $result); 
            $begin_curly_brace = 'true';
            // echo $result . ' / class' . '<br>'; // удалить в конце разработки
        }
        // elseif(preg_match("/class\s*\S*\s*extends\s/i", $line, $found)){
        //     $dzianis1 = strlen($found[0]) - 15;
        //     $result = substr($found[0],6, $dzianis1);
        //     array_push($all_lines, $result); 
        //     $begin_curly_brace = 'true';
        //     echo $result . ' / class' . '<br>';//удалить в конце разработки
        // }

// составление списка функций

        if(preg_match("/^function.+\(/", trim($line), $found)){
            $result = mb_substr(implode($found),9,-1);

            if(preg_match("/_createResolver/", trim($line), $found)){ // костыль - починить в конце разработки

                $result = '_createResolver';
                
            }

            array_push($all_lines, $result); 
            $begin_curly_brace = 'true';
            //  echo $result . ' / function' . '<br>'; // удалить в конце разработки
        }

// var в глобальной области / список
        if(!$begin_curly_brace) {
            if(preg_match("/^const/", trim($line), $found)){
                // echo $line . '<br>';
            }
        }
// const в глобальной области / список

// var в глобальной области / список
    

        if($begin_curly_brace){
            $curly_braces_indicator = $curly_braces_indicator + preg_match_all("/{/",$line) - preg_match_all("/}/",$line);
            if($curly_braces_indicator==0) {
                $begin_curly_brace = false;
            }
        }
            
        // echo 'DZIANIS ///// ' . '<br>' . 'line#'. $number_of_line . '<br>' . $line . '<br>' . $curly_braces_indicator . '<br>';

        echo "line#" . $number_of_line . '<br>' . $line . '<br>' . $curly_braces_indicator . '<br>'. '<br>';

        // echo $begin_curly_brace . '<br>';


    }
    fclose($file);
    // $js_array = json_encode($all_lines); // включить в конце разработки
    // echo "const javascript_array = ". $js_array . ";\n"; // включить в конце разработки

?>