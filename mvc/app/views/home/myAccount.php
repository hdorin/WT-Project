<?php
    
    include 'header.php';
?>
    <link rel="stylesheet" href="resources/stylesheets/myAccount.css" type="text/css" />


    <br />
    <div class="accordion vertical">
        <ul>
            <li>
                <input type="radio" id="radio-1" name="radio-accordion" checked="checked" />
                <label for="radio-1">User&nbsp;Profile</label>
                <div class="content">
                    <h3>This section contains basic info about you</h3>

                    <?php
                    $link = $this->auctiox_db_connect();

                    $sql = $link->prepare('SELECT image FROM users WHERE id = ?');
                    $sql->bind_param('s', $_SESSION['userId']); 
                    $sql->execute();
                    $sql->bind_result($image);
                    $sql->fetch();
                    mysqli_close($link);

                    echo '<img src=" ' .$image. '" alt="template user photo" width="256" height="256" style="float:right" />';

                    ?>

                    <ul id="innerUl">
                        <?php
                            $link = $this->auctiox_db_connect();

                            $sql = $link->prepare('SELECT name, lname, email, dob, date_created, type FROM users WHERE id = ?');
                            $sql->bind_param('s', $_SESSION['userId']); 
                            $sql->execute();
                            $sql->bind_result($name,$lname,$email,$dob,$date_created,$type);
                            $sql->fetch();
                            mysqli_close($link);

                            switch ($type) {
                                case '1':
                                    $typen = "Normal";
                                    break;
                                case '2':
                                    $typen = "Administrator";
                                    break;
                                case '3':
                                    $typen = "Suspended";
                                    break;   
                                default:
                                    break;
                            }

                            $dob = date("d-m-Y", strtotime($dob));
                            $date_created = date("d-m-Y", strtotime($date_created));

                            echo '
                            <li><strong>Last Name</strong>: ' .$name. '</li>
                            <li><strong>First Name</strong>: ' .$lname. '</li>
                            <li><strong>Email</strong>: ' .$email. '</li>
                            <li><strong>Date of Birth</strong>: ' .$dob. '</li>
                            <li><strong>Account created on</strong>: ' .$date_created. '</li>
                            <li><strong>User type</strong>: ' .$typen. '</li>'
                        ?>

                        
                    </ul>
                </div>
            </li>
            <li>
                <input type="radio" id="radio-2" name="radio-accordion" />
                <label for="radio-2">Security&nbsp;Settings</label>
                <div class="content">
                    <h3>Here, you can change your password and email</h3>
                    
                    <ul style="margin-top:40px">
                    
                    <form action="myAccount/pwdChange" method="POST">

                        <li><Strong style="margin-right:10px">Your old password:</Strong> 
                            <input name="oldPwd" type="password" required style="width:200px" />
                        </li>

                        <li style="float:right; position:relative; margin-right: 90px">
                            <input value="Confirm" type="submit" id="confirmBtn1"/>
                        </li>

                        <li style="margin-top:25px"><Strong style="margin-right:10px">Your new password:</Strong> 
                            <input name="newPwd" type="password" required style="width:200px" />
                        </li>
                    </form>

                    <li><br /></li>

                    <form action="myAccount/emailChange" method="POST">

                        <li style="margin-top:30px"><Strong style="margin-right:10px">Your old email:</Strong> 
                            <input name="oldEmail" type="email" required style="width:200px" />
                        </li>

                        <li style="float:right;position:relative; margin-right: 90px">
                            <input value="Confirm" type="submit" id="confirmBtn2"/>
                        </li>

                        <li style="margin-top:25px"><Strong style="margin-right:10px">Your new email:</Strong> 
                            <input name="newEmail" type="email" required style="width:200px" />
                        </li>
                    </form>

                    </ul>
                </div>
            </li>
            <li>
                <input type="radio" id="radio-3" name="radio-accordion" />
                <label for="radio-3">Payment&nbsp;Options</label>
                <div class="content">
                    <h3>Add / Delete / Edit Credit Cards here</h3>
                    <a href="addCreditCardForm" class="addnewcard">+ Add New Card</a>

                    <ul class="creditcard">
                        <li><strong>VISA</strong> **** 9999</li>
                        <li><img src="resources/images/visa.png" alt="Visa logo" style="float:right;width:64px;height:35px" /></li>
                        <li>Expires in February 2020</li>
                    </ul>

                    <ul class="creditcard">
                        <li><strong>Maestro</strong> **** 8888</li>
                        <li><img src="resources/images/maestro.png" alt="Visa logo" style="float:right;width:64px;height:50px" /></li>
                        <li>Expires in July 2021</li>
                    </ul>
                </div>
            </li>
            <li>
                <input type="radio" id="radio-4" name="radio-accordion" />
                <label for="radio-4">Your&nbsp;Addresses</label>
                <div class="content">
                    <a href="addAddressForm" class="addnewcard" style="margin-top: 7%">+ Add New Address</a>
                    <h3>Add addresses here beforehand</h3>
                    <ul class="addressbox">
                        <li><strong>Adrian Tiron - 0700000000</strong></li>
                        <li class="liSpec"><a href="" onclick="return false" class="transparent_btn">Delete</a></li>
                        <li class="liSpec"><a href="" onclick="return false" class="transparent_btn">Modify</a></li>
                        <li>Str. Mihalovici Capitan no. 13</li>
                        <li>Iasi, Iasi</li>
                    </ul>

                    <ul class="addressbox">
                        <li><strong>Dorin Haloca - 0700000000</strong></li>
                        <li class="liSpec"><a href="" onclick="return false" class="transparent_btn">Delete</a></li>
                        <li class="liSpec"><a href="" onclick="return false" class="transparent_btn">Modify</a></li>
                        <li>Str. Dorel Locotenent no. 2</li>
                        <li>Vaslui, Barlad</li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>


<?php

    include 'footer.php';

?>

