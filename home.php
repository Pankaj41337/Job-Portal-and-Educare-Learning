<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Homepage</title>

	<link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
    
	<link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Hammersmith+One' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=NTR' rel='stylesheet' type='text/css'>

</head>

<body>

   
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Job Portal <span>Website</span></a>
            </div>
            
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="career.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                    <li>
                        <a href="register.php">Sign Up</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    
    <style>
    
            html,
        body {
            height: 100%;
        }

        body {
            overflow-x: hidden;
        }



        /******** Slider ********/

        .carousel, .item, .active {
            height: 100%;
        }

        .carousel-inner {
            height: 100%;
        }

        .fill {
            width: 100%;
            height: 100%;
            background-position: center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
        }



        #mainCarousel .hero {
            position: relative;
            top: 50%;
            left: 50%;
            z-index: 1000;
            color: #fff;
            text-align: center;
            padding: 0 13%;
            font-family: 'NTR', sans-serif;
            text-shadow: 1px 1px 0 rgba(0, 0, 0, .75);
            -webkit-transform: translate3d(-50%, -50%, 0);
            -moz-transform: translate3d(-50%, -50%, 0);
            -ms-transform: translate3d(-50%, -50%, 0);
            -o-transform: translate3d(-50%, -50%, 0);
            transform: translate3d(-50%, -50%, 0);
        }

        #mainCarousel .hero h1 {
            font-size: 80px;
            margin: 0;
            padding: 0;
            font-family: 'Hammersmith One', sans-serif;
            text-transform: uppercase;
        }

        #mainCarousel .hero h3 {
            font-size: 26px;
            margin: 0;
            padding: 0;
        }

        #mainCarousel .hero button {
            margin-top: 30px;
            background: #42a5f6;
            font-size: 20px;
            padding: 10px 20px;
            outline: none;
        }

        #mainCarousel .carousel-indicators {      
            position: absolute;
            z-index: 1000;
        }

        #mainCarousel .carousel-control {
            position: absolute;
            z-index: 1000;
        }

        #mainCarousel .carousel-control.left {
            background-image: none;
        }

        #mainCarousel .carousel-control.right {
            background-image: none;
        }

        @media screen and (min-width: 768px) {
        #mainCarousel .carousel-control .icon-next, #mainCarousel .carousel-control .icon-prev {
            width: 200px;
            height: 200px;
            margin-top: -100px;
            font-size: 200px;
            margin-right: -100px;
            margin-left: -100px;
            color: #42a5f6;
        }
        }

        #mainCarousel .carousel-indicators .active {
            background: #42a5f6;
            border: 1px solid #0781E6; 
        }


        /******** Media Queries ********/

        @media screen and (max-width: 1071px) {
        #mainCarousel .hero h1 {
            font-size: 70px;
        }
        }

        @media screen and (max-width: 938px) {
        #mainCarousel .hero h1 {
            font-size: 60px;
        }
        }

        @media screen and (max-width: 799px) {
        #mainCarousel .hero h1 {
            font-size: 60px;
        }
        }

        @media screen and (max-width: 799px) {
        #mainCarousel .hero h3 {
            font-size: 22px;
        }
        }

        @media screen and (max-width: 608px) {
        #mainCarousel .hero h1 {
            font-size: 50px;
        }
        }

        @media screen and (max-width: 608px) {
        #mainCarousel .hero h3 {
            font-size: 20px;
        }
        }

        @media screen and (max-width: 507px) {
        #mainCarousel .hero h1 {
            font-size: 45px;
        }
        }

        @media screen and (max-width: 507px) {
        #mainCarousel .hero h3 {
            font-size: 18px;
        }
        }

        @media screen and (max-width: 400px) {
        #mainCarousel .hero h1 {
            font-size: 40px;
        }
        }

        @media screen and (max-width: 400px) {
        #mainCarousel .hero h3 {
            font-size: 16px;
        }
        }

        /******** Footer ********/


        .footer {
            margin-top: 20px;
            width: 100%;
            height: 60px;
            background-color: #1a223d;
            text-align: center;
        }

        .footer .text-muted {
            padding: 20px;
            margin: 0px;
            color: #fff;
        }

    	.navbar-default {
    		background-color: transparent;
    		border-color: transparent;
    		-webkit-transition: all 0.5s ease 0s;
  			-o-transition: all 0.5s ease 0s;
  			transition: all 0.5s ease 0s;
    	}
    	
    	.navbar-nav { 
    		margin-top: 40px;
    		float: right;
    	}
    	
    	@media screen and (max-width: 767px) {
    	.navbar-nav {
    		float: none;
    		text-align: center;
    		background: rgba(25, 33, 60, 0.5);
    	}
    	}
    	
    	.navbar-default .navbar-brand {
    		margin-top: 40px;
    		font-size: 28px;
    		font-family: 'Righteous', cursive;
    		color: #fff;
    		letter-spacing: 1px;
    		-moz-transition:color .5s ease-in;
   			-o-transition:color .5s ease-in;
    		-webkit-transition:color .5s ease-in;
    	}
    	
    	.navbar-default .navbar-brand span {
    		color: #42a5f6;
    		-moz-transition:color .5s ease-in;
   			-o-transition:color .5s ease-in;
    		-webkit-transition:color .5s ease-in;
    	}
    	
    	@media screen and (max-width: 400px) {
    	.navbar-default .navbar-brand {
    		font-size: 22px;
    	}
    	}
    	
    	.navbar-default .navbar-brand:hover, .navbar-default .navbar-brand span:hover {
    		color: #3D99B8;
    	}
    	
    	.navbar-default .navbar-nav>li>a {
    		color: #fff;
    		font-size: 14px;
    		font-family: 'Noto Sans', sans-serif;
    		text-transform: uppercase;
    		letter-spacing: 1px;
    	}
    	
    	.navbar-default .navbar-nav>li>a:hover {
    		color: #42a5f6;
    	}
    	
    	.navbar-default .navbar-nav>li>a:focus {
    		color: #42a5f6;
    	}
    	
    	.navbar-default .navbar-toggle {
    		margin-top: 40px;
    		border: none;
    	}
    	
		.navbar-default .navbar-toggle:focus, .navbar-default .navbar-toggle:hover {
			background: none;
		}
    	
    	.navbar-default .navbar-toggle .icon-bar {
    		height: 4px;
    		width: 28px;
    		background: #42a5f6;
		}
    	
    	.navbar-default.shrink {
    		background:rgba(25, 33, 60, 0.8)
		}
		
		.navbar-default.shrink .navbar-nav {
			margin-top: 20px;
			margin-bottom: 10px;
		}
		
		.navbar-default.shrink .navbar-brand {
			margin-top: 20px;
		}
		
		.navbar-default.shrink .navbar-toggle {
			margin-top: 25px;
		}

    
    </style>

    
    <header id="mainCarousel" class="carousel slide">
        
        <ol class="carousel-indicators">
            <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#mainCarousel" data-slide-to="1"></li>
            <li data-target="#mainCarousel" data-slide-to="2"></li>
        </ol>

       
        <div class="carousel-inner">
            <div class="item active">
            <div class="slider_overlay"></div>
               
                <div class="fill" style="background-image:url('images/slide1.jpg');">
                    <div class="hero">
                        <hgroup>
                            <h1>Welcome to this<br> Site</h1>
                            <h2>Do it now Sometimes later becomes never</h2>
                            <h3>Get started to achieve your Dream Job</h3>
                        </hgroup>
                        
                    </div>
                </div>
            </div>
            <div class="item">

            <div class="slider_overlay"></div>
                
                <div class="fill" style="background-image:url('images/slide2.jpg');">
                    <div class="hero">
                        <hgroup>
                            <h1>You Can Achieve your Goal here</h1>
                            <h3>ThankYou For Visiting this Site</h3>
                        </hgroup>
                    </div>
                </div>
            </div>
            <div class="item">    
            <div class="slider_overlay"></div>
                
                <div class="fill" style="background-image:url('images/slide3.jpg');">
                    <div class="hero">
                        <hgroup>
                            <h1>The road to Success is<br>always under construction</h1>
                            <h3>Be Stronger than your excuese</h3>
                        </hgroup>
                    </div>
                </div>
            </div>
        </div>

        
        <a class="left carousel-control" href="#mainCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#mainCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>





        <section class="header">
			

        <div class="text-box">
            
            <p><b>IF YOU WANT TO LEARN THEN VISIT OUR WEBSITE TO LEARN AND MAKING YOUR LIFE HAPPIER THEN VISIT OUR PAGE </b></p>
            <h1>Educare Solution</h1>
            <a href="New project/Index.html" class="hero-btn">Click here to visit Us </a>
        </div>
	
		</section>


        <p></p>

        <style>
                        .header{
                min-height: 100vh;
                width: 100%;
                background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(images/images.jpg);
                background-position: center;
                background-size: cover;
                position: relative;
            }
            nav{
                display: flex;
                padding: 2% 6%;
                justify-content: space-between;
                align-items: center;
            }
            nav img{
                width: 150px;
            }
            .nav-links{
                flex: 1; 				  /* occupy all the space in row */
                text-align: right;
            }
          
            .text-box{
                width: 90%;
                color: #fff;			/* White */
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);	/* To center in the div */
                text-align: center;
            }
            .text-box h1{
                font-size: 62px;
            }
            .text-box p{
                margin: 10px 0 40px;
                font-size: 28px;
                color: #fff;
            }
            .hero-btn{
                display: inline-block;
                text-decoration: none;
                color: #fff;
                border: 1px solid #fff;
                padding: 12px 34px;
                font-size: 13px;
                background: transparent;
                position: relative;
                cursor: pointer;
            }
            .hero-btn:hover{
                border: 1px solid #f44336;
                background: #f44336;
                transition: 1s;
            }

            nav .fa{
                display: none;             /* this is for removing icon from large screen device */
            }

            @media(max-width: 700px){
                .text-box h1{
                font-size: 20px;
            }
            
            }

        </style>




        </header>
                                  
   	 		    </div>
    	    </div>
        </div>
    
    
	<div class="footer">
  		<div class="container">
   			<p class="text-muted">Copyright 2022 | All Rights Reserved.</p>
  		</div>
	</div>



    
    <script src="js/jquery.js"></script>

    
    <script src="js/bootstrap.min.js"></script>
    
    <script src="js/jquery.isotope.js"></script>
    
    <script src="js/jquery.scrollUp.min.js"></script>
    
    

</body>

</html>
