<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <!--<meta content="width=device-width, initial-scale=1" name="viewport">-->
   <link rel='shortcut icon' type='image/ico' href='favicon-lab.ico'>
   <style>
	   body {
		   /*font-size: 25px;*/
         margin:0;
         padding: 0;
         color: white;
         background-color: grey;
   	   height: 100%;
      }
      div#LogIn {
         border: 2px solid white;
         width: 250px;
         height: 220px;
         padding: 15px 25px 15px 25px;         
         position: absolute;
         top: 50%;
         left: 50%;
         margin: -125px 0 0 -150px;
      }
      
      span#z1 {
         font-size: 30px;
         text-decoration: underline;
         display: block;
         text-align: center;
         margin-top: -5px;
         margin-bottom: -15px;
      }
      button {
         font-size: 20px;
         margin-top: 10px;
         height: 45px;
         width: 100px;
         box-shadow: 1px 1px;
      }
      div#logInContainer {
         height: 100vh;
         border: solid white 0px;
         /*background-color: green;*/
      }
      label {
          font-size: 20px;
      }
      input {
         width: 250px;
         height: 35px;
         font-size: 25px;
         background-color: lime;
         border: 0;
         padding: 0;
         margin-bottom: 5px;
        }
   </style>
   <title>LogInPage</title>
</head>
<body>
      <div id='logInContainer'>
         <div id='LogIn'>
            <span id='z1'>LAB</span>
            <br>
            <label for='inputUserName'>Username</label>
            <br>
            <input id='inputUserName'>
            <br>
            <label for='inputId'>Password</label>
            <br>
            <input id='inputId'>
            <br>
            <button>Login</button>
         </div>
      </div>
</body>
</html>