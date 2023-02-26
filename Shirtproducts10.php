<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HWGL</title>
    <link rel="icon" type="image/png" sizes="32x32" href="img/logo@2x.png">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/products.css">


   </head>
<body>
        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

        <?php require_once('header.php') ?>

        
  <section class="main-section">
    <div class="main-content">
      <div id="content-wrapper" class = "fadeInUp" style= "animation-delay: 1s;">

        <div class="column">            
            
                <img id= featured src="img/WM/1.png">
    
            <div id="slide-wrapper">
            <img id="slideLeft" class="arrow" src="img/arrowleft.png">
                
                <div id="slider">
                    
                    <img class="thumbnail active" src= "img/shirts/WM1.png">
                    <img class="thumbnail active" src= "img/shirts/WM2.png">
                    <img class="thumbnail active" src= "img/shirts/WM3.png">
                    <img class="thumbnail active" src= "img/shirts/WM4.png">
                    <img class="thumbnail active" src= "img/shirts/WM5.png">
                    
                </div>
                <img id="slideRight" class="arrow" src="img/arrowright.png">
            </div>
            <div class = "breadcrumb2">
            <?php include('productViewLink/breadS.php'); ?>
            <span class="active">Way Maker</span>
            </div>
        </div>
        <div class="col-6">
            <div class = "breadcrumb">
            <?php include('productViewLink/breadS.php'); ?>
            <span class="active">Way Maker</span>
            </div>
    
            <div class="product">
                <div class="product-title">
                    <h2>Statement Shirt - Way Maker </h2>
                </div>
    
                <div class="product-price">
                    <span id = "price" class="offer-price">₱250.00</span>
                    <span class="sale-price"></span>
                </div>
    
                <div class="product-details">
                    <h3>Description</h3>
                    <p>The "Way Maker" statement shirt is a tribute to the greatness of God. Show the world your faith and make a statement today! </p>
                </div>
                <br>
                <div class="product-size">
                    <h4>Size</h4>
                    <button id = "but1" class = "size-layout" onclick="size1()">Small</button>
                    <button class = "size-layout2" onclick="size2()">Medium</button>
                </div>
     
                <span class="divider"></span>
                
                <h5>Visit us on our shops:</h5>
                
                <br>
                <div class="product-btn-group">
                    <a href="https://www.facebook.com/hwglph"><div class="button buy-now"><i class='fa-brands fa-facebook' ></i> Facebook</div></a>
                    <a href="https://shopee.ph/STATEMENT-SHIRT-Way-Maker-i.300423350.4448507751?sp_atk=ed82feee-bef7-47a4-b8e8-b2b5d82823de&xptdk=ed82feee-bef7-47a4-b8e8-b2b5d82823de"><div class="button add-cart"><i class='bx bxs-cart' ></i> Shopee</div></a>
                    
                </div>
            </div>
        </div>
    </div>
    
    <?php require_once('footer.php') ?>

    </div>
  </section>

  <script src="home.js"></script>

  <script type="text/javascript">
    let thumbnails = document.getElementsByClassName('thumbnail')

    let activeImages = document.getElementsByClassName('active')

    for (var i=0; i < thumbnails.length; i++){

        console.log(activeImages)
        thumbnails[i].addEventListener('mouseover', function(){
            console.log(activeImages)

            

            if (activeImages.length > 0){

                activeImages[0].classList.remove('active')
            }
            

            this.classList.add('active')
            document.getElementById('featured').src = this.src
        })
    }

    let buttonRight = document.getElementById('slideRight');
    let buttonLeft = document.getElementById('slideLeft');

    buttonLeft.addEventListener('click', function(){
        document.getElementById('slider').scrollLeft -= 180
    })

    buttonRight.addEventListener('click', function(){
        document.getElementById('slider').scrollLeft += 180
    })

    function size2() {
    document.getElementById("price").innerHTML = "₱109.00";  
    document.getElementById("price").style.color = "rgb(234 172 131)";   
 


    }

    function size1() {
    document.getElementById("price").innerHTML = "₱99.00";
    document.getElementById("price").style.color = "#ab8871";   


    }


</script>
</body>
</html>