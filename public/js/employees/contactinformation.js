function replaceContact(information) {
    return `
        <div class="contactCard">
            <button class="revertCard">Back</button>
            ${information}
        </div>
    `;
}

document.querySelectorAll(".employeeDiv button").forEach((button) => {
    button.addEventListener("click", () => {
        const employeeDiv = button.closest(".employeeDiv");
        const hiddenContact = button.nextElementSibling.innerHTML;

        employeeDiv.innerHTML = replaceContact(hiddenContact);

        employeeDiv
            .querySelector(".revertCard")
            .addEventListener("click", () => {
                location.reload();
            });
    });
});
