<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Password Change</title>   
<link rel="stylesheet" href="../asset/ChangePassword.css"/>

</head>
<body>
<div class="container"> 
    <fieldset>
        <h1 class="profile-title">Forgot Password</h1> 
        <form method="post" action="../controller/ForgotPassChecker.php">
            <table border="0">
                <tr>
                    <td><label for="code">Enter The Code:</label></td>
                    <td><input type="text" id="code" name="code" class="custom-input" required></td> 
                </tr>
                <tr>
                    <td><label for="password">New Password:</label></td>
                    <td><input type="password" id="password" name="password" class="custom-input" required></td> 
                </tr>
                <tr>
                    <td><label for="confirm_password">Confirm New Password:</label></td>
                    <td><input type="password" id="confirm_password" name="confirm_password" class="custom-input" required></td> 
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;"><button type="submit" name="submit" class="submit-button">Change Password</button></td>
                </tr> 
            </table>
        </form>
    </fieldset>
</div>
</body>
</html>
