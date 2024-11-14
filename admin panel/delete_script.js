const deletebtn = document.getElementById("delete");
console.log("come here");
const cancelBtn = document.getElementById("cancel");

deletebtn.addEventListener("click", function (event) {
  console.log(deletebtn);
  event.preventDefault(); // Prevent default link behavior
  const popup = document.querySelector(".delete-popup");
  popup.style.display = "block"; // Show the popup
});

cancelBtn.addEventListener("click", function () {
  const popup = document.querySelector(".delete-popup");
  popup.style.display = "none"; // Hide the popup on cancel
});
