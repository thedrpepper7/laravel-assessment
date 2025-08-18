document.querySelectorAll(".employeeDiv").forEach((card) => {
    const button = card.querySelector("button");
    const hiddenContact = card.querySelector(".hiddenContact");

    button.addEventListener("click", () => {
        hiddenContact.classList.toggle("show");

        if (hiddenContact.classList.contains("show")) {
            button.textContent = "Hide Contact Info";
        } else {
            button.textContent = "Contact Information";
        }
    });
});
