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
    <link rel="stylesheet" href="css/category.css">
    

   </head>
<body>
        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

        <?php require_once('header.php') ?>

        
  
          <section class="main-section">
            <div class = "section1 fadeInUp"  style="animation-delay: 0.5s;">
              <h1 class = "abt">Hats</h1>
              <h2>Anything that captures you?</h2>
            </div>

            <div class="main-content">
            <div class="section2 fadeInUp" style="animation-delay: 1.5s;">
              <a class="card" href="hat.php">
                <div class="card-background" style="background-image: url(img/others/1.png)"></div>
                <div class="card-content">
                  <p class="card-category text">Hats</p>
                  <h3 class="card-heading text">Reversible Kiddie Bucket Hat</h3>
                </div>
              </a>
              <a class="card" href="hat2.php">
                <div class="card-background" style="background-image: url(img/others/2.jpg)"></div>
                <div class="card-content">
                  <p class="card-category text">Hats</p>
                  <h3 class="card-heading text">Reversible Bucket Hats</h3>
                </div>
              </a>
            </div>
            </div>
          
      <?php require_once('footer.php') ?>

       
      </section>

  <script src="home.js"></script>

</body>
</html>
