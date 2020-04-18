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
          <h4 class="card-header">CV Checklist</h4>
          <div class="card-body">
            
          <p class="card-text">There are different ways of presenting the information on your CV, but it should always include certain key information.
          Personal details. A CV should contain a factual summary of personal details. Only use contact details where correspondence will reach you promptly.</p>

          <h5 class="card-titl font-weight-bold">A career aim</h5>
          <p>Can be useful to include when you wish to highlight your personal suitability for a targeted job/sector.</p>


          <h5 class="card-title font-weight-bold">Educational qualifications</h5>
          <p class="card-text">Are usually presented in reverse chronological order.</p>

          <h5 class="card-title font-weight-bold">Work experience</h5>
          <p class="card-text">When presenting work experience use positive words that demonstrate what you gained in the workplace.</p>

          <h5 class="card-title font-weight-bold">Additional information</h5>
          <p class="card-text">Use a CV to reveal the breadth and depth of your skills, interests, experience and achievements but do not let it exceed two pages.</p>

          <h5 class="card-title font-weight-bold">Referees</h5>
          <p class="card-text">Include names of referees and contact details (consult referees before nominating).</p>
              <hr> 
            <br>

            <a href="stips.php" class="btn btn-info float-right"><< Back</a>

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