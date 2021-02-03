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
<h1><center>Dhaka</center></h1>
<?php
$query="SELECT * FROM dhaka";
$connect=mysqli_query($con,$query);
$count=mysqli_num_rows($connect);
if($count>0){

?>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
       <th scope="col">Phone</th>
      <th scope="col">Email</th>
       <th scope="col">Occupation</th>
       <th scope="col">Institution</th>
       
       <th scope="col">Edit</th>
       


    </tr>
  </thead>
<?php
  while ($row=mysqli_fetch_assoc($connect)) {
    $id=$row['id'];
    $fname=$row['fname'];
    $lname=$row['lname'];
    $phn=$row['phn'];
    $email=$row['email'];
    $occupation=$row['occupation'];
    $institution=$row['institution'];
    
?>
<tbody>
    <tr>
      <td><?php echo $id?></th>
      <td><?php echo $fname?></td>
      <td><?php echo $lname?></td>
      <td><?php echo $phn?></td>
      <td><?php echo $email?></td>
      <td><?php echo $occupation?></td>
      <td><?php echo $institution?></td>
     
      
      <td><a href="dlt.php?id=<?php echo $id?>">Delete</a></td>

    </tr>
    
      
  </tbody>
<?php

  }
  ?>
</table>



  <?php
}
?>
<h1><center>Chittagong</center></h1>
<?php
$query="SELECT * FROM ctg";
$connect=mysqli_query($con,$query);
$count=mysqli_num_rows($connect);
if($count>0){

?>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
       <th scope="col">Phone</th>
      <th scope="col">Email</th>
       <th scope="col">Occupation</th>
       <th scope="col">Institution</th>
       
       <th scope="col">Edit</th>
       


    </tr>
  </thead>
<?php
  while ($row=mysqli_fetch_assoc($connect)) {
    $id=$row['id'];
    $fname=$row['fname'];
    $lname=$row['lname'];
    $phn=$row['phn'];
    $email=$row['email'];
    $occupation=$row['occupation'];
    $institution=$row['institution'];
    
?>
<tbody>
    <tr>
      <td><?php echo $id?></th>
      <td><?php echo $fname?></td>
      <td><?php echo $lname?></td>
      <td><?php echo $phn?></td>
      <td><?php echo $email?></td>
      <td><?php echo $occupation?></td>
      <td><?php echo $institution?></td>
     
      
      <td><a href="dlt1.php?id=<?php echo $id?>">Delete</a></td>

    </tr>
    
      
  </tbody>
<?php

  }
  ?>
</table>



  <?php
}
?>
<h1><center>Khulna</center></h1>
<?php
$query="SELECT * FROM khulna";
$connect=mysqli_query($con,$query);
$count=mysqli_num_rows($connect);
if($count>0){

?>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
       <th scope="col">Phone</th>
      <th scope="col">Email</th>
       <th scope="col">Occupation</th>
       <th scope="col">Institution</th>
       
       <th scope="col">Edit</th>
       


    </tr>
  </thead>
<?php
  while ($row=mysqli_fetch_assoc($connect)) {
    $id=$row['id'];
    $fname=$row['fname'];
    $lname=$row['lname'];
    $phn=$row['phn'];
    $email=$row['email'];
    $occupation=$row['occupation'];
    $institution=$row['institution'];
    
?>
<tbody>
    <tr>
      <td><?php echo $id?></th>
      <td><?php echo $fname?></td>
      <td><?php echo $lname?></td>
      <td><?php echo $phn?></td>
      <td><?php echo $email?></td>
      <td><?php echo $occupation?></td>
      <td><?php echo $institution?></td>
     
      
      <td><a href="dlt2.php?id=<?php echo $id?>">Delete</a></td>

    </tr>
    
      
  </tbody>
<?php

  }
  ?>
</table>



  <?php
}
?>
<h1><center>Cumilla</center></h1>
<?php
$query="SELECT * FROM cumilla";
$connect=mysqli_query($con,$query);
$count=mysqli_num_rows($connect);
if($count>0){

?>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
       <th scope="col">Phone</th>
      <th scope="col">Email</th>
       <th scope="col">Occupation</th>
       <th scope="col">Institution</th>
       
       <th scope="col">Edit</th>
       


    </tr>
  </thead>
<?php
  while ($row=mysqli_fetch_assoc($connect)) {
    $id=$row['id'];
    $fname=$row['fname'];
    $lname=$row['lname'];
    $phn=$row['phn'];
    $email=$row['email'];
    $occupation=$row['occupation'];
    $institution=$row['institution'];
    
?>
<tbody>
    <tr>
      <td><?php echo $id?></th>
      <td><?php echo $fname?></td>
      <td><?php echo $lname?></td>
      <td><?php echo $phn?></td>
      <td><?php echo $email?></td>
      <td><?php echo $occupation?></td>
      <td><?php echo $institution?></td>
     
      
      <td><a href="dlt3.php?id=<?php echo $id?>">Delete</a></td>

    </tr>
    
      
  </tbody>
<?php

  }
  ?>
</table>



  <?php
}
?>
<h1><center>Barishal</center></h1>
<?php
$query="SELECT * FROM barishal";
$connect=mysqli_query($con,$query);
$count=mysqli_num_rows($connect);
if($count>0){

?>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
       <th scope="col">Phone</th>
      <th scope="col">Email</th>
       <th scope="col">Occupation</th>
       <th scope="col">Institution</th>
       
       <th scope="col">Edit</th>
       


    </tr>
  </thead>
<?php
  while ($row=mysqli_fetch_assoc($connect)) {
    $id=$row['id'];
    $fname=$row['fname'];
    $lname=$row['lname'];
    $phn=$row['phn'];
    $email=$row['email'];
    $occupation=$row['occupation'];
    $institution=$row['institution'];
    
?>
<tbody>
    <tr>
      <td><?php echo $id?></th>
      <td><?php echo $fname?></td>
      <td><?php echo $lname?></td>
      <td><?php echo $phn?></td>
      <td><?php echo $email?></td>
      <td><?php echo $occupation?></td>
      <td><?php echo $institution?></td>
     
      
      <td><a href="dlt4.php?id=<?php echo $id?>">Delete</a></td>

    </tr>
    
      
  </tbody>
<?php

  }
  ?>
</table>



  <?php
}
?>
<h1><center>Dinajpur</center></h1>
<?php
$query="SELECT * FROM dinajpur";
$connect=mysqli_query($con,$query);
$count=mysqli_num_rows($connect);
if($count>0){

?>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
       <th scope="col">Phone</th>
      <th scope="col">Email</th>
       <th scope="col">Occupation</th>
       <th scope="col">Institution</th>
       
       <th scope="col">Edit</th>
       


    </tr>
  </thead>
<?php
  while ($row=mysqli_fetch_assoc($connect)) {
    $id=$row['id'];
    $fname=$row['fname'];
    $lname=$row['lname'];
    $phn=$row['phn'];
    $email=$row['email'];
    $occupation=$row['occupation'];
    $institution=$row['institution'];
    
?>
<tbody>
    <tr>
      <td><?php echo $id?></th>
      <td><?php echo $fname?></td>
      <td><?php echo $lname?></td>
      <td><?php echo $phn?></td>
      <td><?php echo $email?></td>
      <td><?php echo $occupation?></td>
      <td><?php echo $institution?></td>
     
      
      <td><a href="dlt5.php?id=<?php echo $id?>">Delete</a></td>

    </tr>
    
      
  </tbody>
<?php

  }
  ?>
</table>



  <?php
}
?>