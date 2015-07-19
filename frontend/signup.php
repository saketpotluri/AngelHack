<!doctype html>

<html lang="en">
<head>
    <title><!-- Insert your title here --></title>
    <style>
        .wrap{
        width: 800px;
        height: 580px;
      position: relative;
   
  top:100px;
  
    padding-bottom:20px;
       
       
        background-color: white;
        }
        p, h1{
            margin: 0px;
            text-align: center;
            
        }
        .wrap h1{
           padding: 20px;
        }
        .text{
            width:500px;
            margin: 0 auto;
            color: #4E595D;
            font-size: 20px;
            font-family: "Helvetica Neue",Helvetica,Verdana,Arial,sans-serif;
        }
        .form{
            width: 1000px;
            margin: 0 auto;
           position: relative;
           top:50px;
            
        }
        .email{
            width: 260px;
            height: 35px;
            border-radius: 5px;
            border: 1px solid gray; 
            margin-left:18%;
         margin: 0 0 55px 55px;
         background: url("images/mail.png") center left no-repeat;
         background-size:40px;
         padding: 5px;
         padding-left:40px;
         font-size: 15px;
        }
        .pass{
            margin-right: 18%;
            width: 260px;
            height: 35px;
         margin: 0 0 55px 55px;
           
            border-radius: 5px;
            border: 1px solid gray;
             background: url("images/lock.png") center left no-repeat;
         background-size:40px;
         padding: 5px;
         padding-left:40px;
         font-size: 15px;
        }
        .fname{
             margin-right: 18%;
            
       margin: 0 0 55px 55px;
            width: 260px;
            height: 35px;
            border-radius: 5px;
            border: 1px solid gray;
              background: url("images/me.png") center left no-repeat;
         background-size:40px;
         padding: 5px;
         padding-left:40px;
         font-size: 15px;
        }
        .lname{
             margin-right: 20%;
            
         margin: 0 0 55px 55px;
            width: 260px;
            height: 35px;
            border-radius: 5px;
            border: 1px solid gray;
              background: url("images/me.png") center left no-repeat;
         background-size:40px;
         padding: 5px;
         padding-left:40px;
         font-size: 15px;
        }
        .retype-pass{
           margin-right: 20%;
            
         margin: 0 0 55px 55px;
            width: 260px;
            height: 35px;
            border-radius: 5px;
            border: 1px solid gray;
              background: url("images/lock.png") center left no-repeat;
         background-size:40px;
         padding: 5px;
         padding-left:40px;
         font-size: 15px;
        }
        .submit-wrap{
            margin: 0 auto;
            width:550px;
        
        }
        .submit{
            width: 325px;
border: 1px;
border-radius: 5px;
font-size:20px;
font-family: 'Helvetica', 'Helvetica-neue';
        font-weight: 700;
        
        color: white;
        height: 50px;
            background-color: #468ADA;
        }
        .center-ls{
            margin: 0 auto;
            width:650px;
            height: 85px;
        }
      .space{
        height: 20px;
      }
    </style>
</head>
<body style="margin: 0px; padding: 0px; background-color: #F2F2F2; ">
    <?php include "navbar.php"?>
    <div class="wrap" style="margin: 0px auto;">
        <h1>Deal App</h1>
        <div class="text">
        <p> Deal Crack Is A New Way To Save On Everyday Products From Beauty to Electronics. Sign Up, Its Free!</p>
        </div>
        <form>
            <div class="form">
                <input id="input" class="email" type="email" name="email" placeholder="Email...">
                <input id="input"class="pass" type="password" name="pass" placeholder="Password...">
                <input id="input"class="retype-pass"type="password" name="retype-pass" placeholder="Re-type Password">
                <input id="input "class="fname" type="text" name="firstname" placeholder="First Name">
                <div class="center-ls"><input id="input"class="lname"type="text" placeholder="Last Name"name="lastname"></div>
                 
                  <div style="clear: both"></div>
                <br>
                
                <div class="submit-wrap">
                    
                <input class="submit" type="submit" value="Sign Up">
                </div>
                
            </div>
            
            
        </form>
        <br>
        <br>
        <br>
        <br>
    </div>
    <div>
        <h6>&nbsp; </h6>
        <h6>&nbsp; </h6>
        <h6>&nbsp; </h6>
        <h6>&nbsp; </h6>
    </div>
    
</body>
</html>
