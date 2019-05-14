<?php	
	session_start();
    require_once 'search/searchDAO.php';
    $searchdao = new UserAccessObject;
    if(isset($_POST['search'])){
        $keyword = $_POST['searchbox'];
		$row = $searchdao->searchReview($keyword);
		if(empty($row)){
            header('Location: error.php');
        }else{
             // this will pass the row array to the next page which is 
            //result.php
            header('Location: search/result.php?result='.urlencode(serialize($row)));
        }
		/*print_r($post);*/
    }   
?>
<!DOCTYPE html>
<html>
<head>
	<title>For New Workers</title>
	
	<link rel="./css/animate.css" rel="stylesheet">
	<link href=" www.icondrawer.com">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="node_modules/jquery-ui-1.12.1.custom 2/jquery-ui.min.js"></script>
	<script src="main.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	
	

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
		<section class="head" id="head">
				<img src="img/logo.png" alt="" width="220px" height="50px">
				<img src="userimg/grey.jpg" alt=""width="50" height="50" class="radius">
				<span class="userlogin"><a href="login/login.php">Log&nbsp;In</a></span>
				<span class="userlogin"><a href="registration/register.php">Register</a></span>
			<ul>
				<li class="menu1"><a href="findjob/findjobhome.php">Find&nbsp;Job!</a></li>
				<li class="menu2"> <a href="../company/home.php">Dear&nbsp;Recruiter</a></li>
				<li class="menu3"> <a href="#popup">Language</a></li>
			</ul>
		</section>
		
		<div class="header" >
			<div class="title" id="title">
				<h1>ConNect</h1>
			</div>
			<form method="post">
				<input type="text" name="searchbox" placeholder="put the name of your company or occupation">
				<input type="submit" value="search" name="search">
			</form>
		
		</div>

	<section class="jump" >
		<ul>
			<li id="#" class="menu4"> <a href="#review">Review Job</a></li>
			<li id="#" class="menu5"><a href="#post">Post Review</a></li>
			<li id="#" class="menu6"> <a href="../company/home.php">Dear Recruiter</a></li>
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
			<!---<img src="img/shibuyacrossing.jpg" alt="" width="600" height="400">--->
			</div>
			<div class="msg">
				De nombreuses personnes venant de pays du monde<br> entier travaillent actuellement au Japon.<br>
                Et vous, êtes-vous satisfait de votre job ?<br>
                Bon nombre de vos camarades étrangers sont <br>à la recherche de nouveaux et meilleurs emplois.<br>
                Pourquoi ne pas essayer de trouver<br> le job qui vous correspond avec nous ?
			</div>
		
	</section>

	
	<!---<h1>Do you need a help ?</h1>---->
	<div class="ask">
		<h2 class="animated fadeIn slower"><span class="work">Do you like your work ?</span></h2>
	</div>
	<section class="review" id="review">
		<div class="intro">
			<!---<img src="img/train.jpg" width="430" height="500">---->
		</div>
			
			<div class="introparagrah">
				<!---<img src="img/shibuya.jpg" width="430" height="300">---->
				<div class="ask2">
					<ul>
						<li class="animated fadeIn slower"><h3>Êtes-vous réellement satisfaits de votre job ?</h3></li>
						<li class="animated fadeIn slower"><h3>Appréciez vous encore le Japon ?</h3></li>
						<li class="animated fadeIn slower"><h3>Tout va bien avec votre patron ?</h3></li>
					</ul>
				</div>
				<div class="msgintro1">
					If you are not satisfied with you job condition, <br>you can search reviews.<br>
					It is going to be easy to find a next better job.
				</div>
			</div>
			<div class="step1">
				<a href="home.php"><b>Search Reviews !</b></a>
			</div>
			
    </section>
    
		
		
		
	<!--<h1 class="animated fadeIn slower">Help your friends !</h1>---->
	
		<section class="post" id="post">
			<!--<div class="intro2">
				<img src="img/achievement-adult-agreement-1061583.jpg" width="560" height="450">	
			</div>-->
			<div class="introparagrah2">
				<!---<ul>
					<li><h3>Over work ?</h3></li>
					<li><h3>Bad boss ?</h3></li>
					<li><h3>Low salary ?</h3></li>
				</ul>--->
				<div class="msgintro2">If you want to show your working condition. <br>Revidew you job and tell your friends how your place is.<br>
				Your review will help your friend who thinks to work there.<br>For your friends, post your review.<br>
				Our web site will show your conditions.</div>
				<div class="step2">
					<a href="post/post.php"><b>Post Now !</b></a>
				</div>	
			</div>
		</section>

			
			
		</div>
	<footer class="footer">
		<div class="signup">
			<div class="use">
				Register with ConNect and start using !
			</div>
			<div class="register">
				<ul>
					<li class="step3"><a href="registration/register.php"><b>Sign Up</b></a></li>
					<li class="step4"><a href="login/login.php"><b>Log In</b></a></li>
				</ul>
			</div>
		</div>
		<div class="copyright">
			Copyright(c)2019 ConNect All Rights Reserved.
		</div>
</footer>

		
			<div class="popupcontent" id="popup">
			<a href="" class="popup__close">&times;</a>
				<h2>Choose a language</h2>
					<div class="language">
						<ul>
							<li>Japanese</li>
							<img src="Flags/flags/32/Japan.png" alt="">
							<li>English</li>
							<img src="Flags/flags/32/United Kingdom(Great Britain).png" alt="">
							<li>Chinese</li>
							<img src="Flags/flags/32/China.png" alt="">
							<li>Vietnamise</li>
							<img src="Flags/flags/32/Viet Nam.png" alt="">
						</ul>
						<ul>
							<li>Korean</li>
							<img src="Flags/flags/32/South Korea.png" alt="">
							<li>Thai</li>
							<img src="Flags/flags/32/Thailand.png" alt="">
							<li>Portuguese</li>
							<img src="Flags/flags/32/Brazil.png" alt="">
							<li><a href="frenchhome.php">French</li>
							<img src="Flags/flags/32/France.png" alt="">
						</ul>
					</div>
			</div>
		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="./javascript/script.js"></script>
</body>



</html>
