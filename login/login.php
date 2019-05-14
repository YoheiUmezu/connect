<?php
    session_start();
    require_once 'loginDAO.php';
    $logindao = new UserAccessObject;
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $checklogin = $logindao->loginUser($email, $password);
        print_r($checklogin);
        if(!empty($checklogin)){
            $_SESSION['id'] = $checklogin['user_id'];
            $_SESSION['email'] = $checklogin['user_email'];
            $_SESSION['password'] = $checklogin['user_password'];
            $_SESSION['status'] = $checklogin['user_status'];
            if($checklogin['user_status'] == 'A'){
                header('Location: homelogin.php?result='); // if regular user, go to homelogin
            }else{
                header('Location: usernotfound.php'); // if new user, go to change usernotfound page
            }
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Log In to ConNect</title>
	<link rel="stylesheet" type="text/css" href="login.css">
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
</head>
<body>
    <form method="post">
        <section class="head">
                <a href="../home.php"><img src="../img/logo.png" alt="" width="220px" height="50px"></a>
                <img src="../userimg/grey.jpg" alt=""width="50" height="50" class="radius">
            <ul>
                <li><a href="../findjob/findjobhome.php">Find&nbsp;Job!</a></li>
                <li> <a href="../../company/home.php">Dear&nbsp;Recruiter</a></li>
                <li> <a href="#popup">Language</a></li>
            </ul>
        </section>
        <h2>Log In to ConNect</h2>
    <form method="post">
	<div class="form">
			<div class="forminside">
                <div class="facebook">
                    <input type="submit" value="Log in with Facebook" name="facebook">
                </div>
                <p class="or">or</p>
                <div class="email">
                <!--<label for="" name="email">E-Mail</label><br>--->
                    <input type="email" name="email" placeholder="E-Mail">
                </div>
                <div class="pass">
                <!---<label for="" name="password">Password</label>--->
                    <input type="password" name="password" id="" placeholder="password">
                
                </div>
                <input type="submit" value="Login" name="login" class="submit">
                <input type="submit" onclick="location.href='../home.php'"value="Back" name="Back" class="submit">
            </div>
            <div class="noaccount">
                <span ><a href="../registration/register.php">Don't you have an account ?</a></span>
            </div>
            <div class="signup">
                <input type="submit" value="Sign Up" name="signup">
            </div>
            <div class="forget">
                <span>Forget your password ?</span>
            </div>
    </form>

        <div class="popupcontent" id="popup">
            <a href="" class="popup__close">&times;</a>
                <h2>Choose a language</h2>
                    <div class="language">
                        <ul>
                            <li>Japanese</li>
                            <img src="../Flags/flags/32/Japan.png" alt="">
                            <li>English</li>
                            <img src="../Flags/flags/32/United Kingdom(Great Britain).png" alt="">
                            <li>Chinese</li>
                            <img src="../Flags/flags/32/China.png" alt="">
                            <li>Vietnamise</li>
                            <img src="../Flags/flags/32/Viet Nam.png" alt="">
                        </ul>
                        <ul>
                            <li>Korean</li>
                            <img src="../Flags/flags/32/South Korea.png" alt="">
                            <li>Thai</li>
                            <img src="../Flags/flags/32/Thailand.png" alt="">
                            <li>Portuguese</li>
                            <img src="../Flags/flags/32/Brazil.png" alt="">
                            <li><a href="Frenchhome.php">French</li>
                            <img src="../Flags/flags/32/France.png" alt="">
                        </ul>
                    </div>
        </div>
</body>
</html>
