<?php
    session_start();
    require_once '../registration/registerDAO.php';
    $registerdao = new UserAccessObject;
    if(isset($_POST['register'])){
        $name = $_POST['name'];
        $nation = $_POST['nation'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $stay= $_POST['stay'];
        $email= $_POST['email'];
        $password= $_POST['password'];
        $description= $_POST['text'];
        
        $result = $registerdao->addUser($name, $nation, $gender, $age, $stay, $email, $password, $description);
        if($result)
        {
            header('Location: profileconfirmation.php');
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
    <link rel="stylesheet" type="text/css" href="profile.css">
    <title>Profilr Retrieve</title>
</head>
<body>
            <div class="container">
                <div class="row">
                    <div class="col-6 mx-auto">
                        <div class = "text-white bg-primary p-4">
                        <h2 class="display-5">Edit Your Profile</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <form action="" method = "post">
                    <div class="row mb-3">
                        <div class="col-6 mx-auto">
                            <div class="form-group mt-4">
                                <label for="" name="yourname">Your Name</label>
                                <input type="text" name="yourname" id="" class="form-control" 
                                placeholder="<?php
                                                foreach($post as $key=>$values){
                                                    $status = "";
                                                    if($values['user_status'] == 'A'){
                                                        echo $values['user_name'];
                                                    }
                                                }
                                                ?>">
                            </div>
                            <div class="form-group mt-4">
                                <label for="" name="nationality">Your Nationality</label>
                                <input type="text" name="nationality" id="" class="form-control" placeholder="<?php
                                                foreach($post as $key=>$values){
                                                    $status = "";
                                                    if($values['user_status'] == 'A'){
                                                        echo $values['user_nation'];
                                                    }
                                                }
                                                ?>">
                            </div>
                            <div class="form-group mt-4">
                                <label for="" name="">Your Geender</label>
                                <select>
                                <option value="man">Man</option>
                                <option value="woman">Woman</option>
                                <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="form-group mt-4">
                                <label for="" name="age">Put Your Age</label>
                                <input type="number" name="age" id="" class="form-control" placeholder="<?php
                                                foreach($post as $key=>$values){
                                                    $status = "";
                                                    if($values['user_status'] == 'A'){
                                                        echo $values['user_age'];
                                                    }
                                                }
                                                ?>">
                            </div>
                            <div class="form-group mt-4">
                                <label for="" name="year">How Long Do You Stay In Japan ?</label>
                                <input type="number" name="stay" id="" class="form-control" placeholder="<?php
                                                foreach($post as $key=>$values){
                                                    $status = "";
                                                    if($values['user_status'] == 'A'){
                                                        echo $values['user_stay'];
                                                    }
                                                }
                                                ?>">
                            </div>
                            <div class="form-group mt-4">
                                <label for="" name="email">E-Mail</label>
                                <input type="email" name="email" id="" class="form-control" placeholder="<?php
                                                foreach($post as $key=>$values){
                                                    $status = "";
                                                    if($values['user_status'] == 'A'){
                                                        echo $values['user_email'];
                                                    }
                                                }
                                                ?>">
                            </div>
                            <div class="form-group mt-4">
                                <label for="" name="password">Password</label>
                                <input type="password" name="password" id="" class="form-control" placeholder="Put Your Password">
                            </div>
                            <div class="form-group mt-4">
                                <p for="" name="text">About You</p>
                                <textarea name="text" id="" cols="65" rows="10" placeholder="<?php
                                                foreach($post as $key=>$values){
                                                    $status = "";
                                                    if($values['user_status'] == 'A'){
                                                        echo $values['user_description'];
                                                    }
                                                }
                                                ?>"></textarea>
                            </div>

                            <input type="submit" value="register" name="register" class="btn btn-outline-primary text-secondary float-right mr-3">
                            <input type="button" onclick="location.href='../login/homelogin.php'"value="Back" name="Back" class="btn btn-outline-primary text-primary float-right">
                        </div>
                    </div>
                </form>
            </div> 
</body>
</html>