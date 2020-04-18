<!-- Header -->
<?php require 'connect/header.php';?>
<!-- Title -->
<div class="container">

    <h1 class="head float-left font-weight-bold text-white align-middle align-baseline shadow p-3 mb-5">Employers</h1>

<!-- navbar -->
<?php
require 'connect/nav.php';
require 'connect/intro.php';
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
                    <form action="insertJobs.php" method="post" class="filter-form">
                        <div class="first-row">
                          <div class="col form-group">

                            

    <form method="post" action="insertJobs.php" id="contactform" class="form-group main-contact-form " data-wow-delay="0.2s">
        <div class="row">

          <div class="row float-right">
    <div class="col float-right">
        <a class="btn btn-secondary" href="index.php" role="button">Dashboard</a>
        <a class="btn btn-info" href="employers.php" role="button">Back</a><br><br>
    </div>
</div><br><br>

<?php include 'connect/connect.php';

        // Escape user inputs for security
        $JOB_TITLE = $_POST['JOB_TITLE'];
        $RECRUITER = $_POST['RECRUITER'];
        $LOCATION = $_POST['LOCATION'];
        $JOB_TYPE = $_POST['JOB_TYPE'];
        $CATEGORY = $_POST['CATEGORY'];
        $DESCRIPTION = $_POST['DESCRIPTION'];
        $REQUIREMENTS = $_POST['REQUIREMENTS'];
        $APPLY = $_POST['APPLY'];
        // attempt insert query execution

        mysqli_query($conn, "INSERT INTO JOBS (JOB_TITLE,EMAIL,RECRUITER,LOCATION,JOB_TYPE,CATEGORY,DESCRIPTION,REQUIREMENTS,APPLY) VALUES ('$JOB_TITLE','EMAIL','$RECRUITER','$LOCATION','$JOB_TYPE','$CATEGORY','$DESCRIPTION','$REQUIREMENTS','$APPLY')");

        if(mysqli_affected_rows($conn)>0){

            echo '<br><br>&nbsp&nbsp&nbsp<div class="h4 text-secondary float-left">Records added successfully.</div><br>';

        } else{

            echo '<div class="h4 text-danger float-left">ERROR: Could not able to execute $sql. </h4>' . mysqli_error($conn);

        }

        include 'connect/connect.php';

        //2.  Perform Database Query
        $result = mysqli_query($conn,"SELECT * FROM JOBS");

        echo '<table class="table-responsive table-bordered">
        <tr>
        <th>REF</th>
        <th>Last Update</th>
        <th>Job Title</th>
        <th>Recruiter</th>
        <th>Location</th>
        <th>Type</th>
        <th>Category</th>
        <th>Description</th>
        <th>Requirements</th>
        <th>Apply</th>
        </tr>';

        //3. Use returned data 
        while($row = mysqli_fetch_array($result))
          {
          echo "<tr>";
          echo "<td>" . $row['REF'] . "</td>";
          echo "<td>" . $row['LAST_UPDATE'] . "</td>";
          echo "<td>" . $row['JOB_TITLE'] . "</td>";
          echo "<td>" . $row['EMAIL'] . "</td>";
          echo "<td>" . $row['RECRUITER'] . "</td>";
          echo "<td>" . $row['LOCATION'] ."</td>";
          echo "<td>" . $row['JOB_TYPE'] . "</td>";
          echo "<td>" . $row['CATEGORY'] . "</td>";
          echo "<td>" . $row['DESCRIPTION'] ."</td>";
          echo "<td>" . $row['REQUIREMENTS'] ."</td>";
          echo "<td>" . '<a class="btn btn-info" href='.$row['APPLY'].' role="button" target="_blank">Apply</a>' ."</td>";
     
          echo "</tr>";
          }
        echo "</table>";
//4.  Release returned data 
mysqli_free_result($result);
//5.  Close database connection
mysqli_close($conn);
?>

</div>
<br><br>

</div>
            

    </form>

    
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
<?php require 'connect/footer.php';?>