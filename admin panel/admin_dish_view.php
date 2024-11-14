<?php
require('admin_dish_view_php.php');
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
    <link rel="stylesheet" href="../style.css?v=<?php echo time(); ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Krub:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Pacifico&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />

    <script
      src="https://kit.fontawesome.com/3d8df9be04.js"
      crossorigin="anonymous"
    ></script>

    <link rel="stylesheet" href="../global.css" />
    <link rel="stylesheet" href="admin_home.css" />
    <link rel="stylesheet" href="admin_dish_view.css" />
  </head>

  <body>
    <div class="background"></div>

    <div class="navbar">
      <div class="name-logo">
        <img src="../images/kk logo.jpg" alt="" />
        <p>KK Natural Food</p>
      </div>
    </div>

    <div class="content">
      <div class="card-section">
        <?php
            if($result->num_rows > 0){ while($data =
        mysqli_fetch_assoc($result)) { ?>
        <div class="card">
          <img
            src="../database_dish_image/<?php echo $data['dish_image']; ?>"
            alt=""
          />
          <div class="price-tag">
            <i class="fa-solid fa-indian-rupee-sign"></i>
            <?php echo $data['dish_price']; ?>
          </div>
          <div class="text-section">
            <p class="item-name">
              <?php echo $data['dish_name']; ?>
            </p>
            <p class="item-description">
              <?php echo $data['dish_description']; ?>
            </p>
            <a
              href="#"
              class="dish_view_deletebtn"
              id="delete"
              data-id="<?php echo $data['dish_id'];?>"
              ><button>Delete dish <i class="fa-solid fa-trash"></i></button
            ></a>
          </div>
        </div>

        <?php
                }
              }
        ?>
        <div class="background4"></div>
      </div>
    </div>
    <div class="delete-popup" id="delete-popup">
      <p class="delete-heading">Delete the Product</p>
      <p class="delete-confirmation">are you sure delete the image</p>
      <div class="delete-button">
        <button id="cancel">Cancel</button>
        <form id="delete-form" method="POST" action="admin_dish_view_php.php">
          <input type="hidden" name="item_id" id="item_id" value="" />
          <button type="submit" id="special-button">Delete</button>
        </form>
      </div>
    </div>
    <div class="background2"></div>
    <div class="bottom-nav">
      <a href="admin_home.php"><i class="fa-solid fa-photo-film"></i></a>
      <a href="#"
        ><i style="color: black" class="fa-solid fa-bell-concierge"></i
      ></a>
      <a href="upload_slider.php"><i class="fa-solid fa-circle-plus"></i></a>
      <a href="upload_dish.php"><i class="fa-solid fa-upload"></i></a>
      <a href="upload_qr_code.php"><i class="fa-solid fa-qrcode"></i></a>
    </div>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>

    <!-- <script src="../script.js"></script> -->
    <script src="delete_script.js"></script>
    <script src="admin_dish_view_script.js"></script>
  </body>
</html>
