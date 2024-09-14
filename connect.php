<?php
  $con=mysqli_connect('localhost','root','','jobs');
  if(isset($_POST['submit']))
  {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phone=$_POST['phone_no'];

    $query="INSERT INTO users(Name,email,password,phone_no) VALUES ('$name','$email','$password','$phone')";
    $run=mysqli_query($con,$query);
  }


  session_start();
  if(isset($_POST['Login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="SELECT * FROM users WHERE `email`='$email' && `password`='$password'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

    if(mysqli_num_rows($result)==1){
        header("location:index.php");
  }
  else{
    $error='emailid or password is incorrect';
  }
  }
  
if(isset($_POST['job'])){
  $cname=$_POST['cname'];
  $pos=$_POST['pos'];
  $Jdesc=$_POST['Jdesc'];
  $skills=$_POST['skills'];
  $CTC=$_POST['CTC'];

  $job= "INSERT INTO `jobs`(`cname`, `position`, `Jdesc`, `skills`, `CTC`) VALUES ('$cname','$pos','$Jdesc','$skills','$CTC')";
  mysqli_query($con,$job);
}
 
if(isset($_POST['submitt'])){
   $name=$_POST['name'];
   $qual=$_POST['qual'];
   $apply=$_POST['apply'];
   $year=$_POST['year'];

   $sql="INSERT INTO `candidates`( `name`, `apply`, `qual`, `year`) VALUES ('$name','$apply','$qual','$year')";
     mysqli_query($con,$sql);
}

?>