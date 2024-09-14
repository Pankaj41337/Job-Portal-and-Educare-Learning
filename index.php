<?php include 'header.php'?>

<div class="content">
<p>
  <button class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Post Job
</button>
  
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form action="connect.php" method="POST">
  <div class="mb-3">
    <label for="Company Name" class="form-label">Company Name</label>
    <input type="text" class="form-control" id="" name="cname">
  </div>
  <div class="mb-3">
    <label for="exampleInputPosition" class="form-label">Position</label>
    <input type="text" class="form-control" id="exampleInputPosition" name="pos">
  </div>
  <div class="mb-3">
    <label for="JobDesc" class="form-label">Job Description</label>
    <textarea class="form-control" id="JobDesc" cols="30" rows="10" name="Jdesc"></textarea>
  </div>
  <div class="mb-3">
    <label for="skills" class="form-label">skills Required</label>
    <input type="text" class="form-control" id="skills" name="skills">
  </div>
  <div class="mb-3">
    <label for="CTC" class="form-label">CTC</label>
    <input type="text" class="form-control" id="CTC" name="CTC">
  </div>
  <button type="submit" class="btn btn-primary" name="job">Submit</button>
</form>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
      <?php
      $con=mysqli_connect('localhost','root','','jobs');
      $sql="Select cname,position,CTC from jobs";
      $result=mysqli_query($con,$sql);
      $i=0;
      if($result->num_rows>0){

        //output data of each row
        while($rows = $result->fetch_assoc()) {
          echo"
        <tbody>
          <tr>
               <td>".++$i."</td>
               <td>".$rows['cname']."</td>
               <td>".$rows['position']."</td>
               <td>".$rows['CTC']."</td>
          </tr>";
      }}
      else{
        echo"";
      }
    ?>
  </tbody>
</table>
</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>