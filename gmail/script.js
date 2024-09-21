document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    // Dummy login check
    if (email === "test@example.com" && password === "password") {
        alert('Login successful!');
    } else {
        alert('Invalid email or password.');
    }
});
