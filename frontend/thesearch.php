<!doctype html>

<html lang="en">
<head>
    <title><!-- Insert your title here --></title>
    <style>
        .filter{
            width:300px;
            height: 500px;
            background-color: white;
            float: left;
             position: relative;
        top:100px;
        }
       
       .product{
        margin: 0 auto;
        width: 345px;
        position: relative;
        top:5px;
      
    
        background-color: white;
        height: 600px;
        border-radius: 5px;
        
      }
      
      .product img{
        width:inherit;
        border-radius: 5px;
      }
      .product hr{
        width:90%;
        color:#F3F3F3;
      }
      .product h1{
        font-size: 20px;
        position: relative;
        left:15px;
        font-family: 'Helvetica', 'Helvetica-neue';
        font-weight: bold;
      }
     .product p{
         font-size: 15px;
         font-weight: 400;
         margin-top:-3px;
        position: relative;
        left:15px;
        font-family: 'Helvetica', 'Helvetica-neue';
        
       
       
     }
     
    
     button{
        float: left;
        width: 325px;

        height: 40px;
        border: 0px;
        background-color: #F67400;
      margin-left:10px;
      color: white;
      border-radius: 5px;
      font-family: myriad-pro,"Helvetica Neue",Helvetica,Arial,sans-serif;
       font-weight:bold;
     font-size:18px;
     }
    
    h3{
        float: right;
         font-family: 'Helvetica', 'Helvetica-neue';
        font-weight: 700;
         float: left;
         margin-top:20px;
         margin-left:13px;
         margin-bottom: -10px;
     }
     .sec{
        color: #CC3636;
     }
     .precent{
        color: red;
     }
     h5{
     font-size: 20px;
     margin: 5px;
      font-family: 'Helvetica', 'Helvetica-neue';
        font-weight: 700;
        margin-top:-12px;
         margin-left:13px;
     }
     h4{
      font-family: 'Helvetica', 'Helvetica-neue';
        
       font-size: 20px;
         margin-left:13px;
         font-weight:400;      
     }
     .wrap-div.div{
        float: left;
        width: 730px;
        
        
     }
    
    </style>
</head>

<body>
    <?php include "navbar.php"?>
    
    <div class="filter"></div>
   
   
    
   
 
   
   <div class="wrap-div">
     <div class="product">
        <img src="images/beats.png">
        <hr size="1">
        <h1 > <?php // echo name?>Beats Solo Premium</h1>
        <p>Starting Discount <?php // echo precent?>5% MSRP</p>
        
       
        <button>See Product</button><h3>Ends: <?php// echo time?>1 Day 18 Min <span class="sec">34 Sec</span></h3><div class="clear"></div>
        <h4>Current Discount <?php // echo precenatge?> <span class="precent">Save 15%</span></h4>
        <h5><?php// echo number sold?> 200 Sold Of 500</h5>
       
    </div>
     <div class="product">
        <img src="images/beats.png">
        <hr size="1">
        <h1 > <?php // echo name?>Beats Solo Premium</h1>
        <p>Starting Discount <?php // echo precent?>5% MSRP</p>
        
       
        <button>See Product</button><h3>Ends: <?php// echo time?>1 Day 18 Min <span class="sec">34 Sec</span></h3><div class="clear"></div>
        <h4>Current Discount <?php // echo precenatge?> <span class="precent">Save 15%</span></h4>
        <h5><?php// echo number sold?> 200 Sold Of 500</h5>
       
    </div>
     </div>
   </div>
</body>
</html>
