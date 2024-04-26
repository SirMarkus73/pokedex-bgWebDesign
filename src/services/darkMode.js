let darkModeSelector = document.getElementById("toggle-dark-mode");
darkModeSelector.innerHTML = "<i class='bx bxs-moon'></i>"
let mode = "light"

darkModeSelector.addEventListener("click", toggleDarkMode)

function toggleDarkMode() {
    if (mode === "dark") {
        darkModeSelector.innerHTML = "<i class='bx bxs-moon'></i>"
        document.body.classList.remove("dark");
        mode = "light";
    } else {
        darkModeSelector.innerHTML = "<i class='bx bxs-sun' ></i>"
        document.body.classList.add("dark");
        mode = "dark";
    }
}
