<!doctype html>

<html lang="en">
<head>
    <title><!-- Insert your title here --></title>
    <style>
        .navbar{
            width:100%;
            background-color: #4A8CD7;
            height: 75px;
            position: fixed;
            z-index: 1;
        }
        .search{
            width: 500px;
            height:35px;
         position: fixed;
        border-radius: 25px;
        
            border: 1px;
            
        }
        .search-wrap{
            margin: 0 auto;
            width: 500px;
            padding: 18px;
        }
        .profile-pic{
            float: right;
            width:50px;
            height: 50px;
            border-radius: 25px;
            background-color: white;
            border: 0px solid white;
        margin: 10px 10px 0px 0px;
        }
        .logo{
            float: left;
            padding: 13px;
        }
      .pic{
        border-radius: 25px;
       
      }
      .clear{
        clear: both;
      }
      .filter-1{
        width:275px;
        height: 450px;
        background-color: white;
        position: relative;
        top:100px;
        
        z-index: 0;
        float: left;
      }
      .filter-2{
        width:275px;
        height: 450px;
        background-color: white;
        position: relative;
        top:120px;
        left:75px;
        z-index: 0;
        
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
     .wrap-products{
        width:1000px;

        margin: 0 auto;
        float: left;
     }
  
    
    </style>
</head>
<body style="margin: 0px; padding: 0px; background-color: #F2F2F2; ">
    <div class="navbar">
        <img class="logo" src="images/default-logo.png" width="150px"/>
        
        <div  class="profile-pic">
            
         <img class="pic" src=""/>
         </div>
         
         <form>
            <div class="search-wrap">
            <input class="search" type="text">
            
            
           </div>
        </form>
         
    </div>
    
   
    <div class="filter-1">
        a
        
    </div>
   
    <div class="wrap-products">
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
   
      
    
    


    
    
</body>

</html>
