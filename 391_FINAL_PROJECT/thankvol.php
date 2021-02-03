<?php
require_once("includes/header.php");


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
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
        <li class="nav-item">
        <a class="nav-link" href="index.php#learn">Service</a>
      </li>
      <li class="nav-item">
        <a href="about.php" class="nav-link">About</a></li>
      <!--
      <li class="nav-item">
        <a class="nav-link" href="#learn">Volunteer</a>
      </li>
    -->
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      
      
      
    </ul>
      
    <form class="form-inline my-2 my-lg-0">
      
      <button class="btn btn-outline-success my-4 my-sm-2" type="submit"><a href="index.php">Logout</a></button>
   
    </form>
  </div>

</nav>

<div class=t1>

  <h1><p class="pt">Thank You for your <b>Support</b>.</p></h1>
  <h2><p style="text-align: center;color: grey;"> “Volunteers don’t get paid, not because they’re worthless, but because they’re priceless.” – Sherry Anderson</p></h2>
</div>




<!--footer-->
  <div class="footer">

    <div>
        <h2>Page's Location</h2>
        <p id="path"></p>
        <script type="text/javascript">
            document.getElementById("path").innerHTML =
                "Page path is: " + window.location.pathname;
        </script>

        <p id="loc"></p>
        <script type="text/javascript">
            document.getElementById("loc").innerHTML =
                "The full URL of this page is:" + window.location.href;
        </script>
    </div>
    
    <div>
        <h2>Last modified</h2>

        <p id="demo"></p>
        <script type="text/javascript">
            var x = document.lastModified;
            document.getElementById("demo").innerHTML = x;
        </script>

    </div>
    
    <center>&copy;Anita Mahmud Jhara</center>
</div>

</body>
</html>