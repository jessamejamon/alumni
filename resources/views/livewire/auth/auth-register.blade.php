<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            background-image: url('stars-sky.jpeg');
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            width: 422px; /* Set width to 422px */
            padding: 20px;
            background:  khaki;
            border: 5px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center; /* Center items */
            text-align: center; /* Center text */
        }
        h2 {
            margin-bottom: 15px;
        }
        .form-group {
            margin-bottom: 15px;
            width: 100%; /* Full width */
            text-align: left; /* Align text to the left */
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="submit"] {
            width: 400px; /* Set width to 400px */
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #5cb85c;
            color: white;
            border: none;
            margin-top: 10px; /* Added margin */
        }
        input[type="submit"]:hover {
            background-color: #4cae4c;
        }
        .error {
            color: red;
            font-size: 0.9em;
        }
        .login-prompt {
            margin-top: 15px;
        }
        .login-prompt a {
            color: #007bff;
            text-decoration: none;
        }
        .login-prompt a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Register</h2>
    <form id="registerForm">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            <div class="error" id="usernameError"></div>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            <div class="error" id="emailError"></div>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <div class="error" id="passwordError"></div>
        </div>
        <input type="submit" value="Register">
    </form>
    <div class="login-prompt">
        <p>Already have an account? <a href="login.html">Login</a></p> <!-- Link to the login page -->
    </div>
</div>

<!-- SweetAlert Script -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.getElementById('registerForm').addEventListener('submit', function(event) {
        event.preventDefault();
        let valid = true;

        // Clear previous errors
        document.getElementById('usernameError').innerText = '';
        document.getElementById('emailError').innerText = '';
        document.getElementById('passwordError').innerText = '';

        // Validate username
        const username = document.getElementById('username').value;
        if (username.length < 3) {
            document.getElementById('usernameError').innerText = 'Username must be at least 3 characters long.';
            valid = false;
        }

        // Validate email
        const email = document.getElementById('email').value;
        const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        if (!email.match(emailPattern)) {
            document.getElementById('emailError').innerText = 'Please enter a valid email address.';
            valid = false;
        }

        // Validate password
        const password = document.getElementById('password').value;
        if (password.length < 6) {
            document.getElementById('passwordError').innerText = 'Password must be at least 6 characters long.';
            valid = false;
        }

        if (valid) {
            Swal.fire({
                title: 'Registration Successful!',
                text: 'You will be redirected to the login page.',
                icon: 'success',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "{{ route('login') }}"; // Redirect after SweetAlert confirmation
                }
            });
        }
    });
</script>

</body>
</html>
