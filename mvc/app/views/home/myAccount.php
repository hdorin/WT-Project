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
                    <img src="resources/images/userphoto.png" alt="template user photo" width="256" height="256" style="float:right" />
                    <ul id="innerUl">
                        <li><strong>Username</strong>: loverboy17</li>
                        <li><strong>Last Name</strong>: Tiron</li>
                        <li><strong>First Name</strong>: Adrian</li>
                        <li><strong>Mobile Phone</strong>: (+40) 000 000 000</li>
                        <li><strong>Date of Birth</strong>: 1 January 1970</li>
                        <li><strong>Education Level</strong>: College (present)</li>
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

