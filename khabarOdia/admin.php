<?php
    include 'connection/database_connection.php';
    $conn = OpenCon();
    session_start();
    //echo $_SESSION['user_type'];  
   
    if(!isset($_SESSION['user_type']))
        {
            //echo "Test ";
            header('Location: login.php');
        }
        
?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8" />
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
                                        
                                             <li class=''><a href='index.php'>Home</option>
                                             <a href="logout.php"><li class='logout' ><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</li></a>                                                                                                                   
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
                        <div class="row" style="display:<?php if($_SESSION['user_type'] =='admin') echo 'block'; else echo 'none'; ?>;" id="new_user_panel">
                          <div class="col-lg-4 col-md-4"> <h2>Create new user</h2><hr> 
                            <input type="text" name="" placeholder="Name" id="name" style="width: 100%;height: 40px"><br><br>
                            <input type="text" name="" placeholder="Userid" id="userid" style="width: 100%;height: 40px"><br><br>
                            <input type="text" name=""placeholder ="password" id="user_password" style="width: 100%;height: 40px"><br><br>
                            <input type="email" name="" placeholder="Emailid" id="email" style="width: 100%;height: 40px"><br><br>
                            <select id="user_type" style="width: 100%;height: 40px">
                                <option hidden="hidden">select</option>
                                <option value="user">User</option>
                                <option value="admin">Admin</option>
                            </select>
                            <button class="submit" id="userSubmit">Submit</button>
                          </div>
                        </div>
                        <div class="row" style="display: block; padding: 0px;margin-top: 20px" id="news_insert_panel">                
                            <div class="col-lg-12 col-md-12 col-sm-12"><h2>Insert News</h2><hr>
                                <div class="col-lg-8 col-md-8" style="padding: 0px">
                                    <label>Section</label><br>
                                    <select  class="dropdownStyle" name="news_section_name" id="news_section_name" style="width: 100% !important">
                                        <option  hidden="hidden">select</option>                                      
                                        <option value="ଆଞ୍ଚଳିକ">ଆଞ୍ଚଳିକ</option>
                                         <option value="ଅପରାଧ">ଅପରାଧ</option>
                                         <option value="ମୁଖ୍ୟ ଖବର">ମୁଖ୍ୟ ଖବର</option>
                                         <option value="ରାଜ୍ୟ">ରାଜ୍ୟ</option>
                                         <option value="ଖେଳ">ଖେଳ</option>
                                         <option value="ନିଯୁକ୍ତି">ନିଯୁକ୍ତି </option>
                                         <option value="ମନୋରଞ୍ଜନ">ମନୋରଞ୍ଜନ</option>
                                         <option value="ଜାତୀୟ">ଜାତୀୟ</option>
                                         <option value="ଭିଡ଼ିଓ">ଭିଡ଼ିଓ</option>
                                         <option value="ରାଜନୀତି">ରାଜନୀତି</option> 
                                    </select>
                                    <div id="news-entry-section" style="display:none ">
                                        <label>Cover Image</label><br>
                                        <input type="file" name="image_path" id="image_path">
                                        <label>Other Images</label><br>
                                        <input type="file" name="multiple_image_path[]" id="multiple_image_path" multiple="multiple">
                                        <label>News Title</label><br>
                                        <input type="text" name="news_title" id="news_title" class="dropdownStyle" style="width: 100%">
                                        <label>News Date</label><br>
                                        <input type="date" name="news_date" id="news_date" class="dropdownStyle" style="width: 100%" value="<?php echo date('Y-m-d'); ?>">
                                        <div class="">
                                            <label>Category</label><br>
                                            <select name="catagory_name" id="catagory_name" class="dropdownStyle" style="width: 100%">
                                                <option  hidden="hidden">select</option>
                                                <option value="breaking_news">Breaking News</option>
                                                <option value="popular">Popular</option>
                                                <option value="editor">Editor Pick</option>
                                            </select> 
                                            <label>News Content</label><br>
                                            <textarea style="height: 200px;width: 100%" id="news_content"></textarea> 
                                        </div>
                                        <div class="">
                                            <button onclick="fncn();" class="submit">Submit</button>
                                            <!-- <button>Submit</button> -->
                                            <p id="response"></p>
                                        </div>
                                    </div>
                                    <div id="video-upload" style="display:none">
                                        <label>Video Title</label><br>
                                        <input type="text" name="video_title" id="video_title" class="dropdownStyle" style="width: 100%">
                                        <label>Youtube Video link</label><br>
                                        <input type="text" name="video_link" id="video_link" class="dropdownStyle" style="width: 100%">
                                        <button onclick="fncnVideo();" class="submit">Submit</button> <br>
                                        <p id="responseVideo"></p>            
                                    </div>
                                    <div id="job-upload" style="display:none">
                                        <label>Post Name</label><br>
                                        <input type="text" name="post_name" id="post_name" class="dropdownStyle" style="width: 100%">
                                        <label>No. of vacancy</label><br>
                                        <input type="text" name="vacancy_no" id="vacancy_no" class="dropdownStyle" style="width: 100%">
                                        <label>Job Location</label><br>
                                        <input type="text" name="job_location" id="job_location" class="dropdownStyle" style="width: 100%">
                                        <label>Job Description</label><br>
                                        <input type="text" name="job_description" id="job_description" class="dropdownStyle" style="width: 100%">
                                        <button onclick="fncnJob();" class="submit">Submit</button> <br>
                                        <p id="responsejob"></p>              
                                    </div>                                    
                                </div>                                
                            </div>                                           
                        </div>                                              
                    </div>
                </div>
            </div>            
            <!-- footer area -->
            <footer class="footer-area pt-100">
                <div class="container">                    
                    <div class="row text-center">
                       <div class="col-md-12 text-center">
                        <div class="footer-all">
                            <div class="footer-logo logo">
                                <h3>KhabaraOdia</h3>
                            </div>
                            <div class="footer-icon">
                               <!--  <p>There are many variations of passages of Lorem Ipsum available,<br> but the majority have suffered alteration in </p> -->
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>                                  
                                </ul>
                            </div>
                            <div class="footer-text">
                                <span>
                                    Copyright©
                                    <a href="index.php">KhabaraOdia</a>
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
