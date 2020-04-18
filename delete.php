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

        $result=mysqli_query($conn, "SELECT * FROM JOBS");

        ?> 

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
                <th>Delete</th>
            </tr>
        </thead>
        <?php

        $i=1;

        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $REF = $row['REF'];
            $LAST_UPDATE = $row['LAST_UPDATE'];
            $JOB_TITLE = $row['JOB_TITLE'];
            $EMAIL = $row['EMAIL'];
            $RECRUITER = $row['RECRUITER'];
            $LOCATION = $row['LOCATION'];
            $JOB_TYPE = $row['JOB_TYPE'];
            $CATEGORY = $row['CATEGORY'];
            $DESCRIPTION = $row['DESCRIPTION'];
            $REQUIREMENTS = $row['REQUIREMENTS'];

        ?>

        <tr>
            
            <td><?php echo $REF;?></td>
            <td><?php echo $LAST_UPDATE;?></td>
            <td><?php echo $JOB_TITLE;?></td>
            <td><?php echo $EMAIL;?></td>
            <td><?php echo $RECRUITER;?></td>
            <td><?php echo $LOCATION;?></td>
            <td><?php echo $JOB_TYPE;?></td>
            <td><?php echo $CATEGORY;?></td>
            <td><?php echo $DESCRIPTION;?></td>
            <td><?php echo $REQUIREMENTS;?></td>
            <td>
                <a href ="deleteJob.php?delete=<?php echo $REF;?>"onclick="return confirm('Are you sure?');">Delete</a>
            </td>

        </tr>

            <?php

            $i++;
            }
            if(isset($_GET['delete'])){
                $delete_id= $_GET['delete'];
                
                mysqli_query($conn, "DELETE FROM JOBS WHERE REF = '$REF'");
                
                header("location: deleteJob.php");
            }
            ?>
</table>
</div>
<div class="container bg-info"><br>

                        <img class="rounded mx-auto d-block" src="img/limerick.jpg" alt="logo"><br>
                        </div>

</div>
</div><br><br><br><br><br><br><br>

                        </div><br><br>

                        

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

<br><br><br>

<?php require 'connect/footer.php';?>