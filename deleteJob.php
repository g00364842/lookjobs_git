<!-- Header -->
<?php

require 'connect/header.php';

?>
<!-- Title -->
<div class="container">

    <h1 class="head float-left font-weight-bold text-white align-middle align-baseline shadow p-3 mb-5">Employers</h1>

<!-- navbar -->
<?php 
require 'connect/nav.php';
require 'connect/intro.php';
?>
<!-- Content -->

<!-- Content -->
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
                    <form action="front.php" method="post" target="_blank" class="filter-form">
                        <div class="first-row">
                          <div class="col form-group">
                
<div class="row float-right">
    <div class="col float-right">
        <a class="btn btn-secondary" href="index.php" role="button">Dashboard</a>
        <a class="btn btn-info" href="employers.php" role="button">Back</a>
    </div>
</div><br><br><br>


<?php include 'connect/connect.php';

        //2.  Perform Database Query
        $result = mysqli_query($conn,"SELECT * FROM JOBS");

        if(isset($_GET['delete'])){
        $REF= $_GET['delete'];
        
        mysqli_query($conn, "DELETE FROM JOBS WHERE REF = '$REF'");    
        
        }

        echo '
        <table class="table-responsive table-bordered">
        <thead>
        <tr>
            <th>REF</th>
            <th>Last Update</th>
            <th>Job title</th>
            <th>Email</th>
            <th>Recruiter</th>
            <th>Location</th>
            <th>Type</th>
            <th>Category</th>
            <th>Description</th>
            <th>Requirements</th>
        </tr>
        </thead>';

        //3. Use returned data 
        while($row = mysqli_fetch_array($result))
          {
          echo "<tr>";
          echo "<td>" . $row['REF'] . "</td>";
          echo "<td>" . $row['LAST_UPDATE'] . "</td>";
          echo "<td>" . $row['JOB_TITLE'] . "</td>";
          echo "<td>" . $row['EMAIL'] . "</td>";
          echo "<td>" . $row['RECRUITER'] ."</td>";
          echo "<td>" . $row['LOCATION'] . "</td>";
          echo "<td>" . $row['JOB_TYPE'] . "</td>";
          echo "<td>" . $row['CATEGORY'] ."</td>";
          echo "<td>" . $row['DESCRIPTION'] . "</td>";
          echo "<td>" . $row['REQUIREMENTS'] ."</td>";
          echo "</tr>";
          }
        echo "</table>";
    //4.  Release returned data 
    mysqli_free_result($result);
    //5.  Close database connection
    mysqli_close($conn);
  ?>


              </div><br><br>

              <div class="container bg-info"><br>

              <img class="rounded mx-auto d-block" src="img/about_us.jpg" alt="logo"><br>
              </div>

          </div>                
                            
                    </div>
                    <div class="second-row">
                                                        
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>




</div>
</div><br><br>
<br>

<?php require 'connect/footer.php';?>