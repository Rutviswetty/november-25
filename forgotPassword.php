<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family First</title>
    <link rel="stylesheet" href="/html/familyfirst/css/bootstrap.min.css">
    <link rel="stylesheet" href="/html/familyfirst/css/fontAwesome.min.css">
    <link rel="stylesheet" href="/html/familyfirst/css/style.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <style>
     
        @media (min-width: 1199px){
            .container.old {
                max-width: 1140px !important;}
        }

       .fa-eye-slash{
            display: none;
        }
      .hideEye .fa-eye-slash{
            display: block;
        }
        .hideEye .fa-eye{
            display: none;
        }
       
        .loginPage{
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .registerPageMainContent {
            
            display: flex;
            align-items: flex-start;
        }
        .register_left_section {
            width: 60%;
            display: inline-block;
            padding-right: 20px;
        }
        .register_right_section {
            padding: 30px 30px 0px 20px;
            width: 40%;
            display: inline-block;
        }
        .tabSectionBox {
            margin-top: 30px;
        }
        .register-text-box h2.title {
            font-family: 'Poppins', sans-serif!important;
            font-size: 32px;
            font-weight: 400;
            line-height: 48px;
            letter-spacing: 0em;
            
            
        }
        .title-tag-line {
            font-family: 'Poppins', sans-serif!important;
            font-size: 14px;
            font-weight: 400;
            line-height: 16px;
            
            
        }
        a.tabLink{
            
            font-family: 'Poppins', sans-serif!important;
            line-height: 32px;
        }
        
        ul.tabs-nav {
            padding: 10px 13px;
            border-radius: 30px;
            width: 80%;
            background-color: #192D54E5;
            display: inline-block;
        }
        .tabBtn .tabLink{
            width: 100%;
            background: transparent;
            color: #fff;
            display: inline-block;
            border-radius: 25px!important;
        }
        .tabBtn.tab-active .tabLink{
            background: #C2683C;
            color: #fff;
            border-radius: 25px;
        }
        
        .tabs {
            max-width:100%;
        }
        
        .tabs-nav li:first-child .tabLink {
            border-right: 0;
            border-top-left-radius: 6px;
        }
        .tabs-nav li:last-child .tabLink {
            border-top-right-radius: 6px;
        }
        .tabLink {
            text-decoration: none;
        }
        
        
        .tabs-stage {
            
            border-radius: 0 0 6px 6px;
            border-top: 0;
            clear: both;
            padding: 24px 0px;
            
        }
        .tabs-nav .tabBtn {
            float: left;
            width: 50%;
            text-align: center;
        }
        
        .inputContol{
            text-align: left;
        }
        .input-group label{
            font-size: 15px;
        }
        .customInput {
            height: 40px;
            width: 100%;
            border-radius: 30px!important;
            border: 1px solid #ccc;
            padding: 0 10px;
        }
        
        input[type="text"], input[type="password"] {
            -webkit-appearance: none;
            border-radius: 1px;
            box-sizing: border-box;
            font-size: 14px;
            height: auto;
            padding: 0.5em;
            padding-left: 15px
        }
        input:focus-visible {
            outline-offset: 0px;
            
            outline: none;
        }
        
        input#Rememeber {
            position: relative;
            top: 2px;
        }
        /* suppress IE >= 10 native functionality that can show password */
        input[type="password"]::-ms-reveal {
            display: none;
        }
        
        .input-group {
            position: relative;
            width: 100%;
            margin-bottom: 20px;
        }
        .toggleEye {
            background: none;
            border: none;
            color: #000;
            transform: translateY(-50%);
            font-weight: 600;
            position: absolute;
            right: 10px;
            top: 50%;
            z-index: 9;
        }
        .submitBtn {
            color: #fff!important;
            text-align: center;
            display: inline-block;
            border-radius: 30px;
            background-color: #C2683CE5;
            width: 120px;
            line-height: 34px;
            
        }
        .rememberSection {
            font-size: 12px;
            display: flex;
            justify-content: space-between;
        }
        img{
            width: 100%;
        }
        li{
            list-style-type: none;
        }
        button{
            padding: 0;
            border: 0px;
        }
        a:hover,a{
            text-decoration: unset;
            color: black;
            padding-right: 65px;
        }
        .otp {
            border: none;
            border-bottom: 1px solid black;
        }
        label {
            padding-right: 65%;
        }
        .passwordDiv{
            position: relative;
        }
        .passwordDiv .icomxx {
            position: absolute;
            right: -50px;
            top: 31px;
        }
        svg.svg-inline--fa.fa-eye-slash.customEyeIcon {
            position: relative;
            top: 5px;
            right: 20px;
        }

    </style>
</head>
<body>


<section class="loginPage">
    <div class="container old">
        <div class="registerPageMainContent">
            <div class="register_left_section">
                <img src="/html/familyfirst/img/Rectangle 199.png" class="banner-poster" style="width: 100%" alt="banner-poster">
            </div>
            <div class="register_right_section">
                <div class="register-text-box text-center">
                    <h2 class="title">Forgot Password</h2>
                    <!-- section-2 forgot -->
                    <div class="section2main">
                        <form method="post" class="needs-validation newhide"
                              enctype="multipart/form-data"
                              action="<?php echo constant('LOCAL_URL') . '/do-login'; ?>"
                              novalidate
                              id="login-form2">
                            <div class="neww-box" id="resetPasswordSection"  >
                                
                                    <p class="p-color" id="resetPasswordSection">To get your Password</p><br>
                                    <div class="inputBox form-group login-three-inputs">

                                        <label for="email" style="padding-right: 270px;"><b>Email Address</b></label>
                                        <input type="email" class="customInput" id="emailCheck" name="email" placeholder="Enter Your Email Address">
                                        <div class="invalid-feedback" style="">
                                            Please enter your email address
                                        </div>
                                    </div>
                                    <input type="hidden" id="company_id"
                                           value="<?php echo FAMILYFIRST_COMPANY_ID; ?>">
                                    <br>
                                    <div class="login_button pt-0 text-end newhide">
                                        <a href="/login" type="button" class="submitBtn p-0" id="getBackLogin">Back
                                        </a>
                                        <button type="button" class="submitBtn" onclick="checkEmailForgot()"
                                                style="width: 40%;">Get Validation Code
                                        </button>
                                    </div>
                                    
                            </div>
                        </form>
                    </div>

                    <!-- section-3  -->
                    <div class="section-3" id="newpassword" style="display: none;">
                        <h6 class="veri-color">Verification Code</h6>
                        <form action="" class="mt-3 loginform">
                            <div class="d-flex" style="width: 60%;">
                                <div class="col px-2 ">
                                    <input translate="no" class="otp w-100" type="text" name="otp[]" maxlength="1" id="input0" onkeyup="handleInput(this, 'input1', 'input0', 'input0', 'input0')">
                                </div>
                                
                                <div class="col px-2">
                                    <input translate="no" class="otp w-100" type="text" name="otp[]" maxlength=1 id="input1" onkeyup="handleInput(this, 'input2', 'input0', 'input3', 'input4')">
                                </div>
                                
                                <div class="col px-2">
                                    <input translate="no" class="otp w-100" type="text" name="otp[]" maxlength=1 id="input2" onkeyup="handleInput(this, 'input3', 'input2', 'input1', 'input4')">
                                </div>
                                
                                <div class="col px-2">
                                    <input translate="no" class="otp w-100" type="text" name="otp[]" maxlength=1 id="input3" onkeyup="handleInput(this, 'input4', 'input3', 'input2', 'input1')"></div>
                            </div>
                            
                            <div class="text-end">
                                <a href="#" class="resentotp" onclick="resendForgotOtp()">Resend OTP</a>
                            </div>
                            <div class="login_button pt-0 text-end mt-2 newhide">

                                <button type="button" class="submitBtn"
                                        onclick="checkEmailOtp()">Submit
                                </button>
                            </div>
                            <div class="text-end mt-1">
                                <a class="resentotp border-radius50" id="changeemail" href="#">Change your email
                                    address</a>
                            </div>
                        </form>
                    </div>

                    <!-- section-4 -->
                    <div class="section4-new" id="newcofpass" style="display: none;">
                        <form action="" method="post" name="changePasswordForm" id="changePasswordForm">
                            <div class="inputBox form-group login-three-inputs mb-0 passwordDiv">
                                <label><b>New Password</b></label>
                                <input translate="no" class="mb-1 customInput passwordtrength" type="password" autocomplete="on"
                                       name="newPass" id="newPass"
                                       required>
                                
                                <div class="icomxx">
                                    <a class="slide-toggle newslide" id="togglePasswordNew">
<!--                                    <a id="togglePassword1">-->
                                        <i id="eyeIcon1" class="fa fa-eye"></i>
<!--                                        "fa-solid fa-eye-slash customSlashEyeIcon"></i>-->
                                        <i class="fa-solid fa-eye-slash customEyeIcon"></i>
                                    </a>
                                </div>
                            </div>
                            <br>
                            <div class="inputBox form-group login-three-inputs mb-0 passwordDiv">
                                <label><b>Confirm Password</b></label>
                                <input translate="no" class="mb-1 customInput" type="password" autocomplete="on" name="conPassword"
                                       id="conPassword"
                                       required>
                               
                                <div class="icomxx">
                                    <a class="toggleEye2" id="togglePasswordConf">
                                        <i id="eyeIcon2" class="fa fa-eye"></i>
<!--                                        "fa-solid fa-eye-slash customSlashEyeIcon"></i>-->
                                        <i class="fa-solid fa-eye-slash customEyeIcon"></i></a>
                                </div>
                            </div>
                            <br>
                            <div class="login_button pt-0 text-end newhide">
                                <button type="button"  style="padding: 5px 10px" class=" submitBtn cpassword w-auto   border-radius50 login-button login-new"
                                        onclick="changePassword()">Change
                                    Password
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script src="/html/familyfirst/js/bootstrap.min.js"></script>
<script src="/html/familyfirst/js/fontawesome.js"></script>
<script src="/html/familyfirst/js/custom.js"></script>
<script src="<?php echo LOCAL_URL ?>/assets/js/application/auth/login.js?v=1.0.3"></script>
<?php if (isset($response)) { ?>
    <script>
        alert("<?php echo (isset($response)) ? $response : '' ?>");
    </script>
<?php } ?>
<script>
    $("#changeemail").click(function() {
        $("#newpassword").css('display', 'none');
        $("#resetPasswordSection").css('display', 'block');
    });
    // Show the first tab by default
    $('.tabs-stage .tabBoxItems').hide();
    $('.tabs-stage .tabBoxItems:first').show();
    $('.tabs-nav .tabBtn:first').addClass('tab-active');

    // Change tab class and display content
    $('.tabs-nav .tabLink').on('click', function(event){
        event.preventDefault();
        $('.tabs-nav .tabBtn').removeClass('tab-active');
        $(this).parent().addClass('tab-active');
        $('.tabs-stage .tabBoxItems').hide();
        $($(this).attr('href')).show();
    });
</script>
<script>


    $('#inputConfPassword').on("keyup", function () {
        $('#inputConfPassword').css("border", "1px solid #ced4da")
        $('#passwordError').addClass("d-none");
    })
    let passwordInput = document.getElementById('newPass'),
        toggle = document.getElementById('togglePasswordNew'),
        icon =  document.getElementById('eyeIcon1');


   

    function togglePasswordNew() {
        
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            icon.classList.add("fa-eye-slash");
            //toggle.innerHTML = 'hide';
        } else {
            passwordInput.type = 'password';
            icon.classList.remove("fa-eye-slash");
            //toggle.innerHTML = 'show';
        }
    }
    toggle.addEventListener('click', togglePasswordNew, false);

    let passwordInputconf = document.getElementById('conPassword'),
        toggleconf = document.getElementById('togglePasswordConf'),
        iconconf =  document.getElementById('eyeIcon2');

    function togglePasswordConfNew() {

        if (passwordInputconf.type === 'password') {
            passwordInputconf.type = 'text';
            iconconf.classList.add("fa-eye-slash");
            //toggle.innerHTML = 'hide';
        } else {
            passwordInputconf.type = 'password';
            iconconf.classList.remove("fa-eye-slash");
            //toggle.innerHTML = 'show';
        }
    }

    function checkInput() {

    }

    toggleconf.addEventListener('click', togglePasswordConfNew, false);
    passwordInput.addEventListener('keyup', checkInput, false);
</script>


<script>
    $(".slide-toggle.newslide").click(function(){
        $(this).toggleClass("hideEye");
    });

    $(".toggleEye2").click(function(){
        $(this).toggleClass("hideEye");
    });
</script>


</body>
</html>