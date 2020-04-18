<!-- Search Form Section Begin -->
   <?php

//mysql_connect("localhost","root","") or die ("could not connect");
//mysql_select_db("job") or die ("coul not find db");

include 'connect/connect.php';

$output = '';
if(isset($_POST['search'])){
    $searchq = $_POST['search'];
    //checck is a number
    $searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);

    $query = mysql_query($conn, "SELECT * FROM JOBS WHERE JOB_TITLE LIKE '%$searchq%' or LOCATION LIKE '%$searchq%'") or die ("could not search");

    $count = mysql_num_rows($query);
    if($count == 0){
        $output = 'no results!';

    }else{

      
              //3. Use returned data 
              while($row = mysqli_fetch_array($query))
                {
                  $JOB_TITLE = $row['JOB_TITLE'];
                  $JOB_TYPE = $row['JOB_TYPE'];
                  $REF = $row['REF'];

                  $output .='<div>'.$JOB_TITLE.' '.$JOB_TYPE.'</div>';
                  

        
      }
    }
}
?>

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

                    <form action="search.std.php" method="post" class="filter-form">
                        <div class="first-row">
                          <div class="col form-group">
                            <div class="row">

                                <div class="col-lg-4 sm-12 d-none d-lg-block">
                                  <div class="card shadow mb-3 bg-light">
                                  <a class="card-header" href="stips.php"><h4>Student tips</h4></a>
                                  <div class="card-body">
                                    <p class="card-text">
                    </form>
                                       
                                             <input type="text" class="form-control" name="search" id="search" placeholder="Search"><br>
                                             <button type="submit" name="search" class="w-100 btn btn-info search">Search</button><br><br><hr>
                                             
                                             <br><div class="container">
                                             <a class="text-info float-left" href="index.php">Home</a><br><br>
                                             <a class="text-info float-left" href="stips.php">Student tips</a><br><br>
                                             <a class="text-info float-left" href="cv_template.php">CV Template</a><br><br>
                                             <a class="text-info float-left" href="check.php">CV Checklist</a><br><br>
                                             <a class="text-info float-left" href="cvgrad.php">The graduate's guide to CVs</a><br><br>
                                             <a class="text-info float-left" href="mock.php">Mock interview</a><br><br>
                                             <a class="text-info float-left" href="coverletter.php">Cover Letter</a><br><br>
                                             <a class="text-info float-left" href="events.php">Upcomming Events</a><br><br>

                                            <br><br><br><br><br>



                                        </form>

                                        
                                 </p>
                                  </div>  
                                  </div>
                              </div>
                                     
                          </div>