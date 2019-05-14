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
        
        $result = $postdao->addPost($name, $pre, $city, $street, $occu, $year, $time, $sal, $atm, $comp, $review);
        if($result)
        {
            header('Location: postconfirmation.php?id='.$result);
        }
    }
    /*adduser*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/post.css">
    <title>Post</title>
</head>
<body>
            <div class="container">
                <div class="row">
                    <div class="col-6 mx-auto">
                        <div class = "text-white bg-primary p-4">
                        <h2 class="display-5">Post</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <form action="" method = "post">
                    <div class="row mb-3">
                        <div class="col-6 mx-auto">
                            <div class="form-group mt-4">
                                <label for="">Name Of Company</label>
                                <input type="text" name="name" id="" class="form-control" placeholder="">
                            </div>
                            <div class="form-group mt-3">
                                <label for="" name="">Address</label><br>
                            <select name="prefecture">
                                <label for="" name="prefecture">Address</label>
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
                            </select>
                                <input type="text" name="city" id="" class="form-control mb-1 mt-1" placeholder="name of city">
                                <input type="text" name="street" id="" class="form-control" placeholder="street number">
                            </div>
                            <div class="form-group mt-4">
                                <label for="" >Occupation</label>
                                <select name="occupation">
                                <option  value="">Agriculture</option>
                                <option  value="">Architecture</option>
                                <option  value="">Biological and Biomedical Science</option>
                                <option  value="">Business</option>
                                <option  value="">Communications and Journalism  </option>
                                <option  value="">Computer Sciences </option>
                                <option  value="">Culinary Arts and Personal Services </option>
                                <option  value="">Education</option>
                                <option  value="">Engineering</option>
                                <option  value="">Legal</option>
                                <option  value="">Liberal Arts and Humanities  </option>
                                <option  value="">Mechanic and Repair Technologies</option>
                                <option  value="">Medical and Health Professions</option>
                                <option  value="">Liberal Arts and Humanities</option>
                                <option  value="">Opption</option>
                                </select>
                            </div>
                            <div class="form-group mt-4">
                                <label for="" >How long do you work ?</label>
                                <input type="number" name="year" id="" class="form-control" placeholder="put the number">
                            </div>
                            <div class="rate">
                                <p>Please evaluate from 1 to 5 (5 is the highest)</p>
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
                            <div class="form-group mt-4">
                                <p for="" >Leave a comment</p>
                                <textarea name="text" id="" cols="65" rows="10"></textarea>
                            </div>
                            <input type="submit" value="reset" name="back" class="btn btn-outline-secondary text-secondary float-right mr-3">
                            <input type="submit" value="post" name="post" class="btn btn-outline-secondary text-secondary float-right mr-3">
                        </div>
                    </div>
                </form>
            </div> 
    
</body>
</html>