<?php
    session_start();
    require_once('opencon.php');
    $strsql = "SELECT * FROM tbl_user";

    if($rsUser = mysqli_query($con,$strsql)){
        if(mysqli_num_rows($rsUser)>0){
            while($recUser = mysqli_fetch_array($rsUser)){
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




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/admin-panel.css">
    <title>Kickz Shop Online Shop | Shopping Cart</title>
</head>
<body>
    <div id="throbber" style="display:none; min-height:120px;"></div>
    <div id="noty-holder"></div>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <i class="fa-solid fa-shoe-prints"></i>
                    Kickz Shop
                </a>
            </div>
            <ul class="nav navbar-right top-nav">           
                <li class="dropdown">
                    <a href="#" class="" data-toggle="dropdown">Hello, <?php echo $name; ?>!</a>
                </li>
            </ul>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="dashboard.php" ><i class="fa-solid fa-chart-line"></i> Dashboard </a>
                    </li>
                    <li>
                        <a href="change-password.php" ><i class="fa-solid fa-gear"></i>  Change Password</a>
                    </li>
                    <li>
                        <a href="addproducts.php"><i class="fa-solid fa-store"></i>Products</a>
                    </li>
                    <li>
                        <a href="logout-admin.php"><i class="fa-solid fa-right-from-bracket"></i>Log out</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row" id="main" >
                    <div class="col-sm-12 col-md-12 well" id="content">
                        <h1>Welcome <?php echo $name; ?>!</h1>
                    </div>
                    <div class="col-sm-4 well">
                        <div class="panel-body">
                            <h1>Total Products Sold</h1>
                            <button class="btn btn-primary" type="button">
                                <?php echo (isset($_SESSION['totalQuantity']) ? $_SESSION['totalQuantity'] : "0"); ?>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>