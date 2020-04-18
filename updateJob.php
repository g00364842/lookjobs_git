<!-- Header -->
<?php

require 'connect/header.php';

?>
<!-- Title -->
<div class="container">

    <h1 class="head float-left font-weight-bold text-white align-middle align-baseline shadow p-3 mb-5">Employers</h1>

<!-- navbar -->
<?php require 'connect/nav.php';?>
<!-- Content -->

<div class="container">
<div class="h3 float-right text-white">Career portal</div>
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">       
            <img class="d-block w-100 rounded-top" src="img/hero/hero-1.jpg" alt="First slide">
        <div class="carousel-caption text-left d-flex h-100 align-items-center justify-content-center">

        <div class="min-50">    
         
        </div>

        </div>
        </div> 
    </div>
</div><br><br>
</div>

</div>

<div class="section-title">
    <span>- Look Jobs -</span>                  
</div>

<div class="container">

<div class="h2 text-info">Update job</span></div><br>
<div class="row float-right">
    <div class="col float-right">
        <a class="btn btn-secondary" href="index.php" role="button">Dashboard</a>
        <a class="btn btn-info" href="update.php" role="button">Back</a>
    </div>
</div><br><br><br>

<?php

// Check if the user has submitted data into the form
   if (isset ($_POST ['submit'])){
    $DJOB = $_POST['DJOB'];
    $REF = $_POST['REF'];
    $LAST_UPDATE = $_POST['LAST_UPDATE'];
    $JOB_TITLE = $_POST['JOB_TITLE'];
    $EMAIL = $_POST['EMAIL'];
    $RECRUITER = $_POST['RECRUITER'];
    $LOCATION = $_POST['LOCATION'];
    $JOB_TYPE = $_POST['JOB_TYPE'];
    $CATEGORY = $_POST['CATEGORY'];
    $DESCRIPTION = $_POST['DESCRIPTION'];
    $REQUIREMENTS = $_POST['REQUIREMENTS'];
    $APPLY = $_POST['APPLY'];
  //Check if both fields have been entered - Connect to the server and the olympics database
  include 'connect/connect.php';
  
  // Check if that department exists
  $DJOB= mysqli_query ($conn,"SELECT * FROM JOBS WHERE REF = '$REF' ") or die ("Query could not be completed");
  
  // Update the location field in the DEPT table
  if (mysqli_num_rows($DJOB) !=0){
      mysqli_query ($conn,"UPDATE JOBS SET JOB_TITLE = '$JOB_TITLE', EMAIL = '$EMAIL',RECRUITER = '$RECRUITER', LOCATION = '$LOCATION', JOB_TYPE = '$JOB_TYPE', CATEGORY = '$CATEGORY', DESCRIPTION = '$DESCRIPTION', REQUIREMENTS = '$REQUIREMENTS'  WHERE REF = '$REF'") or die ("Update could not be applied");

      }else echo ('<h3 class="alert alert-danger" role="alert">"REF does not exist.  Please re-enter:"</h2>');
          }else echo ('<h3 class="alert alert-danger" role="alert">"You must enter values for both fields.  Please re-enter""</h2>');        
?>

<table border ="3">
  <tr>  
     <th>Email</th>
    <th>Recruiter</th>
    <th>Location</th>
    <th>Type</th>
    <th>Category</th>
    <th>Description</th>
    <th>Requirements</th>
    <th>Apply</th>
  <tr>
  <tr>
  
  <td><?php echo $EMAIL;?></td>
  <td><?php echo $RECRUITER;?></td>
  <td><?php echo $LOCATION;?></td>
  <td><?php echo $JOB_TYPE;?></td>
  <td><?php echo $CATEGORY;?></td>
  <td><?php echo $DESCRIPTION;?></td>
  <td><?php echo $REQUIREMENTS;?></td>
  <td><?php echo '<a class="btn btn-info" href='.$APPLY.' role="button" target="_blank">Apply</a>'?></td>; 
  </tr>
  </table>
  


</div>
</div><br><br>
<br>

<?php require 'connect/footer.php';?>