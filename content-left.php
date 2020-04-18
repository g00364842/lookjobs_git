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
                            <div class="row">
                                <div class="col-4">
                                    



                                 <div class="card shadow mb-3 bg-light">
                                  <h4 class="card-header">Find you career</h4>
                                  <div class="card-body">
                                    <p class="card-text">
                                       <form action="#.php" method="post" class="filter-form">
                                     <input type="text" class="form-control" name="keyword" id="keyword" placeholder="Search"><br>
                                     <a href="#" class="w-100 btn btn-info float-right">Search</a><br><br><hr>

                                     <br>
                                     <a class="text-info float-left" href="alloffers.php">All Offers</a><br><br>
                                     <a class="text-info float-left" href="fulltime.php">Full-Time Jobs</a><br><br>
                                     <a class="text-info float-left" href="parttime.php">Part-Time Jobs</a><br><br>
                                     <a class="text-info float-left" href="summer.php">Summer Jobs</a><br><br>
                                     <a class="text-info float-left" href="internship.php">Internship</a><br><br>
                                     <a class="text-info float-left" href="graduate.php">Graduate Programmes</a><br><br>
                                     <a class="text-info float-left" href="abroad.php">Abroad</a><br><br>
                                     <a class="text-info float-left" href="volunteer.php">Volunteer Jobs</a><br><br>
                                     <a class="text-info float-left" href="project.php">Projects</a><br><br>
                                 </form>
                                 </p>
                                    
                                  </div>
                              </div>



                                  <div class="card shadow mb-3 bg-light">
                                  <h4 class="card-header">Filter by:</h4>
                                  <div class="card-body">
                                    <p class="card-text">

                                       <div class="col form-group">
                                      <select class="w-100" name="LOCATION" id="LOCATION">
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
                                    </div>

                                     <div class="col form-group">
                                      <select class="w-100" name="CATEGORY" id="CATEGORY" multiple>
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
                                        <option value="Social & Not Profit" <?php if($cat['CATEGORY'] == "Social & Not Profit") { echo "SELECTED"; } ?>>Social & Not Profit</optionz>
                                        <option value="Telecoms" <?php if($cat['CATEGORY'] == "Telecoms") { echo "SELECTED"; } ?>>Telecoms</option>
                                        <option value="Tourism, Travel & Airlines" <?php if($cat['CATEGORY'] == "Tourism, Travel & Airlines") { echo "SELECTED"; } ?>>Tourism, Travel & Airlines</option>
                                        <option value="Transport, warehousing & Motor" <?php if($cat['CATEGORY'] == "Transport, warehousing & Motor") { echo "SELECTED"; } ?>>Transport, warehousing & Motor</option>
                                      </select>
                                    </div> 

                                    </p>
                                    <a href="#" class="w-100 btn btn-info float-right">Search</a>
                                  </div>
                                </div>

