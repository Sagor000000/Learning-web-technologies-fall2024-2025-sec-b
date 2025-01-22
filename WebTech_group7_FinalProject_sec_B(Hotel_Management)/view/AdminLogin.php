<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../asset/AdminLogin.css"/>
    <script src="../asset/LoginValidation.js"></script>
</head>
<body>
    <div class="container">
        <fieldset>
            <h1 class="profile-title"> Login as Admin </h1>
            <form method="POST" action="../controller/AdminLoginCheck.php" onsubmit="return validateLoginForm()">
                <table border="0">
                    <tr>
                        <td><b>Username:</b></td>
                        <td><input type="text" id="username" name="username" class="custom-input" required></td>
                    </tr>
                    <tr>
                        <td><b>Password:</b></td>
                        <td><input type="password" id="password" name="password" class="custom-input" required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="Login" class="login-button">
                            <a href="../view/ForgotPassword.php" class="forgot-password">Forgot Password?</a>
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </div>
</body>
</html>