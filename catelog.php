
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
    
        <link href="./assets/libs/select2/select2.min.css" rel="stylesheet" />
        <script src="./assets/libs/select2/select2.min.js" defer></script>
    
        <!-- End Custome CSS -->
    
        <title>Home Page</title>
    
        <!--INDEX CSS  -->
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
    
        <style>
            @media only screen and (max-width: 641px) {
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
    
                .copyright-text{
                    text-align: center !important;
                }
    
                .footer-content-rigth{
                    margin-top: 30px;
                }
            }
        </style>
        <!--END INDEX CSS  -->
    
        <!-- This Page Style -->
        <style>
         
            
            .filters-heading{
                font-size: 15pt;
                font-family: 'RobotoCondensed-Bold';
            }
            .option-select{
                margin-bottom: 13px;
            }
            .option-select select{
                width: 170px;
                height: 38px !important;
            }
    
            .select2-selection__rendered {
                font-size: 7.5pt;
                color: #d7d7d7;
                font-family: 'RobotoCondensed-Light';
                /* line-height: 100px !important; */
            }
    
            .select2-selection--single{
                height: 38px !important;
                background-color: rgb(204, 200, 200) !important;
            }
    
            .filters-wrapper{
                margin-top: 30px;
           
            }
    
            .filter-heading{
                text-transform: uppercase !important;
                font-size: 10pt;
                font-family:'RobotoCondensed-Bold';
            }
    
            .expand-icon{
                display: none ;
            }
    
            .filters-wrapper label{
                font-size: 7.5pt !important;
                font-family: 'RobotoCondensed-Light' !important;
                color: #131313;
                font-weight:600;
    
            }
    
            .filters-wrapper .icon{
                cursor: pointer;
            }
    
            .filters-wrapper input{
                width: 7.5pt;
                height: 7pt;
            }
    
            .filter-heading-wrapper{
                border-bottom: 1px solid rgb(175, 173, 173);
            }
    
    
            .product-wrapper{
                text-align: center;
                width: 92%;
            }
    
            .product-image{
                margin-bottom: 20px;
            }
            .product-image img{
                width: 140pt;
                height: 150pt;
            }
    
            .product-wrapper .product-name{
                font-size: 17.5pt;
                color: #606060;
                font-family:'RobotoCondensed-Bold';
            }
    
            .product-wrapper .color{
                font-size: 9.25pt;
                color: #606060;
                font-family:'RobotoCondensed-Bold';
                text-transform: uppercase;
            }
    
            .more-info-btn{
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
    
            .product-hr{
                background-color: rgb(216, 216, 216);
                height: 2px;
                margin-top: 15px;
            }
    
            /* Mobiles */
            .mobile-component{
                display: none;
            }
            /* Mobiles */
        </style>
    
        <!-- Responsive -->
        <style>
            @media only screen and (max-width: 641px) {
                .mobile-component{
                display: block;
                }
                .also-use-mobile-filter{
                    display: none;
                }
    
                
                .mobile-filter-heading{
                    /* text-decoration: underline; */
                    font-size: 15pt;
                    font-family: 'RobotoCondensed-Bold';
                    margin-bottom: 30px;
                }
    
                .icon{
                    color: grey;
                    cursor: pointer;
                    text-decoration: underline !important;
                }
    
                .mobile-filter-overlay{
                    position: fixed;
                    width: 100%;
                    height: 100vh;
                    overflow-x: scroll;
                    top: 5px !important;
                    padding-bottom: 10px;
                    
                }
    
                
                .mobile-filter-overlay > div{
                    padding: 10px 5px 10px 5px;
                    width: 93% !important;
                    background-color: #fff;
                    border-radius: 5px;
                    position: relative;
                }
    
                .filter-close{
                    font-size: 40px;
                    position: absolute;
                    top: 0;
                    left: 85%;
                    cursor: pointer;
                }
    
                .filter-heading{
                    font-size: 15pt;
                }
    
                .filters-wrapper input{
                    width: 13.5pt;
                    height: 12pt;
                }
    
                .filters-wrapper label{
                    font-size: 13.5pt !important;
                }
    
                .product-wrapper{
                    text-align: center;
                    width: 100%;
                }
                .product-image img{
                    width: 55pt;
                    height: 55pt;
                } 
    
                .product-wrapper .product-name{
                    font-size: 11pt;
                }
    
                .product-wrapper .color{
                    font-size: 6pt;
                }
    
                .more-info-btn{
                    font-size: 10px;
                    width: 60px;
                }
            }
        </style>
        <!-- End Responsive -->
    
        <!-- End This Page Style -->
    
    
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
            <div class="row mt-5 mb-5" >
                <div class="col-lg-3 col-12">
                    <div class="also-use-mobile-filter">
                        <div class="mobile-filter-overlay">     
                            <div style="width: 80%;">
                                <h5 class="filters-heading">FILTERS</h5>
                                <div class="mobile-component">
                                    <span class="filter-close"><i class="fa-sharp fa-solid fa-filter-circle-xmark"></i></span>
                                </div>
                                <div class="filters">
                                    
                                    <!-- Select Filters -->
                                    <div class="filter-wrapper mt-4">
    
                                        <div class="filter-heading-wrapper mb-2">
                                            <div class="row ">
                                                <div class="col-10">
                                                    <div class="filter-heading">By Vehicle</div>
                                                </div>
                                                <div class="col-2">
                                                    <span class="icon expand-icon" style="cursor: pointer;"><i class="fa-solid fa-plus"></i></span>
                                                    <span class="icon minimize-icon" style="cursor: pointer;"><i class="fa-solid fa-minus"></i></span>
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="main-filter-wrapper">
                                            <div class="option-select">
                                                <select class="js-example-basic-single" name="state" style="height: 50px;">
                                                    <option value="">MAKE</option>
                                                </select>
                                            </div>
                                            
                                            <div class="option-select">
                                                <select class="js-example-basic-single" name="state">
                                                    <option value="">MAKE</option>
                                                </select>
                                            </div>
                                            
                                            <div class="option-select">
                                                <select class="js-example-basic-single" name="state">
                                                    <option value="">MAKE</option>
                                                </select>
                                            </div>
                                        </div>
    
                                    </div>
                                    <!-- End Select Filters -->
                
                                     <!-- By Vehicle -->
                                    <div class="filters-wrapper">
    
                                        <div class="filter-heading-wrapper">
                                            <div class="row ">
                                                <div class="col-10">
                                                    <div class="filter-heading">By model</div>
                                                </div>
                                                <div class="col-2">
                                                    <span class="icon expand-icon"><i class="fa-solid fa-plus"></i></span>
                                                    <span class="icon minimize-icon"><i class="fa-solid fa-minus"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="main-filter-wrapper">
                                            <div>
                                                <input type="checkbox" name="" id="">
                                                <label for="">ARROW</label>
                                            </div>
                        
                                            <div>
                                                <input type="checkbox" name="" id="">
                                                <label for="">ELITE</label>
                                            </div>
                        
                                            <div>
                                                <input type="checkbox" name="" id="">
                                                <label for="">MAYHEM</label>
                                            </div>
                        
                                            <div>
                                                <input type="checkbox" name="" id="">
                                                <label for="">BWL STEEL</label>
                                            </div>
                        
                                            <div>
                                                <input type="checkbox" name="" id="">
                                                <label for="">HAMMER</label>
                                            </div>
                        
                                            <div>
                                                <input type="checkbox" name="" id="">
                                                <label for="">SIEGE</label>
                                            </div>
                        
                                            <div>
                                                <input type="checkbox" name="" id="">
                                                <label for="">BWL STEEL D-HOLE</label>
                                            </div>
                        
                                            <div>
                                                <input type="checkbox" name="" id="">
                                                <label for="">ASSAULT</label>
                                            </div>
                        
                                            <div>
                                                <input type="checkbox" name="" id="">
                                                <label for="">ROGUE</label>
                                            </div>
                        
                                            <div>
                                                <input type="checkbox" name="" id="">
                                                <label for="">ASYLUM</label>
                                            </div>
                        
                                            <div>
                                                <input type="checkbox" name="" id="">
                                                <label for="">SCAR</label>
                                            </div>
                        
                                            <div>
                                                <input type="checkbox" name="" id="">
                                                <label for="">DEMON</label>
                                            </div>
                        
                                            <div>
                                                <input type="checkbox" name="" id="">
                                                <label for="">AMBUSH</label>
                                            </div>
                        
                                            <div>
                                                <input type="checkbox" name="" id="">
                                                <label for="">PRIME</label>
                                            </div>
                        
                                            <div>
                                                <input type="checkbox" name="" id="">
                                                <label for="">RAMPAGE</label>
                                            </div>
                        
                                            <div>
                                                <input type="checkbox" name="" id="">
                                                <label for="">CYCLOPS</label>
                                            </div>
                                        </div>
    
                                    </div>
                                    <!-- End By Vehicle -->
                
                                    <!-- By Colour -->
                                    <div class="filters-wrapper">
                
                                        <div class="filter-heading-wrapper">
                                            <div class="row ">
                                                <div class="col-10">
                                                    <div class="filter-heading">By Colour</div>
                                                </div>
                                                <div class="col-2">
                                                    <span class="icon expand-icon"><i class="fa-solid fa-plus"></i></span>
                                                    <span class="icon minimize-icon"><i class="fa-solid fa-minus"></i></span>
                                                </div>
                                            </div>
                                        </div>
                    
                                        <div class="main-filter-wrapper">
                                            <div>
                                                <input type="checkbox" name="" id="">
                                                <label for="">MATT BLACK</label>
                                            </div>
                        
                                            <div>
                                                <input type="checkbox" name="" id="">
                                                <label for="">FULL GLOSS BLACK</label>
                                            </div>
                        
                                            <div>
                                                <input type="checkbox" name="" id="">
                                                <label for="">HYPER DARK</label>
                                            </div>
                        
                                            <div>
                                                <input type="checkbox" name="" id="">
                                                <label for="">MATT BLACK MILLING WINDOWS</label>
                                            </div>
                        
                                            <div>
                                                <input type="checkbox" name="" id="">
                                                <label for="">MATT BLACK WITH MILLED HOLES</label>
                                            </div>
                        
                                            <div>
                                                <input type="checkbox" name="" id="">
                                                <label for="">MACHINED FACE BLACK MILLING</label>
                                            </div>
                        
                                            <div>
                                                <input type="checkbox" name="" id="">
                                                <label for="">MACHINED FACE BLACK MILLING</label>
                                            </div>
                        
                                            <div>
                                                <input type="checkbox" name="" id="">
                                                <label for="">MACHINED MATT BLACK CHROME RIVETS</label>
                                            </div>
                        
                                            <div>
                                                <input type="checkbox" name="" id="">
                                                <label for="">BLACK CHROME RIVETS</label>
                                            </div>
                        
                                            <div>
                                                <input type="checkbox" name="" id="">
                                                <label for="">BLACK W/WHITE LINE</label>
                                            </div>
                        
                                            <div>
                                                <input type="checkbox" name="" id="">
                                                <label for="">MATT BLACK W/RED LINE</label>
                                            </div>
                        
                                            <div>
                                                <input type="checkbox" name="" id="">
                                                <label for="">BLACK W/GOLD BOLTS</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End By Colour -->
                
                                    <!-- By Size -->
                                    <div class="filters-wrapper">
                                        <div class="filter-heading-wrapper">
                                            <div class="row ">
                                                <div class="col-10">
                                                    <div class="filter-heading">By Size</div>
                                                </div>
                                                <div class="col-2">
                                                    <span class="icon expand-icon"><i class="fa-solid fa-plus"></i></span>
                                                    <span class="icon minimize-icon"><i class="fa-solid fa-minus"></i></span>
                                                </div>
                                            </div>
                                        </div>
                             
                                        <div class="main-filter-wrapper">
                                            <div>
                    
                                                <span class="">
                                                    <input type="checkbox" name="" id="">
                                                    <label for="">13*</label>
                                                </span>
                    
                                                &nbsp;&nbsp;
                                                <span class="">
                                                    <input type="checkbox" name="" id="">
                                                    <label for="">14*</label>
                                                </span>
                    
                                                &nbsp;&nbsp;
                                                <span class="">
                                                    <input type="checkbox" name="" id="">
                                                    <label for="">15*</label>
                                                </span>
                    
                                                &nbsp;&nbsp;
                                                <span class="">
                                                    <input type="checkbox" name="" id="">
                                                    <label for="">16*</label>
                                                </span>
                                            </div>
                    
                                            <div>
                                                <span class="">
                                                    <input type="checkbox" name="" id="">
                                                    <label for="">17*</label>
                                                </span>
                    
                                                &nbsp;&nbsp;
                                                <span class="">
                                                    <input type="checkbox" name="" id="">
                                                    <label for="">18*</label>
                                                </span>
                    
                                                &nbsp;&nbsp;
                                                <span class="">
                                                    <input type="checkbox" name="" id="">
                                                    <label for="">20*</label>
                                                </span>
                    
                                            </div>
                                        </div>
                                    </div>
                                    <!--End By Size -->
                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-12">
                    <div class="">
                        <div class="mobile-component">
                            <h2 class="mobile-filter-heading">FILTERS 
                                &nbsp;&nbsp;&nbsp;<span class="icon show-filter"><i class="fa-solid fa-arrow-down-z-a"></i></span>
                            </h2>
                        </div>
                    </div>
                    <div class="catalog-wrapper">

                        <div class="row">
                            
                        </div>

                        <?php 

                            include('./backend/db.php');

                            $mainQuery       = "SELECT * FROM wheels";
                            $result          = mysqli_query($conn, $mainQuery);
                            $respData        = [];

                            if (mysqli_num_rows($result) > 0) {
                            
                                while ($row = mysqli_fetch_assoc($result)) {

                                    $queryForCategory =  "SELECT * FROM wheel_category where cat_id='$row[category_id]'";
                                    $catResult        =   mysqli_query($conn, $queryForCategory);

                                    $subCatQuery      =  "SELECT * FROM wheel_sub_category where cat_id='$row[category_id]' AND sub_cat_id='$row[subcategory_id]' ";
                                    $subCatResult     =  mysqli_query($conn, $subCatQuery);

                                    $colourQuery      =  "SELECT * FROM color where colour_id='$row[colour]' ";
                                    $colourResult     =  mysqli_query($conn, $colourQuery);

                                    if (mysqli_num_rows($catResult) > 0){
                                        $row['category'] = mysqli_fetch_assoc($catResult)['name'];
                                    }

                                    if(mysqli_num_rows($subCatResult) > 0){
                                        $row['subCategory'] = mysqli_fetch_assoc($subCatResult)['name'];
                                    }

                                    if(mysqli_num_rows($colourResult) > 0){
                                        $row['color_name'] = mysqli_fetch_assoc($colourResult)['colour_name'];
                                    }

                                    array_push($respData,$row);
                                
                                }
                            
                            } else {
                                echo "0 results";
                            }

                        ?>

                        <script>
                            var data = <?php echo json_encode($respData); ?>;
                            var catelogWrapper = document.querySelector('.catalog-wrapper .row');
                            data.forEach(element => {
                                catelogWrapper.innerHTML += `<div class="col-4"><div class="product-wrapper mb-5"><div class="product-image"><img src="./assets/imgs/catalog_imgs/${element.image.trim()}" alt=""></div><div class="product-name">${element.name}</div><div class="color">${element.color_name ? element.color_name : ''}</div><div><button class="more-info-btn">MORE INFO</button></div></div></div>`;
                            });
                        </script>

                    </div>
                </div>
            </div>
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
    
            // Default Basic
            $('.close-menu').click(()=>{
                $("#mobile-menu").toggle()
            })
            
            $('.humberger').click(()=>{
                $("#mobile-menu").toggle()
            })
    
            $('.js-example-basic-single').select2({});
            // End Default
    
    
            $(".expand-icon").click(function(){
                $(this).hide();
                $(this).next().fadeIn();
    
                $(this).parent().parent().parent().next().show("slow")
            });
    
            $(".minimize-icon").click(function(){
                $(this).hide();
                $(this).prev().fadeIn();
    
                $(this).parent().parent().parent().next().hide("slow")
            });
    
    
    
            $(".show-filter").click(()=>{
                $(".also-use-mobile-filter").toggle()
            })
    
            $(".filter-close").click(()=>{
                $(".also-use-mobile-filter").toggle()
            })
    
    
        });
    </script>
    </body>
    </html>
