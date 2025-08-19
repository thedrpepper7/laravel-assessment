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

let form = document.querySelector(".companyInsertForm");

// all input fields
let allFormInputs = document.querySelectorAll(".companyInsertForm input");

// email and phone number values
let companyName = document.querySelector("#companyName");

// clear all btn
let clear = document.querySelector("#closeCompanyForm");

// error span
let errorSpan = document.querySelector(".errorSpanCompany");

form.addEventListener("submit", (e) => {
    let nameValue = companyName.value;
    if (nameValue === ``) {
        showError(errorSpan);
        redBorder(companyName);
        e.preventDefault();
    } else {
        hideError(errorSpan);
        noBorder(phoneNumber);
        return;
    }
});

//clear button

clear.addEventListener("click", () => {
    allFormInputs.forEach((input) => {
        input.value = ``;
    });
});
