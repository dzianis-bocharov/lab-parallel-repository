// привязка сценариев JavaScript к кнопкам

import {canvas_blur_fix} from './canvas-blur-fix.js'; 
import {call_stack_tab} from './call-stack-tab.js'; 
import {error_window_open, error_window_close} from './error-window.js';

function controls() {

    $('#switch').click(() => {
        const inputSwitchChecked = document.getElementById("test1").checked;
        if(inputSwitchChecked) {
            $('#fileInputHTMLwrapper').removeClass('notVisibleFileInputHTML');
        }
        else {
            $('#fileInputHTMLwrapper').addClass('notVisibleFileInputHTML');
            document.getElementById('file1').value = null;
            document.getElementById('file-name1').value = '...';
        }
    });
   
     $('.input-file-btn').on('click', (event) => {
        const btnInputId = event.target.id
        const inputFileId = '#file' + btnInputId.substring(btnInputId.length-1);
        $(inputFileId).trigger('click'); 
        const inputFileName = '#file-name' + btnInputId.substring(btnInputId.length-1) 
        $(inputFileId).on('change', function () {
            const fileName = $(this)[0].files[0].name;
            $(inputFileName).val(fileName);
        });
    });

    $('#reset').on('click', (event) => {
        event.preventDefault();
        document.getElementById('file1').value = '';
        document.getElementById('file2').value = '';
        $('.div-call-stack').html('...');
        $('.fileNames').val('...');
        $('#error_message').html('');
        const inputSwitchChecked = document.getElementById("test1").checked;
        if(!inputSwitchChecked) {
            $('#switch').trigger('click');
            $('#fileInputHTMLwrapper').removeClass('notVisibleFileInputHTML');
        };
        var ctx = canvas_blur_fix(document.querySelector('#mainCanvas'));
        ctx.canvas.height = 100;
        const z = window.devicePixelRatio;
        ctx.scale(z, z);
        $('.wideDiv').removeClass('btn-scroll-yes').addClass('btn-scroll-no');
        ctx.clearRect(0, 0, ctx.canvas.width,  ctx.canvas.height);      
        $('.tabs-ierarchy')[0].click();
        var ctx = canvas_blur_fix(document.querySelector('#mainCanvas'));
        ctx.font = "16px serif";
        ctx.fillText("...", 5, 18);
    })

    $('#expandIerarchyScheme').on('click', ()=>{
        if($('#result').hasClass('normalWidthIerarchyScheme')) {
            $('#result').removeClass('normalWidthIerarchyScheme').addClass('largeWidthIerarchyScheme');
            $('#expandIerarchyScheme').html('Свернуть');
        }
        else {
            $('#result').removeClass('largeWidthIerarchyScheme').addClass('normalWidthIerarchyScheme');
            $('#expandIerarchyScheme').html('Развернуть на<br> ширину окна');
        };
    })

    $('.tabs-ierarchy').on('click', (e) => {
        let tabs = $('.tabs-ierarchy');
        let divsResult = $('.div-result');//
        for(let i = tabs.length - 1; i>-1;i--){
            if(tabs[i]==e.target){
                if(!$(tabs[i]).hasClass('ttab-ierarchyScheme-active')){
                        $(tabs[i]).addClass('tab-ierarchyScheme-active');
                };
                if($(tabs[i]).hasClass("tab-ierarchyScheme-normal")){
                        $(tabs[i]).removeClass("tab-ierarchyScheme-normal");
                }
                if($(divsResult[i]).hasClass('div-result-hide')){
                    $(divsResult[i]).removeClass('div-result-hide');
                };
            }
            else{
                if(!$(tabs[i]).hasClass('tab-ierarchyScheme-notmal')){
                        $(tabs[i]).addClass('tab-ierarchyScheme-normal');
                };
                if($(tabs[i]).hasClass("tab-ierarchyScheme-active")){
                        $(tabs[i]).removeClass("tab-ierarchyScheme-active");
                    }
                if(!$(divsResult[i]).hasClass('div-result-hide')){
                    $(divsResult[i]).addClass('div-result-hide');
                };
            }
        };
    });

//-----------------------------------------------------------------------------------------------------------------------
    
  var ctx = canvas_blur_fix(document.querySelector('#mainCanvas'));

  ctx.font = "16px serif";

  ctx.fillText("...", 5, 18);

    $('#launch').on('click', (event)=>{
        event.preventDefault();
        $('#error_message').html('');
        $('.tabs-ierarchy')[0].click();
        if($('#test1').is(':checked') && (!$('#file1')[0].files[0] || !$('#file2')[0].files[0])){
            if(!$('#file2')[0].files[0]){
                error_window_open('<p>Не выбран файл JavaScript!</p>');
            };
            if(!$('#file1')[0].files[0]){
                error_window_open('<p>Не выбран файл HTML!</p>');
            };
        }
        else if(!$('#test1').is(':checked') && !$('#file2')[0].files[0]) {
            error_window_open('<p>Не выбран файл JavaScript!</p>');
        }

//---------- ошибка / выбранный файл не JavaScript ----------------------------------------------------------------------

        // else if (1

        // var name = document.getElementById('file1'); 
        // alert(name.files.item(0).name);



        // ) {
        //     error_window_open('<p>Dzianis Bocharov</p>');
        // }

//-----------------------------------------------------------------------------------------------------------------------

        else {

//----------схема для файла----------------------------------------------------------------------------------------------

            ctx.clearRect(0, 0, ctx.canvas.width,  ctx.canvas.height);

            $.ajax({
                type: "GET",
                url: "php/jsFileToArrayOld.php",
                dataType: "script",
                success: function (data) {
                    ctx.font = "18px serif";
                    const list_of_functions = javascript_array;
                    let x = 3;
                    let w = 0;
                    ctx.canvas.height = list_of_functions.length*70+20;
                    const z = window.devicePixelRatio;
                    ctx.scale(z, z);
                    $('.wideDiv').removeClass('btn-scroll-no').addClass('btn-scroll-yes');
                    for (let i = 0; i < list_of_functions.length; i++) {
                    ctx.font = "16px serif";
                    ctx.fillText(list_of_functions[w], 10, 20 + i * 20);
                    w++;
                    }
                }
            });

//----------стек вызова------------------------------------------------------------------------------------------------

            call_stack_tab();
    
//---------------------------------------------------------------------------------------------------------------------

        }

    })

    
    $('#button_error_ok').on('click', () => {
        error_window_close();
    });

};

export {controls};