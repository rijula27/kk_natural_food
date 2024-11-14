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

    <style>
      body {
        overflow: hidden;
      }

      .form-box {
        width: 90%;
        max-width: 450px;
        position: absolute;
        top: 55%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        padding: 40px 60px 40px;
        text-align: center;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      }

      @media (max-width: 769px) {
        .form-box {
          padding: 2rem;
        }
      }

      .form-box h1 {
        font-family: "kalapani";
        font-size: 30px;
        margin-bottom: 60px;
        color: #000000;
        position: relative;
      }
      @media (max-width:769px) {
        .form-box h1 {
          font-size:2rem;
          
        }
        
      }

      .form-box h1::after {
        content: "";
        width: 100px;
        height: 4px;
        border-radius: 3px;
        background: #050505;
        position: absolute;
        bottom: -12px;
        left: 50%;
        transform: translate(-50%);
      }

      .input-field {
        background: rgba(255, 255, 255, 0.445);
        margin: 15px 0;
        border-radius: 3px;
        display: flex;
        align-items: center;
        /* max-height: 65px; */
        overflow: hidden;
        /* border: solid; */
      }

      input {
        width: 100%;
        background: transparent;
        border: 0;
        outline: 0;
        padding: 18px 15px;
        font-size: 17px;
        color: #000000;
      }

      .input {
        width: 100%;
        background: transparent;
        border: 0;
        outline: 0;
        padding: 18px 15px;
        font-size: 17px;
        color: #000000;
      }

      .input_option {
        width: 50%;
        background: transparent;
        border: 0;
        outline: 0;
        padding: 18px 15px;
        font-size: 17px;
        margin-right: 10px;
        color: #000000;
      }

      .input_option option {
        background-color: #0a090998;
      }

      .input-field i,
      .input-field label {
        margin-left: 15px;
        color: #050505;
      }

      form p {
        text-align: left;
        font-size: 13px;
      }

      /* form p a {
            text-decoration: none;
            color: #3c00a0;
        } */

      .btn-field {
        width: 100%;
        display: flex;
        justify-content: space-between;
      }

      .btn-field button {
        flex-basis: 100%;
        background: var(--primary-100);
        color: #fff;
        height: 40px;
        border-radius: 20px;
        border: 1px solid #fff;
        outline: 0;
        cursor: pointer;
        transition: background 0.3s, border 0.3s;
        font-size: 18px;
      }

      .btn-field button:hover {
        background-color: var(--primary-200);
        border-color: #ffd700;
      }

      .input-group {
        height: 250px;
        /* border: solid; */
      }

      .btn-field button.disable {
        background: #eaeaea;
        color: #555;
      }

      .Log_in_register {
        margin-top: 20px;
        display: grid;
      }

      .Log_in_register p {
        text-align: center;
        font-size: 20px;
      }

      /* Define CSS styles for the success message */
      #message {
        padding: 20px;
        position: absolute;
        font-family: arial;
        color: black;
        margin:auto;
        top: 7rem;
        max-width: 600px;
        text-align: center;
        opacity: 1;
        transition: opacity 1s ease-out;
      }

      @media (max-width:769px) {
        #message{
          font-size:1rem;
          top:5rem;

        }
        
      }



      #back-navigation{
        position: absolute;
      bottom:8rem;
      right: 3rem;
      font-family:arial;
      }

      @media (min-width:769px) {
        #back-navigation{
          right:6.5rem;
          bottom:10rem;
        }
        
      }
    </style>
  </head>

  <body>
    <div class="background"></div>

    <div class="navbar">
      <div class="name-logo">
        <img src="../images/kk logo.jpg" alt="" />
        <p>KK Natural Food</p>
      </div>
    </div>
    

    <div class="container">
      <div class="form-box">
        <h1 id="title">Enter New Password</h1>
        <div id="message">
        <?php
        // Retrieve the message from the URL parameter
        $message = isset($_GET['message']) ? $_GET['message'] : "";

        // Output the message within a <p> tag
        echo '<h2 id="actual-message">' . htmlspecialchars($message) . '</h2>';
        ?>
        </div>
        <script>
          // Function to hide the message
          function hideMessage() {
            var messageDiv = document.getElementById("message");
            messageDiv.style.opacity = "0";
          }

          // Hide the message after 5 seconds (5000 milliseconds)
          setTimeout(hideMessage, 3000);
        </script>
        
        <form action="forgot-password.php" method="post" id="signupForm">
          <div class="input-group">
            <div class="input-field">
              <i class="fa-solid fa-envelope"></i>
              <input
                type="text"
                placeholder="Enter Old Password"
                id=""
                name="password"
                required
              />
            </div>

            <div class="input-field">
              <i class="fa-solid fa-lock"></i>
              <input
                type="text"
                placeholder="Enter New Password"
                id=""
                name="forgot-password"
                required
              />
            </div>

            <div class="input-field">
              <i class="fa-solid fa-lock"></i>
              <input
                type="password"
                placeholder="Confirm New Password"
                id=""
                name="confirm-password"
                required
              />
            </div>
          </div>

          <a href="admin.php" id="back-navigation">Back to login Page</a>
          <div class="btn-field">
            <button type="submit" id="signupBtn">Change Password</button>
          </div>
        </form>
      </div>
    </div>

    <div class="background2"></div>
  </body>
</html>
