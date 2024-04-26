let darkModeSelector = document.getElementById("toggle-dark-mode");
let mode = "light"

darkModeSelector.addEventListener("click", () => {
    toggleDarkMode();
});

function toggleDarkMode() {
    if (mode === "dark") {
        document.body.classList.remove("dark");
        mode = "light";
    } else {
        document.body.classList.add("dark");
        mode = "dark";
    }
}
