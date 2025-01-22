<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="../asset/Signup.css" />
    <script src="../asset/SignupValidation.js"></script>
</head>
<body>
    <div class="container">
        <fieldset>
            <h1 class="profile-title"> Sign Up </h1>
            
            <form  action="../controller/SignupCheck.php" onsubmit="return validateSignupForm()" enctype="">
                <table border="0">
                    <tr>
                        <td><b>Username:</b></td>
                        <td><input type="text" id="username" name="username" class="custom-field" ></td>
                    </tr>
                    <tr>
                        <td><b>Email:</b></td>
                        <td><input type="email" id="email" name="email" class="custom-field" ></td>
                    </tr>
                    <tr>
                        <td><b>Password:</b></td>
                        <td><input type="password" id="password" name="password" class="custom-field" ></td>
                    </tr>
                    
                    <tr>
                        <td><b>Phone:</b></td>
                        <td><input type="tel" id="phone" name="phone" class="custom-field" ></td>
                    </tr>
                    
                    <tr>
                        <td><b>Gender:</b></td>
                        <td>
                            <label for="gender_male"><input type="radio" id="gender_male" name="gender" value="male"> Male</label>
                            <label for="gender_female"><input type="radio" id="gender_female" name="gender" value="female"> Female</label>
                            <label for="gender_other"><input type="radio" id="gender_other" name="gender" value="other"> Other</label>
                        </td>
                    </tr>

                    <tr>
                        <td><b>Date Of Birth:</b></td>
                        <td><input type="date" id="dob" name="dob" class="custom-field" ></td>
                    </tr>
                   

                    
                    
                    <tr>
                        <td><b>Blood Group:</b></td>
                        <td>
                            <select id="blood_group" name="blood_group" class="custom-field" >
                                <option value="">Select</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                            </select>
                        </td>
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
    
</body>
</html>
