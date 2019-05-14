<?php
    session_start();
    require_once '../registration/registerDAO.php';
    $id = $_GET['id'];
    $registerdao = new UserAccessObject;
    $values = $registerdao->retrieveoneUser($id);
?>




<!DOCTYPE html>
<html>
<head>
	<title>Register Confirmation</title>
	<link rel="stylesheet" type="text/css" href="../css/registerconfirm.css">
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
</head>
<body>
    <section class="head">
            <img src="../img/logo.png" alt="" width="220px" height="50px">
            <img src="img/usergrey.jpeg" alt=""width="50" height="50" class="radius">
        <ul>
            <li><a href="findjob/findjobhome.php">Find&nbsp;Job!</a></li>
            <li> <a href="../company/home.php">Dear&nbsp;Recruiter</a></li>
            <li> <a href="homefrench.php">Language</a></li>
        </ul>
    </section>
        
	<div class="form">
		<h2>Profile</h2>
			<div class="forminside">
                <label for="" name="name" class="name">Your Name</label><br>
                <div class="con">
                <?php
                    
                    if($values['user_status'] == 'A'){
                        echo $values['user_name'] ."<br>";
                    }
                ?>
                </div>
                <label for="" name="nation">Your Nationality</label><br>
                <div class="con">
                <?php   
                    if($values['user_status'] == 'A'){
                        echo $values['user_nation']."<br>";
                    }
                ?>
                </div>
                <label for="" name="gender">Your Geender</label>
                <div class="con">
                <?php
                    if($values['user_status'] == 'A'){
                        echo $values['user_gender'] ."<br>";
                    }
                ?>
                </div>
                <label for="" name="age">Put Your Age</label><br>
                <div class="con">
                <?php
                    if($values['user_status'] == 'A'){
                        echo $values['user_age'] .years ."&nbsp" .old ."<br>";
                    }
                ?>
                </div>
                <label for="" name="stay">How Long Do You Stay In Japan ?</label><br>
                <div class="con">
                <?php
                    if($values['user_status'] == 'A'){
                        echo $values['user_stay'] .years ."<br>";
                    }
                ?>
                </div>
                <label for="" name="email">E-Mail</label><br>
                <div class="con">
                <?php
                    if($values['user_status'] == 'A'){
                        echo $values['user_email'] ."<br>";
                    }
                ?>
                </div>
                <label for="" name="password">Password</label><br>
                <div class="con">
                <?php
                    if($values['user_status'] == 'A'){
                        echo $values['user_password'] ."<br>";
                    }
                ?>
                </div>
                <label for="" name="img">Your Profile Photo</label><br>
                <div class="conimg">
                <?php
                    if($values['user_status'] == 'A'){
                        echo "<img src=".$values['user_img']." width=80 height=80 id='pic'><br>";
                    }
                ?>
                </div>
                <p for="" name="text">About You</p><br>
                <textarea name="text" id="" cols="65" rows="10" class="textarea">
                <?php
                    if($values['user_status'] == 'A'){
                        echo $values['user_description'];
                    }
                ?>
                </textarea>
                    <input type="btn" onclick="location.href='thankyou.php'"value="Confirm" name="confirm">
                    <input type="btn" onclick="location.href='../login/homelogin.php'"value="Back" name="Back">
			</div>
	

</body>
</html>
