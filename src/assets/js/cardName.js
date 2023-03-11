const checkbox = document.getElementById("chkCardName");
const inputToShow = document.getElementById("inputToShow");

checkbox.addEventListener("change", (event) => {
  if (event.target.checked) {
    inputToShow.classList.remove("d-none");
    inputToShow.classList.add("d-block");
  } else {
    inputToShow.classList.remove("d-block");
    inputToShow.classList.add("d-none");
  }
});
