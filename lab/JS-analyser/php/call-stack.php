<?php

//----------имя файла JavaScript--------------------------------------------------------------------------------------------

    $file_js = $_FILES['file_js'];
    $file_name = $file_js['name'];
    echo $file_name . '<br>';
    $file_js_path = $file_js["tmp_name"];

//----------анализ всего файла JavaScript без выполнения его кода----------------------------------------------------------

    require 'call-stack-js-all.php';
    call_stack_js_all($file_js_path);

?>
