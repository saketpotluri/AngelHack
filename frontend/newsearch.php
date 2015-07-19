<html>
    <head>
        <style>
.products {
    float : left;
    height : inherit;
    width : 760px

}
.product {
    width : 360px;
    height : 475px;
    
    margin : 10px 10px 10px 10px;
    float : left;
}

.search-div {
    width : 200px;
    height : 500px;
    background-color : white;
    margin : 10px 10px 10px 10px;
    float : left;
    border-radius:5px;
}

.sponsor-ad {
    width : 200px;
    height : 500px;
    background-color : white;
    margin : 10px 10px 10px 10px;
    float : left;
    border-radius:5px;
}
.wrapper{
    margin: 0 auto;
    width:1200px;
    position: relative;
    top:100px;
    
}
.term{
    margin : 10px 10px 10px 10px;
    width: auto;
    height: 40px;
    background-color: white;
    border-radius:5px;
}
 .product{
       height: 583px;
        width: 345px;
        position: relative;
        top:5px;
        background-color: white;
        
        border-radius: 5px;
        left: 15px;
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
      margin-bottom: 10px;
      color: white;
      border-radius: 5px;

       font-weight:500;
     font-size:18px;
     }
    
    h3{
        
         font-family: myriad-pro,"Helvetica Neue",Helvetica,Arial,sans-serif;
        font-weight: 400;
         
         margin-top:20px;
         margin-left:13px;
         top: 7px;
position: relative;
     }
    
     
     h5{
     font-size: 20px;
    margin: -20px 0px 0px 13px;
      font-family: myriad-pro,"Helvetica Neue",Helvetica,Arial,sans-serif;
        
        font-weight: 400;
      margin: -20px 0px 0px 15px;
     }
     h4{
      font-family: 'Helvetica', 'Helvetica-neue';
        margin-top: 5px;
       font-size: 20px;
         margin-left:13px;
        font-weight: 500;    
     }
     .wrap-products{
        width:1000px;

        margin: 0 auto;
        float: left;
     }

        </style>
    </head>
    <body>
        <?php include "navbar.php"?>
        <div class="wrapper">
        <div class="search-div">
           
        </div>
        
        <div class="products">
            <div class="term">
            
        </div>
            <div class="product">
                <img src="images/beats.png">
        <hr size="1">
        <h1 > <?php // echo name?>Beats Solo Premium</h1>
        <p>Starting Discount <?php // echo precent?>5% MSRP</p>
        
       
        <button>Details</button><h3>Ends: <?php// echo time?>1 Day 18 Min <span class="sec">34 Sec</span></h3>
        <h4>Current Discount <?php // echo precenatge?> <span class="precent">Save 15%</span></h4>
        <h5><?php// echo number sold?> 200 Sold Of 500</h5>
       
            </div>
            <div class="product">
                <img src="images/beats.png">
        <hr size="1">
        <h1 > <?php // echo name?>Beats Solo Premium</h1>
        <p>Starting Discount <?php // echo precent?>5% MSRP</p>
        
       
        <button>Details</button><h3>Ends: <?php// echo time?>1 Day 18 Min <span class="sec">34 Sec</span></h3><div class="clear"></div>
        <h4>Current Discount <?php // echo precenatge?> <span class="precent">Save 15%</span></h4>
        <h5><?php// echo number sold?> 200 Sold Of 500</h5>
       
            </div>
            <div class="product">
                <img src="images/beats.png">
        <hr size="1">
        <h1 > <?php // echo name?>Beats Solo Premium</h1>
        <p>Starting Discount <?php // echo precent?>5% MSRP</p>
        
       
        <button>Details</button><h3>Ends: <?php// echo time?>1 Day 18 Min <span class="sec">34 Sec</span></h3><div class="clear"></div>
        <h4>Current Discount <?php // echo precenatge?> <span class="precent">Save 15%</span></h4>
        <h5><?php// echo number sold?> 200 Sold Of 500</h5>
       
            </div>
            <div class="product">
                <img src="images/beats.png">
        <hr size="1">
        <h1 > <?php // echo name?>Beats Solo Premium</h1>
        <p>Starting Discount <?php // echo precent?>5% MSRP</p>
        
       
        <button>Details</button><h3>Ends: <?php// echo time?>1 Day 18 Min <span class="sec">34 Sec</span></h3><div class="clear"></div>
        <h4>Current Discount <?php // echo precenatge?> <span class="precent">Save 15%</span></h4>
        <h5><?php// echo number sold?> 200 Sold Of 500</h5>
       
            </div>
        </div>
        <div class="sponsor-ad">
          
        </div>
        </div>
    </body>
</html>
