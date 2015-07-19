<!doctype html>

<html lang="en">
<head>
    <title><!-- Insert your title here --></title>
    <style>
        h1{
            margin: 0px;
        }
        .the-wrap{
             width: 500px;
        height: 375px;
      position: relative;
    top:100px;
    
      margin: 0 auto;
        
       
        background-color: white;
        }
        .input-wrap{
            margin: 0 auto;
            width:425px;
        }
        #the-input-password{
                 
            
         margin: 0px 0px 35px 55px;
            width: 275px;
            height: 35px;
            border-radius: 5px;
            border: 1px solid gray;
              background: url("images/lock.png") center left no-repeat;
         background-size:40px;
         padding: 5px;
         padding-left:40px;
         font-size: 15px;
         
        
        }
         #the-input-email{
                 font-size: 15px;
            
         margin: 0 0 30px 55px;
            width: 275px;
            height: 35px;
            border-radius: 5px;
            border: 1px solid gray;
              background: url("images/mail.png") center left no-repeat;
         background-size:40px;
         padding: 5px;
         padding-left:40px;
        
        }
        .submit-wrap{
            margin: 0 auto;
            width:300px;
            
        }
        #the-submit{
                 width: 300px;
                 
border: 1px;
border-radius: 5px;
font-size:20px;
font-family: 'Helvetica', 'Helvetica-neue';
        font-weight: 700;
        
        color: white;
        height: 50px;
            background-color: #468ADA;
        }
        .the-wrap h1{
            text-align: center;
           padding: 20px;
           color: #4E595D;
font-family: "Helvetica Neue",Helvetica,Verdana,Arial,sans-serif;
            
        }
        .signup-text{
            text-align: center;
            padding: 10px;
        }
        a{
            text-decoration: none;
            color:black;
        }
       
    </style>
</head>
<body>
    <?php include "navbar.php"?>
<div class="the-wrap">
    <h1>Login below</h1>
    <form>
        <div class="input-wrap">
        <input id="the-input-email"type="email" name="email">
        <br>
        <input id="the-input-password"type="password" name="pass">
        <br>
        <div class="submit-wrap">
        <input id="the-submit" type="submit" value="Login">
        
        </div>
        </div>
        <div class="signup-text"><a href="signup.php"><p>Need An Account? Sign Up here!</p></a></div>
    </form>
</div>
<div class="space">
    a
</div>
</body>
</html>
