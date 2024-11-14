<?php
require('index_php.php');
?>

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

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Krub:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Pacifico&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Itim&family=Krub:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Pacifico&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Itim&family=Krub:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Pacifico&family=Roboto+Slab:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script
    src="https://kit.fontawesome.com/3d8df9be04.js"
    crossorigin="anonymous"
  ></script>
    <link rel="stylesheet" href="global.css" />
    <!--<link rel="stylesheet" href="style.css" />-->
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>" />

    <style>
.rating ion-icon {
  font-size: 24px; 
  color: var(--white); 
}

.rating ion-icon.filled {
  color: var(--primary-100); 
}

      </style>
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
      <section id="tranding">
        <div class="container">
          <div class="swiper tranding-slider">
            <div class="swiper-wrapper">
              <!-- Slide-start -->

              <?php
              if($stmt1_result->num_rows > 0){ 
                while($data =
              mysqli_fetch_assoc($stmt1_result)){ ?>

              <div class="swiper-slide tranding-slide">
                <div class="tranding-slide-img">
                  <img
                    src="database_image/<?php echo $data['slider_image']; ?>"
                    alt="Tranding"
                  />
                </div>
                <div class="tranding-slide-content">
                  <!-- <h1 class="food-price">Rs-200</h1> -->
                  <div class="tranding-slide-content-bottom">
                    <h2 class="food-name"><?php echo $data['slider_name']; ?></h2>
                    <h3 class="food-rating">
                      <span><?php echo $data['rating']; ?>.0</span>
                      <div class="rating">
                        <?php
                        $rating = $data['rating'];
                        for ($i = 1; $i <= 5; $i++) {
                            $starClass = $i <= $rating ? 'filled' : '';
                            echo "<ion-icon name='star' class='$starClass'></ion-icon>";
                        }
                        ?>
                      </div>
                    </h3>
                  </div>
                </div>
              </div>
              <?php
                }
              }
              ?>
              <!-- Slide-end -->
            </div>

            <div class="tranding-slider-control">
              <div class="swiper-button-prev slider-arrow">
                <ion-icon name="arrow-back-outline"></ion-icon>
              </div>
              <div class="swiper-button-next slider-arrow">
                <ion-icon name="arrow-forward-outline"></ion-icon>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </section>

      <!-- Backup of above section -->
      <!-- <div class="backup-section">
        <div class="carousal-box">
          <div
            id="carouselExampleSlidesOnly"
            class="carousel slide"
            data-bs-ride="carousel"
          >
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="images/tranding-food-6.png"
                  class="d-block w-100"
                  alt="..."
                />
              </div>
              <div class="carousel-item">
                <img
                  src="images/tranding-food-5.png"
                  class="d-block w-100"
                  alt="..."
                />
              </div>
              <div class="carousel-item">
                <img src="" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="" class="d-block w-100" alt="..." />
              </div>
              v
              <div class="carousel-item">
                <img src="" class="d-block w-100" alt="..." />
              </div>
            </div>
          </div>
        </div>
      </div> -->

      <div class="background2"></div>
      <div class="heroic">
        <div class="sub-heroic">
          <img src="images/delivery-boy 1.svg" alt="" />
          <p>Fast Delivery</p>
        </div>
        <div class="sub-heroic">
          <img src="images/quality 1.svg" alt="" />
          <p>Good Quality</p>
        </div>
        <div class="sub-heroic">
          <img src="images/cooking 1.svg" alt="" />
          <p>Clean Recipes</p>
        </div>
        <div class="sub-heroic">
          <img src="images/quality 1.svg" alt="" />
          <p>Cash on Delivery</p>
        </div>
        <!-- <div class="sub-heroic">
          <img src="images/delivery-boy 1.svg" alt="" />
          <p>Happy Customer</p>
        </div> -->
      </div>
      <div class="heroic2">
        <p>
          KK Natural Food 82H3+WW5, Howly - Barpeta Rd, Muslimpatty, Barpeta,
          Assam 781301
        </p>
      </div>

      <div class="heroic3">
        <div>
          <p class="heroic3-heading">
            <img src="images/Place Marker.svg" alt="" />Place Of Delivery
          </p>
        </div>
        <p class="heroic3-sub-heading">
          Sundaridia , BT College , Low College , MC College, FUAAMC, All
          BarPeta Town, DangarKuchi, Bera Gaon, Muslim Potti, All BarPeta Town,
          DangarKuchi, Bera Gaon, Muslim Potti, All BarPeta Town, Others Area
        </p>
      </div>
      <div class="background3"></div>
      <div class="card-section">
        <?php
      if($stmt2_result->num_rows > 0){
          while($data =
        $stmt2_result->fetch_assoc()){ $dishId = $data['dish_id'];
        // $dishName =
        // $data['dish_name']; $dishDescription = $data['dish_description'];
        // $dishPrice = $data['dish_price']; $dishImage = $data['dish_image'];
        // $_SESSION['dish_id'] = $dishId; $_SESSION['dish_name'] = $dishName;
        // $_SESSION['dish_description'] = $dishDescription;
        // $_SESSION['dish_price'] = $dishPrice; $_SESSION['dish_image'] =
        // $dishImage; 
        ?>

        <div class="card">
          <img
            src="database_dish_image/<?php echo $data['dish_image']; ?>"
            alt=""
          />
          <div class="price-tag">
            <p><i class="fa-solid fa-indian-rupee-sign"></i> <?php echo $data['dish_price']; ?></p>
          </div>
          <div class="text-section">
            <p class="item-name"><?php echo $data['dish_name']; ?></p>
            <p class="item-description">
              <?php echo $data['dish_description']; ?>
            </p>
            <a href="orderPage.php?dish_id=<?php echo $dishId; ?>"><button>Order Now</button></a>
          </div>
        </div>

        <?php
        
        }
      }
        ?>
        <div class="background4"></div>

        
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
                ><img src="images/At sign.svg" alt="" /> demoemail@gmail.com</a
              >
            </p>
            <p class="contact-us-paragraph">
              <a href=""
                ><img src="images/Outgoing Call.svg" alt="" /> 8011903748</a
              >
            </p>
            <p class="contact-us-paragraph">
              <a href=""><img src="images/WhatsApp.svg" alt="" /> 8011903748</a>
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
        <div class="background5"></div>
      </div>
      <div class="profile">
        <p class="profile-heading">KK Natural Foood</p>
        <p class="profile-sub-heading">Follow on Social Media</p>
        <div class="social-logo">
          <a href=""><img src="images/Facebook.svg" alt="facebook" /></a>
          <a href=""><img src="images/Instagram.svg" alt="instagram" /></a>
          <a href=""><img src="images/Internet.svg" alt="google" /></a>
          <a href=""
            ><img src="images/LinkedIn Circled.svg" alt="linkedin"
          /></a>
          <a href=""><img src="images/Xbox X.svg" alt="twitter" /></a>
          <a href="https://wa.me/+918011903748"><img src="images/WhatsApp.svg" alt="whatsapp" /></a>
          <!-- <a href=""><img src="" alt="playstore"></a>
          <a href=""><img src="" alt="youtube"></a> -->
        </div>
      </div>


      <div class="customer-feedback">
        <div class="div-1">
          <div class="carousal-box">
            <div
              id="carouselExampleSlidesOnly"
              class="carousel slide"
              data-bs-ride="carousel"
            >
              <div class="carousel-inner">
              <?php
              // Fetch data from database
              $data = mysqli_fetch_assoc($stmt5_result);
              $rating = $data['rating'];
              ?>
              
              <div class="carousel-item active">
                <div class="feedback-display">
                  <div class="img">
                    <img src="images/kk logo.png" alt="" />
                  </div>
                  <p class="feedback-heading"><?php echo htmlspecialchars($data['customer_name']); ?></p>
                  <div class="rating">
                    <?php
                    for($i = 1; $i <= 5; $i++){
                      $starClass = $i <= $rating ? 'filled' : '';
                      echo "<ion-icon name='star' class='$starClass'></ion-icon>";
                    }
                    ?>
                  </div>
                  <p class="feedback-description">
                    <?php echo htmlspecialchars($data['review_description']); ?>
                  </p>
                </div>
              </div>





              <?php while ($data = mysqli_fetch_assoc($stmt4_result)): ?>
    <div class="carousel-item">
        <div class="feedback-display">
            <div class="img">
                <img src="images/kk logo.png" alt="" />
            </div>
            <p class="feedback-heading"><?php echo htmlspecialchars($data['customer_name']); ?></p>
            <div class="rating">
                <?php
                $rating = $data['rating'];
                for ($i = 1; $i <= 5; $i++) {
                    $starClass = $i <= $rating ? 'filled' : '';
                    echo "<ion-icon name='star' class='$starClass'></ion-icon>";
                }
                ?>
            </div>
            <p class="feedback-description">
                <?php echo htmlspecialchars($data['review_description']); ?>
            </p>
        </div>
    </div>
<?php endwhile; ?>


              </div>
            </div>
          </div>
        </div>

        <div class="div-2">
        <div class="feedback-form">
  <p>Give your Feedback</p>
  <form id="feedback-form" action="save_feedback_index.php" method="POST">
    <div class="customer-rating">
      <input type="radio" id="star5" name="rating" value="5" />
      <label for="star5"><ion-icon name="star"></ion-icon></label>

      <input type="radio" id="star4" name="rating" value="4" />
      <label for="star4"><ion-icon name="star"></ion-icon></label>

      <input type="radio" id="star3" name="rating" value="3" />
      <label for="star3"><ion-icon name="star"></ion-icon></label>

      <input type="radio" id="star2" name="rating" value="2" />
      <label for="star2"><ion-icon name="star"></ion-icon></label>

      <input type="radio" id="star1" name="rating" value="1" />
      <label for="star1"><ion-icon name="star"></ion-icon></label>
    </div>
    <input type="text" name="name" placeholder="Name" required />
    <input type="text" name="feedback" placeholder="Feedback" required />
    <button type="submit">Submit</button>
  </form>
</div>
        </div>
      </div>
      
      <br>
       <br>
        <br>
         <br>
          <br>
           <br>
            <br>
             <br>
              <br>

      <div class="promotion">
        <div class="promotion-logo"><img src="images/logo.png" alt="" /></div>

        <p class="promotion-name">Developed by NeeYor Tech</p>
        <a href="https://neeyortech.in/"><p class="promotion-web">www.neyortech.in</p></a>
        <p class="promotion-link">9365511258 contact with NeeYor Tech team</p>
        <!--<div class="promotion-social-logo">-->
        <!--  <a href=""><img src="images/Facebook.svg" alt="" /></a>-->
        <!--  <a href=""><img src="images/Instagram.svg" alt="" /></a>-->
        <!--  <a href=""><img src="images/Internet.svg" alt="" /></a>-->
        <!--  <a href=""><img src="images/LinkedIn Circled.svg" alt="" /></a>-->
        <!--  <a href=""><img src="images/Xbox X.svg" alt="" /></a>-->
        <!--  <a href=""><img src="images/WhatsApp.svg" alt="" /></a>-->
        <!--  <a href=""><img src="images/.svg" alt="" /></a>-->
        <!--</div>-->
      </div>
      

      <div class="copyright">
        <p>© 2024 KK Natural Food. All Rights Reserved.</p>
      </div>
    </div>

    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
    <script src="handle_feedback_index.js"></script>
  </body>
</html>
