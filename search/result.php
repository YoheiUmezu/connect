<?php
    $rows = unserialize($_GET['result']); // unserialize mean converting it back to array
    //print_r($rows);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/result.css">
    <title>Result</title>
</head>
<body>
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
        <div class="search">
            <form method="post">
				<div class="search">
					<div class="search1">
						<input type="text" name="searchbox" placeholder="put the name of your company or occupation" required id="job">
						<!---<label  class="jobsearch" for="job">company or occupation</label>--->
					</div>
					<div class="search2">
						<input type="text" name="searchbox" placeholder="put the working place" required id="place">
						<!---<label  class="jobsearch" for="place">company or occupation</label>--->
						<button type="submit" value="search" name="search" class="searchbtn">Search</button>
					</div>
				</div>
			</form>
        </div>
    </section>

    <div class="option">
        Search Option
    </div>

        <section class="result">
            <?php foreach($rows as $key=>$row){ ?>
                <div class="result2">
                    <ul>
                    <p class="companyresult">Company Name:
                    <?php
                            $company_id = $row['company_id'];
                            echo "<a href='../reviews/review.php?id=$company_id'> ";
                            if($row['company_status'] == 'A'){
                                echo $row['company_name'];
                            } else {
                                echo "error";
                            }echo "</a>"
                        ?></p>
                            <p class="companyresult">Company Address:
                            <?php
                                if($row['company_status'] == 'A'){
                                    echo $row['company_pre'] .$row['company_city'] .$row['company_street'];
                                } else {
                                    echo "error";
                                }
                            ?></p>
                    </ul>
                    </div>
                    <?php } ?>
                    </ul>
                </div>
        </section>

        <section class="review">

        </section>

   
            

        


   
</body>
</html>