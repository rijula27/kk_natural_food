<?php
require('session_check.php');
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
    <style>
      @import url(/global.css);
      body {
        font-family: "Roboto", sans-serif;
        margin: 0;
        padding: 0;
        /* background-color: #f8f8f8; */
      }

      .upload-section {
        max-width: 300px;
        margin: 50px auto;
        background-color: #32426c93;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
      }

      .upload-section h2 {
        margin-bottom: 20px;
        font-size: 24px;
        color: #000000;
      }

      .upload-section form {
        display: flex;
        flex-direction: column;
        align-items: center;
      }

      .upload-section input[type="file"] {
        margin-bottom: 20px;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        width: 100%;
        font-size: 16px;
      }

      .upload-section input[type="name"] {
        margin-bottom: 20px;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        width: 100%;
        font-size: 16px;
      }

      .upload-section button {
        background-color: var(--primary-100);
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease;
      }

      .upload-section button:hover {
        background-color: var(--primary-200);
      }

      #message {
        /* padding: 20px; */
        color: #0000ff;
        /* margin: 0 auto 0; */
        width: 250px;
        text-align: center;
        opacity: 1;
        transition: opacity 1s ease-out;
        /* border:solid; */
        position:absolute;
        margin:auto;
        left:50%;
        transform:translatex(-50%);
      }
    </style>
  </head>

  <body>
    <div class="background"></div>
    <div class="background2"></div>
    <div class="navbar">
      <div class="name-logo">
        <img src="../images/kk logo.jpg" alt="" />
        <p>KK Natural Food</p>
      </div>
    </div>

    <div class="content">
    <div id="message">
    <?php
        // Retrieve the message from the URL parameter
        $message = isset($_GET['message']) ? $_GET['message'] : "";

        // Output the message within a <p> tag
        echo '<p>' . htmlspecialchars($message) . '</p>';
        ?></div>
          <script>
        // Function to hide the message
        function hideMessage() {
            var messageDiv = document.getElementById('message');
            messageDiv.style.opacity = '0';
        }

        // Hide the message after 5 seconds (5000 milliseconds)
        setTimeout(hideMessage, 3000);
    </script>
      <div class="upload-section">
        <h2>Upload Food Image</h2>
        <form action="slider_upload.php" method="POST" enctype="multipart/form-data">
          <input type="file" name="food_image" accept="image/*" required />
          <input type="name" name="food_name" placeholder="Food Name" required>
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
          <button type="submit">Add Slider Image</button>
        </form>
      </div>
    </div>

    <div class="bottom-nav">
      <a href="admin_home.php"><i class="fa-solid fa-photo-film"></i></a>
      <a href="admin_dish_view.php"><i class="fa-solid fa-bell-concierge"></i></a>
      <a href=""
        ><i style="color: black" class="fa-solid fa-circle-plus"></i
      ></a>
      <a href="upload_dish.php"><i class="fa-solid fa-upload"></i></a>
      <a href="upload_qr_code.php"><i class="fa-solid fa-qrcode"></i></a>
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
    <script src="../script.js"></script>
  </body>
</html>
