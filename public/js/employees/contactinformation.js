function replaceContact(information) {}

document.querySelectorAll(".employeeDiv button").forEach((button) => {
    button.addEventListener("click", () => {
        const hiddenContact = button.nextElementSibling;
        hiddenContact.classList.toggle("show");
    });
});
