<?php

require_once("includes/header.php");
$con = mysqli_connect('sql101.epizy.com','epiz_26809877','bFmtgbcLVR','epiz_26809877_milestone3');
//$con = mysqli_connect('localhost','root','','rms');
if(!$con){
  die("Not connected.".mysqli_error());
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
<img src="img/bird.png"style="width:100px;height:96px;">
</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="vr.php">Volunteer_Registration <span class="sr-only">(current)</span></a>
      </li>
      
        <li class="nav-item">
        <a class="nav-link" href="donation.php">Donation</a>
      </li>
      <li class="nav-item">
        <a href="pl.php" class="nav-link">Place</a></li>
      <!--
      <li class="nav-item">
        <a class="nav-link" href="#learn">Volunteer</a>
      </li>
    -->
      <li class="nav-item">
        <a class="nav-link" href="rel.php">Releif</a>
      </li>
      
      
      
    </ul>
      
    <form class="form-inline my-2 my-lg-0">
      
      <button class="btn btn-outline-success my-4 my-sm-2" type="submit"><a href="index.php">Logout</a></button>
   
    </form>
  </div>

</nav>
<?php
$query="SELECT * FROM donate";
$connect=mysqli_query($con,$query);
$count=mysqli_num_rows($connect);
if($count>0){

?>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">TransactionId</th>
      <th scope="col">Amount</th>
       
       


    </tr>
  </thead>
<?php
  while ($row=mysqli_fetch_assoc($connect)) {
    $id=$row['id'];
    $tran=$row['tran'];
    $amount=$row['amount'];
    
?>
<tbody>
    <tr>
      <td><?php echo $id?></th>
      <td><?php echo $tran?></td>
      <td><?php echo $amount?></td>
      
    </tr>
    
      
  </tbody>
<?php

  }
  ?>
</table>



  <?php
}
?>