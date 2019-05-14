<?php
    session_start();
    require_once 'reviewDAO.php';
    $id = $_GET['id'];
    $reviewdao = new UserAccessObject;
    $review = $reviewdao->retrieveoneReview($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/review.css">

    <title>Review</title>
</head>
<body>
<form method="post">
    <section class="head">
            <a href="../home.php"><img src="../img/logo.png" alt="" width="220px" height="50px"></a>
            <img src="../userimg/grey.jpg" alt=""width="50" height="50" class="radius">
            <span class="userlogin"><a href="login/login.php">Log&nbsp;In</a></span>
            <span class="userlogin"><a href="registration/register.php">Register</a></span>
        <ul>
            <li><a href="findjob/findjobhome.php">Find&nbsp;Job!</a></li>
            <li> <a href="../company/home.php">Dear&nbsp;Recruiter</a></li>
            <li> <a href="homefrench.php">Language</a></li>
        </ul>
    </section>
    <section class ="container">
        Company Review
    </section>
    <form method="company">
        
    <section class="result">
        <div class="data">
            Total Data
        </div>
            <div class="item">
                <li>Name Of Company</li>
                <div class="info">
                <?php
                if($review['company_status'] == 'A'){
                echo $review['company_name'];
                    } else {
                            echo "error";
                        }?>
                </div>
            </div>
            <div class="item">
                <li>Adress</li>
                <div class="info">
                <?php
                if($review['company_status'] == 'A'){
                echo $review['company_pre'] .$review['company_city'] .$review['company_street'];
                    } ?>
                </div>
            </div>
            <div class="item">
                <li>Working Time</li>
                <div class="info">
                <?php
                if($review['company_status'] == 'A'){
                echo $review['company_time'];
                    } else {
                            echo "error";
                        }?>
                </div>
            </div>
            <div class="item">
                <li>Salary</li>
                <div class="info">
                <?php
                if($review['company_status'] == 'A'){
                echo $review['company_sal'];
                    } else {
                            echo "error";
                        }?>
                </div>
            </div>
            <div class="item">
                <li>Atmosphere</li>
                <div class="info">
                <?php
                if($review['company_status'] == 'A'){
                echo $review['company_atm'];
                    } else {
                            echo "error";
                        }?>
                </div>
            </div>
            <div class="item">
                <li>Compliance</li>
                <div class="info">
                <?php
                if($review['company_status'] == 'A'){
                echo $review['company_comp'];
                    } else {
                            echo "error";
                        }?>
                </div>
            </div>
            <div class="item">
                <li>Total Score</li>
                <div class="info">
                <?php
                if($review['company_status'] == 'A'){
                echo ($review['company_time'] + $review['company_sal'] + $review['company_atm'] + $review['company_comp']) / 4;
                    } else {
                            echo "error";
                        }?>
                </div>
            </div>
        </ul>
    </section>
        <section class="reviews">
            <div class="reviewers">
                <li>Nationality</li>
                <div class="reviewsname">
                <?php
                if($review['user_status'] == 'A'){
                echo $review['user_nation'];
                    } else {
                            echo "error";
                        }?>
                </div>
                <li>Age</li>
                <div class="reviewsname">
                <?php
                if($review['user_status'] == 'A'){
                echo $review['user_age'] ."years" ."old";
                    } else {
                            echo "error";
                        }?>
                </div>
                <div class="comment">
                    <input type="button" name="review" value="review">
                </div>
            </div>
            <div class="reviewers">
                <li>Nationality</li>
                <div class="reviewsname">
                <?php
                if($review['user_status'] == 'A'){
                echo $review['user_nation'];
                    } else {
                            echo "error";
                        }?>
                </div>
                <li>Age</li>
                <div class="reviewsname">
                <?php
                if($review['user_status'] == 'A'){
                echo $review['user_age'] ."years" ."old";
                    } else {
                            echo "error";
                        }?>
                </div>
                <div class="comment">
                    <input type="button" name="review" value="review">
                </div>
            </div>
            <div class="reviewers">
                <li>Natonality</li>
                <div class="reviewsname">
                <?php
                if($review['user_status'] == 'A'){
                echo $review['user_nation'];
                    } else {
                            echo "error";
                        }?>
                </div>
                <li>Age</li>
                <div class="reviewsname">
                <?php
                if($review['user_status'] == 'A'){
                echo $review['user_age'] ."years" ."old";
                    } else {
                            echo "error";
                        }?>
                </div>
                <div class="comment">
                    <input type="button" name="review" value="review">
                </div>
            </div>
        </section>



</form>
</body>
</html>