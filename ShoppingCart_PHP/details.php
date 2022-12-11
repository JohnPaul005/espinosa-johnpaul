<?php
    session_start();    
    require'products.php';

    if(isset($_POST['Process'])){
        if(isset($_SESSION['cartItems'][$_POST['cartkey']][$_POST['radColor']]))
            $_SESSION['cartItems'][$_POST['cartkey']][$_POST['radColor']] += $_POST['qty']; 
        else
            $_SESSION['cartItems'][$_POST['cartkey']][$_POST['radColor']] = $_POST['qty']; 

        $_SESSION['totalQuantity'] += $_POST['qty'];
        header("location: confirm.php");
    }
   


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="css/shoppingcart.css">
        <title>Details | Online Shop</title>
    </head>
    <body>
        <form method="post">
            <div class="container">
                <div class="row mt-3">
                    <div class="col-10">
                        <h1><i class="fa-solid fa-gun"></i>ArmYourSelf</h1>
                    </div>
                    <div class="col-2 text-right">
                        <a href="cart.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart"></i> Cart
                            <span class="badge bg-light text-dark">
                                <?php echo (isset($_SESSION['totalQuantity']) ? $_SESSION['totalQuantity'] : "0"); ?>
                            </span>
                        </a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <?php   if(isset($_GET['itemkey']) && isset($arrProducts[$_GET['itemkey']])):  ?>
                                <div class="col-md-4 col-sm-6">
                                    <div class="product-grid2">
                                        <div class="product-image2 h-100">
                                            <img class="pic-1 h-100" src="img/<?php echo $arrProducts[$_GET['itemkey']]['photo1']; ?>">
                                            <img class="pic-2 h-100" src="img/<?php echo $arrProducts[$_GET['itemkey']]['photo2']; ?>">
                                        </div>            
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="col-12">
                                        <h1>
                                            <?php 
                                                echo $arrProducts[$_GET['itemkey']]['name']; 
                                            ?>
                                            <span class="badge bg-dark">₱ <?php echo $arrProducts[$_GET['itemkey']]['price']; ?></span>
                                        </h1>
                                        <p>
                                            <?php echo $arrProducts[$_GET['itemkey']]['description']; ?>
                                        </p>
                                        <hr>
                                        <input type="hidden" name="cartkey" value="<?php echo $_GET['itemkey']; ?>">
                                        <label ><h4>Select Color:</h4></label><br>
                                        <input type="radio" name="radColor" id="radBlack" value="Black" checked>
                                        <label for="radBlack">Black</label>
                                        <input type="radio" name="radColor" id="radRed" value="Red">
                                        <label for="radRed">Red</label>
                                        <input type="radio" name="radColor" id="radGreen" value="Green">
                                        <label for="radGreen">Green</label>
                                        <input type="radio" name="radColor" id="radBlue" value="Blue">
                                        <label for="radBlue">Blue</label>
                                        <hr>
                                        <label for=""><h4>Enter Quantity:</h4></label><br>
                                        <input type="number" name="qty" id="qty" placeholder="0" min="1" max="100" class="form-control" required><br>
                                        <button class="btn btn-dark btn-lg" type="submit" name="Process">Confirm Product Purchase</button>
                                        <a href="index.php" class="btn btn-danger btn-lg"><i class="fa fa-arrow-left"></i> Cancel / Go Back</a>
                                    </div>
                                </div>
                    <?php  
                        else:
                            echo "No Product Found!";
                        endif;
                    ?>
                </div>
            </div>  
        </form>
        
        

    </body>
</html>