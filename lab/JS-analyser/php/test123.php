<?php

            // $curly_braces_indicator++;

    $all_lines = [];
    $curly_braces_indicator = 0;
    $number_of_line = 0;
    $number_of_element = -1;
    $file = fopen("../js/chart.js", "r"); 
    $element_read_start = false;
    while(!feof($file)) {
        $number_of_line++;
        // echo $number_of_line . '<br>';
        $line = fgets($file);
//----------индикатор фигурных скобок-----------------------------------------------------------------------------------

    // if(!preg_match("/class\s{1,}\S*\s{/i", $line, $found)){
    //     if($curly_braces_indicator>1) {
    //         if(preg_match("/.*{/i", $line, $found)){
    //             // array_push($all_lines, mb_substr(implode($found),0,-2)); 
    //             // echo trim(mb_substr(implode($found),0,-2));
    //             // echo "<br>";
    //             $curly_braces_indicator = $curly_braces_indicator + preg_match_all("/{/",$line) - preg_match_all("/}/",$line);

    //         };
    //     }
        // echo $line . '<br>';
    // }


    // echo $curly_braces_indicator . '<br>';

        $curly_braces_indicator = $curly_braces_indicator + preg_match_all("/{/",$line) - preg_match_all("/}/",$line);

    // echo $curly_braces_indicator . "<br>";
    
    // echo $line . "<br>";
    // echo $line . "<br>";

//----------class------------------------------------------------------------------------------------------------------


        if(preg_match("/class\s{1,}\S*\s{/i", $line, $found)){
            $dzianis1 = strlen($found[0]) - 8;
            $result = substr($found[0],6, $dzianis1);
            array_push($all_lines, ['class' , $result, $number_of_line]); 
            // array_push($all_lines[3], '13222'); 
            // $curly_braces_indicator++;
            $number_of_element++;
            // $all_lines
            $element_read_start = true;
        }
        elseif(preg_match("/class\s*\S*\s*extends\s/i", $line, $found)){
            $len1 = strlen($found[0]) - 15;
            $result = substr($found[0],6, $len1);
            array_push($all_lines, ['class' , $result, $number_of_line]); 
            // array_push($all_lines[3], '13222'); 
            $number_of_element++;

            // $curly_braces_indicator++;
            $element_read_start = true;
        }

//----------function----------------------------------------------------------------------------------------------------
      
        if(preg_match("/^function\s+\S+\(/", trim($line), $found)){
            $result = mb_substr(implode($found),9,-1);
            array_push($all_lines, ['function', $result, $number_of_line]); 
            $number_of_element++;
            $element_read_start = true;
        }

//----------var---------------------------------------------------------------------------------------------------------

            if(preg_match("/^var\s+\S+\s+\=/", trim($line), $found)){
                if($curly_braces_indicator - preg_match_all("/{/",$line) + preg_match_all("/}/",$line) == 1) {
                    $len1 = strlen($found[0]) - 6;
                    $result = mb_substr(implode($found),4,$len1);
                    array_push($all_lines, ['var', $result, $number_of_line]); 
                    $number_of_element++;
                    $element_read_start = true;
                }
            }

//----------let---------------------------------------------------------------------------------------------------------

            // if(preg_match("/^function\s+\S+\(/", trim($line), $found)){
                if(preg_match("/^let\s+\S+\s+\=/", trim($line), $found)){
                    if($curly_braces_indicator - preg_match_all("/{/",$line) + preg_match_all("/}/",$line) == 1) {
                        $len1 = strlen($found[0]) - 6;
                        $result = mb_substr(implode($found),4,$len1);
                        array_push($all_lines, ['let', $result, $number_of_line]); 
                        $number_of_element++;
                        $element_read_start = true;
                    }
                }
                elseif(preg_match("/^let\s+\S+\;/", trim($line), $found)){
                    if($curly_braces_indicator - preg_match_all("/{/",$line) + preg_match_all("/}/",$line) == 1) {
                        $len1 = strlen($found[0]) - 5;
                        $result = mb_substr(implode($found),4,$len1);
                        array_push($all_lines, ['let', $result, $number_of_line]); 
                        $number_of_element++;
                        $element_read_start = true;
                    }
                }

    

//----------const-------------------------------------------------------------------------------------------------------

                if(preg_match("/^const\s+\S+\s+\=/", trim($line), $found)){
                    if($curly_braces_indicator - preg_match_all("/{/",$line) + preg_match_all("/}/",$line) == 1) {
                        $len1 = strlen($found[0]) - 6;
                        $result = mb_substr(implode($found),5,$len1);
                        array_push($all_lines, ['const', $result, $number_of_line]); 
                        $number_of_element++;
                        $element_read_start = true;
                    }
                }

//----------------------------------------------------------------------------------------------------------------------
        
        // echo $number_of_line . '<br>' . $curly_braces_indicator . "<br>" . $line . '<br><br>';

//----------------------------------------------------------------------------------------------------------------------

            //    if($element_read_start) {
            //         $all_lines[3] = '13222';
            //    };
            //echo $number_of_element . '<br>';
            // $all_lines[$number_of_element] = '13222';
            
            // if($curly_braces_indicator==1){
            //     echo $number_of_element . '<br>';
            // }

            //echo $curly_braces_indicator . '<br>';
            //echo $line . '<br>';

            if($curly_braces_indicator==1) {
                if($element_read_start==true){
                    // echo 'test123' . '<br>';
                    $all_lines[$number_of_element][3] = $number_of_line;
                    $element_read_start = false;

                }
            }

    }

    // echo $element_read_start;

    fclose($file);
    // $js_array = json_encode($all_lines);
    // echo "const javascript_array = ". $js_array . ";\n";

//----------------------------------------------------------------------------------------------------------------------

        // echo print_r($all_lines);
        // echo '<br>';
        // echo '------------------------------------------------------------------------------------------------------------------------------------------------------' . '<br>';
        // echo '<br>';
        // echo var_dump($all_lines);


//----------здесь все включать------------------------------------------------------------------------------------------
//----------количество элементов----------------------------------------------------------------------------------------

        echo 'chart.js' . '<br>';
        echo '------------------------------------------------------------------------------------------------------------------------------------------------------' . '<br>';
        echo $number_of_line++ . ' строк' . '<br>';
        echo '------------------------------------------------------------------------------------------------------------------------------------------------------' . '<br>';
        


        $all_lines_filter_class = array_filter($all_lines, function($item){return $item[0] == 'class';});
        $all_lines_filter_function = array_filter($all_lines, function($item){return $item[0] == 'function';});
        $all_lines_filter_var = array_filter($all_lines, function($item){return $item[0] == 'var';});
        $all_lines_filter_let = array_filter($all_lines, function($item){return $item[0] == 'let';});
        $all_lines_filter_const = array_filter($all_lines, function($item){return $item[0] == 'const';});


        // echo count($all_lines_filter_class) . '<br>';

        // $all_lines_filter_function
        // $all_lines_filter_var
        // $all_lines_filter_let
        // $all_lines_filter_const



        echo 'class - ' . count($all_lines_filter_class) . ' шт.' . '<br>';
        echo 'function - ' . count($all_lines_filter_function) . ' шт.' . '<br>';
        echo 'var - ' . count($all_lines_filter_var) . ' шт.' . '<br>';
        echo 'let - ' . count($all_lines_filter_let) . ' шт.' . '<br>';
        echo 'const - ' . count($all_lines_filter_const) . ' шт.' . '<br>';
        // echo '------------------------------------------------------------------------------------------------------------------------------------------------------' . '<br>';
        // echo '...' . '<br>';

//----------вывод на экран списка элементов---------------------------------------------------------------------------

    echo '<br>'.'----------class--------------------------------------------------------------------------------------------------------------------------------------' . '<br>'.'<br>';
   
    foreach ($all_lines as $value) {
        if($value[0]=='class') {
            echo $value[0] . ' / ' . $value[1] . ' / ' . 'lines #' . $value[2] . ' - #' . $value[3] . '<br>';
        }
    }

    echo '<br>'.'----------function----------' . '<br>'.'<br>';


    foreach ($all_lines as $value) {
        if($value[0]=='function') {
            echo $value[0] . ' / ' . $value[1] . ' / ' . 'lines #' . $value[2] . ' - #' . $value[3] . '<br>';
        }
    }

    echo '<br>'.'----------var----------' . '<br>'.'<br>';

    foreach ($all_lines as $value) {
        if($value[0]=='var') {
            echo $value[0] . ' / ' . $value[1] . ' / ' . 'lines #' . $value[2] . ' - #' . $value[3] . '<br>';
        }
    }

    echo '<br>'.'----------let----------' . '<br>'.'<br>';

    foreach ($all_lines as $value) {
        if($value[0]=='let') {
            echo $value[0] . ' / ' . $value[1] . ' / ' . 'lines #' . $value[2] . ' - #' . $value[3] . '<br>';
        }
    }

    echo '<br>'.'----------const----------' . '<br>'.'<br>';

    foreach ($all_lines as $value) {
        if($value[0]=='const') {
            echo $value[0] . ' / ' . $value[1] . ' / ' . 'lines #' . $value[2] . ' - #' . $value[3] . '<br>';
        }
    }

// // удалить после завершения разработки
// //  echo '------------------------------------------------------------------------------------------------------------------------------------------------------' . '<br>';
// //         echo '<br>';
// //         // echo var_dump($all_lines);
// //         $array_test = [[1,2,3],[4,5,6],[7,8,9]]; 
// //         // array_push();
// //         $array_test[1][3] = 777;
// //         echo var_dump($array_test);

//         echo '<br>';

// echo var_dump($all_lines);

?>