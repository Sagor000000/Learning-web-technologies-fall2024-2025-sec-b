<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="../asset/Registration.css" />
    <script src="../asset/SignupValidation.js"></script>
</head>
<body>
    <center>
    <div class="container">
        <fieldset>
            <h1 class="profile-title"> Registration </h1>
            
            <form  action="../controller/RegistrationCheck.php" onsubmit="return validateSignupForm()" enctype="">
                <table border="0">
                    <tr>
                        <td><b>Employee Name:</b></td>
                        <td><input type="text" id="name" name="name" class="custom-field" ></td>
                    </tr>
                    <tr>
                        <td><b>Contact No:</b></td>
                        <td><input type="tel" id="phone" name="Phone" class="custom-field" ></td>
                    </tr>
                     
                    <tr>
                        <td><b>Username:</b></td>
                        <td><input type="text" id="username" name="username" class="custom-field" ></td>
                    </tr>
                    
                    <tr>
                        <td><b>Password:</b></td>
                        <td><input type="password" id="password" name="password" class="custom-field" ></td>
                    </tr>
                   
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="SIGNUP" class="login-button">
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </div>
    </center    >
</body>
</html>
