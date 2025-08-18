const forms = document.querySelectorAll(".deleteForm");

forms.forEach((form) => {
    form.addEventListener("submit", (e) => {
        if (!confirm("Are you sure you want to delete this entry?")) {
            e.preventDefault();
        }
    });
});
