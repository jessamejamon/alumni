<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            background-image: url('stars-sky.jpeg');
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }
        .login-container {
            background: khaki;
            padding: 20px;
            border: 5px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .login-container h2 {
            margin-bottom: 20px;
        }
        .login-container label {
            display: block;
            text-align: left;
            margin: 10px 0 5px;
        }
        .login-container input {
            width: 380px;
            height: 30px;
            padding: 5px;
            margin: 10px 0;
            background-color: transparent;
            border: 1px solid #ccc;
            border-radius: 5px;
            color: #333;
            transition: border-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }
        .login-container input::placeholder {
            color: #aaa;
        }
        .login-container input:focus {
            border-color: #5cb85c;
            box-shadow: 0 0 5px rgba(92, 184, 92, 0.5);
            outline: none;
        }
        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #5cb85c;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .login-container button:hover {
            background-color: #4cae4c;
        }
        .error {
            color: red;
            margin-top: 10px;
            text-align: center;
        }
        .signup {
            margin-top: 15px;
            text-align: center;
        }
        .signup a {
            color: #007bff;
            text-decoration: none;
        }
        .signup a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form id="loginForm">
            <label for="username">Username</label>
            <input type="text" id="username" placeholder="Enter your username" required>
            <label for="password">Password</label>
            <input type="password" id="password" placeholder="Enter your password" required>
            <button type="submit">Login</button>
            <div class="error" id="error-message"></div>
        </form>
        <a href="{{ route('register') }}">Don't have an account? <a href="">Sign up</a>
    </div>

    <!-- SweetAlert Script -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            const errorMessage = document.getElementById('error-message');

            if (username === '' || password === '') {
                errorMessage.textContent = 'Both fields are required.';
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Both username and password are required!',
                });
            } else {
                errorMessage.textContent = '';
                Swal.fire({
                    title: 'Success!',
                    text: 'Login successful. Redirecting to homepage...',
                    icon: 'success',
                    confirmButtonText: 'Okay'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "{{ route('homepage') }}"; 
                    }
                });
            }
        });
    </script>
</body>
</html>
