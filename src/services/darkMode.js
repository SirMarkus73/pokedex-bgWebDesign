const darkModeSelector = document.getElementById("toggle-dark-mode");
const darkModeImage = darkModeSelector.querySelector("img");
const captureMusic = document.querySelector("audio");

darkModeSelector.classList.remove("hidden");
darkModeImage.src = "../img/pokeball.webp";

// Comprobamos si ya hay un modo guardado
if (localStorage.getItem("mode") === null) {
  localStorage.setItem("mode", "light");
}

// Tomamos el modo guardado en el localStorage
let mode = localStorage.getItem("mode");

setMode(mode);

darkModeSelector.addEventListener("click", toggleDarkMode);

function setMode(type) {
  /** Funcion que cambia al modo oscuro */
  if (type === "dark") {
    darkModeImage.src = "../assets/img/masterball.webp";

    document.body.classList.add("dark");
    mode = "dark";
    localStorage.setItem("mode", "dark");
  } else {
    darkModeImage.src = "../assets/img/pokeball.webp";
    document.body.classList.remove("dark");
    mode = "light";
    localStorage.setItem("mode", "light");
  }
}

function toggleDarkMode() {
  /** Funcion que activa/desactiva el modo oscuro */
  if (mode === "dark") {
    setMode("light");
    captureMusic.play();
  } else {
    setMode("dark");
    captureMusic.play();
  }
}
