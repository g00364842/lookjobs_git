<!-- Header -->
<?php

require 'connect/header.php';
include 'connect/connect.php';

// Escape user inputs for security

$record = false;
if(isset($_POST['LOCATION'])){
    $record = $_POST['LOCATION'];
 } 
 
$type = false;
if(isset($_POST['JOB_TYPE'])){
    $type = $_POST['JOB_TYPE'];
 }

$cat = false;
if(isset($_POST['CATEGORY'])){
    $cat = $_POST['CATEGORY'];
 }

?>
<!-- Title -->
<div class="container">

    <h1 class="head float-left font-weight-bold text-white align-middle align-baseline shadow p-3 mb-5">Students Tips</h1>

<!-- navbar -->
<?php 
require 'connect/nav.php';
require 'connect/intro.php';
require 'connect/content-left-std.php';
?>

    <div class="col-lg-8 md-12 sm-12">

        <div class="card shadow mb-3 bg-light">
         <h4 class="card-header">Mock Interview</h4> 
          <div class="card-body">
            <p class="card-text">
                A mock interview, also known as a practice interview, is a simulation of an actual job interview.<br>
              A mock interview is an emulation of a job interview used for training purposes. The conversational exercise usually resembles a real interview as closely as possible, for the purpose of providing experience for a candidate.</p>
             
            <hr>

             <div class="embed-responsive embed-responsive-4by3 rounded">

      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/hOWYcC3wWbI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
            
            <br><hr>
             <a href="stips.php" class="btn btn-info float-right"><< Back</a>
             <br>
          </div>
        </div>

       
   
    

    </div>
    
    
</div>

</div>
</div>
</div>
</div>
</div>



<br><br><br>
<br>

<?php require 'connect/footer.php';?>