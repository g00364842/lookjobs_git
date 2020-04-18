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
            
          <p class="card-text"><?php

                  include 'connect/connect.php';

                  if(isset($_POST['search'])){
                      $searchq = $_POST['search'];
                      //checck is a number
                      $searchq = preg_replace("#[^0-9a-z]#i", " ", $searchq);

                      //2.  Perform Database Query
                      $result = mysqli_query($conn,"SELECT * FROM JOBS WHERE JOB_TYPE LIKE '%$searchq%'  ");

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
                        echo "<td>" . '<a class="btn btn-info btn-sm" href='.$row['APPLY'].' role="button" target="_blank">Apply >></a>' ."</td>";
                        echo "</tr>";
                        echo "</tbody>";
                        }
                      echo "</table>";
                  }
                  ?></p>
              <hr> 
            <br><br><br><br>
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