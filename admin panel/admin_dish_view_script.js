// delete_script.js
document.addEventListener("DOMContentLoaded", function () {
  const deleteButtons = document.querySelectorAll(".dish_view_deletebtn");
  const deletePopup = document.getElementById("delete-popup");
  const cancelButton = document.getElementById("cancel");
  const itemIdInput = document.getElementById("item_id");

  deleteButtons.forEach((button) => {
    button.addEventListener("click", function () {
      console.log("entering");
      const itemId = this.getAttribute("data-id");
      console.log(itemId);
      itemIdInput.value = itemId;
      deletePopup.style.display = "block";
    });
  });

  cancelButton.addEventListener("click", function () {
    deletePopup.style.display = "none";
  });
});
