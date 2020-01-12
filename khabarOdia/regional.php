<?php
    include 'connection/database_connection.php';
    $conn = OpenCon();
?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
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
        <script type="text/javascript">
            

       // document.getElementById("currentDate").innerHTML=date;
    
        </script>
    </head>
    <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Add your site or application content here -->
        <header  id="topHeader">
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
                            <!-- <div class="col-md-12 col-xs-12">
                                <div class="logo float-left navbar-header">
                                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu-2">
                                        <i class="fa fa-bars menu-open"></i>
                                        <i class="fa fa-times menu-close"></i>
                                    </button>
                                    <a class="navbar-brand" href="index.html"><h3>Khabar Odia</h3></a>                         
                                </div>
                            </div> -->
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
                                             <li class=''><a href='index.php'>Home</a></li>
                                             <li class='active'><a href='#'>ଆଞ୍ଚଳିକ</a></li>
                                             <li class=''><a href='#home-area'>ଅପରାଧ</a></li>
                                             <li class=''><a href='#home-area'>ମୁଖ୍ୟ ଖବର</a></li>
                                             <li class=''><a href='#home-area'>ରାଜ୍ୟ</a></li>
                                             <li class=''><a href='#home-area'>ଖେଳ</a></li>
                                             <li class=''><a href='#home-area'>ନିଯୁକ୍ତି </a></li>
                                             <li class=''><a href='#home-area'>ମନୋରଞ୍ଜନ</a></li>
                                             <li class=''><a href='#home-area'>ଜାତୀୟ</a></li>
                                             <li class=''><a href='#home-area'>ଭିଡ଼ିଓ</a></li>
                                             <li class=''><a href='#home-area'>ରାଜନୀତି</a></li>                                                                            
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
                            <div class="col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0px 0px 0px 0px">
                                <div class="col-lg-6 col-md-6">
                                    <h3>ଆଞ୍ଚଳିକ</h3>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                     <h4 class="pull-right">
                                         <select style="background-color: black;color: white;font-size: 15px">
                                             <option>Latest</option>
                                             <option>popular</option>
                                             <option>editor</option>                                             
                                         </select>
                                     </h4>
                                </div>
                                
                            </div>
                        </div>
                        <div class="row">
                            <?php
                            $sql="select * from newslist where category='ଆଞ୍ଚଳିକ' order by id desc limit 5";
                                $result = mysqli_query($conn, $sql);
                                $row_cnt = $result->num_rows;
                              
                                for($i=1; $i<=$row_cnt; $i++)
                                {
                                  $row=mysqli_fetch_assoc($result);
                                  if($i==1){
                                        echo '
                                                <div class="col-6 col-lg-6 col-md-6 col-sm-12 viewDetail " onclick="openNewsDetails('.$row["id"].')">
                                                    
                                                    <img src="'.$row["image"].'" style="height: 100%;width: 100%">
                                                    <div style="margin-top:-105px;background-color: black ">
                                                        <span style="background: black;color: white;padding: 5px;margin-left: 5px;">'.$row["category"].'</span>
                                                        <h4 style="color: white;margin-top: 12px;margin-left: 5px;">'.$row["heading"].'</h4>
                                                        <h6 style="color: white;margin-left: 5px;"><b>'.$row["date"].'</b></h6>
                                                    </div>
                                                    
                                                    <p class="news_id" style="display:none">'.$row["id"].'</p>
                                                </div>';
                                  }
                                  if($i==2){
                                        echo '
                                                <div class="col-6 col-lg-6 col-md-6 col-sm-12 viewDetail  " style="height: 465px;padding: 0px;">
                                                    <div class="col-6 col-lg-6 col-md-6 col-sm-12" style="height: 240px;/* margin-bottom:5px; */padding: 0px 0px 5px 5px;" onclick="openNewsDetails('.$row["id"].')">
                                                       
                                                         <img src="'.$row["image"].'" style="height: 100%;width: 100%">
                                                        <div style="margin-top:-105px;background-color: black ">
                                                            <span style="background: black;color: white;padding: 5px;margin-left: 5px;">'.$row["category"].'</span>
                                                            <h4 style="color: white;margin-top: 12px;margin-left: 5px;">'.$row["heading"].'</h4>
                                                            <h6 style="color: white;margin-left: 5px;"><b>'.$row["date"].'</b></h6>
                                                        </div>
                                                         <p class="news_id" style="display:none">'.$row["id"].'</p>
                                                    </div>';
                                  }
                                  if($i==3){
                                        echo '
                                                <div class="col-6 col-lg-6 col-md-6 col-sm-12 viewDetail " style="height: 240px;/* margin-bottom:5px; */padding: 0px 0px 5px 5px;" onclick="openNewsDetails('.$row["id"].')">
                                                        <p class="news_id" style="display:none">'.$row["id"].'</p>
                                                         <img src="'.$row["image"].'" style="height: 100%;width: 100%">
                                                        <div style="margin-top:-105px;background-color: black ">
                                                            <span style="background: black;color: white;padding: 5px;margin-left: 5px;">'.$row["category"].'</span>
                                                            <h4 style="color: white;margin-top: 12px;margin-left: 5px;">'.$row["heading"].'</h4>
                                                            <h6 style="color: white;margin-left: 5px;"><b>'.$row["date"].'</b></h6>
                                                        </div>
                                                    </div>';
                                  }
                                  if($i==4){
                                        echo '
                                                <div class="col-6 col-lg-6 col-md-6 col-sm-12" style="height: 240px;/* margin-bottom:5px; */padding: 0px 0px 5px 5px;" onclick="openNewsDetails('.$row["id"].')">
                                                         <img src="'.$row["image"].'" style="height: 220px;width: 100%">
                                                        <div style="margin-top:-105px;background-color: black ">
                                                            <span style="background: black;color: white;padding: 5px;margin-left: 5px;">'.$row["category"].'</span>
                                                            <h4 style="color: white;margin-top: 12px;margin-left: 5px;">'.$row["heading"].'</h4>
                                                            <h6 style="color: white;margin-left: 5px;"><b>'.$row["date"].'</b></h6>
                                                        </div>
                                                    </div>';
                                  }
                                  if($i==5){
                                        echo '
                                                <div class="col-6 col-lg-6 col-md-6 col-sm-12" style="height: 240px;/* margin-bottom:5px; */padding: 0px 0px 5px 5px;" onclick="openNewsDetails('.$row["id"].')">
                                                         <img src="'.$row["image"].'" style="height: 220px;width: 100%">
                                                        <div style="margin-top:-105px;background-color: black ">
                                                            <span style="background: black;color: white;padding: 5px;margin-left: 5px;">'.$row["category"].'</span>
                                                            <h4 style="color: white;margin-top: 12px;margin-left: 5px;">'.$row["heading"].'</h4>
                                                            <h6 style="color: white;margin-left: 5px;"><b>'.$row["date"].'</b></h6>
                                                        </div>
                                                    </div>
                                                </div>';
                                  }

                                }                            
                            ?>                           
                        </div>
                        <div class="row" style="margin-top: 50px">
                            <div class="col-lg-8 col-md-8 col-sm-12 p-0">
                                <?php 

                             
                                    $sql="select * from newslist where category='ଆଞ୍ଚଳିକ' order by date desc,id asc";// where sub_category='breaking_news' id desc limit 4";
                                    $result = mysqli_query($conn, $sql);
                                    $row_cnt = $result->num_rows;
                                   // echo $row_cnt;
                                    while ( $row=mysqli_fetch_array($result)) {
                                        echo '<div class="col-lg-6 col-md-6 col-sm-12 viewDetail " onclick="openNewsDetails('.$row["id"].')" style="height: 240px;padding: 0px 0px 5px 5px;">
                                               <img src="'.$row["image"].'" style="height: 180px;width: 100%"> 
                                               <h3>'.$row["heading"].'</h3>
                                               <h6><b>'.$row["date"].'</b></h6>
                                            </div>';
                                    }

                                ?>
                                
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <?php 

                             
                                    $sql="select * from advertisementList where category='ଆଞ୍ଚଳିକ' limit 4";// where sub_category='breaking_news' id desc limit 4";
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
                                            echo '<div class="row viewDetail " onclick="openNewsDetails('.$row["id"].')">
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
                                            echo '<div class="row viewDetail " onclick="openNewsDetails('.$row["id"].')">
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
                                        $sql="SELECT count(*) as counter, category, id FROM `newslist` GROUP BY category order by counter desc";// where sub_category='breaking_news' id desc limit 4";
                                        $result = mysqli_query($conn, $sql);
                                        $row_cnt = $result->num_rows;
                                       // echo $row_cnt;
                                        while($row=mysqli_fetch_assoc($result))
                                        {
                                            echo '<div class="col-12 " style="padding: 10px">
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
       <!--  <script type="text/javascript">
            function openNewsDetails(id){
                var idValue=id;
                alert(" test id is : "+idValue);
                var data1= { id : idValue };
                alert(JSON.stringify(data1));
                document.location.href = 'news_detail.php?news_details_value='+idValue;               
            }
        </script> -->
    </body>
</html>
