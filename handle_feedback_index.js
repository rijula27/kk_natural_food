$(document).ready(function () {
  $("#feedback-form").on("submit", function (e) {
    e.preventDefault();

    // Serialize the form data
    var formData = $(this).serialize();

    // AJAX request to send data to backend
    $.ajax({
      type: "POST",
      url: "save_feedback.php", // Update with your actual backend URL
      data: formData,
      dataType: "json",
      success: function (response) {
        // Update the carousel with the new feedback
        var newFeedback = `
            <div class="carousel-item">
              <div class="feedback-display">
                <div class="img">
                  <img src="images/logo.png" alt="" />
                </div>
                <p class="feedback-heading">${response.name}</p>
                <div class="rating">
                  ${generateStars(response.rating)}
                </div>
                <p class="feedback-description">
                  ${response.feedback}
                </p>
              </div>
            </div>
          `;

        $("#carousel-inner").append(newFeedback);

        // Optionally, you can move the new feedback to the active carousel item
        $("#carousel-inner .carousel-item").last().addClass("active");
      },
    });
  });

  function generateStars(rating) {
    var stars = "";
    for (var i = 1; i <= 5; i++) {
      stars += `<ion-icon name="star"${
        i <= rating ? ' style="color:#f5b301;"' : ""
      }></ion-icon>`;
    }
    return stars;
  }
});
