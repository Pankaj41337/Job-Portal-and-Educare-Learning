<?php include 'header.php'?>

<div class="content">
<table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Candidate Name</th>
      <th scope="col">Position</th>
      <th scope="col">Year Passout</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $con=mysqli_connect('localhost','root','','jobs');
      $sql="select name,apply,year from candidates";
      $result=mysqli_query($con,$sql);
      $i=0;
      if($result->num_rows>0){
        while($rows=$result->fetch_assoc()){
          echo'
    <tr>
      <th scope="row">'.++$i.'</th>
      <td>'.$rows['name'].'</td>
      <td>'.$rows['apply'].'</td>
      <td>'.$rows['year'].'</td>
    </tr>';
  }
}
else{
  echo"";
}
    ?>
  </tbody>
</table>

</div>