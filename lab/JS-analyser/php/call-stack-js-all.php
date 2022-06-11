<?php

    function call_stack_js_all($file_js){

        $call_stack = [];

//---------- помещаем все строки JS файла в массив ----------------------------------------------------------------------

        $file_lines_array = file($file_js);

//----------список элементов и их количество-----------------------------------------------------------------------------

        echo '----------------------------------------------------------------------------------------------------'.'<br>';

        require 'js-elements-all.php';
        $all_lines = js_elements_all($file_js, "r");

        function all_lines_filter_element_callback($elements_array, $type_of_element) {
            $all_lines_filter_items_array = [];
            $all_elements_quantity = count($elements_array);
            for ($x = 0; $x <= ($all_elements_quantity - 1); $x++) {
                if($elements_array[$x][0] == $type_of_element) {
                    array_push($all_lines_filter_items_array, $elements_array[$x]);
                };
            }
            return $all_lines_filter_items_array;
        };

        echo 'class - ' . count(all_lines_filter_element_callback($all_lines, 'class')) . ' шт.' . '<br>';
        echo 'function - ' . count(all_lines_filter_element_callback($all_lines, 'function')) . ' шт.' . '<br>';
        echo 'var - ' . count(all_lines_filter_element_callback($all_lines, 'var')) . ' шт.' . '<br>';
        echo 'let - ' . count(all_lines_filter_element_callback($all_lines, 'let')) . ' шт.' . '<br>';
        echo 'const - ' . count(all_lines_filter_element_callback($all_lines, 'const')) . ' шт.' . '<br>';

        echo '----------------------------------------------------------------------------------------------------'.'<br>';

//---------- поиск единственного возвращаемого класса ----------------------------------------------------------------

        require 'find-the-only-class-return.php';
        $the_only_class_return = find_the_only_class_return($file_js);



//---------- js_elements_extractor() ----------------------------------------------------------------------------------





//---------------------------------------------------------------------------------------------------------------------

        $the_only_class_return_index_array = array_search($the_only_class_return, array_column($all_lines, 1));

        echo $all_lines[$the_only_class_return_index_array][0].' '.$all_lines[$the_only_class_return_index_array][1].' #'.$all_lines[$the_only_class_return_index_array][2].'-'.'#'.$all_lines[$the_only_class_return_index_array][3].'<br>';

        echo '----------------------------------------------------------------------------------------------------'.'<br>';

        // echo '...';

//---------- список методов для единственного класса ----------------------------------------------------------------

//---УДАЛИТЬ---
// // echo '<br><br>';
// // $file = "file.txt"; // указываем сам файл и путь к нему
//     $file3 = file($file_js);
//   $lines = count(file($file_js)); // высчитываем количество строк
// //   echo "В файле $file_name количество строк $lines шт."; // отображаем результат

//     for($i=0; $i<$lines; $i++) {
//         $g = $i+1;
//         echo '#'.$g.' --- '. $file3[$i] . '<br>';
//     }

//------------------------------------------------------------------------------------------------------------------------------------

    $element_first_line = $all_lines[$the_only_class_return_index_array][2]-1;
    $element_last_line =  $all_lines[$the_only_class_return_index_array][3];
    for ($i=$element_first_line;$i<$element_last_line;$i++){
        echo $file_lines_array[$i].'<br>';
    };

//------------------------------------------------------------------------------------------------------------------------------------

//

        require 'js-elements-extractor.php';


        //---------- удалить то, что снизу ----------
//-------------------------------------------------------------------------------------------------------------------
        // echo '----------------------------------------------------------------------------------------------------'.'<br>';

        // for($i=0;$i<count($all_lines);$i++){
        //     echo  $all_lines[$i][0] . ' ' . $all_lines[$i][1] . ' ' . '#'. $all_lines[$i][2] . '-' . '#'. $all_lines[$i][3] . '<br>';
        // };

    };

?>