<?php
require('orderPage_php.php');

// Fetch QR code path from the database
$stmt = $conn->prepare('SELECT qr_path FROM qr_code LIMIT 1'); $stmt->execute();
$row = $stmt->get_result()->fetch_assoc(); $qrPath = $row['qr_path']; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KK Natural Food</title>
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Krub:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Pacifico&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="global.css" />
    <link rel="stylesheet" href="orderPage.css" />
    <script
      src="https://kit.fontawesome.com/3d8df9be04.js"
      crossorigin="anonymous"
    ></script>
  </head>

  <body>
    <div class="background"></div>

    <div class="navbar">
      <div class="name-logo">
        <img src="images/kk logo.jpg" alt="" />
        <p>KK Natural Food</p>
      </div>
    </div>

    <div class="content">
      <div class="background2"></div>
      <div class="background3"></div>

      <div class="card-section">
        <div class="background4"></div>

        <div class="card">
          <img src="database_dish_image/<?php echo $dishImage; ?>" alt="" />
          <div class="div">
            <div class="quantity-price">
              <div>
                <p class="total-qty">Qty 1</p>
                <button class="quantity-btn">
                  <i class="fa-solid fa-plus"></i>
                </button>
                <button class="quantity-btn">
                  <i class="fa-solid fa-minus"></i>
                </button>
              </div>
              <div class="">
                <p class="quantity-final-price">
                  <i class="fa-solid fa-indian-rupee-sign"></i
                  ><?php echo $dishPrice; ?>
                </p>
              </div>
            </div>
          </div>

          <p class="card-heading"><?php echo $dishName; ?></p>
          <p class="item-description"><?php echo $dishDescription; ?></p>

          <div class="advertise">
            <img src="images/delivery-boy 1.svg" alt="" />
            <div class="punchline">
              <p>Cash on delivery facility is available</p>
              <p>কেছ অন ডেলিভাৰীৰ সুবিধা উপলব্ধ</p>
            </div>
          </div>
          <div class="button-section">
            <a href=""><button id="order-now">Order Now</button></a>
            <div class="social-logo">
              <a href=""><i class="fa-brands fa-square-whatsapp"></i></a>
              <a href=""><i class="fa-solid fa-square-phone"></i></a>
            </div>
          </div>
        </div>

        <!-- <div class="card">
          <img src="database_dish_imageIMG-20230928-WA0001.jpg" />
          <div class="div">
            <div class="quantity-price">
              <div>
                <p class="total-qty">Qty 1</p>
                <button class="quantity-btn">
                  <i class="fa-solid fa-plus"></i>
                </button>
                <button class="quantity-btn">
                  <i class="fa-solid fa-minus"></i>
                </button>
              </div>
              <div class="">
                <p class="quantity-final-price">
                  <i class="fa-solid fa-indian-rupee-sign"></i>1125
                </p>
              </div>
            </div>
          </div>

          <p class="card-heading">
            Momo Cash on delivery facility is availableCash on delivery facility
            is availableCash on delivery facility is available
          </p>
          <p class="item-description">kljklsjldfjlsdf;jdsjf</p>

          <div class="advertise">
            <img src="images/delivery-boy 1.svg" alt="" />
            <div class="punchline">
              <p>Cash on delivery facility is available</p>
              <p>কেছ অন ডেলিভাৰীৰ সুবিধা উপলব্ধ</p>
            </div>
          </div>
          <div class="button-section">
            <a href=""><button id="order-now">Order Now</button></a>
            <div class="social-logo">
              <a href=""><i class="fa-brands fa-square-whatsapp"></i></a>
              <a href=""><i class="fa-solid fa-square-phone"></i></a>
            </div>
          </div>
        </div> -->
      </div>

      <!-- <div class="qr-popup" id="popup-box">
        <p>Make your payment by scanning this barcode</p>
        <p>এই বাৰক'ড স্কেন কৰি আপোনাৰ পেমেণ্ট কৰক</p>

        <div class="qr-img"><img src="qr_image/" alt="" /></div>
        
        <p>
          Share your paid screenshot on WhatsApp. by clicking on the below
          button.
        </p>
        <p>
          তলৰ বুটামটোত ক্লিক কৰি WhatsApp ত আপোনাৰ পেইড স্ক্ৰীণশ্বট শ্বেয়াৰ কৰক
        </p>
        <div class="delivery-address">
          <p>Share delivery address on WhatsApp</p>
          <div class="delivery-address-details">Name</div>
          <div class="delivery-address-details">Mobile Number</div>
          <div class="delivery-address-details">Live Location</div>
          <div class="delivery-address-details">Address</div>
        </div>

        <div class="delivery-address">
          <p>ডেলিভাৰীৰ ঠিকনা WhatsApp ত শ্বেয়াৰ কৰক</p>
          <div class="delivery-address-details">Name</div>
          <div class="delivery-address-details">Mobile Number</div>
          <div class="delivery-address-details">Live Location</div>
          <div class="delivery-address-details">Address</div>
        </div>

        <button id="share-screenshot">Share screenshot on WhatsApp</button>
      </div> -->

      <div class="qr-popup" id="popup-box">
        <p>Make your payment by scanning this barcode</p>
        <p>এই বাৰক'ড স্কেন কৰি আপোনাৰ পেমেণ্ট কৰক</p>
        <div class="cancel" id="popup-cancel">
          <i class="fa-solid fa-xmark"></i>
        </div>
        <!-- QR Image dynamically updated by JavaScript -->
        <div class="qr-img">
          <img id="qr-code" src="" alt="" />
        </div>

        <p>
          Share your paid screenshot on WhatsApp by clicking on the button
          below.
        </p>
        <p>
          তলৰ বুটামটোত ক্লিক কৰি WhatsApp ত আপোনাৰ পেইড স্ক্ৰীণশ্বট শ্বেয়াৰ কৰক
        </p>
        <div class="delivery-address">
          <p>Share delivery address on WhatsApp</p>
          <div class="delivery-address-details">Name</div>
          <div class="delivery-address-details">Mobile Number</div>
          <div class="delivery-address-details">Live Location</div>
          <div class="delivery-address-details">Address</div>
        </div>

        <button id="share-screenshot">Share screenshot on WhatsApp</button>
      </div>

      <div class="company-description">
        <div class="our-mission">
          <p class="our-mission-heading">Our Mission</p>
          <p class="our-mission-paragraph">
            At KK Natural Food, our mission is to celebrate and promote the rich
            diversity of natural and wholesome foods. We are dedicated to
            providing our customers with fresh, high-quality ingredients and
            recipes that reflect the true essence of nature’s bounty. Through
            innovation and sustainability, we aim to inspire healthier
            lifestyles and connect people with the purest flavors of nature.
          </p>
        </div>

        <div class="contact-us">
          <p class="contact-us-heading">Contact Us</p>
          <div>
            <p class="contact-us-paragraph">
              <a href=""
                ><img src="images/At sign.svg" alt="" />demoemail@gmail.com</a
              >
            </p>
            <p class="contact-us-paragraph">
              <a href=""
                ><img src="images/Outgoing Call.svg" alt="" />8011903748</a
              >
            </p>
            <p class="contact-us-paragraph">
              <a href=""><img src="images/WhatsApp.svg" alt="" />8011903748</a>
            </p>
          </div>
          <p class="contact-us-heading">Address</p>
          <div>
            <p class="contact-us-paragraph">
              <a href="">
                <img id="special-vector" src="images/Place Marker.svg" alt="" />
                82H3+WW5, Howly - Barpeta Rd, Muslimpatty, Barpeta, Assam
                781301</a
              >
            </p>
          </div>
        </div>
      </div>
      <div class="profile">
        <p class="profile-heading">KK Natural Foood</p>
        <p class="profile-sub-heading">Follow on Social Media</p>
        <div class="social-logo">
          <a href=""><img src="images/Facebook.svg" alt="facebook" /></a>
          <a href="https://www.instagram.com/khairul.khan1999?igsh=ZGUzMzM3NWJiOQ=="><img src="images/Instagram.svg" alt="instagram" /></a>
          <a href=""><img src="images/Internet.svg" alt="google" /></a>
          <a href=""><img src="images/LinkedIn Circled.svg" alt="linkedin"/></a>
          <a href=""><img src="images/Xbox X.svg" alt="twitter" /></a>
          <a href=""><img src="images/WhatsApp.svg" alt="whatsapp" /></a>
          <a href="https://youtube.com/@khairulkhan1999?si=sa-fXHtrhQhm6wo5"><img src="" alt="youtube"></a>
        </div>
      </div>

      <div class="promotion">

        <p class="promotion-name">Developed by NeeYor Tech</p>
        <a href=""><p class="promotion-web">www.neyortech.in</p></a>
        <p class="promotion-link">9365511258 contact with NeeYor Tech team</p>
        <div class="promotion-social-logo">
          <a href=""><img src="images/Facebook.svg" alt="" /></a>
          <a href=""><img src="images/Instagram.svg" alt="" /></a>
          <a href=""><img src="images/Internet.svg" alt="" /></a>
          <a href=""><img src="images/LinkedIn Circled.svg" alt="" /></a>
          <a href=""><img src="images/Xbox X.svg" alt="" /></a>
          <a href=""><img src="images/WhatsApp.svg" alt="" /></a>
          <a href=""><img src="" alt="playstore"></a>
        </div>
      </div>

      <div class="copyright">
        <p>© 2024 KK Natural Food. All Rights Reserved.</p>
      </div>
    </div>

    <!-- <script>
      
      const popupshowbtn = document.getElementById("order-now");
      console.log(popupshowbtn);
      const share = document.getElementById("share-screenshot");

      popupshowbtn.addEventListener("click", function (event) {
        event.preventDefault();
        const popupmenu = document.getElementById("popup-box");

        popupmenu.style.display = "block";
      });

      share.addEventListener("click", function (event) {
        event.preventDefault();

        
        const dishName = <?php echo json_encode($dishName); ?>;
        const unitPrice = parseFloat(<?php echo json_encode($dishPrice); ?>);
        const quantity = parseInt(document.querySelector(".total-qty").textContent.split(' ')[1], 10);
        const finalPrice = unitPrice * quantity;


        const message =
          `Hello!\n\n` +
          `Dish Name: ${dishName}\n` +
          `Quantity: ${quantity}\n` +
          `Final Price: ₹${finalPrice.toFixed(2)}\n\n` +
          `Please share your delivery details:\n` +
          `Name:\n` +
          `Mobile Number:\n` +
          `Live Location:\n` +
          `Address:\n\n` +
          `Thank you!`;

        const phoneNumber = "9365511258";

        const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(
          message
        )}`;

        window.open(whatsappUrl, "_blank");
      });
    </script> -->

    <script>
      // Fetch QR path from PHP
      const qrPath = "<?php echo $qrPath; ?>";

      // Set QR code image source
      document.getElementById('qr-code').src = 'qr_image/' + qrPath;

      const popupshowbtn = document.getElementById("order-now");
      const share = document.getElementById("share-screenshot");

      popupshowbtn.addEventListener("click", function (event) {
        event.preventDefault();
        const popupmenu = document.getElementById("popup-box");
        popupmenu.style.display = "block";
      });

      share.addEventListener("click", function (event) {
        event.preventDefault();

        const dishName = <?php echo json_encode($dishName); ?>;
        const unitPrice = parseFloat(<?php echo json_encode($dishPrice); ?>);
        const quantity = parseInt(document.querySelector(".total-qty").textContent.split(' ')[1], 10);
        const finalPrice = unitPrice * quantity;

        const message =
          `Hello!\n\n` +
          `Dish Name: ${dishName}\n` +
          `Quantity: ${quantity}\n` +
          `Final Price: ₹${finalPrice.toFixed(2)}\n\n` +
          `Please share your delivery details:\n` +
          `Name:\n` +
          `Mobile Number:\n` +
          `Live Location:\n` +
          `Address:\n\n` +
          `Thank you!`;

        const phoneNumber = "918011903748";

        const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;

        window.open(whatsappUrl, "_blank");
      });
    </script>
    <script>
            const phpData = {
        unitPrice: <?php echo json_encode($dishPrice); ?>
      };
    </script>

    <script>
      const cros = document.getElementById("popup-cancel");
      const popup = document.getElementById("popup-box");
      cros.addEventListener("click", function () {
        popup.style.display = "none";
      });
    </script>

    <script src="qtyhandle.js"></script>
  </body>
</html>
