<?php
    session_start();
    require_once 'postDAO.php';
	$postdao = new UserAccessObject;
    if(isset($_POST['post'])){
        $name = $_POST['name'];
        $pre = $_POST['prefecture'];
        $city = $_POST['city'];
        $street = $_POST['street'];
        $occu= $_POST['occupation'];
        $year= $_POST['year'];
        $time= $_POST['hour'];
        $sal = $_POST['salary'];
        $atm = $_POST['atmosphere'];
        $comp = $_POST['compliance'];
		$review = $_POST['text'];
		$uid = $_SESSION['id'];
        
        $result = $postdao->addCompany($name, $pre, $city, $street, $occu, $year, $time, $sal, $atm, $comp, $review, $company_id, $uid);
        if($result)
        {
            header('Location: postconfirmation.php?id='.$result);
        }
    }
    /*adduser*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Post</title>
	<link rel="stylesheet" type="text/css" href="../css/post.css">
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
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
            <li> <a href="homefrench.php">Language</a></li>
        </ul>
    </section>
	
	<div class="form">
		
		<h2>Post</h2>
			<div class="forminside">
				<label for="">Name Of Company</label><br>
				<div class="inputarea">
				<input type="text" name="name" id="" class="form-control" placeholder=""><br>
				</div>
				<label for="" name="">Address</label><br>
                <select name="prefecture">
						<label for="" name="prefecture">Address</label>
						<div class="inputarea">
							<option value="Hokkaido">Hokkaido</option>
							<option value="Aomori">Aomori</option>
							<option value="Iwate">Iwate</option>
							<option value="Miyagi">Miyagi</option>
							<option value="Akita">Akita</option>
							<option value="Yamagata">Yamagata</option>
							<option value="Hukusima">Hukusima</option>
							<option value="Ibaraki">Ibaraki</option>
							<option value="Tochigi">Tochigi</option>
							<option value="Gunnma">Gunnma</option>
							<option value="Saitama">Saitama</option>
							<option value="Chiba">Chiba</option>
							<option value="Tokyo">Tokyo</option>
							<option value="Kanagawa">Kanagawa</option>
							<option value="Niigata">Niigata</option>
							<option value="Toyama">Toyama</option>
							<option value="Ishikawa">Ishikawa</option>
							<option value="Hukui">Hukui</option>
							<option value="Yamanashi">Yamanashi</option>
							<option value="Nagan">Nagano</option>
							<option value="Gifu">Gifu</option>
							<option value="Shizuoka">Shizuoka</option>
							<option value="Aichi">Aichi</option>
							<option value="Mie">Mie</option>
							<option value="Shiga">Shiga</option>
							<option value="Kyoto">Kyoto</option>
							<option value="Osaka">Osaka</option>
							<option value="Hyogo">Hyogo</option>
							<option value="Nara">Nara</option>
							<option value="Wakayama">Wakayama</option>
							<option value="Tottori">Tottori</option>
							<option value="Shimane">Shimane</option>
							<option value="Okayama">Okayama</option>
							<option value="Hiroshima">Hiroshima</option>
							<option value="Yamaguchi">Yamaguchi</option>
							<option value="Tokushima">Tokushima</option>
							<option value="Kagawa">Kagawa</option>
							<option value="Ehime">Ehime</option>
							<option value="Kochi">Kochi</option>
							<option value="Hukuoka">Hukuoka</option>
							<option value="Saga">Saga</option>
							<option value="Nagasaki">Nagasaki</option>
							<option value="Kumamoto">Kumamoto</option>
							<option value="Oita">Oita</option>
							<option value="Miyazaki">Miyazaki</option>
							<option value="Kagoshima">Kagoshima</option>
							<option value="Okinawa">Okinawa</option>
							</div>
					</select>
					<div class="inputarea">
						<input type="text" name="city" id="" class="form-control mb-1 mt-1" placeholder="name of city"><br>
					</div>
					<div class="inputarea">
						<input type="text" name="street" id="" class="form-control" placeholder="street number"><br>
					</div>
					<label for="" >Occupation</label><br>
					<div class="inputarea">
                        <select name="occupation">
							<option  value="Agriculture">Agriculture</option>
							<option  value="Architecture">Architecture</option>
							<option  value="Biological and Biomedical Science">Biological and Biomedical Science</option>
							<option  value="Business">Business</option>
							<option  value="Communications and Journalism">Communications and Journalism</option>
							<option  value="Computer Sciences">Computer Sciences</option>
							<option  value="Culinary Arts and Personal Services">Culinary Arts and Personal Services</option>
							<option  value="Education">Education</option>
							<option  value="Engineering">Engineering</option>
							<option  value="Legal">Legal</option>
							<option  value="Liberal Arts and Humanities">Liberal Arts and Humanities</option>
							<option  value="Mechanic and Repair Technologies">Mechanic and Repair Technologies</option>
							<option  value="Medical and Health Professions">Medical and Health Professions</option>
							<option  value="Liberal Arts and Humanities">Liberal Arts and Humanities</option>
							<option  value="Other">Other</option>
						</select><br>
					</div>
				<label for="" >How long do you work ?</label><br>
				<div class="inputarea">
				<input type="number" name="year" id="" class="form-control" placeholder="put the number"><br>
				</div>
                <p>Please evaluate from 1 to 5 <br>(5 is the highest)</p><br>
					<div class="evaluation">
                        <div class="hour m-4">
                            <span class="hour">Working Time:</span>
                            1<input type="radio" name="hour" value="1" >
                            2<input type="radio" name="hour" value="2" >
                            3<input type="radio" name="hour" value="3" >
                            4<input type="radio" name="hour" value="4" >
                            5<input type="radio" name="hour" value="5" >
                        </div>
                        <div class="salary m-4">
                            <span class="hour">Salary:</span>
                            1<input type="radio" name="salary" value="1" >
                            2<input type="radio" name="salary" value="2" >
                            3<input type="radio" name="salary" value="3" >
                            4<input type="radio" name="salary" value="4" >
                            5<input type="radio" name="salary" value="5" >
                        </div>

                        <div class="atmosphere m-4" name="atmosphere">
                            <span class="hour">Atmosphere:</span>
                            1<input type="radio" name="atmosphere" value="1" >
                            2<input type="radio" name="atmosphere" value="2" >
                            3<input type="radio" name="atmosphere" value="3" >
                            4<input type="radio" name="atmosphere" value="4" >
                            5<input type="radio" name="atmosphere" value="5" >
                        </div>

                        <div class="compliance m-4" name="compliance">
                            <span class="hour">Compliance:</span>
                            1<input type="radio" name="compliance" value="1" >
                            2<input type="radio" name="compliance" value="2" >
                            3<input type="radio" name="compliance" value="3" >
                            4<input type="radio" name="compliance" value="4" >
                            5<input type="radio" name="compliance" value="5" >
						</div>
					</div>
					<p for="" >Leave a comment</p><br>
                        <textarea name="text" id="" cols="65" rows="10" class="textarea"></textarea><br>
					<input type="submit" name="back" value="Back">
					<input type="submit" name="post" value="Register">
			</div>


</body>
</html>

