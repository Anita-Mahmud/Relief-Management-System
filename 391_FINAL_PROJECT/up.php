<?php

$con = mysqli_connect('localhost','root','','rms');

if (isset($_REQUEST['edit_id'])) {
	# code...
}



?>
<form action="up.php" method="POST">
  <div class="form-group">
    <label for="formGroupInput">First Name</label>
    <input type="text" class="form-control" id="formGroupInput" >
  </div>

   <div class="form-group">
    <label for="formGroupInput">Last Name</label>
    <input type="text" class="form-control" id="formGroupInput" >

  </div>
   <div class="form-group">
    <label for="formGroupInput">Email</label>
    <input type="email" class="form-control" id="formGroupInput" >
  </div>
  <input type="submit" name="submit" value="update">
</form>