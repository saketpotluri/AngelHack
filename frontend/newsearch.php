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
    height : 500px;
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
                Product
            </div>
            <div class="product">
                Product
            </div>
            <div class="product">
                Product
            </div>
            <div class="product">
                Product
            </div>
        </div>
        <div class="sponsor-ad">
            Advertisement
        </div>
        </div>
    </body>
</html>
