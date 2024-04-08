<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .login-container {
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        .login-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .login-header h2 {
            color: #333;
        }
        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }
        .login-form input[type="text"]:focus,
        .login-form input[type="password"]:focus {
            border-color: #007bff;
            outline: none;
        }
        .login-form button[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .login-form button[type="submit"]:hover {
            background-color: #0056b3;
        }
        .login-form .forgot-password {
            text-align: right;
            margin-top: 10px;
        }
        .login-form .forgot-password a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <h2>Login</h2>
        </div>
        <form class="login-form" action="#" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" id="loginBtn" class="nav-link" href="{{ route('login') }}">Login</button>
            <div class="forgot-password">
                <a href="#">Forgot password?</a>
            </div>
        </form>
    </div>
</body>
<script>
    // Ambil tombol "Login" berdasarkan id
    var loginBtn = document.getElementById('loginBtn');

    // Tambahkan event listener untuk menangani klik pada tombol "Login"
    loginBtn.addEventListener('click', function(event) {
        // Mencegah perilaku default dari tautan
        event.preventDefault();

        // Ganti URL halaman dengan URL yang diinginkan
        window.location.href = "dashboard"; // Ganti "url_halaman_baru" dengan URL yang sesuai
    });
</script>

</html>
