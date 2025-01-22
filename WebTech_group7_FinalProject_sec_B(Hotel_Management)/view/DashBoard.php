<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard</title>
    <link rel="stylesheet" href="../asset/Dashboard.css">
</head>
<body>

<header>
    <div class="logo-container">
        <img src="bluebirdlogo.png" alt="Logo" class="logo-img">
        <h2>Feels Like Home</h2>
    </div>
    <nav class="nav-container">
        <form action="About.php" method="get"><button type="submit">About</button></form>
        <form action="View&Location.php" method="get"><button type="submit">View</button></form>
        <form action="Signup.php" method="get"><button type="submit">Signup</button></form>
        <form action="UserLogin.php" method="get"><button type="submit">Login [User]</button></form>
        <form action="AdminLogin.php" method="get"><button type="submit">Login [Admin]</button></form>
    </nav>
</header>

</body>
</html>
