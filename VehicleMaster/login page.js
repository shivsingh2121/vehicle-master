
const loginForm = document.getElementById('loginForm');
const errorMessage = document.getElementById('error-message');
const forgotPasswordLink = document.getElementById('forgotPasswordLink');
const forgotPasswordModal = document.getElementById('forgotPasswordModal');
const closeModal = document.querySelector('.close');
const resetPasswordBtn = document.getElementById('resetPasswordBtn');
const resetMessage = document.getElementById('resetMessage');


loginForm.addEventListener('submit', function(event) {
    event.preventDefault(); 

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if (username === "testUser" && password === "password123") {
        alert('Login successful!');
        errorMessage.textContent = '';
    } else {
        errorMessage.textContent = 'Incorrect username or password.';
    }
});


forgotPasswordLink.addEventListener('click', function(event) {
    event.preventDefault();
    forgotPasswordModal.style.display = 'block';
});


closeModal.addEventListener('click', function() {
    forgotPasswordModal.style.display = 'none';
});


resetPasswordBtn.addEventListener('click', function() {
    const resetEmail = document.getElementById('resetEmail').value;

    if (resetEmail) {
        resetMessage.textContent = 'Password reset link has been sent to your email.';
    } else {
        resetMessage.textContent = 'Please enter a valid email address.';
    }
});


window.addEventListener('click', function(event) {
    if (event.target === forgotPasswordModal) {
        forgotPasswordModal.style.display = 'none';
    }
});
