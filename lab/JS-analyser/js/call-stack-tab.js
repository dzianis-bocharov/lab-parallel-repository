function call_stack_tab() {
  $('.div-call-stack').html('');
    var file_data = new FormData();
    var file_js = $('#file2')[0].files[0];
    file_data.append('file_js',file_js);
    $.ajax({
        url: 'php/call-stack.php',
        type: 'POST',
        data: file_data,
        contentType: false,
        processData: false,
        success: function(response){
          $('.div-call-stack').append(response);
        }
    });
};
export {call_stack_tab};

//---------- удалить ----------------------------------------------------------------------------------------------------

    // $.ajax({
    //     url: 'php/call-stack.php',
    //     type: 'POST',
    //     data: file_data,
    //     contentType: false,
    //     processData: false,
    //     success: function(response){
    //       $('.div-call-stack').append(response);
    //     }
    // });

    
    // $.ajax({
    //     url: 'php/js_file_name.php',
    //     type: 'POST',
    //     data: file_data,
    //     contentType: false,
    //     processData: false,
    //     success: function(response){
    //       $('.div-call-stack').append(response);
    //     }
    // });

  // $.ajax({
  //   type: "GET",
  //   url: "php/js_file_to_array.php",
  //   dataType: "script",
  //   success: function () {

  //     const call_stack_array_filter_class = call_stack_array.filter((item) => {return item[0] =='class';}).length;
  //     const call_stack_array_filter_function = call_stack_array.filter((item) => {return item[0] =='function';}).length;
  //     const call_stack_array_filter_var = call_stack_array.filter((item) => {return item[0] =='var';}).length;
  //     const call_stack_array_filter_let = call_stack_array.filter((item) => {return item[0] =='let';}).length;
  //     const call_stack_array_filter_const = call_stack_array.filter((item) => {return item[0] =='const';}).length;

  //     $('.div-call-stack').append("<br>----------------------------------------------------------------------------------------------------<br>class - " + call_stack_array_filter_class + " шт.<br>function - " + call_stack_array_filter_function + " шт.<br>var - " + call_stack_array_filter_var + " шт.<br>let - " + call_stack_array_filter_let + " шт.<br>const - " + call_stack_array_filter_const + " шт.<br>----------------------------------------------------------------------------------------------------<br>..." + '<br>');

  //   }
  // });
