<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Login Page</title>
    <link rel="stylesheet" href="resources/stylesheets/login.css" type="text/css" />
    <link rel="apple-touch-icon" sizes="180x180" href="resources/images/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="resources/images/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="resources/images/favicon/favicon-16x16.png" />
</head>
<body id="bodyMain">
    <div id="siteLogo">
        <a href="index.html">
            <img src="resources/images/logo.jpg" alt="Site logo" />
        </a>
    </div>
    <form id="lgnPanel">

        <h1>Login</h1>
        <h2>Email</h2>
        <input id="userField" type="email" required/>
        <h2>Password</h2>
        <input id="passField" type="password" required/>
        <input id="lgnButton" type="submit" value="Login" />
        <div id="frgtPass">
            <a href="frgtpass.php">I forgot my password</a>
        </div>
    </form>

</body>
</html>