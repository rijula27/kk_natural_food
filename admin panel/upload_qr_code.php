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
        position: relative; /* This ensures the pseudo-element is positioned correctly */
        overflow: hidden; /* This ensures the background image doesn't overflow the container */
      }

      .upload-section::before {
        content: "";
        position: absolute; /* This allows the background image to cover the whole section */
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url("../images/qr\ background.png");
        background-size: cover; /* Ensures the background image covers the entire section */
        background-position: center; /* Centers the background image */
        opacity: 0.4; /* Adjust the opacity for a subtle background effect */
        z-index: -1; /* Ensures the background image stays behind the content */
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
      <div class="upload-section">
        <h2>Upload QR Code</h2>
        <form action="upload_qr_code_php.php" method="POST" enctype="multipart/form-data">
          <input type="file" name="qr_image" accept="image/*" required />
          <button type="submit">Add QR Code</button>
        </form>
      </div>
    </div>

    <div class="bottom-nav">
      <a href="admin_home.php"><i class="fa-solid fa-photo-film"></i></a>
      <a href="admin_dish_view.php"><i class="fa-solid fa-bell-concierge"></i></a>
      <a href="upload_slider.php"
        ><i  class="fa-solid fa-circle-plus"></i
      ></a>
      <a href="upload_dish.php"><i class="fa-solid fa-upload"></i></a>
      <a href="#"><i style="color: black"class="fa-solid fa-qrcode"></i></a>
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
