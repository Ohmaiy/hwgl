<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HWGL</title>
    <link rel="icon" type="image/png" sizes="32x32" href="img/logo@2x.png">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/family.css">
</head>
<body>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    
    
    <?php require_once('header.php') ?>


    <section class="main-section">
    <div class="main-content">
      
        <div class="background fadeInUp" style="animation-delay: 0.5s;">
          <div class="container">
            <div class="panel pricing-table">
              
              <div class="pricing-plan">
                <img src="img/starter.png" alt="" class="pricing-img">
                <h2 class="pricing-header">STARTER</h2>
                <ul class="pricing-features">
                  <li class="pricing-features-item">10pcs. Tote Bags 12x14in without zipper</li>
                  <li class="pricing-features-item">10pcs. Tote Bags 12x14in with zipper</li>
                  <li class="pricing-features-item">10pcs. Tote Bags 14x16in without zipper</li>
                  <li class="pricing-features-item">10pcs. Tote Bags 14x16in with zipper</li>
                </ul>
                <span class="pricing-price">950 to 1200 php</span>
              </div>
              
              <div class="pricing-plan">
                <img src="img/premium.png" alt="" class="pricing-img">
                <h2 class="pricing-header">PREMIUM</h2>
                <ul class="pricing-features">
                  <li class="pricing-features-item">30pcs. Tote Bags (Any size)</li>
                  <li class="pricing-features-item">50pcs. wallet (6x4in)</li>
                  <li class="pricing-features-item">30pcs. Drawstring</li>
                  <li class="pricing-features-item">20pcs. Horizontal Bag</li>
                  <li class="pricing-features-item">FREE 2pcs. pouch</li>
                  <li class="pricing-features-item">FREE 5pcs. coin purse</li>
                  <li class="pricing-features-item">FREE 70pcs. waterproof stickers</li>
                  <li class="pricing-features-item">Can choose over 100 designs or customized print</li>
                  <li class="pricing-features-item">Can grab photos from us</li>
                  <li class="pricing-features-item">No Membership Fee</li>
                </ul>
                <span class="pricing-price">11,999 php</span>
              </div>
              
              <div class="pricing-plan">
                <img src="img/advance.png" alt="" class="pricing-img">
                <h2 class="pricing-header">ADVANCE</h2>
                <ul class="pricing-features">
                  <li class="pricing-features-item">20pcs. Tote Bags (Any size)</li>
                  <li class="pricing-features-item">20pcs. wallet (6x4in)</li>
                  <li class="pricing-features-item">20pcs. Drawstring</li>
                  <li class="pricing-features-item">FREE 50pcs. waterproof stickers</li>
                  <li class="pricing-features-item">Can choose over 100 designs or customized print</li>
                  <li class="pricing-features-item">Can grab photos from us</li>
                  <li class="pricing-features-item">No Membership Fee</li>
                </ul>
                <span class="pricing-price">5699 php</span>
              </div>
              
            </div>
          </div>
        </div>

        <div class = "fadeInUp" style="animation-delay: 1s;">
          <h1 class = "section-title">Want to be a reseller?</h1>
          <h2 class="caption-section">Fill out our reseller form! We'll get back to you as soon as we've reviewed your submission.</h2><br>
        </div>
       
        <form action=# id="form"  class = "fadeInUp" style="animation-delay: 1.5s;">
            <h2 class="formhead">Reseller Form</h2>
            <label for="name" class="labels">Full Name*</label>
            <input type="text" id="name" required size="80" placeholder="Juan Tomas jr. II" class="fields">
            <label for="email" class="labels">Email Address</label>
            <input type="email" id="email" placeholder="juantomas@abc.com" size="30" class="fields">
            <label for="contact" class="labels">Contact Number*</label>
            <input type="text" id="contact" pattern="09[0-9]{9}" placeholder="09XXXXXXXXX" class="fields" required>
            <label class="labels">Package of Choice*</label>
            <label>
              <input type="radio" id="starter" name="package" value="starter" required>
              Starter Package
            </label>
            <label>
              <input type="radio" id="advance" name="package" value="advance">
              Advance Package
            </label>
            <label>
              <input type="radio" id="premium" name="package" value="premium">
              Premium Package
            </label>
            <label for="city" class="labels">City*</label>
            <input type="text" id="city" size="50" class="fields" required>
            <label for="region" class="labels">Region/Province*</label>
            <input type="text" id="region" size="50" class="fields" required>
            <label for="zipc" class="labels">Zip code*</label>
            <input type="text" id="zipc" pattern="[0-9]{4}" class="fields">
            <label for="area" class="labels">Target Area of Merchandising:*</label>
            <select name="area" id="area" class="fields" required>
                <option>NCR</option>
                <option>Region I</option>
                <option>Region II</option>
                <option>Region III</option>
                <option>Region IV</option>
                <option>Region V</option>
            </select>
            <label for="ID" class="labels">Proof of Identification*</label>
            <input type="file" accept="image/*" id="ID" class="fields" required>
            <label id="valid">List of VALID IDs: TIN ID, PhilHealth ID, UMID, NBI Clearance, Voter's ID, Postal ID, Driver's License, and Passport.</label>
            <input type="submit" id="sbmt">
        </form>
    <?php require_once('footer.php') ?>
  </div>
</section>

<script src="home.js"></script>
</body>
</html>