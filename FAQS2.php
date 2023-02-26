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
    <link rel="stylesheet" href="css/FAQS2.css">





   </head>
<body>
        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

        <?php require_once('header.php') ?>

        
  <section class="main-section">
    <div class="main-content">
      <div class = "fadeInUp" style="animation-delay: 0.5s; padding-top:5%">
        <h1>FAQS</h1>
        <h2 class = "section-title">Frequently Asked Questions</h2>
        <p class = "caption-section" style="margin-top:1%">We have compiled a comprehensive list of frequently asked questions that cover a wide range of topics.</p>
      </div>
        <div class = "section1 fadeInUp" style="animation-delay: 1s;">
          <div class="container">
            <h2>Products</h2>
            <div class="accordion">
              <div class="accordion-item">
                <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">Where can I purchase your products?</span><span class="icon" aria-hidden="true"></span></button>
                <div class="accordion-content">
                  <p>You can shop with us online through Shopee, Lazada, TikTok, Facebook, and Instagram. And for those who prefer to shop in-store, we have a physical store located at Ayala Mall Fairview Terraces, Market Finds on the 2nd level.</p>
                </div>
              </div>
              <div class="accordion-item">
                <button id="accordion-button-6" aria-expanded="false"><span class="accordion-title">Do you have a physical store that customers can visit in person?</span><span class="icon" aria-hidden="true"></span></button>
                <div class="accordion-content">
                  <p>Yes. We are located at Ayala Mall Fairview Terraces, Market Finds. 2nd Level.</p>
                </div>
              </div>
              <div class="accordion-item">
                <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">How to inquire for your customized designs?</span><span class="icon" aria-hidden="true"></span></button>
                <div class="accordion-content">
                  <p>You can visit our 'Contact Us' page on our website, send us a message through our Facebook or Instagram accounts or use the chat function on our Shopee page, and we will be happy to assist you with your inquiry.</p>
                </div>
              </div>
              <div class="accordion-item">
                <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">Do you also have ready-made printed designs?</span><span class="icon" aria-hidden="true"></span></button>
                <div class="accordion-content">
                  <p>Yes, our ready made printed designs are available in our in-store shop.</p>
                </div>
              </div>
              <div class="accordion-item">
                <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">Do you also have ready-made printed designs?</span><span class="icon" aria-hidden="true"></span></button>
                <div class="accordion-content">
                  <p>Yes, our selection of ready-made printed designs are available for purchase in our physical store location. So, you can stop by and browse our selection and take home your favorite designs today.</p>
                </div>
              </div>
            </div>

            <h2>Shipping</h2>
            <div class="accordion">
              <div class="accordion-item">
                <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">What are the shipping and delivery options offered by your business?</span><span class="icon" aria-hidden="true"></span></button>
                <div class="accordion-content">
                  <p>We currently accept delivery through J&T, Lalamove, and Grab, making it easy for you to receive your order in a timely and efficient manner.</p>
                </div>
              </div>
              <div class="accordion-item">
                <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">Do you offer international shipping for your products or services?</span><span class="icon" aria-hidden="true"></span></button>
                <div class="accordion-content">
                  <p>We currently do not ship our products internationally.</p>
                </div>
              </div>
            </div>

            <h2>Store</h2>
            <div class="accordion">
              <div class="accordion-item">
                <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">What are the hours of operation for your store?</span><span class="icon" aria-hidden="true"></span></button>
                <div class="accordion-content">
                  <p>Our physical store is open to serve you during the following hours: Monday to Thursday from 10am to 9pm, and Friday to Sunday from 10am to 10pm. </p>
                </div>
              </div>
              <div class="accordion-item">
                <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">What are your payment methods?</span><span class="icon" aria-hidden="true"></span></button>
                <div class="accordion-content">
                  <p>We accept Cash and Gcash as a payment method for our products when shopping in-store. For online shoppers, we also offer Cash on Delivery (COD) and Bank Transfer as payment options.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class = "last-section">
          <h3 class = "section-title">Can't find what you're looking for?</h3>
          <p class = "second-text">Feel free to drop your question here instead.<i class="fa-solid fa-hand-back-point-down"></i></p>
          <div class="text-box">
            <a href="contact.html" class="btn btn-white btn-        animate">Contact Us</a>
          </div>
        </div>
        
        <?php require_once('footer.php') ?>

    </div>
  </section>

  <script src="home.js"></script>
  <script src="FAQS2.js"></script>

  

</body>
</html>
