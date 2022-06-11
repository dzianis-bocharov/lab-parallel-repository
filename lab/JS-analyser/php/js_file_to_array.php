<?php
    $all_lines = [];
    $curly_braces_indicator = 0;
    $number_of_line = 0;
    $number_of_element = -1;
    $file = fopen("../js/js-files-examples/chart.js", "r"); 
    $element_read_start = false;
    while(!feof($file)) {
        $number_of_line++;
        $line = fgets($file);
        $curly_braces_indicator = $curly_braces_indicator + preg_match_all("/{/",$line) - preg_match_all("/}/",$line);

//----------class------------------------------------------------------------------------------------------------------

        if(preg_match("/class\s{1,}\S*\s{/i", $line, $found)){
            $dzianis1 = strlen($found[0]) - 8;
            $result = substr($found[0],6, $dzianis1);
            array_push($all_lines, ['class' , $result, $number_of_line]); 
            $number_of_element++;
            $element_read_start = true;
        }
        elseif(preg_match("/class\s*\S*\s*extends\s/i", $line, $found)){
            $len1 = strlen($found[0]) - 15;
            $result = substr($found[0],6, $len1);
            array_push($all_lines, ['class' , $result, $number_of_line]); 
            $number_of_element++;
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

//----------номер последней строки для элемента--------------------------------------------------------------------------

            if($curly_braces_indicator==1) {
                if($element_read_start==true){
                    $all_lines[$number_of_element][3] = $number_of_line;
                    $element_read_start = false;
                }
            }

//-----------------------------------------------------------------------------------------------------------------------

    }
    fclose($file);
    echo "const call_stack_array = ". json_encode($all_lines) . ";\n";

?>