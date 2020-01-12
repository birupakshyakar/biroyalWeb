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
                                        
                                             <li class=''><a href='index.php'>Home</option>
                                             <li class='active'><a href='#'>admin</option>                                                                                                                   
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
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="col-lg-6 col-md-6">
                                    <label>Section</label><br>
                                    <select  class="dropdownStyle" name="section_name" id="section_name" style="width: 100%">
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
                                    <label>Upload Image</label><br>
                                    <input type="file" name="image_path" id="image_path">
                                    <label>News Title</label><br>
                                    <input type="text" name="news_title" id="news_title" class="dropdownStyle" style="width: 100%">
                                    <label>News Date</label><br>
                                    <input type="date" name="news_date" id="news_date" class="dropdownStyle" style="width: 100%" value="<?php echo date('Y-m-d'); ?>">
                                </div>
                                <div class="col-lg-6 col-md-6">
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
                                
                            </div>
                           
                            <div class="col-lg-3 col-md-3 col-sm-12 pull-right">
                                <button onclick="fncn();" class="submit">Submit</button>
                                <!-- <button>Submit</button> -->
                                <p id="response"></p>
                            </div>               
                        </div>
                                              
                    </div>
                </div>
            </div>
            
            
            <!-- footer area
            ============================================ -->
            <footer class="footer-area pt-100">
                <div class="container">
                    <!-- <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <h3>Editor Pick</h3>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <img src="img/photo4.jpg">
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12">
                                    <h4> ଆଞ୍ଚଳିକ ଖବର ବଡ ଜବର </h4>
                                    <h6><b>December 30, 2019</b></h6>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <img src="img/photo4.jpg">
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12">
                                    <h4> ଆଞ୍ଚଳିକ ଖବର ବଡ ଜବର </h4>
                                    <h6><b>December 30, 2019</b></h6>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <img src="img/photo4.jpg">
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12">
                                    <h4> ଆଞ୍ଚଳିକ ଖବର ବଡ ଜବର </h4>
                                    <h6><b>December 30, 2019</b></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <h3>Popular Pick</h3>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <img src="img/photo4.jpg">
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12">
                                    <h4> ଆଞ୍ଚଳିକ ଖବର ବଡ ଜବର </h4>
                                    <h6><b>December 30, 2019</b></h6>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <img src="img/photo4.jpg">
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12">
                                    <h4> ଆଞ୍ଚଳିକ ଖବର ବଡ ଜବର </h4>
                                    <h6><b>December 30, 2019</b></h6>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <img src="img/photo4.jpg">
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12">
                                    <h4> ଆଞ୍ଚଳିକ ଖବର ବଡ ଜବର </h4>
                                    <h6><b>December 30, 2019</b></h6>
                                </div>
                            </div>
                            
                           
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                             <h3>Popular Category</h3>
                             <div class="row">
                                <div class="col-12" style="padding: 10px">
                                    <span>Test</span>
                                    <span class="pull-right">1222</span>
                                </div>
                                <div class="col-12" style="padding: 10px">
                                    <span>Test</span>
                                    <span class="pull-right">1222</span>
                                </div>
                                <div class="col-12" style="padding: 10px">
                                    <span>Test</span>
                                    <span class="pull-right">1222</span>
                                </div>
                                <div class="col-12" style="padding: 10px">
                                    <span>Test</span>
                                    <span class="pull-right">1222</span>
                                </div>
                                <div class="col-12" style="padding: 10px">
                                    <span>Test</span>
                                    <span class="pull-right">1222</span>
                                </div>
                                <div class="col-12" style="padding: 10px">
                                    <span>Test</span>
                                    <span class="pull-right">1222</span>
                                </div>
                                 
                             </div>
                        </div>
                        
                    </div><br><br> -->
                    <div class="row text-center">
                       <div class="col-md-12 text-center">
                        <div class="footer-all">
                            <div class="footer-logo logo">
                                <h3>KhabaraOdia</h3>
                            </div>
                            <div class="footer-icon">
                               <!--  <p>There are many variations of passages of Lorem Ipsum available,<br> but the majority have suffered alteration in </p> -->
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></option>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></option>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></option>                                    
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
        <script type="text/javascript">
                var filename;
                $('#image_path').change(function() {
                    filename = $('#image_path').val();
                    filename = filename.replace(/.*[\/\\]/, '');
                    //alert(filename);
                });

                        
                function fncn(){
                       
                    var section_name = document.getElementById("section_name").value;
                    var catagory_name = document.getElementById("catagory_name").value;                   
                    var news_title = document.getElementById("news_title").value;
                    var news_content = document.getElementById("news_content").value;
                    var news_date = document.getElementById("news_date").value;

                   
                    var file_data = $('#image_path').prop('files')[0];   
                    var form_data = new FormData();                  
                    form_data.append('file', file_data);
                    form_data.append('section', section_name);
                    form_data.append('news_title', news_title);
                    form_data.append('news_content', news_content);
                    form_data.append('news_date', news_date);
                    form_data.append('catagory_name', catagory_name);
                    //alert(form_data);  
                    console.log(JSON.stringify(form_data));
                    //alert(JSON.stringify(form_data));

                    for (var value of form_data.values()) {
                       console.log(value); 
                    }                  
                     $.ajax({
                        url: "insert_news.php",
                        type: "POST",
                        data: form_data ,
                        cache: false,
                        contentType: false,
                        processData: false,
                        dataType: 'text',
                        enctype : 'multipart/form-data' ,
                        success: function (data) {
                                //alert(data);
                                $("#response").text(data);
                                //console.log(data.abc);
                           // You will get response from your PHP page (what you echo or print)
                        }   
                    });
                    

                
            }
            </script>
    </body>
</html>
