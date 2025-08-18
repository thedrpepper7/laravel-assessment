// all input fields

let allFormInputs = document.querySelectorAll(".employeeInsertForm input");

// buttons

let submit = document.querySelector("#submitEmployeeForm");
let clear = document.querySelector("#closeEmployeeForm");

// clear button

clear.addEventListener("click", () => {
    allFormInputs.forEach((input) => {
        input.value = ``;
    });
});
