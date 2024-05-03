const darkModeSelector = document.getElementById("toggle-dark-mode");

// Comprobamos si ya hay un modo guardado
if (localStorage.getItem("mode") === null) {
  localStorage.setItem("mode", "light");
}

// Tomamos el modo guardado en el localStorage
let mode = localStorage.getItem("mode");

setMode(mode);

darkModeSelector.addEventListener("change", toggleDarkMode);

function setMode(type) {
  /** Funcion que cambia al modo oscuro */
  if (type === "dark") {
    document.body.classList.add("dark");
    mode = "dark";
    localStorage.setItem("mode", "dark");
    darkModeSelector.checked = true;
  } else {
    document.body.classList.remove("dark");
    mode = "light";
    localStorage.setItem("mode", "light");
    darkModeSelector.checked = false;
  }
}

function toggleDarkMode() {
  /** Funcion que activa/desactiva el modo oscuro */
  if (mode === "dark") {
    setMode("light");
  } else {
    setMode("dark");
  }
}
