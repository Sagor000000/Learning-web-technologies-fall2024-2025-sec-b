<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="../asset/ChangePassword.css"/>
    <script src="../asset/ChangePassValidation.js"></script>
</head>
<body>
    <div> 
        <fieldset>
            <h1 class="profile-title">Change Password</h1> 
            <form method="POST" action="../controller/ChangePassChecker.php" onsubmit="return validateChangePasswordForm()">

                <table border="0">
                    <tr>
                        <td><label for="current_password">Current Password:</label></td>
                        <td><input type="password" id="current_password" name="current_password" class="custom-input" required></td>
                    </tr>
                    <tr>
                        <td><label for="new_password">New Password:</label></td>
                        <td><input type="password" id="new_password" name="new_password" class="custom-input" required></td>
                    </tr>
                    <tr>
                        <td><label for="confirm_new_password">Confirm New Password:</label></td>
                        <td><input type="password" id="confirm_new_password" name="confirm_new_password" class="custom-input" required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="Submit" class="submit-button"></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </div>
</body>
</html>
