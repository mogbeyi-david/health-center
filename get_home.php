<?php
include('page.php');
global $json_views;
//session_start();
//$_SESSION['houses-search'] = $json_views;


$count_house = count($json_views);
//echo ('<br><br>'.$count_house);

$active2 = "active"; $active1 =$active3 =$active4="";?>
<!DOCTYPE html>
<html>
    <head>
        <title>LANDLORDS.com - Get A Home</title>
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="css/main.css">
<!--        <link type="text/css" rel="stylesheet" href="css/w3.css">-->
    </head>

    <body>
        <?php include('header.php'); ?>

        <div class="content-wrapper col-md-12 col-sm-12 col-xs-12" style="">

            <h1>Get A Home</h1>
            <div class="sort-box col-md-11 col-sm-8 col-xs-10 col-md-offset-2 col-sm-offset-2 col-xs-offset-1">
                <div class="h3" style="color:#f0ad4e;margin-left: 40px;">Sort Home Search Results</div>
                    <form method="get" action="<?php echo(htmlspecialchars($_SERVER['PHP_SELF']));?>">
                        <div class="col-md-5 col-sm-5 col-xs-5 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
                            <label>By Company's name:</label><br>
                            <input type="text" placeholder="Company name" name="company_name" value="<?php echo($company_name);?>"><br>
                            <label>By Location:</label><br>

                            <div style="margin-left: 20px;">
                                <span>State </span>
                                <select style="margin-bottom: 6px;" id="states" name="state" value="<?php echo($state);?>">
                                    <option>-- all --</option>
                                </select><br>

                                <span>LGA </span>
                                <select id="lga" name="lga" value="<?php echo($lga);?>">
                                    <option>-- all --</option>
                                </select><br>
                            </div>

                        </div>

                        <div class="col-md-5 col-sm-5 col-xs-5">
                            <label>By Price:</label><br>
                                <div style="margin-left: 20px;">
                                    <span>Min-Price (<img src="img/naira.png" height="20px" width="13px">):</span>
                                    <input class="price-field" name="min_price" value="<?php echo($min_price);?>" type="text" style="margin: auto auto 10px 4px;"><br>

                                    <span>Max-Price (<img src="img/naira.png" height="20px" width="13px">):</span>
                                    <input class="price-field" name="max_price" value="<?php echo($max_price);?>" type="text"><br>
                                </div>
                            <label>No of Bedrooms:</label>

                            <input name="no_of_bedrooms" type="number" min="1" value="<?php echo($no_of_bedrooms);?>"><br>
                                <label>No of Rest rooms:</label>
                                <input name="no_of_bathrooms" type="number" min="1" value="<?php echo($no_of_bathrooms);?>"><br>
                        </div>
                        <input type="submit" value="SEARCH" class="btn btn-warning btn-md" name="search">
                    </form>
            </div>


            <div id="homes_list_parent" class="container col-md-10 col-sm-10 col-xs-10 col-md-offset-1 col-sm-offset-1  col-xs-offset-1" style="padding-top: 10px;">
                <?php
                for($i=0;$i<$count_house;$i++){

                    echo('<a href="house_details.php?id='.$json_views[$i]['id'].'">');
                        echo('<div class="house-box col-md-4 col-sm-4 col-xs-4 no-padding">');
                            echo('<img class="pix" src="'.$json_views[$i]['image-front'].'" width="" height="">');
                            echo('<div class="down-detail col-md-4 col-sm-4 col-xs-4 ">');
                                //HOUSE NAME
                                echo('<span class="col-md-11 col-sm-11 col-xs-11">');
                                    echo($json_views[$i]['name']);
                                echo('</span>');

                                echo('<div style="position: absolute;bottom: 5px;margin-left: -5px;">');
                                    //HOUSE NAME
                                    echo('<center><button class="btn btn-warning btn-xs" style="border-radius: 0px;margin-bottom: 6px;">Details >></button></center>');
                                    echo('<span class="col-md-6 col-sm-6 col-xs-6">');
                                        echo($json_views[$i]['no-of-bedrooms']);
                                    echo('</span>');

                                    echo('<span class="col-md-6 col-sm-6 col-xs-6">');
                                        echo($json_views[$i]['no-of-bathrooms']);
                                    echo('</span>');

                                    echo('<span class="col-md-12 col-sm-12 col-xs-12">');
                                        echo('Price:<img class="naira" src="img/Naira.png" width="10px" height="14px">&nbsp;'.$json_views[$i]['price'].' <br>');
                                    echo('</span>');
                                echo('</div>');

                            echo('</div>');
                        echo('</div>');
                    echo('</a>');
                }   ?>
<!---->
<!---->
<!---->
<!--                    <a href="">-->
<!--                        <div class="house-box col-md-4 col-sm-4 col-xs-4 no-padding">-->
<!--                            <img src="uploads/556c2b8a3ba57.jpg" width="" height="">-->
<!--                            <div class="down-detail col-md-4 col-sm-4 col-xs-4 ">-->
<!--                            <span class="col-md-11 col-sm-11 col-xs-11">-->
<!--                                3 Bedroom Flat Oke-Bola, Ibadan-->
<!--                            </span>-->
<!--                            <span class="col-md-6 col-sm-6 col-xs-6">-->
<!---->
<!--                            </span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                    <a href="">-->
<!--                        <div class="house-box col-md-4 col-sm-4 col-xs-4 no-padding">-->
<!--                            <img src="uploads/556c3c588a2ff.jpg" width="" height="">-->
<!--                            <div class="down-detail col-md-4 col-sm-4 col-xs-4 ">-->
<!--                            <span class="col-md-6 col-sm-6 col-xs-6">-->
<!--                                3 Bedroom Flat Oke-Bola, Ibadan-->
<!--                            </span>-->
<!--                            <span class="col-md-6 col-sm-6 col-xs-6">-->
<!---->
<!--                            </span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                    <a href="">-->
<!--                        <div class="house-box col-md-4 col-sm-4 col-xs-4 no-padding">-->
<!--                            <img src="uploads/556c55010b10f.jpg" width="" height="">-->
<!--                            <div class="down-detail col-md-4 col-sm-4 col-xs-4  ">-->
<!--                                <span class="col-md-6 col-sm-6 col-xs-6">-->
<!--                                    3 Bedroom Flat Oke-Bola, Ibadan-->
<!--                                </span>-->
<!--                                <div class="col-md-3 col-sm-3 col-xs-3" style="">-->
<!---->
<!--                                </div>-->
<!---->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </a>-->

            </div>
            <div class="row container col-md-10 col-sm-10 col-xs-10 col-md-offset-1 col-sm-offset-1  col-xs-offset-1">
                <ul class="pagination">
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                </ul>
            </div>

        </div>


        <?php include('footer.php'); ?>

        <?php
        require('myStates.php');
        ?>

        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>


        <script type="text/javascript" src="js/consume/library.js"></script>
        <script type="text/javascript" src="stateAndCapital.js"></script>
        <script type="text/javascript" src="js/consume/houses.js"></script>
    </body>
</html>