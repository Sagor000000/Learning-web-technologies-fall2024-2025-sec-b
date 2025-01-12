<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
         
   
        table {
           
            border-collapse: collapse;
            border: 1px solid #ddd;
        }
        th, td {
            background-color: #59D5E0;
            border: 1px solid #ddd;
            padding: 5px;
        }
    </style>
</head>
<body>
<center>
        <div>
            <h1 class="profile-title"> Login as User </h1>
        </div>
        <form method="POST" action="../controller/loginCheck.php">
        <table border="1">
                <tr>
                    <td>Username:</td>
                    <td><input type="text" id="username" name="username" required></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" id="password" name="password" required></td>
                </tr>
               
                <tr>
                    <th></th>
                    <td><input type="submit" value="Submit"> </td>
                </tr>
            </table>
        </form>
    </center>
       
</body>
</html>
 