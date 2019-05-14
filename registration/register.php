<?php
    session_start();
    require_once 'registerDAO.php';
    $registerdao = new UserAccessObject;
    if(isset($_POST['register'])){
        $name = $_POST['name'];
        $nation = $_POST['nation'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $stay= $_POST['stay'];
        $email= $_POST['email'];
		$password= $_POST['password'];
		$imagepath = $_FILES['image']['name'];
        $description= $_POST['text'];
        //$loginpass = $registerdaofileupload->encrypt($_POST['loginpass']);
        $tmp = $_FILES['image']['tmp_name']; // this contains the temporary file name
        $directory = '../userimg/'; // contains the location where the image is saved
        $result = $registerdao->addImg($name, $nation, $gender, $age, $stay, $email, $password, $description, $imagepath, $directory, $tmp);
        if($result)
        {
            header('Location: registerconfirmation.php?id='.$result);
        } 
    }
    /*adduser*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="register.css">
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
</head>
<body>
	<section class="head">
	<a href="../home.php"><img src="../img/logo.png" alt="" width="220px" height="50px"></a>
            <img src="../userimg/grey.jpg" alt=""width="50" height="50" class="radius">
        <ul>
            <li><a href="../findjob/findjobhome.php">Find&nbsp;Job!</a></li>
            <li> <a href="../../company/home.php">Dear&nbsp;Recruiter</a></li>
			<li> <a href="#popup">Language</a></li>
        </ul>
    </section>
		<h2>Register</h2>
	<div class="form">
		<form method="post" enctype="multipart/form-data">
			<div class="forminside">
				<div class="facebook">
                    <input type="submit" value="Register with Facebook" name="facebook">
                </div>
                <p class="or">or</p>
				<div class="inputarea">
					<input type="text" name="name" id="" class="formcontrol" placeholder="Your Name"><br>
				</div>
				<div class="inputarea">
					<div class="letters">
						<label for="" value="nationality" >Your Nationality</label>
						<select>
							<option value="country">Country</option>
							<option value="AFG">Afghanistan</option>
							<option value="ALA">Åland Islands</option>
							<option value="ALB">Albania</option>
							<option value="DZA">Algeria</option>
							<option value="ASM">American Samoa</option>
							<option value="AND">Andorra</option>
							<option value="AGO">Angola</option>
							<option value="AIA">Anguilla</option>
							<option value="ATA">Antarctica</option>
							<option value="ATG">Antigua and Barbuda</option>
							<option value="ARG">Argentina</option>
							<option value="ARM">Armenia</option>
							<option value="ABW">Aruba</option>
							<option value="AUS">Australia</option>
							<option value="AUT">Austria</option>
							<option value="AZE">Azerbaijan</option>
							<option value="BHS">Bahamas</option>
							<option value="BHR">Bahrain</option>
							<option value="BGD">Bangladesh</option>
							<option value="BRB">Barbados</option>
							<option value="BLR">Belarus</option>
							<option value="BEL">Belgium</option>
							<option value="BLZ">Belize</option>
							<option value="BEN">Benin</option>
							<option value="BMU">Bermuda</option>
							<option value="BTN">Bhutan</option>
							<option value="BOL">Bolivia, Plurinational State of</option>
							<option value="BES">Bonaire, Sint Eustatius and Saba</option>
							<option value="BIH">Bosnia and Herzegovina</option>
							<option value="BWA">Botswana</option>
							<option value="BVT">Bouvet Island</option>
							<option value="BRA">Brazil</option>
							<option value="IOT">British Indian Ocean Territory</option>
							<option value="BRN">Brunei Darussalam</option>
							<option value="BGR">Bulgaria</option>
							<option value="BFA">Burkina Faso</option>
							<option value="BDI">Burundi</option>
							<option value="KHM">Cambodia</option>
							<option value="CMR">Cameroon</option>
							<option value="CAN">Canada</option>
							<option value="CPV">Cape Verde</option>
							<option value="CYM">Cayman Islands</option>
							<option value="CAF">Central African Republic</option>
							<option value="TCD">Chad</option>
							<option value="CHL">Chile</option>
							<option value="CHN">China</option>
							<option value="CXR">Christmas Island</option>
							<option value="CCK">Cocos (Keeling) Islands</option>
							<option value="COL">Colombia</option>
							<option value="COM">Comoros</option>
							<option value="COG">Congo</option>
							<option value="COD">Congo, the Democratic Republic of the</option>
							<option value="COK">Cook Islands</option>
							<option value="CRI">Costa Rica</option>
							<option value="CIV">Côte d'Ivoire</option>
							<option value="HRV">Croatia</option>
							<option value="CUB">Cuba</option>
							<option value="CUW">Curaçao</option>
							<option value="CYP">Cyprus</option>
							<option value="CZE">Czech Republic</option>
							<option value="DNK">Denmark</option>
							<option value="DJI">Djibouti</option>
							<option value="DMA">Dominica</option>
							<option value="DOM">Dominican Republic</option>
							<option value="ECU">Ecuador</option>
							<option value="EGY">Egypt</option>
							<option value="SLV">El Salvador</option>
							<option value="GNQ">Equatorial Guinea</option>
							<option value="ERI">Eritrea</option>
							<option value="EST">Estonia</option>
							<option value="ETH">Ethiopia</option>
							<option value="FLK">Falkland Islands (Malvinas)</option>
							<option value="FRO">Faroe Islands</option>
							<option value="FJI">Fiji</option>
							<option value="FIN">Finland</option>
							<option value="FRA">France</option>
							<option value="GUF">French Guiana</option>
							<option value="PYF">French Polynesia</option>
							<option value="ATF">French Southern Territories</option>
							<option value="GAB">Gabon</option>
							<option value="GMB">Gambia</option>
							<option value="GEO">Georgia</option>
							<option value="DEU">Germany</option>
							<option value="GHA">Ghana</option>
							<option value="GIB">Gibraltar</option>
							<option value="GRC">Greece</option>
							<option value="GRL">Greenland</option>
							<option value="GRD">Grenada</option>
							<option value="GLP">Guadeloupe</option>
							<option value="GUM">Guam</option>
							<option value="GTM">Guatemala</option>
							<option value="GGY">Guernsey</option>
							<option value="GIN">Guinea</option>
							<option value="GNB">Guinea-Bissau</option>
							<option value="GUY">Guyana</option>
							<option value="HTI">Haiti</option>
							<option value="HMD">Heard Island and McDonald Islands</option>
							<option value="VAT">Holy See (Vatican City State)</option>
							<option value="HND">Honduras</option>
							<option value="HKG">Hong Kong</option>
							<option value="HUN">Hungary</option>
							<option value="ISL">Iceland</option>
							<option value="IND">India</option>
							<option value="IDN">Indonesia</option>
							<option value="IRN">Iran, Islamic Republic of</option>
							<option value="IRQ">Iraq</option>
							<option value="IRL">Ireland</option>
							<option value="IMN">Isle of Man</option>
							<option value="ISR">Israel</option>
							<option value="ITA">Italy</option>
							<option value="JAM">Jamaica</option>
							<option value="JPN">Japan</option>
							<option value="JEY">Jersey</option>
							<option value="JOR">Jordan</option>
							<option value="KAZ">Kazakhstan</option>
							<option value="KEN">Kenya</option>
							<option value="KIR">Kiribati</option>
							<option value="PRK">Korea, Democratic People's Republic of</option>
							<option value="KOR">Korea, Republic of</option>
							<option value="KWT">Kuwait</option>
							<option value="KGZ">Kyrgyzstan</option>
							<option value="LAO">Lao People's Democratic Republic</option>
							<option value="LVA">Latvia</option>
							<option value="LBN">Lebanon</option>
							<option value="LSO">Lesotho</option>
							<option value="LBR">Liberia</option>
							<option value="LBY">Libya</option>
							<option value="LIE">Liechtenstein</option>
							<option value="LTU">Lithuania</option>
							<option value="LUX">Luxembourg</option>
							<option value="MAC">Macao</option>
							<option value="MKD">Macedonia, the former Yugoslav Republic of</option>
							<option value="MDG">Madagascar</option>
							<option value="MWI">Malawi</option>
							<option value="MYS">Malaysia</option>
							<option value="MDV">Maldives</option>
							<option value="MLI">Mali</option>
							<option value="MLT">Malta</option>
							<option value="MHL">Marshall Islands</option>
							<option value="MTQ">Martinique</option>
							<option value="MRT">Mauritania</option>
							<option value="MUS">Mauritius</option>
							<option value="MYT">Mayotte</option>
							<option value="MEX">Mexico</option>
							<option value="FSM">Micronesia, Federated States of</option>
							<option value="MDA">Moldova, Republic of</option>
							<option value="MCO">Monaco</option>
							<option value="MNG">Mongolia</option>
							<option value="MNE">Montenegro</option>
							<option value="MSR">Montserrat</option>
							<option value="MAR">Morocco</option>
							<option value="MOZ">Mozambique</option>
							<option value="MMR">Myanmar</option>
							<option value="NAM">Namibia</option>
							<option value="NRU">Nauru</option>
							<option value="NPL">Nepal</option>
							<option value="NLD">Netherlands</option>
							<option value="NCL">New Caledonia</option>
							<option value="NZL">New Zealand</option>
							<option value="NIC">Nicaragua</option>
							<option value="NER">Niger</option>
							<option value="NGA">Nigeria</option>
							<option value="NIU">Niue</option>
							<option value="NFK">Norfolk Island</option>
							<option value="MNP">Northern Mariana Islands</option>
							<option value="NOR">Norway</option>
							<option value="OMN">Oman</option>
							<option value="PAK">Pakistan</option>
							<option value="PLW">Palau</option>
							<option value="PSE">Palestinian Territory, Occupied</option>
							<option value="PAN">Panama</option>
							<option value="PNG">Papua New Guinea</option>
							<option value="PRY">Paraguay</option>
							<option value="PER">Peru</option>
							<option value="PHL">Philippines</option>
							<option value="PCN">Pitcairn</option>
							<option value="POL">Poland</option>
							<option value="PRT">Portugal</option>
							<option value="PRI">Puerto Rico</option>
							<option value="QAT">Qatar</option>
							<option value="REU">Réunion</option>
							<option value="ROU">Romania</option>
							<option value="RUS">Russian Federation</option>
							<option value="RWA">Rwanda</option>
							<option value="BLM">Saint Barthélemy</option>
							<option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
							<option value="KNA">Saint Kitts and Nevis</option>
							<option value="LCA">Saint Lucia</option>
							<option value="MAF">Saint Martin (French part)</option>
							<option value="SPM">Saint Pierre and Miquelon</option>
							<option value="VCT">Saint Vincent and the Grenadines</option>
							<option value="WSM">Samoa</option>
							<option value="SMR">San Marino</option>
							<option value="STP">Sao Tome and Principe</option>
							<option value="SAU">Saudi Arabia</option>
							<option value="SEN">Senegal</option>
							<option value="SRB">Serbia</option>
							<option value="SYC">Seychelles</option>
							<option value="SLE">Sierra Leone</option>
							<option value="SGP">Singapore</option>
							<option value="SXM">Sint Maarten (Dutch part)</option>
							<option value="SVK">Slovakia</option>
							<option value="SVN">Slovenia</option>
							<option value="SLB">Solomon Islands</option>
							<option value="SOM">Somalia</option>
							<option value="ZAF">South Africa</option>
							<option value="SGS">South Georgia and the South Sandwich Islands</option>
							<option value="SSD">South Sudan</option>
							<option value="ESP">Spain</option>
							<option value="LKA">Sri Lanka</option>
							<option value="SDN">Sudan</option>
							<option value="SUR">Suriname</option>
							<option value="SJM">Svalbard and Jan Mayen</option>
							<option value="SWZ">Swaziland</option>
							<option value="SWE">Sweden</option>
							<option value="CHE">Switzerland</option>
							<option value="SYR">Syrian Arab Republic</option>
							<option value="TWN">Taiwan, Province of China</option>
							<option value="TJK">Tajikistan</option>
							<option value="TZA">Tanzania, United Republic of</option>
							<option value="THA">Thailand</option>
							<option value="TLS">Timor-Leste</option>
							<option value="TGO">Togo</option>
							<option value="TKL">Tokelau</option>
							<option value="TON">Tonga</option>
							<option value="TTO">Trinidad and Tobago</option>
							<option value="TUN">Tunisia</option>
							<option value="TUR">Turkey</option>
							<option value="TKM">Turkmenistan</option>
							<option value="TCA">Turks and Caicos Islands</option>
							<option value="TUV">Tuvalu</option>
							<option value="UGA">Uganda</option>
							<option value="UKR">Ukraine</option>
							<option value="ARE">United Arab Emirates</option>
							<option value="GBR">United Kingdom</option>
							<option value="USA">United States</option>
							<option value="UMI">United States Minor Outlying Islands</option>
							<option value="URY">Uruguay</option>
							<option value="UZB">Uzbekistan</option>
							<option value="VUT">Vanuatu</option>
							<option value="VEN">Venezuela, Bolivarian Republic of</option>
							<option value="VNM">Viet Nam</option>
							<option value="VGB">Virgin Islands, British</option>
							<option value="VIR">Virgin Islands, U.S.</option>
							<option value="WLF">Wallis and Futuna</option>
							<option value="ESH">Western Sahara</option>
							<option value="YEM">Yemen</option>
							<option value="ZMB">Zambia</option>
							<option value="ZWE">Zimbabwe</option>
						</select>
					</div>
				</div>
				<div class="inputarea">
					<div class="letters">
						<label for="" value="pre" >Where do you live ?</label>
							<select name="pre">
							<option value="">Prefectures</option>
							<option value="hokkaido">Hokkaido</option>
							<option value="aomori">Aomori</option>
							<option value="iwate">Iwate</option>
							<option value="miyagi">Miyagi</option>
							<option value="akita">Akita</option>
							<option value="yamagata">Yamagata</option>
							<option value="fukushima">Fukushima</option>
							<option value="ibaraki">Ibaraki</option>
							<option value="tochigi">Tochigi</option>
							<option value="gunma">Gunma</option>
							<option value="saitama">Saitama</option>
							<option value="chiba">Chiba</option>
							<option value="tokyo">Tokyo</option>
							<option value="kanagawa">Kanagawa</option>
							<option value="niigata">Niigata</option>
							<option value="toyama">Toyama</option>
							<option value="ishikawa">Ishikawa</option>
							<option value="fukui">Fukui</option>
							<option value="yamanashi">Yamanashi</option>
							<option value="nagano">Nagano</option>
							<option value="gifu">Gifu</option>
							<option value="shizuoka">Shizuoka</option>
							<option value="aichi">Aichi</option>
							<option value="mie">Mie</option>
							<option value="shiga">Shiga</option>
							<option value="kyoto">Kyoto</option>
							<option value="osaka">Osaka</option>
							<option value="hyogo">Hyogo</option>
							<option value="nara">Nara</option>
							<option value="wakayama">Wakayama</option>
							<option value="tottori">Tottori</option>
							<option value="shimane">Shimane</option>
							<option value="okayama">Okayama</option>
							<option value="hiroshima">Hiroshima</option>
							<option value="yamaguchi">Yamaguchi</option>
							<option value="tokushima">Tokushima</option>
							<option value="kagawa">Kagawa</option>
							<option value="ehime">Ehime</option>
							<option value="kochi">Kochi</option>
							<option value="fukuoka">Fukuoka</option>
							<option value="saga">Saga</option>
							<option value="nagasaki">Nagasaki</option>
							<option value="kumamoto">Kumamoto</option>
							<option value="oita">Oita</option>
							<option value="miyazaki">Miyazaki</option>
							<option value="kagoshima">Kagoshima</option>
							<option value="okinawa">Okinawa</option>
							</select>
					</div>
				</div>
				<div class="inputarea">
					<div class="letters">
						<label for="" value="gender" >Your Geender</label>
							<select name="gender">
								<option value="man">Man</option>
								<option value="woman">Woman</option>
								<option value="other">Other</option>
							</select>
					</div>
				</div>
			
					<div class="inputarea">
						<input type="number" name="age" id="" class="form-control" placeholder="Your age"><br>
					</div>
					<div class="inputarea">
						<input type="number" name="stay" id="" class="form-control" placeholder="How long do you stay in Japan ?"><br>
					</div>
					<div class="inputarea">
					<div class="letters">
						<label for="" value="skill" >Your Japanese Skill</label>
							<select name="skill">
								<option value="Basic Knowledge">Basic Knowledge</option>
								<option value="Conversant">Conversant</option>
								<option value="Proficient">Proficient</option>
								<option value="Fluent">Fluent</option>
								<option value="Native Language">Native Language</option>
							</select>
					</div>
					</div>
					<div class="inputarea">
						<input type="email" name="email" id="" class="form-control" placeholder="Your E-Mail Address"><br>
					</div>
					<div class="inputarea">
						<input type="password" name="password" id="" class="form-control" placeholder="Your password"><br>
					</div>
					<div class="inputarea">
						<input type="password" name="password" id="" class="form-control" placeholder="Confirm your password"><br>
					</div>
					<div class="inputarea">
						<input type="number" name="age" id="" class="form-control" placeholder="Your age"><br>
					</div>
					<div class="letters">
						<label for="" value="skill" >Upload Your Profile Image</label>
							<div class="profileimg">
								<input type="file" name="image" id=""><br>
							</div>
					</div>
					<div class="letters">
						<label for="" value="skill" >Upload Your Resume</label>
							<div class="resume">
								<input type="file" name="resume" id=""><br>
							</div>
					</div>
					<div class="letters">
						<label for="" value="skill" >Do you have a residence card ?</label>
							<select name="skill">
								<option value="yes">Yes</option>
								<option value="no">No</option>
							</select>
					</div>
				</div>
					<div class="submit">
						<input type="submit" onclick="location.href='../home.php'"value="Back" name="Back">
						<input type="submit" value="Register" name="register">
					</div>
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
