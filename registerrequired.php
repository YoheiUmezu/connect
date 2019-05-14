<?php
    require_once 'search/searchDAO.php';
    $searchdao = new UserAccessObject;
    if(isset($_POST['search'])){
        $name = $_POST['searchbox'];
		$row = $searchdao->searchReview($keyword);
		if(empty($row)){
            header('Location: error.php');
        }else{
             // this will pass the row array to the next page which is 
            //result.php
            header('Location: ../search/result.php?result='.urlencode(serialize($row)));
        }
		/*print_r($post);*/
    }   
?>
<!DOCTYPE html>
<html>
<head>
	<title>For New Workers</title>
	
	<link rel="./css/animate.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	

	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<section class="signup">
		<ul>
			<div class="signup1">
			<span class="use"><b>Use Now !</b></span><br>
			<span class="use"><a href="registration/register.php"><input type="button" name="Send" value="Sign Up"></a></span>
			</div>
			<div class="signup2">
			<span class="use">Are you a member ?</span><br>
			<span class="use"><a href="login/login.php"><input type="button" name="login" value="Long In"></a></span>
			</div>
		</ul>

	</section>
			
		</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="./javascript/script.js"></script>

</body>



</html>
