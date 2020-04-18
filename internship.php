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

    <h1 class="head float-left font-weight-bold text-white align-middle align-baseline shadow p-3 mb-5">Employers</h1>

<!-- navbar -->
<?php 
require 'connect/nav.php';
require 'connect/intro.php';
require 'connect/content-left.php';
?>
                       
    </div>

    <div class="col-lg-8 sm-12">

        <div class="card shadow mb-3 bg-light">
          <h4 class="card-header">All Internships</h4>
          <div class="card-body">
            <p class="card-text">
             <?php 

                include 'connect/connect.php';

                //2.  Perform Database Query
                $result = mysqli_query($conn,"SELECT * FROM JOBS WHERE JOB_TYPE = 'Internship'");


                echo '<table class="table-responsive table-bordered">
                <thead>
                <tr>
                <th>REF</th>
                <th>Job Title</th>
                <th>Recruiter</th>
                <th>Location</th>
                <th>Type</th>
                <th>Apply</th>
                </tr>
                <thead>';
                 

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
                  echo "<td>" . '<a class="btn btn-info btn-sm" href='.$row['APPLY'].' role="button" target="_blank">Apply</a>' ."</td>";
                  echo "</tr>";
                  echo "</tbody>";
                  }
                echo "</table>";
              //4.  Release returned data 
              mysqli_free_result($result);
              //5.  Close database connection
              mysqli_close($conn);
              ?></p>

              
              <br><hr>
          

          <a href="jobs.php" class="btn btn-info float-right"><< Back</a><br>
            
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