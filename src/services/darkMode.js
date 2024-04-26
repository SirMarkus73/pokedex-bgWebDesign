let darkModeSelector = document.getElementById("toggle-dark-mode");
darkModeSelector.innerHTML = "<i class='bx bxs-sun' ></i>";

if (localStorage.getItem("mode") === null) {
  localStorage.setItem("mode", "light");
}

let mode = localStorage.getItem("mode");

setMode(mode);

darkModeSelector.addEventListener("click", toggleDarkMode);

function toggleDarkMode() {
  if (mode === "dark") {
    darkModeSelector.innerHTML = "<i class='bx bxs-sun' ></i>";

    document.body.classList.remove("dark");
    mode = "light";
    localStorage.setItem("mode", "light");
  } else {
    darkModeSelector.innerHTML = "<i class='bx bxs-moon'></i>";

    document.body.classList.add("dark");
    mode = "dark";
    localStorage.setItem("mode", "dark");
  }
}

function setMode(type) {
  if (type === "dark") {
    darkModeSelector.innerHTML = "<i class='bx bxs-moon'></i>";
    document.body.classList.add("dark");
    mode = "dark";
    localStorage.setItem("mode", "dark");
  } else {
    darkModeSelector.innerHTML = "<i class='bx bxs-sun' ></i>";
    document.body.classList.remove("dark");
    mode = "light";
    localStorage.setItem("mode", "light");
  }
}
