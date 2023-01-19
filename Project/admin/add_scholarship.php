
   <!-- Start of Header -->
   <?php  include_once("includes/header.php"); ?>
   <!-- End of Header -->
   
   
    <!-- Start of Nav -->
    <?php  include_once("includes/nav.php"); ?>
    <!-- End of Nav -->

    <!-- Start of Main Content -->
    <div id="layoutSidenav">
            
            <!-- Start of Sidebar -->
            <?php include_once("includes/sidebar.php") ?>
            <!-- End of Sidebar -->

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="p-3"><?php require_once("includes/messages.php") ?></div>
                        <h2 class="mt-1">Add Scholarship Details</h2>
                        <ol class="breadcrumb mb-4 bg-light p-2">
                            <li class="breadcrumb-item active"><i class="fa fa-plus-circle"></i> Add Scholarship Details</li>
                        </ol>
                        <div class="card shadow-sm bg-white p-2">
                            <div class="card-body p-3">
                                <form id="form" action="classes/scholarship.php" method="POST" enctype="multipart/form-data">
                                    <p class="text-dark bg-light p-3">Please provide valid information for scholarship</p>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">

                                            <div class="form-group mb-2 mt-2">
                                            <label>Select Consultant/Agent You want to Assign for this scholarship<span class="text-danger">*</span></label>


                                                <select name="agent_id" required class="form-select">
                                                <option value="">--Select Agent--</option>
                                                    <?php 
                                                    
                                                        $query = "SELECT * FROM agents";
                                                        $result = $db->executeQuery($query);
                                                        
                                                        if($result->num_rows){
                                                            while($row = mysqli_fetch_assoc($result)){
                                                                ?>
                                                                <option value="<?php echo $row['agent_id'] ?>"><?php echo $row['name'] ?></option>
                                                                <?php
                                                            }
                                                        }else {
                                                        ?>
                                                        <option value="">No Agents Found</option>
                                                        <?php
                                                        }
                                                    ?>
                                                </select>
                                               
                                             </div>

                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">

                                            <div class="form-group mb-2 mt-2">
                                                <label>Insititute  / University Name<span class="text-danger">*</span></label>
                                                <input type="text" name="institute_name" class="form-control" required placeholder="E.g University of Sindh"/>
                                                
                                             </div>

                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">

                                            <div class="form-group mb-2 mt-2">
                                                <label>Country Name <span class="text-danger">*</span></label>
                                                <input type="text" name="country" placeholder="E.g Pakistan" class="form-control" required/>
                                        
                                            </div>

                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">

                                           <div class="form-group mb-2 mt-2">
                                                <label>City/AreaName<span class="text-danger">*</span></label>
                                                <input type="text" name="city_name" placeholder="E.g Karachi" class="form-control" required/>
                                        
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">

                                            <div class="form-group mb-2 mt-2">
                                            <label>Select Degree Title<span class="text-danger">*</span></label>


                                                <select name="degree_id" required class="form-select">
                                                <option value="">--Select Degree--</option>
                                                    <?php 
                                                    
                                                        $query = "SELECT * FROM degrees";
                                                        $result = $db->executeQuery($query);
                                                        
                                                        if($result->num_rows){
                                                            while($row = mysqli_fetch_assoc($result)){
                                                                ?>
                                                                <option value="<?php echo $row['degree_id'] ?>"><?php echo $row['degree_name'] ?></option>
                                                                <?php
                                                            }
                                                        }else {
                                                        ?>
                                                        <option value="">No Degrees Found</option>
                                                        <?php
                                                        }
                                                    ?>
                                                </select>
                                               
                                             </div>

                                        </div>

                                    </div>

                                    
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">

                                            <div class="form-group mb-2 mt-2">
                                                <label>Qualification / Field / Expertise <span class="text-danger">*</span></label>
                                                <input type="text" name="qualification" class="form-control" placeholder="E.g Software Enginnering" required="required"/>
                                        
                                            </div>

                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">

                                        <div class="form-group mb-2 mt-2">
                                                <label>Minimum Ilets Score <span class="form-text text-warning">(Optional)</span></label>
                                                <input type="number" min="0" max="10" step="0.1" name="ilets_score" class="form-control" required placeholder="E.g 8.5"/>
                                                <span class="form-text text-success">Ilets Score must be less or equal to 10</span>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">

                                            <div class="form-group mb-2 mt-2">
                                                <label>Minimum CGPA<span class="text-danger">*</span></label>
                                               <input type="number" min=0 max="4" step="0.1" name="cgpa" class="form-control" required placeholder="E.g 3.4"/>
                                               <span class="form-text text-success">cpga must be less than or equal to 4.0</span>
                                            </div>

                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">

                                        <div class="form-group mb-2 mt-2">
                                                <label>Course Duration<span class="text-danger">*</span></label>
                                               <input type="number" min="1" step="1"  name="duration" class="form-control" required placeholder="Course Duration"/>
                                               <span class="form-text text-success">please enter duration in months. E.g 12 = 1year</span>
                                            </div>


                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">

                                            <div class="form-group mb-2 mt-2">
                                            <label>In which language course is?<span class="text-danger">*</span></label>
                                              <select name="language" required class="form-select">
                                                <option value="">--Select Language---</option>
                                                <?php 
                                                    
                                                    $query = "SELECT * FROM languages";
                                                    $result = $db->executeQuery($query);
                                                    
                                                    if($result->num_rows){
                                                        while($row = mysqli_fetch_assoc($result)){
                                                            ?>
                                                            <option value="<?php echo $row['lang_id'] ?>"><?php echo $row['lang_name'] ?></option>
                                                            <?php
                                                        }
                                                    }else {
                                                    ?>
                                                    <option value="">No Langauges Found</option>
                                                    <?php
                                                    }
                                                ?>
                                              </select>
                                            </div>

                                        </div>
                                       

                                       
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">

                                            <div class="form-group">
                                                <label class="">Scholarship Details <span class="text-danger">*</span></label>
                                                <textarea id="textarea" name="details" class="form-control" required placeholder="Enter Scholarship Details"></textarea>
                                            </div>

                                        </div>
                                      
                                    </div>

                                    <div class="row mb-2 mt-2">
                                      
                                        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                                           <div class="form-group">
                                            <label>Deadline Date <span class="text-danger">*</span></label>
                                            <input type="date" name="deadline" class="form-control" required/>
                                           </div>
                                        </div>
                                      
                                    </div>

                                    <div class="row mt-2">
                                         <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label>Institute Logo <span class="text-danger">*</span></label>
                                                <input type="file" name="logo" accept="image/*" class="form-control" required/>
                                                <span class="form-text text-success">please select valid logo image of institute</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
                                            <label>Institute Image/Cover  <span class="text-danger">*</span></label>
                                            <input type="file" name="image" accept="image/*" class="form-control" required />
                                            <span class="form-text text-success">please select institute image cover picture</span>
                                        </div>
                                    </div>

                                    <div class="form-group mb-2 mt-2">
                                        <label>University Offical Website LInk<span class="text-danger">*</span></label>
                                        <input type="url" name="link" required placeholder="Please enter valid url"/>
                                        <span class="form-text">please provide valid official website link</span>
                                    </div>
                                    
                                    <div class="form-group mb-2 mt-2">
                                        <label>Scholarship Course Price<span class="text-danger">*</span></label>
                                        <input type="number" name="price" required placeholder="Please enter price"/>
                                        <span class="form-text">please enter price in numbers only</span>
                                    </div>
                                
                                    <div class="form-group mb-2 mt-2 offset-md-10">
                                       <button type="submit" class="btn btn-danger btn-sm" name="add_scholarship">Save & Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
    <!-- End of Main Content -->
    <!-- Start of Footer -->
    <?php  include_once("includes/footer.php") ?>
    <!-- End of Footer -->       