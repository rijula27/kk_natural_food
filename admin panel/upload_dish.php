<?php
// require('upload_dish_php.php');
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
    <link
      href="https://fonts.googleapis.com/css2?family=Krub:wght@200;300;400;500;600;700&family=Pacifico&family=Roboto:wght@100;300;400;500;700;900&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/3d8df9be04.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="../global.css" />
    <link rel="stylesheet" href="admin_home.css" />
    <style>
      body {
        font-family: "Roboto", sans-serif;
        margin: 0;
        padding: 0;
        /* background-color: #f5f5f5; */
      }

      /* .bottom-nav{
        border: solid;
        position: fixed;
      }
      .content {
        border: solid;
        width: 100%;
        height: 42.5rem;
        overflow-x: hidden;
        overflow-y: scroll;
      } */

      .upload-section {
        max-width: 60rem;

        height: fit-content;
        margin: 10px auto;
        background-color: #302e2e62;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
      }

      @media (max-width: 769px) {
        .upload-section {
          max-width: 30rem;
        }
      }

      .upload-section h2 {
        margin-bottom: 20px;
        font-size: 28px;
        color: black;
        font-weight: 600;
      }

      .upload-section form {
        display: flex;
        flex-direction: column;
        gap: 15px;
      }

      .form-box {
        display: flex;
        gap: 5rem;
      }

      @media (max-width: 769px) {
        .form-box {
          flex-direction: column;
          gap: 0;
        }
      }

      .upload-section .form-part {
        display: flex;
        flex-direction: column;
        gap: 5px;
        width: 100%;
        text-align: left;
      }

      .upload-section label {
        font-size: 1.7rem;
        color: black;
        margin-top: .5rem;
      }

      .upload-section input[type="text"],
      .upload-section input[type="number"],
      .upload-section input[type="file"] {
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 16px;
        width: 100%;
      }

      .upload-section input[type="file"] {
        border: 1px solid #cccccc;
        padding: 10px;
        background-color: #f9f9f9;
      }

      .upload-section button {
        background-color: var(--primary-100);
        color: white;
        padding: 12px 20px;
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
    <div class="navbar">
      <div class="name-logo">
        <img src="../images/kk logo.jpg" alt="" />
        <p>KK Natural Food</p>
      </div>
    </div>
    <div class="background"></div>
    <div class="background2"></div>
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
        <h2>Upload New Dish</h2>
        <form action="upload_dish_php.php" method="POST" enctype="multipart/form-data">
          <div class="form-box">
            <div class="form-part">
              <label for="dish_name">Dish Name</label>
              <input type="text" name="dish_name" required />
            </div>
            <div class="form-part">
              <label for="dish_price">Dish Price</label>
              <input type="number" name = "dish_price" required></textarea>

            </div>
          </div>

          <div class="form-box">
            
            <div class="form-part">
              <label for="dish_description">Dish Description</label>
              <textarea name="dish_description" rows="3" required></textarea>
            </div>
            <div class="form-part">
              <label for="dish_description">Upload Dish image</label>

            <input type="file" name="dish_image" accept="image/*" required />
          </div>
          

          </div>
          <button type="submit">Add New Dish</button>
        </form>
      </div>
    </div>

    <div class="bottom-nav">
      <a href="admin_home.php"><i class="fa-solid fa-photo-film"></i></a>
      <a href="admin_dish_view.php"><i class="fa-solid fa-bell-concierge"></i></a>
      <a href="upload_slider.php"><i class="fa-solid fa-circle-plus"></i></a>
      <a href=""><i style="color: black" class="fa-solid fa-upload"></i></a>
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
    <script>
     
    </script>
  </body>
</html>
