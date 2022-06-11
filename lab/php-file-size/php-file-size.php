<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <link rel='shortcut icon' type='image/ico' href='../favicon-lab.ico'>
        <style>
            body {
                background-color: grey;
                color: white;
            }
            div#content {
                width: 960px;
                margin: auto;
            }
            div#message {
                background-color: lime;
                height: 200px;
                width: 500px;
                color: black;
                font-size: 40px;
                margin-top: 25px;
                margin-bottom: 25px;
            }
            button {
                margin-top: 150px;
            }
            button#btn-filesize {
                width: 150px;
                height: 50px;
            }
            button#btn-clear {
                width: 75px;
                height: 50px;
            }
            a {
                color: blue;
            }
        </style>
        <script type="text/javascript" src="../../jquery-3.2.1.min.js"></script>
        <script>
            $(document).ready(function(){
                $('#btn-filesize').bind('click', function () {
                    $.ajax({
                        type: "GET",
                        url: "script1.php",
                        dataType: "html",
                        success: function (data) {
                            $('#message').html(data);
                        }
                    });
                });
                $("#btn-clear").click(function(){
                    $("#message").text("...");
                });
            });
            $(document).ready(function () {
                });
        </script>
    </head>
    <body>
        <div id='content'>
            <button id='btn-filesize'>Размер файла</button>
            <button id='btn-clear'>Clear</button>
            <div id='message'>
                ...
            </div>
            <a id='a1' href='../MainPage.php'>Навигация /// Lab / Home</a>
        </div>
    </body>
 
</html>