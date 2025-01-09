
document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const validUsername = "admin";
    const validPassword = "password123";

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const errorMessage = document.getElementById('error-message');

    if (username === validUsername && password === validPassword) {
        alert("Login successful!");
        errorMessage.textContent = "";
    } else {
        errorMessage.textContent = "Invalid username or password!";
    }
});


const modal = document.getElementById('forgotPasswordModal');
const forgotPasswordLink = document.getElementById('forgotPasswordLink');
const closeModal = document.getElementsByClassName('close')[0];
const resetPasswordBtn = document.getElementById('resetPasswordBtn');
const resetMessage = document.getElementById('resetMessage');

forgotPasswordLink.addEventListener('click', function(event) {
    event.preventDefault();
    modal.style.display = 'flex';
});

closeModal.addEventListener('click', function() {
    modal.style.display = 'none';
});

window.addEventListener('click', function(event) {
    if (event.target === modal) {
        modal.style.display = 'none';
    }
});


resetPasswordBtn.addEventListener('click', function() {
    const resetEmail = document.getElementById('resetEmail').value;

    
    if (resetEmail) {
        resetMessage.textContent = "A password reset link has been sent to " + resetEmail;
    } else {
        resetMessage.textContent = "Please enter a valid email!";
    }
});
