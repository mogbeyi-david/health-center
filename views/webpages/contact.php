<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <link rel="stylesheet" href="../../stylesheets/style.css" type="text/css">
</head>
<body>
<div id="header">
    <a href="../../images/oaulogo.png" class="logo"><img src="../../images/oaulogo.png" style="height: 80px; display: inline; width: 100px;" alt=""></a>
    <h1 style="display: inline; color: white; text-align: center; margin-left: 20%;">OAUTHC<span style="margin-left: 10px;"></span> PAEDIATRIC<span style="margin-left: 10px;"></span> HEALTH<span style="margin-left: 10px;"></span> CENTER<span style="margin-left: 10px;"></span></h1>
    <a href="index.html" class="logo"><img src="../../images/logos.png" style="height: 80px; width: 100px; display: inline; float: right;"></a>
    <ul>
        <li>
            <a href="../../index.php">Home</a>
        </li>
        <li>
            <a href="about.html">About</a>
        </li>
        <li>
            <a href="services.html">Services</a>
        </li>
        <li class="selected">
            <a href="contact.php">Contact</a>
        </li>
        <li>
            <a href="information.html">Information</a>
        </li>
        <li>
            <a href="../forms/login.php">Staff</a>
        </li>
    </ul>
</div>
<div id="body">
    <div class="content">
        <img src="../../images/telephone.jpg" alt="">
        <h2>send us a message</h2>
        <?php include("../../controller/actions/messages.php") ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <label for="firstName"> <span>first name*</span>
                <input type="text" name="firstname" id="firstName" required>
            </label>
            <label for="lastName"> <span>last name*</span>
                <input type="text" name="lastname" id="lastName" required>
            </label>
            <label for="email"> <span>email*</span>
                <input type="text" name="email" id="email">
            </label>
            <label for="phoneNumber"> <span>Phone Number</span>
                <input type="text" name="contact" id="phoneNumber">
            </label>
            <label for="subject"> <span>subject*</span>
                <input type="text" name="subject" id="subject" required>
            </label>
            <label for="message"> <span>message</span>
                <textarea name="message" id="message" cols="30" rows="10" required></textarea>
            </label>
            <input type="submit" id="submit" name="submit" value="submit">
        </form>
    </div>
    <div class="sidebar">
        <h3>contact</h3>
        <ul>
            <li>
                <span class="address">address</span>
                <ul>
                    <li>
                        OAUTHC
                    </li>
                    <li>
                        Paediatric Unit
                    </li>
                    <li>
                        13 dauda street ira quaters
                    </li>
                    <li>
                        Ojo Lagos Nigeria
                    </li>
                </ul>
            </li>
            <li>
                <span class="phone">telephone</span>
                <ul>
                    <li>
                        01-98795764
                    </li>
                </ul>
            </li>
            <li>
                <span class="email">email</span>
                <ul>
                    <li>
                        <a href="http://www.freewebsitetemplates.com/misc/contact">ogunseyin@gmail.com</a>
                    </li>
                </ul>
            </li>
            <li>
                <span class="twitter">twitter</span>
                <ul>
                    <li>
                        <a href="http://freewebsitetemplates.com/go/twitter/">@ogunseyin</a>
                    </li>
                </ul>
            </li>
            <li>
                <span class="facebook">facebook</span>
                <ul>
                    <li>
                        <a href="http://freewebsitetemplates.com/go/facebook/">www.facebook/ogunseyin</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<div id="footer">
    <div>
        <p>
            <span>2017 &copy; OAUTHC Paediatric Unit</span><a href="#" >Terms of Service</a> | <a href="#" >Privacy Policy</a>
        </p>
        <ul>
            <li id="facebook">
                <a href="http://freewebsitetemplates.com/go/facebook/">facebook</a>
            </li>
            <li id="twitter">
                <a href="http://freewebsitetemplates.com/go/twitter/">twitter</a>
            </li>
            <li id="googleplus">
                <a href="http://freewebsitetemplates.com/go/googleplus/">googleplus</a>
            </li>
            <li id="rss">
                <a href="#" >rss</a>
            </li>
        </ul>
    </div>
</div>
</body>
</html>
