<?php

    $all_lines = [];
    $all_lines_element_counter = -1;
    $all_lines_element__method_counter = -1;
    $number_of_line = 0;
    $file = fopen("../js/js-files-examples/class-chart.js", "r"); 

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    $curly_braces_indicator = 0;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    while(!feof($file)) {
        $number_of_line++;
        $line = fgets($file);
        if(preg_match("/class\s{1,}\S*\s{/i", $line, $found)){
            $dzianis1 = strlen($found[0]) - 8;
            $result = substr($found[0],6, $dzianis1);
            // array_push($all_lines, $result);//удалить в конце разработки 
            $all_lines_element_counter++;
            $all_lines[$all_lines_element_counter] = $result;
            $curly_braces_indicator++;
        }
        elseif(preg_match("/class\s*\S*\s*extends\s/i", $line, $found)){
            $dzianis1 = strlen($found[0]) - 15;
            $result = substr($found[0],6, $dzianis1);
            // array_push($all_lines, $result); // удалить в конце разработки
            $all_lines_element_counter++;
            $all_lines[$all_lines_element_counter] = $result;
            $curly_braces_indicator++;
            
        }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        // if(){}
        // elseIf{}

        if(!preg_match("/class\s{1,}\S*\s{/i", $line, $found)){
            if($curly_braces_indicator==1) {
                if(preg_match("/.*{/i", $line, $found)){


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

                    preg_match("/.*\(/i", $line, $found);
                    $str_found = trim(implode('', $found));
                    $strlen = strlen($str_found) - 1;
                    $str_result = substr($str_found, 0, $strlen);

                    // добавление методов в главный массив / удалить данный комментарий

                    if(preg_match("/get /i", $line, $found)){
                        echo 'get / ' . trim(substr($str_result,4)) . "<br>";
                    } elseif(preg_match("/set /i", $line, $found)) {
                        echo 'set / ' . trim(substr($str_result,4)) . "<br>";
                    } else {
                        echo $str_result . "<br>";
                    };

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

                    // array_push($all_lines, mb_substr(implode($found),0,-2)); 
                    // echo trim(mb_substr(implode($found),0,-2));
                };
            }
            $curly_braces_indicator = $curly_braces_indicator + preg_match_all("/{/",$line) - preg_match_all("/}/",$line);
        }

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

    // foreach($results['data'] as $result) {
    //     echo $result['type'], '<br>';
    // }    
    
    // $all_lines2 = [1,2,3];
    // $all_lines1 = ['Chart', $all_lines2];   

    // echo '----------------------------------------------------------------------------------------------------';

    // echo '<br>';

    // print_r($all_lines);

    // print_r($all_lines1);


?>