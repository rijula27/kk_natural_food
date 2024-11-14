<?php
require('admin_home_php.php');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KK Natural Food</title>
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="../style.css?v=<?php echo time(); ?>" />
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
  </head>

  <body>
    <div class="background"></div>

    <div class="navbar">
      <div class="name-logo">
        <img src="../images/kk logo.jpg" alt="" />
        <p>KK Natural Food</p>
      </div>
      <!-- <a href="logout.php">logout</a> -->
    </div>

    <div class="content">
      <div class="sub-content">
        <div class="background2"></div>

        <?php
            if($result->num_rows > 0){ while($data =
        mysqli_fetch_assoc($result)) { ?>
        <div class="dish-card">
          <img
            src="../database_image/<?php echo $data['slider_image']; ?>"
            alt=""
          />
          <div class="overlay">
            <p class="item-name"></p>
            <p class="item-price">
              <?php echo $data['slider_name'];?>
            </p>
            <button
              class="dish-card-delete-button"
              data-id="<?php echo $data['slider_id']; ?>"
            >
              <i class="fa-solid fa-trash"></i>
            </button>
          </div>
        </div>
        <?php
                }
            }
            ?>
      </div>
    </div>

    <div class="delete-popup" id="delete-popup">
      <p class="delete-heading">Delete the Product</p>
      <p class="delete-confirmation">
        Are you sure you want to delete this item?
      </p>
      <div class="delete-button">
        <button id="cancel">Cancel</button>
        <form id="delete-form" method="POST" action="admin_home_php.php">
          <input type="hidden" name="item_id" id="item_id" value="" />
          <button type="submit" id="special-button">Delete</button>
        </form>
      </div>
    </div>

    <div class="bottom-nav">
      <a href="#"
        ><i style="color: black" class="fa-solid fa-photo-film"></i
      ></a>
      <a href="admin_dish_view.php"><i class="fa-solid fa-bell-concierge"></i></a>
      <a href="upload_slider.php"><i class="fa-solid fa-circle-plus"></i></a>
      <a href="upload_dish.php"><i class="fa-solid fa-upload"></i></i></a>
      <a href="upload_qr_code.php"><i class="fa-solid fa-qrcode"></i></a>
    </div>

    <script src="admin_home_sript.js"></script>
  </body>
</html>
