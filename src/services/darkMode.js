let darkModeSelector = document.getElementById("toggle-dark-mode");
let darkModeImage = darkModeSelector.querySelector("img");

darkModeSelector.classList.remove("hidden");
darkModeImage.src = "../img/pokeball.webp";

if (localStorage.getItem("mode") === null) {
  localStorage.setItem("mode", "light");
}

let mode = localStorage.getItem("mode");

setMode(mode);

darkModeSelector.addEventListener("click", toggleDarkMode);

function toggleDarkMode() {
  if (mode === "dark") {
    darkModeImage.src = "../img/pokeball.webp";

    document.body.classList.remove("dark");
    mode = "light";
    localStorage.setItem("mode", "light");
  } else {
    darkModeImage.src = "../img/masterball.webp";

    document.body.classList.add("dark");
    mode = "dark";
    localStorage.setItem("mode", "dark");
  }
}

function setMode(type) {
  if (type === "dark") {
    darkModeImage.src = "../img/masterball.webp";

    document.body.classList.add("dark");
    mode = "dark";
    localStorage.setItem("mode", "dark");
  } else {
    darkModeImage.src = "../img/pokeball.webp";
    document.body.classList.remove("dark");
    mode = "light";
    localStorage.setItem("mode", "light");
  }
}
