<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family First</title>
    <link rel="stylesheet" href="/html/familyfirst/css/bootstrap.min.css">
    <link rel="stylesheet" href="/html/familyfirst/css/fontAwesome.min.css">
    <link rel="stylesheet" href="/html/familyfirst/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" translate="no"
            src="<?php echo constant('LOCAL_URL') . '/assets/plugins/sweetalerts/sweetalert2.min.js ' ?>"></script>
    <style>
        .toggleEye .fa-eye-slash{
            display: none;
        }
        .toggleEye.hideEye .fa-eye-slash{
            display: block;
        }
        .toggleEye.hideEye .fa-eye{
            display: none;
        }
        .toggleEye2 .fa-eye-slash{
            display: none;
        }
        .toggleEye2.hideEye .fa-eye-slash{
            display: block;
        }
        .toggleEye2.hideEye .fa-eye{
            display: none;
        }
       
        @media (min-width: 1199px){
          .container.old {
          max-width: 1140px !important;}
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

.inputControl{
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
}

input[type="text"], input[type="password"] {
    -webkit-appearance: none;
    border-radius: 1px;
    box-sizing: border-box;
    font-size: 14px;
    height: auto;
    padding: 0.5em;
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
.toggleEye2,
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
    </style>
</head>
<body>


<section class="loginPage">
        <div class="container old">
            <div class="registerPageMainContent">
                <div class="register_left_section">
                    <img src="/html/FamilyFirst/img/Rectangle 199.png" class="banner-poster" style="width: 100%" alt="banner-poster">
                </div>
                <div class="register_right_section">
                    <div class="register-text-box text-center">
                        <h2 class="title">Login Here</h2>
                       
                        <div class="title-tag-line" style="display:none;">Register one-time, so you can log in in the future. </div>
                        <div class="tabSectionBox">
                            <div class="tabs">
                                <ul class="tabs-nav">
                                  <li class="tabBtn"><a class="tabLink" href="#tab-1">Login</a></li>
                                  <li class="tabBtn"><a class="tabLink" href="#tab-2">Register</a></li>
                                </ul>
                                <div class="tabs-stage">
                                  <div class="tabBoxItems" id="tab-1">
                                      <form method="post"
                                            enctype="multipart/form-data"
                                            action="<?php echo constant('LOCAL_URL') . '/do-login'; ?>"
                                            id="login-form1">
                                      <div class="input-group">
                                          <label for="username"><b>Email Address</b></label>
                                          <input type="email" class="customInput ps-3" id="email" name="email" placeholder="Enter Your Email Address">
                                      </div>
                                      <div class="input-group">
                                        <label for="txtPassword"><b>Password</b></label>
                                        <span class="w-100 position-relative">
                                           <input type="password" id="password" placeholder="Enter Your Password" class="customInput w-100 ps-3" name="password" ">
                                            <button type="button" id="btnToggle" class="toggleEye">
                                                <i id="eyeIcon" class="fa fa-eye"></i>
                                                <i class="fa-solid fa-eye-slash"></i>
                                            </button>
                                        </span>
                                      </div>
                                      <div class="rememberSection">
                                        
                                        <span class="forgerSpan"><a href="/forgot-password">Forgot Password ?</a></span>
                                          <div class="text-end "><button type="submit" class="submitBtn" href="#" >Login</button></div>
                                      </div>
                                      
                                      </form>
                                  </div>



                                  <div class="tabBoxItems" id="tab-2" style="display: none">
                                      <form id="msform" class="needs-validation" action="<?php echo LOCAL_URL . '/registerDetail'; ?>"
                                            method="post" enctype="multipart/form-data" novalidate>
                                          <input type="hidden" name="company_id" value="<?php echo FAMILYFIRST_COMPANY_ID; ?>">
                                    <div class="input-group">
                                        <label for="username"><b>Email Address</b></label>
                                        <input type="email" class="customInput ps-3" id="email" name="email" placeholder="Enter Your Email Address">
                                      </div>
                                          <div class="input-group">
                                              <label for="username"><b>First Name</b></label>
                                              <input type="text" class="customInput ps-3" id="first_name" name="first_name" placeholder="Enter Your First Name">
                                          </div>
                                          <div class="input-group">
                                              <label for="username"><b>Last Name</b></label>
                                              <input type="text" class="customInput ps-3" id="last_name" name="last_name" placeholder="Enter Your Last Name">
                                          </div>
                                      <div class="input-group">
                                          <label for="txtPassword"><b>Password</b></label>
                                        <span class="w-100 position-relative">
                                            <input type="password" id="reg-password" class="customInput w-100 ps-3" name="password" />
                                            <button type="button" id="reg-btnToggle" class="toggleEye2">
                                                <i id="reg-eyeIcon" class="fa fa-eye"></i>
                                                <i class="fa-solid fa-eye-slash"></i>
                                            </button>
                                        </span>
                                      </div>
                                      <div class="text-end mt-3"><button type="submit" class="submitBtn" href="#" >Register</button></div>
                                      </form>
                                  </div>
                                  
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    
    
    
    <?php
    if (isset($error) && $error == 2) {
        
        echo '<script type="text/javascript">';
        echo '$(document).ready(function(){ incorrectEmailError() });';
        echo '</script>';
        
    }
    
    if (isset($error) && $error == 1) {
        
        echo '<script type="text/javascript">';
        echo '$(document).ready(function(){ incorrectPasswordError() });';
        echo '</script>';
        
    } ?>



    <script>
        function incorrectPasswordError() {
            swal({
                type: 'error',
                title: 'Incorrect Email or Password',
                text: 'Please enter correct email or password to login !',
                buttons: true,
                customClass: 'swal-wide',
                confirmButtonText: "Cancel",
                backdrop: false,
                dangerMode: true,
                confirmButtonColor: '#00d77cff'
            })
                .then((inst) => {
                    if (inst) {
                        window.location.href = '<?php LOCAL_URL ?>./login';
                    }
                });
        }

        function incorrectEmailError() {
            swal({
                type: 'error',
                title: 'Email does not exist!',
                text: '',
                buttons: true,
                customClass: 'swal-wide',
                confirmButtonText: "Cancel",
                backdrop: false,
                dangerMode: true,
                confirmButtonColor: '#00d77cff'
            })
                .then((inst) => {
                    if (inst) {
                        window.location.href = '<?php LOCAL_URL ?>./login';
                    }
                });
        }

    </script>
    
    
    
    
    
    
    
    </section>
  

    <script src="/html/familyfirst/js/bootstrap.min.js"></script>
    <script src="/html/familyfirst/js/fontawesome.js"></script>
    <script src="/html/familyfirst/js/custom.js"></script>
<?php if (isset($response)) { ?>
    <script>
        alert("<?php echo (isset($response)) ? $response : '' ?>");
    </script>
<?php } ?>
    <script>
        // Show the first tab by default
$('.tabs-stage .tabBoxItems').hide();
$('.tabs-stage .tabBoxItems:first').show();
$('.tabs-nav .tabBtn:first').addClass('tab-active');

// Change tab class and display content
$('.tabs-nav .tabLink').on('click', function(event){
  event.preventDefault();
  if($(this).attr("href") == "#tab-2") {
      $(".register-text-box .title").text("Register Here");
      $(".register-text-box .title-tag-line").show();
      $(".banner-poster").attr("src", "/html/FamilyFirst/img/img2.png");
  }else {
      $(".register-text-box .title").text("Login Here");
      $(".register-text-box .title-tag-line").hide();
      $(".banner-poster").attr("src", "/html/FamilyFirst/img/Rectangle 199.png");
  }
  $('.tabs-nav .tabBtn').removeClass('tab-active');
  $(this).parent().addClass('tab-active');
  $('.tabs-stage .tabBoxItems').hide();
  $($(this).attr('href')).show();
});
    </script>
    <script>
 let passwordInput = document.getElementById('password'),
    toggle = document.getElementById('btnToggle'),
    icon =  document.getElementById('eyeIcon');

 let passwordInput2 = document.getElementById('reg-password'),
     toggle2 = document.getElementById('reg-btnToggle'),
     icon2 =  document.getElementById('reg-eyeIcon');

function togglePassword() {
  if (passwordInput.type === 'password') {
    passwordInput.type = 'text';
    icon.classList.add("fa-eye-slash");
    //toggle.innerHTML = 'hide';
  } else {
    passwordInput.type = 'password';
    icon.classList.remove("fa-eye-slash");
    // toggle.innerHTML = 'show';
  }
}

 function togglePassword2() {
     if (passwordInput2.type === 'password') {
         passwordInput2.type = 'text';
         icon2.classList.add("fa-eye-slash");
         //toggle.innerHTML = 'hide';
     } else {
         passwordInput2.type = 'password';
         icon2.classList.remove("fa-eye-slash");
         //toggle.innerHTML = 'show';
     }
 }

function checkInput() {

}
 toggle2.addEventListener('click', togglePassword2, false);
toggle.addEventListener('click', togglePassword, false);

passwordInput.addEventListener('keyup', checkInput, false);
    </script>
<script>
    $(".toggleEye").click(function(){
        $(this).toggleClass("hideEye");
    });

    $(".toggleEye2").click(function(){
        $(this).toggleClass("hideEye");
    });
</script>
</body>
</html>