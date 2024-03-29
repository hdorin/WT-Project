<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>AuctioX</title>

    <link rel="stylesheet" href="resources/stylesheets/app.css" type="text/css" />
    <link rel="stylesheet" href="resources/stylesheets/searchbar.css" type="text/css" />
    <link rel="stylesheet" href="resources/stylesheets/abt.css" type="text/css" />


    <link rel="apple-touch-icon" sizes="180x180" href="resources/images/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="resources/images/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="resources/images/favicon/favicon-16x16.png" />
    <link rel="manifest" href="resources/images/favicon/site.webmanifest" />
    <link rel="mask-icon" href="resources/images/favicon/safari-pinned-tab.svg" color="#5bbad5" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="theme-color" content="#ffffff" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
    <header>
        <div class="topnav">
            <div class="firstrow">
                <a href="index.php"><img id="logo" src="resources/images/logo.jpg" alt="Site Logo" /></a>

                <div class="searchbarUnit">
                    <form class="form-wrapper ">
                        <input type="text" placeholder="What are you looking for?" required>
                        <button type="submit">Search</button>
                    </form>
                </div>

                <a id="advsearch" href="advs.php">Advanced search</a>
                <a id="btnLogin" href="login.php">Login</a>
                <a id="btnReg" href="register.php">Register</a>
            </div> <!--FIRST ROW-->

            <div id="menu_tab">
                <div class="left_menu_corner"></div>
                <ul class="menu">
                    <li><a href="index.php" class="nav1"> Home</a></li>
                    <li class="divider"></li>
                    <!--Drop down menue-hover for products START-->
                    <!--All of the .css stuff is in the abt.css folder-->

                    <li class="dropdown1">
                        <Button class="dropbtn1">Products</Button>
                        <div class="dropdown-content1">
                            <a href="products.php">Link 1</a>
                            <a href="products.php">Link 2</a>
                            <a href="products.php">Link 3</a>
                        </div>
                    </li>
                    <!--Drop down menue-hover for products END-->
                    <li class="divider"></li>
                    <li><a href="#" class="nav3">Specials</a></li>
                    <li class="divider"></li>
                    <li><a href="#" class="nav4">Last Minute!</a></li>
                    <li class="divider"></li>
                    <li><a href="myAccount.php" class="nav5">My account</a></li>
                    <li class="divider"></li>
                    <li><a href="myitems.php" class="nav6">My Items</a></li>
                    <li class="divider"></li>
                    <!-- <li><a href="#" class="nav7">Info</a></li>-->
                    <!--Drop down menue-hover for products START-->
                    <!--All of the .css stuff is in the abt.css folder-->

                    <li class="dropdown2">
                        <Button class="dropbtn2">  Info  </Button>
                        <div class="dropdown-content2">
                            <a href="contact.php">Contact Us</a>
                            <a href="about.php">About Us</a>
                            <a href="#">Shipping</a>

                        </div>
                    </li>
                    <!--Drop down menue-hover for products END-->
                    <li class="divider"></li>
                    <li class="currencies">
                        Currencies
                        <select>
                            <option>RON</option>
                            <option>US Dollar</option>
                            <option>Euro</option>
                        </select>
                    </li>
                </ul>
                <div class="right_menu_corner"></div>
            </div><!--MENU_TAB-->

        </div><!--TOPNAV-->


    </header>