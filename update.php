<!-- Header -->
<?php

require 'connect/header.php';
include 'connect/connect.php';

// Escape user inputs for security
//$record = $_POST['LOCATION'];

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

<div class="h2 text-info">Update jobs</div><br>

<div class="row float-right">
    <div class="col float-right">
        <a class="btn btn-secondary" href="index.php" role="button">Dashboard</a>
        <a class="btn btn-info" href="employers.php" role="button">Back</a>
    </div>
</div><br><br><br>

<?php
include 'connect/connect.php';
?>
<div class="row">
<div class="col form-group">
<label class="font-weight-bold" for="DJOB">Job / Employer:</label><br>
    <div class="dropdown">
    <select class="w-100" name= "DJOB">
    <?php
    $DJOB = mysqli_query($conn, "SELECT * FROM JOBS");
      while($record = mysqli_fetch_array($DJOB)){
        echo '<option value="' . $record['EMAIL']. '.' . $record['LOCATION']. '">' .$record['REF'].' - '. $record['JOB_TITLE'] .' - '. $record['RECRUITER'].'</option>';                            
      }
    ?>
    </select>
    </div>
</div>
<div class="col form-group"></div>
</div>

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
       
    //Check if both fields have been entered
    if ($EMAIL && $REQUIREMENTS){

    //Connect to the server and the empdept2 database
    include 'connect/connect.php';
    // Check if that department exists
    $DJOB= mysqli_query ($conn,"SELECT * FROM JOBS WHERE REF = '$REF' ") or die ("Query could not be completed");
    
    // Update the location field in the DEPT table
    if (mysqli_num_rows($DJOB) !=0){
      mysqli_query ($conn,"UPDATE JOBS SET JOB_TITLE = '$JOB_TITLE', EMAIL = '$EMAIL',RECRUITER = '$RECRUITER', LOCATION = '$LOCATION', JOB_TYPE = '$JOB_TYPE', CATEGORY = '$CATEGORY', DESCRIPTION = '$DESCRIPTION', REQUIREMENTS = '$REQUIREMENTS'  WHERE REF = '$REF'") or die ("Update could not be applied");

      echo "Successfully Updated";

        }else echo "That Ref does not exist.  Please re-enter:";
            }else echo "You must enter values for both fields.  Please re-enter";
        }

        ?>

        <div class="d-none d-lg-block">
    <form method="post" action="updateJob.php" id="contactform" class="form-group main-contact-form " data-wow-delay="0.2s">
        <div class="row">
            <div class="col form-group">
                <label class="font-weight-bold">Email</label>
                <input type="email" class="form-control" name="EMAIL" id="EMAIL" placeholder="Email">
            </div>
            
        <div class="col form-group">
        <label class="font-weight-bold" for="LOCATION">Location:</label><br>
          <select class="w-100" name="LOCATION" id="LOCATION">
            <option selected>Choose...</option>
            <option value="Antrim" <?php if($record['LOCATION'] == "Antrim") { echo "SELECTED"; } ?>>Antrim</option>
            <option value="Armagh" <?php if($record['LOCATION'] == "Armagh") { echo "SELECTED"; } ?>>Armagh</option>
            <option value="Carlow" <?php if($record['LOCATION'] == "Carlow") { echo "SELECTED"; } ?>>Carlow</option>
            <option value="Cavan" <?php if($record['LOCATION'] == "Cavan") { echo "SELECTED"; } ?>>Cavan</option>
            <option value="Clare" <?php if($record['LOCATION'] == "Clare") { echo "SELECTED"; } ?>>Clare</option>
            <option value="Cork" <?php if($record['LOCATION'] == "Cork") { echo "SELECTED"; } ?>>Cork</option>
            <option value="Derry" <?php if($record['LOCATION'] == "Derry") { echo "SELECTED"; } ?>>Derry</option>
            <option value="Donegal" <?php if($record['LOCATION'] == "Donegal") { echo "SELECTED"; } ?>>Donegal</option>
            <option value="Down" <?php if($record['LOCATION'] == "Down") { echo "SELECTED"; } ?>>Down</option>
            <option value="Dublin" <?php if($record['LOCATION'] == "Dublin") { echo "SELECTED"; } ?>>Dublin</option>
            <option value="Fermanagh" <?php if($record['LOCATION'] == "Fermanagh") { echo "SELECTED"; } ?>>Fermanagh</option>
            <option value="Galway" <?php if($record['LOCATION'] == "Galway") { echo "SELECTED"; } ?>>Galway</option>
            <option value="Kerry" <?php if($record['LOCATION'] == "Kerry") { echo "SELECTED"; } ?>>Kerry</option>
            <option value="Kildare" <?php if($record['LOCATION'] == "Kildare") { echo "SELECTED"; } ?>>Kildare</option>
            <option value="Kilkenny" <?php if($record['LOCATION'] == "Kilkenny") { echo "SELECTED"; } ?>>Kilkenny</option>
            <option value="Laois" <?php if($record['LOCATION'] == "Laois") { echo "SELECTED"; } ?>>Laois</option>
            <option value="Leitrim" <?php if($record['LOCATION'] == "Leitrim") { echo "SELECTED"; } ?>>Leitrim</option>
            <option value="Limerick" <?php if($record['LOCATION'] == "Limerick") { echo "SELECTED"; } ?>>Limerick</option>
            <option value="Longford" <?php if($record['LOCATION'] == "Longford") { echo "SELECTED"; } ?>>Longford</option>
            <option value="Louth" <?php if($record['LOCATION'] == "Louth") { echo "SELECTED"; } ?>>Louth</option>
            <option value="Mayo" <?php if($record['LOCATION'] == "Mayo") { echo "SELECTED"; } ?>>Mayo</option>
            <option value="Meath" <?php if($record['LOCATION'] == "Meath") { echo "SELECTED"; } ?>>Meath</option>
            <option value="Monaghan" <?php if($record['LOCATION'] == "Monaghan") { echo "SELECTED"; } ?>>Monaghan</option>
            <option value="Offaly" <?php if($record['LOCATION'] == "Offaly") { echo "SELECTED"; } ?>>Offaly</option>
            <option value="Roscommon" <?php if($record['LOCATION'] == "Roscommon") { echo "SELECTED"; } ?>>Roscommon</option>
            <option value="Sligo" <?php if($record['LOCATION'] == "Sligo") { echo "SELECTED"; } ?>>Sligo</option>
            <option value="Tipperary" <?php if($record['LOCATION'] == "Tipperary") { echo "SELECTED"; } ?>>Tipperary</option>
            <option value="Tyrone" <?php if($record['LOCATION'] == "Tyrone") { echo "SELECTED"; } ?>>Tyrone</option>
            <option value="Waterford" <?php if($record['LOCATION'] == "Waterford") { echo "SELECTED"; } ?>>Waterford</option>
            <option value="Westmeath" <?php if($record['LOCATION'] == "'Westmeath") { echo "SELECTED"; } ?>>'Westmeath</option>
            <option value="Wexford" <?php if($record['LOCATION'] == "Wexford") { echo "SELECTED"; } ?>>Wexford</option>
            <option value="Wicklow" <?php if($record['LOCATION'] == "Wicklow") { echo "SELECTED"; } ?>>Wicklow</option>
          </select>
        </div>
    </div>
        <div class="row"> 
        <div class="col form-group">
          <label class="font-weight-bold" for="JOB_TYPE">Type:</label><br>
          <select class="w-100" name="JOB_TYPE" id="JOB_TYPE">
            <option selected>Choose...</option>
            <option value="Full-time" <?php if($type['JOB_TYPE'] == "Full-time") { echo "SELECTED"; } ?>>Full-Time</option>
            <option value="Part-time" <?php if($type['JOB_TYPE'] == "Part-time") { echo "SELECTED"; } ?>>Part-Time</option>
            <option value="Summer Job" <?php if($type['JOB_TYPE'] == "Summer Job") { echo "SELECTED"; } ?>>Summer Job</option>
            <option value="Intership" <?php if($type['JOB_TYPE'] == "Intership") { echo "SELECTED"; } ?>>Internship</option>
            <option value="Graduate Programme" <?php if($type['JOB_TYPE'] == "Graduate Programme") { echo "SELECTED"; } ?>>Graduate Programme</option>
            <option value="Abroad" <?php if($type['JOB_TYPE'] == "Abroad") { echo "SELECTED"; } ?>>Abroad</option>
            <option value="Volunteer" <?php if($type['JOB_TYPE'] == "Volunteer") { echo "SELECTED"; } ?>>Volunteer</option>
            <option value="Project" <?php if($type['JOB_TYPE'] == "Project") { echo "SELECTED"; } ?>>Project</option>
          </select>
        </div>

        <div class="col form-group">
          <label class="font-weight-bold" for="CATEGORY">Category:</label><br>
          <select class="w-100" name="CATEGORY" id="CATEGORY" multiple>
            <option selected>Choose...</option>
            <option value="Academic" <?php if($cat['CATEGORY'] == "Academic") { echo "SELECTED"; } ?>>Academic</option>
            <option value="Accounting & Finance" <?php if($cat['CATEGORY'] == "Accounting & Finance") { echo "SELECTED"; } ?>>Accounting & Finance</option>
            <option value="Banking Finantial Services & Insurance" <?php if($cat['CATEGORY'] == "Banking Finantial Services & Insurance") { echo "SELECTED"; } ?>>Banking Finantial Services & Insurance</option>
            <option value="Beauty" <?php if($cat['CATEGORY'] == "Beauty") { echo "SELECTED"; } ?>>Beauty</option>
            <option value="Hair Care" <?php if($cat['CATEGORY'] == "Beauty") { echo "SELECTED"; } ?>>Hair Care</option>
            <option value="Leisure & Sports" <?php if($cat['CATEGORY'] == "Leisure & Sports") { echo "SELECTED"; } ?>>Leisure & Sports</option>
            <option value="Construction, Architecture & Property" <?php if($cat['CATEGORY'] == "Construction, Architecture & Property") { echo "SELECTED"; } ?>>Construction, Architecture & Property</option>
            <option value="Architecture & Property" <?php if($cat['CATEGORY'] == "Architecture & Property") { echo "SELECTED"; } ?>>Architecture & Property</option>
            <option value="Customer Service, Call Centres & Languages" <?php if($cat['CATEGORY'] == "Customer Service, Call Centres & Languages") { echo "SELECTED"; } ?>>Customer Service, Call Centres & Languages</option>
            <option value="Education, Childcare & training" <?php if($cat['CATEGORY'] == "Education, Childcare & training") { echo "SELECTED"; } ?>>Education, Childcare & training</option>
            <option value="Engineering & Utility" <?php if($cat['CATEGORY'] == "Engineering & Utility") { echo "SELECTED"; } ?>>Engineering & Utility</option>
            <option value="Environmental, Health and Safety" <?php if($cat['CATEGORY'] == "Environmental, Health and Safety") { echo "SELECTED"; } ?>>Environmental, Health and Safety</option>
            <option value="Executive" <?php if($cat['CATEGORY'] == "Executive") { echo "SELECTED"; } ?>>Executive</option>
            <option value="Graduate" <?php if($cat['CATEGORY'] == "Graduate") { echo "SELECTED"; } ?>>Graduate</option>
            <option value="Hotel & Catering" <?php if($cat['CATEGORY'] == "Hotel & Catering") { echo "SELECTED"; } ?>>Hotel & Catering</option>
            <option value="HR & Recruiting" <?php if($cat['CATEGORY'] == "HR & Recruiting") { echo "SELECTED"; } ?>>HR & Recruiting</option>
            <option value="Legal" <?php if($cat['CATEGORY'] == "Legal") { echo "SELECTED"; } ?>>Legal</option>
            <option value="Marketing" <?php if($cat['CATEGORY'] == "Marketing") { echo "SELECTED"; } ?>>Marketing</option>
            <option value="Medical Professional & Healthcare" <?php if($cat['CATEGORY'] == "Medical Professional & Healthcare") { echo "SELECTED"; } ?>>Medical Professional & Healthcare</option>
            <option value="Production Manufacturing & Materials" <?php if($cat['CATEGORY'] == "Production Manufacturing & Materials Care") { echo "SELECTED"; } ?>>Production Manufacturing & Materials</option>
            <option value="Public Sector" <?php if($cat['CATEGORY'] == "Public Sector") { echo "SELECTED"; } ?>>Public Sector</option>
            <option value="Publishing, Media & Creative Arts" <?php if($cat['CATEGORY'] == "Publishing, Media & Creative Arts") { echo "SELECTED"; } ?>>Publishing, Media & Creative Arts</option>
            <option value="Retailing, Wholesaling & Purchaising" <?php if($cat['CATEGORY'] == "Retailing, Wholesaling & Purchaising") { echo "SELECTED"; } ?>>Retailing, Wholesaling & Purchaising</option>
            <option value="Sales" <?php if($cat['CATEGORY'] == "Sales") { echo "SELECTED"; } ?>>Sales</option>
            <option value="Science, Pharmaceutical & Food" <?php if($cat['CATEGORY'] == "Science, Pharmaceutical & Food") { echo "SELECTED"; } ?>>Science, Pharmaceutical & Food</option>
            <option value="Secretarial & Admin" <?php if($cat['CATEGORY'] == "Secretarial & Admin") { echo "SELECTED"; } ?>>Secretarial & Admin</option>
            <option value="Security, Trades & General Services" <?php if($cat['CATEGORY'] == "Security, Trades & General Services") { echo "SELECTED"; } ?>>Security, Trades & General Services</option>
            <option value="Social & Not Profit" <?php if($cat['CATEGORY'] == "Social & Not Profit") { echo "SELECTED"; } ?>>Social & Not Profit</optionz>
            <option value="Telecoms" <?php if($cat['CATEGORY'] == "Telecoms") { echo "SELECTED"; } ?>>Telecoms</option>
            <option value="Tourism, Travel & Airlines" <?php if($cat['CATEGORY'] == "Tourism, Travel & Airlines") { echo "SELECTED"; } ?>>Tourism, Travel & Airlines</option>
            <option value="Transport, warehousing & Motor" <?php if($cat['CATEGORY'] == "Transport, warehousing & Motor") { echo "SELECTED"; } ?>>Transport, warehousing & Motor</option>
          </select>

    </div>
</div>
        <div class="row"> 
            <div class="col form-group">
                <label class="font-weight-bold">Description</label>
                <textarea type="text" class="form-control" name="DESCRIPTION" id="DESCRIPTION" placeholder="Description"></textarea>
            </div>
        </div>
        <div class="row"> 
            <div class="col form-group">
                <label class="font-weight-bold">Requirements</label>
                <textarea type="text" class="form-control" name="REQUIREMENTS" id="REQUIREMENTS" placeholder="Requirements"></textarea>
            </div>
        </div>

        <div class="row"> 
            <div class="col form-group">
                <label class="font-weight-bold">Link to Apply</label>
                <input type="text" class="form-control" name="APPLY" id="APPLY" placeholder="Apply"></input>
            </div>
        </div><br>

        <div class="form-group">
            <button type="submit" class="btn btn-info mb-2 float-right">Submit</button>
        </div>

    </form><br><br>
</div> 


    </div><br><br><br>

<div class="container bg-info"><br>

    <img class="rounded mx-auto d-block" src="img/cong.jpg" alt="logo"><br>
    </div><br><br>
<br><br><br><br><br><br><br><br><br><br><br>

<?php require 'connect/footer.php';?>