<?php include 'header.php'?>

<html>
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<head>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Lato:300,400,700);
body {
	background:	#6495ed;
	color: #fff;
	font-weight: 400;
	font-size: 1em;
	font-family: 'Lato', Arial, sans-serif;
	margin:0;
	padding:0;
	padding-bottom:60px;
}
.ccheader {           
	margin: 0 auto;
	padding: 2em;
	text-align: center;
	padding-top:60px;
}

.ccheader h1 {			
	margin: 0;
	color:black; 
	font-weight: 800;
	font-size: 4em;
	line-height: 1.3;
}

/* Form CSS*/
.ccform {
   margin: 0 auto;
    width: 800px;
}
.ccfield-prepend{
	margin-bottom:10px;
	width:100%;
}

.ccform-addon{
	color:	#0000cd; 
	float:left;
	padding:36px;
	width:8%;
	background:white;
	text-align:center;	
}

.ccformfield {
	color:#000000; 
	background:#FFFFFF;
	border:none;
	padding:15.5px;
	width:91.9%;
	display:block;
	font-family: 'Lato',Arial,sans-serif;
	font-size:14px;
}

.ccbtn{
	display:block;
	border:none;
	background:		#000080;
	color:#FFFFFF;
	padding:12px 25px;
	cursor:pointer;
	text-decoration:none;
	font-weight:bold;
}
.ccbtn:hover{
	background:#d8850e;

}

    </style>
</head>
<header class="ccheader">
    <h1>Contact Us</h1>	
</header>
<body>
<div class="wrapper">
    <form method="post" action="" class="ccform">
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-user fa-2x"></i></span>
        <input class="ccformfield" type="text" placeholder="Full Name" required>
    </div>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-envelope fa-2x"></i></span>
        <input class="ccformfield" type="text" placeholder="Email" required>
    </div>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-mobile-phone fa-2x"></i></span>
        <input class="ccformfield" type="text" placeholder="Phone">
    </div>
     <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-info fa-2x"></i></span>
        <input class="ccformfield" type="text" placeholder="Subject" required>
    </div>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-comment fa-2x"></i></span>
        <textarea class="ccformfield" name="comments" rows="8" placeholder="Message" required></textarea>
    </div>
    <div class="ccfield-prepend">
        <input class="ccbtn" type="submit" value="Submit">
    </div>
    </form>
</div>
</body>
</html>