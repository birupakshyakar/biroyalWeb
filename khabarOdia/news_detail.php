<?php
    include 'connection/database_connection.php';
    $conn = OpenCon();

    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
   //echo $actual_link;
    $text = urlencode($actual_link);
    $url_components = parse_url($actual_link);
    parse_str($url_components['query'], $params);
    $news_id = $params['news_details_value'];
   // echo ' ID is '.$params['news_details_value'];
    $sql="SELECT * FROM `newslist` where id=".$news_id;
    $result = mysqli_query($conn, $sql);
    $row_cnt = $result->num_rows;
    // echo $row_cnt;
    $row=mysqli_fetch_assoc($result);
    
?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta property="og:site_name" content="www.khabarodia.com">
        <meta property="og:title" content="<?php echo $row['heading']; ?>" />
        <meta property="og:description" content="<?php echo $row['heading']; ?>" />
        <meta property="og:image" itemprop="image" content="http://www.khabarodia.com/<?php echo $row['image']; ?>">
        <meta property="og:type" content="website" />
        
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Khabara Odia (ଖବର ଓଡ଼ିଆ)</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- favicon
        ============================================ -->        
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
       
        <!-- Bootstrap CSS
        ============================================ -->        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- font-awesome CSS
        ============================================ -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- et-line-fonts CSS
        ============================================ -->
        <link rel="stylesheet" href="css/et-line-fonts.css">
        <!-- ionicons CSS
        ============================================ -->
        <link rel="stylesheet" href="css/ionicons.min.css">
        <!-- magnific-popup CSS
        ============================================ -->
        <link rel="stylesheet" href="css/magnific-popup.css">
        <!-- animate-headline css
        ============================================ -->
        <link rel="stylesheet" href="css/animate-headline.css">
        <!-- venobox CSS
        ============================================ -->
        <link rel="stylesheet" href="css/venobox.css">
        <!-- slick CSS
        ============================================ -->
        <link rel="stylesheet" href="css/slick.css">
        <!-- owl.carousel CSS
        ============================================ -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.transitions.css">
        <!-- animate CSS
        ============================================ -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- normalize CSS
        ============================================ -->
        <link rel="stylesheet" href="css/normalize.css">
        <!-- main CSS
        ============================================ -->
        <link rel="stylesheet" href="css/main.css">
        <!-- style CSS
        ============================================ -->
        <link rel="stylesheet" href="style.css">
        <!-- responsive CSS
        ============================================ -->
        <link rel="stylesheet" href="css/responsive.css">
        
        <!-- modernizr JS
        ============================================ -->        
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <style type="text/css">
            .next_article{
                text-align: right;
            }
           @media only screen and (max-width: 600px){
            .next_article{
                text-align: left;
            }
           }
        </style>
    </head>
    <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Add your site or application content here -->
        <header  class="topHeader">
            <div class="container">
                <ul>
                <li id="currentDate"></li>
                <li>About</li>
                <li>Reporters Panel</li>
                <li>Contact Us</li>
            </ul>
            </div>            
        </header>
        <div class="wrapper">
            <header class="header-area">
                <!-- <div class="container">
                    <div class="row" style="margin-top: 10px">
                        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                            <h3>KhabarOdia</h3>
                        </div>
                        <
                    </div>
                    
                </div> -->
                <!-- Menu Area
                ============================================ -->
                 <div id="main-menu" class="sticker" style="color: black">
                    <div class="container">
                        <div class="row">
                            
                            <div class="col-md-12 col-xs-12">
                                <div class="logo float-left navbar-header">
                                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu-2">
                                        <i class="fa fa-bars menu-open"></i>
                                        <i class="fa fa-times menu-close"></i>
                                    </button>
                                    <a class="navbar-brand" href="index.html"><h3>Khabar Odia</h3></a>                         
                                </div>
                                <div class="main-menu float- collapse navbar-collapse" id="main-menu-2">
                                    <nav>                                        
                                        <ul class="menu one-page">
                                       
                                             <li class='active'><a href='index.php'>Home</a></li>
                                             <li class=''><a href='regional.php'>ଆଞ୍ଚଳିକ</a></li>
                                             <li class=''><a href='crime.php'>ଅପରାଧ</a></li>
                                             <li class=''><a href='headlines.php'>ମୁଖ୍ୟ ଖବର</a></li>
                                             <li class=''><a href='state.php'>ରାଜ୍ୟ</a></li>
                                             <li class=''><a href='sports.php'>ଖେଳ</a></li>
                                             <li class=''><a href='employment.php'>ନିଯୁକ୍ତି </a></li>
                                             <li class=''><a href='entertainment.php'>ମନୋରଞ୍ଜନ</a></li>
                                             <li class=''><a href='national.php'>ଜାତୀୟ</a></li>
                                             <li class=''><a href='video.php'>ଭିଡ଼ିଓ</a></li>
                                             <li class=''><a href='politics.php'>ରାଜନୀତି</a></li>                                                                           
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </header>
            <!-- sliders area
            ============================================ -->
            
            <!-- service area
            ============================================ -->
            <div id="service-area">
                <div class="ptb-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <?php
                                    $sql="SELECT * FROM `newslist` where id=".$news_id;
                                    $result = mysqli_query($conn, $sql);
                                    $row_cnt = $result->num_rows;
                                     // echo $row_cnt;
                                     $row=mysqli_fetch_assoc($result);
                                     $otherImages = $row['other_images'];
                                     //echo $otherImages;
                                     $allotherImages = explode(",", $otherImages);
                                     $otherImageCount = count($allotherImages);
                                        echo '

                                        <div class="col-lg-12">
                                            <h3 style="font-weight: bolder;">'.$row["heading"].'</h3>
                                        </div>
                                        <div class="col-lg-12 pl-0">
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <p style="color: black">By KO News - '.$row["date"].'</p>
                                            </div>
                                            <!-- <div class="col-lg-6 col-md-6 col-sm-6">
                                                <span class=""><i class="fa fa-eye" style="color: black"> 34</i></span>
                                                <span class="ml-20"><i class="fa fa-comment" style="color: black"> 34</i></span>
                                            </div> -->
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <button style="background:none;border: 1.5px solid #d114b1;
                                                    height: 35px;margin-bottom: 5px;border-radius: 20px;
                                                    width: 100px;color:#d114b1">
                                                    <i class="fa fa-share-alt" style="color:#d114b1"></i> | Share
                                                </button>
                                                <a href="whatsapp://send?text=KhabarOdia News. Check the news '.$row["heading"]. '. Please click here to see full news '.$text.'" target="_blank" data-action="share/whatsapp/share"><button style="background:#32ba32; height: 35px;color:white;
                                                    margin-bottom: 5px;border-radius: 20px;width: 35px;border:none"><i class="fa fa-whatsapp fa-1x" style="color:white;cursor:pointer"></i></button></a>
                                                        <a href="http://www.facebook.com/sharer.php?u='.$text.'" target="_blank"><button style="background:blue; height: 35px;color:white;margin-bottom: 5px;
                                                            border-radius: 20px;width: 35px;border:none"><i class="fa fa-facebook fa-1x" style="color:white;cursor:pointer"></i></button></a>
                                                       </div>
                                                       
                                                    </div>
                                                    <div class="col-lg-12 pl-0">
                                                        <img src="'.$row["image"].'" style="height: 100%;width: 100%;padding: 0px">';
                                                    if($otherImageCount > 1)
                                                    {
                                                        for($i=0; $i<$otherImageCount;$i++)
                                                        {
                                                           echo '<div class="col-lg-6 col-md-6 col-sm-12">
                                                              <img src="img/'.$allotherImages[$i].'" style="height: 100%;width: 100%;padding: 0px">
                                                           </div>';
                                                        }
                                                    }
                                                    else if ($otherImages!="")
                                                    {
                                                        echo '<div class="col-lg-6 col-md-6 col-sm-12">
                                                              <img src="img/'.$otherImages.'" style="height: 100%;width: 100%;padding: 0px">
                                                           </div>';
                                                    }

                                                    echo '</div>
                                                    <br><br>
                                                    <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top: 10px;">
                                                <button style="background:none;border: 1.5px solid #d114b1;
                                                    height: 35px;margin-bottom: 5px;border-radius: 20px;
                                                    width: 100px;color:#d114b1">
                                                    <i class="fa fa-share-alt" style="color:#d114b1"></i> | Share
                                                </button>
                                                <a href="whatsapp://send?text=KhabarOdia News. Check the news '.$row["heading"]. '. Please click here to see full news '.$text.'" target="_blank" data-action="share/whatsapp/share"><button style="background:#32ba32; height: 35px;color:white;
                                                    margin-bottom: 5px;border-radius: 20px;width: 35px;border:none"><i class="fa fa-whatsapp fa-1x" style="color:white;cursor:pointer"></i></button></a>
                                                        <a href="http://www.facebook.com/sharer.php?u='.$text.'" target="_blank"><button style="background:blue; height: 35px;color:white;margin-bottom: 5px;
                                                            border-radius: 20px;width: 35px;border:none"><i class="fa fa-facebook fa-1x" style="color:white;cursor:pointer"></i></button></a>
                                                       </div>
                                                    <div class="col-lg-12 pl-0">
                                                        <p style="padding: 0px;color: black;font-size:16px; text-align:justify">'.$row["content"].'</p>
                                                    </div>
                                        ';                                       
                                        
                                    ?>
                                
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <?php 

                             
                                    $sql="select * from advertisementList order by id desc limit 4";// where sub_category='breaking_news' id desc limit 4";
                                    $result = mysqli_query($conn, $sql);
                                    $row_cnt = $result->num_rows;
                                   // echo $row_cnt;
                                    for ($i=0; $i < $row_cnt; $i++) { 
                                        # code...
                                        $row=mysqli_fetch_array($result);
                                        if($i==0)
                                        {
                                            echo '<div class="col-lg-12 col-md-12 col-sm-12 text-center" style="height: 240px; padding: 0px 0px 5px 5px;border:1px solid #ccc">
                                                <p class="p-0 m-0">Advertisement Area</p>
                                                <img src="'.$row["image"].'" style="height:200px;width:100%">
                                            </div>';
                                        }
                                        else
                                        {
                                            echo '<div class="col-lg-12 col-md-12 col-sm-12 text-center" style="height: 240px;margin-top:20px; padding: 0px 0px 5px 5px;border:1px solid #ccc">
                                                <p class="p-0 m-0">Advertisement Area</p>
                                                <img src="'.$row["image"].'" style="height:200px;width:100%">
                                            </div>';
                                        }
                                    }
                                    
                                ?>
                            </div>
                            
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <h6 style="color: black;font-weight: bold">Previous Article</h6>
                                    <?php
                                        $new_id = intval($news_id)-1;
                                         $sql="SELECT * FROM `newslist` where id=".$new_id;
                                         //echo $sql;// where sub_category='breaking_news' id desc limit 4";
                                        $result = mysqli_query($conn, $sql);
                                        $row_cnt = $result->num_rows;
                                       // echo $row_cnt;
                                        if($row_cnt!=0)
                                        {
                                                 $row=mysqli_fetch_assoc($result);

                                                echo '<p onclick="openNewsDetails('.$row["id"].')" style="cursor:pointer">'.$row["heading"].'</p>';
                                        }
                                        else
                                        {
                                            echo ' no content';
                                        }
                                       

                                    ?>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 next_article">
                                    <h6 style="color: black;font-weight: bold">Next Article</h6>
                                    <?php
                                        $new_id = intval($news_id)+1;
                                         $sql="SELECT * FROM `newslist` where id=".$new_id;// where sub_category='breaking_news' id desc limit 4";
                                        $result = mysqli_query($conn, $sql);
                                        $row_cnt = $result->num_rows;
                                       // echo $row_cnt;
                                        if($row_cnt!=0)
                                        {
                                                 $row=mysqli_fetch_assoc($result);

                                                echo '<p onclick="openNewsDetails('.$row["id"].')" style="cursor:pointer">'.$row["heading"].'</p>';
                                        }
                                        else
                                        {
                                            echo ' no content';
                                        }
                                       

                                    ?>
                                </div>
                                <!-- <div class="col-lg-12" style="margin-top: 80px">
                                
                                    <h5 style="border-bottom: 4px solid black;color: white;">
                                        <span style="background-color: black;font-size: 20px;">Related Article</span>
                                        <span style="background-color: white;font-size: 20px;color: black">More from Author</span>
                                    </h5>
                                    <div class="col-lg-3 col-md-3 col-sm-6 pl-0">
                                         <img src="img/photo1.png" style="height: 100%;width: 100%">
                                         <h4>ନସରିନ ଖାନ  ଗିରଫ ହେବା ପରେ</h4>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 pl-0">
                                         <img src="img/photo1.png" style="height: 100%;width: 100%">
                                         <h4>ନସରିନ ଖାନ  ଗିରଫ ହେବା ପରେ</h4>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 pl-0">
                                         <img src="img/photo1.png" style="height: 100%;width: 100%">
                                         <h4>ନସରିନ ଖାନ  ଗିରଫ ହେବା ପରେ</h4>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 pl-0">
                                         <img src="img/photo1.png" style="height: 100%;width: 100%">
                                         <h4>ନସରିନ ଖାନ  ଗିରଫ ହେବା ପରେ</h4>
                                    </div>                           
                                </div> -->
                                <!-- <div class="pl-15">
                                    <i class="fa fa-angle-left text-center" style="border:1px solid #ccc;width:20px;height: 20px;line-height: 20px"></i>
                                    <i class="fa fa-angle-right text-center" style="border:1px solid #ccc;width:20px;height: 20px;line-height: 20px"></i>
                                </div> -->
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="col-lg-12 col-md-12 col-sm-12 text-center" style="height: 240px;/* margin-bottom:5px; */padding: 0px 0px 5px 5px;border:1px solid #ccc">
                                    <p>Advertisement Area</p>
                                </div>
                            </div>
                            
                        </div>
                                              
                    </div>
                </div>
            </div>
            
            
            <!-- footer area
            ============================================ -->
           <footer class="footer-area pt-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <h3>Editor Pick</h3>
                                <?php
                                        $sql="select * from newslist where subcategory='editor' order by id desc limit 3";// where sub_category='breaking_news' id desc limit 4";
                                        $result = mysqli_query($conn, $sql);
                                        $row_cnt = $result->num_rows;
                                       // echo $row_cnt;
                                        while($row=mysqli_fetch_assoc($result))
                                        {
                                            echo '<div class="row pointerDiv " onclick="openNewsDetails('.$row["id"].')">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <img src="'.$row["image"].'">
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <h4>'.$row["heading"].'</h4>
                                                        <h6><b>'.$row["date"].'</b></h6>
                                                    </div>
                                                </div><br>';
                                        }                                       
                                        
                                    ?>

                           
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <h3>Popular Pick</h3>
                            <?php
                                        $sql="select * from newslist where subcategory='popular' order by id desc limit 3";// where sub_category='breaking_news' id desc limit 4";
                                        $result = mysqli_query($conn, $sql);
                                        $row_cnt = $result->num_rows;
                                       // echo $row_cnt;
                                        while($row=mysqli_fetch_assoc($result))
                                        {
                                            echo '<div class="row pointerDiv " onclick="openNewsDetails('.$row["id"].')">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <img src="'.$row["image"].'">
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <h4>'.$row["heading"].'</h4>
                                                        <h6><b>'.$row["date"].'</b></h6>
                                                    </div>
                                                </div><br>';
                                        }                                       
                                        
                                    ?>
                            
                            
                           
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                             <h3>Popular Category</h3>
                             <div class="row">
                                <?php
                                        $sql="SELECT count(*) as counter, category FROM `newslist` GROUP BY category order by counter desc";// where sub_category='breaking_news' id desc limit 4";
                                        $result = mysqli_query($conn, $sql);
                                        $row_cnt = $result->num_rows;
                                       // echo $row_cnt;
                                        while($row=mysqli_fetch_assoc($result))
                                        {
                                            echo '<div class="col-12" style="padding: 10px">
                                                        <span>'.$row["category"].'</span>
                                                        <span class="pull-right">'.$row["counter"].'</span>
                                                    </div>';
                                        }                                       
                                        
                                    ?>
                               
                                 
                             </div>
                        </div>
                        
                    </div><br><br>
                    <div class="row text-center">
                       <div class="col-md-12 text-center">
                        <div class="footer-all">
                            <div class="footer-logo logo">
                                <h3>KhabaraOdia</h3>
                            </div>
                            <div class="footer-icon">
                                <!-- <p>There are many variations of passages of Lorem Ipsum available,<br> but the majority have suffered alteration in </p> -->
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>                                    
                                </ul>
                            </div>
                            <div class="footer-text">
                                <span>
                                    Copyright©
                                    KhabaraOdia</a>
                                    2020.All right reserved.
                                </span>
                            </div>
                        </div>
                    </div>
                    </div>
                    
                </div>
            </footer>
            <!-- start scrollUp
            ============================================ -->
            <div id="toTop">
                <i class="fa fa-chevron-up"></i>
            </div>
        </div>
        
        
        <!-- jquery
        ============================================ -->        
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <!-- bootstrap JS
        ============================================ -->        
        <script src="js/bootstrap.min.js"></script>
        <!-- plugins JS
        ============================================ -->        
        <script src="js/plugins.js"></script>
        <!-- google map api -->
        
        <!-- main JS
        ============================================ -->        
        <script src="js/main.js"></script>
        <script src="js/biroyal.js"></script>

    </body>
</html>
