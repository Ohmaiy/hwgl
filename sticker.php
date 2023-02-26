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
            
                <img id= featured src="img/others/s1.png">
    
            <div id="slide-wrapper">
                <img id="slideLeft" class="arrow" src="img\arrowleft.png">
                
                <div id="slider">
                    
                    <img class="thumbnail active" src="img/others/s1.png">
                    <img class="thumbnail" src="img/others/(sticker.html)2.png">
                    <img class="thumbnail" src="img/others/(sticker.html)3.png">
                    <img class="thumbnail" src="img/others/(sticker.html)4.png">
                    <img class="thumbnail" src="img/others/(sticker.html)5.png">
                    <img class="thumbnail" src="img/others/(sticker.html)6.png">
                    <img class="thumbnail" src="img/others/(sticker.html)7.png">
                    <img class="thumbnail" src="img/others/(sticker.html)8.png">
                    <img class="thumbnail" src="img/others/(sticker.html)9.png">
                </div>
                <img id="slideRight" class="arrow" src="img\arrowright.png">
            </div>
            <div class="breadcrumb2">
                <span><a class = "home" href="home.php">Home </a></span>
                <span><a class = "cat" href="category_others.php"> Others </a></span>
                <span class="active">Assorted Design Glossy Vinyl Sticker Set</span>
            </div>
        </div>
        <div class="col-6">
            <div class="breadcrumb">
                <span><a class = "home" href="home.php">Home</a></span>
                <span><a class = "cat" href="category_others.php">Others</a></span>
                <span class="active">Stickers</span>
            </div>
    
            <div class="product">
                <div class="product-title">
                    <h2>Assorted Design Glossy Vinyl Sticker Set</h2>
                </div>
    
                <div class="product-price">
                    <span id = "price" class="offer-price">₱60.00</span>
                    <span class="sale-price"></span>
                </div>
    
                <div class="product-details">
                    <h3>Description</h3>
                    <p>With a variety of designs and sizes to choose from, these stickers are made from high-quality vinyl with a glossy finish that is both durable and water-resistant. The vibrant colors and eye-catching designs make them perfect for decorating laptops, water bottles, notebooks, and more.</p>
                </div>
                <br>
                <div class="product-size">

                </div>
     
                <span class="divider"></span>
                
                <h5>Visit us on our shops:</h5>
                
                <br>
                <div class="product-btn-group">
                    <a href="https://www.facebook.com/hwglph"><div class="button buy-now"><i class='fa-brands fa-facebook' ></i> Facebook</div></a>
                    <a href="https://shopee.ph/10pcs.-HQ-Customized-Assorted-Trendy-Waterproof-Laptop-Planner-Tumbler-Glossy-Vinyl-Sticker-Set-i.300423350.20417941114?sp_atk=e79c45ec-5a85-4d3e-ab38-e5607ec13a75&xptdk=e79c45ec-5a85-4d3e-ab38-e5607ec13a75"><div class="button add-cart"><i class='bx bxs-cart' ></i> Shopee</div></a>
                    <a href="https://www.lazada.com.ph/shop/hwglph?path=index.htm&inWeexShop=true&lang=en-PH&channelSource=defaultChannel&dsource=share&laz_share_info=21205686_5_8000_510043872380_21206686_null&laz_token=33cb464307a4e5e93e1506421a1f7ed9&fbclid=IwAR0vXk_1ReHSedtYVdsL2sFWDCzX_5moiOJg3L84wWBk0KBwAdAJEqct82o&exlaz=e_yjOuaBgsXf%2FGip8qo24MCZFmNCmP6gU%2FnnWa525VocjCXvTKdNAtBQL9CVyKt9ooGS5d%2BCcBXmGoOv0KXkKaWlcy8SdA3s3YD3WnASIas1Y%3D&sub_aff_id=social_share&sub_id2=21205686&sub_id3=510043872380&sub_id6=CPI_EXLAZ"><div class="button add-cart"><i class='bx bxs-cart-add' ></i> Lazada</div></a>
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
    document.getElementById("price").innerHTML = "₱145.00";  
    document.getElementById("price").style.color = "rgb(234 172 131)";   
 


    }

    function size1() {
    document.getElementById("price").innerHTML = "₱99.00";
    document.getElementById("price").style.color = "#ab8871";   


    }


</script>
</body>
</html>