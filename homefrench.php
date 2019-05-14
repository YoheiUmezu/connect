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
	
	

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
		<section class="head">
				<img src="img/logo.png" alt="" width="220px" height="50px">
				<img src="img/usergrey.jpeg" alt=""width="50" height="50" class="radius">
				<span class="userlogin"><a href="login/login.php">Log&nbsp;In</a></span>
				<span class="userlogin"><a href="registration/register.php">Register</a></span>
			<ul>
				<li><a href="findjob/findjobhome.php">Find&nbsp;Job!</a></li>
				<li> <a href="../company/home.php">Dear&nbsp;Recruiter</a></li>
				<li> <a href="homefrench.php">Language</a></li>
			</ul>
		</section>
		
		<div class="header" >
			<div id="title">
				<h1>ConNect</h1>
			</div>
			<form method="post">
				<input type="text" name="searchbox" placeholder="put the name of your company or occupation">
				<input type="submit" value="search" name="search">
			</form>
		
		</div>

	<section class="jump" >
		<ul>
			<li id="#"> <a href="#review">Review Job</a></li>
			<li id="#"><a href="#post">Post Review</a></li>
			<li id="#"> <a href="../company/home.php">Dear Recruiter</a></li>
		</ul>
	</section>
	<div class="sponsorcompany">
		<h2>Sponsored Company</h2>
	</div>
	
	<section class="sponsor">
		<ul>
			<li>
				<img src="img/companylogo.jpg" alt="" width="300" height="200">
			</li>
			<li>
				<img src="img/companylogo.jpg" alt="" width="300" height="200">
			</li>
			<li>
				<img src="img/companylogo.jpg" alt="" width="300" height="200">
			</li>
		</ul>
	</section>
	
	<section class="container">
			<div class="pic1">
			<img src="img/shibuyacrossing.jpg" alt="" width="600" height="400">
			</div>
			<div class="msg">
				De nombreuses personnes venant de pays du monde<br> entier travaillent actuellement au Japon.<br>
                Et vous, êtes-vous satisfait de votre job ?<br>
                Bon nombre de vos camarades étrangers sont <br>à la recherche de nouveaux et meilleurs emplois.<br>
                 Pourquoi ne pas essayer de trouver<br> le job qui vous correspond avec nous ?
			</div>
		
	</section>

	
	<h1>Besoin d’aide ?</h1>
	<section class="review" id="review">
		<div class="intro">
			<div class="ask">
			<h2 class="animated fadeIn slower"><span class="work">Aimez-vous votre job ?</span></h2>
			</div>
			<img src="img/train.jpg" width="430" height="500">
		
		</div>
			
			<div class="introparagrah">
				<img src="img/shibuya.jpg" width="430" height="300">
				<div class="ask2">
					<ul>
						<li class="animated fadeIn slower"><h3>Êtes-vous réellement satisfaits de votre job ?</h3></li>
						<li class="animated fadeIn slower"><h3>Appréciez vous encore le Japon ?</h3></li>
						<li class="animated fadeIn slower"><h3>Tout va bien avec votre patron ?</h3></li>
					</ul>
				</div>
			</div>
    </section>
    
		<section class="step">
			<h2><a href="home_copy.php">Search Reviews !</a></h2>
		</section>
		
		
	<h1 class="animated fadeIn slower">Vous pouvez aider vos amis !</h1>
		<section class="post" id="post">
			<div class="intro2">
				<img src="img/achievement-adult-agreement-1061583.jpg" width="560" height="450">	
			</div>
			<div class="introparagrah2">
				<ul>
					<li><h3>OHeures supplémentaires ?</h3></li>
					<li><h3>Patron affreux ?</h3></li>
					<li><h3>Salaire plus que moyen ?</h3></li>
				</ul>
			</div>
		</section>

			<section class="step2">
					<h2><a href="post/post.php">Post Now !</a></h2>
			</section>	
			
		</div>

	<div class="start">
		<h1>Start Using Now</h1>
	</div>
	<section class="signup">
			<ul>
				<div class="signup1">
				<span class="use">Rejoignez-nous maintenant !</span><br>
				<span class="use"><a href="registration/register.php"><input type="button" name="Send" value="Sign Up"></a></span>
				</div>
				<div class="signup2">
				<span class="use">Déjà membre ?</span><br>
				<span class="use"><a href="login/login.php"><input type="button" name="login" value="Log In"></a></span>
				</div>
			</ul>
	</section>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="./javascript/script.js"></script>
</body>



</html>
