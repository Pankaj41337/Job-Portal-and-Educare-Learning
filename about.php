<?php include 'header.php'?>

<!DOCTYPE html>
<html>
<head>
	<title>About Us Section</title>
    <style>
    
    .section{
	width: 100%;
	min-height: 110vh;
	background-color: rgb(235, 165, 165);
    }
.container{
	width: 80%;
	display: block;
	margin:auto;
	padding-top: 100px;
}
.content-section{
	float: left;
	width: 55%;
}
.image-section{
	float: right;
	width: 40%;
}
.image-section img{
	width: 450px;
	height: 450px;
    border-radius: 350px;
}
.content-section .title{
	text-transform: uppercase;
	font-size: 25px;
}
.content-section .content h3{
	margin-top: 20px;
	color:black;
	font-size: 25px;
}
.content-section .content p{
	margin-top: 10px;
	font-family: sans-serif;
	font-size: 18px;
	line-height: 1.5;
}
.content-section .content .button{
	margin-top: 30px;
}
.content-section .content .button a{
	background-color: #3d3d3d;
	padding:12px 40px;
	text-decoration: none;
	color:#fff;
	font-size: 25px;
	letter-spacing: 1.5px;
}
.content-section .content .button a:hover{
	background-color: #a52a2a;
	color:#fff;
}
.content-section .social{
	margin: 40px 40px;
}
.content-section .social i{
	color:#a52a2a;
	font-size: 30px;
	padding:0px 10px;
}
.content-section .social i:hover{
	color:#3d3d3d;
}

@media screen and (max-width: 768px){
	.container{
	width: 80%;
	display: block;
	margin:auto;
	padding-top:50px;
}
.content-section{
	float:none;
	width:100%;
	display: block;
	margin:auto;
}
.image-section{
	float:none;
	width:100%;
	
}
.image-section img{
	width: 100%;
	height: auto;
	display: block;
	margin:auto;
}
.content-section .title{
	
	text-align: center;
	font-size: 19px;
}
.content-section .content .button{
	text-align: center;
}
.content-section .content .button a{
	padding:9px 30px;
}
.content-section .social{
	text-align: center;
}

}
.footer-col-4{
    text-align: center;
}
.footer-col-4 h3{
    font-size: 22px;
}
.copyright{
	text-align: center;
}

.title h1{
	text-align: center;
	font-size: 40px;
    font-weight: bold;
    text-decoration-line: underline;
    text-decoration-style: double;
    margin-top: 0px;`
    margin-left: 10em;
    margin-right: 10em;
}
.footer{
    background: #000;
    color: #8a8a8a;
    font-size: 14px;
    padding: 30px 0px;
}

    </style>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>	
<body>
	<div class="section">
		<div class="container">
			<div class="content-section">
				<div class="title">
					<h1>&nbsp;&nbsp;&nbsp;&nbsp; ABOUT US</h1>
				</div>
				<div class="content">
					<h3>Job Portal Website</h3><br>
					<p>
					Our Website is most popular web site Between Youth who wants to progress in job career,<br>
        			those youngster who wants to Recruits in any Sector, they prefer to surfing ourjobportal.com <br>
        			for job search and latest information’s and more. <br><br>

        			This is only one Web site for more Job, Result and other Information.<br><br>

        			Our Web Site Provide Latest & Authenticable Information’s to users which also Publish in <br>
        			Government News Paper’s And Web Sites<br> And web site is user friendly.

					</p>
					<div class="button">
						<a href="https://careertrend.com/facts-6883857-definition-job-portals.html">Read More</a>
					</div>
				</div>
				<div class="social">
					<a href=""><i class="fab fa-facebook-f"></i></a>
					<a href=""><i class="fab fa-twitter"></i></a>
					<a href=""><i class="fab fa-instagram"></i></a>
				</div>
			</div>
			<div class="image-section">
				<img src="images/job.jpg">
			</div>
		</div>
	</div>

    <!-----------footer------>
    <div class="footer">
        <div class="container">
            <div class="row">
                
               
             <div class="footer-col-4">
                    <h3>&nbsp&nbsp&nbsp&nbsp&nbsp Follow us</h3>
                 <ul>
                    <li>Facebook</li>
					<li>Instagram</li>
                    <li>Twitter</li>
                    <li>Youtube</li>
                 </ul>
             </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2022 - Easy Tutorials</p>
        </div>

    </div>

	
</body>
</html>