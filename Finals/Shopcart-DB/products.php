<?php
    require('opencon.php');
    $strsql = "SELECT * FROM tbl_products";
    function viewRS($con, $strsql){
        $rs = [];
        $i = 0;
        if($stmt = mysqli_query($con, $strsql)){
            // specific
            if(mysqli_num_rows($stmt) == 1){
                $record = mysqli_fetch_array($stmt);
                foreach($record as $key => $value){
                    $rs[$key] = $value;
                }
            }
            elseif(mysqli_num_rows($stmt) > 1){
                while($record = mysqli_fetch_array($stmt)){
                    foreach($record as $key => $value){
                        $rs[$i][$key] = $value;
                    }
                    $i++;
                }
            }
            mysqli_free_result($stmt);
        }
        return $rs;
    }
    
    $arrProducts = viewRS($con,$strsql);


    

    require('closecon.php');



//     $arrProducts = array(
//         array(
//             'item' => "Karambit Elite",
//             'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima itaque deleniti in dignissimos atque amet corrupti laborum illum voluptates aliquam.",
//             'price' => "560",
//             'img1' => "Item1A.jpg",
//             'img2' => "Item1B.jpg"
//         ),
//         array(
//             'item' => "Karambit Fang",
//             'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima itaque deleniti in dignissimos atque amet corrupti laborum illum voluptates aliquam.",
//             'price' => "500",
//             'img1' => "Item2A.jpg",
//             'img2' => "Item2B.jpg"
//         ),
//         array(
//             'item' => "Butterfly Knife Sapphire",
//             'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima itaque deleniti in dignissimos atque amet corrupti laborum illum voluptates aliquam.",
//             'price' => "600",
//             'img1' => "Item3A.jpg",
//             'img2' => "Item3B.jpg"
//         ),
//         array(
//             'item' => "Tactical Knife Foldable",
//             'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima itaque deleniti in dignissimos atque amet corrupti laborum illum voluptates aliquam.",
//             'price' => "450",
//             'img1' => "Item4A.jpg",
//             'img2' => "Item4B.jpg"
//         ),
//         array(
//             'item' => "Z-Hunter Sword",
//             'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima itaque deleniti in dignissimos atque amet corrupti laborum illum voluptates aliquam.",
//             'price' => "800",
//             'img1' => "Item5A.jpg",
//             'img2' => "Item5B.jpg"
//         ),array(
//             'item' => "Z-Hunter Machete",
//             'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima itaque deleniti in dignissimos atque amet corrupti laborum illum voluptates aliquam.",
//             'price' => "780",
//             'img1' => "Item6A.jpg",
//             'img2' => "Item6B.jpg"
//         ),
//         array(
//             'item' => "Nunchucks Dragon",
//             'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima itaque deleniti in dignissimos atque amet corrupti laborum illum voluptates aliquam.",
//             'price' => "300",
//             'img1' => "Item7A.jpg",
//             'img2' => "Item7B.jpg"
//         ),
//         array(
//             'item' => "Tactical Knife Carbon",
//             'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima itaque deleniti in dignissimos atque amet corrupti laborum illum voluptates aliquam.",
//             'price' => "480",
//             'img1' => "Item8A.jpg",
//             'img2' => "Item8B.jpg"
//         )
//     )



// ?>