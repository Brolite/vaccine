<?php

require 'db.php';
require 'mainsql.php';

?>

<!DOCTYPE html>
<html lang="en">

<style>
    .form input {
        width: 50%;
        height: 35px;
        margin-bottom: 20px;
        font-size: 20px;
        border: none;
        border-radius: 2px;
        padding: 2px;
        background-color: rgb(231, 231, 231);
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https:cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
    <title>Vaccines</title>
</head>

<body>

    <div class="navbar">

        <div class="intro">

            <p class="intro1">भारत सरकार<br> Government of India</p>

            <p class="intro2">कार्मिक, लोक शिकायत और पेंशन मंत्रालय</br>Ministry of Personnel, Public Grievances & Pensions
            </p>
        </div>

        <div class="home">
            <ul class="topnav">
                <button class="vl"><a class="active" href="/"><i class="fa fa-home" style="font-size:20px;" aria-hidden="true"></i> Home</a></button>
                <button class="vl"><a href="#contact"><i class="fa fa-phone" style="font-size:20px;" aria-hidden="true"></i> Contact Us</a></button>
                <button class="vl"><a href="#about"><i class="fa fa-info" style="font-size:20px;" aria-hidden="true"></i> About Us</a></button>
                <button class="vl"><a href="#help"><i class="fa fa-question-circle" style="font-size:20px;" aria-hidden="true"></i> FAQs/Help</a></button>
            </ul>
        </div>
    </div>


    <div class="logo">
        <img src="./images/1.png" class="symbol1" alt="">

        <div class="center">
            <p class="heading">Vaccinate <br> Your Family</p>
        </div>

        <img src="./images/2.png" class="symbol2" alt="">
    </div>

    <div class="body">
        <div class="form-body">
            <div class="header">Registration Form</div>

            <div class="sub-header">
                <p>Enter Details</p>
                <p>Fields marked with <span>*</span> are mandatory</p>
            </div>

            <hr class="hrnormal">

            <div class="form">
                <form action="" method="POST">

                    <label for="name">Name</label><span> *</span><br>
                    <input type="text" name="name" autocomplete="false" required /><br>

                    <label for="address">Address</label><span> *</span><br>
                    <input type="text" name="address" autocomplete="off" required /><br>

                    <label for="State">State</label><span> *</span><br>
                    <input list="state" name="state" autocomplete="off" required /><br>
                    <datalist id="state">
                        <option value="Andaman and Nicobar Islands">
                        <option value="Andhra Pradesh">
                        <option value="Andhra Pradesh">
                        <option value="Assam">
                        <option value="Bihar">
                        <option value="Chandigarh">
                        <option value="Chhattisgarh">
                        <option value="Dadra & Nagar Haveli and Daman & Diu">
                        <option value="Delhi">
                        <option value="Goa">
                        <option value="Gujarat">
                        <option value="Haryana">
                        <option value="Himachal Pradesh">
                        <option value="Jammu and Kashmir">
                        <option value="Lakshadweep">
                        <option value="Mizoram">
                        <option value="Jharkhand">
                        <option value="Karnataka">
                        <option value="Kerala">
                        <option value="Ladakh	">
                        <option value="	Madhya Pradesh">
                        <option value="Maharashtra">
                        <option value="Manipur">
                        <option value="Meghalaya">
                        <option value="Nagaland">
                        <option value="Odisha">
                        <option value="Puducherry">
                        <option value="Punjab">
                        <option value="Rajasthan">
                        <option value="Sikkim">
                        <option value="Tamil Nadu">
                        <option value="Tripura">
                        <option value="Telangana">
                        <option value="Uttar Pradesh">
                        <option value="Uttarakhand">
                        <option value="West Bengal">
                    </datalist>

                    <label for="pin-code">Pin-code</label><span> *</span><br>
                    <input type="text" name="pincode" autocomplete="off" min="6" max="6" pattern="[1-9]{1}[0-9]{5}" placeholder="7xxxx0" required /><br>

                    <label for="phone">Mobile number</label><span> *</span><br>
                    <input type="text" name="phone" autocomplete="off" min="10" max="10" pattern="[1-9]{1}[0-9]{9}" placeholder="91xxxxxxx19" required /><br>

                    <label for="family">Family member</label><span> *</span><br>
                    <input type="number" name="family" autocomplete="off" pattern="[1-9]{1}" min="1" max="9" required /><br>

                    <label for="country">Country</label><span> *</span><br>
                    <input type="text" name="country" pattern="[a-zA-Z]*" oninvalid="setCustomValidity('Please enter on alphabets only. ')" autocomplete="off" required /><br>

                    <label for="district">District</label><span> *</span><br>
                    <input type="text" name="district" autocomplete="off" required /><br>

                    <label for="email">E-mail</label><span> *</span><br>
                    <input type="text/email" name="email" autocomplete="off" pattern="[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*" placeholder="xxx@xx.xx" required /><br>

                    <hr class="hrnormal">

                    <button type="submit" name="submit" class="submit"><i class="fa fa-user-plus"></i> Register</button>
                </form>
            </div>
        </div>
    </div>

    <div class="footer">

        <p class="para">This site is designed, developed & hosted by Brolite Informatics Centre, Member of Brolite, Co-Leader of Brolite and Content owned by Department of Gags & to fool public..</p>
        <hr class="hrfoot">
        <p class="copy">@BROLITE 2021</p>
    </div>
</body>

</html>