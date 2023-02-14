<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="./assets/bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous" ></script>
    <!-- Custome CSS -->
    <link rel="stylesheet" href="./assets/css/fonts.css">
    <link rel="stylesheet" href="./assets/css/root.css">
    <link rel="stylesheet" href="./assets/css/root-style.css">
    <!-- End Custome CSS -->
    <title>Home Page</title>

    <style>
        body{   
            margin-bottom: 0px !important;
        }
        nav{
            background-image: url(./assets/imgs/home/2023_Grudge_Catalogue_Main.jpg);
            padding-top: 30px;
            padding-bottom: 140px;
            background-repeat: no-repeat;
            background-position: center;
            background-size:cover;
        }

        header{
            background-image: url(./assets/imgs/home/grudge_nav.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            /* height: 50px; */
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .logo-wrapper{
            text-align: right;
        }

        header .col-9{
            /* padding:0px 70px; */
        }

        .links{
            margin-top: 5px;
            font-size: 18px;
            font-family: 'RobotoCondensed-Bold' !important;
            font-weight: 1000;
        }


        .links a{
            text-decoration: none;
            color: #131313;
            cursor: pointer;
            letter-spacing: 1.5px;
        }

        .link-wrapper{
            /* background-color: blue !important; */
            width: 88%;
            margin: auto;
        }

        .icon-wrapper{
            text-align: right;
            margin-top: 5px;
        }
        .icon-wrapper .icon{
            position: relative;
        }
        .icon-wrapper .icon::after{
            content: '\f0c9';
            font-family: Fontawesome;
            position: absolute;
            margin-top: 1px;
            margin-left: 7px;
            font-size: 18.5px;
            cursor: pointer;
        }

        .heading{
            font-size: 17.9pt;
            font-family: 'RobotoCondensed-Bold';
            letter-spacing: 1.2px;
            margin-top: 30px !important;
            margin-bottom: 30px !important;
        }

        .img-boxes h6{
            margin-top: 25px;
            font-size: 15pt;
            color: #000000;
            font-family: 'RobotoCondensed-Bold';
        }

        .img-boxes .spec{
            font-size: 9.25pt;
            color: #606060;
            font-family: 'RobotoCondensed-Bold';
        }


        .img-boxes img{
            width: auto;
            height: 208px;
            width: 277px;
        }


        .circle{
            width: 13.5pt;
            height: 13.5pt;
            background-color: #606060;
            margin: 0px 5px;
            border-radius: 50%;
            /* display: inline !important; */
        }

        .big-image{
            width: 937px;
            height: 704px;
        }

        .hr{
            height: 3.5px;
            background-color: #e2e2e2;
        }

        .img-with-bg{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 276px; 
            height: 209px;
            background-image:
            linear-gradient(45deg,
              rgba(19, 19, 19, 0.75),
              rgba(19, 19, 19, 0.75)), url(./assets/imgs/Gallery/GalleryMain.jpg);
            background-size: cover;
        }

        .img-with-bg p{
            background-color: black;
            width: 100%;
            text-align: center;
            color: #fff;
            font-size: 8.5pt;
            font-family: 'RobotoCondensed-Bold';
        }

        footer{
            background-color: #F31717;
            padding-top: 40px;
            padding-bottom: 40px;

        }

        footer h6{
            font-weight: bold;
            font-family: 'RobotoCondensed-Bold';
        }
        
        .content-wrapper{
            margin-top: 25px;
        }

        
        footer .footer-content-left input{
            border-radius: 0 !important;
            background-color: transparent ;
            border: 2px solid #13131377;
            width: 100%;
            height: 35px;
        }

        .sign-up-btn{
            font-family: 'RobotoCondensed-Bold';
            font-size: 15px;
            width: 120px;
            background-color: #131313;
            outline: none;
            border: none;
            padding-top: 5px;
            padding-bottom: 5px;
            margin-top: 10px;
            color: #e2e2e2e7;
        }

        .info-wrapper{
            margin-top: 10px;
            margin-bottom: 5px;
            font-size: 11px;
            font-weight: 600;
            font-family: 'RobotoCondensed-Bold';
        }

        .footer-main{
            padding: 30px 0px;
        }

        .footer-content-left{
            /* margin-left: 50px; */
        }

        .black-hr{
            background-color: #13131377;
            height: 3px;
        }

        .mobile-menu{
            display: none;
        }


    </style>

    <!-- Responsive -->
    <style>
        @media only screen and (max-width: 600px) {
            .mobile-menu{
                display: block;
            }

            #mobile-menu{
                display: block;
            }
            .nav{
                width: 100% !important;
                position: relative;
            }

            .humberger{
                margin-top: -43px;
                right: 3%;
                position: absolute;
                font-size: 30px;
                color: #e2e2e2;
            }


            .menu-overlay{
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100vh;
                background-color: rgba(19, 19, 19, 0.75);
            }

            .menu-wrapper{
                margin-top: 30px;
                left: 0 !important;
                width: 80%;
                height: 500px;
                background-color: #ffffff;
                padding-top: 30px;
                padding-left: 30px;
                padding-right: 10px;
                position: relative;
            }

            .close-menu{
                position: absolute;
                top:-20px;
                left: 104%;
                color: white;
                font-size: 40px;
            }

            .link{
                margin-bottom: 10px;
            }

            .link-wrapper{
                display: none;
            }

            .img-boxes img{
                width: 100%;
            }

            .img-wrapper{
                margin-bottom: 30px;
            }

            .img-boxes h6{
                margin-top: 10px;
            }

            .circle{
                /* width: 100px !important; */
            }
            .big-image{
                height: 300px;
                width: 100%;
            }

            .img-with-bg{
                width: 100% !important;
                margin-bottom: 30px;
            }

            .copyright-text{
                text-align: center !important;
            }

            .footer-content-rigth{
                margin-top: 30px;
            }
        }
    </style>

</head>
<body>

  <nav>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-3 logo-wrapper">
                    <img src="./assets/imgs/home/GrudgeLogo_web.png" height="36">
                </div>
                <div class="col-9">
                    <div class="link-wrapper">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="links">
                                    <a class="link">WHEELS</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a class="link">VEHICLES SEARCH</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a class="link">GALLERY</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a class="link">CONTACT</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="icon-wrapper">
                                    <img src="./assets/imgs/Social Media Icons/f_logo_circle.png" alt="" width="20" height="20">
                                    <img src="./assets/imgs/Social Media Icons/instagram_logo_circle.png" alt="" width="20" height="20">
                                    <img src="./assets/imgs/Social Media Icons/twitter_logo_circle.png" alt="" width="20" height="20">
                                    <img src="./assets/imgs/Social Media Icons/youtube_logo_circle.png" alt="" width="20" height="20">
                                    <span class="icon"></span>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mobile-menu">
                <span class="humberger"><i class="fa-solid fa-bars"></i></span>
                <div id="mobile-menu"  style="display: none;">
                    <div class="menu-overlay" >
                        <div class="menu-wrapper">
                            <span class="close-menu"><i class="fa-solid fa-xmark"></i></span>
                            <div class="links">
                                <div class="link"><a class="">WHEELS</a></div>
                                <div class="link"><a class="">VEHICLES SEARCH</a></div>
                                <div class="link"><a class="">GALLERY</a></div>
                                <div class="link"><a class="">CONTACT</a></div>
                            </div>
                            <hr>
                            <div class="text-center">
                                
                            <img src="./assets/imgs/Social Media Icons/f_logo_circle.png" alt="" width="20" height="20">
                            <img src="./assets/imgs/Social Media Icons/instagram_logo_circle.png" alt="" width="20" height="20">
                            <img src="./assets/imgs/Social Media Icons/twitter_logo_circle.png" alt="" width="20" height="20">
                            <img src="./assets/imgs/Social Media Icons/youtube_logo_circle.png" alt="" width="20" height="20">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
  </nav>

  <div class="container-fluid mt-5 mb-5">

    <div class="col-lg-9 m-auto mt-5">
        <!-- Latest GALLERY -->
        <h5 class="heading">LATEST GALLERY</h5>
        <div class="row img-boxes">
            <div class="col-lg-4 col-12 img-wrapper">
                <div>
                    <img src="./assets/imgs/Gallery/Gallerythumb.jpg" alt="">
                    <h6>TOYATA</h6>
                    <div class="spec">HILUX 4 X 2</div>
                    <div class="spec">GRUDGE OFFOROAD SIEGE 17 X 9.0</div>
                </div>
            </div>
            <div class="col-lg-4 col-12 img-wrapper">
                <div>
                    <img src="./assets/imgs/Gallery/Gallerythumb.jpg" alt="">
                    <h6>TOYATA</h6>
                    <div class="spec">HILUX 4 X 2</div>
                    <div class="spec">GRUDGE OFFOROAD SIEGE 17 X 9.0</div>
                </div>
            </div>
            <div class="col-lg-4 col-12 img-wrapper">
                <div>
                    <img src="./assets/imgs/Gallery/Gallerythumb.jpg" alt="">
                    <h6>TOYATA</h6>
                    <div class="spec">HILUX 4 X 2</div>
                    <div class="spec">GRUDGE OFFOROAD SIEGE 17 X 9.0</div>
                </div>
            </div>
            <div class="col-lg-2" style="display: flex;justify-content: center;align-items: center;margin: auto;margin-top: 50px !important;">
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
            </div>
        </div>
        <!-- End Latest GALLERY -->    
        
        <!-- Big Image -->
        <div class="mt-5 mb-5">
            <div class="hr"></div>
            <div class="mt-5">
                <img height="937px" class="big-image" width="100%" src="./assets/imgs/Gallery/GalleryMain.jpg" alt="">
            </div>
        </div>
        <!-- End Big Image -->

        <!-- Search By Make -->
        <h5 class="heading">SEARCH BY MAKE</h5>
        <div class="row">
            <div class="col-lg-4">
                <div class="img-with-bg">
                    <p>HOLDEN</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="img-with-bg">
                    <p>HOLDEN</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="img-with-bg">
                    <p>HOLDEN</p>
                </div>
            </div>
        </div>
        <!-- END Search By Make -->
    </div>


  </div>

  <footer>
    <div class="col-10 m-auto mt-5">
        <div class="black-hr"></div>
        <div class="row footer-main">
            <div class="col-10 m-auto">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="footer-content-left">
                            <h6>SIGN UP TO OUR NEWSLETTER</h6>
                            <div class="content-wrapper">
                                <div class="col-lg-4">
                                    <input type="text">
                                    <button class="sign-up-btn">SIGN UP</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="footer-content-rigth">
                            <h6>CONTACT US</h6>
                            <div class="content-wrapper">
                                <div class="info-wrapper">
                                    <div>B68 PRINCES HYW</div>
                                    <div>TEMPE NSW 2044</div>
                                </div>
                                <div class="info-wrapper">
                                    <div>(02) 8577 8577</div>
                                    <div>INFO@TEMPETYRES.COM.AU</div>
                                </div>
                                <div class="icon-wrapper" style="text-align: left !important;margin-top: 10px;">
                                    <img src="./assets/imgs/Social Media Icons/f_logo_circle.png" alt="" width="20" height="20">
                                    <img src="./assets/imgs/Social Media Icons/instagram_logo_circle.png" alt="" width="20" height="20">
                                    <img src="./assets/imgs/Social Media Icons/twitter_logo_circle.png" alt="" width="20" height="20">
                                    <img src="./assets/imgs/Social Media Icons/youtube_logo_circle.png" alt="" width="20" height="20">
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="black-hr"></div>
        <div class="copyright-text" style="text-align: right;font-size: 13px;font-family: 'RobotoCondensed-Bold';">
            @ 2022 TEMPE TYRES - ALL RIGTHS RESERVED
        </div>
    </div>
  </footer>

<script>
    $(document).ready(function(){

        $('.close-menu').click(()=>{
            $("#mobile-menu").toggle()
        })
        
        $('.humberger').click(()=>{
            $("#mobile-menu").toggle()
        })
    });
</script>
</body>
</html>