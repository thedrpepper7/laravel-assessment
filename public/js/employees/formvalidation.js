function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

function isOnlyNumbers(number) {
    return /^[0-9]+$/.test(number);
}

function showError(span) {
    span.classList.add("show");
}

function hideError(span) {
    span.classList.remove("show");
}

function redBorder(box) {
    box.classList.add("incorrectEntry");
}

function noBorder(box) {
    box.classList.remove("incorrectEntry");
}

let form = document.querySelector(".employeeInsertForm");

// all input fields
let allFormInputs = document.querySelectorAll(".employeeInsertForm input");

// email and phone number values
let email = document.querySelector("#employeeEmailInsert");
let phoneNumber = document.querySelector("#employeePhoneInsert");

// clear all btn
let clear = document.querySelector("#closeEmployeeForm");

// error span
let errorSpan = document.querySelector(".errorSpan");

// submit validation

form.addEventListener("submit", (e) => {
    let emailValue = email.value;
    let phoneValue = phoneNumber.value;

    if (
        (emailValue !== `` && !isValidEmail(emailValue)) ||
        (phoneValue !== `` && !isOnlyNumbers(phoneValue))
    ) {
        showError(errorSpan);
        redBorder(phoneNumber);
        e.preventDefault();
    } else {
        hideError(errorSpan);
        noBorder(phoneNumber);
        return;
    }
});

// clear button

clear.addEventListener("click", () => {
    allFormInputs.forEach((input) => {
        input.value = ``;
    });
});
