<?php
    function js_elements_extractor($file_js, $all_lines, $the_only_class_return){
        $call_stack = [];
        $the_only_class_return_index_array = array_search($the_only_class_return, array_column($all_lines, 1));
        $call_stack = [$all_lines[$the_only_class_return_index_array]];
        $file_lines_array = file($file_js);

//---------- парковка / временный раздел -----------------------------------------------------------------------------------
        
        $curly_braces_indicator = 0;
        $call_stack_fill_toggle = true;

//---------- extractor -----------------------------------------------------------------------------------------------------

        function extractor('элемент', 'уровень вложенности', $call_stack, $file_lines_array) {

            //проверка на принадлежность текущего элемента к типу "класс"

            //извлечь методы

            //добавить методы в конец элемента

        };

//---------- eval() / временный раздел -------------------------------------------------------------------------------------

//---------- цикл для извлечения -------------------------------------------------------------------------------------------

        

//---------- регулярное выражение для извлечения / временный раздел --------------------------------------------------------

        // if(!preg_match("/class\s{1,}\S*\s{/i", $line, $found)){
        //     if($curly_braces_indicator==1) {
        //         if(preg_match("/.*{/i", $line, $found)){
        //             preg_match("/.*\(/i", $line, $found);
        //             $str_found = trim(implode('', $found));
        //             $strlen = strlen($str_found) - 1;
        //             $str_result = substr($str_found, 0, $strlen);
        //             if(preg_match("/get /i", $line, $found)){
        //                 echo 'get / ' . trim(substr($str_result,4)) . "<br>";
        //             } elseif(preg_match("/set /i", $line, $found)) {
        //                 echo 'set / ' . trim(substr($str_result,4)) . "<br>";
        //             } else {
        //                 echo $str_result . "<br>";
        //             };
        //         };
        //     }
        //     $curly_braces_indicator = $curly_braces_indicator + preg_match_all("/{/",$line) - preg_match_all("/}/",$line);
        // }

//---------- стек вызова / вывод списка всех вызванных функций -------------------------------------------------------------

        $call_stack[0][4] = ['constructor','draw','test123'];

        print_r($call_stack);

    };
?>