<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<style>
  body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f7f7f7;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.login-container {
    background: white;
    padding: 20px 30px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
}

.login-form {
    display: flex;
    flex-direction: column;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

.input-group {
    margin-bottom: 15px;
}

.label {
    margin-bottom: 5px;
    font-size: 14px;
    color: #555;
}

input[type="email"], 
input[type="password"] {
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    width: 100%;
    box-sizing: border-box;
}

input[type="checkbox"] {
    margin-right: 5px;
}

.remember-me {
    display: flex;
    align-items: center;
}

.login-btn {
    background-color: #007bff;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.login-btn:hover {
    background-color: #0056b3;
}

.links {
    margin-top: 15px;
    display: flex;
    justify-content: space-between;
}

.forgot-password,
.register {
    text-decoration: none;
    color: #007bff;
    font-size: 14px;
}

.forgot-password:hover,
.register:hover {
    text-decoration: underline;
}
</style>
<body>
    <div class="login-container">
        <form class="login-form" action="{{route('login')}}" method="POST">
            @csrf 
            <h2>Login</h2>
             <!-- Display error messages -->
                    @if ($errors->any())
                <div class="error-message">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required {{old('email')}} placeholder="Enter your email">
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required placeholder="Enter your password">
            </div>
            <div class="input-group remember-me">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Remember Me</label>
            </div>
            <button type="submit" class="login-btn">Login</button>
            
        </form>
    </div>
</body>
</html>
