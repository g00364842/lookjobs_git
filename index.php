<!-- Header -->
<?php require 'connect/header.php';?>
<script>
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>

<div class="container">
    
        <h1 class="head float-left font-weight-bold text-white align-middle align-baseline shadow p-3 mb-5">LookJobs</h1>
   
    <!-- navbar -->
<?php require 'connect/nav.php';?>
<!-- Content -->
    

    <div class="container">
        <h3 class="float-right text-white">Career portal</h3>
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
          <div class="carousel-inner">

            <div class="carousel-item active">
                
              <img class="d-block w-100 rounded-top" src="img/hero/hero-1.jpg" alt="First slide" title="hero">
                <div class="carousel-caption text-left d-flex h-100 align-items-center justify-content-center">
                <div class="min-50">

                  <div class="d-none d-lg-block"><div class="logo responsive"></div></div>
                <h3 class="d-none d-lg-block">Third Level... <span class="d-md-block bold">and now?...</span></h3><br>

                <div class="d-none d-lg-block">
                    <p>LookJobs is a new career portal to students and recent graduates.
                      Here you can find support on your career plan. Filter, interact and engage with recruiters.
                      Know how to build a powerfull CV and how to react during an interview</p>
                    <p><a href="about.php" class="btn btn-info">More >></a></p>
                </div>

                </div>
                </div>
            </div>

            <div class="carousel-item">
              <img class="d-block w-100 rounded-top" src="img/hero/hero-2.jpg" alt="Second slide" title="hero2">
              <div class="carousel-caption text-left d-flex h-100 align-items-center justify-content-center">
                <div class="min-50">
                  <div class="d-none d-lg-block"><div class="logo"></div></div>
                <h3 class="d-none d-lg-block">We take you... <span class="d-md-block bold">higher</span></h3><br>

                <div class="d-none d-lg-block">
                    <p>In LookJobs you can find your work placement as part of your course, part time, remote jobs, summer internships, graduate programmes, postgraduate opportunities, projects, volunteer and abroad. </p>
                    <p><a href="about.php" class="btn btn-info">More >></a></p>
                </div>

                </div>
                </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 rounded-top" src="img/hero/hero-3.jpg" alt="Third slide" title="slide 3">
              <div class="carousel-caption text-left d-flex h-100 align-items-center justify-content-center">
                <div class="min-50">
                  <div class="d-none d-lg-block"><div class="logo"></div></div>
                <h3 class="d-none d-lg-block">Power up... <span class="d-md-block bold">your career</span></h3><br>

                <div class="d-none d-lg-block">
                    <p>In LookJobs students and graduates can find all content around employer brand – text, images, videos and open job positions in different areas. If you're ready for a new challenging job, Search or Browse Jobs on Look and take a look at our Popular Job Locations and Job Titles.</p>
                    <p><a href="about.php" class="btn btn-info">More >></a></p>
                </div>

                </div>
                </div>
            </div>

          </div>
          <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>

          <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>
    </div>
<?php
include 'connect/connect.php';

$record = false;
if(isset($_POST['JOB_TITLE'])){
    $keyword = $_POST['JOB_TITLE'];
 } 

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
    <!-- Search Form Section Begin -->
    <div class="container">
    <div class="search-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="search-form-text">
                        <div class="search-text">
                             <a class="text-white" href="jobs.php"><i class="fa fa-search"></i></a>
                            <a class="text-white" href="jobs.php">Find Your Job</a>
                        </div>
                        <div class="home-text">
                            <i class="fa fa-home"></i>
                            <a class="text-white" href="employers.php">Employers</a>
                        </div>
                    </div>
                   
                    <form method="post" action="index.php" class="filter-form form-group">
                    
                        <div class="first-row">
                          <div class="col form-group">
               
                             <input type="text" class="form-control" name="search" placeholder="Job title">
                        </div>

                        <div class="second-row">
                            <select>
                                <option for="CATEGORY" id="CATEGORY">Category</option>
                                <option selected>Category</option>
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
                                  <option value="Social & Not Profit" <?php if($cat['CATEGORY'] == "Social & Not Profit") { echo "SELECTED"; } ?>>Social & Not Profit</option>
                                  <option value="Telecoms" <?php if($cat['CATEGORY'] == "Telecoms") { echo "SELECTED"; } ?>>Telecoms</option>
                                  <option value="Tourism, Travel & Airlines" <?php if($cat['CATEGORY'] == "Tourism, Travel & Airlines") { echo "SELECTED"; } ?>>Tourism, Travel & Airlines</option>
                                  <option value="Transport, warehousing & Motor" <?php if($cat['CATEGORY'] == "Transport, warehousing & Motor") { echo "SELECTED"; } ?>>Transport, warehousing & Motor</option>
                            </select>
                            <select>
                                <option for="LOCATION" id="LOCATION">Location</option>
                                <option selected>Location</option>
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
                            <select>
                                <option for="JOB_TYPE" id="JOB_TYPE">Job type</option>
                                <option selected>Job type...</option>
                                  <option value="Full-time" <?php if($type['JOB_TYPE'] == "Full-time") { echo "SELECTED"; } ?>>Full-Time</option>
                                  <option value="Part-time" <?php if($type['JOB_TYPE'] == "Part-time") { echo "SELECTED"; } ?>>Part-Time</option>
                                  <option value="Summer Job" <?php if($type['JOB_TYPE'] == "Summer Job") { echo "SELECTED"; } ?>>Summer Job</option>
                                  <option value="Intership" <?php if($type['JOB_TYPE'] == "Intership") { echo "SELECTED"; } ?>>Internship</option>
                                  <option value="Graduate Programme" <?php if($type['JOB_TYPE'] == "Graduate Programme") { echo "SELECTED"; } ?>>Graduate Programme</option>
                                  <option value="Abroad" <?php if($type['JOB_TYPE'] == "Abroad") { echo "SELECTED"; } ?>>Abroad</option>
                                  <option value="Volunteer" <?php if($type['JOB_TYPE'] == "Volunteer") { echo "SELECTED"; } ?>>Volunteer</option>
                                  <option value="Project" <?php if($type['JOB_TYPE'] == "Project") { echo "SELECTED"; } ?>>Project</option>

                            </select>
                                                                           
                            <button type="submit" name="search" class="search-btn btn-info float-right">Search</button>                     
                    
                    <br><br>



                    <?php

                  include 'connect/connect.php';

                  if(isset($_POST['search'])){
                      $searchq = $_POST['search'];
                      //checck is a number
                      $searchq = preg_replace("#[^0-9a-z]#i", " ", $searchq);

                      //2.  Perform Database Query
                      $result = mysqli_query($conn,"SELECT * FROM JOBS WHERE JOB_TYPE LIKE '%$searchq%'  ");

                      echo '<table class="table-responsive p-3 table-bordered">
                      <thead>
                      <tr>
                      <th>REF</th>
                      <th>Job Title</th>
                      <th>Recruiter</th>
                      <th>Location</th>
                      <th>Type</th>
                      <th>Apply Now</th>
                      </tr>
                      </thead>';
                       

                      //3. Use returned data 
                      while($row = mysqli_fetch_array($result))
                        {
                        echo "<tbody>";
                        echo "<tr>";
                        echo "<td>" . $row['REF'] . "</td>";
                        echo "<td>" . $row['JOB_TITLE'] . "</td>";
                        echo "<td>" . $row['RECRUITER'] . "</td>";
                        echo "<td>" . $row['LOCATION'] ."</td>";
                        echo "<td>" . $row['JOB_TYPE'] . "</td>";
                        echo "<td>" . '<a class="btn btn-info btn-sm" href='.$row['APPLY'].' role="button" target="_blank">Apply >></a>' ."</td>";
                        echo "</tr>";
                        echo "</tbody>";
                        }
                      echo "</table>";
                  }
                  ?>


                </div>
               </div>
               </form>

            </div>
        </div>
       </div> 

        
    </div>
    <!-- Search Form Section End -->



    <!-- How It Works Section Begin -->
    <section class="howit-works spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">

                        <span>Find Your Career</span>
                        <h2>How It Works</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-howit-works">
                        <img src="img/howit-works/howit-1.png" alt="search" title="How it works">
                        <h4>Search & Find a job</h4>
                        <p>Search through job openings. <br>Explore careers options.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-howit-works">
                        <img src="img/howit-works/howit-2.png" alt="lupa" title="lupa">
                        <h4>Apply for a job</h4>
                        <p>Find your your opportunity...<br>Apply for a job.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-howit-works">
                        <img src="img/howit-works/howit-3.png" alt="call" title="call">
                        <h4>Talk To an Employer</h4>
                        <p>Filter, interact and engage with recruiters.<br>Your career starts here</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container d-none d-lg-block bg-light shadow p-3 mb-5">
    <div class="section-title">
        <span>- LOOKJOBS -</span>
        <h3>Last Offers</h3>
    </div>
    <div class="mx-auto">
    <?php 

    include 'connect/connect.php';

    //2.  Perform Database Query
    $result = mysqli_query($conn,"SELECT * FROM JOBS WHERE REF <= 5 ORDER BY LAST_UPDATE DESC");


    echo '<table class="mx-auto w-100 p-3 table-bordered">
    <thead>
    <tr>
    <th>REF</th>
    <th>Job Title</th>
    <th>Recruiter</th>
    <th>Location</th>
    <th>Type</th>
    <th>Apply Now</th>
    </tr>
    </thead>';
     

    //3. Use returned data 
    while($row = mysqli_fetch_array($result))
      {
      echo "<tbody>";
      echo "<tr>";
      echo "<td>" . $row['REF'] . "</td>";
      echo "<td>" . $row['JOB_TITLE'] . "</td>";
      echo "<td>" . $row['RECRUITER'] . "</td>";
      echo "<td>" . $row['LOCATION'] ."</td>";
      echo "<td>" . $row['JOB_TYPE'] . "</td>";
      echo "<td>" . '<a class="btn btn-info btn-sm" href='.$row['APPLY'].' role="button" target="_blank">Apply >></a>' ."</td>";
      echo "</tr>";
      echo "</tbody>";
      }
    echo "</table>";
  //4.  Release returned data 
  mysqli_free_result($result);
  //5.  Close database connection
  mysqli_close($conn);
  ?><br></div></div>

    </div><br><br>
    <!-- How It Works Section End -->
    <div class="d-none d-lg-block blog-section latest-blog spad shadow-lg p-3 mb-5s" style="background-image: url('img/bg6.jpg');"><br><br>
    <div class="container d-none d-lg-block border-radius-15" style="background-image: url('img/cong.jpg'); background-size: auto 110%;background-repeat: no-repeat;background-position: center;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span class="text-white">Find your opportunity</span>
                        <h2>Browse</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                  <div class="col-md-4">
                    <div class="card shadow mb-5 bg-light">
                      <div class="card-body">
                        <h5 class="card-title font-weight-bold">Part-time</h5><hr>

                        <p class="card-text">Try and get some experience on a part-time job... Here you can find excellent job opportunities... <br>if you for various reasons, may want to work part-time, click here now...</p>
                        <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#part-time">Apply now >></button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                  <div class="card shadow mb-5 bg-light">
                      <div class="card-body">
                        <h5 class="card-title font-weight-bold">Summer Job</h5><hr>

                        <p class="card-text">Are you looking to make the most of your summer? Gain some valuable experience whilst getting to know new people. Select the city you want to work in and apply to your favourite job...</p>
                        <!--<a href="#" class="btn btn-info float-right">Apply now >></a>-->
                        <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#summer">Apply now >></button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                  <div class="card shadow mb-5 bg-light">
                      <div class="card-body">
                        <h5 class="card-title font-weight-bold">Volunteer</h5><hr>
                        <p class="card-text">Volunteering with charities or community groups will help build your career skills. It is also a great way to find out more about an area of work you are considering as a career. </p>
                        <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#volunteer">Apply now >></button>
                      </div>
                    </div>
                  </div>
              </div>
                          <div class="row">
                  <div class="col-md-4">
                    <div class="card shadow mb-5 bg-light">
                      <div class="card-body">
                        <h5 class="card-title font-weight-bold">Internship</h5><hr>
                        <p class="card-text">A great way to find out more about an area of work you are considering as a career.</p>
                        <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#internship">Apply now >></button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                  <div class="card shadow mb-5 bg-light">
                      <div class="card-body">
                        <h5 class="card-title font-weight-bold">Graduate Programme</h5><hr>
                        <p class="card-text">Grow your confidence and help you realise where your strengths and interests lie..</p>
                        <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#graduate">Apply now >></button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                  <div class="card shadow mb-5 bg-light">
                      <div class="card-body">
                        <h5 class="card-title font-weight-bold">Abroad</h5><hr>

                        <p class="card-text">Are you ready to have the time of your life?... Lookjobs will help you find a job abroad.</p>
                        <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#abroad">Apply now >></button>
                      </div>
                    </div>
                  </div>
              </div>
              <a class="float-right text-info" href="jobs.php">Read more >></a>
            </div><br><br><br><br><br>
        </div>
    </div>

    <!--Modal-->
    <script>
      @media (max-width: @screen-xs-min) {
  .modal-xs { width: @modal-sm; }
}
    </script>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="part-time" aria-labelledby="part-time" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-bold">Part-Time Jobs</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php 

        include 'connect/connect.php';

        //2.  Perform Database Query
        $result = mysqli_query($conn,"SELECT * FROM JOBS WHERE JOB_TYPE = 'Part-Time'");

        echo '<table class="mx-auto table-responsive table-bordered">
        <tr>
        <th>REF</th>
        <th>Job Title</th>
        <th>Recruiter</th>
        <th>Location</th>
        <th>Type</th>
        <th>Category</th>
        <th>Apply</th>
        </tr>';

        //3. Use returned data 
        while($row = mysqli_fetch_array($result))
          {
          echo "<tr>";
          echo "<td>" . $row['REF'] . "</td>";
          echo "<td>" . $row['JOB_TITLE'] . "</td>";
          echo "<td>" . $row['RECRUITER'] . "</td>";
          echo "<td>" . $row['LOCATION'] ."</td>";
          echo "<td>" . $row['JOB_TYPE'] . "</td>";
          echo "<td>" . $row['CATEGORY'] . "</td>";
          echo "<td>" . '<a class="btn btn-info btn-sm" href='.$row['APPLY'].' role="button" target="_blank">Apply</a>' ."</td>";
          echo "</tr>";
          }
        echo "</table>";
      //4.  Release returned data 
      mysqli_free_result($result);
      //5.  Close database connection
      mysqli_close($conn);
      ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!--Summer Jobs-->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="summer" aria-labelledby="summer" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-bold">Summer Jobs</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php 

        include 'connect/connect.php';

        //2.  Perform Database Query
        $result = mysqli_query($conn,"SELECT * FROM JOBS WHERE JOB_TYPE = 'Summer Job'");

        echo '<table class="mx-auto table-responsive table-bordered">
        <tr>
        <th>REF</th>
        <th>Job Title</th>
        <th>Recruiter</th>
        <th>Location</th>
        <th>Type</th>
        <th>Category</th>
        <th>Apply</th>
        </tr>';

        //3. Use returned data 
        while($row = mysqli_fetch_array($result))
          {
          echo "<tr>";
          echo "<td>" . $row['REF'] . "</td>";
          echo "<td>" . $row['JOB_TITLE'] . "</td>";
          echo "<td>" . $row['RECRUITER'] . "</td>";
          echo "<td>" . $row['LOCATION'] ."</td>";
          echo "<td>" . $row['JOB_TYPE'] . "</td>";
          echo "<td>" . $row['CATEGORY'] . "</td>";
          echo "<td>" . '<a class="btn btn-info btn-sm" href='.$row['APPLY'].' role="button" target="_blank">Apply</a>' ."</td>";
          echo "</tr>";
          }
        echo "</table>";
      //4.  Release returned data 
      mysqli_free_result($result);
      //5.  Close database connection
      mysqli_close($conn);
      ?>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!--Volunteer-->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="volunteer" aria-labelledby="volunteer" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-bold">Volunteer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php 

        include 'connect/connect.php';

        //2.  Perform Database Query
        $result = mysqli_query($conn,"SELECT * FROM JOBS WHERE JOB_TYPE = 'Volunteer'");

        echo '<table class="mx-auto table-responsive table-bordered">
        <tr>
        <th>REF</th>
        <th>Job Title</th>
        <th>Recruiter</th>
        <th>Location</th>
        <th>Type</th>
        <th>Category</th>
        <th>Apply</th>
        </tr>';

        //3. Use returned data 
        while($row = mysqli_fetch_array($result))
          {
          echo "<tr>";
          echo "<td>" . $row['REF'] . "</td>";
          echo "<td>" . $row['JOB_TITLE'] . "</td>";
          echo "<td>" . $row['RECRUITER'] . "</td>";
          echo "<td>" . $row['LOCATION'] ."</td>";
          echo "<td>" . $row['JOB_TYPE'] . "</td>";
          echo "<td>" . $row['CATEGORY'] . "</td>";
          echo "<td>" . '<a class="btn btn-info btn-sm" href='.$row['APPLY'].' role="button" target="_blank">Apply</a>' ."</td>";
          echo "</tr>";
          }
        echo "</table>";
      //4.  Release returned data 
      mysqli_free_result($result);
      //5.  Close database connection
      mysqli_close($conn);
      ?>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!--Internship-->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="internship" aria-labelledby="internship" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-bold">Internship</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php 

        include 'connect/connect.php';

        //2.  Perform Database Query
        $result = mysqli_query($conn,"SELECT * FROM JOBS WHERE JOB_TYPE = 'Internship'");

        echo '<table class="mx-auto table-responsive table-bordered">
        <tr>
        <th>REF</th>
        <th>Job Title</th>
        <th>Recruiter</th>
        <th>Location</th>
        <th>Type</th>
        <th>Category</th>
        <th>Apply</th>
        </tr>';

        //3. Use returned data 
        while($row = mysqli_fetch_array($result))
          {
          echo "<tr>";
          echo "<td>" . $row['REF'] . "</td>";
          echo "<td>" . $row['JOB_TITLE'] . "</td>";
          echo "<td>" . $row['RECRUITER'] . "</td>";
          echo "<td>" . $row['LOCATION'] ."</td>";
          echo "<td>" . $row['JOB_TYPE'] . "</td>";
          echo "<td>" . $row['CATEGORY'] . "</td>";
          echo "<td>" . '<a class="btn btn-info btn-sm" href='.$row['APPLY'].' role="button" target="_blank">Apply</a>' ."</td>";
          echo "</tr>";
          }
        echo "</table>";
      //4.  Release returned data 
      mysqli_free_result($result);
      //5.  Close database connection
      mysqli_close($conn);
      ?>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!--Graduate-->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="graduate" aria-labelledby="graduate" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-bold">Internship</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php 

        include 'connect/connect.php';

        //2.  Perform Database Query
        $result = mysqli_query($conn,"SELECT * FROM JOBS WHERE JOB_TYPE = 'Graduate Programme'");

        echo '<table class="mx-auto table-responsive table-bordered">
        <tr>
        <th>REF</th>
        <th>Job Title</th>
        <th>Recruiter</th>
        <th>Location</th>
        <th>Type</th>
        <th>Category</th>
        <th>Apply</th>
        </tr>';

        //3. Use returned data 
        while($row = mysqli_fetch_array($result))
          {
          echo "<tr>";
          echo "<td>" . $row['REF'] . "</td>";
          echo "<td>" . $row['JOB_TITLE'] . "</td>";
          echo "<td>" . $row['RECRUITER'] . "</td>";
          echo "<td>" . $row['LOCATION'] ."</td>";
          echo "<td>" . $row['JOB_TYPE'] . "</td>";
          echo "<td>" . $row['CATEGORY'] . "</td>";
          echo "<td>" . '<a class="btn btn-info btn-sm" href='.$row['APPLY'].' role="button" target="_blank">Apply</a>' ."</td>";
          echo "</tr>";
          }
        echo "</table>";
      //4.  Release returned data 
      mysqli_free_result($result);
      //5.  Close database connection
      mysqli_close($conn);
      ?>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!--Abroad-->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="abroad" aria-labelledby="abroad" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-bold">Abroad Jobs</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php 

        include 'connect/connect.php';

        //2.  Perform Database Query
        $result = mysqli_query($conn,"SELECT * FROM JOBS WHERE JOB_TYPE = 'Abroad'");

        echo '<table class="mx-auto table-responsive table-bordered">
        <tr>
        <th>REF</th>
        <th>Job Title</th>
        <th>Recruiter</th>
        <th>Location</th>
        <th>Type</th>
        <th>Category</th>
        <th>Apply</th>
        </tr>';

        //3. Use returned data 
        while($row = mysqli_fetch_array($result))
          {
          echo "<tr>";
          echo "<td>" . $row['REF'] . "</td>";
          echo "<td>" . $row['JOB_TITLE'] . "</td>";
          echo "<td>" . $row['RECRUITER'] . "</td>";
          echo "<td>" . $row['LOCATION'] ."</td>";
          echo "<td>" . $row['JOB_TYPE'] . "</td>";
          echo "<td>" . $row['CATEGORY'] . "</td>";
          echo "<td>" . '<a class="btn btn-info btn-sm" href='.$row['APPLY'].' role="button" target="_blank">Apply</a>' ."</td>";
          echo "</tr>";
          }
        echo "</table>";
      //4.  Release returned data 
      mysqli_free_result($result);
      //5.  Close database connection
      mysqli_close($conn);
      ?>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div><br><br>
</div>
<!--images carousel-->
<div class="blog-section latest-blog spad shadow-lg p-3 mb-5s" style="background-image: url('img/hero/bg1.jpg');"><br>

<div class="container">

              <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span class="text-dark">Recommendations</span>
                        <h2>Student tips</h2>
                    </div>
                </div>
        
                
            </div>
            <div class="row">

             
                  <div class="col-md-3 lg-3">
                    <div class="card shadow p-2 mb-3">
                      <img class="card-img-top" src="img/card/card-cv.png" alt="cv" title="cv">
                      <div class="card-body">
                        <h5 class="card-title font-weight-bold">CV Template</h5>
                        <p class="card-text">Every successful job hunt starts with a great CV<br>We have prepared a CV templates to support your hunt</p><hr>
                        <a href="stips.php" class="btn btn-info float-right">Read more >></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 lg-3">
                  <div class="card shadow p-2 mb-3">
                      <img class="card-img-top" src="img/card/card-int.png" alt="interview" title="cv">
                      <div class="card-body">
                        <h5 class="card-title font-weight-bold">Mock Interview</h5>
                        <p class="card-text">A mock interview, also known as a practice interview,<br> is a simulation of an actual job interview.</p><hr>
                        <a href="mock.php" class="btn btn-info float-right">Read more >></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 lg-3">
                  <div class="card shadow p-2 mb-3">
                      <img class="card-img-top" src="img/card/card-rec.png" alt="recommendations" title="recommendations">
                      <div class="card-body">
                        <h5 class="card-title font-weight-bold">CV ckecklist</h5>
                        <p class="card-text">What you need to know about writing a good CV the information to include and the right CV format</p><hr>
                        <a href="check.php" class="btn btn-info float-right">Read more >></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 lg-3">
                  <div class="card shadow p-2 mb-3">
                      <img class="card-img-top" src="img/card/card-ev.png" alt="Card image cap" title="card image">
                      <div class="card-body">
                        <h5 class="card-title font-weight-bold">Events</h5>
                                            
                        <p class="card-text">The Careers Expo is a great opportunity for job seekers to meet companies that are hiring in person. </p><hr>
                        <a href="events.php" class="btn btn-info float-right">Read more >></a>
                      </div>
                    </div>
                  </div>
              </div>
              <a class="text-white float-right" href="stips.php">Read more >></a><br><br>
            </div>
          </div>


        <!-- Testimonial Section Begin --
<div class="blog-section latest-blog spad shadow-lg p-3 mb-5s" style="background-image: url('img/hero/gmit_.jpg');"><br>-->
    <div class="blog-section latest-blog spad shadow-lg p-3 mb-5s" style="background-image: url('img/hero/gmit_.jpg');"><br><br>
    <!--<div class="container border-radius-15" style="background-image: url('img/cong.jpg'); background-size: auto 110%;background-repeat: no-repeat;background-position: center;"-->
        <div class="container" >
            
            <div class="row">
                <div class="col-lg-12">
                    <!--<div class="logo mx-auto d-block"></div><br>-->

                    <div class="section-title">
                        <span class="text-dark">What students say about us</span>
                        <h2 class="text-dark">Testimonials</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="testimonial-slider owl-carousel">
                        <div class="ts-item">
                            <p class="text-dark">Good visual layout, easy to use and not confusing like other job posting sites. Also, the searches I find bring up more relevant job posting than competitors which is very</p>
                            <div class="ti-author">
                                <h5>Susan Smith</h5>
                                <span class="text-dark">GMIT Digital Media Student</span>
                            </div>
                        </div>
                        <div class="ts-item">
                            <p class="text-dark">Very helpful and guided me through the process with suggestions that were very helpful.</p>
                            <div class="ti-author">
                                <h5>John Loyd</h5>
                                <span class="text-dark">GMIT Computer Science Student</span>
                            </div>
                        </div>
                         <div class="ts-item">
                            <p class="text-dark">They are very professional, have kept in touch throughout the process and offer a fantastic platform to potential candidates.</p>
                            <div class="ti-author">
                                <h5>Claudia Reynolds</h5>
                                <span class="text-dark">GMIT Software Development Student</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
            <!--faces-->
            <div class="icon-cards__content">
            <div class="icon-cards__item text-center"><h2>🙂😊😀</h2></div>
          </div>
        </div>
    </div>

    <div class="blog-section latest-blog spad shadow-lg p-3 mb-5s" style="background-image: url('img/hero/gmit.jpg');"><br>

  <div class="container">

     <div class="section-title">
                        <span class="text-light">Get in touch</span>
                        <h2 class="text-light">Contact us</h2>
                    </div>

    <p class="room-location">
                        <p class="font-weight-bold text-light">GMIT GALWAY MAYO INSTITUTE OF TECHNOLOGY</p>
                        <i class="fa fa-envelope text-light"><p class="text-light">info@gmit.ie &nbsp|&nbsp</p>
                        <i class="fa fa-phone text-light"><p class="text-light">+353-9161214321 &nbsp&nbsp|&nbsp</p>
                        <i class="icon_pin text-light"><p class="text-light">GMIT - Dublin Road, Galway</p></i></i></i>

                         <form method="post" action="sendemail.php" id="contactform" class="form-group main-contact-form " data-wow-delay="0.2s">
                            <div class="row">
                                <div class="col form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Your Name " id="name" required data-validation-required-message="name"><br>
                                </div>
                                <div class="col form-group">
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone number"><br>
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="col form-group">
                                    <input type="email" class="form-control" id="e-mail" placeholder="name@example.com" name="e-mail" required data-validation-required-message="e-mail"><br>
                                </div>
                            </div>
                            <div class="row"> 
                                <div class="col form-group">
                                    <textarea name="query" class="form-control" id="query" placeholder="Your message" required data-validation-required-message="Please enter a message"></textarea><br>
                                </div>
                            </div>
                            

                            <div class="form-group">
                                <button type="submit" class="btn btn-info mb-2 float-right">Submit</button>
                            </div>
                        </form>
                        <br>
                        <br>

  </div>
</div>

    <!-- Testimonial Section End -->
    <div class="embed-responsive embed-responsive-4by3 mapouter embed-responsive-item gmap_canvas">
      <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=gmit&t=k&z=9&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
      </iframe>
    </div>

     <!-- Common Add to Homescreen Template -->
    <div class="ath-container banner-bottom-center">
        <div class="ath-banner">
            <div class="ath-banner-cell">
                <img src="imgs/pwa-logo-50x50.png" alt="PWA" class="ath-prompt-logo">
            </div>
            <div class="ath-banner-title">
                <p>Install this PWA?</p>
            </div>
            <div class="ath-banner-cell">
                <button class="btn btn-cancel btn-link">Not Now</button>
            </div>
            <div class="ath-banner-cell">
                <button class="btn btn-install btn-success">Install</button>
            </div>

        </div>
    </div>
    <div class="d-flex justify-content-center my-1 py-2 mx-auto">
        <p>Generated by <a href="https://pwastarter.love2dev.com/">Love2Dev's PWA Starter</a></p>
    </div>
    <script src="js/addtohomescreen.min.js" type="application/javascript"></script>

        <script src="js/addtohomescreen.js"></script>
    <script>
        addToHomescreen( {
            appID: "ie&#x2F;lookjobs.http:&#x2F;smcreative",
            appName: "LookJobs",
            lifespan: 15,
  startDelay:0,
            autostart: true,
            skipFirstVisit: true,
            minSessions: 1,
            displayPace: 0,
            customPrompt: {
                title: "Install L?",
                src: "meta/favicon-96x96.png",
                cancelMsg: "Cancel",
                installMsg: "Install"
            }
        } );
    </script>
    <script>
        if ( "serviceWorker" in navigator ) {

            navigator.serviceWorker.register( "/sw.js" )
                .then( function ( registration ) { // Registration was successful

                    console.log( "ServiceWorker registration successful with scope: ", registration.scope );

                } ).catch( function ( err ) { // registration failed :(

                    console.log( "ServiceWorker registration failed: ", err );

                } );

        }
    </script>
  </body>


    
    <!--footer -->
<?php require 'connect/footer.php';?>
<!-- Content -->