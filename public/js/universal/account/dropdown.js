const accountBox = document.querySelector(".logoutBTN a");
const logoutBox = document.querySelector(".logoutBox");

document.addEventListener("click", (e) => {
    if (accountBox.contains(e.target)) {
        logoutBox.style.display =
            logoutBox.style.display === "flex" ? "none" : "flex";
    } else if (!logoutBox.contains(e.target)) {
        logoutBox.style.display = "none";
    }
});
