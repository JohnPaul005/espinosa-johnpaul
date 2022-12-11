<?php
    require_once('opencon.php');
        $strsql = "SELECT * FROM tbl_user";

        if($rsUser = mysqli_query($con,$strsql)){
            if(mysqli_num_rows($rsUser)>0){
                while($recUser = mysqli_fetch_array($rsUser)){
                    $username = $recUser['username'];
                    $password = $recUser['password'];
                    $name = $recUser['name'];
                }
                mysqli_free_result($rsUser);
            }
            else
                echo 'No record found!';
        }
        else
            echo 'ERROR: Could not execute your request!';
        


    require_once('closecon.php');

    if(isset($_POST['btnLogin'])){
        if($_POST['username'] === $username  && $_POST['password'] === $password){
            header("location:dashboard.php");
        }else{
            echo "invalid password|!";
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/log.css">
    <title>Kickz Shop Online Shop | Shopping Cart</title>
</head>
<body>
    <form method="post">
        <div id="login">
            <h3 class="text-center text-white pt-5"><i class="fa-solid fa-shoe-prints"></i>Kickz Shop</h3>
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <form id="login-form" class="form" action="" method="post">
                                <h3 class="text-center text-info">Login</h3>
                                <div class="form-group">
                                    <label for="username" class="text-info">Username:</label><br>
                                    <input id="username" name="username" type="text" placeholder="User Name" class="form-control"><br>
                                    <!-- <input type="text" name="username" id="username" class="form-control"> -->
                                </div>
                                <div class="form-group">
                                    <label for="password" class="text-info">Password:</label><br>
                                    <input id="password" name="password" type="password" placeholder="Password" class="form-control"><br>
                                    <!-- <input type="text" name="password" id="password" class="form-control"> -->
                                </div>
                                <div class="form-group">
                                    <button id="btnLogin" name="btnLogin" type="submit" class="btn btn-info btn-md">Login</button>
                                    <a href="index.php" class="text-info">Cancel</a>
                                    <!-- <input type="submit" name="submit" class="btn btn-info btn-md" value="submit"> -->
                                </div>
                                <div id="register-link" class="text-right">
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    
    
    <!-- <div class="dialog mt-5">
            <h1><i class="fa-solid fa-shoe-prints"></i>Kickz Shop</h1>
            <input id="username" name="username" type="text" placeholder="User Name"><br>
            <input id="password" name="password" type="password" placeholder="Password"><br>
            <button id="btnLogin" name="btnLogin" type="submit">Login</button>
            <a href="index.php" class="btn btn-dark col-12 border mt-1 rounded-pill">Cancel</a>
        </div>
         -->
    </form>
    
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>