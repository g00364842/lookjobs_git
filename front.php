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
<!-- Content -->

<div class="container">

<div class="h2 text-info">Insert jobs</span></div>

<div class="row float-right">
    <div class="col float-right">
        <a class="btn btn-secondary" href="index.php" role="button">Dashboard</a>
        <a class="btn btn-info" href="index.php" role="button">Back</a>
    </div>
</div><br><br><br>

<?php 
        // Escape user inputs for security
        //$JOB_TITLE = $_POST['JOB_TITLE'];
        
        
        // attempt insert query execution


        $JOB_TITLE = ['JOB_TITLE'];
        $keyword = ['keyword'];

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


        include 'connect/connect.php';

        if(mysqli_connect_errno()){
        die("DB connection failed: " .
          mysqli_connect_error() .
            " (" . mysqli_connect_errno() . ")"
            );
      }


      if (isset($_POST['search'])) {
      // Filter
      //$keyword = trim ($keyword);
      echo $keyword;
      // Select statement
      $search = mysql_query("SELECT * FROM JOBS WHERE JOB_TITLE LIKE '%keyword%'");
      // Display
      $result = @mysql_query($search);
      if (!$result){
      echo "problem";
      exit();
      }


      while($result = mysql_fetch_array( $search )) 
       { 
       echo $result['JOB_TITLE']; 
       echo " ";
       echo "<br>"; 
       echo "<br>"; 
       }
       $anymatches=mysql_num_rows($search); 
       if ($anymatches == 0) 
       { 
       echo "Nothing was found that matched your query.<br><br>"; 
       }
      }
        

        
    
?>

</div>
<br><br>

</div>
</div>
<?php require 'connect/footer.php';?>