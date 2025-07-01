let darkMode = false;
let altFont = false;

function toggleDarkMode() {
    document.body.classList.toggle("dark");
    darkMode = !darkMode;
}

function toggleSkills() {
    const skills = document.querySelector("h3 + ul");
    if (skills) {
        skills.style.display = (skills.style.display === "none") ? "block" : "none";
    }
}

function switchFont() {
    const body = document.body;
    if (!altFont) {
        body.style.fontFamily = "'Open Sans', sans-serif";
    } else {
        body.style.fontFamily = "'Montserrat', sans-serif";
    }
    altFont = !altFont;
}
