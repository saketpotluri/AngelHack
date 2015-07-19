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
    background-color : #DDDDDD;
    margin : 10px 10px 10px 10px;
    float : left;
}

.search-div {
    width : 200px;
    height : 500px;
    background-color : #9999cc;
    margin : 10px 10px 10px 10px;
    float : left;
}

.sponsor-ad {
    width : 200px;
    height : 500px;
    background-color : #99aacc;
    margin : 10px 10px 10px 10px;
    float : left;
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
    background-color: gray;
}
 .product{
       
        width: 345px;
        position: relative;
        top:5px;
        background-color: white;
        height: 600px;
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
      font-family: myriad-pro,"Helvetica Neue",Helvetica,Arial,sans-serif;
       font-weight:bold;
     font-size:18px;
     }
    
    h3{
        
         font-family: 'Helvetica', 'Helvetica-neue';
        font-weight: 700;
         
         margin-top:20px;
         margin-left:13px;
         top: 7px;
position: relative;
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
        margin-top: 5px;
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
    <body>
        <?php include "navbar.php"?>
        <div class="wrapper">
        <div class="search-div">
           Search
        </div>
        
        <div class="products">
            <div class="term">
            You Searched For Apple iPad
        </div>
            <div class="product">
                <img src="images/beats.png">
        <hr size="1">
        <h1 > <?php // echo name?>Beats Solo Premium</h1>
        <p>Starting Discount <?php // echo precent?>5% MSRP</p>
        
       
        <button>See Product</button><h3>Ends: <?php// echo time?>1 Day 18 Min <span class="sec">34 Sec</span></h3>
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
        <div class="sponsor-ad">
            Advertisement
        </div>
        </div>
    </body>
</html>
