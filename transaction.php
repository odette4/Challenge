<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <style>
    body{display:flex;justify-content:center;
     align-items:center; }
     form{width:30%;min-height:300px;
       justify-content:center;
       padding:10px;
       display:flex;
       align-items:center;
       background:grey;
       flex-flow: column;
       border-radius:
        20px 3px 20px 3px;
        box-shadow:0px 0px 20px #787878;
      }
      .select{
        height:40px;width:77%; margin-left:40px;
       margin-bottom:0.5em;text-align:center;
      }
      .button{
        height:40px;width:30%;
       text-align:center;
       align-items:center;
       justify-content:center;
      }
     
     input{height:40px;width:75%; margin-left:40px;
       margin-bottom:0.5em;text-align:center;}
    
    </style>
   <form  action="" method="post">
       <h2 style="color:white">Receiver Information<h2>
         
     <input type="text" name="FirstName" value="" placeholder="firstname">
     <input type="text" name="LastName" value="" placeholder="lastname">
     <input type="text" name="PhoneNumber" value=""placeholder="telephone number">
     <input type="text" name="Amount" value=""placeholder="Enter amount of money">
     <input type="text" name="Fees" value=""placeholder="Transfer fees">
   
     
     
     <input type="submit" name="send" value="Send" class="button">
     <input type="submit" name="submit" value="Cancel" class="button">
   </form>

  </body>
</html>