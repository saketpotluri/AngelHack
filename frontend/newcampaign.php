<!doctype html>

<html lang="en">
<head>
    <title><!-- Insert your title here --></title>
    <style>
        .wrapper{
            width:600px;
            margin: 0 auto;
            position: relative;
            top:100px;
        }
        .da-name{
            width:600px;
            color:white;
        margin: 0 auto;
        height: 30px;
        border: 1px;
        background-color: #FF5A58;
        font-family: Arial, Helvetica, sans-serif;
    padding: 5px;
    padding-left:12px;
    font-size: 16px;
    
   
        }
        h1{
            margin: 0px;
            text-align: center;
            position: relative;
            padding-bottom: 25px;
            font-family: "Helvetica Neue",Helvetica,Verdana,Arial,sans-serif;
        }
        input::-webkit-input-placeholder {
            color:white;
        }
        input::-moz-placeholder { 
            color:white; 
            opacity: 1;
        }
        
        input::-ms-input-placeholder { 
            color:white;
        }	/* IE10+ */
        
        textarea{
            width:600px;
            background-color: #1A2F3A;
            height: 200px;
            margin-top:8px;
            color:white;
            padding: 8px;
            border: 1px;
            font-size: 17px;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            resize: none;
            
        }
       input[type=file] {
  position: absolute;
  top:-5px; /* size of border */
  left:-5px; /* size of border */
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  width: 240px;
  height: 50px;
  border: 1px solid red;
  opacity: 0;
  cursor: pointer
}

.fakeFileButton {
  position: relative;
  top:5px;
  margin: 0;
  padding: 0;
  width: 180px; /* same as button */
  height: 45px; /* same as button */
 background-color: #FF5A58;
  border: 1px;
  border-radius: 5px;
  font-size: 18px;
  font-family: Arial, Helvetica, sans-serif;
  color: white;
  text-align: center;
  line-height: 40px;
}
.bttn{
  position: relative;
  top:15px;
  margin: 0;
  padding: 0;
  width: 180px; /* same as button */
  height: 45px; /* same as button */
 background-color: #FF5A58;
  border: 1px;
  border-radius: 5px;
  font-size: 18px;
  font-family: Arial, Helvetica, sans-serif;
  color: white;
  text-align: center;
  line-height: 40px;   
}
#image{
    width:95px;
    height: 95px;
    border: 1px solid gray;
    float: right;
    margin: 4px;
    position: relative;
    top:-42px;
   left: 20px;
    
}
#from{
    width:120px;
    height: 45px;
    background-color: #1A2F3A;
    border:1px;
    float: left;
     font-family: Arial, Helvetica, sans-serif;
    padding: 5px;
    padding-left:12px;
    font-size: 16px;
    color:white;
    margin: 5px;
}
#till{
    width:120px;
    height: 45px;
    background-color: #1A2F3A;
    border:1px;
    float: right;
    color:white;
      
       margin: 5px;
        font-family: Arial, Helvetica, sans-serif;
    padding: 5px;
    padding-left:12px;
    font-size: 16px;
}
.times{
position: relative;
top:-20px;
margin: 0 auto;
width:615px;
}
.perpeople{
  width:283px;
    height: 45px;
    background-color: #1A2F3A;
    border:1px;
    float: right;
    color:white;
      position: relative;
      left:18px;
       
        font-family: Arial, Helvetica, sans-serif;
    padding: 5px;
    padding-left:12px;
    font-size: 16px;
    
}
.precentage{
  
    height: 45px;
    background-color: #1A2F3A;
    border:1px;
    float: left;
    color:white;
      width: 283px;
       
        font-family: Arial, Helvetica, sans-serif;
    padding: 5px;
    padding-left:12px;
    font-size: 16px;
}
.create{
    width:300px;
    height: 50px;
    background-color: #52DCB4;
    border: 1px;
    position: relative;



border-radius: 5px;
font-size: 18px;
font-family: Arial,Helvetica,sans-serif;
color: #FFF;
text-align: center;
line-height: 40px;

}
.wrap-create{
    width:300px;
    position: relative;
    top: 8px;
    margin: 0 auto;
}
.push{
    position: relative;
    top:8px;
}
.discount-label{
       float: left;
       
    margin-left:70px;
    color: #4E595D;
font-family: "Helvetica Neue",Helvetica,Verdana,Arial,sans-serif;
font-weight: bold;
font-size: 20px;

margin-top: 5px;
margin-bottom: 10px;
   
}
.per-label{
  float: right;
    margin-right:70px;
    color: #4E595D;
font-family: "Helvetica Neue",Helvetica,Verdana,Arial,sans-serif;
font-weight: bold;
font-size: 20px;
margin-top: 5px;
margin-bottom: 10px;


}
.from-label{
       float: left;
       
    margin-left:90px;
    color: #4E595D;
font-family: "Helvetica Neue",Helvetica,Verdana,Arial,sans-serif;
font-weight: bold;
font-size: 20px;
margin-top: 5px;
margin-bottom: 10px;

   
}
.till-label{
  float: right;
    margin-right:100px;
    color: #4E595D;
font-family: "Helvetica Neue",Helvetica,Verdana,Arial,sans-serif;
font-weight: bold;
font-size: 20px;
margin-top: 5px;
margin-bottom: 10px;


}

    </style>
       <!-- <link rel="stylesheet" type="text/css" href="jquery.datetimepicker.css">-->
       <!-- include input widgets; this is independent of Datepair.js -->
<link rel="styleshee" type="text/css" href="jquery.timepicker.css" />
<link rel="stylesheet" type="text/css" href="bootstrap-datepicker.css" />
</head>
<body>
    <?php include "navbar.php"?>
   <div class="wrapper">
    <h1>Create Camapign</h1>
    <form><div class="name-wrap">
        <input class="da-name"type="text" name="name" placeholder="Give Your Campaign A Title...">
        </div> <textarea placeholder=""></textarea>
        <div class="push"><div class="fakeFileButton">
            Upload
    <input type="file">
</div>
        <button class="bttn">Preview</button>
     
        <div id="image" class="image-one"></div>
        <div id="image" class="image-two"></div>
        <div id="image"class="image-three"></div>
        <div id="image"class="image-four"></div>
        </div>
          <div  style="clear: both"></div>
          
          <div class="times">
            <p class="from-label">Date From</p><p class="till-label">Date Till</p><div  style="clear: both"></div>
            <div id="my-one-wrap">
<input  type="text" id="from" class="date" name="from" placeholder="Date From">
   <input  type="text" id="from" class="date" name="from" placeholder="Date From">
            </div>
            <div id="my-one-wrap">
            
<input  type="text" id="till" class="date" name="from" placeholder="Date Till">
<input  type="text" id="till" class="date" name="from" placeholder="Date Till">
        </div>
          </div>
<div class="rates">
    <p class="discount-label">Discount Rate</p><p class="per-label">Per Bought</p><div  style="clear: both"></div>
<input  type="text" class="precentage" name="from" placeholder="Ex: 5% Off">
        

<input  type="text" class="perpeople" name="from" placeholder="Ex: Per 100 People">
        </div>       <div  style="clear: both"></div>  <br><div class="wrap-create"><input class="create"type="submit" value="Create Campaign"></div><br><br>
        
    </form>

   </div>
   
   <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
   <script type="text/javascript" src="bootstrap-datepicker.js"></script>
<script type="text/javascript" src="jquery.timepicker.js"></script>

<script type="text/javascript" src="datepair.js"></script>
 <!--  <script src="jquery.datetimepicker.js"></script>-->
 
   
    
<script>
    //// initialize input widgets first
    //$('#my-one-wrap .time').timepicker({
    //    'showDuration': true,
    //    'timeFormat': 'g:ia'
    //});
    //
    //$('#my-one-wrap .date').datepicker({
    //    'format': 'm/d/yyyy',
    //    'autoclose': true
    //});
    //
    //// initialize datepair
    //var basicExampleEl = document.getElementById('basicExample');
    //var datepair = new Datepair(basicExampleEl);
</script>



</body>
</html>
