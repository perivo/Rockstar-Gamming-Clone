// Custom JavaScript for interactivity

// Toggle menu visibility
document.addEventListener('DOMContentLoaded', function () {
    const navToggle = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('.navbar-collapse');

    navToggle.addEventListener('click', function () {
        navbarCollapse.classList.toggle('show');
    });
});

// Example: Form validation (can extend to other forms)
function validateForm(form) {
    const fields = form.querySelectorAll('input, textarea');
    let valid = true;

    fields.forEach((field) => {
        if (!field.value) {
            field.classList.add('is-invalid');
            valid = false;
        } else {
            field.classList.remove('is-invalid');
        }
    });

    return valid;
}
