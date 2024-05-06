window.addEventListener("load", () => {
  // Comprobamos si ya hay un modo guardado
  if (localStorage.getItem("mode") === null) {
    localStorage.setItem("mode", "light");
  }

  // Tomamos el modo guardado en el localStorage
  let mode = localStorage.getItem("mode");

  function setMode(type) {
    /** Funcion que cambia al modo oscuro */
    if (type === "dark") {
      document.body.classList.add("dark");
      mode = "dark";
      localStorage.setItem("mode", "dark");
    } else {
      document.body.classList.remove("dark");
      mode = "light";
      localStorage.setItem("mode", "light");
    }
  }

  const darkModeSelector = document.getElementById("toggle-dark-mode");
  darkModeSelector.addEventListener("change", toggleDarkMode);

  function toggleDarkMode() {
    /** Funcion que activa/desactiva el modo oscuro */
    if (mode === "dark") {
      darkModeSelector.checked = false;
      setMode("light");
    } else {
      darkModeSelector.checked = true;
      setMode("dark");
    }
  }

  if (mode == "dark") {
    darkModeSelector.checked = true;
  } else {
    darkModeSelector.checked = false;
  }

  setMode(mode);
});
