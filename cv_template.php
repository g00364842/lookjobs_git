<link rel="shortcut icon" href="../favicon.ico"> 
<link href='http://fonts.googleapis.com/css?family=Alegreya+SC:700,400italic' rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="cv/css/demo.css" />
<link rel="stylesheet" type="text/css" href="cv/css/style.css" />
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
<div class="container">
    <h1 class="head float-left font-weight-bold text-white align-middle align-baseline shadow p-3 mb-5">Students Tips</h1>
</div>
<!-- navbar -->
<?php 
require 'connect/nav.php';
require 'connect/intro.php';
require 'connect/content-left-std.php';
?>

    <div class="col-lg-8 md-12 sm-12">

        <div class="card shadow mb-3 bg-light">
          <h4 class="card-header">CV Template</h4>
          <div class="card-body">
            <p class="text-left">Click to view annotation</p>
            <p class="card-text"><div class="ao-item">
          <div class="ao-details">
            <h2 class="text-left">CV </h2><h4>Front view</h4>
            <p class="text-justify">Every successful job hunt starts with a great CV.</p>
            <p class="text-justify">It’s a good idea to think of your CV as a sales brochure, its role is to “sell”  your skills and experience to employers.</p>
            <p class="text-justify">Many job seekers are unsure where to start when it comes to writing a CV so we thought we’d help.</p>
            <p class="text-justify">We have prepared a CV templates. Take a look.</p>
            

          </div>
          <div class="ao-preview">
            <input type="checkbox" id="ao-toggle" class="ao-toggle" name="ao-toggle" />
            <img src="cv/images/Anariel_BlentonTemplate.jpg" alt="image01" />
            <div class="ao-annotations">
              <span>Name and contacts</span>
              <span>Profile Summary</span>
              <span>Education</span>
              <span>Projects</span>
              <span>Key Skills</span>
            </div>
          </div>
        </div>
        
        <div class="ao-item ao-item-left">
          <div class="ao-details">
            <h2 class="text-justify">CV </h2><h4>Back view</h4>
            <p class="text-justify">Employers use CVs to find out whether applicants have the right experience, skills and qualities to fit the job. Initially, recruiters will scan CVs very quickly so the information needs to be presented in a way that allows them to see this at a glance. A CV is not an autobiography, so be selective and focus on what is relevant.</p>
           
          </div>
          <div class="ao-preview">
            <input type="checkbox" id="ao-toggle" class="ao-toggle" name="ao-toggle" />
            <img src="cv/images/Anariel_UnixTemplate.jpg" alt="image02" />
            <div class="ao-annotations">
              <span>Brief Description</span>
              <span>Work Experience</span>
              <span>Start & End Dates and Job</span>
              <span>Role Duties</span>
              <span>Interests and Achievements</span>
            </div>
          </div>
        </div>
        
      </section>

      <hr><br>

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