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
    <link rel="stylesheet" href="css/contact.css">


   </head>
<body>
        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

        <?php require_once('header.php') ?>

        
  
  <section class="main-section">
    <div class="main-content">  

      <div class="container  fadeInUp" style= "animation-delay: 0.5s;"">
        <span class="big-circle"></span>
        <img src="img/shape.png" class="square" alt="" />
        <div class="form">
          <div class="contact-info">
            <h3 class="title">Let's get in touch</h3>
            <p class="text">
              We value your thoughts, opinions and feedback. It would be an honor for us to hear from you. We're always here to listen and provide assistance.
            </p>
  
            <div class="info">
              <div class="information">
                <img src="https://www.freeiconspng.com/thumbs/location-icon-png/location-outline-icon-9.png" class="icon" alt="" />
                <p> Ayala Mall Fairview Terraces. 2nd Level, Market Finds. In front of Mary Grace.</p>
              </div>
              <div class="information">
                <img src="https://www.freepnglogos.com/uploads/black-email-logo-png-0.png" class="icon" alt="" />
                <p>hiswordgiveslight@gmail.com</p>
              </div>
              <div class="information">
                <img src="https://assets.stickpng.com/thumbs/5a452601546ddca7e1fcbc87.png" class="icon" alt="" />
                <p>09171447283</p>
              </div>
            </div>
  
            <div class="social-media">
              <p>Connect with us :</p>
              <div class="social-icons">
                <a href="https://www.facebook.com/hwglph">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com/hwglph/">
                  <i class="fab fa-instagram"></i>
                  </a>
              </div>
            </div>
          </div>
  
          <div class="contact-form">
            <span class="circle one"></span>
            <span class="circle two"></span>
  
            <form action="index.html" autocomplete="off">
              <h3 class="title">Contact us</h3>
              <div class="input-container">
                <input type="text" name="name" class="input" placeholder = "Username" />
                <label for=""></label>
                <span></span>
              </div>
              <div class="input-container">
                <input type="email" name="email" class="input" placeholder = "Email" />
                <label for=""></label>
                <span></span>
              </div>
              <div class="input-container">
                <input type="tel" name="phone" class="input" placeholder = "Phone"/>
                <label for=""></label>
                <span></span>
              </div>
              <div class="input-container textarea">
                <textarea name="message" class="input">Message</textarea>
                <label for=""></label>
                <span></span>
              </div>
              <input type="submit" value="Send" class="btn" />
            </form>
          </div>
        </div>
      </div>
   

      <?php require_once('footer.php') ?>

    </div>
  </section>

  <script src="home.js"></script>
  

</body>
</html>
