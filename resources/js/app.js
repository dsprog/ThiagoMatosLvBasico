import.meta.glob([
    '../images/**',
])
import 'bootstrap';
import 'admin-lte';
import './overlayscrollbars.js';

const togglePassword = document.querySelectorAll(".show-password");
const passwordFields = document.querySelectorAll("input[type=password]");

function togglePasswordVisibility() {
    passwordFields.forEach(passwordField => {
        passwordField.type = passwordField.type === "password" ? "text" : "password";
    });
    togglePassword.forEach(passwordField => {
        passwordField.classList.toggle("bi-eye-fill");
        passwordField.classList.toggle("bi-eye-slash-fill");
    });
}

togglePassword.forEach(passwordField => {
    passwordField.addEventListener("click", togglePasswordVisibility);
});
