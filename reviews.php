<?php
    session_start();
    require_once 'reviewDAO.php';
    $reviewdao = new UserAccessObject;
    $review = $reviewdao->retrieveReviewByName($name);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Review</title>
	<link rel="stylesheet" type="text/css" href="../css/review.css">
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
</head>
<body>
	<div class="header" >
    <form method="post">
	<div class="menu" id="home">
			<ul>
                <li> <a href="../home.php">HOME</a></li>
				<li>Find Job !</li>
				<li> <a href="../registration/register.php">REGISTER</a></li>
				<li><a href="../login/login.php">LOG IN</a></li>
			</ul>
		</div>
	</header>	
	<div class="form">
		<h2>Post</h2>
			<div class="forminside">
                <label for="">Name Of Company</label><br>
                <div class="con">
                <?php
                    if($post['company_status'] == 'A'){
                        echo $post['company_name']."<br>";
                    }
                ?>
                </div>
                <label for="" name="">Address</label><br>
                <div class="con">
                <?php
                    if($post['company_status'] == 'A'){
                        echo "<th>" .$post['company_pre'] .$post['company_city'] .$post['company_street']."</td>";
                    }
                ?>
                </div>
                <label for="" >Occupation</label><br>
                <div class="con">
                <?php
                    if($post['company_status'] == 'A'){
                        echo $post['company_occu']."</occu>";
                    }
                ?>
                </div>
                <label for="" >How long do you work ?</label><br>
                <div class="con">
                <?php
                    if($post['company_status'] == 'A'){
                        echo $post['company_year']."</br>";
                    }
                ?>
                </div>
                <p>Please evaluate from 1 to 5 <br>(5 is the highest)</p><br>
                        <span class="hour">Working Time:</span>
                        <div class="con">
                            <?php
                                if($post['company_status'] == 'A'){
                                    echo $post['company_time']."</br>";
                                }
                            ?>
                        </div>
                            <span class="hour">Salary:</span>
                            <div class="con">
                            <?php
                                if($post['company_status'] == 'A'){
                                    echo $post['company_sal']."</br>";
                                }
                            ?>
                            </div>

                        
                            <span class="hour">Atmosphere:</span>
                            <div class="con">
                            <?php
                                if($post['company_status'] == 'A'){
                                    echo $post['company_atm']."</br>";
                                }
                            ?>
                        </div>

                        
                            <span class="hour">Compliance:</span>
                            <div class="con">
                            <?php
                                if($post['company_status'] == 'A'){
                                    echo $post['company_comp']."</br>";
                                }
                            ?>
                        </div>
                        <p for="" >Leave a comment</p><br>
                            <div class="textarea">
                                <textarea name="text" id="" cols="65" rows="10" class="textarea">
                                <?php
                                    if($post['company_status'] == 'A'){
                                        echo "<th>" .$post['company_review']."</td>";
                                    }
                                ?>
                                </textarea><br>
                            </div>
                    <input type="submit" name="post" value="Register">
					<input type="submit" name="back" value="Back">
					</div>
                    
					
			</div>
	

</body>
</html>
